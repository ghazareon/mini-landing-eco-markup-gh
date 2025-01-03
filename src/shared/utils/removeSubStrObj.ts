/*
 * Author: Hayk Ghazaryan
 * Email: hayk.ghazaryanc@gmail.com
 * GitHub: https://github.com/ghazareon/mini-landing-eco-markup-gh
 * Date: January 2025
 */

import { removeSubStr } from "./removeSubStr.ts";
import type { s, IObj } from "../types";

export const removeSubStrObj = (
	data: IObj<s>,
	removeSubStrArr: s[] = ["/", "<alpha-value>"],
) =>
	Object.keys(data).reduce(
		(accum: IObj<s>, curr) => ({
			...accum,
			[curr]: removeSubStr(data[curr], removeSubStrArr),
		}),
		{},
	);
