/*
 * Author: Hayk Ghazaryan
 * Email: hayk.ghazaryanc@gmail.com
 * GitHub: https://github.com/ghazareon/mini-landing-eco-markup-gh
 * Date: January 2025
 */

import type { s } from "../types";

export const removeSubStr = (str: s, subStr: s[]) =>
	subStr.reduce((acc, curr) => acc.replace(new RegExp(curr, "gi"), ""), str);
