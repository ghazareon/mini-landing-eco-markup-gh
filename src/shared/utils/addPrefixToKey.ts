/*
 * Author: Hayk Ghazaryan
 * Email: hayk.ghazaryanc@gmail.com
 * GitHub: https://github.com/ghazareon/mini-landing-eco-markup-gh
 * Date: January 2025
 */

import type { s, n, IObj } from "../types";

export const addPrefixToKey = (data: IObj<n>, prefix: s) =>
 Object.keys(data).reduce(
  (acc, curr) => ({
   ...acc,
   [`${prefix}-${curr}`]: data[curr]
  }),
  {}
 );
