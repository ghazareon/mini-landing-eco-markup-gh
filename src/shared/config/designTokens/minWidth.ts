/*
 * Author: Hayk Ghazaryan
 * Email: hayk.ghazaryanc@gmail.com
 * GitHub: https://github.com/ghazareon/mini-landing-eco-markup-gh
 * Date: January 2025
 */

/* prettier-ignore */ import { layoutGrid }         from "../../config/const";
/* prettier-ignore */ import { valPropsByAdaptive } from "../../utils";

export const minWidth = Object.assign(
	valPropsByAdaptive(layoutGrid, "width", true, false),
	{
		"200": "20rem",
		"300": "30rem",
	},
);
