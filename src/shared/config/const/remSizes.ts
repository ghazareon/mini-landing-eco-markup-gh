/*
 * Author: Hayk Ghazaryan
 * Email: hayk.ghazaryanc@gmail.com
 * GitHub: https://github.com/ghazareon/mini-landing-eco-markup-gh
 * Date: January 2025
 */

export const remSizes = {
	defaultBrowser: 16,
	relative: 62.5,
	get current() {
		return (this.defaultBrowser * this.relative) / 100;
	},
};
