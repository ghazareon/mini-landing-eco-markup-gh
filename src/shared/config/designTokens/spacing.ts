/*
 * Author: Hayk Ghazaryan
 * Email: hayk.ghazaryanc@gmail.com
 * GitHub: https://github.com/ghazareon/mini-landing-eco-markup-gh
 * Date: January 2025
 */

/* prettier-ignore */ import { layoutGrid }        from "../../config/const";
/* prettier-ignore */ import { valPropsByAdaptive,
																															addPrefixToKey }    from "../../utils";

/* prettier-ignore */
export const spacing = Object.assign(
	addPrefixToKey(valPropsByAdaptive(layoutGrid, "width", true, false), "w"),
	addPrefixToKey(valPropsByAdaptive(layoutGrid, "widthPure", true, false), "w-pure"),
	addPrefixToKey(valPropsByAdaptive(layoutGrid, "gutters", true, false), "gutters"),
	addPrefixToKey(valPropsByAdaptive(layoutGrid, "sides", true, false), "sides"),
 {
  "m9":    "-0.9rem",
  "87_3":  "8.733rem",
  "55p":   "55%",
  "m55p":  "-55%",
  "m52p":  "-52%"
 }
);
