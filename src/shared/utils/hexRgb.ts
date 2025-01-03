/*
 * Author: Hayk Ghazaryan
 * Email: hayk.ghazaryanc@gmail.com
 * GitHub: https://github.com/ghazareon/mini-landing-eco-markup-gh
 * Date: January 2025
 */

/* prettier-ignore */ import type { s } from "../types";

export const hexRgb = (hex: s) =>
	`${parseInt(hex.slice(1, 3), 16)} ${parseInt(hex.slice(3, 5), 16)} ${parseInt(hex.slice(5, 7), 16)}`;
