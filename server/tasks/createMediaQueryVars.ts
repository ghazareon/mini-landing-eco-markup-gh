/*
 * Author: Hayk Ghazaryan
 * Email: hayk.ghazaryanc@gmail.com
 * GitHub: https://github.com/ghazareon/mini-landing-eco-markup-gh
 * Date: January 2025
 */

/* prettier-ignore */ import fs                  from "node:fs/promises";
/* prettier-ignore */ import prettier            from "prettier";

/* prettier-ignore */ import { layoutGrid }      from "@/src/shared/config/const";
/* prettier-ignore */ import { toRem }           from "@/src/shared/utils";
/* prettier-ignore */ import { mediaQueryPaths } from "@/src/shared/config/const/paths";

/* prettier-ignore */ import type { s }          from "@/src/shared/types";

export const createMediaQueryVars = (data: typeof layoutGrid) =>
	JSON.stringify(
		Object.keys(data).reduce(
			(acc, curr) => ({
				...acc,
				[`$${curr}`]: toRem(data[curr as keyof typeof data]["breakPoint"], true),
			}),
			{},
		),
	)
		.replace(/[{}'"]/g, "")
		.replaceAll(",", ";");

const writeToFile = async (result: s, pathToFile: s) => {
	fs.writeFile(pathToFile, await prettier.format(result, { parser: "scss" }));
};

writeToFile(createMediaQueryVars(layoutGrid), mediaQueryPaths.outFile);
