/*
 * Author: Hayk Ghazaryan
 * Email: hayk.ghazaryanc@gmail.com
 * GitHub: https://github.com/ghazareon/mini-landing-eco-markup-gh
 * Date: January 2025
 */

import { toRem } from "./toRem";
import type { s, n, b, IObjNest, f2o1 } from "@/src/shared/types";

export const valPropsByAdaptive = (
	data: IObjNest<n>,
	propName: s,
	isRun: b = true,
	isMedia: b = true,
	convertFunc: f2o1<n, b, s> = toRem,
) =>
	Object.keys(data).reduce(
		(acc, curr) => ({
			...acc,
			[curr]: isRun
				? convertFunc(data[curr][propName], (isMedia = isMedia))
				: data[curr][propName],
		}),
		{},
	);
