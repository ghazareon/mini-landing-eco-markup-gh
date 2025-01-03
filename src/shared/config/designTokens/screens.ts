/*
 * Author: Hayk Ghazaryan
 * Email: hayk.ghazaryanc@gmail.com
 * GitHub: https://github.com/ghazareon/mini-landing-eco-markup-gh
 * Date: January 2025
 */

/* prettier-ignore */ import { layoutGridBase }      from "../const/layoutGrid";
/* prettier-ignore */ import { toRem }               from "../../utils";

/* prettier-ignore */ import type { IObjNest, s }    from "../../types";

export const screens = Object.keys(layoutGridBase).reduce(
	(acc: IObjNest<s>, curr: s) => ({
		...acc,
		[curr]: {
			max: toRem(layoutGridBase[curr as keyof typeof layoutGridBase].width, true),
		},
	}),
	{},
);
