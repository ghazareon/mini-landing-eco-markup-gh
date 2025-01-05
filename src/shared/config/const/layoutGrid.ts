/*
 * Author: Hayk Ghazaryan
 * Email: hayk.ghazaryanc@gmail.com
 * GitHub: https://github.com/ghazareon/mini-landing-eco-markup-gh
 * Date: January 2025
 */

/* prettier-ignore */ import type { IObjNest, n } from "../../types";

/* prettier-ignore */
export const layoutGridBase = {

	/* ----- xl ----- */
 xl: {
  width:     1344,
  gutters:   40,
  sides:     32,
  breakPointSpace:  0
 },

 xlx: {
  width:     1244,
  gutters:   32,
  sides:     32,
  breakPointSpace:  0
 },

 xlxx: {
  width:     1144,
  gutters:   28,
  sides:     28,
  breakPointSpace:  0
 },

/* ----- lg ----- */
 lg: {
  width:     1024,
  gutters:   24,
  sides:     32,
  breakPointSpace:  0
 },

 lgx: {
  width:     924,
  gutters:   24,
  sides:     24,
  breakPointSpace: 0
 },

 lgxx: {
  width:     824,
  gutters:   24,
  sides:     22,
  breakPointSpace: 0
 },

/* ----- md ----- */
 md: {
  width:     768,
  gutters:   20,
  sides:     22,
  breakPointSpace: 0
 },

 mdx: {
  width:     668,
  gutters:   20,
  sides:     20,
  breakPointSpace: 0
 },

 mdxx: {
  width:     568,
  gutters:   12,
  sides:     20,
  breakPointSpace: 0
 },

 mdxxx: {
  width:     468,
  gutters:   12,
  sides:     18,
  breakPointSpace: 0
 },

 mdxxxx: {
  width:     368,
  gutters:   12,
  sides:     16,
  breakPointSpace: 0
 },

	/* ----- sm ----- */
 sm: {
  width:     320,
  gutters:   8,
  sides:     14,
  breakPointSpace:  0
 },
};

export const layoutGrid = ((data: IObjNest<n>) =>
 Object.keys(data).reduce(
  (acc, curr, i) => ({
   ...acc,
   [curr]: {
    ...data[curr],
    ...((itData) => ({
     id: i,
     widthPure: itData.width - 2 * itData.sides,
     breakPoint: itData.width + 2 * itData.breakPointSpace
    }))(data[curr])
   }
  }),
  {}
 ))(layoutGridBase);
