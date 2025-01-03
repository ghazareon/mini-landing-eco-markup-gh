/*
 * Author: Hayk Ghazaryan
 * Email: hayk.ghazaryanc@gmail.com
 * GitHub: https://github.com/ghazareon/mini-landing-eco-markup-gh
 * Date: January 2025
 */

/* prettier-ignore */ import fs                     from "node:fs/promises";
/* prettier-ignore */ import prettier               from "prettier";
/* prettier-ignore */ import { browserConfigPaths } from "@/src/shared/config/const";
/* prettier-ignore */ import appDb                  from "@/src/shared/data/appDb.json";
/* prettier-ignore */ import browserConfigDb        from "@/src/shared/data/browserConfigDb.json";

/* prettier-ignore */ import type { s }             from "@/src/shared/types";

export const createBrowserConfig = (
	browserConfigData: typeof browserConfigDb,
	appData: typeof appDb,
) => {
	const { tags } = browserConfigData;
	const { appThemeColor } = appData;
	const { picInDir } = browserConfigPaths;

	return `<?xml version="1.0" encoding="utf-8"?>
 <browserconfig>
  <msapplication>
   <tile>
     ${tags.reduce((acc, { name, fileName }) => acc + `<${name} src="${picInDir}/${fileName}" />`, "")}
    <TileColor>
 				${appThemeColor}
 			</TileColor>
   </tile>
  </msapplication>
 </browserconfig>`;
};

const writeToFile = async (result: s, pathToFile: s) => {
	fs.writeFile(
		pathToFile,
		await prettier.format(`${result}`, {
			parser: "html",
		}),
	);
};

writeToFile(
	createBrowserConfig(browserConfigDb, appDb),
	browserConfigPaths.outFile,
);
