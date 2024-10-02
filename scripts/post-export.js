#!/usr/bin/env node

import * as dotenv from "dotenv"
import fs from "node:fs/promises"
import path from "node:path"
import { URL, fileURLToPath } from "node:url"

const here = (uri = "") => fileURLToPath(new URL(uri, import.meta.url))

dotenv.config();

const appUrl = process.env.APP_URL;
const prodUrl = process.env.PROD_URL;

const exportFolder = here("../storage/export/");

const files = await fs.readdir(exportFolder, {
    recursive: true,
    encoding: "utf8",
    withFileTypes: true,
});

for (const file of files) {
    if (!file.isFile() || !/\.(css|js|html)$/.test(file.name)) {
        continue;
    }

    const filePath = path.resolve(file.parentPath, file.name)
        .replaceAll("\\", "/");

    const buffer = await fs.readFile(filePath);
    const content = buffer.toString();
    const updatedContent = content.replaceAll(appUrl, prodUrl);
    await fs.writeFile(filePath, updatedContent);
}
