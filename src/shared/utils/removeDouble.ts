/*
 * Author: Hayk Ghazaryan
 * Email: hayk.ghazaryanc@gmail.com
 * GitHub: https://github.com/ghazareon/mini-landing-eco-markup-gh
 * Date: January 2025
 */

/* prettier-ignore */ import type { s } from "../types";

export const removeDouble = (arr: s[]) =>
	arr.filter((it, i) => arr.indexOf(it) === i);
