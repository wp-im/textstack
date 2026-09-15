#!/usr/bin/env bash
set -euo pipefail

root="$(CDPATH='' cd -- "$(dirname -- "$0")/.." && pwd)"
version="${1:-1.0.4}"
build_dir="$root/build"
zip_path="$build_dir/textstack-$version.zip"
sha_path="$zip_path.sha256"

mkdir -p "$build_dir"
python3 - "$root" "$zip_path" <<'PY'
import os
import sys
import zipfile
from pathlib import Path

root = Path(sys.argv[1]).resolve()
zip_path = Path(sys.argv[2]).resolve()
excluded_names = {
    ".git", ".gitignore", ".distignore", ".DS_Store", "build", "docs", "scripts", "site-assets",
    "README.md", "AGENTS.md", "CLAUDE.md",
}
excluded_suffixes = (".log", ".sql", ".sqlite", ".sqlite3", ".db")

if zip_path.exists():
    zip_path.unlink()

with zipfile.ZipFile(zip_path, "w", compression=zipfile.ZIP_DEFLATED, compresslevel=9) as archive:
    files = []
    for path in root.rglob("*"):
        if not path.is_file():
            continue
        rel = path.relative_to(root)
        if any(part in excluded_names for part in rel.parts):
            continue
        if path.name.endswith(excluded_suffixes) or path.name.startswith(".env"):
            continue
        files.append(path)
    for path in sorted(files):
        rel = path.relative_to(root).as_posix()
        archive.write(path, "textstack/" + rel)

print(zip_path)
PY

shasum -a 256 "$zip_path" > "$sha_path"
echo "$sha_path"
