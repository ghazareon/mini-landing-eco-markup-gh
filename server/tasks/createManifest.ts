/*
 * Author: Hayk Ghazaryan
 * Email: hayk.ghazaryanc@gmail.com
 */

/* prettier-ignore */ import fs                from "node:fs/promises";
/* prettier-ignore */ import prettier          from "prettier";

/* prettier-ignore */ import manifestDb        from "@/src/shared/data/manifestDb.json";
/* prettier-ignore */ import appDb             from "@/src/shared/data/appDb.json";
/* prettier-ignore */ import { manifestPaths } from "@/src/shared/config/const/paths";
/* prettier-ignore */ import { getWhfromStr }  from "@/src/shared/utils";

/* prettier-ignore */ import type { s, IObj }  from "@/src/shared/types";

export const createManifest = (
 manifestData: IObj<s | s[]>,
 appData: IObj<s>,
 paths: IObj<s>,
 func = getWhfromStr
) => {
 const {
  name,
  short_name,
  display,
  description,
  categories,
  lang,
  orientation,
  scope,
  direction: dir
 } = manifestData;

 const { appThemeColor: background_color, appThemeColor: theme_color } = appData;

 return JSON.stringify({
  name,
  short_name,
  display,
  description,
  categories,
  lang,
  orientation,
  scope,
  dir,
  background_color,
  theme_color,

  icons: Array.isArray(manifestData.picFiles)
   ? manifestData.picFiles.map((fileName: s) => ({
      src: `${paths.picDir}/${fileName}`,
      size: (() => func(fileName))(),
      type: "image/png"
     }))
   : null
 });
};

const writeToFile = async (result: s, pathToFile: s) => {
 fs.writeFile(pathToFile, await prettier.format(result, { parser: "json" }));
};

writeToFile(createManifest(manifestDb, appDb, manifestPaths), manifestPaths.outFile);
