// ======================================================================
// Nicole Fenton Kirby 3
// ======================================================================

let mix = require("laravel-mix");

// ======================================================================
// Mix Settings
// ======================================================================

// Copy Files
// ======================================================================

mix.copyDirectory("src/fonts", "public/assets/fonts");
mix.copyDirectory("src/images/single", "public/assets/images");

// BrowserSync
// ======================================================================
mix.browserSync({
  proxy: "https://nf-kirby3.localhost",
  files: [
    "public/assets/js/**/*.js",
    "public/assets/css/**/*.css",
    "public/site/templates/*.php",
    "public/site/snippets/**/*.php",
    "public/site/plugins/**/*.php",
    "public/content/**/*.txt",
  ],
  notify: true,
});

// Javascript
// ======================================================================

mix
  .combine(["src/js/main.js"], "public/assets/js/main.js", true)
  .sourceMaps(true, "source-map");

mix
  .combine(
    ["src/js/vendor/modernizr.custom.js"],
    "public/assets/js/modernizr.custom.js",
    true
  )
  .sourceMaps(true, "source-map");

mix
  .combine(
    [
      "src/js/vendor/jquery.min.js",
      "src/js/vendor/velocity.min.js",
      "src/js/vendor/lazyload.min.js",
      "src/js/vendor/jquery.shuffle.min.js",
    ],
    "public/assets/js/plugins.js"
  )
  .sourceMaps(true, "source-map");

// SASS
// ======================================================================

mix
  .sass("src/sass/screen.scss", "public/assets/css", {
    sassOptions: {},
  })
  .sourceMaps(true, "source-map");

mix
  .sass("src/sass/print.scss", "public/assets/css", {
    sassOptions: {},
  })
  .sourceMaps(true, "source-map");

mix
  .sass("src/sass/ie.scss", "public/assets/css", {
    sassOptions: {},
  })
  .sourceMaps(true, "source-map");

mix
  .sass("src/sass/firstpaint.scss", "public/assets/css", {
    sassOptions: {},
  })
  .sourceMaps(true, "source-map");

// ======================================================================
// Mix Options
// ======================================================================
mix.options({
  processCssUrls: false,
  postCss: [],
});

// ======================================================================
// Custom Webpack Config
// ======================================================================
mix.webpackConfig({
  plugins: [],
});
