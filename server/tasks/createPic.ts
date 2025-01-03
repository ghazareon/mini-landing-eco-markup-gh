/*
 * Author: Hayk Ghazaryan
 * Email: hayk.ghazaryanc@gmail.com
 * GitHub: https://github.com/ghazareon/mini-landing-eco-markup-gh
 * Date: January 2025
 */

/* prettier-ignore */ import { readFile } from "node:fs";
/* prettier-ignore */ import sharp        from "sharp";
/* prettier-ignore */ import { picPaths } from "@/src/shared/config/const/paths";
/* prettier-ignore */ import { picData }  from "@/src/shared/data/picData";

/* prettier-ignore */ import type { s }   from "@/src/shared/types";

export const createPic = (data: typeof picData, fromDir: s, toDir: s) => {
	let index = 0;
	for (const key in data) {
		index++;
		data[key as keyof typeof data].forEach(
			({ name, size: { width, height } }) => {
				readFile(`./${fromDir}/${index}.png`, function (e, data) {
					sharp(data)
						.png({ compressionLevel: 5 })
						.resize({
							width,
							height,
						})
						.toFile(`./${toDir}/${name}`);
				});
			},
		);
	}
};

createPic(picData, picPaths.inDir, picPaths.outDir);
