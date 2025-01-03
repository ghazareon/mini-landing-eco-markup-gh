/*
 * Author: Hayk Ghazaryan
 * Email: hayk.ghazaryanc@gmail.com
 * GitHub: https://github.com/ghazareon/mini-landing-eco-markup-gh
 * Date: January 2025
 */

import type { s, n, IObj } from "../types";

export const keyPrefix = (obj: IObj<() => n>, preffix: s) =>
	Object.keys(obj).reduce(
		(accum: IObj<n>, curr) => ({
			...accum,
			[`${preffix ? preffix + "-" : ""}${curr}`]: obj[curr](),
		}),
		{},
	);
