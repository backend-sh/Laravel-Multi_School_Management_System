<style>
    /*!
 * easion - Bootstrap dashboard template based on Bootstrap 4
 * Version v1.0.1
 * Copyright 2016 - 2020 Mudimedia Software
 * https://mudimedia.com
 * 
 * Parts of this code were created by the Bootstrap team
 * and are available under MIT license at https://getbootstrap.com.
 * Bootstrap version: ^4.5.0
 */

/*!
 * Bootstrap v4.5.0 (https://getbootstrap.com/)
 * Copyright 2011-2020 The Bootstrap Authors
 * Copyright 2011-2020 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
:root {
  --blue: #007bff;
  --indigo: #6610f2;
  --purple: #6f42c1;
  --pink: #e83e8c;
  --red: #dc3545;
  --orange: #fd7e14;
  --yellow: #ffc107;
  --green: #28a745;
  --teal: #20c997;
  --cyan: #17a2b8;
  --white: #fff;
  --gray: #6c757d;
  --gray-dark: #343a40;
  --primary: #3F84FC;
  --secondary: #727F94;
  --success: #1DAB47;
  --info: #8A3FFC;
  --warning: #FCAE3F;
  --danger: #FC413F;
  --light: #f8f9fa;
  --dark: #1E232D;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --font-family-sans-serif: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }

*,
*::before,
*::after {
  -webkit-box-sizing: border-box;
          box-sizing: border-box; }

/* html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }

article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
  display: block; }

body {
  margin: 0;
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #515151;
  text-align: left;
  background-color: #fff; } */

[tabindex="-1"]:focus:not(:focus-visible) {
  outline: 0 !important; }

hr {
  -webkit-box-sizing: content-box;
          box-sizing: content-box;
  height: 0;
  overflow: visible; }

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 0.5rem; }

p {
  margin-top: 0;
  margin-bottom: 1rem; }

abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0;
  -webkit-text-decoration-skip-ink: none;
          text-decoration-skip-ink: none; }

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit; }

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem; }

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0; }

dt {
  font-weight: 700; }

dd {
  margin-bottom: .5rem;
  margin-left: 0; }

blockquote {
  margin: 0 0 1rem; }

b,
strong {
  font-weight: bolder; }

small {
  font-size: 80%; }

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline; }

sub {
  bottom: -.25em; }

sup {
  top: -.5em; }

a {
  color: #3F84FC;
  text-decoration: none;
  background-color: transparent; }
  a:hover {
    color: #0458eb;
    text-decoration: underline; }

a:not([href]) {
  color: inherit;
  text-decoration: none; }
  a:not([href]):hover {
    color: inherit;
    text-decoration: none; }

pre,
code,
kbd,
samp {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  font-size: 1em; }

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  -ms-overflow-style: scrollbar; }

figure {
  margin: 0 0 1rem; }

img {
  vertical-align: middle;
  border-style: none; }

svg {
  overflow: hidden;
  vertical-align: middle; }

table {
  border-collapse: collapse; }

caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #6c757d;
  text-align: left;
  caption-side: bottom; }

th {
  text-align: inherit; }

label {
  display: inline-block;
  margin-bottom: 0.5rem; }

button {
  border-radius: 0; }

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color; }

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit; }

button,
input {
  overflow: visible; }

button,
select {
  text-transform: none; }

[role="button"] {
  cursor: pointer; }

select {
  word-wrap: normal; }

button,
[type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button; }

button:not(:disabled),
[type="button"]:not(:disabled),
[type="reset"]:not(:disabled),
[type="submit"]:not(:disabled) {
  cursor: pointer; }

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  padding: 0;
  border-style: none; }

input[type="radio"],
input[type="checkbox"] {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  padding: 0; }

textarea {
  overflow: auto;
  resize: vertical; }

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0; }

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal; }

progress {
  vertical-align: baseline; }

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto; }

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: none; }

[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none; }

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button; }

output {
  display: inline-block; }

summary {
  display: list-item;
  cursor: pointer; }

template {
  display: none; }

[hidden] {
  display: none !important; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  margin-bottom: 0.5rem;
  font-weight: 500;
  line-height: 1.2; }

h1, .h1 {
  font-size: 2.5rem; }

h2, .h2 {
  font-size: 2rem; }

h3, .h3 {
  font-size: 1.75rem; }

h4, .h4 {
  font-size: 1.5rem; }

h5, .h5 {
  font-size: 1.25rem; }

h6, .h6 {
  font-size: 1rem; }

.lead {
  font-size: 1.25rem;
  font-weight: 300; }

.display-1 {
  font-size: 6rem;
  font-weight: 300;
  line-height: 1.2; }

.display-2 {
  font-size: 5.5rem;
  font-weight: 300;
  line-height: 1.2; }

.display-3 {
  font-size: 4.5rem;
  font-weight: 300;
  line-height: 1.2; }

.display-4 {
  font-size: 3.5rem;
  font-weight: 300;
  line-height: 1.2; }

hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1); }

small,
.small {
  font-size: 80%;
  font-weight: 400; }

mark,
.mark {
  padding: 0.2em;
  background-color: #fcf8e3; }

.list-unstyled {
  padding-left: 0;
  list-style: none; }

.list-inline {
  padding-left: 0;
  list-style: none; }

.list-inline-item {
  display: inline-block; }
  .list-inline-item:not(:last-child) {
    margin-right: 0.5rem; }

.initialism {
  font-size: 90%;
  text-transform: uppercase; }

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem; }

.blockquote-footer {
  display: block;
  font-size: 80%;
  color: #6c757d; }
  .blockquote-footer::before {
    content: "\2014\00A0"; }

.img-fluid {
  max-width: 100%;
  height: auto; }

.img-thumbnail {
  padding: 0.25rem;
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-radius: 0;
  max-width: 100%;
  height: auto; }

.figure {
  display: inline-block; }

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1; }

.figure-caption {
  font-size: 90%;
  color: #6c757d; }

code {
  font-size: 87.5%;
  color: #e83e8c;
  word-wrap: break-word; }
  a > code {
    color: inherit; }

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 87.5%;
  color: #fff;
  background-color: #212529;
  border-radius: 0.2rem; }
  kbd kbd {
    padding: 0;
    font-size: 100%;
    font-weight: 700; }

pre {
  display: block;
  font-size: 87.5%;
  color: #212529; }
  pre code {
    font-size: inherit;
    color: inherit;
    word-break: normal; }

.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll; }

.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto; }
  @media (min-width: 576px) {
    .container {
      max-width: 540px; } }
  @media (min-width: 768px) {
    .container {
      max-width: 720px; } }
  @media (min-width: 992px) {
    .container {
      max-width: 960px; } }
  @media (min-width: 1200px) {
    .container {
      max-width: 1140px; } }

.container-fluid, .container-sm, .container-md, .container-lg, .container-xl {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto; }

@media (min-width: 576px) {
  .container, .container-sm {
    max-width: 540px; } }

@media (min-width: 768px) {
  .container, .container-sm, .container-md {
    max-width: 720px; } }

@media (min-width: 992px) {
  .container, .container-sm, .container-md, .container-lg {
    max-width: 960px; } }

@media (min-width: 1200px) {
  .container, .container-sm, .container-md, .container-lg, .container-xl {
    max-width: 1140px; } }

.row {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
          flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px; }

.no-gutters {
  margin-right: 0;
  margin-left: 0; }
  .no-gutters > .col,
  .no-gutters > [class*="col-"] {
    padding-right: 0;
    padding-left: 0; }

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  padding-right: 15px;
  padding-left: 15px; }

.col {
  -webkit-flex-basis: 0;
      -ms-flex-preferred-size: 0;
          flex-basis: 0;
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  min-width: 0;
  max-width: 100%; }

.row-cols-1 > * {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 100%;
      -ms-flex: 0 0 100%;
          flex: 0 0 100%;
  max-width: 100%; }

.row-cols-2 > * {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 50%;
      -ms-flex: 0 0 50%;
          flex: 0 0 50%;
  max-width: 50%; }

.row-cols-3 > * {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 33.33333%;
      -ms-flex: 0 0 33.33333%;
          flex: 0 0 33.33333%;
  max-width: 33.33333%; }

.row-cols-4 > * {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 25%;
      -ms-flex: 0 0 25%;
          flex: 0 0 25%;
  max-width: 25%; }

.row-cols-5 > * {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 20%;
      -ms-flex: 0 0 20%;
          flex: 0 0 20%;
  max-width: 20%; }

.row-cols-6 > * {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 16.66667%;
      -ms-flex: 0 0 16.66667%;
          flex: 0 0 16.66667%;
  max-width: 16.66667%; }

.col-auto {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 auto;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: auto;
  max-width: 100%; }

.col-1 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 8.33333%;
      -ms-flex: 0 0 8.33333%;
          flex: 0 0 8.33333%;
  max-width: 8.33333%; }

.col-2 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 16.66667%;
      -ms-flex: 0 0 16.66667%;
          flex: 0 0 16.66667%;
  max-width: 16.66667%; }

.col-3 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 25%;
      -ms-flex: 0 0 25%;
          flex: 0 0 25%;
  max-width: 25%; }

.col-4 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 33.33333%;
      -ms-flex: 0 0 33.33333%;
          flex: 0 0 33.33333%;
  max-width: 33.33333%; }

.col-5 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 41.66667%;
      -ms-flex: 0 0 41.66667%;
          flex: 0 0 41.66667%;
  max-width: 41.66667%; }

.col-6 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 50%;
      -ms-flex: 0 0 50%;
          flex: 0 0 50%;
  max-width: 50%; }

.col-7 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 58.33333%;
      -ms-flex: 0 0 58.33333%;
          flex: 0 0 58.33333%;
  max-width: 58.33333%; }

.col-8 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 66.66667%;
      -ms-flex: 0 0 66.66667%;
          flex: 0 0 66.66667%;
  max-width: 66.66667%; }

.col-9 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 75%;
      -ms-flex: 0 0 75%;
          flex: 0 0 75%;
  max-width: 75%; }

.col-10 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 83.33333%;
      -ms-flex: 0 0 83.33333%;
          flex: 0 0 83.33333%;
  max-width: 83.33333%; }

.col-11 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 91.66667%;
      -ms-flex: 0 0 91.66667%;
          flex: 0 0 91.66667%;
  max-width: 91.66667%; }

.col-12 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 100%;
      -ms-flex: 0 0 100%;
          flex: 0 0 100%;
  max-width: 100%; }

.order-first {
  -webkit-box-ordinal-group: 0;
  -webkit-order: -1;
      -ms-flex-order: -1;
          order: -1; }

.order-last {
  -webkit-box-ordinal-group: 14;
  -webkit-order: 13;
      -ms-flex-order: 13;
          order: 13; }

.order-0 {
  -webkit-box-ordinal-group: 1;
  -webkit-order: 0;
      -ms-flex-order: 0;
          order: 0; }

.order-1 {
  -webkit-box-ordinal-group: 2;
  -webkit-order: 1;
      -ms-flex-order: 1;
          order: 1; }

.order-2 {
  -webkit-box-ordinal-group: 3;
  -webkit-order: 2;
      -ms-flex-order: 2;
          order: 2; }

.order-3 {
  -webkit-box-ordinal-group: 4;
  -webkit-order: 3;
      -ms-flex-order: 3;
          order: 3; }

.order-4 {
  -webkit-box-ordinal-group: 5;
  -webkit-order: 4;
      -ms-flex-order: 4;
          order: 4; }

.order-5 {
  -webkit-box-ordinal-group: 6;
  -webkit-order: 5;
      -ms-flex-order: 5;
          order: 5; }

.order-6 {
  -webkit-box-ordinal-group: 7;
  -webkit-order: 6;
      -ms-flex-order: 6;
          order: 6; }

.order-7 {
  -webkit-box-ordinal-group: 8;
  -webkit-order: 7;
      -ms-flex-order: 7;
          order: 7; }

.order-8 {
  -webkit-box-ordinal-group: 9;
  -webkit-order: 8;
      -ms-flex-order: 8;
          order: 8; }

.order-9 {
  -webkit-box-ordinal-group: 10;
  -webkit-order: 9;
      -ms-flex-order: 9;
          order: 9; }

.order-10 {
  -webkit-box-ordinal-group: 11;
  -webkit-order: 10;
      -ms-flex-order: 10;
          order: 10; }

.order-11 {
  -webkit-box-ordinal-group: 12;
  -webkit-order: 11;
      -ms-flex-order: 11;
          order: 11; }

.order-12 {
  -webkit-box-ordinal-group: 13;
  -webkit-order: 12;
      -ms-flex-order: 12;
          order: 12; }

.offset-1 {
  margin-left: 8.33333%; }

.offset-2 {
  margin-left: 16.66667%; }

.offset-3 {
  margin-left: 25%; }

.offset-4 {
  margin-left: 33.33333%; }

.offset-5 {
  margin-left: 41.66667%; }

.offset-6 {
  margin-left: 50%; }

.offset-7 {
  margin-left: 58.33333%; }

.offset-8 {
  margin-left: 66.66667%; }

.offset-9 {
  margin-left: 75%; }

.offset-10 {
  margin-left: 83.33333%; }

.offset-11 {
  margin-left: 91.66667%; }

@media (min-width: 576px) {
  .col-sm {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    min-width: 0;
    max-width: 100%; }
  .row-cols-sm-1 > * {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%; }
  .row-cols-sm-2 > * {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%; }
  .row-cols-sm-3 > * {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.33333%;
        -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .row-cols-sm-4 > * {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%; }
  .row-cols-sm-5 > * {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%; }
  .row-cols-sm-6 > * {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.66667%;
        -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-sm-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: 100%; }
  .col-sm-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.33333%;
        -ms-flex: 0 0 8.33333%;
            flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-sm-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.66667%;
        -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-sm-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%; }
  .col-sm-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.33333%;
        -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-sm-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.66667%;
        -ms-flex: 0 0 41.66667%;
            flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-sm-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%; }
  .col-sm-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.33333%;
        -ms-flex: 0 0 58.33333%;
            flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-sm-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.66667%;
        -ms-flex: 0 0 66.66667%;
            flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-sm-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%; }
  .col-sm-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.33333%;
        -ms-flex: 0 0 83.33333%;
            flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-sm-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.66667%;
        -ms-flex: 0 0 91.66667%;
            flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-sm-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%; }
  .order-sm-first {
    -webkit-box-ordinal-group: 0;
    -webkit-order: -1;
        -ms-flex-order: -1;
            order: -1; }
  .order-sm-last {
    -webkit-box-ordinal-group: 14;
    -webkit-order: 13;
        -ms-flex-order: 13;
            order: 13; }
  .order-sm-0 {
    -webkit-box-ordinal-group: 1;
    -webkit-order: 0;
        -ms-flex-order: 0;
            order: 0; }
  .order-sm-1 {
    -webkit-box-ordinal-group: 2;
    -webkit-order: 1;
        -ms-flex-order: 1;
            order: 1; }
  .order-sm-2 {
    -webkit-box-ordinal-group: 3;
    -webkit-order: 2;
        -ms-flex-order: 2;
            order: 2; }
  .order-sm-3 {
    -webkit-box-ordinal-group: 4;
    -webkit-order: 3;
        -ms-flex-order: 3;
            order: 3; }
  .order-sm-4 {
    -webkit-box-ordinal-group: 5;
    -webkit-order: 4;
        -ms-flex-order: 4;
            order: 4; }
  .order-sm-5 {
    -webkit-box-ordinal-group: 6;
    -webkit-order: 5;
        -ms-flex-order: 5;
            order: 5; }
  .order-sm-6 {
    -webkit-box-ordinal-group: 7;
    -webkit-order: 6;
        -ms-flex-order: 6;
            order: 6; }
  .order-sm-7 {
    -webkit-box-ordinal-group: 8;
    -webkit-order: 7;
        -ms-flex-order: 7;
            order: 7; }
  .order-sm-8 {
    -webkit-box-ordinal-group: 9;
    -webkit-order: 8;
        -ms-flex-order: 8;
            order: 8; }
  .order-sm-9 {
    -webkit-box-ordinal-group: 10;
    -webkit-order: 9;
        -ms-flex-order: 9;
            order: 9; }
  .order-sm-10 {
    -webkit-box-ordinal-group: 11;
    -webkit-order: 10;
        -ms-flex-order: 10;
            order: 10; }
  .order-sm-11 {
    -webkit-box-ordinal-group: 12;
    -webkit-order: 11;
        -ms-flex-order: 11;
            order: 11; }
  .order-sm-12 {
    -webkit-box-ordinal-group: 13;
    -webkit-order: 12;
        -ms-flex-order: 12;
            order: 12; }
  .offset-sm-0 {
    margin-left: 0; }
  .offset-sm-1 {
    margin-left: 8.33333%; }
  .offset-sm-2 {
    margin-left: 16.66667%; }
  .offset-sm-3 {
    margin-left: 25%; }
  .offset-sm-4 {
    margin-left: 33.33333%; }
  .offset-sm-5 {
    margin-left: 41.66667%; }
  .offset-sm-6 {
    margin-left: 50%; }
  .offset-sm-7 {
    margin-left: 58.33333%; }
  .offset-sm-8 {
    margin-left: 66.66667%; }
  .offset-sm-9 {
    margin-left: 75%; }
  .offset-sm-10 {
    margin-left: 83.33333%; }
  .offset-sm-11 {
    margin-left: 91.66667%; } }

@media (min-width: 768px) {
  .col-md {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    min-width: 0;
    max-width: 100%; }
  .row-cols-md-1 > * {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%; }
  .row-cols-md-2 > * {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%; }
  .row-cols-md-3 > * {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.33333%;
        -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .row-cols-md-4 > * {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%; }
  .row-cols-md-5 > * {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%; }
  .row-cols-md-6 > * {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.66667%;
        -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-md-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: 100%; }
  .col-md-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.33333%;
        -ms-flex: 0 0 8.33333%;
            flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-md-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.66667%;
        -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-md-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%; }
  .col-md-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.33333%;
        -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-md-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.66667%;
        -ms-flex: 0 0 41.66667%;
            flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-md-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%; }
  .col-md-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.33333%;
        -ms-flex: 0 0 58.33333%;
            flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-md-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.66667%;
        -ms-flex: 0 0 66.66667%;
            flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-md-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%; }
  .col-md-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.33333%;
        -ms-flex: 0 0 83.33333%;
            flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-md-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.66667%;
        -ms-flex: 0 0 91.66667%;
            flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-md-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%; }
  .order-md-first {
    -webkit-box-ordinal-group: 0;
    -webkit-order: -1;
        -ms-flex-order: -1;
            order: -1; }
  .order-md-last {
    -webkit-box-ordinal-group: 14;
    -webkit-order: 13;
        -ms-flex-order: 13;
            order: 13; }
  .order-md-0 {
    -webkit-box-ordinal-group: 1;
    -webkit-order: 0;
        -ms-flex-order: 0;
            order: 0; }
  .order-md-1 {
    -webkit-box-ordinal-group: 2;
    -webkit-order: 1;
        -ms-flex-order: 1;
            order: 1; }
  .order-md-2 {
    -webkit-box-ordinal-group: 3;
    -webkit-order: 2;
        -ms-flex-order: 2;
            order: 2; }
  .order-md-3 {
    -webkit-box-ordinal-group: 4;
    -webkit-order: 3;
        -ms-flex-order: 3;
            order: 3; }
  .order-md-4 {
    -webkit-box-ordinal-group: 5;
    -webkit-order: 4;
        -ms-flex-order: 4;
            order: 4; }
  .order-md-5 {
    -webkit-box-ordinal-group: 6;
    -webkit-order: 5;
        -ms-flex-order: 5;
            order: 5; }
  .order-md-6 {
    -webkit-box-ordinal-group: 7;
    -webkit-order: 6;
        -ms-flex-order: 6;
            order: 6; }
  .order-md-7 {
    -webkit-box-ordinal-group: 8;
    -webkit-order: 7;
        -ms-flex-order: 7;
            order: 7; }
  .order-md-8 {
    -webkit-box-ordinal-group: 9;
    -webkit-order: 8;
        -ms-flex-order: 8;
            order: 8; }
  .order-md-9 {
    -webkit-box-ordinal-group: 10;
    -webkit-order: 9;
        -ms-flex-order: 9;
            order: 9; }
  .order-md-10 {
    -webkit-box-ordinal-group: 11;
    -webkit-order: 10;
        -ms-flex-order: 10;
            order: 10; }
  .order-md-11 {
    -webkit-box-ordinal-group: 12;
    -webkit-order: 11;
        -ms-flex-order: 11;
            order: 11; }
  .order-md-12 {
    -webkit-box-ordinal-group: 13;
    -webkit-order: 12;
        -ms-flex-order: 12;
            order: 12; }
  .offset-md-0 {
    margin-left: 0; }
  .offset-md-1 {
    margin-left: 8.33333%; }
  .offset-md-2 {
    margin-left: 16.66667%; }
  .offset-md-3 {
    margin-left: 25%; }
  .offset-md-4 {
    margin-left: 33.33333%; }
  .offset-md-5 {
    margin-left: 41.66667%; }
  .offset-md-6 {
    margin-left: 50%; }
  .offset-md-7 {
    margin-left: 58.33333%; }
  .offset-md-8 {
    margin-left: 66.66667%; }
  .offset-md-9 {
    margin-left: 75%; }
  .offset-md-10 {
    margin-left: 83.33333%; }
  .offset-md-11 {
    margin-left: 91.66667%; } }

@media (min-width: 992px) {
  .col-lg {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    min-width: 0;
    max-width: 100%; }
  .row-cols-lg-1 > * {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%; }
  .row-cols-lg-2 > * {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%; }
  .row-cols-lg-3 > * {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.33333%;
        -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .row-cols-lg-4 > * {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%; }
  .row-cols-lg-5 > * {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%; }
  .row-cols-lg-6 > * {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.66667%;
        -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-lg-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: 100%; }
  .col-lg-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.33333%;
        -ms-flex: 0 0 8.33333%;
            flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-lg-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.66667%;
        -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-lg-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%; }
  .col-lg-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.33333%;
        -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-lg-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.66667%;
        -ms-flex: 0 0 41.66667%;
            flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-lg-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%; }
  .col-lg-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.33333%;
        -ms-flex: 0 0 58.33333%;
            flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-lg-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.66667%;
        -ms-flex: 0 0 66.66667%;
            flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-lg-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%; }
  .col-lg-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.33333%;
        -ms-flex: 0 0 83.33333%;
            flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-lg-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.66667%;
        -ms-flex: 0 0 91.66667%;
            flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-lg-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%; }
  .order-lg-first {
    -webkit-box-ordinal-group: 0;
    -webkit-order: -1;
        -ms-flex-order: -1;
            order: -1; }
  .order-lg-last {
    -webkit-box-ordinal-group: 14;
    -webkit-order: 13;
        -ms-flex-order: 13;
            order: 13; }
  .order-lg-0 {
    -webkit-box-ordinal-group: 1;
    -webkit-order: 0;
        -ms-flex-order: 0;
            order: 0; }
  .order-lg-1 {
    -webkit-box-ordinal-group: 2;
    -webkit-order: 1;
        -ms-flex-order: 1;
            order: 1; }
  .order-lg-2 {
    -webkit-box-ordinal-group: 3;
    -webkit-order: 2;
        -ms-flex-order: 2;
            order: 2; }
  .order-lg-3 {
    -webkit-box-ordinal-group: 4;
    -webkit-order: 3;
        -ms-flex-order: 3;
            order: 3; }
  .order-lg-4 {
    -webkit-box-ordinal-group: 5;
    -webkit-order: 4;
        -ms-flex-order: 4;
            order: 4; }
  .order-lg-5 {
    -webkit-box-ordinal-group: 6;
    -webkit-order: 5;
        -ms-flex-order: 5;
            order: 5; }
  .order-lg-6 {
    -webkit-box-ordinal-group: 7;
    -webkit-order: 6;
        -ms-flex-order: 6;
            order: 6; }
  .order-lg-7 {
    -webkit-box-ordinal-group: 8;
    -webkit-order: 7;
        -ms-flex-order: 7;
            order: 7; }
  .order-lg-8 {
    -webkit-box-ordinal-group: 9;
    -webkit-order: 8;
        -ms-flex-order: 8;
            order: 8; }
  .order-lg-9 {
    -webkit-box-ordinal-group: 10;
    -webkit-order: 9;
        -ms-flex-order: 9;
            order: 9; }
  .order-lg-10 {
    -webkit-box-ordinal-group: 11;
    -webkit-order: 10;
        -ms-flex-order: 10;
            order: 10; }
  .order-lg-11 {
    -webkit-box-ordinal-group: 12;
    -webkit-order: 11;
        -ms-flex-order: 11;
            order: 11; }
  .order-lg-12 {
    -webkit-box-ordinal-group: 13;
    -webkit-order: 12;
        -ms-flex-order: 12;
            order: 12; }
  .offset-lg-0 {
    margin-left: 0; }
  .offset-lg-1 {
    margin-left: 8.33333%; }
  .offset-lg-2 {
    margin-left: 16.66667%; }
  .offset-lg-3 {
    margin-left: 25%; }
  .offset-lg-4 {
    margin-left: 33.33333%; }
  .offset-lg-5 {
    margin-left: 41.66667%; }
  .offset-lg-6 {
    margin-left: 50%; }
  .offset-lg-7 {
    margin-left: 58.33333%; }
  .offset-lg-8 {
    margin-left: 66.66667%; }
  .offset-lg-9 {
    margin-left: 75%; }
  .offset-lg-10 {
    margin-left: 83.33333%; }
  .offset-lg-11 {
    margin-left: 91.66667%; } }

@media (min-width: 1200px) {
  .col-xl {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    min-width: 0;
    max-width: 100%; }
  .row-cols-xl-1 > * {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%; }
  .row-cols-xl-2 > * {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%; }
  .row-cols-xl-3 > * {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.33333%;
        -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .row-cols-xl-4 > * {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%; }
  .row-cols-xl-5 > * {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%; }
  .row-cols-xl-6 > * {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.66667%;
        -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-xl-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: 100%; }
  .col-xl-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.33333%;
        -ms-flex: 0 0 8.33333%;
            flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-xl-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.66667%;
        -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-xl-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%; }
  .col-xl-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.33333%;
        -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-xl-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.66667%;
        -ms-flex: 0 0 41.66667%;
            flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-xl-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%; }
  .col-xl-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.33333%;
        -ms-flex: 0 0 58.33333%;
            flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-xl-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.66667%;
        -ms-flex: 0 0 66.66667%;
            flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-xl-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%; }
  .col-xl-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.33333%;
        -ms-flex: 0 0 83.33333%;
            flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-xl-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.66667%;
        -ms-flex: 0 0 91.66667%;
            flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-xl-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%; }
  .order-xl-first {
    -webkit-box-ordinal-group: 0;
    -webkit-order: -1;
        -ms-flex-order: -1;
            order: -1; }
  .order-xl-last {
    -webkit-box-ordinal-group: 14;
    -webkit-order: 13;
        -ms-flex-order: 13;
            order: 13; }
  .order-xl-0 {
    -webkit-box-ordinal-group: 1;
    -webkit-order: 0;
        -ms-flex-order: 0;
            order: 0; }
  .order-xl-1 {
    -webkit-box-ordinal-group: 2;
    -webkit-order: 1;
        -ms-flex-order: 1;
            order: 1; }
  .order-xl-2 {
    -webkit-box-ordinal-group: 3;
    -webkit-order: 2;
        -ms-flex-order: 2;
            order: 2; }
  .order-xl-3 {
    -webkit-box-ordinal-group: 4;
    -webkit-order: 3;
        -ms-flex-order: 3;
            order: 3; }
  .order-xl-4 {
    -webkit-box-ordinal-group: 5;
    -webkit-order: 4;
        -ms-flex-order: 4;
            order: 4; }
  .order-xl-5 {
    -webkit-box-ordinal-group: 6;
    -webkit-order: 5;
        -ms-flex-order: 5;
            order: 5; }
  .order-xl-6 {
    -webkit-box-ordinal-group: 7;
    -webkit-order: 6;
        -ms-flex-order: 6;
            order: 6; }
  .order-xl-7 {
    -webkit-box-ordinal-group: 8;
    -webkit-order: 7;
        -ms-flex-order: 7;
            order: 7; }
  .order-xl-8 {
    -webkit-box-ordinal-group: 9;
    -webkit-order: 8;
        -ms-flex-order: 8;
            order: 8; }
  .order-xl-9 {
    -webkit-box-ordinal-group: 10;
    -webkit-order: 9;
        -ms-flex-order: 9;
            order: 9; }
  .order-xl-10 {
    -webkit-box-ordinal-group: 11;
    -webkit-order: 10;
        -ms-flex-order: 10;
            order: 10; }
  .order-xl-11 {
    -webkit-box-ordinal-group: 12;
    -webkit-order: 11;
        -ms-flex-order: 11;
            order: 11; }
  .order-xl-12 {
    -webkit-box-ordinal-group: 13;
    -webkit-order: 12;
        -ms-flex-order: 12;
            order: 12; }
  .offset-xl-0 {
    margin-left: 0; }
  .offset-xl-1 {
    margin-left: 8.33333%; }
  .offset-xl-2 {
    margin-left: 16.66667%; }
  .offset-xl-3 {
    margin-left: 25%; }
  .offset-xl-4 {
    margin-left: 33.33333%; }
  .offset-xl-5 {
    margin-left: 41.66667%; }
  .offset-xl-6 {
    margin-left: 50%; }
  .offset-xl-7 {
    margin-left: 58.33333%; }
  .offset-xl-8 {
    margin-left: 66.66667%; }
  .offset-xl-9 {
    margin-left: 75%; }
  .offset-xl-10 {
    margin-left: 83.33333%; }
  .offset-xl-11 {
    margin-left: 91.66667%; } }

.table {
  width: 100%;
  margin-bottom: 1rem;
  color: #515151; }
  .table th,
  .table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6; }
  .table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6; }
  .table tbody + tbody {
    border-top: 2px solid #dee2e6; }

.table-sm th,
.table-sm td {
  padding: 0.3rem; }

.table-bordered {
  border: 1px solid #dee2e6; }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #dee2e6; }
  .table-bordered thead th,
  .table-bordered thead td {
    border-bottom-width: 2px; }

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody {
  border: 0; }

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.05); }

.table-hover tbody tr:hover {
  color: #515151;
  background-color: rgba(0, 0, 0, 0.075); }

.table-primary,
.table-primary > th,
.table-primary > td {
  background-color: #c9ddfe; }

.table-primary th,
.table-primary td,
.table-primary thead th,
.table-primary tbody + tbody {
  border-color: #9bbffd; }

.table-hover .table-primary:hover {
  background-color: #b0cdfe; }
  .table-hover .table-primary:hover > td,
  .table-hover .table-primary:hover > th {
    background-color: #b0cdfe; }

.table-secondary,
.table-secondary > th,
.table-secondary > td {
  background-color: #d8dbe1; }

.table-secondary th,
.table-secondary td,
.table-secondary thead th,
.table-secondary tbody + tbody {
  border-color: #b6bcc7; }

.table-hover .table-secondary:hover {
  background-color: #caced6; }
  .table-hover .table-secondary:hover > td,
  .table-hover .table-secondary:hover > th {
    background-color: #caced6; }

.table-success,
.table-success > th,
.table-success > td {
  background-color: #c0e7cb; }

.table-success th,
.table-success td,
.table-success thead th,
.table-success tbody + tbody {
  border-color: #89d39f; }

.table-hover .table-success:hover {
  background-color: #aee0bc; }
  .table-hover .table-success:hover > td,
  .table-hover .table-success:hover > th {
    background-color: #aee0bc; }

.table-info,
.table-info > th,
.table-info > td {
  background-color: #dec9fe; }

.table-info th,
.table-info td,
.table-info thead th,
.table-info tbody + tbody {
  border-color: #c29bfd; }

.table-hover .table-info:hover {
  background-color: #cfb0fe; }
  .table-hover .table-info:hover > td,
  .table-hover .table-info:hover > th {
    background-color: #cfb0fe; }

.table-warning,
.table-warning > th,
.table-warning > td {
  background-color: #fee8c9; }

.table-warning th,
.table-warning td,
.table-warning thead th,
.table-warning tbody + tbody {
  border-color: #fdd59b; }

.table-hover .table-warning:hover {
  background-color: #feddb0; }
  .table-hover .table-warning:hover > td,
  .table-hover .table-warning:hover > th {
    background-color: #feddb0; }

.table-danger,
.table-danger > th,
.table-danger > td {
  background-color: #fecac9; }

.table-danger th,
.table-danger td,
.table-danger thead th,
.table-danger tbody + tbody {
  border-color: #fd9c9b; }

.table-hover .table-danger:hover {
  background-color: #feb1b0; }
  .table-hover .table-danger:hover > td,
  .table-hover .table-danger:hover > th {
    background-color: #feb1b0; }

.table-light,
.table-light > th,
.table-light > td {
  background-color: #fdfdfe; }

.table-light th,
.table-light td,
.table-light thead th,
.table-light tbody + tbody {
  border-color: #fbfcfc; }

.table-hover .table-light:hover {
  background-color: #ececf6; }
  .table-hover .table-light:hover > td,
  .table-hover .table-light:hover > th {
    background-color: #ececf6; }

.table-dark,
.table-dark > th,
.table-dark > td {
  background-color: #c0c1c4; }

.table-dark th,
.table-dark td,
.table-dark thead th,
.table-dark tbody + tbody {
  border-color: #8a8d92; }

.table-hover .table-dark:hover {
  background-color: #b3b4b8; }
  .table-hover .table-dark:hover > td,
  .table-hover .table-dark:hover > th {
    background-color: #b3b4b8; }

.table-active,
.table-active > th,
.table-active > td {
  background-color: rgba(0, 0, 0, 0.075); }

.table-hover .table-active:hover {
  background-color: rgba(0, 0, 0, 0.075); }
  .table-hover .table-active:hover > td,
  .table-hover .table-active:hover > th {
    background-color: rgba(0, 0, 0, 0.075); }

.table .thead-dark th {
  color: #fff;
  background-color: #343a40;
  border-color: #454d55; }

.table .thead-light th {
  color: #495057;
  background-color: #e9ecef;
  border-color: #dee2e6; }

.table-dark {
  color: #fff;
  background-color: #343a40; }
  .table-dark th,
  .table-dark td,
  .table-dark thead th {
    border-color: #454d55; }
  .table-dark.table-bordered {
    border: 0; }
  .table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, 0.05); }
  .table-dark.table-hover tbody tr:hover {
    color: #fff;
    background-color: rgba(255, 255, 255, 0.075); }

@media (max-width: 575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; }
    .table-responsive-sm > .table-bordered {
      border: 0; } }

@media (max-width: 767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; }
    .table-responsive-md > .table-bordered {
      border: 0; } }

@media (max-width: 991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; }
    .table-responsive-lg > .table-bordered {
      border: 0; } }

@media (max-width: 1199.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; }
    .table-responsive-xl > .table-bordered {
      border: 0; } }

.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch; }
  .table-responsive > .table-bordered {
    border: 0; }

.form-control {
  display: block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0;
  -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .form-control {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
  .form-control::-ms-expand {
    background-color: transparent;
    border: 0; }
  .form-control:-moz-focusring {
    color: transparent;
    text-shadow: 0 0 0 #495057; }
  .form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #bdd4fe;
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(63, 132, 252, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(63, 132, 252, 0.25); }
  .form-control::-webkit-input-placeholder {
    color: #6c757d;
    opacity: 1; }
  .form-control::-moz-placeholder {
    color: #6c757d;
    opacity: 1; }
  .form-control:-ms-input-placeholder {
    color: #6c757d;
    opacity: 1; }
  .form-control::-ms-input-placeholder {
    color: #6c757d;
    opacity: 1; }
  .form-control::placeholder {
    color: #6c757d;
    opacity: 1; }
  .form-control:disabled, .form-control[readonly] {
    background-color: #e9ecef;
    opacity: 1; }

input[type="date"].form-control,
input[type="time"].form-control,
input[type="datetime-local"].form-control,
input[type="month"].form-control {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none; }

select.form-control:focus::-ms-value {
  color: #495057;
  background-color: #fff; }

.form-control-file,
.form-control-range {
  display: block;
  width: 100%; }

.col-form-label {
  padding-top: calc(0.375rem + 1px);
  padding-bottom: calc(0.375rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5; }

.col-form-label-lg {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 1.25rem;
  line-height: 1.5; }

.col-form-label-sm {
  padding-top: calc(0.25rem + 1px);
  padding-bottom: calc(0.25rem + 1px);
  font-size: 0.875rem;
  line-height: 1.5; }

.form-control-plaintext {
  display: block;
  width: 100%;
  padding: 0.375rem 0;
  margin-bottom: 0;
  font-size: 1rem;
  line-height: 1.5;
  color: #515151;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0; }
  .form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
    padding-right: 0;
    padding-left: 0; }

.form-control-sm {
  height: calc(1.5em + 0.5rem + 2px);
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem; }

.form-control-lg {
  height: calc(1.5em + 1rem + 2px);
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem; }

select.form-control[size], select.form-control[multiple] {
  height: auto; }

textarea.form-control {
  height: auto; }

.form-group {
  margin-bottom: 1rem; }

.form-text {
  display: block;
  margin-top: 0.25rem; }

.form-row {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
          flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px; }
  .form-row > .col,
  .form-row > [class*="col-"] {
    padding-right: 5px;
    padding-left: 5px; }

.form-check {
  position: relative;
  display: block;
  padding-left: 1.25rem; }

.form-check-input {
  position: absolute;
  margin-top: 0.3rem;
  margin-left: -1.25rem; }
  .form-check-input[disabled] ~ .form-check-label,
  .form-check-input:disabled ~ .form-check-label {
    color: #6c757d; }

.form-check-label {
  margin-bottom: 0; }

.form-check-inline {
  display: -webkit-inline-box;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  padding-left: 0;
  margin-right: 0.75rem; }
  .form-check-inline .form-check-input {
    position: static;
    margin-top: 0;
    margin-right: 0.3125rem;
    margin-left: 0; }

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #1DAB47; }

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  line-height: 1.5;
  color: #fff;
  background-color: rgba(29, 171, 71, 0.9);
  border-radius: 0; }

.was-validated :valid ~ .valid-feedback,
.was-validated :valid ~ .valid-tooltip,
.is-valid ~ .valid-feedback,
.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .form-control:valid, .form-control.is-valid {
  border-color: #1DAB47;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%231DAB47' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  -webkit-background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
          background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
  .was-validated .form-control:valid:focus, .form-control.is-valid:focus {
    border-color: #1DAB47;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(29, 171, 71, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(29, 171, 71, 0.25); }

.was-validated textarea.form-control:valid, textarea.form-control.is-valid {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem); }

.was-validated .custom-select:valid, .custom-select.is-valid {
  border-color: #1DAB47;
  padding-right: calc(0.75em + 2.3125rem);
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%231DAB47' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
  .was-validated .custom-select:valid:focus, .custom-select.is-valid:focus {
    border-color: #1DAB47;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(29, 171, 71, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(29, 171, 71, 0.25); }

.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #1DAB47; }

.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
  color: #1DAB47; }
  .was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
    border-color: #1DAB47; }

.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  border-color: #24d759;
  background-color: #24d759; }

.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  -webkit-box-shadow: 0 0 0 0.2rem rgba(29, 171, 71, 0.25);
          box-shadow: 0 0 0 0.2rem rgba(29, 171, 71, 0.25); }

.was-validated .custom-control-input:valid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-valid:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #1DAB47; }

.was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
  border-color: #1DAB47; }

.was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
  border-color: #1DAB47;
  -webkit-box-shadow: 0 0 0 0.2rem rgba(29, 171, 71, 0.25);
          box-shadow: 0 0 0 0.2rem rgba(29, 171, 71, 0.25); }

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #FC413F; }

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  line-height: 1.5;
  color: #fff;
  background-color: rgba(252, 65, 63, 0.9);
  border-radius: 0; }

.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip,
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .form-control:invalid, .form-control.is-invalid {
  border-color: #FC413F;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23FC413F' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23FC413F' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  -webkit-background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
          background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
  .was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
    border-color: #FC413F;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(252, 65, 63, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(252, 65, 63, 0.25); }

.was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem); }

.was-validated .custom-select:invalid, .custom-select.is-invalid {
  border-color: #FC413F;
  padding-right: calc(0.75em + 2.3125rem);
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23FC413F' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23FC413F' stroke='none'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
  .was-validated .custom-select:invalid:focus, .custom-select.is-invalid:focus {
    border-color: #FC413F;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(252, 65, 63, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(252, 65, 63, 0.25); }

.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #FC413F; }

.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
  color: #FC413F; }
  .was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
    border-color: #FC413F; }

.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
  border-color: #fd7371;
  background-color: #fd7371; }

.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
  -webkit-box-shadow: 0 0 0 0.2rem rgba(252, 65, 63, 0.25);
          box-shadow: 0 0 0 0.2rem rgba(252, 65, 63, 0.25); }

.was-validated .custom-control-input:invalid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-invalid:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #FC413F; }

.was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
  border-color: #FC413F; }

.was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
  border-color: #FC413F;
  -webkit-box-shadow: 0 0 0 0.2rem rgba(252, 65, 63, 0.25);
          box-shadow: 0 0 0 0.2rem rgba(252, 65, 63, 0.25); }

.form-inline {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -webkit-flex-flow: row wrap;
      -ms-flex-flow: row wrap;
          flex-flow: row wrap;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center; }
  .form-inline .form-check {
    width: 100%; }
  @media (min-width: 576px) {
    .form-inline label {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -webkit-align-items: center;
          -ms-flex-align: center;
              align-items: center;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
          -ms-flex-pack: center;
              justify-content: center;
      margin-bottom: 0; }
    .form-inline .form-group {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-flex: 0;
      -webkit-flex: 0 0 auto;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -webkit-flex-flow: row wrap;
          -ms-flex-flow: row wrap;
              flex-flow: row wrap;
      -webkit-box-align: center;
      -webkit-align-items: center;
          -ms-flex-align: center;
              align-items: center;
      margin-bottom: 0; }
    .form-inline .form-control {
      display: inline-block;
      width: auto;
      vertical-align: middle; }
    .form-inline .form-control-plaintext {
      display: inline-block; }
    .form-inline .input-group,
    .form-inline .custom-select {
      width: auto; }
    .form-inline .form-check {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -webkit-align-items: center;
          -ms-flex-align: center;
              align-items: center;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
          -ms-flex-pack: center;
              justify-content: center;
      width: auto;
      padding-left: 0; }
    .form-inline .form-check-input {
      position: relative;
      -webkit-flex-shrink: 0;
          -ms-flex-negative: 0;
              flex-shrink: 0;
      margin-top: 0;
      margin-right: 0.25rem;
      margin-left: 0; }
    .form-inline .custom-control {
      -webkit-box-align: center;
      -webkit-align-items: center;
          -ms-flex-align: center;
              align-items: center;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
          -ms-flex-pack: center;
              justify-content: center; }
    .form-inline .custom-control-label {
      margin-bottom: 0; } }

.btn {
  display: inline-block;
  font-weight: 400;
  color: #515151;
  text-align: center;
  vertical-align: middle;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .btn {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
  .btn:hover {
    color: #515151;
    text-decoration: none; }
  .btn:focus, .btn.focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(63, 132, 252, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(63, 132, 252, 0.25); }
  .btn.disabled, .btn:disabled {
    opacity: 0.65; }
  .btn:not(:disabled):not(.disabled) {
    cursor: pointer; }

a.btn.disabled,
fieldset:disabled a.btn {
  pointer-events: none; }

.btn-primary {
  color: #fff;
  background-color: #3F84FC;
  border-color: #3F84FC; }
  .btn-primary:hover {
    color: #fff;
    background-color: #196cfb;
    border-color: #0d64fb; }
  .btn-primary:focus, .btn-primary.focus {
    color: #fff;
    background-color: #196cfb;
    border-color: #0d64fb;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(92, 150, 252, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(92, 150, 252, 0.5); }
  .btn-primary.disabled, .btn-primary:disabled {
    color: #fff;
    background-color: #3F84FC;
    border-color: #3F84FC; }
  .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
  .show > .btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #0d64fb;
    border-color: #045df7; }
    .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-primary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(92, 150, 252, 0.5);
              box-shadow: 0 0 0 0.2rem rgba(92, 150, 252, 0.5); }

.btn-secondary {
  color: #fff;
  background-color: #727F94;
  border-color: #727F94; }
  .btn-secondary:hover {
    color: #fff;
    background-color: #616c7f;
    border-color: #5b6678; }
  .btn-secondary:focus, .btn-secondary.focus {
    color: #fff;
    background-color: #616c7f;
    border-color: #5b6678;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(135, 146, 164, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(135, 146, 164, 0.5); }
  .btn-secondary.disabled, .btn-secondary:disabled {
    color: #fff;
    background-color: #727F94;
    border-color: #727F94; }
  .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
  .show > .btn-secondary.dropdown-toggle {
    color: #fff;
    background-color: #5b6678;
    border-color: #566071; }
    .btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-secondary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(135, 146, 164, 0.5);
              box-shadow: 0 0 0 0.2rem rgba(135, 146, 164, 0.5); }

.btn-success {
  color: #fff;
  background-color: #1DAB47;
  border-color: #1DAB47; }
  .btn-success:hover {
    color: #fff;
    background-color: #178a39;
    border-color: #167f35; }
  .btn-success:focus, .btn-success.focus {
    color: #fff;
    background-color: #178a39;
    border-color: #167f35;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(63, 184, 99, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(63, 184, 99, 0.5); }
  .btn-success.disabled, .btn-success:disabled {
    color: #fff;
    background-color: #1DAB47;
    border-color: #1DAB47; }
  .btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
  .show > .btn-success.dropdown-toggle {
    color: #fff;
    background-color: #167f35;
    border-color: #147430; }
    .btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-success.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(63, 184, 99, 0.5);
              box-shadow: 0 0 0 0.2rem rgba(63, 184, 99, 0.5); }

.btn-info {
  color: #fff;
  background-color: #8A3FFC;
  border-color: #8A3FFC; }
  .btn-info:hover {
    color: #fff;
    background-color: #7319fb;
    border-color: #6b0dfb; }
  .btn-info:focus, .btn-info.focus {
    color: #fff;
    background-color: #7319fb;
    border-color: #6b0dfb;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(156, 92, 252, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(156, 92, 252, 0.5); }
  .btn-info.disabled, .btn-info:disabled {
    color: #fff;
    background-color: #8A3FFC;
    border-color: #8A3FFC; }
  .btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
  .show > .btn-info.dropdown-toggle {
    color: #fff;
    background-color: #6b0dfb;
    border-color: #6504f7; }
    .btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-info.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(156, 92, 252, 0.5);
              box-shadow: 0 0 0 0.2rem rgba(156, 92, 252, 0.5); }

.btn-warning {
  color: #212529;
  background-color: #FCAE3F;
  border-color: #FCAE3F; }
  .btn-warning:hover {
    color: #212529;
    background-color: #fb9e19;
    border-color: #fb990d; }
  .btn-warning:focus, .btn-warning.focus {
    color: #212529;
    background-color: #fb9e19;
    border-color: #fb990d;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(219, 153, 60, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(219, 153, 60, 0.5); }
  .btn-warning.disabled, .btn-warning:disabled {
    color: #212529;
    background-color: #FCAE3F;
    border-color: #FCAE3F; }
  .btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
  .show > .btn-warning.dropdown-toggle {
    color: #212529;
    background-color: #fb990d;
    border-color: #f79304; }
    .btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-warning.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(219, 153, 60, 0.5);
              box-shadow: 0 0 0 0.2rem rgba(219, 153, 60, 0.5); }

.btn-danger {
  color: #fff;
  background-color: #FC413F;
  border-color: #FC413F; }
  .btn-danger:hover {
    color: #fff;
    background-color: #fb1c19;
    border-color: #fb0f0d; }
  .btn-danger:focus, .btn-danger.focus {
    color: #fff;
    background-color: #fb1c19;
    border-color: #fb0f0d;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(252, 94, 92, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(252, 94, 92, 0.5); }
  .btn-danger.disabled, .btn-danger:disabled {
    color: #fff;
    background-color: #FC413F;
    border-color: #FC413F; }
  .btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
  .show > .btn-danger.dropdown-toggle {
    color: #fff;
    background-color: #fb0f0d;
    border-color: #f70604; }
    .btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-danger.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(252, 94, 92, 0.5);
              box-shadow: 0 0 0 0.2rem rgba(252, 94, 92, 0.5); }

.btn-light {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa; }
  .btn-light:hover {
    color: #212529;
    background-color: #e2e6ea;
    border-color: #dae0e5; }
  .btn-light:focus, .btn-light.focus {
    color: #212529;
    background-color: #e2e6ea;
    border-color: #dae0e5;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5); }
  .btn-light.disabled, .btn-light:disabled {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
  .btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
  .show > .btn-light.dropdown-toggle {
    color: #212529;
    background-color: #dae0e5;
    border-color: #d3d9df; }
    .btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-light.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
              box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5); }

.btn-dark {
  color: #fff;
  background-color: #1E232D;
  border-color: #1E232D; }
  .btn-dark:hover {
    color: #fff;
    background-color: #0f1116;
    border-color: #0a0b0e; }
  .btn-dark:focus, .btn-dark.focus {
    color: #fff;
    background-color: #0f1116;
    border-color: #0a0b0e;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(64, 68, 77, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(64, 68, 77, 0.5); }
  .btn-dark.disabled, .btn-dark:disabled {
    color: #fff;
    background-color: #1E232D;
    border-color: #1E232D; }
  .btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
  .show > .btn-dark.dropdown-toggle {
    color: #fff;
    background-color: #0a0b0e;
    border-color: #050507; }
    .btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-dark.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(64, 68, 77, 0.5);
              box-shadow: 0 0 0 0.2rem rgba(64, 68, 77, 0.5); }

.btn-outline-primary {
  color: #3F84FC;
  border-color: #3F84FC; }
  .btn-outline-primary:hover {
    color: #fff;
    background-color: #3F84FC;
    border-color: #3F84FC; }
  .btn-outline-primary:focus, .btn-outline-primary.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(63, 132, 252, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(63, 132, 252, 0.5); }
  .btn-outline-primary.disabled, .btn-outline-primary:disabled {
    color: #3F84FC;
    background-color: transparent; }
  .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
  .show > .btn-outline-primary.dropdown-toggle {
    color: #fff;
    background-color: #3F84FC;
    border-color: #3F84FC; }
    .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-primary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(63, 132, 252, 0.5);
              box-shadow: 0 0 0 0.2rem rgba(63, 132, 252, 0.5); }

.btn-outline-secondary {
  color: #727F94;
  border-color: #727F94; }
  .btn-outline-secondary:hover {
    color: #fff;
    background-color: #727F94;
    border-color: #727F94; }
  .btn-outline-secondary:focus, .btn-outline-secondary.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(114, 127, 148, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(114, 127, 148, 0.5); }
  .btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
    color: #727F94;
    background-color: transparent; }
  .btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active,
  .show > .btn-outline-secondary.dropdown-toggle {
    color: #fff;
    background-color: #727F94;
    border-color: #727F94; }
    .btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-secondary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(114, 127, 148, 0.5);
              box-shadow: 0 0 0 0.2rem rgba(114, 127, 148, 0.5); }

.btn-outline-success {
  color: #1DAB47;
  border-color: #1DAB47; }
  .btn-outline-success:hover {
    color: #fff;
    background-color: #1DAB47;
    border-color: #1DAB47; }
  .btn-outline-success:focus, .btn-outline-success.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(29, 171, 71, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(29, 171, 71, 0.5); }
  .btn-outline-success.disabled, .btn-outline-success:disabled {
    color: #1DAB47;
    background-color: transparent; }
  .btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active,
  .show > .btn-outline-success.dropdown-toggle {
    color: #fff;
    background-color: #1DAB47;
    border-color: #1DAB47; }
    .btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-success.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(29, 171, 71, 0.5);
              box-shadow: 0 0 0 0.2rem rgba(29, 171, 71, 0.5); }

.btn-outline-info {
  color: #8A3FFC;
  border-color: #8A3FFC; }
  .btn-outline-info:hover {
    color: #fff;
    background-color: #8A3FFC;
    border-color: #8A3FFC; }
  .btn-outline-info:focus, .btn-outline-info.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(138, 63, 252, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(138, 63, 252, 0.5); }
  .btn-outline-info.disabled, .btn-outline-info:disabled {
    color: #8A3FFC;
    background-color: transparent; }
  .btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
  .show > .btn-outline-info.dropdown-toggle {
    color: #fff;
    background-color: #8A3FFC;
    border-color: #8A3FFC; }
    .btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-info.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(138, 63, 252, 0.5);
              box-shadow: 0 0 0 0.2rem rgba(138, 63, 252, 0.5); }

.btn-outline-warning {
  color: #FCAE3F;
  border-color: #FCAE3F; }
  .btn-outline-warning:hover {
    color: #212529;
    background-color: #FCAE3F;
    border-color: #FCAE3F; }
  .btn-outline-warning:focus, .btn-outline-warning.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(252, 174, 63, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(252, 174, 63, 0.5); }
  .btn-outline-warning.disabled, .btn-outline-warning:disabled {
    color: #FCAE3F;
    background-color: transparent; }
  .btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
  .show > .btn-outline-warning.dropdown-toggle {
    color: #212529;
    background-color: #FCAE3F;
    border-color: #FCAE3F; }
    .btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-warning.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(252, 174, 63, 0.5);
              box-shadow: 0 0 0 0.2rem rgba(252, 174, 63, 0.5); }

.btn-outline-danger {
  color: #FC413F;
  border-color: #FC413F; }
  .btn-outline-danger:hover {
    color: #fff;
    background-color: #FC413F;
    border-color: #FC413F; }
  .btn-outline-danger:focus, .btn-outline-danger.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(252, 65, 63, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(252, 65, 63, 0.5); }
  .btn-outline-danger.disabled, .btn-outline-danger:disabled {
    color: #FC413F;
    background-color: transparent; }
  .btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
  .show > .btn-outline-danger.dropdown-toggle {
    color: #fff;
    background-color: #FC413F;
    border-color: #FC413F; }
    .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-danger.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(252, 65, 63, 0.5);
              box-shadow: 0 0 0 0.2rem rgba(252, 65, 63, 0.5); }

.btn-outline-light {
  color: #f8f9fa;
  border-color: #f8f9fa; }
  .btn-outline-light:hover {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
  .btn-outline-light:focus, .btn-outline-light.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }
  .btn-outline-light.disabled, .btn-outline-light:disabled {
    color: #f8f9fa;
    background-color: transparent; }
  .btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
  .show > .btn-outline-light.dropdown-toggle {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
    .btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-light.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
              box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }

.btn-outline-dark {
  color: #1E232D;
  border-color: #1E232D; }
  .btn-outline-dark:hover {
    color: #fff;
    background-color: #1E232D;
    border-color: #1E232D; }
  .btn-outline-dark:focus, .btn-outline-dark.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(30, 35, 45, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(30, 35, 45, 0.5); }
  .btn-outline-dark.disabled, .btn-outline-dark:disabled {
    color: #1E232D;
    background-color: transparent; }
  .btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
  .show > .btn-outline-dark.dropdown-toggle {
    color: #fff;
    background-color: #1E232D;
    border-color: #1E232D; }
    .btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-dark.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(30, 35, 45, 0.5);
              box-shadow: 0 0 0 0.2rem rgba(30, 35, 45, 0.5); }

.btn-link {
  font-weight: 400;
  color: #3F84FC;
  text-decoration: none; }
  .btn-link:hover {
    color: #0458eb;
    text-decoration: underline; }
  .btn-link:focus, .btn-link.focus {
    text-decoration: underline; }
  .btn-link:disabled, .btn-link.disabled {
    color: #6c757d;
    pointer-events: none; }

.btn-lg, .btn-group-lg > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem; }

.btn-sm, .btn-group-sm > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem; }

.btn-block {
  display: block;
  width: 100%; }
  .btn-block + .btn-block {
    margin-top: 0.5rem; }

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%; }

.fade {
  -webkit-transition: opacity 0.15s linear;
  -o-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear; }
  @media (prefers-reduced-motion: reduce) {
    .fade {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
  .fade:not(.show) {
    opacity: 0; }

.collapse:not(.show) {
  display: none; }

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition: height 0.35s ease;
  -o-transition: height 0.35s ease;
  transition: height 0.35s ease; }
  @media (prefers-reduced-motion: reduce) {
    .collapsing {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }

.dropup,
.dropright,
.dropdown,
.dropleft {
  position: relative; }

.dropdown-toggle {
  white-space: nowrap; }
  .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent; }
  .dropdown-toggle:empty::after {
    margin-left: 0; }

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0.125rem 0 0;
  font-size: 1rem;
  color: #515151;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0; }

.dropdown-menu-left {
  right: auto;
  left: 0; }

.dropdown-menu-right {
  right: 0;
  left: auto; }

@media (min-width: 576px) {
  .dropdown-menu-sm-left {
    right: auto;
    left: 0; }
  .dropdown-menu-sm-right {
    right: 0;
    left: auto; } }

@media (min-width: 768px) {
  .dropdown-menu-md-left {
    right: auto;
    left: 0; }
  .dropdown-menu-md-right {
    right: 0;
    left: auto; } }

@media (min-width: 992px) {
  .dropdown-menu-lg-left {
    right: auto;
    left: 0; }
  .dropdown-menu-lg-right {
    right: 0;
    left: auto; } }

@media (min-width: 1200px) {
  .dropdown-menu-xl-left {
    right: auto;
    left: 0; }
  .dropdown-menu-xl-right {
    right: 0;
    left: auto; } }

.dropup .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 0.125rem; }

.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent; }

.dropup .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropright .dropdown-menu {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0.125rem; }

.dropright .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid; }

.dropright .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropright .dropdown-toggle::after {
  vertical-align: 0; }

.dropleft .dropdown-menu {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0.125rem; }

.dropleft .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: ""; }

.dropleft .dropdown-toggle::after {
  display: none; }

.dropleft .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent; }

.dropleft .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropleft .dropdown-toggle::before {
  vertical-align: 0; }

.dropdown-menu[x-placement^="top"], .dropdown-menu[x-placement^="right"], .dropdown-menu[x-placement^="bottom"], .dropdown-menu[x-placement^="left"] {
  right: auto;
  bottom: auto; }

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #e9ecef; }

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1.5rem;
  clear: both;
  font-weight: 400;
  color: #212529;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0; }
  .dropdown-item:hover, .dropdown-item:focus {
    color: #16181b;
    text-decoration: none;
    background-color: #f8f9fa; }
  .dropdown-item.active, .dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #3F84FC; }
  .dropdown-item.disabled, .dropdown-item:disabled {
    color: #6c757d;
    pointer-events: none;
    background-color: transparent; }

.dropdown-menu.show {
  display: block; }

.dropdown-header {
  display: block;
  padding: 0.5rem 1.5rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: #6c757d;
  white-space: nowrap; }

.dropdown-item-text {
  display: block;
  padding: 0.25rem 1.5rem;
  color: #212529; }

.btn-group,
.btn-group-vertical {
  position: relative;
  display: -webkit-inline-box;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  vertical-align: middle; }
  .btn-group > .btn,
  .btn-group-vertical > .btn {
    position: relative;
    -webkit-box-flex: 1;
    -webkit-flex: 1 1 auto;
        -ms-flex: 1 1 auto;
            flex: 1 1 auto; }
    .btn-group > .btn:hover,
    .btn-group-vertical > .btn:hover {
      z-index: 1; }
    .btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
    .btn-group-vertical > .btn:focus,
    .btn-group-vertical > .btn:active,
    .btn-group-vertical > .btn.active {
      z-index: 1; }

.btn-toolbar {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
          flex-wrap: wrap;
  -webkit-box-pack: start;
  -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
          justify-content: flex-start; }
  .btn-toolbar .input-group {
    width: auto; }

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) {
  margin-left: -1px; }

.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

.dropdown-toggle-split {
  padding-right: 0.5625rem;
  padding-left: 0.5625rem; }
  .dropdown-toggle-split::after,
  .dropup .dropdown-toggle-split::after,
  .dropright .dropdown-toggle-split::after {
    margin-left: 0; }
  .dropleft .dropdown-toggle-split::before {
    margin-right: 0; }

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
  padding-right: 0.375rem;
  padding-left: 0.375rem; }

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem; }

.btn-group-vertical {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: start;
  -webkit-align-items: flex-start;
      -ms-flex-align: start;
          align-items: flex-start;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center; }
  .btn-group-vertical > .btn,
  .btn-group-vertical > .btn-group {
    width: 100%; }
  .btn-group-vertical > .btn:not(:first-child),
  .btn-group-vertical > .btn-group:not(:first-child) {
    margin-top: -1px; }
  .btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
  .btn-group-vertical > .btn-group:not(:last-child) > .btn {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0; }
  .btn-group-vertical > .btn:not(:first-child),
  .btn-group-vertical > .btn-group:not(:first-child) > .btn {
    border-top-left-radius: 0;
    border-top-right-radius: 0; }

.btn-group-toggle > .btn,
.btn-group-toggle > .btn-group > .btn {
  margin-bottom: 0; }
  .btn-group-toggle > .btn input[type="radio"],
  .btn-group-toggle > .btn input[type="checkbox"],
  .btn-group-toggle > .btn-group > .btn input[type="radio"],
  .btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none; }

.input-group {
  position: relative;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
          flex-wrap: wrap;
  -webkit-box-align: stretch;
  -webkit-align-items: stretch;
      -ms-flex-align: stretch;
          align-items: stretch;
  width: 100%; }
  .input-group > .form-control,
  .input-group > .form-control-plaintext,
  .input-group > .custom-select,
  .input-group > .custom-file {
    position: relative;
    -webkit-box-flex: 1;
    -webkit-flex: 1 1 auto;
        -ms-flex: 1 1 auto;
            flex: 1 1 auto;
    width: 1%;
    min-width: 0;
    margin-bottom: 0; }
    .input-group > .form-control + .form-control,
    .input-group > .form-control + .custom-select,
    .input-group > .form-control + .custom-file,
    .input-group > .form-control-plaintext + .form-control,
    .input-group > .form-control-plaintext + .custom-select,
    .input-group > .form-control-plaintext + .custom-file,
    .input-group > .custom-select + .form-control,
    .input-group > .custom-select + .custom-select,
    .input-group > .custom-select + .custom-file,
    .input-group > .custom-file + .form-control,
    .input-group > .custom-file + .custom-select,
    .input-group > .custom-file + .custom-file {
      margin-left: -1px; }
  .input-group > .form-control:focus,
  .input-group > .custom-select:focus,
  .input-group > .custom-file .custom-file-input:focus ~ .custom-file-label {
    z-index: 3; }
  .input-group > .custom-file .custom-file-input:focus {
    z-index: 4; }
  .input-group > .form-control:not(:last-child),
  .input-group > .custom-select:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0; }
  .input-group > .form-control:not(:first-child),
  .input-group > .custom-select:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0; }
  .input-group > .custom-file {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center; }
    .input-group > .custom-file:not(:last-child) .custom-file-label,
    .input-group > .custom-file:not(:last-child) .custom-file-label::after {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0; }
    .input-group > .custom-file:not(:first-child) .custom-file-label {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0; }

.input-group-prepend,
.input-group-append {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex; }
  .input-group-prepend .btn,
  .input-group-append .btn {
    position: relative;
    z-index: 2; }
    .input-group-prepend .btn:focus,
    .input-group-append .btn:focus {
      z-index: 3; }
  .input-group-prepend .btn + .btn,
  .input-group-prepend .btn + .input-group-text,
  .input-group-prepend .input-group-text + .input-group-text,
  .input-group-prepend .input-group-text + .btn,
  .input-group-append .btn + .btn,
  .input-group-append .btn + .input-group-text,
  .input-group-append .input-group-text + .input-group-text,
  .input-group-append .input-group-text + .btn {
    margin-left: -1px; }

.input-group-prepend {
  margin-right: -1px; }

.input-group-append {
  margin-left: -1px; }

.input-group-text {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 0.375rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  text-align: center;
  white-space: nowrap;
  background-color: #e9ecef;
  border: 1px solid #ced4da;
  border-radius: 0; }
  .input-group-text input[type="radio"],
  .input-group-text input[type="checkbox"] {
    margin-top: 0; }

.input-group-lg > .form-control:not(textarea),
.input-group-lg > .custom-select {
  height: calc(1.5em + 1rem + 2px); }

.input-group-lg > .form-control,
.input-group-lg > .custom-select,
.input-group-lg > .input-group-prepend > .input-group-text,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn,
.input-group-lg > .input-group-append > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem; }

.input-group-sm > .form-control:not(textarea),
.input-group-sm > .custom-select {
  height: calc(1.5em + 0.5rem + 2px); }

.input-group-sm > .form-control,
.input-group-sm > .custom-select,
.input-group-sm > .input-group-prepend > .input-group-text,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.input-group-sm > .input-group-append > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem; }

.input-group-lg > .custom-select,
.input-group-sm > .custom-select {
  padding-right: 1.75rem; }

.input-group > .input-group-prepend > .btn,
.input-group > .input-group-prepend > .input-group-text,
.input-group > .input-group-append:not(:last-child) > .btn,
.input-group > .input-group-append:not(:last-child) > .input-group-text,
.input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.input-group > .input-group-append > .btn,
.input-group > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:not(:first-child) > .btn,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

.custom-control {
  position: relative;
  display: block;
  min-height: 1.5rem;
  padding-left: 1.5rem; }

.custom-control-inline {
  display: -webkit-inline-box;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  margin-right: 1rem; }

.custom-control-input {
  position: absolute;
  left: 0;
  z-index: -1;
  width: 1rem;
  height: 1.25rem;
  opacity: 0; }
  .custom-control-input:checked ~ .custom-control-label::before {
    color: #fff;
    border-color: #3F84FC;
    background-color: #3F84FC; }
  .custom-control-input:focus ~ .custom-control-label::before {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(63, 132, 252, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(63, 132, 252, 0.25); }
  .custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
    border-color: #bdd4fe; }
  .custom-control-input:not(:disabled):active ~ .custom-control-label::before {
    color: #fff;
    background-color: #eff5ff;
    border-color: #eff5ff; }
  .custom-control-input[disabled] ~ .custom-control-label, .custom-control-input:disabled ~ .custom-control-label {
    color: #6c757d; }
    .custom-control-input[disabled] ~ .custom-control-label::before, .custom-control-input:disabled ~ .custom-control-label::before {
      background-color: #e9ecef; }

.custom-control-label {
  position: relative;
  margin-bottom: 0;
  vertical-align: top; }
  .custom-control-label::before {
    position: absolute;
    top: 0.25rem;
    left: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    pointer-events: none;
    content: "";
    background-color: #fff;
    border: #adb5bd solid 1px; }
  .custom-control-label::after {
    position: absolute;
    top: 0.25rem;
    left: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    content: "";
    background: no-repeat 50% / 50% 50%; }

.custom-checkbox .custom-control-label::before {
  border-radius: 0; }

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3e%3c/svg%3e"); }

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
  border-color: #3F84FC;
  background-color: #3F84FC; }

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e"); }

.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(63, 132, 252, 0.5); }

.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
  background-color: rgba(63, 132, 252, 0.5); }

.custom-radio .custom-control-label::before {
  border-radius: 50%; }

.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e"); }

.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(63, 132, 252, 0.5); }

.custom-switch {
  padding-left: 2.25rem; }
  .custom-switch .custom-control-label::before {
    left: -2.25rem;
    width: 1.75rem;
    pointer-events: all;
    border-radius: 0.5rem; }
  .custom-switch .custom-control-label::after {
    top: calc(0.25rem + 2px);
    left: calc(-2.25rem + 2px);
    width: calc(1rem - 4px);
    height: calc(1rem - 4px);
    background-color: #adb5bd;
    border-radius: 0.5rem;
    -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -o-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -o-transform 0.15s ease-in-out;
    transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out, -o-transform 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
    @media (prefers-reduced-motion: reduce) {
      .custom-switch .custom-control-label::after {
        -webkit-transition: none;
        -o-transition: none;
        transition: none; } }
  .custom-switch .custom-control-input:checked ~ .custom-control-label::after {
    background-color: #fff;
    -webkit-transform: translateX(0.75rem);
         -o-transform: translateX(0.75rem);
            transform: translateX(0.75rem); }
  .custom-switch .custom-control-input:disabled:checked ~ .custom-control-label::before {
    background-color: rgba(63, 132, 252, 0.5); }

.custom-select {
  display: inline-block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 1.75rem 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  vertical-align: middle;
  background: #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px;
  border: 1px solid #ced4da;
  border-radius: 0;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none; }
  .custom-select:focus {
    border-color: #bdd4fe;
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(63, 132, 252, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(63, 132, 252, 0.25); }
    .custom-select:focus::-ms-value {
      color: #495057;
      background-color: #fff; }
  .custom-select[multiple], .custom-select[size]:not([size="1"]) {
    height: auto;
    padding-right: 0.75rem;
    background-image: none; }
  .custom-select:disabled {
    color: #6c757d;
    background-color: #e9ecef; }
  .custom-select::-ms-expand {
    display: none; }
  .custom-select:-moz-focusring {
    color: transparent;
    text-shadow: 0 0 0 #495057; }

.custom-select-sm {
  height: calc(1.5em + 0.5rem + 2px);
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  padding-left: 0.5rem;
  font-size: 0.875rem; }

.custom-select-lg {
  height: calc(1.5em + 1rem + 2px);
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1rem;
  font-size: 1.25rem; }

.custom-file {
  position: relative;
  display: inline-block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  margin-bottom: 0; }

.custom-file-input {
  position: relative;
  z-index: 2;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  margin: 0;
  opacity: 0; }
  .custom-file-input:focus ~ .custom-file-label {
    border-color: #bdd4fe;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(63, 132, 252, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(63, 132, 252, 0.25); }
  .custom-file-input[disabled] ~ .custom-file-label,
  .custom-file-input:disabled ~ .custom-file-label {
    background-color: #e9ecef; }
  .custom-file-input:lang(en) ~ .custom-file-label::after {
    content: "Browse"; }
  .custom-file-input ~ .custom-file-label[data-browse]::after {
    content: attr(data-browse); }

.custom-file-label {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  border: 1px solid #ced4da;
  border-radius: 0; }
  .custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: calc(1.5em + 0.75rem);
    padding: 0.375rem 0.75rem;
    line-height: 1.5;
    color: #495057;
    content: "Browse";
    background-color: #e9ecef;
    border-left: inherit;
    border-radius: 0 0 0 0; }

.custom-range {
  width: 100%;
  height: 1.4rem;
  padding: 0;
  background-color: transparent;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none; }
  .custom-range:focus {
    outline: none; }
    .custom-range:focus::-webkit-slider-thumb {
      -webkit-box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(63, 132, 252, 0.25);
              box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(63, 132, 252, 0.25); }
    .custom-range:focus::-moz-range-thumb {
      box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(63, 132, 252, 0.25); }
    .custom-range:focus::-ms-thumb {
      box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(63, 132, 252, 0.25); }
  .custom-range::-moz-focus-outer {
    border: 0; }
  .custom-range::-webkit-slider-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: -0.25rem;
    background-color: #3F84FC;
    border: 0;
    border-radius: 1rem;
    -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -o-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -webkit-appearance: none;
            appearance: none; }
    @media (prefers-reduced-motion: reduce) {
      .custom-range::-webkit-slider-thumb {
        -webkit-transition: none;
        -o-transition: none;
        transition: none; } }
    .custom-range::-webkit-slider-thumb:active {
      background-color: #eff5ff; }
  .custom-range::-webkit-slider-runnable-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem; }
  .custom-range::-moz-range-thumb {
    width: 1rem;
    height: 1rem;
    background-color: #3F84FC;
    border: 0;
    border-radius: 1rem;
    -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -o-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -moz-appearance: none;
         appearance: none; }
    @media (prefers-reduced-motion: reduce) {
      .custom-range::-moz-range-thumb {
        -webkit-transition: none;
        -o-transition: none;
        transition: none; } }
    .custom-range::-moz-range-thumb:active {
      background-color: #eff5ff; }
  .custom-range::-moz-range-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem; }
  .custom-range::-ms-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: 0;
    margin-right: 0.2rem;
    margin-left: 0.2rem;
    background-color: #3F84FC;
    border: 0;
    border-radius: 1rem;
    -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -o-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    appearance: none; }
    @media (prefers-reduced-motion: reduce) {
      .custom-range::-ms-thumb {
        -webkit-transition: none;
        -o-transition: none;
        transition: none; } }
    .custom-range::-ms-thumb:active {
      background-color: #eff5ff; }
  .custom-range::-ms-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: transparent;
    border-color: transparent;
    border-width: 0.5rem; }
  .custom-range::-ms-fill-lower {
    background-color: #dee2e6;
    border-radius: 1rem; }
  .custom-range::-ms-fill-upper {
    margin-right: 15px;
    background-color: #dee2e6;
    border-radius: 1rem; }
  .custom-range:disabled::-webkit-slider-thumb {
    background-color: #adb5bd; }
  .custom-range:disabled::-webkit-slider-runnable-track {
    cursor: default; }
  .custom-range:disabled::-moz-range-thumb {
    background-color: #adb5bd; }
  .custom-range:disabled::-moz-range-track {
    cursor: default; }
  .custom-range:disabled::-ms-thumb {
    background-color: #adb5bd; }

.custom-control-label::before,
.custom-file-label,
.custom-select {
  -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .custom-control-label::before,
    .custom-file-label,
    .custom-select {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
/* 
.nav {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
          flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none; }

.nav-link {
  display: block;
  padding: 0.5rem 1rem; }
  .nav-link:hover, .nav-link:focus {
    text-decoration: none; }
  .nav-link.disabled {
    color: #6c757d;
    pointer-events: none;
    cursor: default; }

.nav-tabs {
  border-bottom: 1px solid #dee2e6; }
  .nav-tabs .nav-item {
    margin-bottom: -1px; }
  .nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: 0;
    border-top-right-radius: 0; }
    .nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
      border-color: #e9ecef #e9ecef #dee2e6; }
    .nav-tabs .nav-link.disabled {
      color: #6c757d;
      background-color: transparent;
      border-color: transparent; }
  .nav-tabs .nav-link.active,
  .nav-tabs .nav-item.show .nav-link {
    color: #495057;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff; }
  .nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0; }

.nav-pills .nav-link {
  border-radius: 0; }

.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #3F84FC; }

.nav-fill .nav-item {
  -webkit-box-flex: 1;
  -webkit-flex: 1 1 auto;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  text-align: center; }

.nav-justified .nav-item {
  -webkit-flex-basis: 0;
      -ms-flex-preferred-size: 0;
          flex-basis: 0;
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  text-align: center; }

.tab-content > .tab-pane {
  display: none; }

.tab-content > .active {
  display: block; }

.navbar {
  position: relative;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
          flex-wrap: wrap;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 0.5rem 1rem; }
  .navbar .container,
  .navbar .container-fluid, .navbar .container-sm, .navbar .container-md, .navbar .container-lg, .navbar .container-xl {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
            justify-content: space-between; }

.navbar-brand {
  display: inline-block;
  padding-top: 0.3125rem;
  padding-bottom: 0.3125rem;
  margin-right: 1rem;
  font-size: 1.25rem;
  line-height: inherit;
  white-space: nowrap; }
  .navbar-brand:hover, .navbar-brand:focus {
    text-decoration: none; }

.navbar-nav {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none; }
  .navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0; }
  .navbar-nav .dropdown-menu {
    position: static;
    float: none; }

.navbar-text {
  display: inline-block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem; }

.navbar-collapse {
  -webkit-flex-basis: 100%;
      -ms-flex-preferred-size: 100%;
          flex-basis: 100%;
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center; }

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.25rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0; }
  .navbar-toggler:hover, .navbar-toggler:focus {
    text-decoration: none; }

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: no-repeat center center;
  -webkit-background-size: 100% 100%;
          background-size: 100% 100%; }

@media (max-width: 575.98px) {
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid, .navbar-expand-sm > .container-sm, .navbar-expand-sm > .container-md, .navbar-expand-sm > .container-lg, .navbar-expand-sm > .container-xl {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 576px) {
  .navbar-expand-sm {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-flow: row nowrap;
        -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
            justify-content: flex-start; }
    .navbar-expand-sm .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -webkit-flex-direction: row;
          -ms-flex-direction: row;
              flex-direction: row; }
      .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-sm > .container,
    .navbar-expand-sm > .container-fluid, .navbar-expand-sm > .container-sm, .navbar-expand-sm > .container-md, .navbar-expand-sm > .container-lg, .navbar-expand-sm > .container-xl {
      -webkit-flex-wrap: nowrap;
          -ms-flex-wrap: nowrap;
              flex-wrap: nowrap; }
    .navbar-expand-sm .navbar-collapse {
      display: -webkit-box !important;
      display: -webkit-flex !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -webkit-flex-basis: auto;
          -ms-flex-preferred-size: auto;
              flex-basis: auto; }
    .navbar-expand-sm .navbar-toggler {
      display: none; } }

@media (max-width: 767.98px) {
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid, .navbar-expand-md > .container-sm, .navbar-expand-md > .container-md, .navbar-expand-md > .container-lg, .navbar-expand-md > .container-xl {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 768px) {
  .navbar-expand-md {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-flow: row nowrap;
        -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
            justify-content: flex-start; }
    .navbar-expand-md .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -webkit-flex-direction: row;
          -ms-flex-direction: row;
              flex-direction: row; }
      .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-md .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-md > .container,
    .navbar-expand-md > .container-fluid, .navbar-expand-md > .container-sm, .navbar-expand-md > .container-md, .navbar-expand-md > .container-lg, .navbar-expand-md > .container-xl {
      -webkit-flex-wrap: nowrap;
          -ms-flex-wrap: nowrap;
              flex-wrap: nowrap; }
    .navbar-expand-md .navbar-collapse {
      display: -webkit-box !important;
      display: -webkit-flex !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -webkit-flex-basis: auto;
          -ms-flex-preferred-size: auto;
              flex-basis: auto; }
    .navbar-expand-md .navbar-toggler {
      display: none; } }

@media (max-width: 991.98px) {
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid, .navbar-expand-lg > .container-sm, .navbar-expand-lg > .container-md, .navbar-expand-lg > .container-lg, .navbar-expand-lg > .container-xl {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 992px) {
  .navbar-expand-lg {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-flow: row nowrap;
        -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
            justify-content: flex-start; }
    .navbar-expand-lg .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -webkit-flex-direction: row;
          -ms-flex-direction: row;
              flex-direction: row; }
      .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-lg > .container,
    .navbar-expand-lg > .container-fluid, .navbar-expand-lg > .container-sm, .navbar-expand-lg > .container-md, .navbar-expand-lg > .container-lg, .navbar-expand-lg > .container-xl {
      -webkit-flex-wrap: nowrap;
          -ms-flex-wrap: nowrap;
              flex-wrap: nowrap; }
    .navbar-expand-lg .navbar-collapse {
      display: -webkit-box !important;
      display: -webkit-flex !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -webkit-flex-basis: auto;
          -ms-flex-preferred-size: auto;
              flex-basis: auto; }
    .navbar-expand-lg .navbar-toggler {
      display: none; } }

@media (max-width: 1199.98px) {
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid, .navbar-expand-xl > .container-sm, .navbar-expand-xl > .container-md, .navbar-expand-xl > .container-lg, .navbar-expand-xl > .container-xl {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 1200px) {
  .navbar-expand-xl {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-flow: row nowrap;
        -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
            justify-content: flex-start; }
    .navbar-expand-xl .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -webkit-flex-direction: row;
          -ms-flex-direction: row;
              flex-direction: row; }
      .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-xl > .container,
    .navbar-expand-xl > .container-fluid, .navbar-expand-xl > .container-sm, .navbar-expand-xl > .container-md, .navbar-expand-xl > .container-lg, .navbar-expand-xl > .container-xl {
      -webkit-flex-wrap: nowrap;
          -ms-flex-wrap: nowrap;
              flex-wrap: nowrap; }
    .navbar-expand-xl .navbar-collapse {
      display: -webkit-box !important;
      display: -webkit-flex !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -webkit-flex-basis: auto;
          -ms-flex-preferred-size: auto;
              flex-basis: auto; }
    .navbar-expand-xl .navbar-toggler {
      display: none; } }

.navbar-expand {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -webkit-flex-flow: row nowrap;
      -ms-flex-flow: row nowrap;
          flex-flow: row nowrap;
  -webkit-box-pack: start;
  -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
          justify-content: flex-start; }
  .navbar-expand > .container,
  .navbar-expand > .container-fluid, .navbar-expand > .container-sm, .navbar-expand > .container-md, .navbar-expand > .container-lg, .navbar-expand > .container-xl {
    padding-right: 0;
    padding-left: 0; }
  .navbar-expand .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
        -ms-flex-direction: row;
            flex-direction: row; }
    .navbar-expand .navbar-nav .dropdown-menu {
      position: absolute; }
    .navbar-expand .navbar-nav .nav-link {
      padding-right: 0.5rem;
      padding-left: 0.5rem; }
  .navbar-expand > .container,
  .navbar-expand > .container-fluid, .navbar-expand > .container-sm, .navbar-expand > .container-md, .navbar-expand > .container-lg, .navbar-expand > .container-xl {
    -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
            flex-wrap: nowrap; }
  .navbar-expand .navbar-collapse {
    display: -webkit-box !important;
    display: -webkit-flex !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -webkit-flex-basis: auto;
        -ms-flex-preferred-size: auto;
            flex-basis: auto; }
  .navbar-expand .navbar-toggler {
    display: none; }

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9); }
  .navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
    color: rgba(0, 0, 0, 0.9); }

.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.5); }
  .navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
    color: rgba(0, 0, 0, 0.7); }
  .navbar-light .navbar-nav .nav-link.disabled {
    color: rgba(0, 0, 0, 0.3); }

.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9); }

.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.5);
  border-color: rgba(0, 0, 0, 0.1); }

.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e"); }

.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.5); }
  .navbar-light .navbar-text a {
    color: rgba(0, 0, 0, 0.9); }
    .navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
      color: rgba(0, 0, 0, 0.9); }

.navbar-dark .navbar-brand {
  color: #fff; }
  .navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
    color: #fff; }

.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.5); }
  .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
    color: rgba(255, 255, 255, 0.75); }
  .navbar-dark .navbar-nav .nav-link.disabled {
    color: rgba(255, 255, 255, 0.25); }

.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
  color: #fff; }

.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.5);
  border-color: rgba(255, 255, 255, 0.1); }

.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e"); }

.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.5); }
  .navbar-dark .navbar-text a {
    color: #fff; }
    .navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
      color: #fff; } */

.card {
  position: relative;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0; }
  .card > hr {
    margin-right: 0;
    margin-left: 0; }
  .card > .list-group {
    border-top: inherit;
    border-bottom: inherit; }
    .card > .list-group:first-child {
      border-top-width: 0;
      border-top-left-radius: 0;
      border-top-right-radius: 0; }
    .card > .list-group:last-child {
      border-bottom-width: 0;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0; }

.card-body {
  -webkit-box-flex: 1;
  -webkit-flex: 1 1 auto;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  min-height: 1px;
  padding: 1.25rem; }

.card-title {
  margin-bottom: 0.75rem; }

.card-subtitle {
  margin-top: -0.375rem;
  margin-bottom: 0; }

.card-text:last-child {
  margin-bottom: 0; }

.card-link:hover {
  text-decoration: none; }

.card-link + .card-link {
  margin-left: 1.25rem; }

.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid rgba(0, 0, 0, 0.125); }
  .card-header:first-child {
    border-radius: 0 0 0 0; }
  .card-header + .list-group .list-group-item:first-child {
    border-top: 0; }

.card-footer {
  padding: 0.75rem 1.25rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid rgba(0, 0, 0, 0.125); }
  .card-footer:last-child {
    border-radius: 0 0 0 0; }

.card-header-tabs {
  margin-right: -0.625rem;
  margin-bottom: -0.75rem;
  margin-left: -0.625rem;
  border-bottom: 0; }

.card-header-pills {
  margin-right: -0.625rem;
  margin-left: -0.625rem; }

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem; }

.card-img,
.card-img-top,
.card-img-bottom {
  -webkit-flex-shrink: 0;
      -ms-flex-negative: 0;
          flex-shrink: 0;
  width: 100%; }

.card-img,
.card-img-top {
  border-top-left-radius: 0;
  border-top-right-radius: 0; }

.card-img,
.card-img-bottom {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0; }

.card-deck .card {
  margin-bottom: 15px; }

@media (min-width: 576px) {
  .card-deck {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-flow: row wrap;
        -ms-flex-flow: row wrap;
            flex-flow: row wrap;
    margin-right: -15px;
    margin-left: -15px; }
    .card-deck .card {
      -webkit-box-flex: 1;
      -webkit-flex: 1 0 0%;
          -ms-flex: 1 0 0%;
              flex: 1 0 0%;
      margin-right: 15px;
      margin-bottom: 0;
      margin-left: 15px; } }

.card-group > .card {
  margin-bottom: 15px; }

@media (min-width: 576px) {
  .card-group {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-flow: row wrap;
        -ms-flex-flow: row wrap;
            flex-flow: row wrap; }
    .card-group > .card {
      -webkit-box-flex: 1;
      -webkit-flex: 1 0 0%;
          -ms-flex: 1 0 0%;
              flex: 1 0 0%;
      margin-bottom: 0; }
      .card-group > .card + .card {
        margin-left: 0;
        border-left: 0; }
      .card-group > .card:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0; }
        .card-group > .card:not(:last-child) .card-img-top,
        .card-group > .card:not(:last-child) .card-header {
          border-top-right-radius: 0; }
        .card-group > .card:not(:last-child) .card-img-bottom,
        .card-group > .card:not(:last-child) .card-footer {
          border-bottom-right-radius: 0; }
      .card-group > .card:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0; }
        .card-group > .card:not(:first-child) .card-img-top,
        .card-group > .card:not(:first-child) .card-header {
          border-top-left-radius: 0; }
        .card-group > .card:not(:first-child) .card-img-bottom,
        .card-group > .card:not(:first-child) .card-footer {
          border-bottom-left-radius: 0; } }

.card-columns .card {
  margin-bottom: 0.75rem; }

@media (min-width: 576px) {
  .card-columns {
    -webkit-column-count: 3;
       -moz-column-count: 3;
            column-count: 3;
    -webkit-column-gap: 1.25rem;
       -moz-column-gap: 1.25rem;
            column-gap: 1.25rem;
    orphans: 1;
    widows: 1; }
    .card-columns .card {
      display: inline-block;
      width: 100%; } }

.accordion > .card {
  overflow: hidden; }
  .accordion > .card:not(:last-of-type) {
    border-bottom: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0; }
  .accordion > .card:not(:first-of-type) {
    border-top-left-radius: 0;
    border-top-right-radius: 0; }
  .accordion > .card > .card-header {
    border-radius: 0;
    margin-bottom: -1px; }

.breadcrumb {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
          flex-wrap: wrap;
  padding: 0.75rem 1rem;
  margin-bottom: 1rem;
  list-style: none;
  background-color: #e9ecef;
  border-radius: 0; }

.breadcrumb-item {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex; }
  .breadcrumb-item + .breadcrumb-item {
    padding-left: 0.5rem; }
    .breadcrumb-item + .breadcrumb-item::before {
      display: inline-block;
      padding-right: 0.5rem;
      color: #6c757d;
      content: "/"; }
  .breadcrumb-item + .breadcrumb-item:hover::before {
    text-decoration: underline; }
  .breadcrumb-item + .breadcrumb-item:hover::before {
    text-decoration: none; }
  .breadcrumb-item.active {
    color: #6c757d; }

.pagination {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  padding-left: 0;
  list-style: none;
  border-radius: 0; }

.page-link {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #3F84FC;
  background-color: #fff;
  border: 1px solid #dee2e6; }
  .page-link:hover {
    z-index: 2;
    color: #0458eb;
    text-decoration: none;
    background-color: #e9ecef;
    border-color: #dee2e6; }
  .page-link:focus {
    z-index: 3;
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(63, 132, 252, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(63, 132, 252, 0.25); }

.page-item:first-child .page-link {
  margin-left: 0;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

.page-item:last-child .page-link {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.page-item.active .page-link {
  z-index: 3;
  color: #fff;
  background-color: #3F84FC;
  border-color: #3F84FC; }

.page-item.disabled .page-link {
  color: #6c757d;
  pointer-events: none;
  cursor: auto;
  background-color: #fff;
  border-color: #dee2e6; }

.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem;
  line-height: 1.5; }

.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem; }

.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem; }

.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5; }

.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem; }

.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem; }

.badge {
  display: inline-block;
  padding: 0.25em 0.4em;
  font-size: 75%;
  font-weight: 700;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .badge {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
  a.badge:hover, a.badge:focus {
    text-decoration: none; }
  .badge:empty {
    display: none; }

.btn .badge {
  position: relative;
  top: -1px; }

.badge-pill {
  padding-right: 0.6em;
  padding-left: 0.6em;
  border-radius: 10rem; }

.badge-primary {
  color: #fff;
  background-color: #3F84FC; }
  a.badge-primary:hover, a.badge-primary:focus {
    color: #fff;
    background-color: #0d64fb; }
  a.badge-primary:focus, a.badge-primary.focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(63, 132, 252, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(63, 132, 252, 0.5); }

.badge-secondary {
  color: #fff;
  background-color: #727F94; }
  a.badge-secondary:hover, a.badge-secondary:focus {
    color: #fff;
    background-color: #5b6678; }
  a.badge-secondary:focus, a.badge-secondary.focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(114, 127, 148, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(114, 127, 148, 0.5); }

.badge-success {
  color: #fff;
  background-color: #1DAB47; }
  a.badge-success:hover, a.badge-success:focus {
    color: #fff;
    background-color: #167f35; }
  a.badge-success:focus, a.badge-success.focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(29, 171, 71, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(29, 171, 71, 0.5); }

.badge-info {
  color: #fff;
  background-color: #8A3FFC; }
  a.badge-info:hover, a.badge-info:focus {
    color: #fff;
    background-color: #6b0dfb; }
  a.badge-info:focus, a.badge-info.focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(138, 63, 252, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(138, 63, 252, 0.5); }

.badge-warning {
  color: #212529;
  background-color: #FCAE3F; }
  a.badge-warning:hover, a.badge-warning:focus {
    color: #212529;
    background-color: #fb990d; }
  a.badge-warning:focus, a.badge-warning.focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(252, 174, 63, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(252, 174, 63, 0.5); }

.badge-danger {
  color: #fff;
  background-color: #FC413F; }
  a.badge-danger:hover, a.badge-danger:focus {
    color: #fff;
    background-color: #fb0f0d; }
  a.badge-danger:focus, a.badge-danger.focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(252, 65, 63, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(252, 65, 63, 0.5); }

.badge-light {
  color: #212529;
  background-color: #f8f9fa; }
  a.badge-light:hover, a.badge-light:focus {
    color: #212529;
    background-color: #dae0e5; }
  a.badge-light:focus, a.badge-light.focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }

.badge-dark {
  color: #fff;
  background-color: #1E232D; }
  a.badge-dark:hover, a.badge-dark:focus {
    color: #fff;
    background-color: #0a0b0e; }
  a.badge-dark:focus, a.badge-dark.focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(30, 35, 45, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(30, 35, 45, 0.5); }

.jumbotron {
  padding: 2rem 1rem;
  margin-bottom: 2rem;
  background-color: #e9ecef;
  border-radius: 0.3rem; }
  @media (min-width: 576px) {
    .jumbotron {
      padding: 4rem 2rem; } }

.jumbotron-fluid {
  padding-right: 0;
  padding-left: 0;
  border-radius: 0; }

.alert {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0; }

.alert-heading {
  color: inherit; }

.alert-link {
  font-weight: 700; }

.alert-dismissible {
  padding-right: 4rem; }
  .alert-dismissible .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 0.75rem 1.25rem;
    color: inherit; }

.alert-primary {
  color: #214583;
  background-color: #d9e6fe;
  border-color: #c9ddfe; }
  .alert-primary hr {
    border-top-color: #b0cdfe; }
  .alert-primary .alert-link {
    color: #17305a; }

.alert-secondary {
  color: #3b424d;
  background-color: #e3e5ea;
  border-color: #d8dbe1; }
  .alert-secondary hr {
    border-top-color: #caced6; }
  .alert-secondary .alert-link {
    color: #252930; }

.alert-success {
  color: #0f5925;
  background-color: #d2eeda;
  border-color: #c0e7cb; }
  .alert-success hr {
    border-top-color: #aee0bc; }
  .alert-success .alert-link {
    color: #082d13; }

.alert-info {
  color: #482183;
  background-color: #e8d9fe;
  border-color: #dec9fe; }
  .alert-info hr {
    border-top-color: #cfb0fe; }
  .alert-info .alert-link {
    color: #32175a; }

.alert-warning {
  color: #835a21;
  background-color: #feefd9;
  border-color: #fee8c9; }
  .alert-warning hr {
    border-top-color: #feddb0; }
  .alert-warning .alert-link {
    color: #5a3e17; }

.alert-danger {
  color: #832221;
  background-color: #fed9d9;
  border-color: #fecac9; }
  .alert-danger hr {
    border-top-color: #feb1b0; }
  .alert-danger .alert-link {
    color: #5a1717; }

.alert-light {
  color: #818182;
  background-color: #fefefe;
  border-color: #fdfdfe; }
  .alert-light hr {
    border-top-color: #ececf6; }
  .alert-light .alert-link {
    color: #686868; }

.alert-dark {
  color: #101217;
  background-color: #d2d3d5;
  border-color: #c0c1c4; }
  .alert-dark hr {
    border-top-color: #b3b4b8; }
  .alert-dark .alert-link {
    color: black; }

@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0; }
  to {
    background-position: 0 0; } }

@-o-keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0; }
  to {
    background-position: 0 0; } }

@keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0; }
  to {
    background-position: 0 0; } }

.progress {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  height: 1rem;
  overflow: hidden;
  line-height: 0;
  font-size: 0.75rem;
  background-color: #e9ecef;
  border-radius: 0; }

.progress-bar {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  overflow: hidden;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  background-color: #3F84FC;
  -webkit-transition: width 0.6s ease;
  -o-transition: width 0.6s ease;
  transition: width 0.6s ease; }
  @media (prefers-reduced-motion: reduce) {
    .progress-bar {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }

.progress-bar-striped {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  -webkit-background-size: 1rem 1rem;
          background-size: 1rem 1rem; }

.progress-bar-animated {
  -webkit-animation: progress-bar-stripes 1s linear infinite;
       -o-animation: progress-bar-stripes 1s linear infinite;
          animation: progress-bar-stripes 1s linear infinite; }
  @media (prefers-reduced-motion: reduce) {
    .progress-bar-animated {
      -webkit-animation: none;
           -o-animation: none;
              animation: none; } }

.media {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -webkit-align-items: flex-start;
      -ms-flex-align: start;
          align-items: flex-start; }

.media-body {
  -webkit-box-flex: 1;
  -webkit-flex: 1;
      -ms-flex: 1;
          flex: 1; }

.list-group {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  border-radius: 0; }

.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit; }
  .list-group-item-action:hover, .list-group-item-action:focus {
    z-index: 1;
    color: #495057;
    text-decoration: none;
    background-color: #f8f9fa; }
  .list-group-item-action:active {
    color: #515151;
    background-color: #e9ecef; }

.list-group-item {
  position: relative;
  display: block;
  padding: 0.75rem 1.25rem;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125); }
  .list-group-item:first-child {
    border-top-left-radius: inherit;
    border-top-right-radius: inherit; }
  .list-group-item:last-child {
    border-bottom-right-radius: inherit;
    border-bottom-left-radius: inherit; }
  .list-group-item.disabled, .list-group-item:disabled {
    color: #6c757d;
    pointer-events: none;
    background-color: #fff; }
  .list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #3F84FC;
    border-color: #3F84FC; }
  .list-group-item + .list-group-item {
    border-top-width: 0; }
    .list-group-item + .list-group-item.active {
      margin-top: -1px;
      border-top-width: 1px; }

.list-group-horizontal {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -webkit-flex-direction: row;
      -ms-flex-direction: row;
          flex-direction: row; }
  .list-group-horizontal > .list-group-item:first-child {
    border-bottom-left-radius: 0;
    border-top-right-radius: 0; }
  .list-group-horizontal > .list-group-item:last-child {
    border-top-right-radius: 0;
    border-bottom-left-radius: 0; }
  .list-group-horizontal > .list-group-item.active {
    margin-top: 0; }
  .list-group-horizontal > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0; }
    .list-group-horizontal > .list-group-item + .list-group-item.active {
      margin-left: -1px;
      border-left-width: 1px; }

@media (min-width: 576px) {
  .list-group-horizontal-sm {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
        -ms-flex-direction: row;
            flex-direction: row; }
    .list-group-horizontal-sm > .list-group-item:first-child {
      border-bottom-left-radius: 0;
      border-top-right-radius: 0; }
    .list-group-horizontal-sm > .list-group-item:last-child {
      border-top-right-radius: 0;
      border-bottom-left-radius: 0; }
    .list-group-horizontal-sm > .list-group-item.active {
      margin-top: 0; }
    .list-group-horizontal-sm > .list-group-item + .list-group-item {
      border-top-width: 1px;
      border-left-width: 0; }
      .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px; } }

@media (min-width: 768px) {
  .list-group-horizontal-md {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
        -ms-flex-direction: row;
            flex-direction: row; }
    .list-group-horizontal-md > .list-group-item:first-child {
      border-bottom-left-radius: 0;
      border-top-right-radius: 0; }
    .list-group-horizontal-md > .list-group-item:last-child {
      border-top-right-radius: 0;
      border-bottom-left-radius: 0; }
    .list-group-horizontal-md > .list-group-item.active {
      margin-top: 0; }
    .list-group-horizontal-md > .list-group-item + .list-group-item {
      border-top-width: 1px;
      border-left-width: 0; }
      .list-group-horizontal-md > .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px; } }

@media (min-width: 992px) {
  .list-group-horizontal-lg {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
        -ms-flex-direction: row;
            flex-direction: row; }
    .list-group-horizontal-lg > .list-group-item:first-child {
      border-bottom-left-radius: 0;
      border-top-right-radius: 0; }
    .list-group-horizontal-lg > .list-group-item:last-child {
      border-top-right-radius: 0;
      border-bottom-left-radius: 0; }
    .list-group-horizontal-lg > .list-group-item.active {
      margin-top: 0; }
    .list-group-horizontal-lg > .list-group-item + .list-group-item {
      border-top-width: 1px;
      border-left-width: 0; }
      .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px; } }

@media (min-width: 1200px) {
  .list-group-horizontal-xl {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
        -ms-flex-direction: row;
            flex-direction: row; }
    .list-group-horizontal-xl > .list-group-item:first-child {
      border-bottom-left-radius: 0;
      border-top-right-radius: 0; }
    .list-group-horizontal-xl > .list-group-item:last-child {
      border-top-right-radius: 0;
      border-bottom-left-radius: 0; }
    .list-group-horizontal-xl > .list-group-item.active {
      margin-top: 0; }
    .list-group-horizontal-xl > .list-group-item + .list-group-item {
      border-top-width: 1px;
      border-left-width: 0; }
      .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px; } }

.list-group-flush {
  border-radius: 0; }
  .list-group-flush > .list-group-item {
    border-width: 0 0 1px; }
    .list-group-flush > .list-group-item:last-child {
      border-bottom-width: 0; }

.list-group-item-primary {
  color: #214583;
  background-color: #c9ddfe; }
  .list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
    color: #214583;
    background-color: #b0cdfe; }
  .list-group-item-primary.list-group-item-action.active {
    color: #fff;
    background-color: #214583;
    border-color: #214583; }

.list-group-item-secondary {
  color: #3b424d;
  background-color: #d8dbe1; }
  .list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
    color: #3b424d;
    background-color: #caced6; }
  .list-group-item-secondary.list-group-item-action.active {
    color: #fff;
    background-color: #3b424d;
    border-color: #3b424d; }

.list-group-item-success {
  color: #0f5925;
  background-color: #c0e7cb; }
  .list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
    color: #0f5925;
    background-color: #aee0bc; }
  .list-group-item-success.list-group-item-action.active {
    color: #fff;
    background-color: #0f5925;
    border-color: #0f5925; }

.list-group-item-info {
  color: #482183;
  background-color: #dec9fe; }
  .list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
    color: #482183;
    background-color: #cfb0fe; }
  .list-group-item-info.list-group-item-action.active {
    color: #fff;
    background-color: #482183;
    border-color: #482183; }

.list-group-item-warning {
  color: #835a21;
  background-color: #fee8c9; }
  .list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
    color: #835a21;
    background-color: #feddb0; }
  .list-group-item-warning.list-group-item-action.active {
    color: #fff;
    background-color: #835a21;
    border-color: #835a21; }

.list-group-item-danger {
  color: #832221;
  background-color: #fecac9; }
  .list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
    color: #832221;
    background-color: #feb1b0; }
  .list-group-item-danger.list-group-item-action.active {
    color: #fff;
    background-color: #832221;
    border-color: #832221; }

.list-group-item-light {
  color: #818182;
  background-color: #fdfdfe; }
  .list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
    color: #818182;
    background-color: #ececf6; }
  .list-group-item-light.list-group-item-action.active {
    color: #fff;
    background-color: #818182;
    border-color: #818182; }

.list-group-item-dark {
  color: #101217;
  background-color: #c0c1c4; }
  .list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
    color: #101217;
    background-color: #b3b4b8; }
  .list-group-item-dark.list-group-item-action.active {
    color: #fff;
    background-color: #101217;
    border-color: #101217; }

.close {
  float: right;
  font-size: 1.5rem;
  font-weight: 700;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: .5; }
  .close:hover {
    color: #000;
    text-decoration: none; }
  .close:not(:disabled):not(.disabled):hover, .close:not(:disabled):not(.disabled):focus {
    opacity: .75; }

button.close {
  padding: 0;
  background-color: transparent;
  border: 0; }

a.close.disabled {
  pointer-events: none; }

.toast {
  max-width: 350px;
  overflow: hidden;
  font-size: 0.875rem;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
          box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
  -webkit-backdrop-filter: blur(10px);
          backdrop-filter: blur(10px);
  opacity: 0;
  border-radius: 0.25rem; }
  .toast:not(:last-child) {
    margin-bottom: 0.75rem; }
  .toast.showing {
    opacity: 1; }
  .toast.show {
    display: block;
    opacity: 1; }
  .toast.hide {
    display: none; }

.toast-header {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 0.25rem 0.75rem;
  color: #6c757d;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05); }

.toast-body {
  padding: 0.75rem; }

.modal-open {
  overflow: hidden; }
  .modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto; }

.modal {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1050;
  display: none;
  width: 100%;
  height: 100%;
  overflow: hidden;
  outline: 0; }

.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.5rem;
  pointer-events: none; }
  .modal.fade .modal-dialog {
    -webkit-transition: -webkit-transform 0.3s ease-out;
    transition: -webkit-transform 0.3s ease-out;
    -o-transition: -o-transform 0.3s ease-out;
    transition: transform 0.3s ease-out;
    transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out, -o-transform 0.3s ease-out;
    -webkit-transform: translate(0, -50px);
         -o-transform: translate(0, -50px);
            transform: translate(0, -50px); }
    @media (prefers-reduced-motion: reduce) {
      .modal.fade .modal-dialog {
        -webkit-transition: none;
        -o-transition: none;
        transition: none; } }
  .modal.show .modal-dialog {
    -webkit-transform: none;
         -o-transform: none;
            transform: none; }
  .modal.modal-static .modal-dialog {
    -webkit-transform: scale(1.02);
         -o-transform: scale(1.02);
            transform: scale(1.02); }

.modal-dialog-scrollable {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  max-height: calc(100% - 1rem); }
  .modal-dialog-scrollable .modal-content {
    max-height: calc(100vh - 1rem);
    overflow: hidden; }
  .modal-dialog-scrollable .modal-header,
  .modal-dialog-scrollable .modal-footer {
    -webkit-flex-shrink: 0;
        -ms-flex-negative: 0;
            flex-shrink: 0; }
  .modal-dialog-scrollable .modal-body {
    overflow-y: auto; }

.modal-dialog-centered {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  min-height: calc(100% - 1rem); }
  .modal-dialog-centered::before {
    display: block;
    height: calc(100vh - 1rem);
    height: -webkit-min-content;
    height: -moz-min-content;
    height: min-content;
    content: ""; }
  .modal-dialog-centered.modal-dialog-scrollable {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
        -ms-flex-pack: center;
            justify-content: center;
    height: 100%; }
    .modal-dialog-centered.modal-dialog-scrollable .modal-content {
      max-height: none; }
    .modal-dialog-centered.modal-dialog-scrollable::before {
      content: none; }

.modal-content {
  position: relative;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
  outline: 0; }

.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  background-color: #000; }
  .modal-backdrop.fade {
    opacity: 0; }
  .modal-backdrop.show {
    opacity: 0.5; }

.modal-header {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -webkit-align-items: flex-start;
      -ms-flex-align: start;
          align-items: flex-start;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 1rem 1rem;
  border-bottom: 1px solid #dee2e6;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px); }
  .modal-header .close {
    padding: 1rem 1rem;
    margin: -1rem -1rem -1rem auto; }

.modal-title {
  margin-bottom: 0;
  line-height: 1.5; }

.modal-body {
  position: relative;
  -webkit-box-flex: 1;
  -webkit-flex: 1 1 auto;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  padding: 1rem; }

.modal-footer {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
          flex-wrap: wrap;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: end;
  -webkit-justify-content: flex-end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  padding: 0.75rem;
  border-top: 1px solid #dee2e6;
  border-bottom-right-radius: calc(0.3rem - 1px);
  border-bottom-left-radius: calc(0.3rem - 1px); }
  .modal-footer > * {
    margin: 0.25rem; }

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll; }

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto; }
  .modal-dialog-scrollable {
    max-height: calc(100% - 3.5rem); }
    .modal-dialog-scrollable .modal-content {
      max-height: calc(100vh - 3.5rem); }
  .modal-dialog-centered {
    min-height: calc(100% - 3.5rem); }
    .modal-dialog-centered::before {
      height: calc(100vh - 3.5rem);
      height: -webkit-min-content;
      height: -moz-min-content;
      height: min-content; }
  .modal-sm {
    max-width: 300px; } }

@media (min-width: 992px) {
  .modal-lg,
  .modal-xl {
    max-width: 800px; } }

@media (min-width: 1200px) {
  .modal-xl {
    max-width: 1140px; } }

.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  margin: 0;
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  opacity: 0; }
  .tooltip.show {
    opacity: 0.9; }
  .tooltip .arrow {
    position: absolute;
    display: block;
    width: 0.8rem;
    height: 0.4rem; }
    .tooltip .arrow::before {
      position: absolute;
      content: "";
      border-color: transparent;
      border-style: solid; }

.bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
  padding: 0.4rem 0; }
  .bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
    bottom: 0; }
    .bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
      top: 0;
      border-width: 0.4rem 0.4rem 0;
      border-top-color: #000; }

.bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
  padding: 0 0.4rem; }
  .bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
    left: 0;
    width: 0.4rem;
    height: 0.8rem; }
    .bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
      right: 0;
      border-width: 0.4rem 0.4rem 0.4rem 0;
      border-right-color: #000; }

.bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
  padding: 0.4rem 0; }
  .bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
    top: 0; }
    .bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
      bottom: 0;
      border-width: 0 0.4rem 0.4rem;
      border-bottom-color: #000; }

.bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
  padding: 0 0.4rem; }
  .bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
    right: 0;
    width: 0.4rem;
    height: 0.8rem; }
    .bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
      left: 0;
      border-width: 0.4rem 0 0.4rem 0.4rem;
      border-left-color: #000; }

.tooltip-inner {
  max-width: 200px;
  padding: 0.25rem 0.5rem;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 0; }

.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: block;
  max-width: 276px;
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem; }
  .popover .arrow {
    position: absolute;
    display: block;
    width: 1rem;
    height: 0.5rem;
    margin: 0 0.3rem; }
    .popover .arrow::before, .popover .arrow::after {
      position: absolute;
      display: block;
      content: "";
      border-color: transparent;
      border-style: solid; }

.bs-popover-top, .bs-popover-auto[x-placement^="top"] {
  margin-bottom: 0.5rem; }
  .bs-popover-top > .arrow, .bs-popover-auto[x-placement^="top"] > .arrow {
    bottom: calc(-0.5rem - 1px); }
    .bs-popover-top > .arrow::before, .bs-popover-auto[x-placement^="top"] > .arrow::before {
      bottom: 0;
      border-width: 0.5rem 0.5rem 0;
      border-top-color: rgba(0, 0, 0, 0.25); }
    .bs-popover-top > .arrow::after, .bs-popover-auto[x-placement^="top"] > .arrow::after {
      bottom: 1px;
      border-width: 0.5rem 0.5rem 0;
      border-top-color: #fff; }

.bs-popover-right, .bs-popover-auto[x-placement^="right"] {
  margin-left: 0.5rem; }
  .bs-popover-right > .arrow, .bs-popover-auto[x-placement^="right"] > .arrow {
    left: calc(-0.5rem - 1px);
    width: 0.5rem;
    height: 1rem;
    margin: 0.3rem 0; }
    .bs-popover-right > .arrow::before, .bs-popover-auto[x-placement^="right"] > .arrow::before {
      left: 0;
      border-width: 0.5rem 0.5rem 0.5rem 0;
      border-right-color: rgba(0, 0, 0, 0.25); }
    .bs-popover-right > .arrow::after, .bs-popover-auto[x-placement^="right"] > .arrow::after {
      left: 1px;
      border-width: 0.5rem 0.5rem 0.5rem 0;
      border-right-color: #fff; }

.bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
  margin-top: 0.5rem; }
  .bs-popover-bottom > .arrow, .bs-popover-auto[x-placement^="bottom"] > .arrow {
    top: calc(-0.5rem - 1px); }
    .bs-popover-bottom > .arrow::before, .bs-popover-auto[x-placement^="bottom"] > .arrow::before {
      top: 0;
      border-width: 0 0.5rem 0.5rem 0.5rem;
      border-bottom-color: rgba(0, 0, 0, 0.25); }
    .bs-popover-bottom > .arrow::after, .bs-popover-auto[x-placement^="bottom"] > .arrow::after {
      top: 1px;
      border-width: 0 0.5rem 0.5rem 0.5rem;
      border-bottom-color: #fff; }
  .bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: 1rem;
    margin-left: -0.5rem;
    content: "";
    border-bottom: 1px solid #f7f7f7; }

.bs-popover-left, .bs-popover-auto[x-placement^="left"] {
  margin-right: 0.5rem; }
  .bs-popover-left > .arrow, .bs-popover-auto[x-placement^="left"] > .arrow {
    right: calc(-0.5rem - 1px);
    width: 0.5rem;
    height: 1rem;
    margin: 0.3rem 0; }
    .bs-popover-left > .arrow::before, .bs-popover-auto[x-placement^="left"] > .arrow::before {
      right: 0;
      border-width: 0.5rem 0 0.5rem 0.5rem;
      border-left-color: rgba(0, 0, 0, 0.25); }
    .bs-popover-left > .arrow::after, .bs-popover-auto[x-placement^="left"] > .arrow::after {
      right: 1px;
      border-width: 0.5rem 0 0.5rem 0.5rem;
      border-left-color: #fff; }

.popover-header {
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px); }
  .popover-header:empty {
    display: none; }

.popover-body {
  padding: 0.5rem 0.75rem;
  color: #515151; }

.carousel {
  position: relative; }

.carousel.pointer-event {
  -ms-touch-action: pan-y;
      touch-action: pan-y; }

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden; }
  .carousel-inner::after {
    display: block;
    clear: both;
    content: ""; }

.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-transition: -webkit-transform 0.6s ease-in-out;
  transition: -webkit-transform 0.6s ease-in-out;
  -o-transition: -o-transform 0.6s ease-in-out;
  transition: transform 0.6s ease-in-out;
  transition: transform 0.6s ease-in-out, -webkit-transform 0.6s ease-in-out, -o-transform 0.6s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .carousel-item {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block; }

.carousel-item-next:not(.carousel-item-left),
.active.carousel-item-right {
  -webkit-transform: translateX(100%);
       -o-transform: translateX(100%);
          transform: translateX(100%); }

.carousel-item-prev:not(.carousel-item-right),
.active.carousel-item-left {
  -webkit-transform: translateX(-100%);
       -o-transform: translateX(-100%);
          transform: translateX(-100%); }

.carousel-fade .carousel-item {
  opacity: 0;
  -webkit-transition-property: opacity;
  -o-transition-property: opacity;
  transition-property: opacity;
  -webkit-transform: none;
       -o-transform: none;
          transform: none; }

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
  z-index: 1;
  opacity: 1; }

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
  z-index: 0;
  opacity: 0;
  -webkit-transition: opacity 0s 0.6s;
  -o-transition: opacity 0s 0.6s;
  transition: opacity 0s 0.6s; }
  @media (prefers-reduced-motion: reduce) {
    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  width: 15%;
  color: #fff;
  text-align: center;
  opacity: 0.5;
  -webkit-transition: opacity 0.15s ease;
  -o-transition: opacity 0.15s ease;
  transition: opacity 0.15s ease; }
  @media (prefers-reduced-motion: reduce) {
    .carousel-control-prev,
    .carousel-control-next {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
  .carousel-control-prev:hover, .carousel-control-prev:focus,
  .carousel-control-next:hover,
  .carousel-control-next:focus {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: 0.9; }

.carousel-control-prev {
  left: 0; }

.carousel-control-next {
  right: 0; }

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: no-repeat 50% / 100% 100%; }

.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e"); }

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e"); }

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 15;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none; }
  .carousel-indicators li {
    -webkit-box-sizing: content-box;
            box-sizing: content-box;
    -webkit-box-flex: 0;
    -webkit-flex: 0 1 auto;
        -ms-flex: 0 1 auto;
            flex: 0 1 auto;
    width: 30px;
    height: 3px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #fff;
    background-clip: padding-box;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    opacity: .5;
    -webkit-transition: opacity 0.6s ease;
    -o-transition: opacity 0.6s ease;
    transition: opacity 0.6s ease; }
    @media (prefers-reduced-motion: reduce) {
      .carousel-indicators li {
        -webkit-transition: none;
        -o-transition: none;
        transition: none; } }
  .carousel-indicators .active {
    opacity: 1; }

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center; }

@-webkit-keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg); } }

@-o-keyframes spinner-border {
  to {
    -o-transform: rotate(360deg);
       transform: rotate(360deg); } }

@keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg);
         -o-transform: rotate(360deg);
            transform: rotate(360deg); } }

.spinner-border {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: text-bottom;
  border: 0.25em solid currentColor;
  border-right-color: transparent;
  border-radius: 50%;
  -webkit-animation: spinner-border .75s linear infinite;
       -o-animation: spinner-border .75s linear infinite;
          animation: spinner-border .75s linear infinite; }

.spinner-border-sm {
  width: 1rem;
  height: 1rem;
  border-width: 0.2em; }

@-webkit-keyframes spinner-grow {
  0% {
    -webkit-transform: scale(0);
            transform: scale(0); }
  50% {
    opacity: 1;
    -webkit-transform: none;
            transform: none; } }

@-o-keyframes spinner-grow {
  0% {
    -o-transform: scale(0);
       transform: scale(0); }
  50% {
    opacity: 1;
    -o-transform: none;
       transform: none; } }

@keyframes spinner-grow {
  0% {
    -webkit-transform: scale(0);
         -o-transform: scale(0);
            transform: scale(0); }
  50% {
    opacity: 1;
    -webkit-transform: none;
         -o-transform: none;
            transform: none; } }

.spinner-grow {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: text-bottom;
  background-color: currentColor;
  border-radius: 50%;
  opacity: 0;
  -webkit-animation: spinner-grow .75s linear infinite;
       -o-animation: spinner-grow .75s linear infinite;
          animation: spinner-grow .75s linear infinite; }

.spinner-grow-sm {
  width: 1rem;
  height: 1rem; }

.align-baseline {
  vertical-align: baseline !important; }

.align-top {
  vertical-align: top !important; }

.align-middle {
  vertical-align: middle !important; }

.align-bottom {
  vertical-align: bottom !important; }

.align-text-bottom {
  vertical-align: text-bottom !important; }

.align-text-top {
  vertical-align: text-top !important; }

.bg-primary {
  background-color: #3F84FC !important; }

a.bg-primary:hover, a.bg-primary:focus,
button.bg-primary:hover,
button.bg-primary:focus {
  background-color: #0d64fb !important; }

.bg-secondary {
  background-color: #727F94 !important; }

a.bg-secondary:hover, a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
  background-color: #5b6678 !important; }

.bg-success {
  background-color: #1DAB47 !important; }

a.bg-success:hover, a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
  background-color: #167f35 !important; }

.bg-info {
  background-color: #8A3FFC !important; }

a.bg-info:hover, a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
  background-color: #6b0dfb !important; }

.bg-warning {
  background-color: #FCAE3F !important; }

a.bg-warning:hover, a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
  background-color: #fb990d !important; }

.bg-danger {
  background-color: #FC413F !important; }

a.bg-danger:hover, a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
  background-color: #fb0f0d !important; }

.bg-light {
  background-color: #f8f9fa !important; }

a.bg-light:hover, a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
  background-color: #dae0e5 !important; }

.bg-dark {
  background-color: #1E232D !important; }

a.bg-dark:hover, a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
  background-color: #0a0b0e !important; }

.bg-white {
  background-color: #fff !important; }

.bg-transparent {
  background-color: transparent !important; }

.border {
  border: 1px solid #dee2e6 !important; }

.border-top {
  border-top: 1px solid #dee2e6 !important; }

.border-right {
  border-right: 1px solid #dee2e6 !important; }

.border-bottom {
  border-bottom: 1px solid #dee2e6 !important; }

.border-left {
  border-left: 1px solid #dee2e6 !important; }

.border-0 {
  border: 0 !important; }

.border-top-0 {
  border-top: 0 !important; }

.border-right-0 {
  border-right: 0 !important; }

.border-bottom-0 {
  border-bottom: 0 !important; }

.border-left-0 {
  border-left: 0 !important; }

.border-primary {
  border-color: #3F84FC !important; }

.border-secondary {
  border-color: #727F94 !important; }

.border-success {
  border-color: #1DAB47 !important; }

.border-info {
  border-color: #8A3FFC !important; }

.border-warning {
  border-color: #FCAE3F !important; }

.border-danger {
  border-color: #FC413F !important; }

.border-light {
  border-color: #f8f9fa !important; }

.border-dark {
  border-color: #1E232D !important; }

.border-white {
  border-color: #fff !important; }

.rounded-sm {
  border-radius: 0.2rem !important; }

.rounded {
  border-radius: 0 !important; }

.rounded-top {
  border-top-left-radius: 0 !important;
  border-top-right-radius: 0 !important; }

.rounded-right {
  border-top-right-radius: 0 !important;
  border-bottom-right-radius: 0 !important; }

.rounded-bottom {
  border-bottom-right-radius: 0 !important;
  border-bottom-left-radius: 0 !important; }

.rounded-left {
  border-top-left-radius: 0 !important;
  border-bottom-left-radius: 0 !important; }

.rounded-lg {
  border-radius: 0.3rem !important; }

.rounded-circle {
  border-radius: 50% !important; }

.rounded-pill {
  border-radius: 50rem !important; }

.rounded-0 {
  border-radius: 0 !important; }

.clearfix::after {
  display: block;
  clear: both;
  content: ""; }

.d-none {
  display: none !important; }

.d-inline {
  display: inline !important; }

.d-inline-block {
  display: inline-block !important; }

.d-block {
  display: block !important; }

.d-table {
  display: table !important; }

.d-table-row {
  display: table-row !important; }

.d-table-cell {
  display: table-cell !important; }

.d-flex {
  display: -webkit-box !important;
  display: -webkit-flex !important;
  display: -ms-flexbox !important;
  display: flex !important; }

.d-inline-flex {
  display: -webkit-inline-box !important;
  display: -webkit-inline-flex !important;
  display: -ms-inline-flexbox !important;
  display: inline-flex !important; }

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important; }
  .d-sm-inline {
    display: inline !important; }
  .d-sm-inline-block {
    display: inline-block !important; }
  .d-sm-block {
    display: block !important; }
  .d-sm-table {
    display: table !important; }
  .d-sm-table-row {
    display: table-row !important; }
  .d-sm-table-cell {
    display: table-cell !important; }
  .d-sm-flex {
    display: -webkit-box !important;
    display: -webkit-flex !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-sm-inline-flex {
    display: -webkit-inline-box !important;
    display: -webkit-inline-flex !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

@media (min-width: 768px) {
  .d-md-none {
    display: none !important; }
  .d-md-inline {
    display: inline !important; }
  .d-md-inline-block {
    display: inline-block !important; }
  .d-md-block {
    display: block !important; }
  .d-md-table {
    display: table !important; }
  .d-md-table-row {
    display: table-row !important; }
  .d-md-table-cell {
    display: table-cell !important; }
  .d-md-flex {
    display: -webkit-box !important;
    display: -webkit-flex !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-md-inline-flex {
    display: -webkit-inline-box !important;
    display: -webkit-inline-flex !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

@media (min-width: 992px) {
  .d-lg-none {
    display: none !important; }
  .d-lg-inline {
    display: inline !important; }
  .d-lg-inline-block {
    display: inline-block !important; }
  .d-lg-block {
    display: block !important; }
  .d-lg-table {
    display: table !important; }
  .d-lg-table-row {
    display: table-row !important; }
  .d-lg-table-cell {
    display: table-cell !important; }
  .d-lg-flex {
    display: -webkit-box !important;
    display: -webkit-flex !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-lg-inline-flex {
    display: -webkit-inline-box !important;
    display: -webkit-inline-flex !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important; }
  .d-xl-inline {
    display: inline !important; }
  .d-xl-inline-block {
    display: inline-block !important; }
  .d-xl-block {
    display: block !important; }
  .d-xl-table {
    display: table !important; }
  .d-xl-table-row {
    display: table-row !important; }
  .d-xl-table-cell {
    display: table-cell !important; }
  .d-xl-flex {
    display: -webkit-box !important;
    display: -webkit-flex !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-xl-inline-flex {
    display: -webkit-inline-box !important;
    display: -webkit-inline-flex !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

@media print {
  .d-print-none {
    display: none !important; }
  .d-print-inline {
    display: inline !important; }
  .d-print-inline-block {
    display: inline-block !important; }
  .d-print-block {
    display: block !important; }
  .d-print-table {
    display: table !important; }
  .d-print-table-row {
    display: table-row !important; }
  .d-print-table-cell {
    display: table-cell !important; }
  .d-print-flex {
    display: -webkit-box !important;
    display: -webkit-flex !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-print-inline-flex {
    display: -webkit-inline-box !important;
    display: -webkit-inline-flex !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

.embed-responsive {
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  overflow: hidden; }
  .embed-responsive::before {
    display: block;
    content: ""; }
  .embed-responsive .embed-responsive-item,
  .embed-responsive iframe,
  .embed-responsive embed,
  .embed-responsive object,
  .embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0; }

.embed-responsive-21by9::before {
  padding-top: 42.85714%; }

.embed-responsive-16by9::before {
  padding-top: 56.25%; }

.embed-responsive-4by3::before {
  padding-top: 75%; }

.embed-responsive-1by1::before {
  padding-top: 100%; }

.flex-row {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: normal !important;
  -webkit-flex-direction: row !important;
      -ms-flex-direction: row !important;
          flex-direction: row !important; }

.flex-column {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: normal !important;
  -webkit-flex-direction: column !important;
      -ms-flex-direction: column !important;
          flex-direction: column !important; }

.flex-row-reverse {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: reverse !important;
  -webkit-flex-direction: row-reverse !important;
      -ms-flex-direction: row-reverse !important;
          flex-direction: row-reverse !important; }

.flex-column-reverse {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: reverse !important;
  -webkit-flex-direction: column-reverse !important;
      -ms-flex-direction: column-reverse !important;
          flex-direction: column-reverse !important; }

.flex-wrap {
  -webkit-flex-wrap: wrap !important;
      -ms-flex-wrap: wrap !important;
          flex-wrap: wrap !important; }

.flex-nowrap {
  -webkit-flex-wrap: nowrap !important;
      -ms-flex-wrap: nowrap !important;
          flex-wrap: nowrap !important; }

.flex-wrap-reverse {
  -webkit-flex-wrap: wrap-reverse !important;
      -ms-flex-wrap: wrap-reverse !important;
          flex-wrap: wrap-reverse !important; }

.flex-fill {
  -webkit-box-flex: 1 !important;
  -webkit-flex: 1 1 auto !important;
      -ms-flex: 1 1 auto !important;
          flex: 1 1 auto !important; }

.flex-grow-0 {
  -webkit-box-flex: 0 !important;
  -webkit-flex-grow: 0 !important;
      -ms-flex-positive: 0 !important;
          flex-grow: 0 !important; }

.flex-grow-1 {
  -webkit-box-flex: 1 !important;
  -webkit-flex-grow: 1 !important;
      -ms-flex-positive: 1 !important;
          flex-grow: 1 !important; }

.flex-shrink-0 {
  -webkit-flex-shrink: 0 !important;
      -ms-flex-negative: 0 !important;
          flex-shrink: 0 !important; }

.flex-shrink-1 {
  -webkit-flex-shrink: 1 !important;
      -ms-flex-negative: 1 !important;
          flex-shrink: 1 !important; }

.justify-content-start {
  -webkit-box-pack: start !important;
  -webkit-justify-content: flex-start !important;
      -ms-flex-pack: start !important;
          justify-content: flex-start !important; }

.justify-content-end {
  -webkit-box-pack: end !important;
  -webkit-justify-content: flex-end !important;
      -ms-flex-pack: end !important;
          justify-content: flex-end !important; }

.justify-content-center {
  -webkit-box-pack: center !important;
  -webkit-justify-content: center !important;
      -ms-flex-pack: center !important;
          justify-content: center !important; }

.justify-content-between {
  -webkit-box-pack: justify !important;
  -webkit-justify-content: space-between !important;
      -ms-flex-pack: justify !important;
          justify-content: space-between !important; }

.justify-content-around {
  -webkit-justify-content: space-around !important;
      -ms-flex-pack: distribute !important;
          justify-content: space-around !important; }

.align-items-start {
  -webkit-box-align: start !important;
  -webkit-align-items: flex-start !important;
      -ms-flex-align: start !important;
          align-items: flex-start !important; }

.align-items-end {
  -webkit-box-align: end !important;
  -webkit-align-items: flex-end !important;
      -ms-flex-align: end !important;
          align-items: flex-end !important; }

.align-items-center {
  -webkit-box-align: center !important;
  -webkit-align-items: center !important;
      -ms-flex-align: center !important;
          align-items: center !important; }

.align-items-baseline {
  -webkit-box-align: baseline !important;
  -webkit-align-items: baseline !important;
      -ms-flex-align: baseline !important;
          align-items: baseline !important; }

.align-items-stretch {
  -webkit-box-align: stretch !important;
  -webkit-align-items: stretch !important;
      -ms-flex-align: stretch !important;
          align-items: stretch !important; }

.align-content-start {
  -webkit-align-content: flex-start !important;
      -ms-flex-line-pack: start !important;
          align-content: flex-start !important; }

.align-content-end {
  -webkit-align-content: flex-end !important;
      -ms-flex-line-pack: end !important;
          align-content: flex-end !important; }

.align-content-center {
  -webkit-align-content: center !important;
      -ms-flex-line-pack: center !important;
          align-content: center !important; }

.align-content-between {
  -webkit-align-content: space-between !important;
      -ms-flex-line-pack: justify !important;
          align-content: space-between !important; }

.align-content-around {
  -webkit-align-content: space-around !important;
      -ms-flex-line-pack: distribute !important;
          align-content: space-around !important; }

.align-content-stretch {
  -webkit-align-content: stretch !important;
      -ms-flex-line-pack: stretch !important;
          align-content: stretch !important; }

.align-self-auto {
  -webkit-align-self: auto !important;
      -ms-flex-item-align: auto !important;
          align-self: auto !important; }

.align-self-start {
  -webkit-align-self: flex-start !important;
      -ms-flex-item-align: start !important;
          align-self: flex-start !important; }

.align-self-end {
  -webkit-align-self: flex-end !important;
      -ms-flex-item-align: end !important;
          align-self: flex-end !important; }

.align-self-center {
  -webkit-align-self: center !important;
      -ms-flex-item-align: center !important;
          align-self: center !important; }

.align-self-baseline {
  -webkit-align-self: baseline !important;
      -ms-flex-item-align: baseline !important;
          align-self: baseline !important; }

.align-self-stretch {
  -webkit-align-self: stretch !important;
      -ms-flex-item-align: stretch !important;
          align-self: stretch !important; }

@media (min-width: 576px) {
  .flex-sm-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -webkit-flex-direction: row !important;
        -ms-flex-direction: row !important;
            flex-direction: row !important; }
  .flex-sm-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -webkit-flex-direction: column !important;
        -ms-flex-direction: column !important;
            flex-direction: column !important; }
  .flex-sm-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -webkit-flex-direction: row-reverse !important;
        -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important; }
  .flex-sm-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -webkit-flex-direction: column-reverse !important;
        -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important; }
  .flex-sm-wrap {
    -webkit-flex-wrap: wrap !important;
        -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important; }
  .flex-sm-nowrap {
    -webkit-flex-wrap: nowrap !important;
        -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important; }
  .flex-sm-wrap-reverse {
    -webkit-flex-wrap: wrap-reverse !important;
        -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important; }
  .flex-sm-fill {
    -webkit-box-flex: 1 !important;
    -webkit-flex: 1 1 auto !important;
        -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important; }
  .flex-sm-grow-0 {
    -webkit-box-flex: 0 !important;
    -webkit-flex-grow: 0 !important;
        -ms-flex-positive: 0 !important;
            flex-grow: 0 !important; }
  .flex-sm-grow-1 {
    -webkit-box-flex: 1 !important;
    -webkit-flex-grow: 1 !important;
        -ms-flex-positive: 1 !important;
            flex-grow: 1 !important; }
  .flex-sm-shrink-0 {
    -webkit-flex-shrink: 0 !important;
        -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important; }
  .flex-sm-shrink-1 {
    -webkit-flex-shrink: 1 !important;
        -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important; }
  .justify-content-sm-start {
    -webkit-box-pack: start !important;
    -webkit-justify-content: flex-start !important;
        -ms-flex-pack: start !important;
            justify-content: flex-start !important; }
  .justify-content-sm-end {
    -webkit-box-pack: end !important;
    -webkit-justify-content: flex-end !important;
        -ms-flex-pack: end !important;
            justify-content: flex-end !important; }
  .justify-content-sm-center {
    -webkit-box-pack: center !important;
    -webkit-justify-content: center !important;
        -ms-flex-pack: center !important;
            justify-content: center !important; }
  .justify-content-sm-between {
    -webkit-box-pack: justify !important;
    -webkit-justify-content: space-between !important;
        -ms-flex-pack: justify !important;
            justify-content: space-between !important; }
  .justify-content-sm-around {
    -webkit-justify-content: space-around !important;
        -ms-flex-pack: distribute !important;
            justify-content: space-around !important; }
  .align-items-sm-start {
    -webkit-box-align: start !important;
    -webkit-align-items: flex-start !important;
        -ms-flex-align: start !important;
            align-items: flex-start !important; }
  .align-items-sm-end {
    -webkit-box-align: end !important;
    -webkit-align-items: flex-end !important;
        -ms-flex-align: end !important;
            align-items: flex-end !important; }
  .align-items-sm-center {
    -webkit-box-align: center !important;
    -webkit-align-items: center !important;
        -ms-flex-align: center !important;
            align-items: center !important; }
  .align-items-sm-baseline {
    -webkit-box-align: baseline !important;
    -webkit-align-items: baseline !important;
        -ms-flex-align: baseline !important;
            align-items: baseline !important; }
  .align-items-sm-stretch {
    -webkit-box-align: stretch !important;
    -webkit-align-items: stretch !important;
        -ms-flex-align: stretch !important;
            align-items: stretch !important; }
  .align-content-sm-start {
    -webkit-align-content: flex-start !important;
        -ms-flex-line-pack: start !important;
            align-content: flex-start !important; }
  .align-content-sm-end {
    -webkit-align-content: flex-end !important;
        -ms-flex-line-pack: end !important;
            align-content: flex-end !important; }
  .align-content-sm-center {
    -webkit-align-content: center !important;
        -ms-flex-line-pack: center !important;
            align-content: center !important; }
  .align-content-sm-between {
    -webkit-align-content: space-between !important;
        -ms-flex-line-pack: justify !important;
            align-content: space-between !important; }
  .align-content-sm-around {
    -webkit-align-content: space-around !important;
        -ms-flex-line-pack: distribute !important;
            align-content: space-around !important; }
  .align-content-sm-stretch {
    -webkit-align-content: stretch !important;
        -ms-flex-line-pack: stretch !important;
            align-content: stretch !important; }
  .align-self-sm-auto {
    -webkit-align-self: auto !important;
        -ms-flex-item-align: auto !important;
            align-self: auto !important; }
  .align-self-sm-start {
    -webkit-align-self: flex-start !important;
        -ms-flex-item-align: start !important;
            align-self: flex-start !important; }
  .align-self-sm-end {
    -webkit-align-self: flex-end !important;
        -ms-flex-item-align: end !important;
            align-self: flex-end !important; }
  .align-self-sm-center {
    -webkit-align-self: center !important;
        -ms-flex-item-align: center !important;
            align-self: center !important; }
  .align-self-sm-baseline {
    -webkit-align-self: baseline !important;
        -ms-flex-item-align: baseline !important;
            align-self: baseline !important; }
  .align-self-sm-stretch {
    -webkit-align-self: stretch !important;
        -ms-flex-item-align: stretch !important;
            align-self: stretch !important; } }

@media (min-width: 768px) {
  .flex-md-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -webkit-flex-direction: row !important;
        -ms-flex-direction: row !important;
            flex-direction: row !important; }
  .flex-md-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -webkit-flex-direction: column !important;
        -ms-flex-direction: column !important;
            flex-direction: column !important; }
  .flex-md-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -webkit-flex-direction: row-reverse !important;
        -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important; }
  .flex-md-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -webkit-flex-direction: column-reverse !important;
        -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important; }
  .flex-md-wrap {
    -webkit-flex-wrap: wrap !important;
        -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important; }
  .flex-md-nowrap {
    -webkit-flex-wrap: nowrap !important;
        -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important; }
  .flex-md-wrap-reverse {
    -webkit-flex-wrap: wrap-reverse !important;
        -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important; }
  .flex-md-fill {
    -webkit-box-flex: 1 !important;
    -webkit-flex: 1 1 auto !important;
        -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important; }
  .flex-md-grow-0 {
    -webkit-box-flex: 0 !important;
    -webkit-flex-grow: 0 !important;
        -ms-flex-positive: 0 !important;
            flex-grow: 0 !important; }
  .flex-md-grow-1 {
    -webkit-box-flex: 1 !important;
    -webkit-flex-grow: 1 !important;
        -ms-flex-positive: 1 !important;
            flex-grow: 1 !important; }
  .flex-md-shrink-0 {
    -webkit-flex-shrink: 0 !important;
        -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important; }
  .flex-md-shrink-1 {
    -webkit-flex-shrink: 1 !important;
        -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important; }
  .justify-content-md-start {
    -webkit-box-pack: start !important;
    -webkit-justify-content: flex-start !important;
        -ms-flex-pack: start !important;
            justify-content: flex-start !important; }
  .justify-content-md-end {
    -webkit-box-pack: end !important;
    -webkit-justify-content: flex-end !important;
        -ms-flex-pack: end !important;
            justify-content: flex-end !important; }
  .justify-content-md-center {
    -webkit-box-pack: center !important;
    -webkit-justify-content: center !important;
        -ms-flex-pack: center !important;
            justify-content: center !important; }
  .justify-content-md-between {
    -webkit-box-pack: justify !important;
    -webkit-justify-content: space-between !important;
        -ms-flex-pack: justify !important;
            justify-content: space-between !important; }
  .justify-content-md-around {
    -webkit-justify-content: space-around !important;
        -ms-flex-pack: distribute !important;
            justify-content: space-around !important; }
  .align-items-md-start {
    -webkit-box-align: start !important;
    -webkit-align-items: flex-start !important;
        -ms-flex-align: start !important;
            align-items: flex-start !important; }
  .align-items-md-end {
    -webkit-box-align: end !important;
    -webkit-align-items: flex-end !important;
        -ms-flex-align: end !important;
            align-items: flex-end !important; }
  .align-items-md-center {
    -webkit-box-align: center !important;
    -webkit-align-items: center !important;
        -ms-flex-align: center !important;
            align-items: center !important; }
  .align-items-md-baseline {
    -webkit-box-align: baseline !important;
    -webkit-align-items: baseline !important;
        -ms-flex-align: baseline !important;
            align-items: baseline !important; }
  .align-items-md-stretch {
    -webkit-box-align: stretch !important;
    -webkit-align-items: stretch !important;
        -ms-flex-align: stretch !important;
            align-items: stretch !important; }
  .align-content-md-start {
    -webkit-align-content: flex-start !important;
        -ms-flex-line-pack: start !important;
            align-content: flex-start !important; }
  .align-content-md-end {
    -webkit-align-content: flex-end !important;
        -ms-flex-line-pack: end !important;
            align-content: flex-end !important; }
  .align-content-md-center {
    -webkit-align-content: center !important;
        -ms-flex-line-pack: center !important;
            align-content: center !important; }
  .align-content-md-between {
    -webkit-align-content: space-between !important;
        -ms-flex-line-pack: justify !important;
            align-content: space-between !important; }
  .align-content-md-around {
    -webkit-align-content: space-around !important;
        -ms-flex-line-pack: distribute !important;
            align-content: space-around !important; }
  .align-content-md-stretch {
    -webkit-align-content: stretch !important;
        -ms-flex-line-pack: stretch !important;
            align-content: stretch !important; }
  .align-self-md-auto {
    -webkit-align-self: auto !important;
        -ms-flex-item-align: auto !important;
            align-self: auto !important; }
  .align-self-md-start {
    -webkit-align-self: flex-start !important;
        -ms-flex-item-align: start !important;
            align-self: flex-start !important; }
  .align-self-md-end {
    -webkit-align-self: flex-end !important;
        -ms-flex-item-align: end !important;
            align-self: flex-end !important; }
  .align-self-md-center {
    -webkit-align-self: center !important;
        -ms-flex-item-align: center !important;
            align-self: center !important; }
  .align-self-md-baseline {
    -webkit-align-self: baseline !important;
        -ms-flex-item-align: baseline !important;
            align-self: baseline !important; }
  .align-self-md-stretch {
    -webkit-align-self: stretch !important;
        -ms-flex-item-align: stretch !important;
            align-self: stretch !important; } }

@media (min-width: 992px) {
  .flex-lg-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -webkit-flex-direction: row !important;
        -ms-flex-direction: row !important;
            flex-direction: row !important; }
  .flex-lg-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -webkit-flex-direction: column !important;
        -ms-flex-direction: column !important;
            flex-direction: column !important; }
  .flex-lg-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -webkit-flex-direction: row-reverse !important;
        -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important; }
  .flex-lg-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -webkit-flex-direction: column-reverse !important;
        -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important; }
  .flex-lg-wrap {
    -webkit-flex-wrap: wrap !important;
        -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important; }
  .flex-lg-nowrap {
    -webkit-flex-wrap: nowrap !important;
        -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important; }
  .flex-lg-wrap-reverse {
    -webkit-flex-wrap: wrap-reverse !important;
        -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important; }
  .flex-lg-fill {
    -webkit-box-flex: 1 !important;
    -webkit-flex: 1 1 auto !important;
        -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important; }
  .flex-lg-grow-0 {
    -webkit-box-flex: 0 !important;
    -webkit-flex-grow: 0 !important;
        -ms-flex-positive: 0 !important;
            flex-grow: 0 !important; }
  .flex-lg-grow-1 {
    -webkit-box-flex: 1 !important;
    -webkit-flex-grow: 1 !important;
        -ms-flex-positive: 1 !important;
            flex-grow: 1 !important; }
  .flex-lg-shrink-0 {
    -webkit-flex-shrink: 0 !important;
        -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important; }
  .flex-lg-shrink-1 {
    -webkit-flex-shrink: 1 !important;
        -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important; }
  .justify-content-lg-start {
    -webkit-box-pack: start !important;
    -webkit-justify-content: flex-start !important;
        -ms-flex-pack: start !important;
            justify-content: flex-start !important; }
  .justify-content-lg-end {
    -webkit-box-pack: end !important;
    -webkit-justify-content: flex-end !important;
        -ms-flex-pack: end !important;
            justify-content: flex-end !important; }
  .justify-content-lg-center {
    -webkit-box-pack: center !important;
    -webkit-justify-content: center !important;
        -ms-flex-pack: center !important;
            justify-content: center !important; }
  .justify-content-lg-between {
    -webkit-box-pack: justify !important;
    -webkit-justify-content: space-between !important;
        -ms-flex-pack: justify !important;
            justify-content: space-between !important; }
  .justify-content-lg-around {
    -webkit-justify-content: space-around !important;
        -ms-flex-pack: distribute !important;
            justify-content: space-around !important; }
  .align-items-lg-start {
    -webkit-box-align: start !important;
    -webkit-align-items: flex-start !important;
        -ms-flex-align: start !important;
            align-items: flex-start !important; }
  .align-items-lg-end {
    -webkit-box-align: end !important;
    -webkit-align-items: flex-end !important;
        -ms-flex-align: end !important;
            align-items: flex-end !important; }
  .align-items-lg-center {
    -webkit-box-align: center !important;
    -webkit-align-items: center !important;
        -ms-flex-align: center !important;
            align-items: center !important; }
  .align-items-lg-baseline {
    -webkit-box-align: baseline !important;
    -webkit-align-items: baseline !important;
        -ms-flex-align: baseline !important;
            align-items: baseline !important; }
  .align-items-lg-stretch {
    -webkit-box-align: stretch !important;
    -webkit-align-items: stretch !important;
        -ms-flex-align: stretch !important;
            align-items: stretch !important; }
  .align-content-lg-start {
    -webkit-align-content: flex-start !important;
        -ms-flex-line-pack: start !important;
            align-content: flex-start !important; }
  .align-content-lg-end {
    -webkit-align-content: flex-end !important;
        -ms-flex-line-pack: end !important;
            align-content: flex-end !important; }
  .align-content-lg-center {
    -webkit-align-content: center !important;
        -ms-flex-line-pack: center !important;
            align-content: center !important; }
  .align-content-lg-between {
    -webkit-align-content: space-between !important;
        -ms-flex-line-pack: justify !important;
            align-content: space-between !important; }
  .align-content-lg-around {
    -webkit-align-content: space-around !important;
        -ms-flex-line-pack: distribute !important;
            align-content: space-around !important; }
  .align-content-lg-stretch {
    -webkit-align-content: stretch !important;
        -ms-flex-line-pack: stretch !important;
            align-content: stretch !important; }
  .align-self-lg-auto {
    -webkit-align-self: auto !important;
        -ms-flex-item-align: auto !important;
            align-self: auto !important; }
  .align-self-lg-start {
    -webkit-align-self: flex-start !important;
        -ms-flex-item-align: start !important;
            align-self: flex-start !important; }
  .align-self-lg-end {
    -webkit-align-self: flex-end !important;
        -ms-flex-item-align: end !important;
            align-self: flex-end !important; }
  .align-self-lg-center {
    -webkit-align-self: center !important;
        -ms-flex-item-align: center !important;
            align-self: center !important; }
  .align-self-lg-baseline {
    -webkit-align-self: baseline !important;
        -ms-flex-item-align: baseline !important;
            align-self: baseline !important; }
  .align-self-lg-stretch {
    -webkit-align-self: stretch !important;
        -ms-flex-item-align: stretch !important;
            align-self: stretch !important; } }

@media (min-width: 1200px) {
  .flex-xl-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -webkit-flex-direction: row !important;
        -ms-flex-direction: row !important;
            flex-direction: row !important; }
  .flex-xl-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -webkit-flex-direction: column !important;
        -ms-flex-direction: column !important;
            flex-direction: column !important; }
  .flex-xl-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -webkit-flex-direction: row-reverse !important;
        -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important; }
  .flex-xl-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -webkit-flex-direction: column-reverse !important;
        -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important; }
  .flex-xl-wrap {
    -webkit-flex-wrap: wrap !important;
        -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important; }
  .flex-xl-nowrap {
    -webkit-flex-wrap: nowrap !important;
        -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important; }
  .flex-xl-wrap-reverse {
    -webkit-flex-wrap: wrap-reverse !important;
        -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important; }
  .flex-xl-fill {
    -webkit-box-flex: 1 !important;
    -webkit-flex: 1 1 auto !important;
        -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important; }
  .flex-xl-grow-0 {
    -webkit-box-flex: 0 !important;
    -webkit-flex-grow: 0 !important;
        -ms-flex-positive: 0 !important;
            flex-grow: 0 !important; }
  .flex-xl-grow-1 {
    -webkit-box-flex: 1 !important;
    -webkit-flex-grow: 1 !important;
        -ms-flex-positive: 1 !important;
            flex-grow: 1 !important; }
  .flex-xl-shrink-0 {
    -webkit-flex-shrink: 0 !important;
        -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important; }
  .flex-xl-shrink-1 {
    -webkit-flex-shrink: 1 !important;
        -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important; }
  .justify-content-xl-start {
    -webkit-box-pack: start !important;
    -webkit-justify-content: flex-start !important;
        -ms-flex-pack: start !important;
            justify-content: flex-start !important; }
  .justify-content-xl-end {
    -webkit-box-pack: end !important;
    -webkit-justify-content: flex-end !important;
        -ms-flex-pack: end !important;
            justify-content: flex-end !important; }
  .justify-content-xl-center {
    -webkit-box-pack: center !important;
    -webkit-justify-content: center !important;
        -ms-flex-pack: center !important;
            justify-content: center !important; }
  .justify-content-xl-between {
    -webkit-box-pack: justify !important;
    -webkit-justify-content: space-between !important;
        -ms-flex-pack: justify !important;
            justify-content: space-between !important; }
  .justify-content-xl-around {
    -webkit-justify-content: space-around !important;
        -ms-flex-pack: distribute !important;
            justify-content: space-around !important; }
  .align-items-xl-start {
    -webkit-box-align: start !important;
    -webkit-align-items: flex-start !important;
        -ms-flex-align: start !important;
            align-items: flex-start !important; }
  .align-items-xl-end {
    -webkit-box-align: end !important;
    -webkit-align-items: flex-end !important;
        -ms-flex-align: end !important;
            align-items: flex-end !important; }
  .align-items-xl-center {
    -webkit-box-align: center !important;
    -webkit-align-items: center !important;
        -ms-flex-align: center !important;
            align-items: center !important; }
  .align-items-xl-baseline {
    -webkit-box-align: baseline !important;
    -webkit-align-items: baseline !important;
        -ms-flex-align: baseline !important;
            align-items: baseline !important; }
  .align-items-xl-stretch {
    -webkit-box-align: stretch !important;
    -webkit-align-items: stretch !important;
        -ms-flex-align: stretch !important;
            align-items: stretch !important; }
  .align-content-xl-start {
    -webkit-align-content: flex-start !important;
        -ms-flex-line-pack: start !important;
            align-content: flex-start !important; }
  .align-content-xl-end {
    -webkit-align-content: flex-end !important;
        -ms-flex-line-pack: end !important;
            align-content: flex-end !important; }
  .align-content-xl-center {
    -webkit-align-content: center !important;
        -ms-flex-line-pack: center !important;
            align-content: center !important; }
  .align-content-xl-between {
    -webkit-align-content: space-between !important;
        -ms-flex-line-pack: justify !important;
            align-content: space-between !important; }
  .align-content-xl-around {
    -webkit-align-content: space-around !important;
        -ms-flex-line-pack: distribute !important;
            align-content: space-around !important; }
  .align-content-xl-stretch {
    -webkit-align-content: stretch !important;
        -ms-flex-line-pack: stretch !important;
            align-content: stretch !important; }
  .align-self-xl-auto {
    -webkit-align-self: auto !important;
        -ms-flex-item-align: auto !important;
            align-self: auto !important; }
  .align-self-xl-start {
    -webkit-align-self: flex-start !important;
        -ms-flex-item-align: start !important;
            align-self: flex-start !important; }
  .align-self-xl-end {
    -webkit-align-self: flex-end !important;
        -ms-flex-item-align: end !important;
            align-self: flex-end !important; }
  .align-self-xl-center {
    -webkit-align-self: center !important;
        -ms-flex-item-align: center !important;
            align-self: center !important; }
  .align-self-xl-baseline {
    -webkit-align-self: baseline !important;
        -ms-flex-item-align: baseline !important;
            align-self: baseline !important; }
  .align-self-xl-stretch {
    -webkit-align-self: stretch !important;
        -ms-flex-item-align: stretch !important;
            align-self: stretch !important; } }

.float-left {
  float: left !important; }

.float-right {
  float: right !important; }

.float-none {
  float: none !important; }

@media (min-width: 576px) {
  .float-sm-left {
    float: left !important; }
  .float-sm-right {
    float: right !important; }
  .float-sm-none {
    float: none !important; } }

@media (min-width: 768px) {
  .float-md-left {
    float: left !important; }
  .float-md-right {
    float: right !important; }
  .float-md-none {
    float: none !important; } }

@media (min-width: 992px) {
  .float-lg-left {
    float: left !important; }
  .float-lg-right {
    float: right !important; }
  .float-lg-none {
    float: none !important; } }

@media (min-width: 1200px) {
  .float-xl-left {
    float: left !important; }
  .float-xl-right {
    float: right !important; }
  .float-xl-none {
    float: none !important; } }

.user-select-all {
  -webkit-user-select: all !important;
     -moz-user-select: all !important;
      -ms-user-select: all !important;
          user-select: all !important; }

.user-select-auto {
  -webkit-user-select: auto !important;
     -moz-user-select: auto !important;
      -ms-user-select: auto !important;
          user-select: auto !important; }

.user-select-none {
  -webkit-user-select: none !important;
     -moz-user-select: none !important;
      -ms-user-select: none !important;
          user-select: none !important; }

.overflow-auto {
  overflow: auto !important; }

.overflow-hidden {
  overflow: hidden !important; }

.position-static {
  position: static !important; }

.position-relative {
  position: relative !important; }

.position-absolute {
  position: absolute !important; }

.position-fixed {
  position: fixed !important; }

.position-sticky {
  position: -webkit-sticky !important;
  position: sticky !important; }

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030; }

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030; }

@supports ((position: -webkit-sticky) or (position: sticky)) {
  .sticky-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020; } }

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0; }

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  overflow: visible;
  clip: auto;
  white-space: normal; }

.shadow-sm {
  -webkit-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
          box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important; }

.shadow {
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important; }

.shadow-lg {
  -webkit-box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
          box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important; }

.shadow-none {
  -webkit-box-shadow: none !important;
          box-shadow: none !important; }

.w-25 {
  width: 25% !important; }

.w-50 {
  width: 50% !important; }

.w-75 {
  width: 75% !important; }

.w-100 {
  width: 100% !important; }

.w-auto {
  width: auto !important; }

.h-25 {
  height: 25% !important; }

.h-50 {
  height: 50% !important; }

.h-75 {
  height: 75% !important; }

.h-100 {
  height: 100% !important; }

.h-auto {
  height: auto !important; }

.mw-100 {
  max-width: 100% !important; }

.mh-100 {
  max-height: 100% !important; }

.min-vw-100 {
  min-width: 100vw !important; }

.min-vh-100 {
  min-height: 100vh !important; }

.vw-100 {
  width: 100vw !important; }

.vh-100 {
  height: 100vh !important; }

.m-0 {
  margin: 0 !important; }

.mt-0,
.my-0 {
  margin-top: 0 !important; }

.mr-0,
.mx-0 {
  margin-right: 0 !important; }

.mb-0,
.my-0 {
  margin-bottom: 0 !important; }

.ml-0,
.mx-0 {
  margin-left: 0 !important; }

.m-1 {
  margin: 0.25rem !important; }

.mt-1,
.my-1 {
  margin-top: 0.25rem !important; }

.mr-1,
.mx-1 {
  margin-right: 0.25rem !important; }

.mb-1,
.my-1 {
  margin-bottom: 0.25rem !important; }

.ml-1,
.mx-1 {
  margin-left: 0.25rem !important; }

.m-2 {
  margin: 0.5rem !important; }

.mt-2,
.my-2 {
  margin-top: 0.5rem !important; }

.mr-2,
.mx-2 {
  margin-right: 0.5rem !important; }

.mb-2,
.my-2 {
  margin-bottom: 0.5rem !important; }

.ml-2,
.mx-2 {
  margin-left: 0.5rem !important; }

.m-3 {
  margin: 1rem !important; }

.mt-3,
.my-3 {
  margin-top: 1rem !important; }

.mr-3,
.mx-3 {
  margin-right: 1rem !important; }

.mb-3,
.my-3 {
  margin-bottom: 1rem !important; }

.ml-3,
.mx-3 {
  margin-left: 1rem !important; }

.m-4 {
  margin: 1.5rem !important; }

.mt-4,
.my-4 {
  margin-top: 1.5rem !important; }

.mr-4,
.mx-4 {
  margin-right: 1.5rem !important; }

.mb-4,
.my-4 {
  margin-bottom: 1.5rem !important; }

.ml-4,
.mx-4 {
  margin-left: 1.5rem !important; }

.m-5 {
  margin: 3rem !important; }

.mt-5,
.my-5 {
  margin-top: 3rem !important; }

.mr-5,
.mx-5 {
  margin-right: 3rem !important; }

.mb-5,
.my-5 {
  margin-bottom: 3rem !important; }

.ml-5,
.mx-5 {
  margin-left: 3rem !important; }

.p-0 {
  padding: 0 !important; }

.pt-0,
.py-0 {
  padding-top: 0 !important; }

.pr-0,
.px-0 {
  padding-right: 0 !important; }

.pb-0,
.py-0 {
  padding-bottom: 0 !important; }

.pl-0,
.px-0 {
  padding-left: 0 !important; }

.p-1 {
  padding: 0.25rem !important; }

.pt-1,
.py-1 {
  padding-top: 0.25rem !important; }

.pr-1,
.px-1 {
  padding-right: 0.25rem !important; }

.pb-1,
.py-1 {
  padding-bottom: 0.25rem !important; }

.pl-1,
.px-1 {
  padding-left: 0.25rem !important; }

.p-2 {
  padding: 0.5rem !important; }

.pt-2,
.py-2 {
  padding-top: 0.5rem !important; }

.pr-2,
.px-2 {
  padding-right: 0.5rem !important; }

.pb-2,
.py-2 {
  padding-bottom: 0.5rem !important; }

.pl-2,
.px-2 {
  padding-left: 0.5rem !important; }

.p-3 {
  padding: 1rem !important; }

.pt-3,
.py-3 {
  padding-top: 1rem !important; }

.pr-3,
.px-3 {
  padding-right: 1rem !important; }

.pb-3,
.py-3 {
  padding-bottom: 1rem !important; }

.pl-3,
.px-3 {
  padding-left: 1rem !important; }

.p-4 {
  padding: 1.5rem !important; }

.pt-4,
.py-4 {
  padding-top: 1.5rem !important; }

.pr-4,
.px-4 {
  padding-right: 1.5rem !important; }

.pb-4,
.py-4 {
  padding-bottom: 1.5rem !important; }

.pl-4,
.px-4 {
  padding-left: 1.5rem !important; }

.p-5 {
  padding: 3rem !important; }

.pt-5,
.py-5 {
  padding-top: 3rem !important; }

.pr-5,
.px-5 {
  padding-right: 3rem !important; }

.pb-5,
.py-5 {
  padding-bottom: 3rem !important; }

.pl-5,
.px-5 {
  padding-left: 3rem !important; }

.m-n1 {
  margin: -0.25rem !important; }

.mt-n1,
.my-n1 {
  margin-top: -0.25rem !important; }

.mr-n1,
.mx-n1 {
  margin-right: -0.25rem !important; }

.mb-n1,
.my-n1 {
  margin-bottom: -0.25rem !important; }

.ml-n1,
.mx-n1 {
  margin-left: -0.25rem !important; }

.m-n2 {
  margin: -0.5rem !important; }

.mt-n2,
.my-n2 {
  margin-top: -0.5rem !important; }

.mr-n2,
.mx-n2 {
  margin-right: -0.5rem !important; }

.mb-n2,
.my-n2 {
  margin-bottom: -0.5rem !important; }

.ml-n2,
.mx-n2 {
  margin-left: -0.5rem !important; }

.m-n3 {
  margin: -1rem !important; }

.mt-n3,
.my-n3 {
  margin-top: -1rem !important; }

.mr-n3,
.mx-n3 {
  margin-right: -1rem !important; }

.mb-n3,
.my-n3 {
  margin-bottom: -1rem !important; }

.ml-n3,
.mx-n3 {
  margin-left: -1rem !important; }

.m-n4 {
  margin: -1.5rem !important; }

.mt-n4,
.my-n4 {
  margin-top: -1.5rem !important; }

.mr-n4,
.mx-n4 {
  margin-right: -1.5rem !important; }

.mb-n4,
.my-n4 {
  margin-bottom: -1.5rem !important; }

.ml-n4,
.mx-n4 {
  margin-left: -1.5rem !important; }

.m-n5 {
  margin: -3rem !important; }

.mt-n5,
.my-n5 {
  margin-top: -3rem !important; }

.mr-n5,
.mx-n5 {
  margin-right: -3rem !important; }

.mb-n5,
.my-n5 {
  margin-bottom: -3rem !important; }

.ml-n5,
.mx-n5 {
  margin-left: -3rem !important; }

.m-auto {
  margin: auto !important; }

.mt-auto,
.my-auto {
  margin-top: auto !important; }

.mr-auto,
.mx-auto {
  margin-right: auto !important; }

.mb-auto,
.my-auto {
  margin-bottom: auto !important; }

.ml-auto,
.mx-auto {
  margin-left: auto !important; }

@media (min-width: 576px) {
  .m-sm-0 {
    margin: 0 !important; }
  .mt-sm-0,
  .my-sm-0 {
    margin-top: 0 !important; }
  .mr-sm-0,
  .mx-sm-0 {
    margin-right: 0 !important; }
  .mb-sm-0,
  .my-sm-0 {
    margin-bottom: 0 !important; }
  .ml-sm-0,
  .mx-sm-0 {
    margin-left: 0 !important; }
  .m-sm-1 {
    margin: 0.25rem !important; }
  .mt-sm-1,
  .my-sm-1 {
    margin-top: 0.25rem !important; }
  .mr-sm-1,
  .mx-sm-1 {
    margin-right: 0.25rem !important; }
  .mb-sm-1,
  .my-sm-1 {
    margin-bottom: 0.25rem !important; }
  .ml-sm-1,
  .mx-sm-1 {
    margin-left: 0.25rem !important; }
  .m-sm-2 {
    margin: 0.5rem !important; }
  .mt-sm-2,
  .my-sm-2 {
    margin-top: 0.5rem !important; }
  .mr-sm-2,
  .mx-sm-2 {
    margin-right: 0.5rem !important; }
  .mb-sm-2,
  .my-sm-2 {
    margin-bottom: 0.5rem !important; }
  .ml-sm-2,
  .mx-sm-2 {
    margin-left: 0.5rem !important; }
  .m-sm-3 {
    margin: 1rem !important; }
  .mt-sm-3,
  .my-sm-3 {
    margin-top: 1rem !important; }
  .mr-sm-3,
  .mx-sm-3 {
    margin-right: 1rem !important; }
  .mb-sm-3,
  .my-sm-3 {
    margin-bottom: 1rem !important; }
  .ml-sm-3,
  .mx-sm-3 {
    margin-left: 1rem !important; }
  .m-sm-4 {
    margin: 1.5rem !important; }
  .mt-sm-4,
  .my-sm-4 {
    margin-top: 1.5rem !important; }
  .mr-sm-4,
  .mx-sm-4 {
    margin-right: 1.5rem !important; }
  .mb-sm-4,
  .my-sm-4 {
    margin-bottom: 1.5rem !important; }
  .ml-sm-4,
  .mx-sm-4 {
    margin-left: 1.5rem !important; }
  .m-sm-5 {
    margin: 3rem !important; }
  .mt-sm-5,
  .my-sm-5 {
    margin-top: 3rem !important; }
  .mr-sm-5,
  .mx-sm-5 {
    margin-right: 3rem !important; }
  .mb-sm-5,
  .my-sm-5 {
    margin-bottom: 3rem !important; }
  .ml-sm-5,
  .mx-sm-5 {
    margin-left: 3rem !important; }
  .p-sm-0 {
    padding: 0 !important; }
  .pt-sm-0,
  .py-sm-0 {
    padding-top: 0 !important; }
  .pr-sm-0,
  .px-sm-0 {
    padding-right: 0 !important; }
  .pb-sm-0,
  .py-sm-0 {
    padding-bottom: 0 !important; }
  .pl-sm-0,
  .px-sm-0 {
    padding-left: 0 !important; }
  .p-sm-1 {
    padding: 0.25rem !important; }
  .pt-sm-1,
  .py-sm-1 {
    padding-top: 0.25rem !important; }
  .pr-sm-1,
  .px-sm-1 {
    padding-right: 0.25rem !important; }
  .pb-sm-1,
  .py-sm-1 {
    padding-bottom: 0.25rem !important; }
  .pl-sm-1,
  .px-sm-1 {
    padding-left: 0.25rem !important; }
  .p-sm-2 {
    padding: 0.5rem !important; }
  .pt-sm-2,
  .py-sm-2 {
    padding-top: 0.5rem !important; }
  .pr-sm-2,
  .px-sm-2 {
    padding-right: 0.5rem !important; }
  .pb-sm-2,
  .py-sm-2 {
    padding-bottom: 0.5rem !important; }
  .pl-sm-2,
  .px-sm-2 {
    padding-left: 0.5rem !important; }
  .p-sm-3 {
    padding: 1rem !important; }
  .pt-sm-3,
  .py-sm-3 {
    padding-top: 1rem !important; }
  .pr-sm-3,
  .px-sm-3 {
    padding-right: 1rem !important; }
  .pb-sm-3,
  .py-sm-3 {
    padding-bottom: 1rem !important; }
  .pl-sm-3,
  .px-sm-3 {
    padding-left: 1rem !important; }
  .p-sm-4 {
    padding: 1.5rem !important; }
  .pt-sm-4,
  .py-sm-4 {
    padding-top: 1.5rem !important; }
  .pr-sm-4,
  .px-sm-4 {
    padding-right: 1.5rem !important; }
  .pb-sm-4,
  .py-sm-4 {
    padding-bottom: 1.5rem !important; }
  .pl-sm-4,
  .px-sm-4 {
    padding-left: 1.5rem !important; }
  .p-sm-5 {
    padding: 3rem !important; }
  .pt-sm-5,
  .py-sm-5 {
    padding-top: 3rem !important; }
  .pr-sm-5,
  .px-sm-5 {
    padding-right: 3rem !important; }
  .pb-sm-5,
  .py-sm-5 {
    padding-bottom: 3rem !important; }
  .pl-sm-5,
  .px-sm-5 {
    padding-left: 3rem !important; }
  .m-sm-n1 {
    margin: -0.25rem !important; }
  .mt-sm-n1,
  .my-sm-n1 {
    margin-top: -0.25rem !important; }
  .mr-sm-n1,
  .mx-sm-n1 {
    margin-right: -0.25rem !important; }
  .mb-sm-n1,
  .my-sm-n1 {
    margin-bottom: -0.25rem !important; }
  .ml-sm-n1,
  .mx-sm-n1 {
    margin-left: -0.25rem !important; }
  .m-sm-n2 {
    margin: -0.5rem !important; }
  .mt-sm-n2,
  .my-sm-n2 {
    margin-top: -0.5rem !important; }
  .mr-sm-n2,
  .mx-sm-n2 {
    margin-right: -0.5rem !important; }
  .mb-sm-n2,
  .my-sm-n2 {
    margin-bottom: -0.5rem !important; }
  .ml-sm-n2,
  .mx-sm-n2 {
    margin-left: -0.5rem !important; }
  .m-sm-n3 {
    margin: -1rem !important; }
  .mt-sm-n3,
  .my-sm-n3 {
    margin-top: -1rem !important; }
  .mr-sm-n3,
  .mx-sm-n3 {
    margin-right: -1rem !important; }
  .mb-sm-n3,
  .my-sm-n3 {
    margin-bottom: -1rem !important; }
  .ml-sm-n3,
  .mx-sm-n3 {
    margin-left: -1rem !important; }
  .m-sm-n4 {
    margin: -1.5rem !important; }
  .mt-sm-n4,
  .my-sm-n4 {
    margin-top: -1.5rem !important; }
  .mr-sm-n4,
  .mx-sm-n4 {
    margin-right: -1.5rem !important; }
  .mb-sm-n4,
  .my-sm-n4 {
    margin-bottom: -1.5rem !important; }
  .ml-sm-n4,
  .mx-sm-n4 {
    margin-left: -1.5rem !important; }
  .m-sm-n5 {
    margin: -3rem !important; }
  .mt-sm-n5,
  .my-sm-n5 {
    margin-top: -3rem !important; }
  .mr-sm-n5,
  .mx-sm-n5 {
    margin-right: -3rem !important; }
  .mb-sm-n5,
  .my-sm-n5 {
    margin-bottom: -3rem !important; }
  .ml-sm-n5,
  .mx-sm-n5 {
    margin-left: -3rem !important; }
  .m-sm-auto {
    margin: auto !important; }
  .mt-sm-auto,
  .my-sm-auto {
    margin-top: auto !important; }
  .mr-sm-auto,
  .mx-sm-auto {
    margin-right: auto !important; }
  .mb-sm-auto,
  .my-sm-auto {
    margin-bottom: auto !important; }
  .ml-sm-auto,
  .mx-sm-auto {
    margin-left: auto !important; } }

@media (min-width: 768px) {
  .m-md-0 {
    margin: 0 !important; }
  .mt-md-0,
  .my-md-0 {
    margin-top: 0 !important; }
  .mr-md-0,
  .mx-md-0 {
    margin-right: 0 !important; }
  .mb-md-0,
  .my-md-0 {
    margin-bottom: 0 !important; }
  .ml-md-0,
  .mx-md-0 {
    margin-left: 0 !important; }
  .m-md-1 {
    margin: 0.25rem !important; }
  .mt-md-1,
  .my-md-1 {
    margin-top: 0.25rem !important; }
  .mr-md-1,
  .mx-md-1 {
    margin-right: 0.25rem !important; }
  .mb-md-1,
  .my-md-1 {
    margin-bottom: 0.25rem !important; }
  .ml-md-1,
  .mx-md-1 {
    margin-left: 0.25rem !important; }
  .m-md-2 {
    margin: 0.5rem !important; }
  .mt-md-2,
  .my-md-2 {
    margin-top: 0.5rem !important; }
  .mr-md-2,
  .mx-md-2 {
    margin-right: 0.5rem !important; }
  .mb-md-2,
  .my-md-2 {
    margin-bottom: 0.5rem !important; }
  .ml-md-2,
  .mx-md-2 {
    margin-left: 0.5rem !important; }
  .m-md-3 {
    margin: 1rem !important; }
  .mt-md-3,
  .my-md-3 {
    margin-top: 1rem !important; }
  .mr-md-3,
  .mx-md-3 {
    margin-right: 1rem !important; }
  .mb-md-3,
  .my-md-3 {
    margin-bottom: 1rem !important; }
  .ml-md-3,
  .mx-md-3 {
    margin-left: 1rem !important; }
  .m-md-4 {
    margin: 1.5rem !important; }
  .mt-md-4,
  .my-md-4 {
    margin-top: 1.5rem !important; }
  .mr-md-4,
  .mx-md-4 {
    margin-right: 1.5rem !important; }
  .mb-md-4,
  .my-md-4 {
    margin-bottom: 1.5rem !important; }
  .ml-md-4,
  .mx-md-4 {
    margin-left: 1.5rem !important; }
  .m-md-5 {
    margin: 3rem !important; }
  .mt-md-5,
  .my-md-5 {
    margin-top: 3rem !important; }
  .mr-md-5,
  .mx-md-5 {
    margin-right: 3rem !important; }
  .mb-md-5,
  .my-md-5 {
    margin-bottom: 3rem !important; }
  .ml-md-5,
  .mx-md-5 {
    margin-left: 3rem !important; }
  .p-md-0 {
    padding: 0 !important; }
  .pt-md-0,
  .py-md-0 {
    padding-top: 0 !important; }
  .pr-md-0,
  .px-md-0 {
    padding-right: 0 !important; }
  .pb-md-0,
  .py-md-0 {
    padding-bottom: 0 !important; }
  .pl-md-0,
  .px-md-0 {
    padding-left: 0 !important; }
  .p-md-1 {
    padding: 0.25rem !important; }
  .pt-md-1,
  .py-md-1 {
    padding-top: 0.25rem !important; }
  .pr-md-1,
  .px-md-1 {
    padding-right: 0.25rem !important; }
  .pb-md-1,
  .py-md-1 {
    padding-bottom: 0.25rem !important; }
  .pl-md-1,
  .px-md-1 {
    padding-left: 0.25rem !important; }
  .p-md-2 {
    padding: 0.5rem !important; }
  .pt-md-2,
  .py-md-2 {
    padding-top: 0.5rem !important; }
  .pr-md-2,
  .px-md-2 {
    padding-right: 0.5rem !important; }
  .pb-md-2,
  .py-md-2 {
    padding-bottom: 0.5rem !important; }
  .pl-md-2,
  .px-md-2 {
    padding-left: 0.5rem !important; }
  .p-md-3 {
    padding: 1rem !important; }
  .pt-md-3,
  .py-md-3 {
    padding-top: 1rem !important; }
  .pr-md-3,
  .px-md-3 {
    padding-right: 1rem !important; }
  .pb-md-3,
  .py-md-3 {
    padding-bottom: 1rem !important; }
  .pl-md-3,
  .px-md-3 {
    padding-left: 1rem !important; }
  .p-md-4 {
    padding: 1.5rem !important; }
  .pt-md-4,
  .py-md-4 {
    padding-top: 1.5rem !important; }
  .pr-md-4,
  .px-md-4 {
    padding-right: 1.5rem !important; }
  .pb-md-4,
  .py-md-4 {
    padding-bottom: 1.5rem !important; }
  .pl-md-4,
  .px-md-4 {
    padding-left: 1.5rem !important; }
  .p-md-5 {
    padding: 3rem !important; }
  .pt-md-5,
  .py-md-5 {
    padding-top: 3rem !important; }
  .pr-md-5,
  .px-md-5 {
    padding-right: 3rem !important; }
  .pb-md-5,
  .py-md-5 {
    padding-bottom: 3rem !important; }
  .pl-md-5,
  .px-md-5 {
    padding-left: 3rem !important; }
  .m-md-n1 {
    margin: -0.25rem !important; }
  .mt-md-n1,
  .my-md-n1 {
    margin-top: -0.25rem !important; }
  .mr-md-n1,
  .mx-md-n1 {
    margin-right: -0.25rem !important; }
  .mb-md-n1,
  .my-md-n1 {
    margin-bottom: -0.25rem !important; }
  .ml-md-n1,
  .mx-md-n1 {
    margin-left: -0.25rem !important; }
  .m-md-n2 {
    margin: -0.5rem !important; }
  .mt-md-n2,
  .my-md-n2 {
    margin-top: -0.5rem !important; }
  .mr-md-n2,
  .mx-md-n2 {
    margin-right: -0.5rem !important; }
  .mb-md-n2,
  .my-md-n2 {
    margin-bottom: -0.5rem !important; }
  .ml-md-n2,
  .mx-md-n2 {
    margin-left: -0.5rem !important; }
  .m-md-n3 {
    margin: -1rem !important; }
  .mt-md-n3,
  .my-md-n3 {
    margin-top: -1rem !important; }
  .mr-md-n3,
  .mx-md-n3 {
    margin-right: -1rem !important; }
  .mb-md-n3,
  .my-md-n3 {
    margin-bottom: -1rem !important; }
  .ml-md-n3,
  .mx-md-n3 {
    margin-left: -1rem !important; }
  .m-md-n4 {
    margin: -1.5rem !important; }
  .mt-md-n4,
  .my-md-n4 {
    margin-top: -1.5rem !important; }
  .mr-md-n4,
  .mx-md-n4 {
    margin-right: -1.5rem !important; }
  .mb-md-n4,
  .my-md-n4 {
    margin-bottom: -1.5rem !important; }
  .ml-md-n4,
  .mx-md-n4 {
    margin-left: -1.5rem !important; }
  .m-md-n5 {
    margin: -3rem !important; }
  .mt-md-n5,
  .my-md-n5 {
    margin-top: -3rem !important; }
  .mr-md-n5,
  .mx-md-n5 {
    margin-right: -3rem !important; }
  .mb-md-n5,
  .my-md-n5 {
    margin-bottom: -3rem !important; }
  .ml-md-n5,
  .mx-md-n5 {
    margin-left: -3rem !important; }
  .m-md-auto {
    margin: auto !important; }
  .mt-md-auto,
  .my-md-auto {
    margin-top: auto !important; }
  .mr-md-auto,
  .mx-md-auto {
    margin-right: auto !important; }
  .mb-md-auto,
  .my-md-auto {
    margin-bottom: auto !important; }
  .ml-md-auto,
  .mx-md-auto {
    margin-left: auto !important; } }

@media (min-width: 992px) {
  .m-lg-0 {
    margin: 0 !important; }
  .mt-lg-0,
  .my-lg-0 {
    margin-top: 0 !important; }
  .mr-lg-0,
  .mx-lg-0 {
    margin-right: 0 !important; }
  .mb-lg-0,
  .my-lg-0 {
    margin-bottom: 0 !important; }
  .ml-lg-0,
  .mx-lg-0 {
    margin-left: 0 !important; }
  .m-lg-1 {
    margin: 0.25rem !important; }
  .mt-lg-1,
  .my-lg-1 {
    margin-top: 0.25rem !important; }
  .mr-lg-1,
  .mx-lg-1 {
    margin-right: 0.25rem !important; }
  .mb-lg-1,
  .my-lg-1 {
    margin-bottom: 0.25rem !important; }
  .ml-lg-1,
  .mx-lg-1 {
    margin-left: 0.25rem !important; }
  .m-lg-2 {
    margin: 0.5rem !important; }
  .mt-lg-2,
  .my-lg-2 {
    margin-top: 0.5rem !important; }
  .mr-lg-2,
  .mx-lg-2 {
    margin-right: 0.5rem !important; }
  .mb-lg-2,
  .my-lg-2 {
    margin-bottom: 0.5rem !important; }
  .ml-lg-2,
  .mx-lg-2 {
    margin-left: 0.5rem !important; }
  .m-lg-3 {
    margin: 1rem !important; }
  .mt-lg-3,
  .my-lg-3 {
    margin-top: 1rem !important; }
  .mr-lg-3,
  .mx-lg-3 {
    margin-right: 1rem !important; }
  .mb-lg-3,
  .my-lg-3 {
    margin-bottom: 1rem !important; }
  .ml-lg-3,
  .mx-lg-3 {
    margin-left: 1rem !important; }
  .m-lg-4 {
    margin: 1.5rem !important; }
  .mt-lg-4,
  .my-lg-4 {
    margin-top: 1.5rem !important; }
  .mr-lg-4,
  .mx-lg-4 {
    margin-right: 1.5rem !important; }
  .mb-lg-4,
  .my-lg-4 {
    margin-bottom: 1.5rem !important; }
  .ml-lg-4,
  .mx-lg-4 {
    margin-left: 1.5rem !important; }
  .m-lg-5 {
    margin: 3rem !important; }
  .mt-lg-5,
  .my-lg-5 {
    margin-top: 3rem !important; }
  .mr-lg-5,
  .mx-lg-5 {
    margin-right: 3rem !important; }
  .mb-lg-5,
  .my-lg-5 {
    margin-bottom: 3rem !important; }
  .ml-lg-5,
  .mx-lg-5 {
    margin-left: 3rem !important; }
  .p-lg-0 {
    padding: 0 !important; }
  .pt-lg-0,
  .py-lg-0 {
    padding-top: 0 !important; }
  .pr-lg-0,
  .px-lg-0 {
    padding-right: 0 !important; }
  .pb-lg-0,
  .py-lg-0 {
    padding-bottom: 0 !important; }
  .pl-lg-0,
  .px-lg-0 {
    padding-left: 0 !important; }
  .p-lg-1 {
    padding: 0.25rem !important; }
  .pt-lg-1,
  .py-lg-1 {
    padding-top: 0.25rem !important; }
  .pr-lg-1,
  .px-lg-1 {
    padding-right: 0.25rem !important; }
  .pb-lg-1,
  .py-lg-1 {
    padding-bottom: 0.25rem !important; }
  .pl-lg-1,
  .px-lg-1 {
    padding-left: 0.25rem !important; }
  .p-lg-2 {
    padding: 0.5rem !important; }
  .pt-lg-2,
  .py-lg-2 {
    padding-top: 0.5rem !important; }
  .pr-lg-2,
  .px-lg-2 {
    padding-right: 0.5rem !important; }
  .pb-lg-2,
  .py-lg-2 {
    padding-bottom: 0.5rem !important; }
  .pl-lg-2,
  .px-lg-2 {
    padding-left: 0.5rem !important; }
  .p-lg-3 {
    padding: 1rem !important; }
  .pt-lg-3,
  .py-lg-3 {
    padding-top: 1rem !important; }
  .pr-lg-3,
  .px-lg-3 {
    padding-right: 1rem !important; }
  .pb-lg-3,
  .py-lg-3 {
    padding-bottom: 1rem !important; }
  .pl-lg-3,
  .px-lg-3 {
    padding-left: 1rem !important; }
  .p-lg-4 {
    padding: 1.5rem !important; }
  .pt-lg-4,
  .py-lg-4 {
    padding-top: 1.5rem !important; }
  .pr-lg-4,
  .px-lg-4 {
    padding-right: 1.5rem !important; }
  .pb-lg-4,
  .py-lg-4 {
    padding-bottom: 1.5rem !important; }
  .pl-lg-4,
  .px-lg-4 {
    padding-left: 1.5rem !important; }
  .p-lg-5 {
    padding: 3rem !important; }
  .pt-lg-5,
  .py-lg-5 {
    padding-top: 3rem !important; }
  .pr-lg-5,
  .px-lg-5 {
    padding-right: 3rem !important; }
  .pb-lg-5,
  .py-lg-5 {
    padding-bottom: 3rem !important; }
  .pl-lg-5,
  .px-lg-5 {
    padding-left: 3rem !important; }
  .m-lg-n1 {
    margin: -0.25rem !important; }
  .mt-lg-n1,
  .my-lg-n1 {
    margin-top: -0.25rem !important; }
  .mr-lg-n1,
  .mx-lg-n1 {
    margin-right: -0.25rem !important; }
  .mb-lg-n1,
  .my-lg-n1 {
    margin-bottom: -0.25rem !important; }
  .ml-lg-n1,
  .mx-lg-n1 {
    margin-left: -0.25rem !important; }
  .m-lg-n2 {
    margin: -0.5rem !important; }
  .mt-lg-n2,
  .my-lg-n2 {
    margin-top: -0.5rem !important; }
  .mr-lg-n2,
  .mx-lg-n2 {
    margin-right: -0.5rem !important; }
  .mb-lg-n2,
  .my-lg-n2 {
    margin-bottom: -0.5rem !important; }
  .ml-lg-n2,
  .mx-lg-n2 {
    margin-left: -0.5rem !important; }
  .m-lg-n3 {
    margin: -1rem !important; }
  .mt-lg-n3,
  .my-lg-n3 {
    margin-top: -1rem !important; }
  .mr-lg-n3,
  .mx-lg-n3 {
    margin-right: -1rem !important; }
  .mb-lg-n3,
  .my-lg-n3 {
    margin-bottom: -1rem !important; }
  .ml-lg-n3,
  .mx-lg-n3 {
    margin-left: -1rem !important; }
  .m-lg-n4 {
    margin: -1.5rem !important; }
  .mt-lg-n4,
  .my-lg-n4 {
    margin-top: -1.5rem !important; }
  .mr-lg-n4,
  .mx-lg-n4 {
    margin-right: -1.5rem !important; }
  .mb-lg-n4,
  .my-lg-n4 {
    margin-bottom: -1.5rem !important; }
  .ml-lg-n4,
  .mx-lg-n4 {
    margin-left: -1.5rem !important; }
  .m-lg-n5 {
    margin: -3rem !important; }
  .mt-lg-n5,
  .my-lg-n5 {
    margin-top: -3rem !important; }
  .mr-lg-n5,
  .mx-lg-n5 {
    margin-right: -3rem !important; }
  .mb-lg-n5,
  .my-lg-n5 {
    margin-bottom: -3rem !important; }
  .ml-lg-n5,
  .mx-lg-n5 {
    margin-left: -3rem !important; }
  .m-lg-auto {
    margin: auto !important; }
  .mt-lg-auto,
  .my-lg-auto {
    margin-top: auto !important; }
  .mr-lg-auto,
  .mx-lg-auto {
    margin-right: auto !important; }
  .mb-lg-auto,
  .my-lg-auto {
    margin-bottom: auto !important; }
  .ml-lg-auto,
  .mx-lg-auto {
    margin-left: auto !important; } }

@media (min-width: 1200px) {
  .m-xl-0 {
    margin: 0 !important; }
  .mt-xl-0,
  .my-xl-0 {
    margin-top: 0 !important; }
  .mr-xl-0,
  .mx-xl-0 {
    margin-right: 0 !important; }
  .mb-xl-0,
  .my-xl-0 {
    margin-bottom: 0 !important; }
  .ml-xl-0,
  .mx-xl-0 {
    margin-left: 0 !important; }
  .m-xl-1 {
    margin: 0.25rem !important; }
  .mt-xl-1,
  .my-xl-1 {
    margin-top: 0.25rem !important; }
  .mr-xl-1,
  .mx-xl-1 {
    margin-right: 0.25rem !important; }
  .mb-xl-1,
  .my-xl-1 {
    margin-bottom: 0.25rem !important; }
  .ml-xl-1,
  .mx-xl-1 {
    margin-left: 0.25rem !important; }
  .m-xl-2 {
    margin: 0.5rem !important; }
  .mt-xl-2,
  .my-xl-2 {
    margin-top: 0.5rem !important; }
  .mr-xl-2,
  .mx-xl-2 {
    margin-right: 0.5rem !important; }
  .mb-xl-2,
  .my-xl-2 {
    margin-bottom: 0.5rem !important; }
  .ml-xl-2,
  .mx-xl-2 {
    margin-left: 0.5rem !important; }
  .m-xl-3 {
    margin: 1rem !important; }
  .mt-xl-3,
  .my-xl-3 {
    margin-top: 1rem !important; }
  .mr-xl-3,
  .mx-xl-3 {
    margin-right: 1rem !important; }
  .mb-xl-3,
  .my-xl-3 {
    margin-bottom: 1rem !important; }
  .ml-xl-3,
  .mx-xl-3 {
    margin-left: 1rem !important; }
  .m-xl-4 {
    margin: 1.5rem !important; }
  .mt-xl-4,
  .my-xl-4 {
    margin-top: 1.5rem !important; }
  .mr-xl-4,
  .mx-xl-4 {
    margin-right: 1.5rem !important; }
  .mb-xl-4,
  .my-xl-4 {
    margin-bottom: 1.5rem !important; }
  .ml-xl-4,
  .mx-xl-4 {
    margin-left: 1.5rem !important; }
  .m-xl-5 {
    margin: 3rem !important; }
  .mt-xl-5,
  .my-xl-5 {
    margin-top: 3rem !important; }
  .mr-xl-5,
  .mx-xl-5 {
    margin-right: 3rem !important; }
  .mb-xl-5,
  .my-xl-5 {
    margin-bottom: 3rem !important; }
  .ml-xl-5,
  .mx-xl-5 {
    margin-left: 3rem !important; }
  .p-xl-0 {
    padding: 0 !important; }
  .pt-xl-0,
  .py-xl-0 {
    padding-top: 0 !important; }
  .pr-xl-0,
  .px-xl-0 {
    padding-right: 0 !important; }
  .pb-xl-0,
  .py-xl-0 {
    padding-bottom: 0 !important; }
  .pl-xl-0,
  .px-xl-0 {
    padding-left: 0 !important; }
  .p-xl-1 {
    padding: 0.25rem !important; }
  .pt-xl-1,
  .py-xl-1 {
    padding-top: 0.25rem !important; }
  .pr-xl-1,
  .px-xl-1 {
    padding-right: 0.25rem !important; }
  .pb-xl-1,
  .py-xl-1 {
    padding-bottom: 0.25rem !important; }
  .pl-xl-1,
  .px-xl-1 {
    padding-left: 0.25rem !important; }
  .p-xl-2 {
    padding: 0.5rem !important; }
  .pt-xl-2,
  .py-xl-2 {
    padding-top: 0.5rem !important; }
  .pr-xl-2,
  .px-xl-2 {
    padding-right: 0.5rem !important; }
  .pb-xl-2,
  .py-xl-2 {
    padding-bottom: 0.5rem !important; }
  .pl-xl-2,
  .px-xl-2 {
    padding-left: 0.5rem !important; }
  .p-xl-3 {
    padding: 1rem !important; }
  .pt-xl-3,
  .py-xl-3 {
    padding-top: 1rem !important; }
  .pr-xl-3,
  .px-xl-3 {
    padding-right: 1rem !important; }
  .pb-xl-3,
  .py-xl-3 {
    padding-bottom: 1rem !important; }
  .pl-xl-3,
  .px-xl-3 {
    padding-left: 1rem !important; }
  .p-xl-4 {
    padding: 1.5rem !important; }
  .pt-xl-4,
  .py-xl-4 {
    padding-top: 1.5rem !important; }
  .pr-xl-4,
  .px-xl-4 {
    padding-right: 1.5rem !important; }
  .pb-xl-4,
  .py-xl-4 {
    padding-bottom: 1.5rem !important; }
  .pl-xl-4,
  .px-xl-4 {
    padding-left: 1.5rem !important; }
  .p-xl-5 {
    padding: 3rem !important; }
  .pt-xl-5,
  .py-xl-5 {
    padding-top: 3rem !important; }
  .pr-xl-5,
  .px-xl-5 {
    padding-right: 3rem !important; }
  .pb-xl-5,
  .py-xl-5 {
    padding-bottom: 3rem !important; }
  .pl-xl-5,
  .px-xl-5 {
    padding-left: 3rem !important; }
  .m-xl-n1 {
    margin: -0.25rem !important; }
  .mt-xl-n1,
  .my-xl-n1 {
    margin-top: -0.25rem !important; }
  .mr-xl-n1,
  .mx-xl-n1 {
    margin-right: -0.25rem !important; }
  .mb-xl-n1,
  .my-xl-n1 {
    margin-bottom: -0.25rem !important; }
  .ml-xl-n1,
  .mx-xl-n1 {
    margin-left: -0.25rem !important; }
  .m-xl-n2 {
    margin: -0.5rem !important; }
  .mt-xl-n2,
  .my-xl-n2 {
    margin-top: -0.5rem !important; }
  .mr-xl-n2,
  .mx-xl-n2 {
    margin-right: -0.5rem !important; }
  .mb-xl-n2,
  .my-xl-n2 {
    margin-bottom: -0.5rem !important; }
  .ml-xl-n2,
  .mx-xl-n2 {
    margin-left: -0.5rem !important; }
  .m-xl-n3 {
    margin: -1rem !important; }
  .mt-xl-n3,
  .my-xl-n3 {
    margin-top: -1rem !important; }
  .mr-xl-n3,
  .mx-xl-n3 {
    margin-right: -1rem !important; }
  .mb-xl-n3,
  .my-xl-n3 {
    margin-bottom: -1rem !important; }
  .ml-xl-n3,
  .mx-xl-n3 {
    margin-left: -1rem !important; }
  .m-xl-n4 {
    margin: -1.5rem !important; }
  .mt-xl-n4,
  .my-xl-n4 {
    margin-top: -1.5rem !important; }
  .mr-xl-n4,
  .mx-xl-n4 {
    margin-right: -1.5rem !important; }
  .mb-xl-n4,
  .my-xl-n4 {
    margin-bottom: -1.5rem !important; }
  .ml-xl-n4,
  .mx-xl-n4 {
    margin-left: -1.5rem !important; }
  .m-xl-n5 {
    margin: -3rem !important; }
  .mt-xl-n5,
  .my-xl-n5 {
    margin-top: -3rem !important; }
  .mr-xl-n5,
  .mx-xl-n5 {
    margin-right: -3rem !important; }
  .mb-xl-n5,
  .my-xl-n5 {
    margin-bottom: -3rem !important; }
  .ml-xl-n5,
  .mx-xl-n5 {
    margin-left: -3rem !important; }
  .m-xl-auto {
    margin: auto !important; }
  .mt-xl-auto,
  .my-xl-auto {
    margin-top: auto !important; }
  .mr-xl-auto,
  .mx-xl-auto {
    margin-right: auto !important; }
  .mb-xl-auto,
  .my-xl-auto {
    margin-bottom: auto !important; }
  .ml-xl-auto,
  .mx-xl-auto {
    margin-left: auto !important; } }

.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  pointer-events: auto;
  content: "";
  background-color: rgba(0, 0, 0, 0); }

.text-monospace {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important; }

.text-justify {
  text-align: justify !important; }

.text-wrap {
  white-space: normal !important; }

.text-nowrap {
  white-space: nowrap !important; }

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap; }

.text-left {
  text-align: left !important; }

.text-right {
  text-align: right !important; }

.text-center {
  text-align: center !important; }

@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important; }
  .text-sm-right {
    text-align: right !important; }
  .text-sm-center {
    text-align: center !important; } }

@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important; }
  .text-md-right {
    text-align: right !important; }
  .text-md-center {
    text-align: center !important; } }

@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important; }
  .text-lg-right {
    text-align: right !important; }
  .text-lg-center {
    text-align: center !important; } }

@media (min-width: 1200px) {
  .text-xl-left {
    text-align: left !important; }
  .text-xl-right {
    text-align: right !important; }
  .text-xl-center {
    text-align: center !important; } }

.text-lowercase {
  text-transform: lowercase !important; }

.text-uppercase {
  text-transform: uppercase !important; }

.text-capitalize {
  text-transform: capitalize !important; }

.font-weight-light {
  font-weight: 300 !important; }

.font-weight-lighter {
  font-weight: lighter !important; }

.font-weight-normal {
  font-weight: 400 !important; }

.font-weight-bold {
  font-weight: 700 !important; }

.font-weight-bolder {
  font-weight: bolder !important; }

.font-italic {
  font-style: italic !important; }

.text-white {
  color: #fff !important; }

.text-primary {
  color: #3F84FC !important; }

a.text-primary:hover, a.text-primary:focus {
  color: #0458eb !important; }

.text-secondary {
  color: #727F94 !important; }

a.text-secondary:hover, a.text-secondary:focus {
  color: #505a69 !important; }

.text-success {
  color: #1DAB47 !important; }

a.text-success:hover, a.text-success:focus {
  color: #126a2c !important; }

.text-info {
  color: #8A3FFC !important; }

a.text-info:hover, a.text-info:focus {
  color: #5f04eb !important; }

.text-warning {
  color: #FCAE3F !important; }

a.text-warning:hover, a.text-warning:focus {
  color: #eb8b04 !important; }

.text-danger {
  color: #FC413F !important; }

a.text-danger:hover, a.text-danger:focus {
  color: #eb0604 !important; }

.text-light {
  color: #f8f9fa !important; }

a.text-light:hover, a.text-light:focus {
  color: #cbd3da !important; }

.text-dark {
  color: #1E232D !important; }

a.text-dark:hover, a.text-dark:focus {
  color: black !important; }

.text-body {
  color: #515151 !important; }

.text-muted {
  color: #6c757d !important; }

.text-black-50 {
  color: rgba(0, 0, 0, 0.5) !important; }

.text-white-50 {
  color: rgba(255, 255, 255, 0.5) !important; }

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0; }

.text-decoration-none {
  text-decoration: none !important; }

.text-break {
  word-wrap: break-word !important; }

.text-reset {
  color: inherit !important; }

.visible {
  visibility: visible !important; }

.invisible {
  visibility: hidden !important; }

@media print {
  *,
  *::before,
  *::after {
    text-shadow: none !important;
    -webkit-box-shadow: none !important;
            box-shadow: none !important; }
  a:not(.btn) {
    text-decoration: underline; }
  abbr[title]::after {
    content: " (" attr(title) ")"; }
  pre {
    white-space: pre-wrap !important; }
  pre,
  blockquote {
    border: 1px solid #adb5bd;
    page-break-inside: avoid; }
  thead {
    display: table-header-group; }
  tr,
  img {
    page-break-inside: avoid; }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3; }
  h2,
  h3 {
    page-break-after: avoid; }
  @page {
    size: a3; }
  body {
    min-width: 992px !important; }
  .container {
    min-width: 992px !important; }
  .navbar {
    display: none; }
  .badge {
    border: 1px solid #000; }
  .table {
    border-collapse: collapse !important; }
    .table td,
    .table th {
      background-color: #fff !important; }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #dee2e6 !important; }
  .table-dark {
    color: inherit; }
    .table-dark th,
    .table-dark td,
    .table-dark thead th,
    .table-dark tbody + tbody {
      border-color: #dee2e6; }
  .table .thead-dark th {
    color: inherit;
    border-color: #dee2e6; } }

.easion-card {
  border: 1px solid #D3D3D3;
  background: #fff;
  margin-bottom: 30px; }
  .easion-card .card-header {
    min-height: 57px;
    background-color: #F0F1F7;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
    padding: 8px 32px; }
  .easion-card .card-body {
    padding: 24px 32px; }
    @media (max-width: 767.98px) {
      .easion-card .card-body {
        padding: 12px 18px; } }

.easion-card-icon {
  margin-right: 20px; }

.easion-card-title {
  font-weight: bold; }

.easion-card-menu {
  margin-left: auto; }

.easion-card-menu-link {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  width: 30px;
  height: 30px;
  margin-right: -15px; }
  .easion-card-menu-link::after {
    content: "";
    display: inline-block;
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 5px solid rgba(81, 81, 81, 0.8); }
  .text-white .easion-card-menu-link::after {
    border-top-color: #fff; }

.easion-card-body-chart {
  position: relative;
  max-width: 99%; }
  @media (max-width: 767.98px) {
    .easion-card-body-chart {
      padding: 12px 5px; } }

h1 {
  font-family: "Nunito", sans-serif;
  font-weight: normal; }

.dash-title {
  margin-bottom: 30px; }

.content-anchor::before {
  display: block;
  height: 6rem;
  margin-top: -6rem;
  visibility: hidden;
  content: ""; }

.content-anchor-link {
  color: #292829;
  opacity: .46;
  font-size: 19px;
  margin-left: 7px; }

body {
  background: #E9EDF4; }

.dash {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  min-height: 100vh; }

.dash-app {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-flex: 2;
  -webkit-flex-grow: 2;
      -ms-flex-positive: 2;
          flex-grow: 2;
  margin-top: 84px; }
  @media (min-width: 992px) {
    .dash-app {
      margin-left: 238px; }
      .dash-compact .dash-app {
        margin-left: 0; } }

.dash-content {
  -webkit-box-flex: 2;
  -webkit-flex-grow: 2;
      -ms-flex-positive: 2;
          flex-grow: 2;
  padding: 25px; }
  @media (max-width: 767.98px) {
    .dash-content {
      padding: 15px 0px; } }

.dash-row {
  margin-bottom: 30px; }

.form-screen {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  min-height: 100vh;
  padding-top: 100px; }
  .form-screen .easion-logo {
    margin-bottom: 60px;
    opacity: .9; }
    .form-screen .easion-logo i {
      color: #515151; }

.account-dialog {
  max-width: 360px; }
  @media (min-width: 1200px) {
    .account-dialog {
      min-width: 360px; } }

.account-dialog-actions {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -webkit-flex-direction: row;
      -ms-flex-direction: row;
          flex-direction: row;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center; }

.account-dialog-link {
  margin-left: 15px;
  font-size: 14px;
  color: rgba(81, 81, 81, 0.8); }
  .account-dialog-link:hover {
    color: #515151;
    text-decoration: none; }

.dash-nav {
  min-width: 238px;
  position: fixed;
  left: 0;
  top: 0;
  bottom: 0;
  overflow: auto; }
  .dash-compact .dash-nav {
    display: none; }
  .dash-nav::-webkit-scrollbar {
    width: 0;
    background: transparent; }
  @media (max-width: 991.98px) {
    .dash-nav {
      display: none;
      position: fixed;
      top: 0;
      right: 0;
      left: 0;
      bottom: 0;
      z-index: 1070; }
      .dash-nav.mobile-show {
        display: block; } }
  .dash-nav header {
    min-height: 84px;
    padding: 8px 27px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center; }
    .dash-nav header .menu-toggle {
      display: none;
      margin-right: auto; }
      @media (max-width: 991.98px) {
        .dash-nav header .menu-toggle {
          display: -webkit-box;
          display: -webkit-flex;
          display: -ms-flexbox;
          display: flex; } }
    .dash-nav header .easion-logo {
      margin-right: auto;
      padding-right: 42px; }
  .dash-nav a {
    color: #515151; }
    .dash-nav a:hover {
      text-decoration: none; }
  .dash-nav.dash-nav-dark {
    background-color: #181F2C; }
    .dash-nav.dash-nav-dark a {
      color: #fff; }

.easion-logo {
  font-family: "Nunito", sans-serif;
  font-weight: bold;
  font-size: 20px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  color: #515151;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center; }
  .easion-logo:focus, .easion-logo:active, .easion-logo:hover {
    color: #515151;
    text-decoration: none; }
  .easion-logo i {
    color: #576177;
    font-size: 27px;
    margin-right: 10px; }

.dash-nav-list {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.dash-nav-item {
  min-height: 56px;
  padding: 8px 20px 8px 70px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  letter-spacing: .02em; }
  .dash-nav-item i {
    width: 36px;
    font-size: 19px;
    margin-left: -40px; }
  .dash-nav-dark .dash-nav-item:hover {
    background: rgba(255, 255, 255, 0.04); }

.dash-nav-dropdown {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  .dash-nav-dark .dash-nav-dropdown.show {
    background: rgba(255, 255, 255, 0.04); }
  .dash-nav-dropdown.show > .dash-nav-dropdown-toggle {
    font-weight: bold; }
    .dash-nav-dropdown.show > .dash-nav-dropdown-toggle:after {
      -webkit-transform: none;
           -o-transform: none;
              transform: none; }
  .dash-nav-dropdown.show > .dash-nav-dropdown-menu {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; }
  .dash-nav-dropdown.show .dash-nav-dropdown.show {
    background: none; }

.dash-nav-dropdown-toggle:after {
  content: "";
  margin-left: auto;
  display: inline-block;
  width: 0;
  height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid rgba(81, 81, 81, 0.8);
  -webkit-transform: rotate(90deg);
       -o-transform: rotate(90deg);
          transform: rotate(90deg); }
  .dash-nav-dark .dash-nav-dropdown-toggle:after {
    border-top-color: rgba(255, 255, 255, 0.72); }

.dash-nav-dropdown-menu {
  display: none;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  .dash-nav-dropdown-menu > .dash-nav-dropdown .dash-nav-dropdown-menu .dash-nav-dropdown-item {
    padding-left: 87px; }

.dash-nav-dropdown-item {
  min-height: 40px;
  padding: 8px 20px 8px 70px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center; }
  .dash-nav-dropdown-item:hover {
    background: rgba(255, 255, 255, 0.04); }

.notifications {
  margin: -8px -32px; }
  @media (max-width: 767.98px) {
    .notifications {
      margin: -8px -18px; } }

.notification {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -webkit-flex-direction: row;
      -ms-flex-direction: row;
          flex-direction: row;
  padding: 8px 32px;
  color: #515151; }
  .notification:hover, .notification:focus, .notification:active {
    color: #515151;
    text-decoration: none;
    background-color: #F0F1F7; }

.notification-icon {
  width: 35px; }

.notification-time {
  margin-left: auto;
  opacity: .8; }

.notifications-show-all {
  margin-top: 8px;
  margin-left: 67px; }
  .notifications-show-all a {
    color: #515151;
    text-decoration: underline; }
    .notifications-show-all a:focus, .notifications-show-all a:hover, .notifications-show-all a:active {
      color: #515151; }

.table-in-card {
  margin: -12px 0; }
  .table-in-card thead tr th {
    border-top-color: transparent; }

.card-body-with-dark-table {
  background-color: #212529; }

.menu-toggle, .searchbox-toggle, .searchbox-submit, .tools-item {
  position: relative;
  width: 42px;
  height: 42px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  color: #515151; }
  .menu-toggle:hover, .searchbox-toggle:hover, .searchbox-submit:hover, .tools-item:hover, .menu-toggle:active, .searchbox-toggle:active, .searchbox-submit:active, .tools-item:active, .menu-toggle:focus, .searchbox-toggle:focus, .searchbox-submit:focus, .tools-item:focus {
    text-decoration: none;
    color: #515151; }
  .menu-toggle i, .searchbox-toggle i, .searchbox-submit i, .tools-item i {
    font-size: 20px; }

.tools-item .tools-item-count {
  width: 15px;
  height: 15px;
  border-radius: 20px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  position: absolute;
  top: 3px;
  right: 3px;
  font-style: normal;
  font-size: 11px;
  background: #FF5A00;
  color: #fff; }

.dash-toolbar {
  min-height: 84px;
  background-color: #F3F3F3;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 8px 27px;
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1000; }
  @media (min-width: 992px) {
    .dash-toolbar {
      left: 238px; }
      .dash-compact .dash-toolbar {
        left: 0; } }

.searchbox {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-flex: 2;
  -webkit-flex-grow: 2;
      -ms-flex-positive: 2;
          flex-grow: 2; }
  @media (max-width: 767.98px) {
    .searchbox {
      display: none;
      position: fixed;
      top: 0;
      right: 0;
      left: 0;
      background: #F3F3F3;
      min-height: 84px;
      z-index: 1071;
      padding: 8px 27px; }
      .searchbox.show {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex; } }

.searchbox-toggle {
  display: none;
  color: #515151; }
  .searchbox-toggle:hover, .searchbox-toggle:active, .searchbox-toggle:focus {
    text-decoration: none;
    color: #515151; }
  @media (max-width: 767.98px) {
    .searchbox-toggle {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex; } }

.searchbox-input {
  border: none;
  background-color: #F3F3F3;
  height: 50px;
  padding: 8px 8px 11px 4px;
  -webkit-box-flex: 2;
  -webkit-flex-grow: 2;
      -ms-flex-positive: 2;
          flex-grow: 2;
  width: 100px; }
  .searchbox-input::-webkit-input-placeholder {
    color: #8b8b8b; }
  .searchbox-input::-moz-placeholder {
    color: #8b8b8b; }
  .searchbox-input:-ms-input-placeholder {
    color: #8b8b8b; }
  .searchbox-input::-ms-input-placeholder {
    color: #8b8b8b; }
  .searchbox-input::placeholder {
    color: #8b8b8b; }
  .searchbox-input:focus {
    outline: none; }

.searchbox-submit {
  border: none;
  background: none;
  padding: 0; }
  @media (max-width: 767.98px) {
    .searchbox-submit {
      -webkit-box-ordinal-group: 10;
      -webkit-order: 9;
          -ms-flex-order: 9;
              order: 9; } }
  .searchbox-submit:focus {
    outline: none; }
  .searchbox-submit:hover {
    cursor: pointer; }

.tools {
  margin-left: auto;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex; }
  .tools a {
    color: #515151; }

.stats {
  padding: 18px 23px;
  font-family: "Nunito", sans-serif;
  -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.25);
          box-shadow: 0 0 5px rgba(0, 0, 0, 0.25);
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  min-height: 170px;
  margin-bottom: 30px; }

.stats-content {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  margin-top: auto;
  -webkit-box-align: end;
  -webkit-align-items: flex-end;
      -ms-flex-align: end;
          align-items: flex-end; }

.stats-title {
  font-size: 26px;
  font-weight: 600;
  letter-spacing: .04em; }

.stats-icon {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: end;
  -webkit-align-items: flex-end;
      -ms-flex-align: end;
          align-items: flex-end;
  font-size: 20px; }

.stats-data {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: end;
  -webkit-align-items: flex-end;
      -ms-flex-align: end;
          align-items: flex-end;
  margin-left: auto; }

.stats-number {
  font-size: 33px;
  line-height: 33px;
  font-weight: 600;
  letter-spacing: .04em; }

.stats-change {
  margin-top: 5px;
  font-family: "Open Sans", sans-serif; }

.stats-percentage {
  opacity: 1; }

.stats-timeframe {
  opacity: .5; }

.stats-primary {
  color: #fff;
  background: #3F84FC; }

.stats-secondary {
  color: #fff;
  background: #727F94; }

.stats-success {
  color: #fff;
  background: #1DAB47; }

.stats-info {
  color: #fff;
  background: #8A3FFC; }

.stats-warning {
  color: #212529;
  background: #FCAE3F; }

.stats-danger {
  color: #fff;
  background: #FC413F; }

.stats-light {
  color: #212529;
  background: #f8f9fa; }

.stats-dark {
  color: #fff;
  background: #1E232D; }

/*# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy9ib290c3RyYXAuc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy9fcm9vdC5zY3NzIiwiLi4vbm9kZV9tb2R1bGVzL2Jvb3RzdHJhcC9zY3NzL19yZWJvb3Quc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy9fdmFyaWFibGVzLnNjc3MiLCJfdmFyaWFibGVzLnNjc3MiLCIuLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL3Njc3MvdmVuZG9yL19yZnMuc2NzcyIsImVhc2lvbi5jc3MiLCIuLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL3Njc3MvbWl4aW5zL19ob3Zlci5zY3NzIiwiLi4vbm9kZV9tb2R1bGVzL2Jvb3RzdHJhcC9zY3NzL190eXBlLnNjc3MiLCIuLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL3Njc3MvbWl4aW5zL19saXN0cy5zY3NzIiwiLi4vbm9kZV9tb2R1bGVzL2Jvb3RzdHJhcC9zY3NzL19pbWFnZXMuc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy9taXhpbnMvX2ltYWdlLnNjc3MiLCIuLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL3Njc3MvbWl4aW5zL19ib3JkZXItcmFkaXVzLnNjc3MiLCIuLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL3Njc3MvX2NvZGUuc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy9fZ3JpZC5zY3NzIiwiLi4vbm9kZV9tb2R1bGVzL2Jvb3RzdHJhcC9zY3NzL21peGlucy9fZ3JpZC5zY3NzIiwiLi4vbm9kZV9tb2R1bGVzL2Jvb3RzdHJhcC9zY3NzL21peGlucy9fYnJlYWtwb2ludHMuc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy9taXhpbnMvX2dyaWQtZnJhbWV3b3JrLnNjc3MiLCIuLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL3Njc3MvX3RhYmxlcy5zY3NzIiwiLi4vbm9kZV9tb2R1bGVzL2Jvb3RzdHJhcC9zY3NzL21peGlucy9fdGFibGUtcm93LnNjc3MiLCIuLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL3Njc3MvX2Z1bmN0aW9ucy5zY3NzIiwiLi4vbm9kZV9tb2R1bGVzL2Jvb3RzdHJhcC9zY3NzL19mb3Jtcy5zY3NzIiwiLi4vbm9kZV9tb2R1bGVzL2Jvb3RzdHJhcC9zY3NzL21peGlucy9fdHJhbnNpdGlvbi5zY3NzIiwiLi4vbm9kZV9tb2R1bGVzL2Jvb3RzdHJhcC9zY3NzL21peGlucy9fZm9ybXMuc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy9taXhpbnMvX2dyYWRpZW50cy5zY3NzIiwiLi4vbm9kZV9tb2R1bGVzL2Jvb3RzdHJhcC9zY3NzL19idXR0b25zLnNjc3MiLCIuLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL3Njc3MvbWl4aW5zL19idXR0b25zLnNjc3MiLCIuLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL3Njc3MvX3RyYW5zaXRpb25zLnNjc3MiLCIuLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL3Njc3MvX2Ryb3Bkb3duLnNjc3MiLCIuLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL3Njc3MvbWl4aW5zL19jYXJldC5zY3NzIiwiLi4vbm9kZV9tb2R1bGVzL2Jvb3RzdHJhcC9zY3NzL21peGlucy9fbmF2LWRpdmlkZXIuc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy9fYnV0dG9uLWdyb3VwLnNjc3MiLCIuLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL3Njc3MvX2lucHV0LWdyb3VwLnNjc3MiLCIuLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL3Njc3MvX2N1c3RvbS1mb3Jtcy5zY3NzIiwiLi4vbm9kZV9tb2R1bGVzL2Jvb3RzdHJhcC9zY3NzL19uYXYuc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy9fbmF2YmFyLnNjc3MiLCIuLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL3Njc3MvX2NhcmQuc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy9fYnJlYWRjcnVtYi5zY3NzIiwiLi4vbm9kZV9tb2R1bGVzL2Jvb3RzdHJhcC9zY3NzL19wYWdpbmF0aW9uLnNjc3MiLCIuLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL3Njc3MvbWl4aW5zL19wYWdpbmF0aW9uLnNjc3MiLCIuLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL3Njc3MvX2JhZGdlLnNjc3MiLCIuLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL3Njc3MvbWl4aW5zL19iYWRnZS5zY3NzIiwiLi4vbm9kZV9tb2R1bGVzL2Jvb3RzdHJhcC9zY3NzL19qdW1ib3Ryb24uc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy9fYWxlcnQuc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy9taXhpbnMvX2FsZXJ0LnNjc3MiLCIuLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL3Njc3MvX3Byb2dyZXNzLnNjc3MiLCIuLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL3Njc3MvX21lZGlhLnNjc3MiLCIuLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL3Njc3MvX2xpc3QtZ3JvdXAuc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy9taXhpbnMvX2xpc3QtZ3JvdXAuc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy9fY2xvc2Uuc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy9fdG9hc3RzLnNjc3MiLCIuLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL3Njc3MvX21vZGFsLnNjc3MiLCIuLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL3Njc3MvX3Rvb2x0aXAuc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy9taXhpbnMvX3Jlc2V0LXRleHQuc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy9fcG9wb3Zlci5zY3NzIiwiLi4vbm9kZV9tb2R1bGVzL2Jvb3RzdHJhcC9zY3NzL19jYXJvdXNlbC5zY3NzIiwiLi4vbm9kZV9tb2R1bGVzL2Jvb3RzdHJhcC9zY3NzL21peGlucy9fY2xlYXJmaXguc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy9fc3Bpbm5lcnMuc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy91dGlsaXRpZXMvX2FsaWduLnNjc3MiLCIuLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL3Njc3MvbWl4aW5zL19iYWNrZ3JvdW5kLXZhcmlhbnQuc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy91dGlsaXRpZXMvX2JhY2tncm91bmQuc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy91dGlsaXRpZXMvX2JvcmRlcnMuc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy91dGlsaXRpZXMvX2Rpc3BsYXkuc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy91dGlsaXRpZXMvX2VtYmVkLnNjc3MiLCIuLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL3Njc3MvdXRpbGl0aWVzL19mbGV4LnNjc3MiLCIuLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL3Njc3MvdXRpbGl0aWVzL19mbG9hdC5zY3NzIiwiLi4vbm9kZV9tb2R1bGVzL2Jvb3RzdHJhcC9zY3NzL3V0aWxpdGllcy9faW50ZXJhY3Rpb25zLnNjc3MiLCIuLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL3Njc3MvdXRpbGl0aWVzL19vdmVyZmxvdy5zY3NzIiwiLi4vbm9kZV9tb2R1bGVzL2Jvb3RzdHJhcC9zY3NzL3V0aWxpdGllcy9fcG9zaXRpb24uc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy91dGlsaXRpZXMvX3NjcmVlbnJlYWRlcnMuc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy9taXhpbnMvX3NjcmVlbi1yZWFkZXIuc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy91dGlsaXRpZXMvX3NoYWRvd3Muc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy91dGlsaXRpZXMvX3NpemluZy5zY3NzIiwiLi4vbm9kZV9tb2R1bGVzL2Jvb3RzdHJhcC9zY3NzL3V0aWxpdGllcy9fc3BhY2luZy5zY3NzIiwiLi4vbm9kZV9tb2R1bGVzL2Jvb3RzdHJhcC9zY3NzL3V0aWxpdGllcy9fc3RyZXRjaGVkLWxpbmsuc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy91dGlsaXRpZXMvX3RleHQuc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy9taXhpbnMvX3RleHQtdHJ1bmNhdGUuc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy9taXhpbnMvX3RleHQtZW1waGFzaXMuc2NzcyIsIi4uL25vZGVfbW9kdWxlcy9ib290c3RyYXAvc2Nzcy9taXhpbnMvX3RleHQtaGlkZS5zY3NzIiwiLi4vbm9kZV9tb2R1bGVzL2Jvb3RzdHJhcC9zY3NzL3V0aWxpdGllcy9fdmlzaWJpbGl0eS5zY3NzIiwiLi4vbm9kZV9tb2R1bGVzL2Jvb3RzdHJhcC9zY3NzL19wcmludC5zY3NzIiwiX2NhcmQuc2NzcyIsIl9jb250ZW50LnNjc3MiLCJfbGF5b3V0LnNjc3MiLCJfbmF2aWdhdGlvbi5zY3NzIiwiX25vdGlmaWNhdGlvbi5zY3NzIiwiX3RhYmxlLnNjc3MiLCJfdG9vbGJhci5zY3NzIiwiX3N0YXRzLnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7QUFBQTs7Ozs7R0FLRztBQ0pIO0VBR0ksZ0JBQWM7RUFBZCxrQkFBYztFQUFkLGtCQUFjO0VBQWQsZ0JBQWM7RUFBZCxlQUFjO0VBQWQsa0JBQWM7RUFBZCxrQkFBYztFQUFkLGlCQUFjO0VBQWQsZ0JBQWM7RUFBZCxnQkFBYztFQUFkLGNBQWM7RUFBZCxnQkFBYztFQUFkLHFC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O0VIOEZNLGtCQXRDWTtFR3REaEIsaUJMNFIrQjtFSzNSL0IsaUJMa1IrQixFS2pSaEM7O0FBQ0Q7RUh5Rk0sa0JBdENZO0VHakRoQixpQkx3UitCO0VLdlIvQixpQkw2UStCLEVLNVFoQzs7QUFDRDtFSG9GTSxrQkF0Q1k7RUc1Q2hCLGlCTG9SK0I7RUtuUi9CLGlCTHdRK0IsRUt2UWhDOztBTjRCRDtFTXBCRSxpQkxtRlc7RUtsRlgsb0JMa0ZXO0VLakZYLFVBQVM7RUFDVCx5Q0x6Q2EsRUswQ2Q7O0FBT0Q7O0VITUksZUFBVztFR0hiLGlCTGdPK0IsRUsvTmhDOztBQUVEOztFQUVFLGVMd1FnQztFS3ZRaEMsMEJMZ1JtQyxFSy9RcEM7O0FBT0Q7RUMvRUUsZ0JBQWU7RUFDZixpQkFBZ0IsRURnRmpCOztBQUdEO0VDcEZFLGdCQUFlO0VBQ2YsaUJBQWdCLEVEcUZqQjs7QUFDRDtFQUNFLHNCQUFxQixFQUt0QjtFQU5EO0lBSUkscUJMMFArQixFS3pQaEM7O0FBU0g7RUhqQ0ksZUFBVztFR21DYiwwQkFBeUIsRUFDMUI7O0FBR0Q7RUFDRSxvQkwwQlc7RUVYUCxtQkF0Q1ksRUd5QmpCOztBQUVEO0VBQ0UsZUFBYztFSDdDWixlQUFXO0VHK0NiLGVMMUdnQixFSytHakI7RUFSRDtJQU1JLHNCQUFxQixFQUN0Qjs7QUVwSEg7RUNJRSxnQkFBZTtFQUdmLGFBQVksRURMYjs7QUFJRDtFQUNFLGlCUG9nQ3dDO0VPbmdDeEMsdUJQUmE7RU9TYiwwQlBOZ0I7RVNRZCxpQlJKYTtFT0hmLGdCQUFlO0VBR2YsYUFBWSxFRFFiOztBQU1EO0VBRUUsc0JBQXFCLEVBQ3RCOztBQUVEO0VBQ0Usc0JBQTBCO0VBQzFCLGVBQWMsRUFDZjs7QUFFRDtFTGtDSSxlQUFXO0VLaENiLGVQM0JnQixFTzRCakI7O0FHeENEO0VSdUVJLGlCQUFXO0VRckViLGVWb0NlO0VVbkNmLHNCQUFxQixFQU10QjtFQUhDO0lBQ0UsZUFBYyxFQUNmOztBQUlIO0VBQ0UsdUJWd2xDdUM7RUU5aENyQyxpQkFBVztFUXhEYixZVlRhO0VVVWIs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QmZ3VmdDO0lldlZoQyxvQkFBbUI7SUFDbkIsOEJmSmMsRWVLZjtFQVhIO0lBY0ksdUJBQXNCO0lBQ3RCLGlDZlRjLEVlVWY7RUFoQkg7SUFtQkksOEJmYmMsRWVjZjs7QUFRSDs7RUFHSSxnQmZrVStCLEVlalVoQzs7QUFRSDtFQUNFLDBCZm5DZ0IsRWVnRGpCO0VBZEQ7O0lBS0ksMEJmdkNjLEVld0NmO0VBTkg7O0lBV00seUJBQTRDLEVBQzdDOztBQUlMOzs7O0VBS0ksVUFBUyxFQUNWOztBQU9IO0VBRUksc0NmMURXLEVlMkRaOztBWGhFRDtFVzJFSSxlZHBGYztFY3FGZCx1Q2Z2RVMsRUlMUzs7QVlQdEI7OztFQUlJLDBCQzZGNEQsRUQ1RjdEOztBQUxIOzs7O0VBWU0sc0JDcUYwRCxFRHBGM0Q7O0FaTkw7RVlpQk0sMEJBSnNDLEVaYnRCO0VZWXRCOztJQVNRLDBCQVJvQyxFQVNyQzs7QUE3QlA7OztFQUlJLDBCQzZGNEQsRUQ1RjdEOztBQUxIOzs7O0VBWU0sc0JDcUYwRCxFRHBGM0Q7O0FaTkw7RVlpQk0sMEJBSnNDLEVaYnRCO0VZWXRCOztJQVNRLDBCQVJvQyxFQVNyQzs7QUE3QlA7OztFQUlJLDBCQzZGNEQsRUQ1RjdEOztBQUxIOzs7O0VBWU0sc0JDcUYwRCxFRHBGM0Q7O0FaTkw7RVlpQk0sMEJBSnNDLEVaYnRCO0VZWXRCOztJQVNRLDBCQVJvQyxFQVNyQzs7QUE3QlA7OztFQUlJLDBCQzZGNEQsRUQ1RjdEOztBQUxIOzs7O0VBWU0sc0JDcUYwRCxFRHBGM0Q7O0FaTkw7RVlpQk0sMEJBSnNDLEVaYnRCO0VZWXRCOztJQVNRLDBCQVJvQyxFQVNyQzs7QUE3QlA7OztFQUlJLDBCQzZGNEQsRUQ1RjdEOztBQUxIOzs7O0VBWU0sc0JDcUYwRCxFRHBGM0Q7O0FaTkw7RVlpQk0sMEJBSnNDLEVaYnRCO0VZWXRCOztJQVNRLDBCQVJvQyxFQVNyQzs7QUE3QlA7OztFQUlJLDBCQzZGNEQsRUQ1RjdEOztBQUxIOzs7O0VBWU0sc0JDcUYwRCxFRHBGM0Q7O0FaTkw7RVlpQk0sMEJBSnNDLEVa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MUdlO0ltQjJHZix5RG5CM0dlO1ltQjJHZixpRG5CM0dlLEVtQjRHaEI7O0FBbkZIO0VBMEZJLGVuQm5IZSxFbUJvSGhCOztBQTNGSDs7O0VBK0ZJLGVBQWMsRUFDZjs7QUFoR0g7RUF1R0ksZW5CaEllLEVtQnFJaEI7RUE1R0g7SUEwR00sc0JuQm5JYSxFbUJvSWQ7O0FBM0dMO0VBZ0hNLHNCQUFrQztFQzFJeEMsMEJEMkkrQyxFQUMxQzs7QUFsSEw7RUF1SE0seURuQmhKYTtVbUJnSmIsaURuQmhKYSxFbUJpSmQ7O0FBeEhMO0VBMkhNLHNCbkJwSmEsRW1CcUpkOztBQTVITDtFQXFJSSxzQm5COUplLEVtQitKaEI7O0FBdElIO0VBMElNLHNCbkJuS2E7RW1Cb0tiLHlEbkJwS2E7VW1Cb0tiLGlEbkJwS2EsRW1CcUtkOztBQWhJUDtFQUNFLGNBQWE7RUFDYixZQUFXO0VBQ1gsb0JwQitjMEM7RUV0YjFDLGVBQVc7RWtCdkJYLGVuQnZDbUIsRW1Cd0NwQjs7QUFFRDtFQUNFLG1CQUFrQjtFQUNsQixVQUFTO0VBQ1QsV0FBVTtFQUNWLGNBQWE7RUFDYixnQkFBZTtFQUNmLHdCcEJzeUJxQztFb0JyeUJyQyxrQkFBaUI7RWxCb0VmLG9CQXRDWTtFa0I1QmQsaUJwQjZPNkI7RW9CNU83QixZcEJ2RFc7RW9Cd0RYLHlDbkJyRG1CO0VRUW5CLGlCUkphLEVtQm1EZDs7QUFqQ0M7Ozs7RUFzQ0UsZUFBYyxFQUNmOztBQXZDRDtFQTRDRSxzQm5CbEVpQjtFbUJxRWYscUNId0N3RDtFR3ZDeEQsNlVIdEIwRTtFR3VCMUUsNkJBQTRCO0VBQzVCLDREQUE2RDtFQUM3RCx5RUhvQ3dEO1VHcEN4RCxpRUhvQ3dELEVHcEYzRDtFQUhEO0lBdURJLHNCbkI3RWU7SW1COEVmLHlEbkI5RWU7WW1COEVmLGlEbkI5RWUsRW1CK0VoQjs7QUF6REg7RUFpRUkscUNIc0J3RDtFR3JCeEQsbUZIcUJ3RCxFR3BGM0Q7O0FBSEQ7RUF5RUUsc0JuQi9GaUI7RW1Ca0dmLHdDSFd3RDtFR1Z4RCxtbkJBQThKLEVBMUVqSztFQUhEO0lB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WXZCQ2E7RXFCRFgsMEJwQkNtQjtFc0JDckIsc0J0QkRxQixFcUI0RHBCO0VsQnZERDtJbUJBRSxZdkJMVztJcUJEWCwwQkVEb0Y7SUFTcEYsc0JBVHlILEVuQk9yRztFbUJLdEI7SUFFRSxZdkJaVztJcUJEWCwwQkVEb0Y7SUFnQnBGLHNCQWhCeUg7SUFxQnZILHdEQUFpRjtZQUFqRixnREFBaUYsRUFFcEY7RUFHRDtJQUVFLFl2QjFCVztJdUIyQlgsMEJ0QjNCbUI7SXNCNEJuQixzQnRCNUJtQixFc0JpQ3BCO0VBRUQ7O0lBR0UsWXZCdENXO0l1QnVDWCwwQkF6Q3VLO0lBNkN2SyxzQkE3QytNLEVBdURoTjtJQVJDOztNQUtJLHdEQUFpRjtjQUFqRixnREFBaUYsRUFFcEY7O0FETUg7RUMzREEsWXZCQ2E7RXFCRFgsMEJwQkVtQjtFc0JBckIsc0J0QkFxQixFcUIyRHBCO0VsQnZERDtJbUJBRSxZdkJMVztJcUJEWCwwQkVEb0Y7SUFTcEYsc0JBVHlILEVuQk9yRztFbUJLdEI7SUFFRSxZdkJaVztJcUJEWCwwQkVEb0Y7SUFnQnBGLHNCQWhCeUg7SUFxQnZILHlEQUFpRjtZQUFqRixpREFBaUYsRUFFcEY7RUFHRDtJQUVFLFl2QjFCVztJdUIyQlgsMEJ0QjFCbUI7SXNCMkJuQixzQnRCM0JtQixFc0JnQ3BCO0VBRUQ7O0lBR0UsWXZCdENXO0l1QnVDWCwwQkF6Q3VLO0lBNkN2SyxzQkE3QytNLEVBdURoTjtJQVJDOztNQUtJLHlEQUFpRjtjQUFqRixpREFBaUYsRUFFcEY7O0FETUg7RUMzREEsZXZCVWdCO0VxQlZkLDBCcEJHbUI7RXNCRHJCLHNCdEJDcUIsRXFCMERwQjtFbEJ2REQ7SW1CQUUsZXZCSWM7SXFCVmQsMEJFRG9GO0lBU3BGLHNCQVR5SCxFbkJPckc7RW1CS3RCO0lBRUUsZXZCSGM7SXFCVmQsMEJFRG9GO0lBZ0JwRixzQkFoQnlIO0lBcUJ2SCx5REFBaUY7WUFBakYsaURBQWlGLEVBRXBGO0VBR0Q7SUFFRSxldkJqQmM7SXVCa0JkLDBCdEJ6Qm1CO0lzQjBCbkIsc0J0QjFCbUIsRXNCK0JwQjtFQUVEOztJQUdFLGV2QjdCYztJdUI4QmQsMEJBekN1SztJQTZDdkssc0JBN0MrTSxFQXVEaE47SUFSQzs7TUFLSSx5REFBaUY7Y0FBakYsaURBQWlGLEVBRXBGOztBRE1IO0VDM0RBLFl2QkNhO0VxQkRYLDBCcEJJbUI7RXNCRnJCLHNCdEJFcUIsRXFCeURwQjtFbEJ2REQ7SW1CQUUsWXZCTFc7SXFCRFgsMEJFRG9GO0lBU3BGLHNCQVR5SCxFbkJPckc7RW1CS3RCO0lBRUUsWXZCWlc7SXFCRFgsMEJFRG9GO0lBZ0JwRixzQkFoQnlIO0lBcUJ2SCx3REFBaUY7WUFBakYsZ0RBQWlGLEVBRXBGO0VBR0Q7SUFFRSxZdkIxQlc7SXVCMkJYLDBCdEJ4Qm1CO0lzQnlCbkIsc0J0QnpCbUIsRXNCOEJwQjtFQUVEOztJQUdFLFl2QnRDVztJdUJ1Q1gsMEJBekN1SztJQTZDdkssc0JBN0MrTSxFQXVEaE47SUFSQzs7TUFLSSx3REFBaUY7Y0FBakYsZ0RBQWlGLEVBRXBGOztBRE1IO0VDM0RBLGV2QlVnQjtFcUJWZCwwQnBCS21CO0VzQkhyQixzQnRCR3FCLEVxQndEcEI7RWxCdkREO0ltQkFFLGV2QkljO0lxQlZkLDBCRURvRjtJQVNwRixzQkFUeUgsRW5CT3JHO0VtQkt0QjtJQUVFLGV2QkhjO0lxQlZkLDBCRURvRjtJQWdCcEYsc0JBaEJ5SDtJQXFCdkgsMERBQWlGO1lBQWpGLGtEQUFpRixFQUVwRjtFQUdEO0lBRUUsZXZCakJjO0l1QmtCZCwwQnRCdkJtQjtJc0J3Qm5CLHNCdEJ4Qm1CLEVzQjZCcEI7RUFFRDs7SUFHRSxldkI3QmM7SXVCOEJkLDBCQXpDdUs7SUE2Q3ZLLHNCQTdDK00sRUF1RGhOO0lBUkM7O01BS0ksMERBQWlGO2NBQWpGLGtEQUFpRixFQUVwRjs7QURNSDtFQzNEQSxZdkJDYTtFcUJEWCwwQnBCTW1CO0VzQkpyQixzQnRCSXFCLEVxQnVEcEI7RWxCdkREO0ltQkFFLFl2QkxXO0lxQkRYLDBCRURvRjtJQVNwRixzQkFUeUgsRW5CT3JHO0VtQkt0QjtJQUVFLFl2QlpXO0lxQkRYLDBCRURvRjtJQWdCcEYsc0JBaEJ5SDtJQXFCdkgsdURBQWlGO1lBQWpGLCtDQUFpRixFQUVwRjtFQUdEO0lBRUUsWXZCMUJXO0l1QjJCWCwwQnRCdEJtQjtJc0J1Qm5CLHNCdEJ2Qm1CLEVzQjRCcEI7RUFFRDs7SUFHRSxZdkJ0Q1c7SXVCdUNYLDBCQXpDdUs7SUE2Q3ZLLHNCQTdDK00sRUF1RGhOO0lBUkM7O01BS0ksdURBQWlGO2NBQWpGLCtDQUFpRixFQUVwRjs7QURZSDtFQ1BBLGV0QjNEcUI7RXNCNERyQixzQnRCNURxQixFcUJvRXBCO0VsQjdERDtJbUJ3REUsWXZCN0RXO0l1QjhEWCwwQnRCaEVtQjtJc0JpRW5CLHNCdEJqRW1CLEVHT0M7RW1CNkR0QjtJQUVFLHlEdEJ0RW1CO1lzQnNFbkIsaUR0QnRFbUIsRXNCdUVwQjtFQUVEO0lBRUUsZXRCM0VtQjtJc0I0RW5CLDhCQUE2QixFQUM5QjtFQUVEOztJQUdFLFl2QmhGVztJdUJpRlgsMEJ0Qm5GbUI7SXNCb0ZuQixzQnRCcEZtQixFc0I4RnBCO0lBUkM7O01BS0kseUR0QjNGZTtjc0IyRmYsaUR0QjNGZSxFc0I2RmxCOztBRDNCSDtFQ1BBLGV0QjFEcUI7RXNCMkRyQixzQnRCM0RxQixFcUJtRXBCO0VsQjdERDtJbUJ3REUsWXZCN0RXO0l1QjhEWCwwQnRCL0RtQjtJc0JnRW5CLHNCdEJoRW1CLEVHTUM7RW1CNkR0QjtJQUVFLDBEdEJyRW1CO1lzQnFFbkIsa0R0QnJFbUIsRXNCc0VwQjtFQUVEO0lBRUUsZXRCMUVtQjtJc0IyRW5CLDhCQUE2QixFQUM5QjtFQUVEOztJQUdFLFl2QmhGVztJdUJpRlgsMEJ0QmxGbUI7SXNCbUZuQixzQnRCbkZtQixFc0I2RnBCO0lBUkM7O01BS0ksMER0QjFGZTtjc0IwRmYsa0R0QjFGZSxFc0I0RmxCOztBRDNCSDtFQ1BBLGV0QnpEcUI7RXNCMERyQixzQnRCMURxQixFcUJrRXBCO0VsQjdERDtJbUJ3REUsWXZCN0RXO0l1QjhEWCwwQnRCOURtQjtJc0IrRG5CLHNCdEIvRG1CLEVHS0M7RW1CNkR0QjtJQUVFLHdEdEJwRW1CO1lzQm9FbkIsZ0R0QnBFbUIsRXNCcUVwQjtFQUVEO0lBRUUsZXRCekVtQjtJc0IwRW5CLDhCQUE2QixFQUM5QjtFQUVEOztJQUdFLFl2QmhGVztJdUJpRlgsMEJ0QmpGbUI7SXNCa0ZuQixzQnRCbEZtQixFc0I0RnBCO0lBUkM7O01BS0ksd0R0QnpGZTtjc0J5RmYsZ0R0QnpGZSxFc0IyRmxCOztBRDNCSDtFQ1BBLGV0QnhEcUI7RXNCeURyQixzQnRCekRxQixFcUJpRXBCO0VsQjdERDtJbUJ3REUsWXZCN0RXO0l1QjhEWCwwQnRCN0RtQjtJc0I4RG5CLHNCdEI5RG1CLEVHSUM7RW1CNkR0QjtJQUVFLHlEdEJuRW1CO1lzQm1FbkIsaUR0Qm5FbUIsRXNCb0VwQjtFQUVEO0lBRUUsZXRCeEVtQjtJc0J5RW5CLDhCQUE2QixFQUM5QjtFQUVEOztJQUdFLFl2QmhGVztJdUJpRlgsMEJ0QmhGbUI7SXNCaUZuQixzQnRCakZtQixFc0IyRnBCO0lBUkM7O01BS0kseUR0QnhGZTtjc0J3RmYsaUR0QnhGZSxFc0IwRmxCOztBRDNCSDtFQ1BBLGV0QnZEcUI7RXNCd0RyQixzQnRCeERxQixFcUJnRXBCO0VsQjdERDtJbUJ3REUsZXZCcERjO0l1QnFEZCwwQnRCNURtQjtJc0I2RG5CLHNCdEI3RG1CLEVHR0M7RW1CNkR0QjtJQUVFLHlEdEJsRW1CO1lzQmtFbkIsaUR0QmxFbUIsRXNCbUVwQjtFQUVEO0lBRUUsZXRCdkVtQjtJc0J3RW5CLDhCQUE2QixFQUM5QjtFQUVEOztJQUdFLGV2QnZFYztJdUJ3RWQsMEJ0Qi9FbUI7SXNCZ0ZuQixzQnRCaEZtQixFc0IwRnBCO0lBUkM7O01BS0kseUR0QnZGZTtjc0J1RmYsaUR0QnZGZSxFc0J5RmxCOztBRDNCSDtFQ1BBLGV0QnREcUI7RXNCdURyQixzQnRCdkRxQixFcUIrRHBCO0VsQjdERDtJbUJ3REUsWXZCN0RXO0l1QjhEWCwwQnRCM0RtQjtJc0I0RG5CLHNCdEI1RG1CLEVHRUM7RW1CNkR0QjtJQUVFLHdEdEJqRW1CO1lzQmlFbkIsZ0R0QmpFbUIsRXNCa0VwQjtFQUVEO0lBRUUsZXRCdEVtQjtJc0J1RW5CLDhCQUE2QixFQUM5QjtFQUVEOztJQUdFLFl2QmhGVztJdUJpRlgsMEJ0QjlFbUI7SXNCK0VuQixzQnRCL0VtQixFc0J5RnBCO0lBUkM7O01BS0ksd0R0QnRGZTtjc0JzRmYsZ0R0QnRGZSxFc0J3RmxCOztBRDNCSDtFQ1BBLGV0QnJEcUI7RXNCc0RyQixzQnRCdERxQixFcUI4RHBCO0VsQjdERDtJbUJ3REUsZXZCcERjO0l1QnFEZCwwQnRCMURtQjtJc0IyRG5CLHNCdEIzRG1CLEVHQ0M7RW1CNkR0QjtJQUVFLDBEdEJoRW1CO1lzQmdFbkIsa0R0QmhFbUIsRXNCaUVwQjtFQUVEO0lBRUUsZXRCckVtQjtJc0JzRW5CLDhCQUE2QixFQUM5QjtFQUVEOztJQUdFLGV2QnZFYztJdUJ3RWQsMEJ0QjdFbUI7SXNCOEVuQixzQnRCOUVtQixFc0J3RnBCO0lBUkM7O01BS0ksMER0QnJGZTtjc0JxRmYsa0R0QnJGZSxFc0J1RmxCOztBRDNCSDtFQ1BBLGV0QnBEcUI7RXNCcURyQixzQnRCckRxQixFcUI2RHBCO0VsQjdERDtJbUJ3REUsWXZCN0RXO0l1QjhEWCwwQnRCekRtQjtJc0IwRG5CLHNCdEIxRG1CLEVHQUM7RW1CNkR0QjtJQUVFLHVEdEIvRG1CO1lzQitEbkIsK0N0Qi9EbUIsRXNCZ0VwQjtFQUVEO0lBRUUsZXRCcEVtQjtJc0JxRW5CLDhCQUE2QixFQUM5QjtFQUVEOztJQUdFLFl2QmhGVztJdUJpRlgsMEJ0QjVFbUI7SXNCNkVuQixzQnRCN0VtQixFc0J1RnBCO0lBUkM7O01BS0ksdUR0QnBGZTtjc0JvRmYsK0N0QnBGZSxFc0JzRmxCOztBRGhCTDtFQUNFLGlCdEJrTitCO0VzQmpOL0IsZXJCL0VxQjtFcUJnRnJCLHNCdEJnRzRDLEVzQjdFN0M7RWxCNUZDO0lrQjRFRSxldEI4RjhEO0lzQjdGOUQsMkJ0QjhGK0MsRUkzSzNCO0VrQnNFeEI7SUFZSSwyQnRCeUYrQyxFc0J4RmhEO0VBYkg7SUFpQkksZXRCdEZjO0lzQnVGZCxxQkFB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b0JBQW1CO0lBRW5CLHNCOUJzWTRFLEU4QnJZN0U7RUFWTDtJQWFNLHlCYm5FMEQ7SWFvRTFELDJCYnBFMEQ7SWFxRTFELHdCYmpEMEQ7SWFrRDFELHlCYmxEMEQ7SWFtRDFELDBCOUJsTFk7SThCb0xaLHNCOUI0WDRFO0ltQjVpQjVFLGtLbkI4ZitIO0ltQjlmL0gsMEpuQjhmK0g7SW1COWYvSCxnSm5COGYrSDtJbUI5Zi9ILDBJbkI4ZitIO0ltQjlmL0gscVBuQjhmK0gsRThCNVVoSTtJWDlLQztNV3lKTjtRWHhKUSx5QkFBZ0I7UUFBaEIsb0JBQWdCO1FBQWhCLGlCQUFnQixFVzZLbkIsRUFBQTtFQXJCTDtJQTBCTSx1QjlCaE1TO0k4QmlNVCx1Q0FBNEU7U0FBNUUsa0NBQTRFO1lBQTVFLCtCQUE0RSxFQUM3RTtFQTVCTDtJQWlDTSwwQzdCek1pQixFNkIwTWxCOztBQVdMO0VBQ0Usc0JBQXFCO0VBQ3JCLFlBQVc7RUFDWCxvQ2J0RzhEO0VhdUc5RCwyQzlCMEtrQztFRXpROUIsZ0JBdENZO0U0QndJaEIsaUI5Qm9FK0I7RThCbkUvQixpQjlCd0UrQjtFOEJ2RS9CLGU5QnJOZ0I7RThCc05oQix1QkFBc0I7RUFDdEIsd085QnlXK0k7RThCeFcvSSwwQjlCM05nQjtFU09kLGlCUkphO0U2QjJOZix5QkFBZ0I7S0FBaEIsc0JBQWdCO1VBQWhCLGlCQUFnQixFQTZDakI7RUE1REQ7SUFrQkksc0I5QjhQc0U7SThCN1B0RSxXQUFVO0lBS1IsMEQ3QjdPaUI7WTZCNk9qQixrRDdCN09pQixFNkJ5UHBCO0lBcENIO01BaUNNLGU5QjdPWTtNOEI4T1osdUI5QnJQUyxFOEJzUFY7RUFuQ0w7SUF3Q0ksYUFBWTtJQUNaLHVCOUJxSWdDO0k4QnBJaEMsdUJBQXNCLEVBQ3ZCO0VBM0NIO0lBOENJLGU5QjNQYztJOEI0UGQsMEI5QmhRYyxFOEJpUWY7RUFoREg7SUFvREksY0FBYSxFQUNkO0VBckRIO0lBeURJLG1CQUFrQjtJQUNsQiwyQjlCdFFjLEU4QnVRZjs7QUFHSDtFQUNFLG1DYmxLOEQ7RWFtSzlELHFCOUJ1SGtDO0U4QnRIbEMsd0I5QnNIa0M7RThCckhsQyxxQjlCc0hpQztFRW5SN0Isb0JBdENZLEU0QnFNakI7O0FBRUQ7RUFDRSxpQ2IxSzhEO0VhMks5RCxvQjlCb0hpQztFOEJuSGpDLHVCOUJtSGlDO0U4QmxIakMsbUI5Qm1IZ0M7RUV4UjVCLG1CQXRDWSxFNEI2TWpCOztBQU9EO0VBQ0UsbUJBQWtCO0VBQ2xCLHNCQUFxQjtFQUNyQixZQUFXO0VBQ1gsb0NiMUw4RDtFYTJMOUQsaUJBQWdCLEVBQ2pCOztBQUVEO0VBQ0UsbUJBQWtCO0VBQ2xCLFdBQVU7RUFDVixZQUFXO0VBQ1gsb0NibE04RDtFYW1NOUQsVUFBUztFQUNULFdBQVUsRUFzQlg7RUE1QkQ7SUFTSSxzQjlCNEtzRTtJOEIzS3RFLDBEN0IxVG1CO1k2QjBUbkIsa0Q3QjFUbUIsRTZCMlRwQjtFQVhIOztJQWdCSSwwQjlCNVRjLEU4QjZUZjtFQWpCSDtJQXFCTSxrQjlCbVVRLEU4QmxVVDtFQXRCTDtJQTBCSSwyQkFBMEIsRUFDM0I7O0FBR0g7RUFDRSxtQkFBa0I7RUFDbEIsT0FBTTtFQUNOLFNBQVE7RUFDUixRQUFPO0VBQ1AsV0FBVTtFQUNWLG9DYmxPOEQ7RWFtTzlELDBCOUI4Q2tDO0U4QjVDbEMsaUI5QnZEK0I7RThCd0QvQixpQjlCbkQrQjtFOEJvRC9CLGU5QmhWZ0I7RThCaVZoQix1QjlCeFZhO0U4QnlWYiwwQjlCclZnQjtFU09kLGlCUkphLEU2QnNXaEI7RUFqQ0Q7SUFrQkksbUJBQWtCO0lBQ2xCLE9BQU07SUFDTixTQUFRO0lBQ1IsVUFBUztJQUNULFdBQVU7SUFDVixlQUFjO0lBQ2QsOEJicFA0RDtJYXFQNUQsMEI5QjRCZ0M7SThCM0JoQyxpQjlCbkU2QjtJOEJvRTdCLGU5QmhXYztJOEJpV2Qsa0JBQWlCO0lUeldqQiwwQnJCR2M7SThCd1dkLHFCQUFvQjtJckIvVnBCLHVCcUJnV2dGLEVBQ2pGOztBQVNIO0VBQ0UsWUFBVztFQUNYLGViMVEyQjtFYTJRM0IsV0FBVTtFQUNWLDhCQUE2QjtFQUM3Qix5QkFBZ0I7S0FBaEIsc0JBQWdCO1VBQWhCLGlCQUFnQixFQWtJakI7RUF2SUQ7SUFRSSxjQUFhLEVBT2Q7SUFmSDtNQVk4QiwwRTdCbllQO2M2Qm1ZTyxrRTdCbllQLEU2Qm1ZMkQ7SUFabEY7TUFhOEIsa0U3QnBZUCxFNkJvWTJEO0lBYmxGO01BYzhCLGtFN0JyWVAsRTZCcVkyRDtFQWRsRjtJQWtCSSxVQUFTLEVBQ1Y7RUFuQkg7SUFzQkksWTlCNE42QztJOEIzTjdDLGE5QjJONkM7SThCMU43QyxxQkFBeUU7SVQ5WXpFLDBCcEJEbUI7STZCaVpuQixVOUIyTjBDO0lTL2xCMUMsb0JUZ21CNkM7SW1CbG1CM0MsNkhuQjhmK0g7SW1COWYvSCxxSG5COGYrSDtJbUI5Zi9ILGdIbkI4ZitIO0ltQjlmL0gsNkduQjhmK0g7SW1COWYvSCxtSm5COGYrSDtJOEJwSGpJLHlCQUFnQjtZQUFoQixpQkFBZ0IsRUFLakI7SVgzWUc7TVd3V047UVh2V1EseUJBQWdCO1FBQWhCLG9CQUFnQjtRQUFoQixpQkFBZ0IsRVcwWXJCLEVBQUE7SUFuQ0g7TVR0WEksMEJyQmduQjJFLEU4QnhOMUU7RUFsQ0w7SUFzQ0ksWTlCcU1vQztJOEJwTXBDLGU5QnFNcUM7SThCcE1yQyxtQkFBa0I7SUFDbEIsZ0I5Qm9NdUM7SThCbk12QywwQjlCNVpjO0k4QjZaZCwwQkFBeUI7SXJCclp6QixvQlR5bEJvQyxFOEJqTXJDO0VBOUNIO0lBaURJLFk5QmlNNkM7SThCaE03QyxhOUJnTTZDO0lxQnhtQjdDLDBCcEJEbUI7STZCMmFuQixVOUJpTTBDO0lTL2xCMUMsb0JUZ21CNkM7SW1CbG1CM0MsNkhuQjhmK0g7SW1COWYvSCxxSG5COGYrSDtJbUI5Zi9ILGdIbkI4ZitIO0ltQjlmL0gsNkduQjhmK0g7SW1COWYvSCxtSm5COGYrSDtJOEIxRmpJLHNCQUFnQjtTQUFoQixpQkFBZ0IsRUFLakI7SVhyYUc7TVd3V047UVh2V1EseUJBQWdCO1FBQWhCLG9CQUFnQjtRQUFoQixpQkFBZ0IsRVdvYXJCLEVBQUE7SUE3REg7TVR0WEksMEJyQmduQjJFLEU4QjlMMUU7RUE1REw7SUFnRUksWTlCMktvQztJOEIxS3BDLGU5QjJLcUM7SThCMUtyQyxtQkFBa0I7SUFDbEIsZ0I5QjBLdUM7SThCekt2QywwQjlCdGJjO0k4QnViZCwwQkFBeUI7SXJCL2F6QixvQlR5bEJvQyxFOEJ2S3JDO0VBeEVIO0lBMkVJLFk5QnVLNkM7SThCdEs3QyxhOUJzSzZDO0k4QnJLN0MsY0FBYTtJQUNiLHFCOUI3RCtCO0k4QjhEL0Isb0I5QjlEK0I7SXFCdlkvQiwwQnBCRG1CO0k2QndjbkIsVTlCb0swQztJUy9sQjFDLG9CVGdtQjZDO0ltQmxtQjNDLDZIbkI4ZitIO0ltQjlmL0gscUhuQjhmK0g7SW1COWYvSCxnSG5COGYrSDtJbUI5Zi9ILDZHbkI4ZitIO0ltQjlmL0gsbUpuQjhmK0g7SThCN0RqSSxpQkFBZ0IsRUFLakI7SVhsY0c7TVd3V047UVh2V1EseUJBQWdCO1FBQWhCLG9CQUFnQjtRQUFoQixpQkFBZ0IsRVdpY3JCLEVBQUE7SUExRkg7TVR0WEksMEJyQmduQjJFLEU4QmpLMUU7RUF6Rkw7SUE2RkksWTlCOElvQztJOEI3SXBDLGU5QjhJcUM7SThCN0lyQyxtQkFBa0I7SUFDbEIsZ0I5QjZJdUM7SThCNUl2Qyw4QkFBNkI7SUFDN0IsMEJBQXlCO0lBQ3pCLHFCQUE0QyxFQUU3QztFQXJHSDtJQXdHSSwwQjlCMWRjO0lTUWQsb0JUeWxCb0MsRThCcklyQztFQTFHSDtJQTZHSSxtQkFBa0I7SUFDbEIsMEI5QmhlYztJU1FkLG9CVHlsQm9DLEU4Qi9IckM7RUFoSEg7SUFvSE0sMEI5QnBlWSxFOEJxZWI7RUFySEw7SUF3SE0sZ0JBQWUsRUFDaEI7RUF6SEw7SUE0SE0sMEI5QjVlWSxFOEI2ZWI7RUE3SEw7SUFnSU0sZ0JBQWUsRUFDaEI7RUFqSUw7SUFvSU0sMEI5QnBmWSxFOEJxZmI7O0FBSUw7OztFWHJmTSw2SG5COGYrSDtFbUI5Zi9ILHFIbkI4ZitIO0VtQjlmL0gsZ0huQjhmK0g7RW1COWYvSCw2R25COGYrSDtFbUI5Zi9ILG1KbkI4ZitILEU4QkxwSTtFWHJmSztJ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aWlCNkIsRWdDaGlCOUI7RUF0Q1g7O0lBMkNVLDBCQUFpQjtRQUFqQixzQkFBaUI7WUFBakIsa0JBQWlCLEVBQ2xCO0VBNUNUO0lBMERVLGdDQUF3QjtJQUF4QixpQ0FBd0I7SUFBeEIsZ0NBQXdCO0lBQXhCLHlCQUF3QjtJQUd4Qix5QkFBZ0I7UUFBaEIsOEJBQWdCO1lBQWhCLGlCQUFnQixFQUNqQjtFQTlEVDtJQWlFVSxjQUFhLEVBQ2Q7O0FBWVQ7RUFFSSwwQmhDL01XLEVnQ29OWjtFNUJyTkQ7STRCbU5JLDBCaENsTlMsRUlFWjs7QTRCMk1IO0VBV00sMEJoQ3hOUyxFZ0NpT1Y7RTVCbE9IO0k0QjROTSwwQmhDM05PLEVJRVo7RTRCMk1IO0lBa0JRLDBCaEMvTk8sRWdDZ09SOztBQW5CUDs7OztFQTBCTSwwQmhDdk9TLEVnQ3dPVjs7QUEzQkw7RUErQkksMEJoQzVPVztFZ0M2T1gsaUNoQzdPVyxFZ0M4T1o7O0FBakNIO0VBb0NJLG9SZnhNOEUsRWV5TS9FOztBQXJDSDtFQXdDSSwwQmhDclBXLEVnQzZQWjtFQWhESDtJQTBDTSwwQmhDdlBTLEVnQzRQVjtJNUI3UEg7TTRCMlBNLDBCaEMxUE8sRUlFWjs7QTRCK1BIO0VBRUksWWhDN1FXLEVnQ2tSWjtFNUJ6UUQ7STRCdVFJLFloQ2hSUyxFSVlaOztBNEIrUEg7RUFXTSxnQ2hDdFJTLEVnQytSVjtFNUJ0Ukg7STRCZ1JNLGlDaEN6Uk8sRUlZWjtFNEIrUEg7SUFrQlEsaUNoQzdSTyxFZ0M4UlI7O0FBbkJQOzs7O0VBMEJNLFloQ3JTUyxFZ0NzU1Y7O0FBM0JMO0VBK0JJLGdDaEMxU1c7RWdDMlNYLHVDaEMzU1csRWdDNFNaOztBQWpDSDtFQW9DSSwwUmY1UDhFLEVlNlAvRTs7QUFyQ0g7RUF3Q0ksZ0NoQ25UVyxFZ0MyVFo7RUFoREg7SUEwQ00sWWhDclRTLEVnQzBUVjtJNUJqVEg7TTRCK1NNLFloQ3hUTyxFSVlaOztBNkJmSDtFQUNFLG1CQUFrQjtFQUNsQixxQkFBYTtFQUFiLHNCQUFhO0VBQWIscUJBQWE7RUFBYixjQUFhO0VBQ2IsNkJB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QWE7RTdCR2IsZ0JBQWU7RUFDZixpQkFBZ0I7RUdhZCxpQlJKYSxFa0NWaEI7O0FBRUQ7RUFDRSxtQkFBa0I7RUFDbEIsZUFBYztFQUNkLHdCbkNteEJ3QztFbUNseEJ4QyxrQm5DdU8rQjtFbUN0Ty9CLGtCbkNzeEJzQztFbUNyeEJ0QyxlbENQcUI7RWtDU3JCLHVCbkNQYTtFbUNRYiwwQm5DTGdCLEVtQ29CakI7RUF4QkQ7SUFZSSxXQUFVO0lBQ1YsZW5DbUs4RDtJbUNsSzlELHNCQUFxQjtJQUNyQiwwQm5DWmM7SW1DYWQsc0JuQ1pjLEVtQ2FmO0VBakJIO0lBb0JJLFdBQVU7SUFDVixXbkM4d0JpQztJbUM3d0JqQywwRGxDdkJtQjtZa0N1Qm5CLGtEbEN2Qm1CLEVrQ3dCcEI7O0FBR0g7RUFHTSxlQUFjO0UxQmFoQiwwQlJsQ2E7RVFtQ2IsNkJSbkNhLEVrQ3VCWjs7QUFMTDtFMUJFSSwyQlJwQmE7RVFxQmIsOEJSckJhLEVrQzRCWjs7QUFWTDtFQWNJLFdBQVU7RUFDVixZbkN4Q1c7RW1DeUNYLDBCbEMzQ21CO0VrQzRDbkIsc0JsQzVDbUIsRWtDNkNwQjs7QUFsQkg7RUFxQkksZW5DeENjO0VtQ3lDZCxxQkFBb0I7RUFFcEIsYUFBWTtFQUNaLHVCbkNsRFc7RW1DbURYLHNCbkNoRGMsRW1DaURmOztBQ3hERDtFQUNFLHdCcEM0eEJzQztFRWpxQnBDLG1CQXRDWTtFa0NuRmQsaUJwQ3dPNkIsRW9Ddk85Qjs7QUFJRztFM0JxQ0YsK0JUcU0rQjtFU3BNL0Isa0NUb00rQixFb0N4TzVCOztBQUdEO0UzQmtCRixnQ1RtTitCO0VTbE4vQixtQ1RrTitCLEVvQ25PNUI7O0FBZkw7RUFDRSx3QnBDMHhCcUM7RUUvcEJuQyxvQkF0Q1k7RWtDbkZkLGlCcEN5TzZCLEVvQ3hPOUI7O0FBSUc7RTNCcUNGLCtCVHNNK0I7RVNyTS9CLGtDVHFNK0IsRW9Dek81Qjs7QUFHRDtFM0JrQkYsZ0NUb04rQjtFU25OL0IsbUNUbU4rQixFb0NwTzVCOztBQ2JQO0VBQ0Usc0JBQXFCO0VBQ3JCLHNCckMyNUJzQztFRTExQnBDLGVBQVc7RW1DL0RiLGlCckM2UitCO0VxQzVSL0IsZUFBYztFQUNkLG1CQUFrQjtFQUNsQixvQkFBbUI7RUFDbkIseUJBQXdCO0U1Qkt0QixpQlJKYTtFa0JFWCxzSm5CcWI2STtFbUJyYjdJLDhJbkJxYjZJO0VtQnJiN0kseUluQnFiNkk7RW1CcmI3SSxzSW5CcWI2STtFbUJyYjdJLDRLbkJxYjZJLEVxQzFhbEo7RWxCUEs7SWtCZk47TWxCZ0JRLHlCQUFnQjtNQUFoQixvQkFBZ0I7TUFBaEIsaUJBQWdCLEVrQk12QixFQUFBO0VqQ1hDO0lpQ0dJLHNCQUFxQixFakNBeEI7RWlDZEg7SUFvQkksY0FBYSxFQUNkOztBQUlIO0VBQ0UsbUJBQWtCO0VBQ2xCLFVBQVMsRUFDVjs7QUFNRDtFQUNFLHFCckNnNEJzQztFcUMvM0J0QyxvQnJDKzNCc0M7RVN0NUJwQyxxQlR5NUJxQyxFcUNoNEJ4Qzs7QUFPQztFQ2pEQSxZdENNYTtFc0NMYiwwQnJDR3FCLEVvQytDcEI7RWpDcENEO0lrQ1ZJLFl0Q0NTO0lzQ0FULDBCQUFrQyxFbENZckM7RWtDZk87SUFRSixXQUFVO0lBQ1YseURyQ1JpQjtZcUNRakIsaURyQ1JpQixFcUNTbEI7O0FEb0NIO0VDakRBLFl0Q01hO0VzQ0xiLDBCckNJcUIsRW9DOENwQjtFakNwQ0Q7SWtDVkksWXRDQ1M7SXNDQVQsMEJBQWtDLEVsQ1lyQztFa0NmTztJQVFKLFdBQVU7SUFDViwwRHJDUGlCO1lxQ09qQixrRHJDUGlCLEVxQ1FsQjs7QURvQ0g7RUNqREEsWXRDTWE7RXNDTGIsMEJyQ0txQixFb0M2Q3BCO0VqQ3BDRDtJa0NWSSxZdENDUztJc0NBVCwwQkFBa0MsRWxDWXJDO0VrQ2ZPO0lBUUosV0FBVTtJQUNWLHdEckNOaUI7WXFDTWpCLGdEckNOaUIsRXFDT2xCOztBRG9DSDtFQ2pEQSxZdENNYTtFc0NMYiwwQnJDTXFCLEVvQzRDcEI7RWpDcENEO0lrQ1ZJLFl0Q0NTO0lzQ0FULDBCQUFrQyxFbENZckM7RWtDZk87SUFRSixXQUFVO0lBQ1YseURyQ0xpQjtZcUNLakIsaURyQ0xpQixFcUNNbEI7O0FEb0NIO0VDakRBLGV0Q2VnQjtFc0NkaEIsMEJyQ09xQixFb0MyQ3BCO0VqQ3BDRDtJa0NWSSxldENVWTtJc0NUWiwwQkFBa0MsRWxDWXJDO0VrQ2ZPO0lBUUosV0FBVTtJQUNWLHlEckNKaUI7WXFDSWpCLGlEckNKaUIsRXFDS2xCOztBRG9DSDtFQ2pEQSxZdENNYTtFc0NMYiwwQnJDUXFCLEVvQzBDcEI7RWpDcENEO0lrQ1ZJLFl0Q0NTO0lzQ0FULDBCQUFrQyxFbENZckM7RWtDZk87SUFRSixXQUFVO0lBQ1Ysd0RyQ0hpQjtZcUNHakIsZ0RyQ0hpQixFcUNJbEI7O0FEb0NIO0VDakRBLGV0Q2VnQjtFc0NkaEIsMEJyQ1NxQixFb0N5Q3BCO0VqQ3BDRDtJa0NWSSxldENVWTtJc0NUWiwwQkFBa0MsRWxDWXJDO0VrQ2ZPO0lBUUosV0FBVTtJQUNWLDBEckNGaUI7WXFDRWpCLGtEckNGaUIsRXFDR2xCOztBRG9DSDtFQ2pEQSxZdENNYTtFc0NMYiwwQnJDVXFCLEVvQ3dDcEI7RWpDcENEO0lrQ1ZJLFl0Q0NTO0lzQ0FULDBCQUFrQyxFbENZckM7RWtDZk87SUFRSixXQUFVO0lBQ1YsdURyQ0RpQjtZcUNDakIsK0NyQ0RpQixFcUNFbEI7O0FDZEw7RUFDRSxtQkFBb0Q7RUFDcEQsb0J2Q3d6QnNDO0V1Q3R6QnRDLDBCdkNLZ0I7RVNTZCxzQlRtTytCLEV1QzNPbEM7RTFCa0RHO0kwQjVESjtNQVFJLG1CdkNrekJvQyxFdUNoekJ2QyxFQUFBOztBQUVEO0VBQ0UsaUJBQWdCO0VBQ2hCLGdCQUFlO0U5QkliLGlCOEJIc0IsRUFDekI7O0FDWkQ7RUFDRSxtQkFBa0I7RUFDbEIseUJ4Q3c5QnlDO0V3Q3Y5QnpDLG9CeEN3OUJzQztFd0N2OUJ0Qyw4QkFBNkM7RS9CVTNDLGlCUkphLEV1Q0poQjs7QUFHRDtFQUVFLGVBQWMsRUFDZjs7QUFHRDtFQUNFLGlCeENrUitCLEV3Q2pSaEM7O0FBT0Q7RUFDRSxvQkFBc0QsRUFVdkQ7RUFYRDtJQUtJLG1CQUFrQjtJQUNsQixPQUFNO0lBQ04sU0FBUTtJQUNSLHlCeEMwN0J1QztJd0N6N0J2QyxlQUFjLEVBQ2Y7O0FBU0Q7RUM5Q0EsZXhCcUdnRTtFSWhHOUQsMEJKZ0c4RDtFd0JuR2hFLHNCeEJtR2dFLEV1QnJEL0Q7RUM1Q0Q7SUFDRSwwQkFBcUMsRUFDdEM7RUFFRDtJQUNFLGVBQTBCLEVBQzNCOztBRG9DRDtFQzlDQSxleEJxR2dFO0VJaEc5RCwwQkpnRzhEO0V3Qm5HaEUsc0J4Qm1HZ0UsRXVCckQvRDtFQzVDRDtJQUNFLDBCQUFxQyxFQUN0QztFQUVEO0lBQ0UsZUFBMEIsRUFDM0I7O0FEb0NEO0VDOUNBLGV4QnFHZ0U7RUloRzlELDBCSmdHOEQ7RXdCbkdoRSxzQnhCbUdnRSxFdUJyRC9EO0VDNUNEO0lBQ0UsMEJBQXFDLEVBQ3RDO0VBRUQ7SUFDRSxlQUEwQixFQUMzQjs7QURvQ0Q7RUM5Q0EsZXhCcUdnRTtFSWhHOUQsMEJKZ0c4RDtFd0JuR2hFLHNCeEJtR2dFLEV1QnJEL0Q7RUM1Q0Q7SUFDRSwwQkFBcUMsRUFDdEM7RUFFRDtJQUNFLGVBQTBCLEVBQzNCOztBRG9DRDtFQzlDQSxleEJxR2dFO0VJaEc5RCwwQkpnRzhEO0V3Qm5HaEUsc0J4Qm1HZ0UsRXVCckQvRDtFQzVDRDtJQUNFLDBCQUFxQyxFQUN0QztFQUVEO0lBQ0UsZUFBMEIsRUFDM0I7O0FEb0NEO0VDOUNBLGV4QnFHZ0U7RUloRzlELDBCSmdHOEQ7RXdCbkdoRSxzQnhCbUdnRSxFdUJyRC9EO0VDNUNEO0lBQ0UsMEJBQXFDLEVBQ3RDO0VBRUQ7SUFDRSxlQUEwQixFQUMzQjs7QURvQ0Q7RUM5Q0EsZXhCcUdnRTtFSWhHOUQsMEJKZ0c4RDtFd0JuR2hFLHNCeEJtR2dFLEV1QnJEL0Q7RUM1Q0Q7SUFDRSwwQkFBcUMsRUFDdEM7RUFFRDtJQUNFLGVBQTBCLEVBQzNCOztBRG9DRDtFQzlDQSxleEJxR2dFO0VJaEc5RCwwQkpnRzhEO0V3Qm5HaEUsc0J4Qm1HZ0UsRXVCckQvRDtFQzVDRDtJQUNFLDBCQUFxQyxFQUN0QztFQUVEO0lBQ0UsYUFBMEIsRUFDM0I7O0FD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ckM7SUFaTDtNQWVNLGNBQWEsRUFDZDtJQWhCTDtNQW1CTSxzQjVDK0h1QjtNNEM5SHZCLHFCQUFvQixFQU1yQjtNQTFCTDtRQXVCUSxrQjVDMkhxQjtRNEMxSHJCLHVCNUMwSHFCLEU0Q3pIdEIsRUFBQTs7QS9CNURQO0UrQm1DQTtJQUNFLCtCQUFtQjtJQUFuQiw4QkFBbUI7SUFBbkIsNEJBQW1CO1FBQW5CLHdCQUFtQjtZQUFuQixvQkFBbUIsRUEyQnBCO0lBNUJEO01uQ3RCQSw2QlIzRGE7TVErQ2IsMkJtQ3dDd0MsRUFDbkM7SUFQTDtNbkNsQ0EsMkJSL0NhO01RMkRiLDZCbUNpQzBDLEVBQ3JDO0lBWkw7TUFlTSxjQUFhLEVBQ2Q7SUFoQkw7TUFtQk0sc0I1QytIdUI7TTRDOUh2QixxQkFBb0IsRUFNckI7TUExQkw7UUF1QlEsa0I1QzJIcUI7UTRDMUhyQix1QjVDMEhxQixFNEN6SHRCLEVBQUE7O0FBYVg7RW5DbkhJLGlCbUNvSHNCLEVBU3pCO0VBVkQ7SUFJSSxzQjVDd0c2QixFNENuRzlCO0lBVEg7TUFPTSx1QkFBc0IsRUFDdkI7O0FDMUlIO0VBQ0UsZTVCa0c4RDtFNEJqRzlELDBCNUJpRzhELEU0Qm5GL0Q7RXpDSEQ7SXlDUE0sZTVCNkYwRDtJNEI1RjFELDBCQUF5QyxFekNTOUM7RXlDaEJEO0lBV00sWTdDUE87STZDUVAsMEI1QnVGMEQ7STRCdEYxRCxzQjVCc0YwRCxFNEJyRjNEOztBQWRMO0VBQ0UsZTVCa0c4RDtFNEJqRzlELDBCNUJpRzhELEU0Qm5GL0Q7RXpDSEQ7SXlDUE0sZTVCNkYwRDtJNEI1RjFELDBCQUF5QyxFekNTOUM7RXlDaEJEO0lBV00sWTdDUE87STZDUVAsMEI1QnVGMEQ7STRCdEYxRCxzQjVCc0YwRCxFNEJyRjNEOztBQWRMO0VBQ0UsZTVCa0c4RDtFNEJqRzlELDBCNUJpRzhELEU0Qm5GL0Q7RXpDSEQ7SXlDUE0sZTVCNkYwRDtJNEI1RjFELDBCQUF5QyxFekNTOUM7RXlDaEJEO0lBV00sWTdDUE87STZDUVAsMEI1QnVGMEQ7STRCdEYxRCxzQjVCc0YwRCxFNEJyRjNEOztBQWRMO0VBQ0UsZTVCa0c4RDtFNEJqRzlELDBCNUJpRzhELEU0Qm5GL0Q7RXpDSEQ7SXlDUE0sZTVCNkYwRDtJNEI1RjFELDBCQUF5QyxFekNTOUM7RXlDaEJEO0lBV00sWTdDUE87STZDUVAsMEI1QnVGMEQ7STRCdEYxRCxzQjVCc0YwRCxFNEJyRjNEOztBQWRMO0VBQ0UsZTVCa0c4RDtFNEJqRzlELDBCNUJpRzhELEU0Qm5GL0Q7RXpDSEQ7SXlDUE0sZTVCNkYwRDtJNEI1RjFELDBCQUF5QyxFekNTOUM7RXlDaEJEO0lBV00sWTdDUE87STZDUVAsMEI1QnVGMEQ7STRCdEYxRCxzQjVCc0YwRCxFNEJyRjNEOztBQWRMO0VBQ0UsZTVCa0c4RDtFNEJqRzlELDBCNUJpRzhELEU0Qm5GL0Q7RXpDSEQ7SXlDUE0sZTVCNkYwRDtJNEI1RjFELDBCQUF5QyxFekNTOUM7RXlDaEJEO0lBV00sWTdDUE87STZDUVAsMEI1QnVGMEQ7STRCdEYxRCxzQjVCc0YwRCxFNEJyRjNEOztBQWRMO0VBQ0UsZTVCa0c4RDtFNEJqRzlELDBCNUJpRzhELEU0Qm5GL0Q7RXpDSEQ7SXlDUE0sZTVCNkYwRDtJNEI1RjFELDBCQUF5QyxFekNTOUM7RXlDaEJEO0lBV00sWTdDUE87STZDUVAsMEI1QnVGMEQ7STRCdEYxRCxzQjVCc0YwRCxFNEJyRjNEOztBQWRMO0VBQ0UsZTVCa0c4RDtFNEJqRzlELDBCNUJpRzhELEU0Qm5GL0Q7RXpDSEQ7SXlDUE0sZTVCNkYwRDtJNEI1RjFELDBCQUF5QyxFekNTOUM7RXlDaEJEO0lBV00sWTdDUE87STZDUVAsMEI1QnVGMEQ7STRCdEYxRCxzQjVCc0YwRCxFNEJyRjNEOztBQ2pCUDtFQUNFLGFBQVk7RTVDOEhSLGtCQXRDWTtFNEN0RmhCLGlCOUNtUytCO0U4Q2xTL0IsZUFBYztFQUNkLFk5Q1lhO0U4Q1hiLDBCOUNDYTtFOENBYixZQUFXLEVBYVo7RTFDUkM7STBDREUsWTlDTVc7SThDTFgsc0JBQXFCLEUxQ0FEO0VBSXRCO0kwQ0NJLGFBQVksRTFDRWY7O0EwQ1NIO0VBQ0Us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Q0FBMEI7SUFBMUIseUJBQTBCLEVBQUk7RUFBdEQ7SUFBd0IsdUNBQTBCO0lBQTFCLHdDQUEwQjtJQUExQix1Q0FBMEI7SUFBMUIsZ0NBQTBCLEVBQUksRUFBQTs7QTlDaUR4RDtFOENqREU7SUFBd0IseUJBQTBCLEVBQUk7RUFBdEQ7SUFBd0IsMkJBQTBCLEVBQUk7RUFBdEQ7SUFBd0IsaUNBQTBCLEVBQUk7RUFBdEQ7SUFBd0IsMEJBQTBCLEVBQUk7RUFBdEQ7SUFBd0IsMEJBQTBCLEVBQUk7RUFBdEQ7SUFBd0IsOEJBQTBCLEVBQUk7RUFBdEQ7SUFBd0IsK0JBQTBCLEVBQUk7RUFBdEQ7SUFBd0IsZ0NBQTBCO0lBQTFCLGlDQUEwQjtJQUExQixnQ0FBMEI7SUFBMUIseUJBQTBCLEVBQUk7RUFBdEQ7SUFBd0IsdUNBQTBCO0lBQTFCLHdDQUEwQjtJQUExQix1Q0FBMEI7SUFBMUIsZ0NBQTBCLEVBQUksRUFBQTs7QTlDaUR4RDtFOENqREU7SUFBd0IseUJBQTBCLEVBQUk7RUFBdEQ7SUFBd0IsMkJBQTBCLEVBQUk7RUFBdEQ7SUFBd0IsaUNBQTBCLEVBQUk7RUFBdEQ7SUFBd0IsMEJBQTBCLEVBQUk7RUFBdEQ7SUFBd0IsMEJBQTBCLEVBQUk7RUFBdEQ7SUFBd0IsOEJBQTBCLEVBQUk7RUFBdEQ7SUFBd0IsK0JBQTBCLEVBQUk7RUFBdEQ7SUFBd0IsZ0NBQTBCO0lBQTFCLGlDQUEwQjtJQUExQixnQ0FBMEI7SUFBMUIseUJBQTBCLEVBQUk7RUFBdEQ7SUFBd0IsdUNBQTBCO0lBQTFCLHdDQUEwQjtJQUExQix1Q0FBMEI7SUFBMUIsZ0NBQTBCLEVBQUksRUFBQTs7QTlDaUR4RDtFOENqREU7SUFBd0IseUJBQTBCLEVBQUk7RUFBdEQ7SUFBd0IsMkJBQTBCLEVBQUk7RUFBdEQ7SUFBd0IsaUNBQTBCLEVBQUk7RUFBdEQ7SUFBd0IsMEJBQTBCLEVBQUk7RUFBdEQ7SUFBd0IsMEJBQTBCLEVBQUk7RUFBdEQ7SUFBd0IsOEJBQTBCLEVBQUk7RUFBdEQ7SUFBd0IsK0JBQTBCLEVBQUk7RUFBdEQ7SUFBd0Is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Q3RCLHVCQUFxQjtFQUFyQiw4QkFBcUI7TUFBckIsb0JBQXFCO1VBQXJCLHNCQUFxQjtFQUNyQixrQkFBaUIsRUFDbEI7O0FBRUQ7RUFDRSxnQkFBZTtFQUNmLGtCQUFpQjtFQUNqQixpQkFBZ0I7RUFDaEIsc0JBQXFCLEVBQ3RCOztBQUVEO0VBQ0UsZ0JBQWU7RUFDZixxQ0FBb0MsRUFDckM7O0FBRUQ7RUFDRSxXQUFVLEVBQ1g7O0FBRUQ7RUFDRSxZQUFXLEVBQ1o7O0FBUUM7RUFMQSxZckZqRGE7RXFGa0RiLG9CcEZwRHFCLEVvRjBEcEI7O0FBRkQ7RUFMQSxZckZqRGE7RXFGa0RiLG9CcEZuRHFCLEVvRnlEcEI7O0FBRkQ7RUFMQSxZckZqRGE7RXFGa0RiLG9CcEZsRHFCLEVvRndEcEI7O0FBRkQ7RUFMQSxZckZqRGE7RXFGa0RiLG9CcEZqRHFCLEVvRnVEcEI7O0FBRkQ7RUFMQSxlckZ4Q2dCO0VxRnlDaEIsb0JwRmhEcUIsRW9Gc0RwQjs7QUFGRDtFQUxBLFlyRmpEYTtFcUZrRGIsb0JwRi9DcUIsRW9GcURwQjs7QUFGRDtFQUxBLGVyRnhDZ0I7RXFGeUNoQixvQnBGOUNxQixFb0ZvRHBCOztBQUZEO0VBTEEsWXJGakRhO0VxRmtEYixvQnBGN0NxQixFb0ZtRHBCIiwiZmlsZSI6ImVhc2lvbi5jc3MiLCJzb3VyY2VzQ29udGVudCI6WyIvKiFcbiAqIEJvb3RzdHJhcCB2NC41LjAgKGh0dHBzOi8vZ2V0Ym9vdHN0cmFwLmNvbS8pXG4gKiBDb3B5cmlnaHQgMjAxMS0yMDIwIFRoZSBCb290c3RyYXAgQXV0aG9yc1xuICogQ29weXJpZ2h0IDIwMTEtMjAyMCBUd2l0dGVyLCBJbmMuXG4gKiBMaWNlbnNlZCB1bmRlciBNSVQgKGh0dHBzOi8vZ2l0aHViLmNvbS90d2JzL2Jvb3RzdHJhcC9ibG9iL21hc3Rlci9MSUNFTlNFKVxuICovXG5cbkBpbXBvcnQgXCJmdW5jdGlvbnNcIjtcbkBpbXBvcnQgXCJ2YXJpYWJsZXNcIjtcbkBpbXBvcnQgXCJtaXhpbnNcIjtcbkBpbXBvcnQgXCJyb290XCI7XG5AaW1wb3J0IFwicmVib290XCI7XG5AaW1wb3J0IFwidHlwZVwiO1xuQGltcG9ydCBcImltYWdlc1wiO1xuQGltcG9ydCBcImNvZGVcIjtcbkBpbXBvcnQgXCJncmlkXCI7XG5AaW1wb3J0IFwidGFibGVzXCI7XG5AaW1wb3J0IFwiZm9ybXNcIjtcbkBpbXBvcnQgXCJidXR0b25zXCI7XG5AaW1wb3J0IFwidHJhbnNpdGlvbnNcIjtcbkBpbXBvcnQgXCJkcm9wZG93blwiO1xuQGltcG9ydCBcImJ1dHRvbi1ncm91cFwiO1xuQGltcG9ydCBcImlucHV0LWdyb3VwXCI7XG5AaW1wb3J0IFwiY3VzdG9tLWZvcm1zXCI7XG5AaW1wb3J0IFwibmF2XCI7XG5AaW1wb3J0IFwibmF2YmFyXCI7XG5AaW1wb3J0IFwiY2FyZFwiO1xuQGltcG9ydCBcImJyZWFkY3J1bWJcIjtcbkBpbXBvcnQgXCJwYWdpbmF0aW9uXCI7XG5AaW1wb3J0IFwiYmFkZ2VcIjtcbkBpbXBvcnQgXCJqdW1ib3Ryb25cIjtcbkBpbXBvcnQgXCJhbGVydFwiO1xuQGltcG9ydCBcInByb2dyZXNzXCI7XG5AaW1wb3J0IFwibWVkaWFcIjtcbkBpbXBvcnQgXCJsaXN0LWdyb3VwXCI7XG5AaW1wb3J0IFwiY2xvc2VcIjtcbkBpbXBvcnQgXCJ0b2FzdHNcIjtcbkBpbXBvcnQgXCJtb2RhbFwiO1xuQGltcG9ydCBcInRvb2x0aXBcIjtcbkBpbXBvcnQgXCJwb3BvdmVyXCI7XG5AaW1wb3J0IFwiY2Fyb3VzZWxcIjtcbkBpbXBvcnQgXCJzcGlubmVyc1wiO1xuQGltcG9ydCBcInV0aWxpdGllc1wiO1xuQGltcG9ydCBcInByaW50XCI7XG4iLCIvLyBEbyBub3QgZm9yZ2V0IHRvIHVwZGF0ZSBnZXR0aW5nLXN0YXJ0ZWQvdGhlbWluZy5tZCFcbjpyb290IHtcbiAgLy8gQ3VzdG9tIHZhcmlhYmxlIHZhbHVlcyBvbmx5IHN1cHBvcnQgU2Fzc1NjcmlwdCBpbnNpZGUgYCN7fWAuXG4gIEBlYWNoICRjb2xvciwgJHZhbHVlIGluICRjb2xvcnMge1xuICAgIC0tI3skY29sb3J9OiAjeyR2YWx1ZX07XG4gIH1cblxuICBAZWFjaCAkY29sb3IsICR2YWx1ZSBpbiAkdGhlbWUtY29sb3JzIHtcbiAgICAtLSN7JGNvbG9yfTogI3skdmFsdWV9O1xuICB9XG5cbiAgQGVhY2ggJGJwLCAkdmFsdWUgaW4gJGdyaWQtYnJlYWtwb2ludHMge1xuICAgIC0tYnJlYWtwb2ludC0jeyRicH06ICN7JHZhbHVlfTtcbiAgfVxuXG4gIC8vIFVzZSBgaW5zcGVjdGAgZm9yIGxpc3RzIHNvIHRoYXQgcXVvdGVkIGl0ZW1zIGtlZXAgdGhlIHF1b3Rlcy5cbiAgLy8gU2VlIGh0dHBzOi8vZ2l0aHViLmNvbS9zYXNzL3Nhc3MvaXNzdWVzLzIzODMjaXNzdWVjb21tZW50LTMzNjM0OTE3MlxuICAtLWZvbnQtZmFtaWx5LXNhbnMtc2VyaWY6ICN7aW5zcGVjdCgkZm9udC1mYW1pbHktc2Fucy1zZXJpZil9O1xuICAtLWZvbnQtZmFtaWx5LW1vbm9zcGFjZTogI3tpbnNwZWN0KCRmb250LWZhbWlseS1tb25vc3BhY2UpfTtcbn1cbiIsIi8vIHN0eWxlbGludC1kaXNhYmxlIGF0LXJ1bGUtbm8tdmVuZG9yLXByZWZpeCwgZGVjbGFyYXRpb24tbm8taW1wb3J0YW50LCBzZWxlY3Rvci1uby1xdWFsaWZ5aW5nLXR5cGUsIHByb3BlcnR5LW5vLXZlbmRvci1wcmVmaXhcblxuLy8gUmVib290XG4vL1xuLy8gTm9ybWFsaXphdGlvbiBvZiBIVE1MIGVsZW1lbnRzLCBtYW51YWxseSBmb3JrZWQgZnJvbSBOb3JtYWxpemUuY3NzIHRvIHJlbW92ZVxuLy8gc3R5bGVzIHRhcmdldGluZyBpcnJlbGV2YW50IGJyb3dzZXJzIHdoaWxlIGFwcGx5aW5nIG5ldyBzdHlsZXMuXG4vL1xuLy8gTm9ybWFsaXplIGlzIGxpY2Vuc2VkIE1JVC4gaHR0cHM6Ly9naXRodWIuY29tL25lY29sYXMvbm9ybWFsaXplLmNzc1xuXG5cbi8vIERvY3VtZW50XG4vL1xuLy8gMS4gQ2hhbmdlIGZyb20gYGJveC1zaXppbmc6IGNvbnRlbnQtYm94YCBzbyB0aGF0IGB3aWR0aGAgaXMgbm90IGFmZmVjdGVkIGJ5IGBwYWRkaW5nYCBvciBgYm9yZGVyYC5cbi8vIDIuIENoYW5nZSB0aGUgZGVmYXVsdCBmb250IGZhbWlseSBpbiBhbGwgYnJvd3NlcnMuXG4vLyAzLiBDb3JyZWN0IHRoZSBsaW5lIGhlaWdodCBpbiBhbGwgYnJvd3NlcnMuXG4vLyA0LiBQcmV2ZW50IGFkanVzdG1lbnRzIG9mIGZvbnQgc2l6ZSBhZnRlciBvcmllbnRhdGlvbiBjaGFuZ2VzIGluIElFIG9uIFdpbmRvd3MgUGhvbmUgYW5kIGluIGlPUy5cbi8vIDUuIENoYW5nZSB0aGUgZGVmYXVsdCB0YXAgaGlnaGxpZ2h0IHRvIGJlIGNvbXBsZXRlbHkgdHJhbnNwYXJlbnQgaW4gaU9TLlxuXG4qLFxuKjo6YmVmb3JlLFxuKjo6YWZ0ZXIge1xuICBib3gtc2l6aW5nOiBib3JkZXItYm94OyAvLyAxXG59XG5cbmh0bWwge1xuICBmb250LWZhbWlseTogc2Fucy1zZXJpZjsgLy8gMlxuICBsaW5lLWhlaWdodDogMS4xNTsgLy8gM1xuICAtd2Via2l0LXRleHQtc2l6ZS1hZGp1c3Q6IDEwMCU7IC8vIDRcbiAgLXdlYmtpdC10YXAtaGlnaGxpZ2h0LWNvbG9yOiByZ2JhKCRibGFjaywgMCk7IC8vIDVcbn1cblxuLy8gU2hpbSBmb3IgXCJuZXdcIiBIVE1MNSBzdHJ1Y3R1cmFsIGVsZW1lbnRzIHRvIGRpc3BsYXkgY29ycmVjdGx5IChJRTEwLCBvbGRlciBicm93c2Vycylcbi8vIFRPRE86IHJlbW92ZSBpbiB2NVxuLy8gc3R5bGVsaW50LWRpc2FibGUtbmV4dC1saW5lIHNlbGVjdG9yLWxpc3QtY29tbWEtbmV3bGluZS1hZnRlclxuYXJ0aWNsZSwgYXNpZGUsIGZpZ2NhcHRpb24sIGZpZ3VyZSwgZm9vdGVyLCBoZWFkZXIsIGhncm91cCwgbWFpbiwgbmF2LCBzZWN0aW9uIHtcbiAgZGlzcGxheTogYmxvY2s7XG59XG5cbi8vIEJvZHlcbi8vXG4vLyAxLiBSZW1vdmUgdGhlIG1hcmdpbiBpbiBhbGwgYnJvd3NlcnMuXG4vLyAyLiBBcyBhIGJlc3QgcHJhY3RpY2UsIGFwcGx5IGEgZGVmYXVsdCBgYmFja2dyb3VuZC1jb2xvcmAuXG4vLyAzLiBTZXQgYW4gZXhwbGljaXQgaW5pdGlhbCB0ZXh0LWFsaWduIHZhbHVlIHNvIHRoYXQgd2UgY2FuIGxhdGVyIHVzZVxuLy8gICAgdGhlIGBpbmhlcml0YCB2YWx1ZSBvbiB0aGluZ3MgbGlrZSBgPHRoPmAgZWxlbWVudHMuXG5cbmJvZHkge1xuICBtYXJnaW46IDA7IC8vIDFcbiAgZm9udC1mYW1pbHk6ICRmb250LWZhbWlseS1iYXNlO1xuICBAaW5jbHVkZSBmb250LXNpemUoJGZvbnQtc2l6ZS1iYXNlKTtcbiAgZm9udC13ZWlnaHQ6ICRmb250LXdlaWdodC1iYXNlO1xuICBsaW5lLWhlaWdodDogJGxpbmUtaGVpZ2h0LWJhc2U7XG4gIGNvbG9yOiAkYm9keS1jb2xvcjtcbiAgdGV4dC1hbGlnbjogbGVmdDsgLy8gM1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAkYm9keS1iZzsgLy8gMlxufVxuXG4vLyBGdXR1cmUtcHJvb2YgcnVsZTogaW4gYnJvd3NlcnMgdGhhdCBzdXBwb3J0IDpmb2N1cy12aXNpYmxlLCBzdXBwcmVzcyB0aGUgZm9jdXMgb3V0bGluZVxuLy8gb24gZWxlbWVudHMgdGhhdCBwcm9ncmFtbWF0aWNhbGx5IHJlY2VpdmUgZm9jdXMgYnV0IHdvdWxkbid0IG5vcm1hbGx5IHNob3cgYSB2aXNpYmxlXG4vLyBmb2N1cyBvdXRsaW5lLiBJbiBnZW5lcmFsLCB0aGlzIHdvdWxkIG1lYW4gdGhhdCB0aGUgb3V0bGluZSBpcyBvbmx5IGFwcGxpZWQgaWYgdGhlXG4vLyBpbnRlcmFjdGlvbiB0aGF0IGxlZCB0byB0aGUgZWxlbWVudCByZWNlaXZpbmcgcHJvZ3JhbW1hdGljIGZvY3VzIHdhcyBhIGtleWJvYXJkIGludGVyYWN0aW9uLFxuLy8gb3IgdGhlIGJyb3dzZXIgaGFzIHNvbWVob3cgZGV0ZXJtaW5lZCB0aGF0IHRoZSB1c2VyIGlzIHByaW1hcmlseSBhIGtleWJvYXJkIHVzZXIgYW5kL29yXG4vLyB3YW50cyBmb2N1cyBvdXRsaW5lcyB0byBhbHdheXMgYmUgcHJlc2VudGVkLlxuLy9cbi8vIFNlZSBodHRwczovL2RldmVsb3Blci5tb3ppbGxhLm9yZy9lbi1VUy9kb2NzL1dlYi9DU1MvOmZvY3VzLXZpc2libGVcbi8vIGFuZCBodHRwczovL2RldmVsb3Blci5wYWNpZWxsb2dyb3VwLmNvbS9ibG9nLzIwMTgvMDMvZm9jdXMtdmlzaWJsZS1hbmQtYmFja3dhcmRzLWNvbXBhdGliaWxpdHkvXG5bdGFiaW5kZXg9XCItMVwiXTpmb2N1czpub3QoOmZvY3VzLXZpc2libGUpIHtcbiAgb3V0bGluZTogMCAhaW1wb3J0YW50O1xufVxuXG5cbi8vIENvbnRlbnQgZ3JvdXBpbmdcbi8vXG4vLyAxLiBBZGQgdGhlIGNvcnJlY3QgYm94IHNpemluZyBpbiBGaXJlZm94LlxuLy8gMi4gU2hvdyB0aGUgb3ZlcmZsb3cgaW4gRWRnZSBhbmQgSUUuXG5cbmhyIHtcbiAgYm94LXNpemluZzogY29udGVudC1ib3g7IC8vIDFcbiAgaGVpZ2h0OiAwOyAvLyAxXG4gIG92ZXJmbG93OiB2aXNpYmxlOyAvLyAyXG59XG5cblxuLy9cbi8vIFR5cG9ncmFwaHlcbi8vXG5cbi8vIFJlbW92ZSB0b3AgbWFyZ2lucyBmcm9tIGhlYWRpbmdzXG4vL1xuLy8gQnkgZGVmYXVsdCwgYDxoMT5gLWA8aDY+YCBhbGwgcmVjZWl2ZSB0b3AgYW5kIGJvdHRvbSBtYXJnaW5zLiBXZSBudWtlIHRoZSB0b3Bcbi8vIG1hcmdpbiBmb3IgZWFzaWVyIGNvbnRyb2wgd2l0aGluIHR5cGUgc2NhbGVzIGFzIGl0IGF2b2lkcyBtYXJnaW4gY29sbGFwc2luZy5cbi8vIHN0eWxlbGludC1kaXNhYmxlLW5leHQtbGluZSBzZWxlY3Rvci1saXN0LWNvbW1hLW5ld2xpbmUtYWZ0ZXJcbmgxLCBoMiwgaDMsIGg0LCBoNSwgaDYge1xuICBtYXJnaW4tdG9wOiAwO1xuICBtYXJnaW4tYm90dG9tOiAkaGVhZGluZ3MtbWFyZ2luLWJvdHRvbTtcbn1cblxuLy8gUmVzZXQgbWFyZ2lucyBvbiBwYXJhZ3JhcGhzXG4vL1xuLy8gU2ltaWxhcmx5LCB0aGUgdG9wIG1hcmdpbiBvbiBgPHA+YHMgZ2V0IHJlc2V0LiBIb3dldmVyLCB3ZSBhbHNvIHJlc2V0IHRoZVxuLy8gYm90dG9tIG1hcmdpbiB0byB1c2UgYHJlbWAgdW5pdHMgaW5zdGVhZCBvZiBgZW1gLlxucCB7XG4gIG1hcmdpbi10b3A6IDA7XG4gIG1hcmdpbi1ib3R0b206ICRwYXJhZ3JhcGgtbWFyZ2luLWJvdHRvbTtcbn1cblxuLy8gQWJicmV2aWF0aW9uc1xuLy9cbi8vIDEuIER1cGxpY2F0ZSBiZWhhdmlvciB0byB0aGUgZGF0YS0qIGF0dHJpYnV0ZSBmb3Igb3VyIHRvb2x0aXAgcGx1Z2luXG4vLyAyLiBBZGQgdGhlIGNvcnJlY3QgdGV4dCBkZWNvcmF0aW9uIGluIENocm9tZSwgRWRnZSwgSUUsIE9wZXJhLCBhbmQgU2FmYXJpLlxuLy8gMy4gQWRkIGV4cGxpY2l0IGN1cnNvciB0byBpbmRpY2F0ZSBjaGFuZ2VkIGJlaGF2aW9yLlxuLy8gNC4gUmVtb3ZlIHRoZSBib3R0b20gYm9yZGVyIGluIEZpcmVmb3ggMzktLlxuLy8gNS4gUHJldmVudCB0aGUgdGV4dC1kZWNvcmF0aW9uIHRvIGJlIHNraXBwZWQuXG5cbmFiYnJbdGl0bGVdLFxuYWJicltkYXRhLW9yaWdpbmFsLXRpdGxlXSB7IC8vIDFcbiAgdGV4dC1kZWNvcmF0aW9uOiB1bmRlcmxpbmU7IC8vIDJcbiAgdGV4dC1kZWNvcmF0aW9uOiB1bmRlcmxpbmUgZG90dGVkOyAvLyAyXG4gIGN1cnNvcjogaGVscDsgLy8gM1xuICBib3JkZXItYm90dG9tOiAwOyAvLyA0XG4gIHRleHQtZGVjb3JhdGlvbi1za2lwLWluazogbm9uZTsgLy8gNVxufVxuXG5hZGRyZXNzIHtcbiAgbWFyZ2luLWJvdHRvbTogMXJlbTtcbiAgZm9udC1zdHlsZTogbm9ybWFsO1xuICBsaW5lLWhlaWdodDogaW5oZXJpdDtcbn1cblxub2wsXG51bCxcbmRsIHtcbiAgbWFyZ2luLXRvcDogMDtcbiAgbWFyZ2luLWJvdHRvbTogMXJlbTtcbn1cblxub2wgb2wsXG51bCB1bCxcbm9sIHVsLFxudWwgb2wge1xuICBtYXJnaW4tYm90dG9tOiAwO1xufVxuXG5kdCB7XG4gIGZvbnQtd2VpZ2h0OiAkZHQtZm9udC13ZWlnaHQ7XG59XG5cbmRkIHtcbiAgbWFyZ2luLWJvdHRvbTogLjVyZW07XG4gIG1hcmdpbi1sZWZ0OiAwOyAvLyBVbmRvIGJyb3dzZXIgZGVmYXVsdFxufVxuXG5ibG9ja3F1b3RlIHtcbiAgbWFyZ2luOiAwIDAgMXJlbTtcbn1cblxuYixcbnN0cm9uZyB7XG4gIGZvbnQtd2VpZ2h0OiAkZm9udC13ZWlnaHQtYm9sZGVyOyAvLyBBZGQgdGhlIGNvcnJlY3QgZm9udCB3ZWlnaHQgaW4gQ2hyb21lLCBFZGdlLCBhbmQgU2FmYXJpXG59XG5cbnNtYWxsIHtcbiAgQGluY2x1ZGUgZm9udC1zaXplKDgwJSk7IC8vIEFkZCB0aGUgY29ycmVjdCBmb250IHNpemUgaW4gYWxsIGJyb3dzZXJzXG59XG5cbi8vXG4vLyBQcmV2ZW50IGBzdWJgIGFuZCBgc3VwYCBlbGVtZW50cyBmcm9tIGFmZmVjdGluZyB0aGUgbGluZSBoZWlnaHQgaW5cbi8vIGFsbCBicm93c2Vycy5cbi8vXG5cbnN1YixcbnN1cCB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgQGluY2x1ZGUgZm9udC1zaXplKDc1JSk7XG4gIGxpbmUtaGVpZ2h0OiAwO1xuICB2ZXJ0aWNhbC1hbGlnbjogYmFzZWxpbmU7XG59XG5cbnN1YiB7IGJvdHRvbTogLS4yNWVtOyB9XG5zdXAgeyB0b3A6IC0uNWVtOyB9XG5cblxuLy9cbi8vIExpbmtzXG4vL1xuXG5hIHtcbiAgY29sb3I6ICRsaW5rLWNvbG9yO1xuICB0ZXh0LWRlY29yYXRpb246ICRsaW5rLWRlY29yYXRpb247XG4gIGJhY2tncm91bmQtY29sb3I6IHRyYW5zcGFyZW50OyAvLyBSZW1vdmUgdGhlIGdyYXkgYmFja2dyb3VuZCBvbiBhY3RpdmUgbGlua3MgaW4gSUUgMTAuXG5cbiAgQGluY2x1ZGUgaG92ZXIoKSB7XG4gICAgY29sb3I6ICRsaW5rLWhvdmVyLWNvbG9yO1xuICAgIHRleHQtZGVjb3JhdGlvbjogJGxpbmstaG92ZXItZGVjb3JhdGlvbjtcbiAgfVxufVxuXG4vLyBBbmQgdW5kbyB0aGVzZSBzdHlsZXMgZm9yIHBsYWNlaG9sZGVyIGxpbmtzL25hbWVkIGFuY2hvcnMgKHdpdGhvdXQgaHJlZikuXG4vLyBJdCB3b3VsZCBiZSBtb3JlIHN0cmFpZ2h0Zm9yd2FyZCB0byBqdXN0IHVzZSBhW2hyZWZdIGluIHByZXZpb3VzIGJsb2NrLCBidXQgdGhhdFxuLy8gY2F1c2VzIHNwZWNpZmljaXR5IGlzc3VlcyBpbiBtYW55IG90aGVyIHN0eWxlcyB0aGF0IGFyZSB0b28gY29tcGxleCB0byBmaXguXG4vLyBTZWUgaHR0cHM6Ly9naXRodWIuY29tL3R3YnMvYm9vdHN0cmFwL2lzc3Vlcy8xOTQwMlxuXG5hOm5vdChbaHJlZl0pIHtcbiAgY29sb3I6IGluaGVyaXQ7XG4gIHRleHQtZGVjb3JhdGlvbjogbm9uZTtcblxuICBAaW5jbHVkZSBob3ZlcigpIHtcbiAgICBjb2xvcjogaW5oZXJpdDtcbiAgICB0ZXh0LWRlY29yYXRpb246IG5vbmU7XG4gIH1cbn1cblxuXG4vL1xuLy8gQ29kZVxuLy9cblxucHJlLFxuY29kZSxcbmtiZCxcbnNhbXAge1xuICBmb250LWZhbWlseTogJGZvbnQtZmFtaWx5LW1vbm9zcGFjZTtcbiAgQGluY2x1ZGUgZm9udC1zaXplKDFlbSk7IC8vIENvcnJlY3QgdGhlIG9kZCBgZW1gIGZvbnQgc2l6aW5nIGluIGFsbCBicm93c2Vycy5cbn1cblxucHJlIHtcbiAgLy8gUmVtb3ZlIGJyb3dzZXIgZGVmYXVsdCB0b3AgbWFyZ2luXG4gIG1hcmdpbi10b3A6IDA7XG4gIC8vIFJlc2V0IGJyb3dzZXIgZGVmYXVsdCBvZiBgMWVtYCB0byB1c2UgYHJlbWBzXG4gIG1hcmdpbi1ib3R0b206IDFyZW07XG4gIC8vIERvbid0IGFsbG93IGNvbnRlbnQgdG8gYnJlYWsgb3V0c2lkZVxuICBvdmVyZmxvdzogYXV0bztcbiAgLy8gRGlzYWJsZSBhdXRvLWhpZGluZyBzY3JvbGxiYXIgaW4gSUUgJiBsZWdhY3kgRWRnZSB0byBhdm9pZCBvdmVybGFwLFxuICAvLyBtYWtpbmcgaXQgaW1wb3NzaWJsZSB0byBpbnRlcmFjdCB3aXRoIHRoZSBjb250ZW50XG4gIC1tcy1vdmVyZmxvdy1zdHlsZTogc2Nyb2xsYmFyO1xufVxuXG5cbi8vXG4vLyBGaWd1cmVzXG4vL1xuXG5maWd1cmUge1xuICAvLyBBcHBseSBhIGNvbnNpc3RlbnQgbWFyZ2luIHN0cmF0ZWd5IChtYXRjaGVzIG91ciB0eXBlIHN0eWxlcykuXG4gIG1hcmdpbjogMCAwIDFyZW07XG59XG5cblxuLy9cbi8vIEltYWdlcyBhbmQgY29udGVudFxuLy9cblxuaW1nIHtcbiAgdmVydGljYWwtYWxpZ246IG1pZGRsZTtcbiAgYm9yZGVyLXN0eWxlOiBub25lOyAvLyBSZW1vdmUgdGhlIGJvcmRlciBvbiBpbWFnZXMgaW5zaWRlIGxpbmtzIGluIElFIDEwLS5cbn1cblxuc3ZnIHtcbiAgLy8gV29ya2Fyb3VuZCBmb3IgdGhlIFNWRyBvdmVyZmxvdyBidWcgaW4gSUUxMC8xMSBpcyBzdGlsbCByZXF1aXJlZC5cbiAgLy8gU2VlIGh0dHBzOi8vZ2l0aHViLmNvbS90d2JzL2Jvb3RzdHJhcC9pc3N1ZXMvMjY4NzhcbiAgb3ZlcmZsb3c6IGhpZGRlbjtcbiAgdmVydGljYWwtYWxpZ246IG1pZGRsZTtcbn1cblxuXG4vL1xuLy8gVGFibGVzXG4vL1xuXG50YWJsZSB7XG4gIGJvcmRlci1jb2xsYXBzZTogY29sbGFwc2U7IC8vIFByZXZlbnQgZG91YmxlIGJvcmRlcnNcbn1cblxuY2FwdGlvbiB7XG4gIHBhZGRpbmctdG9wOiAkdGFibGUtY2VsbC1wYWRkaW5nO1xuICBwYWRkaW5nLWJvdHRvbTogJHRhYmxlLWNlbGwtcGFkZGluZztcbiAgY29sb3I6ICR0YWJsZS1jYXB0aW9uLWNvbG9yO1xuICB0ZXh0LWFsaWduOiBsZWZ0O1xuICBjYXB0aW9uLXNpZGU6IGJvdHRvbTtcbn1cblxudGgge1xuICAvLyBNYXRjaGVzIGRlZmF1bHQgYDx0ZD5gIGFsaWdubWVudCBieSBpbmhlcml0aW5nIGZyb20gdGhlIGA8Ym9keT5gLCBvciB0aGVcbiAgLy8gY2xvc2VzdCBwYXJlbnQgd2l0aCBhIHNldCBgdGV4dC1hbGlnbmAuXG4gIHRleHQtYWxpZ246IGluaGVyaXQ7XG59XG5cblxuLy9cbi8vIEZvcm1zXG4vL1xuXG5sYWJlbCB7XG4gIC8vIEFsbG93IGxhYmVscyB0byB1c2UgYG1hcmdpbmAgZm9yIHNwYWNpbmcuXG4gIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgbWFyZ2luLWJvdHRvbTogJGxhYmVsLW1hcmdpbi1ib3R0b207XG59XG5cbi8vIFJlbW92ZSB0aGUgZGVmYXVsdCBgYm9yZGVyLXJhZGl1c2AgdGhhdCBtYWNPUyBDaHJvbWUgYWRkcy5cbi8vXG4vLyBEZXRhaWxzIGF0IGh0dHBzOi8vZ2l0aHViLmNvbS90d2JzL2Jvb3RzdHJhcC9pc3N1ZXMvMjQwOTNcbmJ1dHRvbiB7XG4gIC8vIHN0eWxlbGludC1kaXNhYmxlLW5leHQtbGluZSBwcm9wZXJ0eS1ibGFja2xpc3RcbiAgYm9yZGVyLXJhZGl1czogMDtcbn1cblxuLy8gV29yayBhcm91bmQgYSBGaXJlZm94L0lFIGJ1ZyB3aGVyZSB0aGUgdHJhbnNwYXJlbnQgYGJ1dHRvbmAgYmFja2dyb3VuZFxuLy8gcmVzdWx0cyBpbiBhIGxvc3Mgb2YgdGhlIGRlZmF1bHQgYGJ1dHRvbmAgZm9jdXMgc3R5bGVzLlxuLy9cbi8vIENyZWRpdDogaHR0cHM6Ly9naXRodWIuY29tL3N1aXRjc3MvYmFzZS9cbmJ1dHRvbjpmb2N1cyB7XG4gIG91dGxpbmU6IDFweCBkb3R0ZWQ7XG4gIG91dGxpbmU6IDVweCBhdXRvIC13ZWJraXQtZm9jdXMtcmluZy1jb2xvcjtcbn1cblxuaW5wdXQsXG5idXR0b24sXG5zZWxlY3QsXG5vcHRncm91cCxcbnRleHRhcmVhIHtcbiAgbWFyZ2luOiAwOyAvLyBSZW1vdmUgdGhlIG1hcmdpbiBpbiBGaXJlZm94IGFuZCBTYWZhcmlcbiAgZm9udC1mYW1pbHk6IGluaGVyaXQ7XG4gIEBpbmNsdWRlIGZvbnQtc2l6ZShpbmhlcml0KTtcbiAgbGluZS1oZWlnaHQ6IGluaGVyaXQ7XG59XG5cbmJ1dHRvbixcbmlucHV0IHtcbiAgb3ZlcmZsb3c6IHZpc2libGU7IC8vIFNob3cgdGhlIG92ZXJmbG93IGluIEVkZ2Vcbn1cblxuYnV0dG9uLFxuc2VsZWN0IHtcbiAgdGV4dC10cmFuc2Zvcm06IG5vbmU7IC8vIFJlbW92ZSB0aGUgaW5oZXJpdGFuY2Ugb2YgdGV4dCB0cmFuc2Zvcm0gaW4gRmlyZWZveFxufVxuXG4vLyBTZXQgdGhlIGN1cnNvciBmb3Igbm9uLWA8YnV0dG9uPmAgYnV0dG9uc1xuLy9cbi8vIERldGFpbHMgYXQgaHR0cHM6Ly9naXRodWIuY29tL3R3YnMvYm9vdHN0cmFwL3B1bGwvMzA1NjJcbltyb2xlPVwiYnV0dG9uXCJdIHtcbiAgY3Vyc29yOiBwb2ludGVyO1xufVxuXG4vLyBSZW1vdmUgdGhlIGluaGVyaXRhbmNlIG9mIHdvcmQtd3JhcCBpbiBTYWZhcmkuXG4vL1xuLy8gRGV0YWlscyBhdCBodHRwczovL2dpdGh1Yi5jb20vdHdicy9ib290c3RyYXAvaXNzdWVzLzI0OTkwXG5zZWxlY3Qge1xuICB3b3JkLXdyYXA6IG5vcm1hbDtcbn1cblxuXG4vLyAxLiBQcmV2ZW50IGEgV2ViS2l0IGJ1ZyB3aGVyZSAoMikgZGVzdHJveXMgbmF0aXZlIGBhdWRpb2AgYW5kIGB2aWRlb2Bcbi8vICAgIGNvbnRyb2xzIGluIEFuZHJvaWQgNC5cbi8vIDIuIENvcnJlY3QgdGhlIGluYWJpbGl0eSB0byBzdHlsZSBjbGlja2FibGUgdHlwZXMgaW4gaU9TIGFuZCBTYWZhcmkuXG5idXR0b24sXG5bdHlwZT1cImJ1dHRvblwiXSwgLy8gMVxuW3R5cGU9XCJyZXNldFwiXSxcblt0eXBlPVwic3VibWl0XCJdIHtcbiAgLXdlYmtpdC1hcHBlYXJhbmNlOiBidXR0b247IC8vIDJcbn1cblxuLy8gT3BpbmlvbmF0ZWQ6IGFkZCBcImhhbmRcIiBjdXJzb3IgdG8gbm9uLWRpc2FibGVkIGJ1dHRvbiBlbGVtZW50cy5cbkBpZiAkZW5hYmxlLXBvaW50ZXItY3Vyc29yLWZvci1idXR0b25zIHtcbiAgYnV0dG9uLFxuICBbdHlwZT1cImJ1dHRvblwiXSxcbiAgW3R5cGU9XCJyZXNldFwiXSxcbiAgW3R5cGU9XCJzdWJtaXRcIl0ge1xuICAgICY6bm90KDpkaXNhYmxlZCkge1xuICAgICAgY3Vyc29yOiBwb2ludGVyO1xuICAgIH1cbiAgfVxufVxuXG4vLyBSZW1vdmUgaW5uZXIgYm9yZGVyIGFuZCBwYWRkaW5nIGZyb20gRmlyZWZveCwgYnV0IGRvbid0IHJlc3RvcmUgdGhlIG91dGxpbmUgbGlrZSBOb3JtYWxpemUuXG5idXR0b246Oi1tb3otZm9jdXMtaW5uZXIsXG5bdHlwZT1cImJ1dHRvblwiXTo6LW1vei1mb2N1cy1pbm5lcixcblt0eXBlPVwicmVzZXRcIl06Oi1tb3otZm9jdXMtaW5uZXIsXG5bdHlwZT1cInN1Ym1pdFwiXTo6LW1vei1mb2N1cy1pbm5lciB7XG4gIHBhZGRpbmc6IDA7XG4gIGJvcmRlci1zdHlsZTogbm9uZTtcbn1cblxuaW5wdXRbdHlwZT1cInJhZGlvXCJdLFxuaW5wdXRbdHlwZT1cImNoZWNrYm94XCJdIHtcbiAgYm94LXNpemluZzogYm9yZGVyLWJveDsgLy8gMS4gQWRkIHRoZSBjb3JyZWN0IGJveCBzaXppbmcgaW4gSUUgMTAtXG4gIHBhZGRpbmc6IDA7IC8vIDIuIFJlbW92ZSB0aGUgcGFkZGluZyBpbiBJRSAxMC1cbn1cblxuXG50ZXh0YXJlYSB7XG4gIG92ZXJmbG93OiBhdXRvOyAvLyBSZW1vdmUgdGhlIGRlZmF1bHQgdmVydGljYWwgc2Nyb2xsYmFyIGluIElFLlxuICAvLyBUZXh0YXJlYXMgc2hvdWxkIHJlYWxseSBvbmx5IHJlc2l6ZSB2ZXJ0aWNhbGx5IHNvIHRoZXkgZG9uJ3QgYnJlYWsgdGhlaXIgKGhvcml6b250YWwpIGNvbnRhaW5lcnMuXG4gIHJlc2l6ZTogdmVydGljYWw7XG59XG5cbmZpZWxkc2V0IHtcbiAgLy8gQnJvd3NlcnMgc2V0IGEgZGVmYXVsdCBgbWluLXdpZHRoOiBtaW4tY29udGVudDtgIG9uIGZpZWxkc2V0cyxcbiAgLy8gdW5saWtlIGUuZy4gYDxkaXY+YHMsIHdoaWNoIGhhdmUgYG1pbi13aWR0aDogMDtgIGJ5IGRlZmF1bHQuXG4gIC8vIFNvIHdlIHJlc2V0IHRoYXQgdG8gZW5zdXJlIGZpZWxkc2V0cyBiZWhhdmUgbW9yZSBsaWtlIGEgc3RhbmRhcmQgYmxvY2sgZWxlbWVudC5cbiAgLy8gU2VlIGh0dHBzOi8vZ2l0aHViLmNvbS90d2JzL2Jvb3RzdHJhcC9pc3N1ZXMvMTIzNTlcbiAgLy8gYW5kIGh0dHBzOi8vaHRtbC5zcGVjLndoYXR3Zy5vcmcvbXVsdGlwYWdlLyN0aGUtZmllbGRzZXQtYW5kLWxlZ2VuZC1lbGVtZW50c1xuICBtaW4td2lkdGg6IDA7XG4gIC8vIFJlc2V0IHRoZSBkZWZhdWx0IG91dGxpbmUgYmVoYXZpb3Igb2YgZmllbGRzZXRzIHNvIHRoZXkgZG9uJ3QgYWZmZWN0IHBhZ2UgbGF5b3V0LlxuICBwYWRkaW5nOiAwO1xuICBtYXJnaW46IDA7XG4gIGJvcmRlcjogMDtcbn1cblxuLy8gMS4gQ29ycmVjdCB0aGUgdGV4dCB3cmFwcGluZyBpbiBFZGdlIGFuZCBJRS5cbi8vIDIuIENvcnJlY3QgdGhlIGNvbG9yIGluaGVyaXRhbmNlIGZyb20gYGZpZWxkc2V0YCBlbGVtZW50cyBpbiBJRS5cbmxlZ2VuZCB7XG4gIGRpc3BsYXk6IGJsb2NrO1xuICB3aWR0aDogMTAwJTtcbiAgbWF4LXdpZHRoOiAxMDAlOyAvLyAxXG4gIHBhZGRpbmc6IDA7XG4gIG1hcmdpbi1ib3R0b206IC41cmVtO1xuICBAaW5jbHVkZSBmb250LXNpemUoMS41cmVtKTtcbiAgbGluZS1oZWlnaHQ6IGluaGVyaXQ7XG4gIGNvbG9yOiBpbmhlcml0OyAvLyAyXG4gIHdoaXRlLXNwYWNlOiBub3JtYWw7IC8vIDFcbn1cblxucHJvZ3Jlc3Mge1xuICB2ZXJ0aWNhbC1hbGlnbjogYmFzZWxpbmU7IC8vIEFkZCB0aGUgY29ycmVjdCB2ZXJ0aWNhbCBhbGlnbm1lbnQgaW4gQ2hyb21lLCBGaXJlZm94LCBhbmQgT3BlcmEuXG59XG5cbi8vIENvcnJlY3QgdGhlIGN1cnNvciBzdHlsZSBvZiBpbmNyZW1lbnQgYW5kIGRlY3JlbWVudCBidXR0b25zIGluIENocm9tZS5cblt0eXBlPVwibnVtYmVyXCJdOjotd2Via2l0LWlubmVyLXNwaW4tYnV0dG9uLFxuW3R5cGU9XCJudW1iZXJcIl06Oi13ZWJraXQtb3V0ZXItc3Bpbi1idXR0b24ge1xuICBoZWlnaHQ6IGF1dG87XG59XG5cblt0eXBlPVwic2VhcmNoXCJdIHtcbiAgLy8gVGhpcyBvdmVycmlkZXMgdGhlIGV4dHJhIHJvdW5kZWQgY29ybmVycyBvbiBzZWFyY2ggaW5wdXRzIGluIGlPUyBzbyB0aGF0IG91clxuICAvLyBgLmZvcm0tY29udHJvbGAgY2xhc3MgY2FuIHByb3Blcmx5IHN0eWxlIHRoZW0uIE5vdGUgdGhhdCB0aGlzIGNhbm5vdCBzaW1wbHlcbiAgLy8gYmUgYWRkZWQgdG8gYC5mb3JtLWNvbnRyb2xgIGFzIGl0J3Mgbm90IHNwZWNpZmljIGVub3VnaC4gRm9yIGRldGFpbHMsIHNlZVxuICAvLyBodHRwczovL2dpdGh1Yi5jb20vdHdicy9ib290c3RyYXAvaXNzdWVzLzExNTg2LlxuICBvdXRsaW5lLW9mZnNldDogLTJweDsgLy8gMi4gQ29ycmVjdCB0aGUgb3V0bGluZSBzdHlsZSBpbiBTYWZhcmkuXG4gIC13ZWJraXQtYXBwZWFyYW5jZTogbm9uZTtcbn1cblxuLy9cbi8vIFJlbW92ZSB0aGUgaW5uZXIgcGFkZGluZyBpbiBDaHJvbWUgYW5kIFNhZmFyaSBvbiBtYWNPUy5cbi8vXG5cblt0eXBlPVwic2VhcmNoXCJdOjotd2Via2l0LXNlYXJjaC1kZWNvcmF0aW9uIHtcbiAgLXdlYmtpdC1hcHBlYXJhbmNlOiBub25lO1xufVxuXG4vL1xuLy8gMS4gQ29ycmVjdCB0aGUgaW5hYmlsaXR5IHRvIHN0eWxlIGNsaWNrYWJsZSB0eXBlcyBpbiBpT1MgYW5kIFNhZmFyaS5cbi8vIDIuIENoYW5nZSBmb250IHByb3BlcnRpZXMgdG8gYGluaGVyaXRgIGluIFNhZmFyaS5cbi8vXG5cbjo6LXdlYmtpdC1maWxlLXVwbG9hZC1idXR0b24ge1xuICBmb250OiBpbmhlcml0OyAvLyAyXG4gIC13ZWJraXQtYXBwZWFyYW5jZTogYnV0dG9uOyAvLyAxXG59XG5cbi8vXG4vLyBDb3JyZWN0IGVsZW1lbnQgZGlzcGxheXNcbi8vXG5cbm91dHB1dCB7XG4gIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbn1cblxuc3VtbWFyeSB7XG4gIGRpc3BsYXk6IGxpc3QtaXRlbTsgLy8gQWRkIHRoZSBjb3JyZWN0IGRpc3BsYXkgaW4gYWxsIGJyb3dzZXJzXG4gIGN1cnNvcjogcG9pbnRlcjtcbn1cblxudGVtcGxhdGUge1xuICBkaXNwbGF5OiBub25lOyAvLyBBZGQgdGhlIGNvcnJlY3QgZGlzcGxheSBpbiBJRVxufVxuXG4vLyBBbHdheXMgaGlkZSBhbiBlbGVtZW50IHdpdGggdGhlIGBoaWRkZW5gIEhUTUwgYXR0cmlidXRlIChmcm9tIFB1cmVDU1MpLlxuLy8gTmVlZGVkIGZvciBwcm9wZXIgZGlzcGxheSBpbiBJRSAxMC0uXG5baGlkZGVuXSB7XG4gIGRpc3BsYXk6IG5vbmUgIWltcG9ydGFudDtcbn1cbiIsIi8vIFZhcmlhYmxlc1xuLy9cbi8vIFZhcmlhYmxlcyBzaG91bGQgZm9sbG93IHRoZSBgJGNvbXBvbmVudC1zdGF0ZS1wcm9wZXJ0eS1zaXplYCBmb3JtdWxhIGZvclxuLy8gY29uc2lzdGVudCBuYW1pbmcuIEV4OiAkbmF2LWxpbmstZGlzYWJsZWQtY29sb3IgYW5kICRtb2RhbC1jb250ZW50LWJveC1zaGFkb3cteHMuXG5cbi8vIENvbG9yIHN5c3RlbVxuXG4kd2hpdGU6ICAgICNmZmYgIWRlZmF1bHQ7XG4kZ3JheS0xMDA6ICNmOGY5ZmEgIWRlZmF1bHQ7XG4kZ3JheS0yMDA6ICNlOWVjZWYgIWRlZmF1bHQ7XG4kZ3JheS0zMDA6ICNkZWUyZTYgIWRlZmF1bHQ7XG4kZ3JheS00MDA6ICNjZWQ0ZGEgIWRlZmF1bHQ7XG4kZ3JheS01MDA6ICNhZGI1YmQgIWRlZmF1bHQ7XG4kZ3JheS02MDA6ICM2Yzc1N2QgIWRlZmF1bHQ7XG4kZ3JheS03MDA6ICM0OTUwNTcgIWRlZmF1bHQ7XG4kZ3JheS04MDA6ICMzNDNhNDAgIWRlZmF1bHQ7XG4kZ3JheS05MDA6ICMyMTI1MjkgIWRlZmF1bHQ7XG4kYmxhY2s6ICAgICMwMDAgIWRlZmF1bHQ7XG5cbiRncmF5czogKCkgIWRlZmF1bHQ7XG4vLyBzdHlsZWxpbnQtZGlzYWJsZS1uZXh0LWxpbmUgc2Nzcy9kb2xsYXItdmFyaWFibGUtZGVmYXVsdFxuJGdyYXlzOiBtYXAtbWVyZ2UoXG4gIChcbiAgICBcIjEwMFwiOiAkZ3JheS0xMDAsXG4gICAgXCIyMDBcIjogJGdyYXktMjAwLFxuICAgIFwiMzAwXCI6ICRncmF5LTMwMCxcbiAgICBcIjQwMFwiOiAkZ3JheS00MDAsXG4gICAgXCI1MDBcIjogJGdyYXktNTAwLFxuICAgIFwiNjAwXCI6ICRncmF5LTYwMCxcbiAgICBcIjcwMFwiOiAkZ3JheS03MDAsXG4gICAgXCI4MDBcIjogJGdyYXktODAwLFxuICAgIFwiOTAwXCI6ICRncmF5LTkwMFxuICApLFxuICAkZ3JheXNcbik7XG5cbiRibHVlOiAgICAjMDA3YmZmICFkZWZhdWx0O1xuJGluZGlnbzogICM2NjEwZjIgIWRlZmF1bHQ7XG4kcHVycGxlOiAgIzZmNDJjMSAhZGVmYXVsdDtcbiRwaW5rOiAgICAjZTgzZThjICFkZWZhdWx0O1xuJHJlZDogICAgICNkYzM1NDUgIWRlZmF1bHQ7XG4kb3JhbmdlOiAgI2ZkN2UxNCAhZGVmYXVsdDtcbiR5ZWxsb3c6ICAjZmZjMTA3ICFkZWZhdWx0O1xuJGdyZWVuOiAgICMyOGE3NDUgIWRlZmF1bHQ7XG4kdGVhbDogICAgIzIwYzk5NyAhZGVmYXVsdDtcbiRjeWFuOiAgICAjMTdhMmI4ICFkZWZhdWx0O1xuXG4kY29sb3JzOiAoKSAhZGVmYXVsdDtcbi8vIHN0eWxlbGludC1kaXNhYmxlLW5leHQtbGluZSBzY3NzL2RvbGxhci12YXJpYWJsZS1kZWZhdWx0XG4kY29sb3JzOiBtYXAtbWVyZ2UoXG4gIChcbiAgICBcImJsdWVcIjogICAgICAgJGJsdWUsXG4gICAgXCJpbmRpZ29cIjogICAgICRpbmRpZ28sXG4gICAgXCJwdXJwbGVcIjogICAgICRwdXJwbGUsXG4gICAgXCJwaW5rXCI6ICAgICAgICRwaW5rLFxuICAgIFwicmVkXCI6ICAgICAgICAkcmVkLFxuICAgIFwib3JhbmdlXCI6ICAgICAkb3JhbmdlLFxuICAgIFwieWVsbG93XCI6ICAgICAkeWVsbG93LFxuICAgIFwiZ3JlZW5cIjogICAgICAkZ3JlZW4sXG4gICAgXCJ0ZWFsXCI6ICAgICAgICR0ZWFsLFxuICAgIFwiY3lhblwiOiAgICAgICAkY3lhbixcbiAgICBcIndoaXRlXCI6ICAgICAgJHdoaXRlLFxuICAgIFwiZ3JheVwiOiAgICAgICAkZ3JheS02MDAsXG4gICAgXCJncmF5LWRhcmtcIjogICRncmF5LTgwMFxuICApLFxuICAkY29sb3JzXG4pO1xuXG4kcHJpbWFyeTogICAgICAgJGJsdWUgIWRlZmF1bHQ7XG4kc2Vjb25kYXJ5OiAgICAgJGdyYXktNjAwICFkZWZhdWx0O1xuJHN1Y2Nlc3M6ICAgICAgICRncmVlbiAhZGVmYXVsdDtcbiRpbmZvOiAgICAgICAgICAkY3lhbiAhZGVmYXVsdDtcbiR3YXJuaW5nOiAgICAgICAkeWVsbG93ICFkZWZhdWx0O1xuJGRhbmdlcjogICAgICAgICRyZWQgIWRlZmF1bHQ7XG4kbGlnaHQ6ICAgICAgICAgJGdyYXktMTAwICFkZWZhdWx0O1xuJGRhcms6ICAgICAgICAgICRncmF5LTgwMCAhZGVmYXVsdDtcblxuJHRoZW1lLWNvbG9yczogKCkgIWRlZmF1bHQ7XG4vLyBzdHlsZWxpbnQtZGlzYWJsZS1uZXh0LWxpbmUgc2Nzcy9kb2xsYXItdmFyaWFibGUtZGVmYXVsdFxuJHRoZW1lLWNvbG9yczogbWFwLW1lcmdlKFxuICAoXG4gICAgXCJwcmltYXJ5XCI6ICAgICRwcmltYXJ5LFxuICAgIFwic2Vjb25kYXJ5XCI6ICAkc2Vjb25kYXJ5LFxuICAgIFwic3VjY2Vzc1wiOiAgICAkc3VjY2VzcyxcbiAgICBcImluZm9cIjogICAgICAgJGluZm8sXG4gICAgXCJ3YXJuaW5nXCI6ICAgICR3YXJuaW5nLFxuICAgIFwiZGFuZ2VyXCI6ICAgICAkZGFuZ2VyLFxuICAgIFwibGlnaHRcIjogICAgICAkbGlnaHQsXG4gICAgXCJkYXJrXCI6ICAgICAgICRkYXJrXG4gICksXG4gICR0aGVtZS1jb2xvcnNcbik7XG5cbi8vIFNldCBhIHNwZWNpZmljIGp1bXAgcG9pbnQgZm9yIHJlcXVlc3RpbmcgY29sb3IganVtcHNcbiR0aGVtZS1jb2xvci1pbnRlcnZhbDogICAgICA4JSAhZGVmYXVsdDtcblxuLy8gVGhlIHlpcSBsaWdodG5lc3MgdmFsdWUgdGhhdCBkZXRlcm1pbmVzIHdoZW4gdGhlIGxpZ2h0bmVzcyBvZiBjb2xvciBjaGFuZ2VzIGZyb20gXCJkYXJrXCIgdG8gXCJsaWdodFwiLiBBY2NlcHRhYmxlIHZhbHVlcyBhcmUgYmV0d2VlbiAwIGFuZCAyNTUuXG4keWlxLWNvbnRyYXN0ZWQtdGhyZXNob2xkOiAgMTUwICFkZWZhdWx0O1xuXG4vLyBDdXN0b21pemUgdGhlIGxpZ2h0IGFuZCBkYXJrIHRleHQgY29sb3JzIGZvciB1c2UgaW4gb3VyIFlJUSBjb2xvciBjb250cmFzdCBmdW5jdGlvbi5cbiR5aXEtdGV4dC1kYXJrOiAgICAgICAgICAgICAkZ3JheS05MDAgIWRlZmF1bHQ7XG4keWlxLXRleHQtbGlnaHQ6ICAgICAgICAgICAgJHdoaXRlICFkZWZhdWx0O1xuXG4vLyBDaGFyYWN0ZXJzIHdoaWNoIGFyZSBlc2NhcGVkIGJ5IHRoZSBlc2NhcGUtc3ZnIGZ1bmN0aW9uXG4kZXNjYXBlZC1jaGFyYWN0ZXJzOiAoXG4gIChcIjxcIixcIiUzY1wiKSxcbiAgKFwiPlwiLFwiJTNlXCIpLFxuICAoXCIjXCIsXCIlMjNcIiksXG4gIChcIihcIixcIiUyOFwiKSxcbiAgKFwiKVwiLFwiJTI5XCIpLFxuKSAhZGVmYXVsdDtcblxuXG4vLyBPcHRpb25zXG4vL1xuLy8gUXVpY2tseSBtb2RpZnkgZ2xvYmFsIHN0eWxpbmcgYnkgZW5hYmxpbmcgb3IgZGlzYWJsaW5nIG9wdGlvbmFsIGZlYXR1cmVzLlxuXG4kZW5hYmxlLWNhcmV0OiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdHJ1ZSAhZGVmYXVsdDtcbiRlbmFibGUtcm91bmRlZDogICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0cnVlICFkZWZhdWx0O1xuJGVuYWJsZS1zaGFkb3dzOiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZhbHNlICFkZWZhdWx0O1xuJGVuYWJsZS1ncmFkaWVudHM6ICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZhbHNlICFkZWZhdWx0O1xuJGVuYWJsZS10cmFuc2l0aW9uczogICAgICAgICAgICAgICAgICAgICAgICAgIHRydWUgIWRlZmF1bHQ7XG4kZW5hYmxlLXByZWZlcnMtcmVkdWNlZC1tb3Rpb24tbWVkaWEtcXVlcnk6ICAgdHJ1ZSAhZGVmYXVsdDtcbiRlbmFibGUtaG92ZXItbWVkaWEtcXVlcnk6ICAgICAgICAgICAgICAgICAgICBmYWxzZSAhZGVmYXVsdDsgLy8gRGVwcmVjYXRlZCwgbm8gbG9uZ2VyIGFmZmVjdHMgYW55IGNvbXBpbGVkIENTU1xuJGVuYWJsZS1ncmlkLWNsYXNzZXM6ICAgICAgICAgICAgICAgICAgICAgICAgIHRydWUgIWRlZmF1bHQ7XG4kZW5hYmxlLXBvaW50ZXItY3Vyc29yLWZvci1idXR0b25zOiAgICAgICAgICAgdHJ1ZSAhZGVmYXVsdDtcbiRlbmFibGUtcHJpbnQtc3R5bGVzOiAgICAgICAgICAgICAgICAgICAgICAgICB0cnVlICFkZWZhdWx0O1xuJGVuYWJsZS1yZXNwb25zaXZlLWZvbnQtc2l6ZXM6ICAgICAgICAgICAgICAgIGZhbHNlICFkZWZhdWx0O1xuJGVuYWJsZS12YWxpZGF0aW9uLWljb25zOiAgICAgICAgICAgICAgICAgICAgIHRydWUgIWRlZmF1bHQ7XG4kZW5hYmxlLWRlcHJlY2F0aW9uLW1lc3NhZ2VzOiAgICAgICAgICAgICAgICAgdHJ1ZSAhZGVmYXVsdDtcblxuXG4vLyBTcGFjaW5nXG4vL1xuLy8gQ29udHJvbCB0aGUgZGVmYXVsdCBzdHlsaW5nIG9mIG1vc3QgQm9vdHN0cmFwIGVsZW1lbnRzIGJ5IG1vZGlmeWluZyB0aGVzZVxuLy8gdmFyaWFibGVzLiBNb3N0bHkgZm9jdXNlZCBvbiBzcGFjaW5nLlxuLy8gWW91IGNhbiBhZGQgbW9yZSBlbnRyaWVzIHRvIHRoZSAkc3BhY2VycyBtYXAsIHNob3VsZCB5b3UgbmVlZCBtb3JlIHZhcmlhdGlvbi5cblxuJHNwYWNlcjogMXJlbSAhZGVmYXVsdDtcbiRzcGFjZXJzOiAoKSAhZGVmYXVsdDtcbi8vIHN0eWxlbGludC1kaXNhYmxlLW5leHQtbGluZSBzY3NzL2RvbGxhci12YXJpYWJsZS1kZWZhdWx0XG4kc3BhY2VyczogbWFwLW1lcmdlKFxuICAoXG4gICAgMDogMCxcbiAgICAxOiAoJHNwYWNlciAqIC4yNSksXG4gICAgMjogKCRzcGFjZXIgKiAuNSksXG4gICAgMzogJHNwYWNlcixcbiAgICA0OiAoJHNwYWNlciAqIDEuNSksXG4gICAgNTogKCRzcGFjZXIgKiAzKVxuICApLFxuICAkc3BhY2Vyc1xuKTtcblxuLy8gVGhpcyB2YXJpYWJsZSBhZmZlY3RzIHRoZSBgLmgtKmAgYW5kIGAudy0qYCBjbGFzc2VzLlxuJHNpemVzOiAoKSAhZGVmYXVsdDtcbi8vIHN0eWxlbGludC1kaXNhYmxlLW5leHQtbGluZSBzY3NzL2RvbGxhci12YXJpYWJsZS1kZWZhdWx0XG4kc2l6ZXM6IG1hcC1tZXJnZShcbiAgKFxuICAgIDI1OiAyNSUsXG4gICAgNTA6IDUwJSxcbiAgICA3NTogNzUlLFxuICAgIDEwMDogMTAwJSxcbiAgICBhdXRvOiBhdXRvXG4gICksXG4gICRzaXplc1xuKTtcblxuXG4vLyBCb2R5XG4vL1xuLy8gU2V0dGluZ3MgZm9yIHRoZSBgPGJvZHk+YCBlbGVtZW50LlxuXG4kYm9keS1iZzogICAgICAgICAgICAgICAgICAgJHdoaXRlICFkZWZhdWx0O1xuJGJvZHktY29sb3I6ICAgICAgICAgICAgICAgICRncmF5LTkwMCAhZGVmYXVsdDtcblxuXG4vLyBMaW5rc1xuLy9cbi8vIFN0eWxlIGFuY2hvciBlbGVtZW50cy5cblxuJGxpbmstY29sb3I6ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGhlbWUtY29sb3IoXCJwcmltYXJ5XCIpICFkZWZhdWx0O1xuJGxpbmstZGVjb3JhdGlvbjogICAgICAgICAgICAgICAgICAgICAgICAgbm9uZSAhZGVmYXVsdDtcbiRsaW5rLWhvdmVyLWNvbG9yOiAgICAgICAgICAgICAgICAgICAgICAgIGRhcmtlbigkbGluay1jb2xvciwgMTUlKSAhZGVmYXVsdDtcbiRsaW5rLWhvdmVyLWRlY29yYXRpb246ICAgICAgICAgICAgICAgICAgIHVuZGVybGluZSAhZGVmYXVsdDtcbi8vIERhcmtlbiBwZXJjZW50YWdlIGZvciBsaW5rcyB3aXRoIGAudGV4dC0qYCBjbGFzcyAoZS5nLiBgLnRleHQtc3VjY2Vzc2ApXG4kZW1waGFzaXplZC1saW5rLWhvdmVyLWRhcmtlbi1wZXJjZW50YWdlOiAxNSUgIWRlZmF1bHQ7XG5cbi8vIFBhcmFncmFwaHNcbi8vXG4vLyBTdHlsZSBwIGVsZW1lbnQuXG5cbiRwYXJhZ3JhcGgtbWFyZ2luLWJvdHRvbTogICAxcmVtICFkZWZhdWx0O1xuXG5cbi8vIEdyaWQgYnJlYWtwb2ludHNcbi8vXG4vLyBEZWZpbmUgdGhlIG1pbmltdW0gZGltZW5zaW9ucyBhdCB3aGljaCB5b3VyIGxheW91dCB3aWxsIGNoYW5nZSxcbi8vIGFkYXB0aW5nIHRvIGRpZmZlcmVudCBzY3JlZW4gc2l6ZXMsIGZvciB1c2UgaW4gbWVkaWEgcXVlcmllcy5cblxuJGdyaWQtYnJlYWtwb2ludHM6IChcbiAgeHM6IDAsXG4gIHNtOiA1NzZweCxcbiAgbWQ6IDc2OHB4LFxuICBsZzogOTkycHgsXG4gIHhsOiAxMjAwcHhcbikgIWRlZmF1bHQ7XG5cbkBpbmNsdWRlIF9hc3NlcnQtYXNjZW5kaW5nKCRncmlkLWJyZWFrcG9pbnRzLCBcIiRncmlkLWJyZWFrcG9pbnRzXCIpO1xuQGluY2x1ZGUgX2Fzc2VydC1zdGFydHMtYXQtemVybygkZ3JpZC1icmVha3BvaW50cywgXCIkZ3JpZC1icmVha3BvaW50c1wiKTtcblxuXG4vLyBHcmlkIGNvbnRhaW5lcnNcbi8vXG4vLyBEZWZpbmUgdGhlIG1heGltdW0gd2lkdGggb2YgYC5jb250YWluZXJgIGZvciBkaWZmZXJlbnQgc2NyZWVuIHNpemVzLlxuXG4kY29udGFpbmVyLW1heC13aWR0aHM6IChcbiAgc206IDU0MHB4LFxuICBtZDogNzIwcHgsXG4gIGxnOiA5NjBweCxcbiAgeGw6IDExNDBweFxuKSAhZGVmYXVsdDtcblxuQGluY2x1ZGUgX2Fzc2VydC1hc2NlbmRpbmcoJGNvbnRhaW5lci1tYXgtd2lkdGhzLCBcIiRjb250YWluZXItbWF4LXdpZHRoc1wiKTtcblxuXG4vLyBHcmlkIGNvbHVtbnNcbi8vXG4vLyBTZXQgdGhlIG51bWJlciBvZiBjb2x1bW5zIGFuZCBzcGVjaWZ5IHRoZSB3aWR0aCBvZiB0aGUgZ3V0dGVycy5cblxuJGdyaWQtY29sdW1uczogICAgICAgICAgICAgICAgMTIgIWRlZmF1bHQ7XG4kZ3JpZC1ndXR0ZXItd2lkdGg6ICAgICAgICAgICAzMHB4ICFkZWZhdWx0O1xuJGdyaWQtcm93LWNvbHVtbnM6ICAgICAgICAgICAgNiAhZGVmYXVsdDtcblxuXG4vLyBDb21wb25lbnRzXG4vL1xuLy8gRGVmaW5lIGNvbW1vbiBwYWRkaW5nIGFuZCBib3JkZXIgcmFkaXVzIHNpemVzIGFuZCBtb3JlLlxuXG4kbGluZS1oZWlnaHQtbGc6ICAgICAgICAgICAgICAxLjUgIWRlZmF1bHQ7XG4kbGluZS1oZWlnaHQtc206ICAgICAgICAgICAgICAxLjUgIWRlZmF1bHQ7XG5cbiRib3JkZXItd2lkdGg6ICAgICAgICAgICAgICAgIDFweCAhZGVmYXVsdDtcbiRib3JkZXItY29sb3I6ICAgICAgICAgICAgICAgICRncmF5LTMwMCAhZGVmYXVsdDtcblxuJGJvcmRlci1yYWRpdXM6ICAgICAgICAgICAgICAgLjI1cmVtICFkZWZhdWx0O1xuJGJvcmRlci1yYWRpdXMtbGc6ICAgICAgICAgICAgLjNyZW0gIWRlZmF1bHQ7XG4kYm9yZGVyLXJhZGl1cy1zbTogICAgICAgICAgICAuMnJlbSAhZGVmYXVsdDtcblxuJHJvdW5kZWQtcGlsbDogICAgICAgICAgICAgICAgNTByZW0gIWRlZmF1bHQ7XG5cbiRib3gtc2hhZG93LXNtOiAgICAgICAgICAgICAgIDAgLjEyNXJlbSAuMjVyZW0gcmdiYSgkYmxhY2ssIC4wNzUpICFkZWZhdWx0O1xuJGJveC1zaGFkb3c6ICAgICAgICAgICAgICAgICAgMCAuNXJlbSAxcmVtIHJnYmEoJGJsYWNrLCAuMTUpICFkZWZhdWx0O1xuJGJveC1zaGFkb3ctbGc6ICAgICAgICAgICAgICAgMCAxcmVtIDNyZW0gcmdiYSgkYmxhY2ssIC4xNzUpICFkZWZhdWx0O1xuXG4kY29tcG9uZW50LWFjdGl2ZS1jb2xvcjogICAgICAkd2hpdGUgIWRlZmF1bHQ7XG4kY29tcG9uZW50LWFjdGl2ZS1iZzogICAgICAgICB0aGVtZS1jb2xvcihcInByaW1hcnlcIikgIWRlZmF1bHQ7XG5cbiRjYXJldC13aWR0aDogICAgICAgICAgICAgICAgIC4zZW0gIWRlZmF1bHQ7XG4kY2FyZXQtdmVydGljYWwtYWxpZ246ICAgICAgICAkY2FyZXQtd2lkdGggKiAuODUgIWRlZmF1bHQ7XG4kY2FyZXQtc3BhY2luZzogICAgICAgICAgICAgICAkY2FyZXQtd2lkdGggKiAuODUgIWRlZmF1bHQ7XG5cbiR0cmFuc2l0aW9uLWJhc2U6ICAgICAgICAgICAgIGFsbCAuMnMgZWFzZS1pbi1vdXQgIWRlZmF1bHQ7XG4kdHJhbnNpdGlvbi1mYWRlOiAgICAgICAgICAgICBvcGFjaXR5IC4xNXMgbGluZWFyICFkZWZhdWx0O1xuJHRyYW5zaXRpb24tY29sbGFwc2U6ICAgICAgICAgaGVpZ2h0IC4zNXMgZWFzZSAhZGVmYXVsdDtcblxuJGVtYmVkLXJlc3BvbnNpdmUtYXNwZWN0LXJhdGlvczogKCkgIWRlZmF1bHQ7XG4vLyBzdHlsZWxpbnQtZGlzYWJsZS1uZXh0LWxpbmUgc2Nzcy9kb2xsYXItdmFyaWFibGUtZGVmYXVsdFxuJGVtYmVkLXJlc3BvbnNpdmUtYXNwZWN0LXJhdGlvczogam9pbihcbiAgKFxuICAgICgyMSA5KSxcbiAgICAoMTYgOSksXG4gICAgKDQgMyksXG4gICAgKDEgMSksXG4gICksXG4gICRlbWJlZC1yZXNwb25zaXZlLWFzcGVjdC1yYXRpb3Ncbik7XG5cbi8vIFR5cG9ncmFwaHlcbi8vXG4vLyBGb250LCBsaW5lLWhlaWdodCwgYW5kIGNvbG9yIGZvciBib2R5IHRleHQsIGhlYWRpbmdzLCBhbmQgbW9yZS5cblxuLy8gc3R5bGVsaW50LWRpc2FibGUgdmFsdWUta2V5d29yZC1jYXNlXG4kZm9udC1mYW1pbHktc2Fucy1zZXJpZjogICAgICAtYXBwbGUtc3lzdGVtLCBCbGlua01hY1N5c3RlbUZvbnQsIFwiU2Vnb2UgVUlcIiwgUm9ib3RvLCBcIkhlbHZldGljYSBOZXVlXCIsIEFyaWFsLCBcIk5vdG8gU2Fuc1wiLCBzYW5zLXNlcmlmLCBcIkFwcGxlIENvbG9yIEVtb2ppXCIsIFwiU2Vnb2UgVUkgRW1vamlcIiwgXCJTZWdvZSBVSSBTeW1ib2xcIiwgXCJOb3RvIENvbG9yIEVtb2ppXCIgIWRlZmF1bHQ7XG4kZm9udC1mYW1pbHktbW9ub3NwYWNlOiAgICAgICBTRk1vbm8tUmVndWxhciwgTWVubG8sIE1vbmFjbywgQ29uc29sYXMsIFwiTGliZXJhdGlvbiBNb25vXCIsIFwiQ291cmllciBOZXdcIiwgbW9ub3NwYWNlICFkZWZhdWx0O1xuJGZvbnQtZmFtaWx5LWJhc2U6ICAgICAgICAgICAgJGZvbnQtZmFtaWx5LXNhbnMtc2VyaWYgIWRlZmF1bHQ7XG4vLyBzdHlsZWxpbnQtZW5hYmxlIHZhbHVlLWtleXdvcmQtY2FzZVxuXG4kZm9udC1zaXplLWJhc2U6ICAgICAgICAgICAgICAxcmVtICFkZWZhdWx0OyAvLyBBc3N1bWVzIHRoZSBicm93c2VyIGRlZmF1bHQsIHR5cGljYWxseSBgMTZweGBcbiRmb250LXNpemUtbGc6ICAgICAgICAgICAgICAgICRmb250LXNpemUtYmFzZSAqIDEuMjUgIWRlZmF1bHQ7XG4kZm9udC1zaXplLXNtOiAgICAgICAgICAgICAgICAkZm9udC1zaXplLWJhc2UgKiAuODc1ICFkZWZhdWx0O1xuXG4kZm9udC13ZWlnaHQtbGlnaHRlcjogICAgICAgICBsaWdodGVyICFkZWZhdWx0O1xuJGZvbnQtd2VpZ2h0LWxpZ2h0OiAgICAgICAgICAgMzAwICFkZWZhdWx0O1xuJGZvbnQtd2VpZ2h0LW5vcm1hbDogICAgICAgICAgNDAwICFkZWZhdWx0O1xuJGZvbnQtd2VpZ2h0LWJvbGQ6ICAgICAgICAgICAgNzAwICFkZWZhdWx0O1xuJGZvbnQtd2VpZ2h0LWJvbGRlcjogICAgICAgICAgYm9sZGVyICFkZWZhdWx0O1xuXG4kZm9udC13ZWlnaHQtYmFzZTogICAgICAgICAgICAkZm9udC13ZWlnaHQtbm9ybWFsICFkZWZhdWx0O1xuJGxpbmUtaGVpZ2h0LWJhc2U6ICAgICAgICAgICAgMS41ICFkZWZhdWx0O1xuXG4kaDEtZm9udC1zaXplOiAgICAgICAgICAgICAgICAkZm9udC1zaXplLWJhc2UgKiAyLjUgIWRlZmF1bHQ7XG4kaDItZm9udC1zaXplOiAgICAgICAgICAgICAgICAkZm9udC1zaXplLWJhc2UgKiAyICFkZWZhdWx0O1xuJGgzLWZvbnQtc2l6ZTogICAgICAgICAgICAgICAgJGZvbnQtc2l6ZS1iYXNlICogMS43NSAhZGVmYXVsdDtcbiRoNC1mb250LXNpemU6ICAgICAgICAgICAgICAgICRmb250LXNpemUtYmFzZSAqIDEuNSAhZGVmYXVsdDtcbiRoNS1mb250LXNpemU6ICAgICAgICAgICAgICAgICRmb250LXNpemUtYmFzZSAqIDEuMjUgIWRlZmF1bHQ7XG4kaDYtZm9udC1zaXplOiAgICAgICAgICAgICAgICAkZm9udC1zaXplLWJhc2UgIWRlZmF1bHQ7XG5cbiRoZWFkaW5ncy1tYXJnaW4tYm90dG9tOiAgICAgICRzcGFjZXIgLyAyICFkZWZhdWx0O1xuJGhlYWRpbmdzLWZvbnQtZmFtaWx5OiAgICAgICAgbnVsbCAhZGVmYXVsdDtcbiRoZWFkaW5ncy1mb250LXdlaWdodDogICAgICAgIDUwMCAhZGVmYXVsdDtcbiRoZWFkaW5ncy1saW5lLWhlaWdodDogICAgICAgIDEuMiAhZGVmYXVsdDtcbiRoZWFkaW5ncy1jb2xvcjogICAgICAgICAgICAgIG51bGwgIWRlZmF1bHQ7XG5cbiRkaXNwbGF5MS1zaXplOiAgICAgICAgICAgICAgIDZyZW0gIWRlZmF1bHQ7XG4kZGlzcGxheTItc2l6ZTogICAgICAgICAgICAgICA1LjVyZW0gIWRlZmF1bHQ7XG4kZGlzcGxheTMtc2l6ZTogICAgICAgICAgICAgICA0LjVyZW0gIWRlZmF1bHQ7XG4kZGlzcGxheTQtc2l6ZTogICAgICAgICAgICAgICAzLjVyZW0gIWRlZmF1bHQ7XG5cbiRkaXNwbGF5MS13ZWlnaHQ6ICAgICAgICAgICAgIDMwMCAhZGVmYXVsdDtcbiRkaXNwbGF5Mi13ZWlnaHQ6ICAgICAgICAgICAgIDMwMCAhZGVmYXVsdDtcbiRkaXNwbGF5My13ZWlnaHQ6ICAgICAgICAgICAgIDMwMCAhZGVmYXVsdDtcbiRkaXNwbGF5NC13ZWlnaHQ6ICAgICAgICAgICAgIDMwMCAhZGVmYXVsdDtcbiRkaXNwbGF5LWxpbmUtaGVpZ2h0OiAgICAgICAgICRoZWFkaW5ncy1saW5lLWhlaWdodCAhZGVmYXVsdDtcblxuJGxlYWQtZm9udC1zaXplOiAgICAgICAgICAgICAgJGZvbnQtc2l6ZS1iYXNlICogMS4yNSAhZGVmYXVsdDtcbiRsZWFkLWZvbnQtd2VpZ2h0OiAgICAgICAgICAgIDMwMCAhZGVmYXVsdDtcblxuJHNtYWxsLWZvbnQtc2l6ZTogICAgICAgICAgICAgODAlICFkZWZhdWx0O1xuXG4kdGV4dC1tdXRlZDogICAgICAgICAgICAgICAgICAkZ3JheS02MDAgIWRlZmF1bHQ7XG5cbiRibG9ja3F1b3RlLXNtYWxsLWNvbG9yOiAgICAgICRncmF5LTYwMCAhZGVmYXVsdDtcbiRibG9ja3F1b3RlLXNtYWxsLWZvbnQtc2l6ZTogICRzbWFsbC1mb250LXNpemUgIWRlZmF1bHQ7XG4kYmxvY2txdW90ZS1mb250LXNpemU6ICAgICAgICAkZm9udC1zaXplLWJhc2UgKiAxLjI1ICFkZWZhdWx0O1xuXG4kaHItYm9yZGVyLWNvbG9yOiAgICAgICAgICAgICByZ2JhKCRibGFjaywgLjEpICFkZWZhdWx0O1xuJGhyLWJvcmRlci13aWR0aDogICAgICAgICAgICAgJGJvcmRlci13aWR0aCAhZGVmYXVsdDtcblxuJG1hcmstcGFkZGluZzogICAgICAgICAgICAgICAgLjJlbSAhZGVmYXVsdDtcblxuJGR0LWZvbnQtd2VpZ2h0OiAgICAgICAgICAgICAgJGZvbnQtd2VpZ2h0LWJvbGQgIWRlZmF1bHQ7XG5cbiRrYmQtYm94LXNoYWRvdzogICAgICAgICAgICAgIGluc2V0IDAgLS4xcmVtIDAgcmdiYSgkYmxhY2ssIC4yNSkgIWRlZmF1bHQ7XG4kbmVzdGVkLWtiZC1mb250LXdlaWdodDogICAgICAkZm9udC13ZWlnaHQtYm9sZCAhZGVmYXVsdDtcblxuJGxpc3QtaW5saW5lLXBhZGRpbmc6ICAgICAgICAgLjVyZW0gIWRlZmF1bHQ7XG5cbiRtYXJrLWJnOiAgICAgICAgICAgICAgICAgICAgICNmY2Y4ZTMgIWRlZmF1bHQ7XG5cbiRoci1tYXJnaW4teTogICAgICAgICAgICAgICAgICRzcGFjZXIgIWRlZmF1bHQ7XG5cblxuLy8gVGFibGVzXG4vL1xuLy8gQ3VzdG9taXplcyB0aGUgYC50YWJsZWAgY29tcG9uZW50IHdpdGggYmFzaWMgdmFsdWVzLCBlYWNoIHVzZWQgYWNyb3NzIGFsbCB0YWJsZSB2YXJpYXRpb25zLlxuXG4kdGFibGUtY2VsbC1wYWRkaW5nOiAgICAgICAgICAuNzVyZW0gIWRlZmF1bHQ7XG4kdGFibGUtY2VsbC1wYWRkaW5nLXNtOiAgICAgICAuM3JlbSAhZGVmYXVsdDtcblxuJHRhYmxlLWNvbG9yOiAgICAgICAgICAgICAgICAgJGJvZHktY29sb3IgIWRlZmF1bHQ7XG4kdGFibGUtYmc6ICAgICAgICAgICAgICAgICAgICBudWxsICFkZWZhdWx0O1xuJHRhYmxlLWFjY2VudC1iZzogICAgICAgICAgICAgcmdiYSgkYmxhY2ssIC4wNSkgIWRlZmF1bHQ7XG4kdGFibGUtaG92ZXItY29sb3I6ICAgICAgICAgICAkdGFibGUtY29sb3IgIWRlZmF1bHQ7XG4kdGFibGUtaG92ZXItYmc6ICAgICAgICAgICAgICByZ2JhKCRibGFjaywgLjA3NSkgIWRlZmF1bHQ7XG4kdGFibGUtYWN0aXZlLWJnOiAgICAgICAgICAgICAkdGFibGUtaG92ZXItYmcgIWRlZmF1bHQ7XG5cbiR0YWJsZS1ib3JkZXItd2lkdGg6ICAgICAgICAgICRib3JkZXItd2lkdGggIWRlZmF1bHQ7XG4kdGFibGUtYm9yZGVyLWNvbG9yOiAgICAgICAgICAkYm9yZGVyLWNvbG9yICFkZWZhdWx0O1xuXG4kdGFibGUtaGVhZC1iZzogICAgICAgICAgICAgICAkZ3JheS0yMDAgIWRlZmF1bHQ7XG4kdGFibGUtaGVhZC1jb2xvcjogICAgICAgICAgICAkZ3JheS03MDAgIWRlZmF1bHQ7XG5cbiR0YWJsZS1kYXJrLWNvbG9yOiAgICAgICAgICAgICR3aGl0ZSAhZGVmYXVsdDtcbiR0YWJsZS1kYXJrLWJnOiAgICAgICAgICAgICAgICRncmF5LTgwMCAhZGVmYXVsdDtcbiR0YWJsZS1kYXJrLWFjY2VudC1iZzogICAgICAgIHJnYmEoJHdoaXRlLCAuMDUpICFkZWZhdWx0O1xuJHRhYmxlLWRhcmstaG92ZXItY29sb3I6ICAgICAgJHRhYmxlLWRhcmstY29sb3IgIWRlZmF1bHQ7XG4kdGFibGUtZGFyay1ob3Zlci1iZzogICAgICAgICByZ2JhKCR3aGl0ZSwgLjA3NSkgIWRlZmF1bHQ7XG4kdGFibGUtZGFyay1ib3JkZXItY29sb3I6ICAgICBsaWdodGVuKCR0YWJsZS1kYXJrLWJnLCA3LjUlKSAhZGVmYXVsdDtcblxuJHRhYmxlLXN0cmlwZWQtb3JkZXI6ICAgICAgICAgb2RkICFkZWZhdWx0O1xuXG4kdGFibGUtY2FwdGlvbi1jb2xvcjogICAgICAgICAkdGV4dC1tdXRlZCAhZGVmYXVsdDtcblxuJHRhYmxlLWJnLWxldmVsOiAgICAgICAgICAgICAgLTkgIWRlZmF1bHQ7XG4kdGFibGUtYm9yZGVyLWxldmVsOiAgICAgICAgICAtNiAhZGVmYXVsdDtcblxuXG4vLyBCdXR0b25zICsgRm9ybXNcbi8vXG4vLyBTaGFyZWQgdmFyaWFibGVzIHRoYXQgYXJlIHJlYXNzaWduZWQgdG8gYCRpbnB1dC1gIGFuZCBgJGJ0bi1gIHNwZWNpZmljIHZhcmlhYmxlcy5cblxuJGlucHV0LWJ0bi1wYWRkaW5nLXk6ICAgICAgICAgLjM3NXJlbSAhZGVmYXVsdDtcbiRpbnB1dC1idG4tcGFkZGluZy14OiAgICAgICAgIC43NXJlbSAhZGVmYXVsdDtcbiRpbnB1dC1idG4tZm9udC1mYW1pbHk6ICAgICAgIG51bGwgIWRlZmF1bHQ7XG4kaW5wdXQtYnRuLWZvbnQtc2l6ZTogICAgICAgICAkZm9udC1zaXplLWJhc2UgIWRlZmF1bHQ7XG4kaW5wdXQtYnRuLWxpbmUtaGVpZ2h0OiAgICAgICAkbGluZS1oZWlnaHQtYmFzZSAhZGVmYXVsdDtcblxuJGlucHV0LWJ0bi1mb2N1cy13aWR0aDogICAgICAgLjJyZW0gIWRlZmF1bHQ7XG4kaW5wdXQtYnRuLWZvY3VzLWNvbG9yOiAgICAgICByZ2JhKCRjb21wb25lbnQtYWN0aXZlLWJnLCAuMjUpICFkZWZhdWx0O1xuJGlucHV0LWJ0bi1mb2N1cy1ib3gtc2hhZG93OiAgMCAwIDAgJGlucHV0LWJ0bi1mb2N1cy13aWR0aCAkaW5wdXQtYnRuLWZvY3VzLWNvbG9yICFkZWZhdWx0O1xuXG4kaW5wdXQtYnRuLXBhZGRpbmcteS1zbTogICAgICAuMjVyZW0gIWRlZmF1bHQ7XG4kaW5wdXQtYnRuLXBhZGRpbmcteC1zbTogICAgICAuNXJlbSAhZGVmYXVsdDtcbiRpbnB1dC1idG4tZm9udC1zaXplLXNtOiAgICAgICRmb250LXNpemUtc20gIWRlZmF1bHQ7XG4kaW5wdXQtYnRuLWxpbmUtaGVpZ2h0LXNtOiAgICAkbGluZS1oZWlnaHQtc20gIWRlZmF1bHQ7XG5cbiRpbnB1dC1idG4tcGFkZGluZy15LWxnOiAgICAgIC41cmVtICFkZWZhdWx0O1xuJGlucHV0LWJ0bi1wYWRkaW5nLXgtbGc6ICAgICAgMXJlbSAhZGVmYXVsdDtcbiRpbnB1dC1idG4tZm9udC1zaXplLWxnOiAgICAgICRmb250LXNpemUtbGcgIWRlZmF1bHQ7XG4kaW5wdXQtYnRuLWxpbmUtaGVpZ2h0LWxnOiAgICAkbGluZS1oZWlnaHQtbGcgIWRlZmF1bHQ7XG5cbiRpbnB1dC1idG4tYm9yZGVyLXdpZHRoOiAgICAgICRib3JkZXItd2lkdGggIWRlZmF1bHQ7XG5cblxuLy8gQnV0dG9uc1xuLy9cbi8vIEZvciBlYWNoIG9mIEJvb3RzdHJhcCdzIGJ1dHRvbnMsIGRlZmluZSB0ZXh0LCBiYWNrZ3JvdW5kLCBhbmQgYm9yZGVyIGNvbG9yLlxuXG4kYnRuLXBhZGRpbmcteTogICAgICAgICAgICAgICAkaW5wdXQtYnRuLXBhZGRpbmcteSAhZGVmYXVsdDtcbiRidG4tcGFkZGluZy14OiAgICAgICAgICAgICAgICRpbnB1dC1idG4tcGFkZGluZy14ICFkZWZhdWx0O1xuJGJ0bi1mb250LWZhbWlseTogICAgICAgICAgICAgJGlucHV0LWJ0bi1mb250LWZhbWlseSAhZGVmYXVsdDtcbiRidG4tZm9udC1zaXplOiAgICAgICAgICAgICAgICRpbnB1dC1idG4tZm9udC1zaXplICFkZWZhdWx0O1xuJGJ0bi1saW5lLWhlaWdodDogICAgICAgICAgICAgJGlucHV0LWJ0bi1saW5lLWhlaWdodCAhZGVmYXVsdDtcbiRidG4td2hpdGUtc3BhY2U6ICAgICAgICAgICAgIG51bGwgIWRlZmF1bHQ7IC8vIFNldCB0byBgbm93cmFwYCB0byBwcmV2ZW50IHRleHQgd3JhcHBpbmdcblxuJGJ0bi1wYWRkaW5nLXktc206ICAgICAgICAgICAgJGlucHV0LWJ0bi1wYWRkaW5nLXktc20gIWRlZmF1bHQ7XG4kYnRuLXBhZGRpbmcteC1zbTogICAgICAgICAgICAkaW5wdXQtYnRuLXBhZGRpbmcteC1zbSAhZGVmYXVsdDtcbiRidG4tZm9udC1zaXplLXNtOiAgICAgICAgICAgICRpbnB1dC1idG4tZm9udC1zaXplLXNtICFkZWZhdWx0O1xuJGJ0bi1saW5lLWhlaWdodC1zbTogICAgICAgICAgJGlucHV0LWJ0bi1saW5lLWhlaWdodC1zbSAhZGVmYXVsdDtcblxuJGJ0bi1wYWRkaW5nLXktbGc6ICAgICAgICAgICAgJGlucHV0LWJ0bi1wYWRkaW5nLXktbGcgIWRlZmF1bHQ7XG4kYnRuLXBhZGRpbmcteC1sZzogICAgICAgICAgICAkaW5wdXQtYnRuLXBhZGRpbmcteC1sZyAhZGVmYXVsdDtcbiRidG4tZm9udC1zaXplLWxnOiAgICAgICAgICAgICRpbnB1dC1idG4tZm9udC1zaXplLWxnICFkZWZhdWx0O1xuJGJ0bi1saW5lLWhlaWdodC1sZzogICAgICAgICAgJGlucHV0LWJ0bi1saW5lLWhlaWdodC1sZyAhZGVmYXVsdDtcblxuJGJ0bi1ib3JkZXItd2lkdGg6ICAgICAgICAgICAgJGlucHV0LWJ0bi1ib3JkZXItd2lkdGggIWRlZmF1bHQ7XG5cbiRidG4tZm9udC13ZWlnaHQ6ICAgICAgICAgICAgICRmb250LXdlaWdodC1ub3JtYWwgIWRlZmF1bHQ7XG4kYnRuLWJveC1zaGFkb3c6ICAgICAgICAgICAgICBpbnNldCAwIDFweCAwIHJnYmEoJHdoaXRlLCAuMTUpLCAwIDFweCAxcHggcmdiYSgkYmxhY2ssIC4wNzUpICFkZWZhdWx0O1xuJGJ0bi1mb2N1cy13aWR0aDogICAgICAgICAgICAgJGlucHV0LWJ0bi1mb2N1cy13aWR0aCAhZGVmYXVsdDtcbiRidG4tZm9jdXMtYm94LXNoYWRvdzogICAgICAgICRpbnB1dC1idG4tZm9jdXMtYm94LXNoYWRvdyAhZGVmYXVsdDtcbiRidG4tZGlzYWJsZWQtb3BhY2l0eTogICAgICAgIC42NSAhZGVmYXVsdDtcbiRidG4tYWN0aXZlLWJveC1zaGFkb3c6ICAgICAgIGluc2V0IDAgM3B4IDVweCByZ2JhKCRibGFjaywgLjEyNSkgIWRlZmF1bHQ7XG5cbiRidG4tbGluay1kaXNhYmxlZC1jb2xvcjogICAgICRncmF5LTYwMCAhZGVmYXVsdDtcblxuJGJ0bi1ibG9jay1zcGFjaW5nLXk6ICAgICAgICAgLjVyZW0gIWRlZmF1bHQ7XG5cbi8vIEFsbG93cyBmb3IgY3VzdG9taXppbmcgYnV0dG9uIHJhZGl1cyBpbmRlcGVuZGVudGx5IGZyb20gZ2xvYmFsIGJvcmRlciByYWRpdXNcbiRidG4tYm9yZGVyLXJhZGl1czogICAgICAgICAgICRib3JkZXItcmFkaXVzICFkZWZhdWx0O1xuJGJ0bi1ib3JkZXItcmFkaXVzLWxnOiAgICAgICAgJGJvcmRlci1yYWRpdXMtbGcgIWRlZmF1bHQ7XG4kYnRuLWJvcmRlci1yYWRpdXMtc206ICAgICAgICAkYm9yZGVyLXJhZGl1cy1zbSAhZGVmYXVsdDtcblxuJGJ0bi10cmFuc2l0aW9uOiAgICAgICAgICAgICAgY29sb3IgLjE1cyBlYXNlLWluLW91dCwgYmFja2dyb3VuZC1jb2xvciAuMTVzIGVhc2UtaW4tb3V0LCBib3JkZXItY29sb3IgLjE1cyBlYXNlLWluLW91dCwgYm94LXNoYWRvdyAuMTVzIGVhc2UtaW4tb3V0ICFkZWZhdWx0O1xuXG5cbi8vIEZvcm1zXG5cbiRsYWJlbC1tYXJnaW4tYm90dG9tOiAgICAgICAgICAgICAgICAgICAuNXJlbSAhZGVmYXVsdDtcblxuJGlucHV0LXBhZGRpbmcteTogICAgICAgICAgICAgICAgICAgICAgICRpbnB1dC1idG4tcGFkZGluZy15ICFkZWZhdWx0O1xuJGlucHV0LXBhZGRpbmcteDogICAgICAgICAgICAgICAgICAgICAgICRpbnB1dC1idG4tcGFkZGluZy14ICFkZWZhdWx0O1xuJGlucHV0LWZvbnQtZmFtaWx5OiAgICAgICAgICAgICAgICAgICAgICRpbnB1dC1idG4tZm9udC1mYW1pbHkgIWRlZmF1bHQ7XG4kaW5wdXQtZm9udC1zaXplOiAgICAgICAgICAgICAgICAgICAgICAgJGlucHV0LWJ0bi1mb250LXNpemUgIWRlZmF1bHQ7XG4kaW5wdXQtZm9udC13ZWlnaHQ6ICAgICAgICAgICAgICAgICAgICAgJGZvbnQtd2VpZ2h0LWJhc2UgIWRlZmF1bHQ7XG4kaW5wdXQtbGluZS1oZWlnaHQ6ICAgICAgICAgICAgICAgICAgICAgJGlucHV0LWJ0bi1saW5lLWhlaWdodCAhZGVmYXVsdDtcblxuJGlucHV0LXBhZGRpbmcteS1zbTogICAgICAgICAgICAgICAgICAgICRpbnB1dC1idG4tcGFkZGluZy15LXNtICFkZWZhdWx0O1xuJGlucHV0LXBhZGRpbmcteC1zbTogICAgICAgICAgICAgICAgICAgICRpbnB1dC1idG4tcGFkZGluZy14LXNtICFkZWZhdWx0O1xuJGlucHV0LWZvbnQtc2l6ZS1zbTogICAgICAgICAgICAgICAgICAgICRpbnB1dC1idG4tZm9udC1zaXplLXNtICFkZWZhdWx0O1xuJGlucHV0LWxpbmUtaGVpZ2h0LXNtOiAgICAgICAgICAgICAgICAgICRpbnB1dC1idG4tbGluZS1oZWlnaHQtc20gIWRlZmF1bHQ7XG5cbiRpbnB1dC1wYWRkaW5nLXktbGc6ICAgICAgICAgICAgICAgICAgICAkaW5wdXQtYnRuLXBhZGRpbmcteS1sZyAhZGVmYXVsdDtcbiRpbnB1dC1wYWRkaW5nLXgtbGc6ICAgICAgICAgICAgICAgICAgICAkaW5wdXQtYnRuLXBhZGRpbmcteC1sZyAhZGVmYXVsdDtcbiRpbnB1dC1mb250LXNpemUtbGc6ICAgICAgICAgICAgICAgICAgICAkaW5wdXQtYnRuLWZvbnQtc2l6ZS1sZyAhZGVmYXVsdDtcbiRpbnB1dC1saW5lLWhlaWdodC1sZzogICAgICAgICAgICAgICAgICAkaW5wdXQtYnRuLWxpbmUtaGVpZ2h0LWxnICFkZWZhdWx0O1xuXG4kaW5wdXQtYmc6ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJHdoaXRlICFkZWZhdWx0O1xuJGlucHV0LWRpc2FibGVkLWJnOiAgICAgICAgICAgICAgICAgICAgICRncmF5LTIwMCAhZGVmYXVsdDtcblxuJGlucHV0LWNvbG9yOiAgICAgICAgICAgICAgICAgICAgICAgICAgICRncmF5LTcwMCAhZGVmYXVsdDtcbiRpbnB1dC1ib3JkZXItY29sb3I6ICAgICAgICAgICAgICAgICAgICAkZ3JheS00MDAgIWRlZmF1bHQ7XG4kaW5wdXQtYm9yZGVyLXdpZHRoOiAgICAgICAgICAgICAgICAgICAgJGlucHV0LWJ0bi1ib3JkZXItd2lkdGggIWRlZmF1bHQ7XG4kaW5wdXQtYm94LXNoYWRvdzogICAgICAgICAgICAgICAgICAgICAgaW5zZXQgMCAxcHggMXB4IHJnYmEoJGJsYWNrLCAuMDc1KSAhZGVmYXVsdDtcblxuJGlucHV0LWJvcmRlci1yYWRpdXM6ICAgICAgICAgICAgICAgICAgICRib3JkZXItcmFkaXVzICFkZWZhdWx0O1xuJGlucHV0LWJvcmRlci1yYWRpdXMtbGc6ICAgICAgICAgICAgICAgICRib3JkZXItcmFkaXVzLWxnICFkZWZhdWx0O1xuJGlucHV0LWJvcmRlci1yYWRpdXMtc206ICAgICAgICAgICAgICAgICRib3JkZXItcmFkaXVzLXNtICFkZWZhdWx0O1xuXG4kaW5wdXQtZm9jdXMtYmc6ICAgICAgICAgICAgICAgICAgICAgICAgJGlucHV0LWJnICFkZWZhdWx0O1xuJGlucHV0LWZvY3VzLWJvcmRlci1jb2xvcjogICAgICAgICAgICAgIGxpZ2h0ZW4oJGNvbXBvbmVudC1hY3RpdmUtYmcsIDI1JSkgIWRlZmF1bHQ7XG4kaW5wdXQtZm9jdXMtY29sb3I6ICAgICAgICAgICAgICAgICAgICAgJGlucHV0LWNvbG9yICFkZWZhdWx0O1xuJGlucHV0LWZvY3VzLXdpZHRoOiAgICAgICAgICAgICAgICAgICAgICRpbnB1dC1idG4tZm9jdXMtd2lkdGggIWRlZmF1bHQ7XG4kaW5wdXQtZm9jdXMtYm94LXNoYWRvdzogICAgICAgICAgICAgICAgJGlucHV0LWJ0bi1mb2N1cy1ib3gtc2hhZG93ICFkZWZhdWx0O1xuXG4kaW5wdXQtcGxhY2Vob2xkZXItY29sb3I6ICAgICAgICAgICAgICAgJGdyYXktNjAwICFkZWZhdWx0O1xuJGlucHV0LXBsYWludGV4dC1jb2xvcjogICAgICAgICAgICAgICAgICRib2R5LWNvbG9yICFkZWZhdWx0O1xuXG4kaW5wdXQtaGVpZ2h0LWJvcmRlcjogICAgICAgICAgICAgICAgICAgJGlucHV0LWJvcmRlci13aWR0aCAqIDIgIWRlZmF1bHQ7XG5cbiRpbnB1dC1oZWlnaHQtaW5uZXI6ICAgICAgICAgICAgICAgICAgICBhZGQoJGlucHV0LWxpbmUtaGVpZ2h0ICogMWVtLCAkaW5wdXQtcGFkZGluZy15ICogMikgIWRlZmF1bHQ7XG4kaW5wdXQtaGVpZ2h0LWlubmVyLWhhbGY6ICAgICAgICAgICAgICAgYWRkKCRpbnB1dC1saW5lLWhlaWdodCAqIC41ZW0sICRpbnB1dC1wYWRkaW5nLXkpICFkZWZhdWx0O1xuJGlucHV0LWhlaWdodC1pbm5lci1xdWFydGVyOiAgICAgICAgICAgIGFkZCgkaW5wdXQtbGluZS1oZWlnaHQgKiAuMjVlbSwgJGlucHV0LXBhZGRpbmcteSAvIDIpICFkZWZhdWx0O1xuXG4kaW5wdXQtaGVpZ2h0OiAgICAgICAgICAgICAgICAgICAgICAgICAgYWRkKCRpbnB1dC1saW5lLWhlaWdodCAqIDFlbSwgYWRkKCRpbnB1dC1wYWRkaW5nLXkgKiAyLCAkaW5wdXQtaGVpZ2h0LWJvcmRlciwgZmFsc2UpKSAhZGVmYXVsdDtcbiRpbnB1dC1oZWlnaHQtc206ICAgICAgICAgICAgICAgICAgICAgICBhZGQoJGlucHV0LWxpbmUtaGVpZ2h0LXNtICogMWVtLCBhZGQoJGlucHV0LXBhZGRpbmcteS1zbSAqIDIsICRpbnB1dC1oZWlnaHQtYm9yZGVyLCBmYWxzZSkpICFkZWZhdWx0O1xuJGlucHV0LWhlaWdodC1sZzogICAgICAgICAgICAgICAgICAgICAgIGFkZCgkaW5wdXQtbGluZS1oZWlnaHQtbGcgKiAxZW0sIGFkZCgkaW5wdXQtcGFkZGluZy15LWxnICogMiwgJGlucHV0LWhlaWdodC1ib3JkZXIsIGZhbHNlKSkgIWRlZmF1bHQ7XG5cbiRpbnB1dC10cmFuc2l0aW9uOiAgICAgICAgICAgICAgICAgICAgICBib3JkZXItY29sb3IgLjE1cyBlYXNlLWluLW91dCwgYm94LXNoYWRvdyAuMTVzIGVhc2UtaW4tb3V0ICFkZWZhdWx0O1xuXG4kZm9ybS10ZXh0LW1hcmdpbi10b3A6ICAgICAgICAgICAgICAgICAgLjI1cmVtICFkZWZhdWx0O1xuXG4kZm9ybS1jaGVjay1pbnB1dC1ndXR0ZXI6ICAgICAgICAgICAgICAgMS4yNXJlbSAhZGVmYXVsdDtcbiRmb3JtLWNoZWNrLWlucHV0LW1hcmdpbi15OiAgICAgICAgICAgICAuM3JlbSAhZGVmYXVsdDtcbiRmb3JtLWNoZWNrLWlucHV0LW1hcmdpbi14OiAgICAgICAgICAgICAuMjVyZW0gIWRlZmF1bHQ7XG5cbiRmb3JtLWNoZWNrLWlubGluZS1tYXJnaW4teDogICAgICAgICAgICAuNzVyZW0gIWRlZmF1bHQ7XG4kZm9ybS1jaGVjay1pbmxpbmUtaW5wdXQtbWFyZ2luLXg6ICAgICAgLjMxMjVyZW0gIWRlZmF1bHQ7XG5cbiRmb3JtLWdyaWQtZ3V0dGVyLXdpZHRoOiAgICAgICAgICAgICAgICAxMHB4ICFkZWZhdWx0O1xuJGZvcm0tZ3JvdXAtbWFyZ2luLWJvdHRvbTogICAgICAgICAgICAgIDFyZW0gIWRlZmF1bHQ7XG5cbiRpbnB1dC1ncm91cC1hZGRvbi1jb2xvcjogICAgICAgICAgICAgICAkaW5wdXQtY29sb3IgIWRlZmF1bHQ7XG4kaW5wdXQtZ3JvdXAtYWRkb24tYmc6ICAgICAgICAgICAgICAgICAgJGdyYXktMjAwICFkZWZhdWx0O1xuJGlucHV0LWdyb3VwLWFkZG9uLWJvcmRlci1jb2xvcjogICAgICAgICRpbnB1dC1ib3JkZXItY29sb3IgIWRlZmF1bHQ7XG5cbiRjdXN0b20tZm9ybXMtdHJhbnNpdGlvbjogICAgICAgICAgICAgICBiYWNrZ3JvdW5kLWNvbG9yIC4xNXMgZWFzZS1pbi1vdXQsIGJvcmRlci1jb2xvciAuMTVzIGVhc2UtaW4tb3V0LCBib3gtc2hhZG93IC4xNXMgZWFzZS1pbi1vdXQgIWRlZmF1bHQ7XG5cbiRjdXN0b20tY29udHJvbC1ndXR0ZXI6ICAgICAgICAgICAgICAgICAuNXJlbSAhZGVmYXVsdDtcbiRjdXN0b20tY29udHJvbC1zcGFjZXIteDogICAgICAgICAgICAgICAxcmVtICFkZWZhdWx0O1xuJGN1c3RvbS1jb250cm9sLWN1cnNvcjogICAgICAgICAgICAgICAgIG51bGwgIWRlZmF1bHQ7XG5cbiRjdXN0b20tY29udHJvbC1pbmRpY2F0b3Itc2l6ZTogICAgICAgICAxcmVtICFkZWZhdWx0O1xuJGN1c3RvbS1jb250cm9sLWluZGljYXRvci1iZzogICAgICAgICAgICRpbnB1dC1iZyAhZGVmYXVsdDtcblxuJGN1c3RvbS1jb250cm9sLWluZGljYXRvci1iZy1zaXplOiAgICAgIDUwJSA1MCUgIWRlZmF1bHQ7XG4kY3VzdG9tLWNvbnRyb2wtaW5kaWNhdG9yLWJveC1zaGFkb3c6ICAgJGlucHV0LWJveC1zaGFkb3cgIWRlZmF1bHQ7XG4kY3VzdG9tLWNvbnRyb2wtaW5kaWNhdG9yLWJvcmRlci1jb2xvcjogJGdyYXktNTAwICFkZWZhdWx0O1xuJGN1c3RvbS1jb250cm9sLWluZGljYXRvci1ib3JkZXItd2lkdGg6ICRpbnB1dC1ib3JkZXItd2lkdGggIWRlZmF1bHQ7XG5cbiRjdXN0b20tY29udHJvbC1sYWJlbC1jb2xvcjogICAgICAgICAgICBudWxsICFkZWZhdWx0O1xuXG4kY3VzdG9tLWNvbnRyb2wtaW5kaWNhdG9yLWRpc2FibGVkLWJnOiAgICAgICAgICAkaW5wdXQtZGlzYWJsZWQtYmcgIWRlZmF1bHQ7XG4kY3VzdG9tLWNvbnRyb2wtbGFiZWwtZGlzYWJsZWQtY29sb3I6ICAgICAgICAgICAkZ3JheS02MDAgIWRlZmF1bHQ7XG5cbiRjdXN0b20tY29udHJvbC1pbmRpY2F0b3ItY2hlY2tlZC1jb2xvcjogICAgICAgICRjb21wb25lbnQtYWN0aXZlLWNvbG9yICFkZWZhdWx0O1xuJGN1c3RvbS1jb250cm9sLWluZGljYXRvci1jaGVja2VkLWJnOiAgICAgICAgICAgJGNvbXBvbmVudC1hY3RpdmUtYmcgIWRlZmF1bHQ7XG4kY3VzdG9tLWNvbnRyb2wtaW5kaWNhdG9yLWNoZWNrZWQtZGlzYWJsZWQtYmc6ICByZ2JhKHRoZW1lLWNvbG9yKFwicHJpbWFyeVwiKSwgLjUpICFkZWZhdWx0O1xuJGN1c3RvbS1jb250cm9sLWluZGljYXRvci1jaGVja2VkLWJveC1zaGFkb3c6ICAgbm9uZSAhZGVmYXVsdDtcbiRjdXN0b20tY29udHJvbC1pbmRpY2F0b3ItY2hlY2tlZC1ib3JkZXItY29sb3I6ICRjdXN0b20tY29udHJvbC1pbmRpY2F0b3ItY2hlY2tlZC1iZyAhZGVmYXVsdDtcblxuJGN1c3RvbS1jb250cm9sLWluZGljYXRvci1mb2N1cy1ib3gtc2hhZG93OiAgICAgJGlucHV0LWZvY3VzLWJveC1zaGFkb3cgIWRlZmF1bHQ7XG4kY3VzdG9tLWNvbnRyb2wtaW5kaWNhdG9yLWZvY3VzLWJvcmRlci1jb2xvcjogICAkaW5wdXQtZm9jdXMtYm9yZGVyLWNvbG9yICFkZWZhdWx0O1xuXG4kY3VzdG9tLWNvbnRyb2wtaW5kaWNhdG9yLWFjdGl2ZS1jb2xvcjogICAgICAgICAkY29tcG9uZW50LWFjdGl2ZS1jb2xvciAhZGVmYXVsdDtcbiRjdXN0b20tY29udHJvbC1pbmRpY2F0b3ItYWN0aXZlLWJnOiAgICAgICAgICAgIGxpZ2h0ZW4oJGNvbXBvbmVudC1hY3RpdmUtYmcsIDM1JSkgIWRlZmF1bHQ7XG4kY3VzdG9tLWNvbnRyb2wtaW5kaWNhdG9yLWFjdGl2ZS1ib3gtc2hhZG93OiAgICBub25lICFkZWZhdWx0O1xuJGN1c3RvbS1jb250cm9sLWluZGljYXRvci1hY3RpdmUtYm9yZGVyLWNvbG9yOiAgJGN1c3RvbS1jb250cm9sLWluZGljYXRvci1hY3RpdmUtYmcgIWRlZmF1bHQ7XG5cbiRjdXN0b20tY2hlY2tib3gtaW5kaWNhdG9yLWJvcmRlci1yYWRpdXM6ICAgICAgICRib3JkZXItcmFkaXVzICFkZWZhdWx0O1xuJGN1c3RvbS1jaGVja2JveC1pbmRpY2F0b3ItaWNvbi1jaGVja2VkOiAgICAgICAgdXJsKFwiZGF0YTppbWFnZS9zdmcreG1sLDxzdmcgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJyB3aWR0aD0nOCcgaGVpZ2h0PSc4JyB2aWV3Qm94PScwIDAgOCA4Jz48cGF0aCBmaWxsPScjeyRjdXN0b20tY29udHJvbC1pbmRpY2F0b3ItY2hlY2tlZC1jb2xvcn0nIGQ9J002LjU2NC43NWwtMy41OSAzLjYxMi0xLjUzOC0xLjU1TDAgNC4yNmwyLjk3NCAyLjk5TDggMi4xOTN6Jy8+PC9zdmc+XCIpICFkZWZhdWx0O1xuXG4kY3VzdG9tLWNoZWNrYm94LWluZGljYXRvci1pbmRldGVybWluYXRlLWJnOiAgICAgICAgICAgJGNvbXBvbmVudC1hY3RpdmUtYmcgIWRlZmF1bHQ7XG4kY3VzdG9tLWNoZWNrYm94LWluZGljYXRvci1pbmRldGVybWluYXRlLWNvbG9yOiAgICAgICAgJGN1c3RvbS1jb250cm9sLWluZGljYXRvci1jaGVja2VkLWNvbG9yICFkZWZhdWx0O1xuJGN1c3RvbS1jaGVja2JveC1pbmRpY2F0b3ItaWNvbi1pbmRldGVybWluYXRlOiAgICAgICAgIHVybChcImRhdGE6aW1hZ2Uvc3ZnK3htbCw8c3ZnIHhtbG5zPSdodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2Zycgd2lkdGg9JzQnIGhlaWdodD0nNCcgdmlld0JveD0nMCAwIDQgNCc+PHBhdGggc3Ryb2tlPScjeyRjdXN0b20tY2hlY2tib3gtaW5kaWNhdG9yLWluZGV0ZXJtaW5hdGUtY29sb3J9JyBkPSdNMCAyaDQnLz48L3N2Zz5cIikgIWRlZmF1bHQ7XG4kY3VzdG9tLWNoZWNrYm94LWluZGljYXRvci1pbmRldGVybWluYXRlLWJveC1zaGFkb3c6ICAgbm9uZSAhZGVmYXVsdDtcbiRjdXN0b20tY2hlY2tib3gtaW5kaWNhdG9yLWluZGV0ZXJtaW5hdGUtYm9yZGVyLWNvbG9yOiAkY3VzdG9tLWNoZWNrYm94LWluZGljYXRvci1pbmRldGVybWluYXRlLWJnICFkZWZhdWx0O1xuXG4kY3VzdG9tLXJhZGlvLWluZGljYXRvci1ib3JkZXItcmFkaXVzOiAgICAgICAgICA1MCUgIWRlZmF1bHQ7XG4kY3VzdG9tLXJhZGlvLWluZGljYXRvci1pY29uLWNoZWNrZWQ6ICAgICAgICAgICB1cmwoXCJkYXRhOmltYWdlL3N2Zyt4bWwsPHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHdpZHRoPScxMicgaGVpZ2h0PScxMicgdmlld0JveD0nLTQgLTQgOCA4Jz48Y2lyY2xlIHI9JzMnIGZpbGw9JyN7JGN1c3RvbS1jb250cm9sLWluZGljYXRvci1jaGVja2VkLWNvbG9yfScvPjwvc3ZnPlwiKSAhZGVmYXVsdDtcblxuJGN1c3RvbS1zd2l0Y2gtd2lkdGg6ICAgICAgICAgICAgICAgICAgICAgICAgICAgJGN1c3RvbS1jb250cm9sLWluZGljYXRvci1zaXplICogMS43NSAhZGVmYXVsdDtcbiRjdXN0b20tc3dpdGNoLWluZGljYXRvci1ib3JkZXItcmFkaXVzOiAgICAgICAgICRjdXN0b20tY29udHJvbC1pbmRpY2F0b3Itc2l6ZSAvIDIgIWRlZmF1bHQ7XG4kY3VzdG9tLXN3aXRjaC1pbmRpY2F0b3Itc2l6ZTogICAgICAgICAgICAgICAgICBzdWJ0cmFjdCgkY3VzdG9tLWNvbnRyb2wtaW5kaWNhdG9yLXNpemUsICRjdXN0b20tY29udHJvbC1pbmRpY2F0b3ItYm9yZGVyLXdpZHRoICogNCkgIWRlZmF1bHQ7XG5cbiRjdXN0b20tc2VsZWN0LXBhZGRpbmcteTogICAgICAgICAgICRpbnB1dC1wYWRkaW5nLXkgIWRlZmF1bHQ7XG4kY3VzdG9tLXNlbGVjdC1wYWRkaW5nLXg6ICAgICAgICAgICAkaW5wdXQtcGFkZGluZy14ICFkZWZhdWx0O1xuJGN1c3RvbS1zZWxlY3QtZm9udC1mYW1pbHk6ICAgICAgICAgJGlucHV0LWZvbnQtZmFtaWx5ICFkZWZhdWx0O1xuJGN1c3RvbS1zZWxlY3QtZm9udC1zaXplOiAgICAgICAgICAgJGlucHV0LWZvbnQtc2l6ZSAhZGVmYXVsdDtcbiRjdXN0b20tc2VsZWN0LWhlaWdodDogICAgICAgICAgICAgICRpbnB1dC1oZWlnaHQgIWRlZmF1bHQ7XG4kY3VzdG9tLXNlbGVjdC1pbmRpY2F0b3ItcGFkZGluZzogICAxcmVtICFkZWZhdWx0OyAvLyBFeHRyYSBwYWRkaW5nIHRvIGFjY291bnQgZm9yIHRoZSBwcmVzZW5jZSBvZiB0aGUgYmFja2dyb3VuZC1pbWFnZSBiYXNlZCBpbmRpY2F0b3JcbiRjdXN0b20tc2VsZWN0LWZvbnQtd2VpZ2h0OiAgICAgICAgICRpbnB1dC1mb250LXdlaWdodCAhZGVmYXVsdDtcbiRjdXN0b20tc2VsZWN0LWxpbmUtaGVpZ2h0OiAgICAgICAgICRpbnB1dC1saW5lLWhlaWdodCAhZGVmYXVsdDtcbiRjdXN0b20tc2VsZWN0LWNvbG9yOiAgICAgICAgICAgICAgICRpbnB1dC1jb2xvciAhZGVmYXVsdDtcbiRjdXN0b20tc2VsZWN0LWRpc2FibGVkLWNvbG9yOiAgICAgICRncmF5LTYwMCAhZGVmYXVsdDtcbiRjdXN0b20tc2VsZWN0LWJnOiAgICAgICAgICAgICAgICAgICRpbnB1dC1iZyAhZGVmYXVsdDtcbiRjdXN0b20tc2VsZWN0LWRpc2FibGVkLWJnOiAgICAgICAgICRncmF5LTIwMCAhZGVmYXVsdDtcbiRjdXN0b20tc2VsZWN0LWJnLXNpemU6ICAgICAgICAgICAgIDhweCAxMHB4ICFkZWZhdWx0OyAvLyBJbiBwaXhlbHMgYmVjYXVzZSBpbWFnZSBkaW1lbnNpb25zXG4kY3VzdG9tLXNlbGVjdC1pbmRpY2F0b3ItY29sb3I6ICAgICAkZ3JheS04MDAgIWRlZmF1bHQ7XG4kY3VzdG9tLXNlbGVjdC1pbmRpY2F0b3I6ICAgICAgICAgICB1cmwoXCJkYXRhOmltYWdlL3N2Zyt4bWwsPHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHdpZHRoPSc0JyBoZWlnaHQ9JzUnIHZpZXdCb3g9JzAgMCA0IDUnPjxwYXRoIGZpbGw9JyN7JGN1c3RvbS1zZWxlY3QtaW5kaWNhdG9yLWNvbG9yfScgZD0nTTIgMEwwIDJoNHptMCA1TDAgM2g0eicvPjwvc3ZnPlwiKSAhZGVmYXVsdDtcbiRjdXN0b20tc2VsZWN0LWJhY2tncm91bmQ6ICAgICAgICAgIGVzY2FwZS1zdmcoJGN1c3RvbS1zZWxlY3QtaW5kaWNhdG9yKSBuby1yZXBlYXQgcmlnaHQgJGN1c3RvbS1zZWxlY3QtcGFkZGluZy14IGNlbnRlciAvICRjdXN0b20tc2VsZWN0LWJnLXNpemUgIWRlZmF1bHQ7IC8vIFVzZWQgc28gd2UgY2FuIGhhdmUgbXVsdGlwbGUgYmFja2dyb3VuZCBlbGVtZW50cyAoZS5nLiwgYXJyb3cgYW5kIGZlZWRiYWNrIGljb24pXG5cbiRjdXN0b20tc2VsZWN0LWZlZWRiYWNrLWljb24tcGFkZGluZy1yaWdodDogYWRkKDFlbSAqIC43NSwgKDIgKiAkY3VzdG9tLXNlbGVjdC1wYWRkaW5nLXkgKiAuNzUpICsgJGN1c3RvbS1zZWxlY3QtcGFkZGluZy14ICsgJGN1c3RvbS1zZWxlY3QtaW5kaWNhdG9yLXBhZGRpbmcpICFkZWZhdWx0O1xuJGN1c3RvbS1zZWxlY3QtZmVlZGJhY2staWNvbi1wb3NpdGlvbjogICAgICBjZW50ZXIgcmlnaHQgKCRjdXN0b20tc2VsZWN0LXBhZGRpbmcteCArICRjdXN0b20tc2VsZWN0LWluZGljYXRvci1wYWRkaW5nKSAhZGVmYXVsdDtcbiRjdXN0b20tc2VsZWN0LWZlZWRiYWNrLWljb24tc2l6ZTogICAgICAgICAgJGlucHV0LWhlaWdodC1pbm5lci1oYWxmICRpbnB1dC1oZWlnaHQtaW5uZXItaGFsZiAhZGVmYXVsdDtcblxuJGN1c3RvbS1zZWxlY3QtYm9yZGVyLXdpZHRoOiAgICAgICAgJGlucHV0LWJvcmRlci13aWR0aCAhZGVmYXVsdDtcbiRjdXN0b20tc2VsZWN0LWJvcmRlci1jb2xvcjogICAgICAgICRpbnB1dC1ib3JkZXItY29sb3IgIWRlZmF1bHQ7XG4kY3VzdG9tLXNlbGVjdC1ib3JkZXItcmFkaXVzOiAgICAgICAkYm9yZGVyLXJhZGl1cyAhZGVmYXVsdDtcbiRjdXN0b20tc2VsZWN0LWJveC1zaGFkb3c6ICAgICAgICAgIGluc2V0IDAgMXB4IDJweCByZ2JhKCRibGFjaywgLjA3NSkgIWRlZmF1bHQ7XG5cbiRjdXN0b20tc2VsZWN0LWZvY3VzLWJvcmRlci1jb2xvcjogICRpbnB1dC1mb2N1cy1ib3JkZXItY29sb3IgIWRlZmF1bHQ7XG4kY3VzdG9tLXNlbGVjdC1mb2N1cy13aWR0aDogICAgICAgICAkaW5wdXQtZm9jdXMtd2lkdGggIWRlZmF1bHQ7XG4kY3VzdG9tLXNlbGVjdC1mb2N1cy1ib3gtc2hhZG93OiAgICAwIDAgMCAkY3VzdG9tLXNlbGVjdC1mb2N1cy13aWR0aCAkaW5wdXQtYnRuLWZvY3VzLWNvbG9yICFkZWZhdWx0O1xuXG4kY3VzdG9tLXNlbGVjdC1wYWRkaW5nLXktc206ICAgICAgICAkaW5wdXQtcGFkZGluZy15LXNtICFkZWZhdWx0O1xuJGN1c3RvbS1zZWxlY3QtcGFkZGluZy14LXNtOiAgICAgICAgJGlucHV0LXBhZGRpbmcteC1zbSAhZGVmYXVsdDtcbiRjdXN0b20tc2VsZWN0LWZvbnQtc2l6ZS1zbTogICAgICAgICRpbnB1dC1mb250LXNpemUtc20gIWRlZmF1bHQ7XG4kY3VzdG9tLXNlbGVjdC1oZWlnaHQtc206ICAgICAgICAgICAkaW5wdXQtaGVpZ2h0LXNtICFkZWZhdWx0O1xuXG4kY3VzdG9tLXNlbGVjdC1wYWRkaW5nLXktbGc6ICAgICAgICAkaW5wdXQtcGFkZGluZy15LWxnICFkZWZhdWx0O1xuJGN1c3RvbS1zZWxlY3QtcGFkZGluZy14LWxnOiAgICAgICAgJGlucHV0LXBhZGRpbmcteC1sZyAhZGVmYXVsdDtcbiRjdXN0b20tc2VsZWN0LWZvbnQtc2l6ZS1sZzogICAgICAgICRpbnB1dC1mb250LXNpemUtbGcgIWRlZmF1bHQ7XG4kY3VzdG9tLXNlbGVjdC1oZWlnaHQtbGc6ICAgICAgICAgICAkaW5wdXQtaGVpZ2h0LWxnICFkZWZhdWx0O1xuXG4kY3VzdG9tLXJhbmdlLXRyYWNrLXdpZHRoOiAgICAgICAgICAxMDAlICFkZWZhdWx0O1xuJGN1c3RvbS1yYW5nZS10cmFjay1oZWlnaHQ6ICAgICAgICAgLjVyZW0gIWRlZmF1bHQ7XG4kY3VzdG9tLXJhbmdlLXRyYWNrLWN1cnNvcjogICAgICAgICBwb2ludGVyICFkZWZhdWx0O1xuJGN1c3RvbS1yYW5nZS10cmFjay1iZzogICAgICAgICAgICAgJGdyYXktMzAwICFkZWZhdWx0O1xuJGN1c3RvbS1yYW5nZS10cmFjay1ib3JkZXItcmFkaXVzOiAgMXJlbSAhZGVmYXVsdDtcbiRjdXN0b20tcmFuZ2UtdHJhY2stYm94LXNoYWRvdzogICAgIGluc2V0IDAgLjI1cmVtIC4yNXJlbSByZ2JhKCRibGFjaywgLjEpICFkZWZhdWx0O1xuXG4kY3VzdG9tLXJhbmdlLXRodW1iLXdpZHRoOiAgICAgICAgICAgICAgICAgICAxcmVtICFkZWZhdWx0O1xuJGN1c3RvbS1yYW5nZS10aHVtYi1oZWlnaHQ6ICAgICAgICAgICAgICAgICAgJGN1c3RvbS1yYW5nZS10aHVtYi13aWR0aCAhZGVmYXVsdDtcbiRjdXN0b20tcmFuZ2UtdGh1bWItYmc6ICAgICAgICAgICAgICAgICAgICAgICRjb21wb25lbnQtYWN0aXZlLWJnICFkZWZhdWx0O1xuJGN1c3RvbS1yYW5nZS10aHVtYi1ib3JkZXI6ICAgICAgICAgICAgICAgICAgMCAhZGVmYXVsdDtcbiRjdXN0b20tcmFuZ2UtdGh1bWItYm9yZGVyLXJhZGl1czogICAgICAgICAgIDFyZW0gIWRlZmF1bHQ7XG4kY3VzdG9tLXJhbmdlLXRodW1iLWJveC1zaGFkb3c6ICAgICAgICAgICAgICAwIC4xcmVtIC4yNXJlbSByZ2JhKCRibGFjaywgLjEpICFkZWZhdWx0O1xuJGN1c3RvbS1yYW5nZS10aHVtYi1mb2N1cy1ib3gtc2hhZG93OiAgICAgICAgMCAwIDAgMXB4ICRib2R5LWJnLCAkaW5wdXQtZm9jdXMtYm94LXNoYWRvdyAhZGVmYXVsdDtcbiRjdXN0b20tcmFuZ2UtdGh1bWItZm9jdXMtYm94LXNoYWRvdy13aWR0aDogICRpbnB1dC1mb2N1cy13aWR0aCAhZGVmYXVsdDsgLy8gRm9yIGZvY3VzIGJveCBzaGFkb3cgaXNzdWUgaW4gSUUvRWRnZVxuJGN1c3RvbS1yYW5nZS10aHVtYi1hY3RpdmUtYmc6ICAgICAgICAgICAgICAgbGlnaHRlbigkY29tcG9uZW50LWFjdGl2ZS1iZywgMzUlKSAhZGVmYXVsdDtcbiRjdXN0b20tcmFuZ2UtdGh1bWItZGlzYWJsZWQtYmc6ICAgICAgICAgICAgICRncmF5LTUwMCAhZGVmYXVsdDtcblxuJGN1c3RvbS1maWxlLWhlaWdodDogICAgICAgICAgICAgICAgJGlucHV0LWhlaWdodCAhZGVmYXVsdDtcbiRjdXN0b20tZmlsZS1oZWlnaHQtaW5uZXI6ICAgICAgICAgICRpbnB1dC1oZWlnaHQtaW5uZXIgIWRlZmF1bHQ7XG4kY3VzdG9tLWZpbGUtZm9jdXMtYm9yZGVyLWNvbG9yOiAgICAkaW5wdXQtZm9jdXMtYm9yZGVyLWNvbG9yICFkZWZhdWx0O1xuJGN1c3RvbS1maWxlLWZvY3VzLWJveC1zaGFkb3c6ICAgICAgJGlucHV0LWZvY3VzLWJveC1zaGFkb3cgIWRlZmF1bHQ7XG4kY3VzdG9tLWZpbGUtZGlzYWJsZWQtYmc6ICAgICAgICAgICAkaW5wdXQtZGlzYWJsZWQtYmcgIWRlZmF1bHQ7XG5cbiRjdXN0b20tZmlsZS1wYWRkaW5nLXk6ICAgICAgICAgICAgICRpbnB1dC1wYWRkaW5nLXkgIWRlZmF1bHQ7XG4kY3VzdG9tLWZpbGUtcGFkZGluZy14OiAgICAgICAgICAgICAkaW5wdXQtcGFkZGluZy14ICFkZWZhdWx0O1xuJGN1c3RvbS1maWxlLWxpbmUtaGVpZ2h0OiAgICAgICAgICAgJGlucHV0LWxpbmUtaGVpZ2h0ICFkZWZhdWx0O1xuJGN1c3RvbS1maWxlLWZvbnQtZmFtaWx5OiAgICAgICAgICAgJGlucHV0LWZvbnQtZmFtaWx5ICFkZWZhdWx0O1xuJGN1c3RvbS1maWxlLWZvbnQtd2VpZ2h0OiAgICAgICAgICAgJGlucHV0LWZvbnQtd2VpZ2h0ICFkZWZhdWx0O1xuJGN1c3RvbS1maWxlLWNvbG9yOiAgICAgICAgICAgICAgICAgJGlucHV0LWNvbG9yICFkZWZhdWx0O1xuJGN1c3RvbS1maWxlLWJnOiAgICAgICAgICAgICAgICAgICAgJGlucHV0LWJnICFkZWZhdWx0O1xuJGN1c3RvbS1maWxlLWJvcmRlci13aWR0aDogICAgICAgICAgJGlucHV0LWJvcmRlci13aWR0aCAhZGVmYXVsdDtcbiRjdXN0b20tZmlsZS1ib3JkZXItY29sb3I6ICAgICAgICAgICRpbnB1dC1ib3JkZXItY29sb3IgIWRlZmF1bHQ7XG4kY3VzdG9tLWZpbGUtYm9yZGVyLXJhZGl1czogICAgICAgICAkaW5wdXQtYm9yZGVyLXJhZGl1cyAhZGVmYXVsdDtcbiRjdXN0b20tZmlsZS1ib3gtc2hhZG93OiAgICAgICAgICAgICRpbnB1dC1ib3gtc2hhZG93ICFkZWZhdWx0O1xuJGN1c3RvbS1maWxlLWJ1dHRvbi1jb2xvcjogICAgICAgICAgJGN1c3RvbS1maWxlLWNvbG9yICFkZWZhdWx0O1xuJGN1c3RvbS1maWxlLWJ1dHRvbi1iZzogICAgICAgICAgICAgJGlucHV0LWdyb3VwLWFkZG9uLWJnICFkZWZhdWx0O1xuJGN1c3RvbS1maWxlLXRleHQ6IChcbiAgZW46IFwiQnJvd3NlXCJcbikgIWRlZmF1bHQ7XG5cblxuLy8gRm9ybSB2YWxpZGF0aW9uXG5cbiRmb3JtLWZlZWRiYWNrLW1hcmdpbi10b3A6ICAgICAgICAgICRmb3JtLXRleHQtbWFyZ2luLXRvcCAhZGVmYXVsdDtcbiRmb3JtLWZlZWRiYWNrLWZvbnQtc2l6ZTogICAgICAgICAgICRzbWFsbC1mb250LXNpemUgIWRlZmF1bHQ7XG4kZm9ybS1mZWVkYmFjay12YWxpZC1jb2xvcjogICAgICAgICB0aGVtZS1jb2xvcihcInN1Y2Nlc3NcIikgIWRlZmF1bHQ7XG4kZm9ybS1mZWVkYmFjay1pbnZhbGlkLWNvbG9yOiAgICAgICB0aGVtZS1jb2xvcihcImRhbmdlclwiKSAhZGVmYXVsdDtcblxuJGZvcm0tZmVlZGJhY2staWNvbi12YWxpZC1jb2xvcjogICAgJGZvcm0tZmVlZGJhY2stdmFsaWQtY29sb3IgIWRlZmF1bHQ7XG4kZm9ybS1mZWVkYmFjay1pY29uLXZhbGlkOiAgICAgICAgICB1cmwoXCJkYXRhOmltYWdlL3N2Zyt4bWwsPHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHdpZHRoPSc4JyBoZWlnaHQ9JzgnIHZpZXdCb3g9JzAgMCA4IDgnPjxwYXRoIGZpbGw9JyN7JGZvcm0tZmVlZGJhY2staWNvbi12YWxpZC1jb2xvcn0nIGQ9J00yLjMgNi43M0wuNiA0LjUzYy0uNC0xLjA0LjQ2LTEuNCAxLjEtLjhsMS4xIDEuNCAzLjQtMy44Yy42LS42MyAxLjYtLjI3IDEuMi43bC00IDQuNmMtLjQzLjUtLjguNC0xLjEuMXonLz48L3N2Zz5cIikgIWRlZmF1bHQ7XG4kZm9ybS1mZWVkYmFjay1pY29uLWludmFsaWQtY29sb3I6ICAkZm9ybS1mZWVkYmFjay1pbnZhbGlkLWNvbG9yICFkZWZhdWx0O1xuJGZvcm0tZmVlZGJhY2staWNvbi1pbnZhbGlkOiAgICAgICAgdXJsKFwiZGF0YTppbWFnZS9zdmcreG1sLDxzdmcgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJyB3aWR0aD0nMTInIGhlaWdodD0nMTInIGZpbGw9J25vbmUnIHN0cm9rZT0nI3skZm9ybS1mZWVkYmFjay1pY29uLWludmFsaWQtY29sb3J9JyB2aWV3Qm94PScwIDAgMTIgMTInPjxjaXJjbGUgY3g9JzYnIGN5PSc2JyByPSc0LjUnLz48cGF0aCBzdHJva2UtbGluZWpvaW49J3JvdW5kJyBkPSdNNS44IDMuNmguNEw2IDYuNXonLz48Y2lyY2xlIGN4PSc2JyBjeT0nOC4yJyByPScuNicgZmlsbD0nI3skZm9ybS1mZWVkYmFjay1pY29uLWludmFsaWQtY29sb3J9JyBzdHJva2U9J25vbmUnLz48L3N2Zz5cIikgIWRlZmF1bHQ7XG5cbiRmb3JtLXZhbGlkYXRpb24tc3RhdGVzOiAoKSAhZGVmYXVsdDtcbi8vIHN0eWxlbGludC1kaXNhYmxlLW5leHQtbGluZSBzY3NzL2RvbGxhci12YXJpYWJsZS1kZWZhdWx0XG4kZm9ybS12YWxpZGF0aW9uLXN0YXRlczogbWFwLW1lcmdlKFxuICAoXG4gICAgXCJ2YWxpZFwiOiAoXG4gICAgICBcImNvbG9yXCI6ICRmb3JtLWZlZWRiYWNrLXZhbGlkLWNvbG9yLFxuICAgICAgXCJpY29uXCI6ICRmb3JtLWZlZWRiYWNrLWljb24tdmFsaWRcbiAgICApLFxuICAgIFwiaW52YWxpZFwiOiAoXG4gICAgICBcImNvbG9yXCI6ICRmb3JtLWZlZWRiYWNrLWludmFsaWQtY29sb3IsXG4gICAgICBcImljb25cIjogJGZvcm0tZmVlZGJhY2staWNvbi1pbnZhbGlkXG4gICAgKSxcbiAgKSxcbiAgJGZvcm0tdmFsaWRhdGlvbi1zdGF0ZXNcbik7XG5cbi8vIFotaW5kZXggbWFzdGVyIGxpc3Rcbi8vXG4vLyBXYXJuaW5nOiBBdm9pZCBjdXN0b21pemluZyB0aGVzZSB2YWx1ZXMuIFRoZXkncmUgdXNlZCBmb3IgYSBiaXJkJ3MgZXllIHZpZXdcbi8vIG9mIGNvbXBvbmVudHMgZGVwZW5kZW50IG9uIHRoZSB6LWF4aXMgYW5kIGFyZSBkZXNpZ25lZCB0byBhbGwgd29yayB0b2dldGhlci5cblxuJHppbmRleC1kcm9wZG93bjogICAgICAgICAgICAgICAgICAgMTAwMCAhZGVmYXVsdDtcbiR6aW5kZXgtc3RpY2t5OiAgICAgICAgICAgICAgICAgICAgIDEwMjAgIWRlZmF1bHQ7XG4kemluZGV4LWZpeGVkOiAgICAgICAgICAgICAgICAgICAgICAxMDMwICFkZWZhdWx0O1xuJHppbmRleC1tb2RhbC1iYWNrZHJvcDogICAgICAgICAgICAgMTA0MCAhZGVmYXVsdDtcbiR6aW5kZXgtbW9kYWw6ICAgICAgICAgICAgICAgICAgICAgIDEwNTAgIWRlZmF1bHQ7XG4kemluZGV4LXBvcG92ZXI6ICAgICAgICAgICAgICAgICAgICAxMDYwICFkZWZhdWx0O1xuJHppbmRleC10b29sdGlwOiAgICAgICAgICAgICAgICAgICAgMTA3MCAhZGVmYXVsdDtcblxuXG4vLyBOYXZzXG5cbiRuYXYtbGluay1wYWRkaW5nLXk6ICAgICAgICAgICAgICAgIC41cmVtICFkZWZhdWx0O1xuJG5hdi1saW5rLXBhZGRpbmcteDogICAgICAgICAgICAgICAgMXJlbSAhZGVmYXVsdDtcbiRuYXYtbGluay1kaXNhYmxlZC1jb2xvcjogICAgICAgICAgICRncmF5LTYwMCAhZGVmYXVsdDtcblxuJG5hdi10YWJzLWJvcmRlci1jb2xvcjogICAgICAgICAgICAgJGdyYXktMzAwICFkZWZhdWx0O1xuJG5hdi10YWJzLWJvcmRlci13aWR0aDogICAgICAgICAgICAgJGJvcmRlci13aWR0aCAhZGVmYXVsdDtcbiRuYXYtdGFicy1ib3JkZXItcmFkaXVzOiAgICAgICAgICAgICRib3JkZXItcmFkaXVzICFkZWZhdWx0O1xuJG5hdi10YWJzLWxpbmstaG92ZXItYm9yZGVyLWNvbG9yOiAgJGdyYXktMjAwICRncmF5LTIwMCAkbmF2LXRhYnMtYm9yZGVyLWNvbG9yICFkZWZhdWx0O1xuJG5hdi10YWJzLWxpbmstYWN0aXZlLWNvbG9yOiAgICAgICAgJGdyYXktNzAwICFkZWZhdWx0O1xuJG5hdi10YWJzLWxpbmstYWN0aXZlLWJnOiAgICAgICAgICAgJGJvZHktYmcgIWRlZmF1bHQ7XG4kbmF2LXRhYnMtbGluay1hY3RpdmUtYm9yZGVyLWNvbG9yOiAkZ3JheS0zMDAgJGdyYXktMzAwICRuYXYtdGFicy1saW5rLWFjdGl2ZS1iZyAhZGVmYXVsdDtcblxuJG5hdi1waWxscy1ib3JkZXItcmFkaXVzOiAgICAgICAgICAgJGJvcmRlci1yYWRpdXMgIWRlZmF1bHQ7XG4kbmF2LXBpbGxzLWxpbmstYWN0aXZlLWNvbG9yOiAgICAgICAkY29tcG9uZW50LWFjdGl2ZS1jb2xvciAhZGVmYXVsdDtcbiRuYXYtcGlsbHMtbGluay1hY3RpdmUtYmc6ICAgICAgICAgICRjb21wb25lbnQtYWN0aXZlLWJnICFkZWZhdWx0O1xuXG4kbmF2LWRpdmlkZXItY29sb3I6ICAgICAgICAgICAgICAgICAkZ3JheS0yMDAgIWRlZmF1bHQ7XG4kbmF2LWRpdmlkZXItbWFyZ2luLXk6ICAgICAgICAgICAgICAkc3BhY2VyIC8gMiAhZGVmYXVsdDtcblxuXG4vLyBOYXZiYXJcblxuJG5hdmJhci1wYWRkaW5nLXk6ICAgICAgICAgICAgICAgICAgJHNwYWNlciAvIDIgIWRlZmF1bHQ7XG4kbmF2YmFyLXBhZGRpbmcteDogICAgICAgICAgICAgICAgICAkc3BhY2VyICFkZWZhdWx0O1xuXG4kbmF2YmFyLW5hdi1saW5rLXBhZGRpbmcteDogICAgICAgICAuNXJlbSAhZGVmYXVsdDtcblxuJG5hdmJhci1icmFuZC1mb250LXNpemU6ICAgICAgICAgICAgJGZvbnQtc2l6ZS1sZyAhZGVmYXVsdDtcbi8vIENvbXB1dGUgdGhlIG5hdmJhci1icmFuZCBwYWRkaW5nLXkgc28gdGhlIG5hdmJhci1icmFuZCB3aWxsIGhhdmUgdGhlIHNhbWUgaGVpZ2h0IGFzIG5hdmJhci10ZXh0IGFuZCBuYXYtbGlua1xuJG5hdi1saW5rLWhlaWdodDogICAgICAgICAgICAgICAgICAgJGZvbnQtc2l6ZS1iYXNlICogJGxpbmUtaGVpZ2h0LWJhc2UgKyAkbmF2LWxpbmstcGFkZGluZy15ICogMiAhZGVmYXVsdDtcbiRuYXZiYXItYnJhbmQtaGVpZ2h0OiAgICAgICAgICAgICAgICRuYXZiYXItYnJhbmQtZm9udC1zaXplICogJGxpbmUtaGVpZ2h0LWJhc2UgIWRlZmF1bHQ7XG4kbmF2YmFyLWJyYW5kLXBhZGRpbmcteTogICAgICAgICAgICAoJG5hdi1saW5rLWhlaWdodCAtICRuYXZiYXItYnJhbmQtaGVpZ2h0KSAvIDIgIWRlZmF1bHQ7XG5cbiRuYXZiYXItdG9nZ2xlci1wYWRkaW5nLXk6ICAgICAgICAgIC4yNXJlbSAhZGVmYXVsdDtcbiRuYXZiYXItdG9nZ2xlci1wYWRkaW5nLXg6ICAgICAgICAgIC43NXJlbSAhZGVmYXVsdDtcbiRuYXZiYXItdG9nZ2xlci1mb250LXNpemU6ICAgICAgICAgICRmb250LXNpemUtbGcgIWRlZmF1bHQ7XG4kbmF2YmFyLXRvZ2dsZXItYm9yZGVyLXJhZGl1czogICAgICAkYnRuLWJvcmRlci1yYWRpdXMgIWRlZmF1bHQ7XG5cbiRuYXZiYXItZGFyay1jb2xvcjogICAgICAgICAgICAgICAgIHJnYmEoJHdoaXRlLCAuNSkgIWRlZmF1bHQ7XG4kbmF2YmFyLWRhcmstaG92ZXItY29sb3I6ICAgICAgICAgICByZ2JhKCR3aGl0ZSwgLjc1KSAhZGVmYXVsdDtcbiRuYXZiYXItZGFyay1hY3RpdmUtY29sb3I6ICAgICAgICAgICR3aGl0ZSAhZGVmYXVsdDtcbiRuYXZiYXItZGFyay1kaXNhYmxlZC1jb2xvcjogICAgICAgIHJnYmEoJHdoaXRlLCAuMjUpICFkZWZhdWx0O1xuJG5hdmJhci1kYXJrLXRvZ2dsZXItaWNvbi1iZzogICAgICAgdXJsKFwiZGF0YTppbWFnZS9zdmcreG1sLDxzdmcgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJyB3aWR0aD0nMzAnIGhlaWdodD0nMzAnIHZpZXdCb3g9JzAgMCAzMCAzMCc+PHBhdGggc3Ryb2tlPScjeyRuYXZiYXItZGFyay1jb2xvcn0nIHN0cm9rZS1saW5lY2FwPSdyb3VuZCcgc3Ryb2tlLW1pdGVybGltaXQ9JzEwJyBzdHJva2Utd2lkdGg9JzInIGQ9J000IDdoMjJNNCAxNWgyMk00IDIzaDIyJy8+PC9zdmc+XCIpICFkZWZhdWx0O1xuJG5hdmJhci1kYXJrLXRvZ2dsZXItYm9yZGVyLWNvbG9yOiAgcmdiYSgkd2hpdGUsIC4xKSAhZGVmYXVsdDtcblxuJG5hdmJhci1saWdodC1jb2xvcjogICAgICAgICAgICAgICAgcmdiYSgkYmxhY2ssIC41KSAhZGVmYXVsdDtcbiRuYXZiYXItbGlnaHQtaG92ZXItY29sb3I6ICAgICAgICAgIHJnYmEoJGJsYWNrLCAuNykgIWRlZmF1bHQ7XG4kbmF2YmFyLWxpZ2h0LWFjdGl2ZS1jb2xvcjogICAgICAgICByZ2JhKCRibGFjaywgLjkpICFkZWZhdWx0O1xuJG5hdmJhci1saWdodC1kaXNhYmxlZC1jb2xvcjogICAgICAgcmdiYSgkYmxhY2ssIC4zKSAhZGVmYXVsdDtcbiRuYXZiYXItbGlnaHQtdG9nZ2xlci1pY29uLWJnOiAgICAgIHVybChcImRhdGE6aW1hZ2Uvc3ZnK3htbCw8c3ZnIHhtbG5zPSdodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2Zycgd2lkdGg9JzMwJyBoZWlnaHQ9JzMwJyB2aWV3Qm94PScwIDAgMzAgMzAnPjxwYXRoIHN0cm9rZT0nI3skbmF2YmFyLWxpZ2h0LWNvbG9yfScgc3Ryb2tlLWxpbmVjYXA9J3JvdW5kJyBzdHJva2UtbWl0ZXJsaW1pdD0nMTAnIHN0cm9rZS13aWR0aD0nMicgZD0nTTQgN2gyMk00IDE1aDIyTTQgMjNoMjInLz48L3N2Zz5cIikgIWRlZmF1bHQ7XG4kbmF2YmFyLWxpZ2h0LXRvZ2dsZXItYm9yZGVyLWNvbG9yOiByZ2JhKCRibGFjaywgLjEpICFkZWZhdWx0O1xuXG4kbmF2YmFyLWxpZ2h0LWJyYW5kLWNvbG9yOiAgICAgICAgICAgICAgICAkbmF2YmFyLWxpZ2h0LWFjdGl2ZS1jb2xvciAhZGVmYXVsdDtcbiRuYXZiYXItbGlnaHQtYnJhbmQtaG92ZXItY29sb3I6ICAgICAgICAgICRuYXZiYXItbGlnaHQtYWN0aXZlLWNvbG9yICFkZWZhdWx0O1xuJG5hdmJhci1kYXJrLWJyYW5kLWNvbG9yOiAgICAgICAgICAgICAgICAgJG5hdmJhci1kYXJrLWFjdGl2ZS1jb2xvciAhZGVmYXVsdDtcbiRuYXZiYXItZGFyay1icmFuZC1ob3Zlci1jb2xvcjogICAgICAgICAgICRuYXZiYXItZGFyay1hY3RpdmUtY29sb3IgIWRlZmF1bHQ7XG5cblxuLy8gRHJvcGRvd25zXG4vL1xuLy8gRHJvcGRvd24gbWVudSBjb250YWluZXIgYW5kIGNvbnRlbnRzLlxuXG4kZHJvcGRvd24tbWluLXdpZHRoOiAgICAgICAgICAgICAgICAxMHJlbSAhZGVmYXVsdDtcbiRkcm9wZG93bi1wYWRkaW5nLXk6ICAgICAgICAgICAgICAgIC41cmVtICFkZWZhdWx0O1xuJGRyb3Bkb3duLXNwYWNlcjogICAgICAgICAgICAgICAgICAgLjEyNXJlbSAhZGVmYXVsdDtcbiRkcm9wZG93bi1mb250LXNpemU6ICAgICAgICAgICAgICAgICRmb250LXNpemUtYmFzZSAhZGVmYXVsdDtcbiRkcm9wZG93bi1jb2xvcjogICAgICAgICAgICAgICAgICAgICRib2R5LWNvbG9yICFkZWZhdWx0O1xuJGRyb3Bkb3duLWJnOiAgICAgICAgICAgICAgICAgICAgICAgJHdoaXRlICFkZWZhdWx0O1xuJGRyb3Bkb3duLWJvcmRlci1jb2xvcjogICAgICAgICAgICAgcmdiYSgkYmxhY2ssIC4xNSkgIWRlZmF1bHQ7XG4kZHJvcGRvd24tYm9yZGVyLXJhZGl1czogICAgICAgICAgICAkYm9yZGVyLXJhZGl1cyAhZGVmYXVsdDtcbiRkcm9wZG93bi1ib3JkZXItd2lkdGg6ICAgICAgICAgICAgICRib3JkZXItd2lkdGggIWRlZmF1bHQ7XG4kZHJvcGRvd24taW5uZXItYm9yZGVyLXJhZGl1czogICAgICBzdWJ0cmFjdCgkZHJvcGRvd24tYm9yZGVyLXJhZGl1cywgJGRyb3Bkb3duLWJvcmRlci13aWR0aCkgIWRlZmF1bHQ7XG4kZHJvcGRvd24tZGl2aWRlci1iZzogICAgICAgICAgICAgICAkZ3JheS0yMDAgIWRlZmF1bHQ7XG4kZHJvcGRvd24tZGl2aWRlci1tYXJnaW4teTogICAgICAgICAkbmF2LWRpdmlkZXItbWFyZ2luLXkgIWRlZmF1bHQ7XG4kZHJvcGRvd24tYm94LXNoYWRvdzogICAgICAgICAgICAgICAwIC41cmVtIDFyZW0gcmdiYSgkYmxhY2ssIC4xNzUpICFkZWZhdWx0O1xuXG4kZHJvcGRvd24tbGluay1jb2xvcjogICAgICAgICAgICAgICAkZ3JheS05MDAgIWRlZmF1bHQ7XG4kZHJvcGRvd24tbGluay1ob3Zlci1jb2xvcjogICAgICAgICBkYXJrZW4oJGdyYXktOTAwLCA1JSkgIWRlZmF1bHQ7XG4kZHJvcGRvd24tbGluay1ob3Zlci1iZzogICAgICAgICAgICAkZ3JheS0xMDAgIWRlZmF1bHQ7XG5cbiRkcm9wZG93bi1saW5rLWFjdGl2ZS1jb2xvcjogICAgICAgICRjb21wb25lbnQtYWN0aXZlLWNvbG9yICFkZWZhdWx0O1xuJGRyb3Bkb3duLWxpbmstYWN0aXZlLWJnOiAgICAgICAgICAgJGNvbXBvbmVudC1hY3RpdmUtYmcgIWRlZmF1bHQ7XG5cbiRkcm9wZG93bi1saW5rLWRpc2FibGVkLWNvbG9yOiAgICAgICRncmF5LTYwMCAhZGVmYXVsdDtcblxuJGRyb3Bkb3duLWl0ZW0tcGFkZGluZy15OiAgICAgICAgICAgLjI1cmVtICFkZWZhdWx0O1xuJGRyb3Bkb3duLWl0ZW0tcGFkZGluZy14OiAgICAgICAgICAgMS41cmVtICFkZWZhdWx0O1xuXG4kZHJvcGRvd24taGVhZGVyLWNvbG9yOiAgICAgICAgICAgICAkZ3JheS02MDAgIWRlZmF1bHQ7XG4kZHJvcGRvd24taGVhZGVyLXBhZGRpbmc6ICAgICAgICAgICAkZHJvcGRvd24tcGFkZGluZy15ICRkcm9wZG93bi1pdGVtLXBhZGRpbmcteCAhZGVmYXVsdDtcblxuXG4vLyBQYWdpbmF0aW9uXG5cbiRwYWdpbmF0aW9uLXBhZGRpbmcteTogICAgICAgICAgICAgIC41cmVtICFkZWZhdWx0O1xuJHBhZ2luYXRpb24tcGFkZGluZy14OiAgICAgICAgICAgICAgLjc1cmVtICFkZWZhdWx0O1xuJHBhZ2luYXRpb24tcGFkZGluZy15LXNtOiAgICAgICAgICAgLjI1cmVtICFkZWZhdWx0O1xuJHBhZ2luYXRpb24tcGFkZGluZy14LXNtOiAgICAgICAgICAgLjVyZW0gIWRlZmF1bHQ7XG4kcGFnaW5hdGlvbi1wYWRkaW5nLXktbGc6ICAgICAgICAgICAuNzVyZW0gIWRlZmF1bHQ7XG4kcGFnaW5hdGlvbi1wYWRkaW5nLXgtbGc6ICAgICAgICAgICAxLjVyZW0gIWRlZmF1bHQ7XG4kcGFnaW5hdGlvbi1saW5lLWhlaWdodDogICAgICAgICAgICAxLjI1ICFkZWZhdWx0O1xuXG4kcGFnaW5hdGlvbi1jb2xvcjogICAgICAgICAgICAgICAgICAkbGluay1jb2xvciAhZGVmYXVsdDtcbiRwYWdpbmF0aW9uLWJnOiAgICAgICAgICAgICAgICAgICAgICR3aGl0ZSAhZGVmYXVsdDtcbiRwYWdpbmF0aW9uLWJvcmRlci13aWR0aDogICAgICAgICAgICRib3JkZXItd2lkdGggIWRlZmF1bHQ7XG4kcGFnaW5hdGlvbi1ib3JkZXItY29sb3I6ICAgICAgICAgICAkZ3JheS0zMDAgIWRlZmF1bHQ7XG5cbiRwYWdpbmF0aW9uLWZvY3VzLWJveC1zaGFkb3c6ICAgICAgICRpbnB1dC1idG4tZm9jdXMtYm94LXNoYWRvdyAhZGVmYXVsdDtcbiRwYWdpbmF0aW9uLWZvY3VzLW91dGxpbmU6ICAgICAgICAgIDAgIWRlZmF1bHQ7XG5cbiRwYWdpbmF0aW9uLWhvdmVyLWNvbG9yOiAgICAgICAgICAgICRsaW5rLWhvdmVyLWNvbG9yICFkZWZhdWx0O1xuJHBhZ2luYXRpb24taG92ZXItYmc6ICAgICAgICAgICAgICAgJGdyYXktMjAwICFkZWZhdWx0O1xuJHBhZ2luYXRpb24taG92ZXItYm9yZGVyLWNvbG9yOiAgICAgJGdyYXktMzAwICFkZWZhdWx0O1xuXG4kcGFnaW5hdGlvbi1hY3RpdmUtY29sb3I6ICAgICAgICAgICAkY29tcG9uZW50LWFjdGl2ZS1jb2xvciAhZGVmYXVsdDtcbiRwYWdpbmF0aW9uLWFjdGl2ZS1iZzogICAgICAgICAgICAgICRjb21wb25lbnQtYWN0aXZlLWJnICFkZWZhdWx0O1xuJHBhZ2luYXRpb24tYWN0aXZlLWJvcmRlci1jb2xvcjogICAgJHBhZ2luYXRpb24tYWN0aXZlLWJnICFkZWZhdWx0O1xuXG4kcGFnaW5hdGlvbi1kaXNhYmxlZC1jb2xvcjogICAgICAgICAkZ3JheS02MDAgIWRlZmF1bHQ7XG4kcGFnaW5hdGlvbi1kaXNhYmxlZC1iZzogICAgICAgICAgICAkd2hpdGUgIWRlZmF1bHQ7XG4kcGFnaW5hdGlvbi1kaXNhYmxlZC1ib3JkZXItY29sb3I6ICAkZ3JheS0zMDAgIWRlZmF1bHQ7XG5cblxuLy8gSnVtYm90cm9uXG5cbiRqdW1ib3Ryb24tcGFkZGluZzogICAgICAgICAgICAgICAgIDJyZW0gIWRlZmF1bHQ7XG4kanVtYm90cm9uLWNvbG9yOiAgICAgICAgICAgICAgICAgICBudWxsICFkZWZhdWx0O1xuJGp1bWJvdHJvbi1iZzogICAgICAgICAgICAgICAgICAgICAgJGdyYXktMjAwICFkZWZhdWx0O1xuXG5cbi8vIENhcmRzXG5cbiRjYXJkLXNwYWNlci15OiAgICAgICAgICAgICAgICAgICAgIC43NXJlbSAhZGVmYXVsdDtcbiRjYXJkLXNwYWNlci14OiAgICAgICAgICAgICAgICAgICAgIDEuMjVyZW0gIWRlZmF1bHQ7XG4kY2FyZC1ib3JkZXItd2lkdGg6ICAgICAgICAgICAgICAgICAkYm9yZGVyLXdpZHRoICFkZWZhdWx0O1xuJGNhcmQtYm9yZGVyLXJhZGl1czogICAgICAgICAgICAgICAgJGJvcmRlci1yYWRpdXMgIWRlZmF1bHQ7XG4kY2FyZC1ib3JkZXItY29sb3I6ICAgICAgICAgICAgICAgICByZ2JhKCRibGFjaywgLjEyNSkgIWRlZmF1bHQ7XG4kY2FyZC1pbm5lci1ib3JkZXItcmFkaXVzOiAgICAgICAgICBzdWJ0cmFjdCgkY2FyZC1ib3JkZXItcmFkaXVzLCAkY2FyZC1ib3JkZXItd2lkdGgpICFkZWZhdWx0O1xuJGNhcmQtY2FwLWJnOiAgICAgICAgICAgICAgICAgICAgICAgcmdiYSgkYmxhY2ssIC4wMykgIWRlZmF1bHQ7XG4kY2FyZC1jYXAtY29sb3I6ICAgICAgICAgICAgICAgICAgICBudWxsICFkZWZhdWx0O1xuJGNhcmQtaGVpZ2h0OiAgICAgICAgICAgICAgICAgICAgICAgbnVsbCAhZGVmYXVsdDtcbiRjYXJkLWNvbG9yOiAgICAgICAgICAgICAgICAgICAgICAgIG51bGwgIWRlZmF1bHQ7XG4kY2FyZC1iZzogICAgICAgICAgICAgICAgICAgICAgICAgICAkd2hpdGUgIWRlZmF1bHQ7XG5cbiRjYXJkLWltZy1vdmVybGF5LXBhZGRpbmc6ICAgICAgICAgIDEuMjVyZW0gIWRlZmF1bHQ7XG5cbiRjYXJkLWdyb3VwLW1hcmdpbjogICAgICAgICAgICAgICAgICRncmlkLWd1dHRlci13aWR0aCAvIDIgIWRlZmF1bHQ7XG4kY2FyZC1kZWNrLW1hcmdpbjogICAgICAgICAgICAgICAgICAkY2FyZC1ncm91cC1tYXJnaW4gIWRlZmF1bHQ7XG5cbiRjYXJkLWNvbHVtbnMtY291bnQ6ICAgICAgICAgICAgICAgIDMgIWRlZmF1bHQ7XG4kY2FyZC1jb2x1bW5zLWdhcDogICAgICAgICAgICAgICAgICAxLjI1cmVtICFkZWZhdWx0O1xuJGNhcmQtY29sdW1ucy1tYXJnaW46ICAgICAgICAgICAgICAgJGNhcmQtc3BhY2VyLXkgIWRlZmF1bHQ7XG5cblxuLy8gVG9vbHRpcHNcblxuJHRvb2x0aXAtZm9udC1zaXplOiAgICAgICAgICAgICAgICAgJGZvbnQtc2l6ZS1zbSAhZGVmYXVsdDtcbiR0b29sdGlwLW1heC13aWR0aDogICAgICAgICAgICAgICAgIDIwMHB4ICFkZWZhdWx0O1xuJHRvb2x0aXAtY29sb3I6ICAgICAgICAgICAgICAgICAgICAgJHdoaXRlICFkZWZhdWx0O1xuJHRvb2x0aXAtYmc6ICAgICAgICAgICAgICAgICAgICAgICAgJGJsYWNrICFkZWZhdWx0O1xuJHRvb2x0aXAtYm9yZGVyLXJhZGl1czogICAgICAgICAgICAgJGJvcmRlci1yYWRpdXMgIWRlZmF1bHQ7XG4kdG9vbHRpcC1vcGFjaXR5OiAgICAgICAgICAgICAgICAgICAuOSAhZGVmYXVsdDtcbiR0b29sdGlwLXBhZGRpbmcteTogICAgICAgICAgICAgICAgIC4yNXJlbSAhZGVmYXVsdDtcbiR0b29sdGlwLXBhZGRpbmcteDogICAgICAgICAgICAgICAgIC41cmVtICFkZWZhdWx0O1xuJHRvb2x0aXAtbWFyZ2luOiAgICAgICAgICAgICAgICAgICAgMCAhZGVmYXVsdDtcblxuJHRvb2x0aXAtYXJyb3ctd2lkdGg6ICAgICAgICAgICAgICAgLjhyZW0gIWRlZmF1bHQ7XG4kdG9vbHRpcC1hcnJvdy1oZWlnaHQ6ICAgICAgICAgICAgICAuNHJlbSAhZGVmYXVsdDtcbiR0b29sdGlwLWFycm93LWNvbG9yOiAgICAgICAgICAgICAgICR0b29sdGlwLWJnICFkZWZhdWx0O1xuXG4vLyBGb3JtIHRvb2x0aXBzIG11c3QgY29tZSBhZnRlciByZWd1bGFyIHRvb2x0aXBzXG4kZm9ybS1mZWVkYmFjay10b29sdGlwLXBhZGRpbmcteTogICAgICR0b29sdGlwLXBhZGRpbmcteSAhZGVmYXVsdDtcbiRmb3JtLWZlZWRiYWNrLXRvb2x0aXAtcGFkZGluZy14OiAgICAgJHRvb2x0aXAtcGFkZGluZy14ICFkZWZhdWx0O1xuJGZvcm0tZmVlZGJhY2stdG9vbHRpcC1mb250LXNpemU6ICAgICAkdG9vbHRpcC1mb250LXNpemUgIWRlZmF1bHQ7XG4kZm9ybS1mZWVkYmFjay10b29sdGlwLWxpbmUtaGVpZ2h0OiAgICRsaW5lLWhlaWdodC1iYXNlICFkZWZhdWx0O1xuJGZvcm0tZmVlZGJhY2stdG9vbHRpcC1vcGFjaXR5OiAgICAgICAkdG9vbHRpcC1vcGFjaXR5ICFkZWZhdWx0O1xuJGZvcm0tZmVlZGJhY2stdG9vbHRpcC1ib3JkZXItcmFkaXVzOiAkdG9vbHRpcC1ib3JkZXItcmFkaXVzICFkZWZhdWx0O1xuXG5cbi8vIFBvcG92ZXJzXG5cbiRwb3BvdmVyLWZvbnQtc2l6ZTogICAgICAgICAgICAgICAgICRmb250LXNpemUtc20gIWRlZmF1bHQ7XG4kcG9wb3Zlci1iZzogICAgICAgICAgICAgICAgICAgICAgICAkd2hpdGUgIWRlZmF1bHQ7XG4kcG9wb3Zlci1tYXgtd2lkdGg6ICAgICAgICAgICAgICAgICAyNzZweCAhZGVmYXVsdDtcbiRwb3BvdmVyLWJvcmRlci13aWR0aDogICAgICAgICAgICAgICRib3JkZXItd2lkdGggIWRlZmF1bHQ7XG4kcG9wb3Zlci1ib3JkZXItY29sb3I6ICAgICAgICAgICAgICByZ2JhKCRibGFjaywgLjIpICFkZWZhdWx0O1xuJHBvcG92ZXItYm9yZGVyLXJhZGl1czogICAgICAgICAgICAgJGJvcmRlci1yYWRpdXMtbGcgIWRlZmF1bHQ7XG4kcG9wb3Zlci1pbm5lci1ib3JkZXItcmFkaXVzOiAgICAgICBzdWJ0cmFjdCgkcG9wb3Zlci1ib3JkZXItcmFkaXVzLCAkcG9wb3Zlci1ib3JkZXItd2lkdGgpICFkZWZhdWx0O1xuJHBvcG92ZXItYm94LXNoYWRvdzogICAgICAgICAgICAgICAgMCAuMjVyZW0gLjVyZW0gcmdiYSgkYmxhY2ssIC4yKSAhZGVmYXVsdDtcblxuJHBvcG92ZXItaGVhZGVyLWJnOiAgICAgICAgICAgICAgICAgZGFya2VuKCRwb3BvdmVyLWJnLCAzJSkgIWRlZmF1bHQ7XG4kcG9wb3Zlci1oZWFkZXItY29sb3I6ICAgICAgICAgICAgICAkaGVhZGluZ3MtY29sb3IgIWRlZmF1bHQ7XG4kcG9wb3Zlci1oZWFkZXItcGFkZGluZy15OiAgICAgICAgICAuNXJlbSAhZGVmYXVsdDtcbiRwb3BvdmVyLWhlYWRlci1wYWRkaW5nLXg6ICAgICAgICAgIC43NXJlbSAhZGVmYXVsdDtcblxuJHBvcG92ZXItYm9keS1jb2xvcjogICAgICAgICAgICAgICAgJGJvZHktY29sb3IgIWRlZmF1bHQ7XG4kcG9wb3Zlci1ib2R5LXBhZGRpbmcteTogICAgICAgICAgICAkcG9wb3Zlci1oZWFkZXItcGFkZGluZy15ICFkZWZhdWx0O1xuJHBvcG92ZXItYm9keS1wYWRkaW5nLXg6ICAgICAgICAgICAgJHBvcG92ZXItaGVhZGVyLXBhZGRpbmcteCAhZGVmYXVsdDtcblxuJHBvcG92ZXItYXJyb3ctd2lkdGg6ICAgICAgICAgICAgICAgMXJlbSAhZGVmYXVsdDtcbiRwb3BvdmVyLWFycm93LWhlaWdodDogICAgICAgICAgICAgIC41cmVtICFkZWZhdWx0O1xuJHBvcG92ZXItYXJyb3ctY29sb3I6ICAgICAgICAgICAgICAgJHBvcG92ZXItYmcgIWRlZmF1bHQ7XG5cbiRwb3BvdmVyLWFycm93LW91dGVyLWNvbG9yOiAgICAgICAgIGZhZGUtaW4oJHBvcG92ZXItYm9yZGVyLWNvbG9yLCAuMDUpICFkZWZhdWx0O1xuXG5cbi8vIFRvYXN0c1xuXG4kdG9hc3QtbWF4LXdpZHRoOiAgICAgICAgICAgICAgICAgICAzNTBweCAhZGVmYXVsdDtcbiR0b2FzdC1wYWRkaW5nLXg6ICAgICAgICAgICAgICAgICAgIC43NXJlbSAhZGVmYXVsdDtcbiR0b2FzdC1wYWRkaW5nLXk6ICAgICAgICAgICAgICAgICAgIC4yNXJlbSAhZGVmYXVsdDtcbiR0b2FzdC1mb250LXNpemU6ICAgICAgICAgICAgICAgICAgIC44NzVyZW0gIWRlZmF1bHQ7XG4kdG9hc3QtY29sb3I6ICAgICAgICAgICAgICAgICAgICAgICBudWxsICFkZWZhdWx0O1xuJHRvYXN0LWJhY2tncm91bmQtY29sb3I6ICAgICAgICAgICAgcmdiYSgkd2hpdGUsIC44NSkgIWRlZmF1bHQ7XG4kdG9hc3QtYm9yZGVyLXdpZHRoOiAgICAgICAgICAgICAgICAxcHggIWRlZmF1bHQ7XG4kdG9hc3QtYm9yZGVyLWNvbG9yOiAgICAgICAgICAgICAgICByZ2JhKDAsIDAsIDAsIC4xKSAhZGVmYXVsdDtcbiR0b2FzdC1ib3JkZXItcmFkaXVzOiAgICAgICAgICAgICAgIC4yNXJlbSAhZGVmYXVsdDtcbiR0b2FzdC1ib3gtc2hhZG93OiAgICAgICAgICAgICAgICAgIDAgLjI1cmVtIC43NXJlbSByZ2JhKCRibGFjaywgLjEpICFkZWZhdWx0O1xuXG4kdG9hc3QtaGVhZGVyLWNvbG9yOiAgICAgICAgICAgICAgICAkZ3JheS02MDAgIWRlZmF1bHQ7XG4kdG9hc3QtaGVhZGVyLWJhY2tncm91bmQtY29sb3I6ICAgICByZ2JhKCR3aGl0ZSwgLjg1KSAhZGVmYXVsdDtcbiR0b2FzdC1oZWFkZXItYm9yZGVyLWNvbG9yOiAgICAgICAgIHJnYmEoMCwgMCwgMCwgLjA1KSAhZGVmYXVsdDtcblxuXG4vLyBCYWRnZXNcblxuJGJhZGdlLWZvbnQtc2l6ZTogICAgICAgICAgICAgICAgICAgNzUlICFkZWZhdWx0O1xuJGJhZGdlLWZvbnQtd2VpZ2h0OiAgICAgICAgICAgICAgICAgJGZvbnQtd2VpZ2h0LWJvbGQgIWRlZmF1bHQ7XG4kYmFkZ2UtcGFkZGluZy15OiAgICAgICAgICAgICAgICAgICAuMjVlbSAhZGVmYXVsdDtcbiRiYWRnZS1wYWRkaW5nLXg6ICAgICAgICAgICAgICAgICAgIC40ZW0gIWRlZmF1bHQ7XG4kYmFkZ2UtYm9yZGVyLXJhZGl1czogICAgICAgICAgICAgICAkYm9yZGVyLXJhZGl1cyAhZGVmYXVsdDtcblxuJGJhZGdlLXRyYW5zaXRpb246ICAgICAgICAgICAgICAgICAgJGJ0bi10cmFuc2l0aW9uICFkZWZhdWx0O1xuJGJhZGdlLWZvY3VzLXdpZHRoOiAgICAgICAgICAgICAgICAgJGlucHV0LWJ0bi1mb2N1cy13aWR0aCAhZGVmYXVsdDtcblxuJGJhZGdlLXBpbGwtcGFkZGluZy14OiAgICAgICAgICAgICAgLjZlbSAhZGVmYXVsdDtcbi8vIFVzZSBhIGhpZ2hlciB0aGFuIG5vcm1hbCB2YWx1ZSB0byBlbnN1cmUgY29tcGxldGVseSByb3VuZGVkIGVkZ2VzIHdoZW5cbi8vIGN1c3RvbWl6aW5nIHBhZGRpbmcgb3IgZm9udC1zaXplIG9uIGxhYmVscy5cbiRiYWRnZS1waWxsLWJvcmRlci1yYWRpdXM6ICAgICAgICAgIDEwcmVtICFkZWZhdWx0O1xuXG5cbi8vIE1vZGFsc1xuXG4vLyBQYWRkaW5nIGFwcGxpZWQgdG8gdGhlIG1vZGFsIGJvZHlcbiRtb2RhbC1pbm5lci1wYWRkaW5nOiAgICAgICAgICAgICAgIDFyZW0gIWRlZmF1bHQ7XG5cbi8vIE1hcmdpbiBiZXR3ZWVuIGVsZW1lbnRzIGluIGZvb3RlciwgbXVzdCBiZSBsb3dlciB0aGFuIG9yIGVxdWFsIHRvIDIgKiAkbW9kYWwtaW5uZXItcGFkZGluZ1xuJG1vZGFsLWZvb3Rlci1tYXJnaW4tYmV0d2VlbjogICAgICAgLjVyZW0gIWRlZmF1bHQ7XG5cbiRtb2RhbC1kaWFsb2ctbWFyZ2luOiAgICAgICAgICAgICAgIC41cmVtICFkZWZhdWx0O1xuJG1vZGFsLWRpYWxvZy1tYXJnaW4teS1zbS11cDogICAgICAgMS43NXJlbSAhZGVmYXVsdDtcblxuJG1vZGFsLXRpdGxlLWxpbmUtaGVpZ2h0OiAgICAgICAgICAgJGxpbmUtaGVpZ2h0LWJhc2UgIWRlZmF1bHQ7XG5cbiRtb2RhbC1jb250ZW50LWNvbG9yOiAgICAgICAgICAgICAgIG51bGwgIWRlZmF1bHQ7XG4kbW9kYWwtY29udGVudC1iZzogICAgICAgICAgICAgICAgICAkd2hpdGUgIWRlZmF1bHQ7XG4kbW9kYWwtY29udGVudC1ib3JkZXItY29sb3I6ICAgICAgICByZ2JhKCRibGFjaywgLjIpICFkZWZhdWx0O1xuJG1vZGFsLWNvbnRlbnQtYm9yZGVyLXdpZHRoOiAgICAgICAgJGJvcmRlci13aWR0aCAhZGVmYXVsdDtcbiRtb2RhbC1jb250ZW50LWJvcmRlci1yYWRpdXM6ICAgICAgICRib3JkZXItcmFkaXVzLWxnICFkZWZhdWx0O1xuJG1vZGFsLWNvbnRlbnQtaW5uZXItYm9yZGVyLXJhZGl1czogc3VidHJhY3QoJG1vZGFsLWNvbnRlbnQtYm9yZGVyLXJhZGl1cywgJG1vZGFsLWNvbnRlbnQtYm9yZGVyLXdpZHRoKSAhZGVmYXVsdDtcbiRtb2RhbC1jb250ZW50LWJveC1zaGFkb3cteHM6ICAgICAgIDAgLjI1cmVtIC41cmVtIHJnYmEoJGJsYWNrLCAuNSkgIWRlZmF1bHQ7XG4kbW9kYWwtY29udGVudC1ib3gtc2hhZG93LXNtLXVwOiAgICAwIC41cmVtIDFyZW0gcmdiYSgkYmxhY2ssIC41KSAhZGVmYXVsdDtcblxuJG1vZGFsLWJhY2tkcm9wLWJnOiAgICAgICAgICAgICAgICAgJGJsYWNrICFkZWZhdWx0O1xuJG1vZGFsLWJhY2tkcm9wLW9wYWNpdHk6ICAgICAgICAgICAgLjUgIWRlZmF1bHQ7XG4kbW9kYWwtaGVhZGVyLWJvcmRlci1jb2xvcjogICAgICAgICAkYm9yZGVyLWNvbG9yICFkZWZhdWx0O1xuJG1vZGFsLWZvb3Rlci1ib3JkZXItY29sb3I6ICAgICAgICAgJG1vZGFsLWhlYWRlci1ib3JkZXItY29sb3IgIWRlZmF1bHQ7XG4kbW9kYWwtaGVhZGVyLWJvcmRlci13aWR0aDogICAgICAgICAkbW9kYWwtY29udGVudC1ib3JkZXItd2lkdGggIWRlZmF1bHQ7XG4kbW9kYWwtZm9vdGVyLWJvcmRlci13aWR0aDogICAgICAgICAkbW9kYWwtaGVhZGVyLWJvcmRlci13aWR0aCAhZGVmYXVsdDtcbiRtb2RhbC1oZWFkZXItcGFkZGluZy15OiAgICAgICAgICAgIDFyZW0gIWRlZmF1bHQ7XG4kbW9kYWwtaGVhZGVyLXBhZGRpbmcteDogICAgICAgICAgICAxcmVtICFkZWZhdWx0O1xuJG1vZGFsLWhlYWRlci1wYWRkaW5nOiAgICAgICAgICAgICAgJG1vZGFsLWhlYWRlci1wYWRkaW5nLXkgJG1vZGFsLWhlYWRlci1wYWRkaW5nLXggIWRlZmF1bHQ7IC8vIEtlZXAgdGhpcyBmb3IgYmFja3dhcmRzIGNvbXBhdGliaWxpdHlcblxuJG1vZGFsLXhsOiAgICAgICAgICAgICAgICAgICAgICAgICAgMTE0MHB4ICFkZWZhdWx0O1xuJG1vZGFsLWxnOiAgICAgICAgICAgICAgICAgICAgICAgICAgODAwcHggIWRlZmF1bHQ7XG4kbW9kYWwtbWQ6ICAgICAgICAgICAgICAgICAgICAgICAgICA1MDBweCAhZGVmYXVsdDtcbiRtb2RhbC1zbTogICAgICAgICAgICAgICAgICAgICAgICAgIDMwMHB4ICFkZWZhdWx0O1xuXG4kbW9kYWwtZmFkZS10cmFuc2Zvcm06ICAgICAgICAgICAgICB0cmFuc2xhdGUoMCwgLTUwcHgpICFkZWZhdWx0O1xuJG1vZGFsLXNob3ctdHJhbnNmb3JtOiAgICAgICAgICAgICAgbm9uZSAhZGVmYXVsdDtcbiRtb2RhbC10cmFuc2l0aW9uOiAgICAgICAgICAgICAgICAgIHRyYW5zZm9ybSAuM3MgZWFzZS1vdXQgIWRlZmF1bHQ7XG4kbW9kYWwtc2NhbGUtdHJhbnNmb3JtOiAgICAgICAgICAgICBzY2FsZSgxLjAyKSAhZGVmYXVsdDtcblxuXG4vLyBBbGVydHNcbi8vXG4vLyBEZWZpbmUgYWxlcnQgY29sb3JzLCBib3JkZXIgcmFkaXVzLCBhbmQgcGFkZGluZy5cblxuJGFsZXJ0LXBhZGRpbmcteTogICAgICAgICAgICAgICAgICAgLjc1cmVtICFkZWZhdWx0O1xuJGFsZXJ0LXBhZGRpbmcteDogICAgICAgICAgICAgICAgICAgMS4yNXJlbSAhZGVmYXVsdDtcbiRhbGVydC1tYXJnaW4tYm90dG9tOiAgICAgICAgICAgICAgIDFyZW0gIWRlZmF1bHQ7XG4kYWxlcnQtYm9yZGVyLXJhZGl1czogICAgICAgICAgICAgICAkYm9yZGVyLXJhZGl1cyAhZGVmYXVsdDtcbiRhbGVydC1saW5rLWZvbnQtd2VpZ2h0OiAgICAgICAgICAgICRmb250LXdlaWdodC1ib2xkICFkZWZhdWx0O1xuJGFsZXJ0LWJvcmRlci13aWR0aDogICAgICAgICAgICAgICAgJGJvcmRlci13aWR0aCAhZGVmYXVsdDtcblxuJGFsZXJ0LWJnLWxldmVsOiAgICAgICAgICAgICAgICAgICAgLTEwICFkZWZhdWx0O1xuJGFsZXJ0LWJvcmRlci1sZXZlbDogICAgICAgICAgICAgICAgLTkgIWRlZmF1bHQ7XG4kYWxlcnQtY29sb3ItbGV2ZWw6ICAgICAgICAgICAgICAgICA2ICFkZWZhdWx0O1xuXG5cbi8vIFByb2dyZXNzIGJhcnNcblxuJHByb2dyZXNzLWhlaWdodDogICAgICAgICAgICAgICAgICAgMXJlbSAhZGVmYXVsdDtcbiRwcm9ncmVzcy1mb250LXNpemU6ICAgICAgICAgICAgICAgICRmb250LXNpemUtYmFzZSAqIC43NSAhZGVmYXVsdDtcbiRwcm9ncmVzcy1iZzogICAgICAgICAgICAgICAgICAgICAgICRncmF5LTIwMCAhZGVmYXVsdDtcbiRwcm9ncmVzcy1ib3JkZXItcmFkaXVzOiAgICAgICAgICAgICRib3JkZXItcmFkaXVzICFkZWZhdWx0O1xuJHByb2dyZXNzLWJveC1zaGFkb3c6ICAgICAgICAgICAgICAgaW5zZXQgMCAuMXJlbSAuMXJlbSByZ2JhKCRibGFjaywgLjEpICFkZWZhdWx0O1xuJHByb2dyZXNzLWJhci1jb2xvcjogICAgICAgICAgICAgICAgJHdoaXRlICFkZWZhdWx0O1xuJHByb2dyZXNzLWJhci1iZzogICAgICAgICAgICAgICAgICAgdGhlbWUtY29sb3IoXCJwcmltYXJ5XCIpICFkZWZhdWx0O1xuJHByb2dyZXNzLWJhci1hbmltYXRpb24tdGltaW5nOiAgICAgMXMgbGluZWFyIGluZmluaXRlICFkZWZhdWx0O1xuJHByb2dyZXNzLWJhci10cmFuc2l0aW9uOiAgICAgICAgICAgd2lkdGggLjZzIGVhc2UgIWRlZmF1bHQ7XG5cblxuLy8gTGlzdCBncm91cFxuXG4kbGlzdC1ncm91cC1jb2xvcjogICAgICAgICAgICAgICAgICBudWxsICFkZWZhdWx0O1xuJGxpc3QtZ3JvdXAtYmc6ICAgICAgICAgICAgICAgICAgICAgJHdoaXRlICFkZWZhdWx0O1xuJGxpc3QtZ3JvdXAtYm9yZGVyLWNvbG9yOiAgICAgICAgICAgcmdiYSgkYmxhY2ssIC4xMjUpICFkZWZhdWx0O1xuJGxpc3QtZ3JvdXAtYm9yZGVyLXdpZHRoOiAgICAgICAgICAgJGJvcmRlci13aWR0aCAhZGVmYXVsdDtcbiRsaXN0LWdyb3VwLWJvcmRlci1yYWRpdXM6ICAgICAgICAgICRib3JkZXItcmFkaXVzICFkZWZhdWx0O1xuXG4kbGlzdC1ncm91cC1pdGVtLXBhZGRpbmcteTogICAgICAgICAuNzVyZW0gIWRlZmF1bHQ7XG4kbGlzdC1ncm91cC1pdGVtLXBhZGRpbmcteDogICAgICAgICAxLjI1cmVtICFkZWZhdWx0O1xuXG4kbGlzdC1ncm91cC1ob3Zlci1iZzogICAgICAgICAgICAgICAkZ3JheS0xMDAgIWRlZmF1bHQ7XG4kbGlzdC1ncm91cC1hY3RpdmUtY29sb3I6ICAgICAgICAgICAkY29tcG9uZW50LWFjdGl2ZS1jb2xvciAhZGVmYXVsdDtcbiRsaXN0LWdyb3VwLWFjdGl2ZS1iZzogICAgICAgICAgICAgICRjb21wb25lbnQtYWN0aXZlLWJnICFkZWZhdWx0O1xuJGxpc3QtZ3JvdXAtYWN0aXZlLWJvcmRlci1jb2xvcjogICAgJGxpc3QtZ3JvdXAtYWN0aXZlLWJnICFkZWZhdWx0O1xuXG4kbGlzdC1ncm91cC1kaXNhYmxlZC1jb2xvcjogICAgICAgICAkZ3JheS02MDAgIWRlZmF1bHQ7XG4kbGlzdC1ncm91cC1kaXNhYmxlZC1iZzogICAgICAgICAgICAkbGlzdC1ncm91cC1iZyAhZGVmYXVsdDtcblxuJGxpc3QtZ3JvdXAtYWN0aW9uLWNvbG9yOiAgICAgICAgICAgJGdyYXktNzAwICFkZWZhdWx0O1xuJGxpc3QtZ3JvdXAtYWN0aW9uLWhvdmVyLWNvbG9yOiAgICAgJGxpc3QtZ3JvdXAtYWN0aW9uLWNvbG9yICFkZWZhdWx0O1xuXG4kbGlzdC1ncm91cC1hY3Rpb24tYWN0aXZlLWNvbG9yOiAgICAkYm9keS1jb2xvciAhZGVmYXVsdDtcbiRsaXN0LWdyb3VwLWFjdGlvbi1hY3RpdmUtYmc6ICAgICAgICRncmF5LTIwMCAhZGVmYXVsdDtcblxuXG4vLyBJbWFnZSB0aHVtYm5haWxzXG5cbiR0aHVtYm5haWwtcGFkZGluZzogICAgICAgICAgICAgICAgIC4yNXJlbSAhZGVmYXVsdDtcbiR0aHVtYm5haWwtYmc6ICAgICAgICAgICAgICAgICAgICAgICRib2R5LWJnICFkZWZhdWx0O1xuJHRodW1ibmFpbC1ib3JkZXItd2lkdGg6ICAgICAgICAgICAgJGJvcmRlci13aWR0aCAhZGVmYXVsdDtcbiR0aHVtYm5haWwtYm9yZGVyLWNvbG9yOiAgICAgICAgICAgICRncmF5LTMwMCAhZGVmYXVsdDtcbiR0aHVtYm5haWwtYm9yZGVyLXJhZGl1czogICAgICAgICAgICRib3JkZXItcmFkaXVzICFkZWZhdWx0O1xuJHRodW1ibmFpbC1ib3gtc2hhZG93OiAgICAgICAgICAgICAgMCAxcHggMnB4IHJnYmEoJGJsYWNrLCAuMDc1KSAhZGVmYXVsdDtcblxuXG4vLyBGaWd1cmVzXG5cbiRmaWd1cmUtY2FwdGlvbi1mb250LXNpemU6ICAgICAgICAgIDkwJSAhZGVmYXVsdDtcbiRmaWd1cmUtY2FwdGlvbi1jb2xvcjogICAgICAgICAgICAgICRncmF5LTYwMCAhZGVmYXVsdDtcblxuXG4vLyBCcmVhZGNydW1ic1xuXG4kYnJlYWRjcnVtYi1mb250LXNpemU6ICAgICAgICAgICAgICBudWxsICFkZWZhdWx0O1xuXG4kYnJlYWRjcnVtYi1wYWRkaW5nLXk6ICAgICAgICAgICAgICAuNzVyZW0gIWRlZmF1bHQ7XG4kYnJlYWRjcnVtYi1wYWRkaW5nLXg6ICAgICAgICAgICAgICAxcmVtICFkZWZhdWx0O1xuJGJyZWFkY3J1bWItaXRlbS1wYWRkaW5nOiAgICAgICAgICAgLjVyZW0gIWRlZmF1bHQ7XG5cbiRicmVhZGNydW1iLW1hcmdpbi1ib3R0b206ICAgICAgICAgIDFyZW0gIWRlZmF1bHQ7XG5cbiRicmVhZGNydW1iLWJnOiAgICAgICAgICAgICAgICAgICAgICRncmF5LTIwMCAhZGVmYXVsdDtcbiRicmVhZGNydW1iLWRpdmlkZXItY29sb3I6ICAgICAgICAgICRncmF5LTYwMCAhZGVmYXVsdDtcbiRicmVhZGNydW1iLWFjdGl2ZS1jb2xvcjogICAgICAgICAgICRncmF5LTYwMCAhZGVmYXVsdDtcbiRicmVhZGNydW1iLWRpdmlkZXI6ICAgICAgICAgICAgICAgIHF1b3RlKFwiL1wiKSAhZGVmYXVsdDtcblxuJGJyZWFkY3J1bWItYm9yZGVyLXJhZGl1czogICAgICAgICAgJGJvcmRlci1yYWRpdXMgIWRlZmF1bHQ7XG5cblxuLy8gQ2Fyb3VzZWxcblxuJGNhcm91c2VsLWNvbnRyb2wtY29sb3I6ICAgICAgICAgICAgICR3aGl0ZSAhZGVmYXVsdDtcbiRjYXJvdXNlbC1jb250cm9sLXdpZHRoOiAgICAgICAgICAgICAxNSUgIWRlZmF1bHQ7XG4kY2Fyb3VzZWwtY29udHJvbC1vcGFjaXR5OiAgICAgICAgICAgLjUgIWRlZmF1bHQ7XG4kY2Fyb3VzZWwtY29udHJvbC1ob3Zlci1vcGFjaXR5OiAgICAgLjkgIWRlZmF1bHQ7XG4kY2Fyb3VzZWwtY29udHJvbC10cmFuc2l0aW9uOiAgICAgICAgb3BhY2l0eSAuMTVzIGVhc2UgIWRlZmF1bHQ7XG5cbiRjYXJvdXNlbC1pbmRpY2F0b3Itd2lkdGg6ICAgICAgICAgICAzMHB4ICFkZWZhdWx0O1xuJGNhcm91c2VsLWluZGljYXRvci1oZWlnaHQ6ICAgICAgICAgIDNweCAhZGVmYXVsdDtcbiRjYXJvdXNlbC1pbmRpY2F0b3ItaGl0LWFyZWEtaGVpZ2h0OiAxMHB4ICFkZWZhdWx0O1xuJGNhcm91c2VsLWluZGljYXRvci1zcGFjZXI6ICAgICAgICAgIDNweCAhZGVmYXVsdDtcbiRjYXJvdXNlbC1pbmRpY2F0b3ItYWN0aXZlLWJnOiAgICAgICAkd2hpdGUgIWRlZmF1bHQ7XG4kY2Fyb3VzZWwtaW5kaWNhdG9yLXRyYW5zaXRpb246ICAgICAgb3BhY2l0eSAuNnMgZWFzZSAhZGVmYXVsdDtcblxuJGNhcm91c2VsLWNhcHRpb24td2lkdGg6ICAgICAgICAgICAgIDcwJSAhZGVmYXVsdDtcbiRjYXJvdXNlbC1jYXB0aW9uLWNvbG9yOiAgICAgICAgICAgICAkd2hpdGUgIWRlZmF1bHQ7XG5cbiRjYXJvdXNlbC1jb250cm9sLWljb24td2lkdGg6ICAgICAgICAyMHB4ICFkZWZhdWx0O1xuXG4kY2Fyb3VzZWwtY29udHJvbC1wcmV2LWljb24tYmc6ICAgICAgdXJsKFwiZGF0YTppbWFnZS9zdmcreG1sLDxzdmcgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJyBmaWxsPScjeyRjYXJvdXNlbC1jb250cm9sLWNvbG9yfScgd2lkdGg9JzgnIGhlaWdodD0nOCcgdmlld0JveD0nMCAwIDggOCc+PHBhdGggZD0nTTUuMjUgMGwtNCA0IDQgNCAxLjUtMS41TDQuMjUgNGwyLjUtMi41TDUuMjUgMHonLz48L3N2Zz5cIikgIWRlZmF1bHQ7XG4kY2Fyb3VzZWwtY29udHJvbC1uZXh0LWljb24tYmc6ICAgICAgdXJsKFwiZGF0YTppbWFnZS9zdmcreG1sLDxzdmcgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJyBmaWxsPScjeyRjYXJvdXNlbC1jb250cm9sLWNvbG9yfScgd2lkdGg9JzgnIGhlaWdodD0nOCcgdmlld0JveD0nMCAwIDggOCc+PHBhdGggZD0nTTIuNzUgMGwtMS41IDEuNUwzLjc1IDRsLTIuNSAyLjVMMi43NSA4bDQtNC00LTR6Jy8+PC9zdmc+XCIpICFkZWZhdWx0O1xuXG4kY2Fyb3VzZWwtdHJhbnNpdGlvbi1kdXJhdGlvbjogICAgICAgLjZzICFkZWZhdWx0O1xuJGNhcm91c2VsLXRyYW5zaXRpb246ICAgICAgICAgICAgICAgIHRyYW5zZm9ybSAkY2Fyb3VzZWwtdHJhbnNpdGlvbi1kdXJhdGlvbiBlYXNlLWluLW91dCAhZGVmYXVsdDsgLy8gRGVmaW5lIHRyYW5zZm9ybSB0cmFuc2l0aW9uIGZpcnN0IGlmIHVzaW5nIG11bHRpcGxlIHRyYW5zaXRpb25zIChlLmcuLCBgdHJhbnNmb3JtIDJzIGVhc2UsIG9wYWNpdHkgLjVzIGVhc2Utb3V0YClcblxuXG4vLyBTcGlubmVyc1xuXG4kc3Bpbm5lci13aWR0aDogICAgICAgICAycmVtICFkZWZhdWx0O1xuJHNwaW5uZXItaGVpZ2h0OiAgICAgICAgJHNwaW5uZXItd2lkdGggIWRlZmF1bHQ7XG4kc3Bpbm5lci1ib3JkZXItd2lkdGg6ICAuMjVlbSAhZGVmYXVsdDtcblxuJHNwaW5uZXItd2lkdGgtc206ICAgICAgICAxcmVtICFkZWZhdWx0O1xuJHNwaW5uZXItaGVpZ2h0LXNtOiAgICAgICAkc3Bpbm5lci13aWR0aC1zbSAhZGVmYXVsdDtcbiRzcGlubmVyLWJvcmRlci13aWR0aC1zbTogLjJlbSAhZGVmYXVsdDtcblxuXG4vLyBDbG9zZVxuXG4kY2xvc2UtZm9udC1zaXplOiAgICAgICAgICAgICAgICAgICAkZm9udC1zaXplLWJhc2UgKiAxLjUgIWRlZmF1bHQ7XG4kY2xvc2UtZm9udC13ZWlnaHQ6ICAgICAgICAgICAgICAgICAkZm9udC13ZWlnaHQtYm9sZCAhZGVmYXVsdDtcbiRjbG9zZS1jb2xvcjogICAgICAgICAgICAgICAgICAgICAgICRibGFjayAhZGVmYXVsdDtcbiRjbG9zZS10ZXh0LXNoYWRvdzogICAgICAgICAgICAgICAgIDAgMXB4IDAgJHdoaXRlICFkZWZhdWx0O1xuXG5cbi8vIENvZGVcblxuJGNvZGUtZm9udC1zaXplOiAgICAgICAgICAgICAgICAgICAgODcuNSUgIWRlZmF1bHQ7XG4kY29kZS1jb2xvcjogICAgICAgICAgICAgICAgICAgICAgICAkcGluayAhZGVmYXVsdDtcblxuJGtiZC1wYWRkaW5nLXk6ICAgICAgICAgICAgICAgICAgICAgLjJyZW0gIWRlZmF1bHQ7XG4ka2JkLXBhZGRpbmcteDogICAgICAgICAgICAgICAgICAgICAuNHJlbSAhZGVmYXVsdDtcbiRrYmQtZm9udC1zaXplOiAgICAgICAgICAgICAgICAgICAgICRjb2RlLWZvbnQtc2l6ZSAhZGVmYXVsdDtcbiRrYmQtY29sb3I6ICAgICAgICAgICAgICAgICAgICAgICAgICR3aGl0ZSAhZGVmYXVsdDtcbiRrYmQtYmc6ICAgICAgICAgICAgICAgICAgICAgICAgICAgICRncmF5LTkwMCAhZGVmYXVsdDtcblxuJHByZS1jb2xvcjogICAgICAgICAgICAgICAgICAgICAgICAgJGdyYXktOTAwICFkZWZhdWx0O1xuJHByZS1zY3JvbGxhYmxlLW1heC1oZWlnaHQ6ICAgICAgICAgMzQwcHggIWRlZmF1bHQ7XG5cblxuLy8gVXRpbGl0aWVzXG5cbiRkaXNwbGF5czogbm9uZSwgaW5saW5lLCBpbmxpbmUtYmxvY2ssIGJsb2NrLCB0YWJsZSwgdGFibGUtcm93LCB0YWJsZS1jZWxsLCBmbGV4LCBpbmxpbmUtZmxleCAhZGVmYXVsdDtcbiRvdmVyZmxvd3M6IGF1dG8sIGhpZGRlbiAhZGVmYXVsdDtcbiRwb3NpdGlvbnM6IHN0YXRpYywgcmVsYXRpdmUsIGFic29sdXRlLCBmaXhlZCwgc3RpY2t5ICFkZWZhdWx0O1xuJHVzZXItc2VsZWN0czogYWxsLCBhdXRvLCBub25lICFkZWZhdWx0O1xuXG5cbi8vIFByaW50aW5nXG5cbiRwcmludC1wYWdlLXNpemU6ICAgICAgICAgICAgICAgICAgIGEzICFkZWZhdWx0O1xuJHByaW50LWJvZHktbWluLXdpZHRoOiAgICAgICAgICAgICAgbWFwLWdldCgkZ3JpZC1icmVha3BvaW50cywgXCJsZ1wiKSAhZGVmYXVsdDtcbiIsIi8vIEJvb3RzdHJhcCB2YXJpYWJsZXNcblxuJGZvbnQtZmFtaWx5LXNhbnMtc2VyaWY6IFwiT3BlbiBTYW5zXCIsIC1hcHBsZS1zeXN0ZW0sIEJsaW5rTWFjU3lzdGVtRm9udCwgXCJTZWdvZSBVSVwiLCBSb2JvdG8sIFwiSGVsdmV0aWNhIE5ldWVcIiwgQXJpYWwsIHNhbnMtc2VyaWYsIFwiQXBwbGUgQ29sb3IgRW1vamlcIiwgXCJTZWdvZSBVSSBFbW9qaVwiLCBcIlNlZ29lIFVJIFN5bWJvbFwiLCBcIk5vdG8gQ29sb3IgRW1vamlcIiAhZGVmYXVsdDtcbiRib2R5LWNvbG9yOiAjNTE1MTUxICFkZWZhdWx0O1xuXG4kcHJpbWFyeTogICAgICAgIzNGODRGQyAhZGVmYXVsdDtcbiRzZWNvbmRhcnk6ICAgICAjNzI3Rjk0ICFkZWZhdWx0O1xuJHN1Y2Nlc3M6ICAgICAgICMxREFCNDcgIWRlZmF1bHQ7XG4kaW5mbzogICAgICAgICAgIzhBM0ZGQyAhZGVmYXVsdDtcbiR3YXJuaW5nOiAgICAgICAjRkNBRTNGICFkZWZhdWx0O1xuJGRhbmdlcjogICAgICAgICNGQzQxM0YgIWRlZmF1bHQ7XG4kbGlnaHQ6ICAgICAgICAgI2Y4ZjlmYSAhZGVmYXVsdDtcbiRkYXJrOiAgICAgICAgICAjMUUyMzJEICFkZWZhdWx0O1xuXG4kYm9yZGVyLXJhZGl1czogMCAhZGVmYXVsdDtcblxuLy8gRWFzaW9uIHZhcmlhYmxlc1xuJGxvZ28tY29sb3I6ICM1NzYxNzcgIWRlZmF1bHQ7XG4kdG9vbGJhci1iZzogI0YzRjNGMyAhZGVmYXVsdDtcblxuJGRhc2gtbmF2LWRhcmstY29sb3I6ICNmZmYgIWRlZmF1bHQ7XG4kZGFzaC1uYXYtZGFyay1ob3Zlci1iZzogcmdiYSgjZmZmLCAuMDQpICFkZWZhdWx0O1xuJGRhc2gtbmF2LWRhcmstYmc6ICMxODFGMkMgIWRlZmF1bHQ7XG5cbiRzZWFyY2hib3gtaW5wdXQtcGxhY2Vob2xkZXI6ICM4YjhiOGIgIWRlZmF1bHQ7XG5cbiIsIi8vIHN0eWxlbGludC1kaXNhYmxlIHByb3BlcnR5LWJsYWNrbGlzdCwgc2Nzcy9kb2xsYXItdmFyaWFibGUtZGVmYXVsdFxuXG4vLyBTQ1NTIFJGUyBtaXhpblxuLy9cbi8vIEF1dG9tYXRlZCBmb250LXJlc2l6aW5nXG4vL1xuLy8gU2VlIGh0dHBzOi8vZ2l0aHViLmNvbS90d2JzL3Jmc1xuXG4vLyBDb25maWd1cmF0aW9uXG5cbi8vIEJhc2UgZm9udCBzaXplXG4kcmZzLWJhc2UtZm9udC1zaXplOiAxLjI1cmVtICFkZWZhdWx0O1xuJHJmcy1mb250LXNpemUtdW5pdDogcmVtICFkZWZhdWx0O1xuXG4vLyBCcmVha3BvaW50IGF0IHdoZXJlIGZvbnQtc2l6ZSBzdGFydHMgZGVjcmVhc2luZyBpZiBzY3JlZW4gd2lkdGggaXMgc21hbGxlclxuJHJmcy1icmVha3BvaW50OiAxMjAwcHggIWRlZmF1bHQ7XG4kcmZzLWJyZWFrcG9pbnQtdW5pdDogcHggIWRlZmF1bHQ7XG5cbi8vIFJlc2l6ZSBmb250LXNpemUgYmFzZWQgb24gc2NyZWVuIGhlaWdodCBhbmQgd2lkdGhcbiRyZnMtdHdvLWRpbWVuc2lvbmFsOiBmYWxzZSAhZGVmYXVsdDtcblxuLy8gRmFjdG9yIG9mIGRlY3JlYXNlXG4kcmZzLWZhY3RvcjogMTAgIWRlZmF1bHQ7XG5cbkBpZiB0eXBlLW9mKCRyZnMtZmFjdG9yKSAhPSBcIm51bWJlclwiIG9yICRyZnMtZmFjdG9yIDw9IDEge1xuICBAZXJyb3IgXCJgI3skcmZzLWZhY3Rvcn1gIGlzIG5vdCBhIHZhbGlkICAkcmZzLWZhY3RvciwgaXQgbXVzdCBiZSBncmVhdGVyIHRoYW4gMS5cIjtcbn1cblxuLy8gR2VuZXJhdGUgZW5hYmxlIG9yIGRpc2FibGUgY2xhc3Nlcy4gUG9zc2liaWxpdGllczogZmFsc2UsIFwiZW5hYmxlXCIgb3IgXCJkaXNhYmxlXCJcbiRyZnMtY2xhc3M6IGZhbHNlICFkZWZhdWx0O1xuXG4vLyAxIHJlbSA9ICRyZnMtcmVtLXZhbHVlIHB4XG4kcmZzLXJlbS12YWx1ZTogMTYgIWRlZmF1bHQ7XG5cbi8vIFNhZmFyaSBpZnJhbWUgcmVzaXplIGJ1ZzogaHR0cHM6Ly9naXRodWIuY29tL3R3YnMvcmZzL2lzc3Vlcy8xNFxuJHJmcy1zYWZhcmktaWZyYW1lLXJlc2l6ZS1idWctZml4OiBmYWxzZSAhZGVmYXVsdDtcblxuLy8gRGlzYWJsZSBSRlMgYnkgc2V0dGluZyAkZW5hYmxlLXJlc3BvbnNpdmUtZm9udC1zaXplcyB0byBmYWxzZVxuJGVuYWJsZS1yZXNwb25zaXZlLWZvbnQtc2l6ZXM6IHRydWUgIWRlZmF1bHQ7XG5cbi8vIENhY2hlICRyZnMtYmFzZS1mb250LXNpemUgdW5pdFxuJHJmcy1iYXNlLWZvbnQtc2l6ZS11bml0OiB1bml0KCRyZnMtYmFzZS1mb250LXNpemUpO1xuXG4vLyBSZW1vdmUgcHgtdW5pdCBmcm9tICRyZnMtYmFzZS1mb250LXNpemUgZm9yIGNhbGN1bGF0aW9uc1xuQGlmICRyZnMtYmFzZS1mb250LXNpemUtdW5pdCA9PSBcInB4XCIge1xuICAkcmZzLWJhc2UtZm9udC1zaXplOiAkcmZzLWJhc2UtZm9udC1zaXplIC8gKCRyZnMtYmFzZS1mb250LXNpemUgKiAwICsgMSk7XG59XG5AZWxzZSBpZiAkcmZzLWJhc2UtZm9udC1zaXplLXVuaXQgPT0gXCJyZW1cIiB7XG4gICRyZnMtYmFzZS1mb250LXNpemU6ICRyZnMtYmFzZS1mb250LXNpemUgLyAoJHJmcy1iYXNlLWZvbnQtc2l6ZSAqIDAgKyAxIC8gJHJmcy1yZW0tdmFsdWUpO1xufVxuXG4vLyBDYWNoZSAkcmZzLWJyZWFrcG9pbnQgdW5pdCB0byBwcmV2ZW50IG11bHRpcGxlIGNhbGxzXG4kcmZzLWJyZWFrcG9pbnQtdW5pdC1jYWNoZTogdW5pdCgkcmZzLWJyZWFrcG9pbnQpO1xuXG4vLyBSZW1vdmUgdW5pdCBmcm9tICRyZnMtYnJlYWtwb2ludCBmb3IgY2FsY3VsYXRpb25zXG5AaWYgJHJmcy1icmVha3BvaW50LXVuaXQtY2FjaGUgPT0gXCJweFwiIHtcbiAgJHJmcy1icmVha3BvaW50OiAkcmZzLWJyZWFrcG9pbnQgLyAoJHJmcy1icmVha3BvaW50ICogMCArIDEpO1xufVxuQGVsc2UgaWYgJHJmcy1icmVha3BvaW50LXVuaXQtY2FjaGUgPT0gXCJyZW1cIiBvciAkcmZzLWJyZWFrcG9pbnQtdW5pdC1jYWNoZSA9PSBcImVtXCIge1xuICAkcmZzLWJyZWFrcG9pbnQ6ICRyZnMtYnJlYWtwb2ludCAvICgkcmZzLWJyZWFrcG9pbnQgKiAwICsgMSAvICRyZnMtcmVtLXZhbHVlKTtcbn1cblxuLy8gUmVzcG9uc2l2ZSBmb250LXNpemUgbWl4aW5cbkBtaXhpbiByZnMoJGZzLCAkaW1wb3J0YW50OiBmYWxzZSkge1xuICAvLyBDYWNoZSAkZnMgdW5pdFxuICAkZnMtdW5pdDogaWYodHlwZS1vZigkZnMpID09IFwibnVtYmVyXCIsIHVuaXQoJGZzKSwgZmFsc2UpO1xuXG4gIC8vIEFkZCAhaW1wb3J0YW50IHN1ZmZpeCBpZiBuZWVkZWRcbiAgJHJmcy1zdWZmaXg6IGlmKCRpbXBvcnRhbnQsIFwiICFpbXBvcnRhbnRcIiwgXCJcIik7XG5cbiAgLy8gSWYgJGZzIGlzbid0IGEgbnVtYmVyIChsaWtlIGluaGVyaXQpIG9yICRmcyBoYXMgYSB1bml0IChub3QgcHggb3IgcmVtLCBsaWtlIDEuNWVtKSBvciAkIGlzIDAsIGp1c3QgcHJpbnQgdGhlIHZhbHVlXG4gIEBpZiBub3QgJGZzLXVuaXQgb3IgJGZzLXVuaXQgIT0gXCJcIiBhbmQgJGZzLXVuaXQgIT0gXCJweFwiIGFuZCAkZnMtdW5pdCAhPSBcInJlbVwiIG9yICRmcyA9PSAwIHtcbiAgICBmb250LXNpemU6ICN7JGZzfSN7JHJmcy1zdWZmaXh9O1xuICB9XG4gIEBlbHNlIHtcbiAgICAvLyBWYXJpYWJsZXMgZm9yIHN0b3Jpbmcgc3RhdGljIGFuZCBmbHVpZCByZXNjYWxpbmdcbiAgICAkcmZzLXN0YXRpYzogbnVsbDtcbiAgICAkcmZzLWZsdWlkOiBudWxsO1xuXG4gICAgLy8gUmVtb3ZlIHB4LXVuaXQgZnJvbSAkZnMgZm9yIGNhbGN1bGF0aW9uc1xuICAgIEBpZiAkZnMtdW5pdCA9PSBcInB4XCIge1xuICAgICAgJGZzOiAkZnMgLyAoJGZzICogMCArIDEpO1xuICAgIH1cbiAgICBAZWxzZSBpZiAkZnMtdW5pdCA9PSBcInJlbVwiIHtcbiAgICAgICRmczogJGZzIC8gKCRmcyAqIDAgKyAxIC8gJHJmcy1yZW0tdmFsdWUpO1xuICAgIH1cblxuICAgIC8vIFNldCBkZWZhdWx0IGZvbnQtc2l6ZVxuICAgIEBpZiAkcmZzLWZvbnQtc2l6ZS11bml0ID09IHJlbSB7XG4gICAgICAkcmZzLXN0YXRpYzogI3skZnMgLyAkcmZzLXJlbS12YWx1ZX1yZW0jeyRyZnMtc3VmZml4fTtcbiAgICB9XG4gICAgQGVsc2UgaWYgJHJmcy1mb250LXNpemUtdW5pdCA9PSBweCB7XG4gICAgICAkcmZzLXN0YXRpYzogI3skZnN9cHgjeyRyZnMtc3VmZml4fTtcbiAgICB9XG4gICAgQGVsc2Uge1xuICAgICAgQGVycm9yIFwiYCN7JHJmcy1mb250LXNpemUtdW5pdH1gIGlzIG5vdCBhIHZhbGlkIHVuaXQgZm9yICRyZnMtZm9udC1zaXplLXVuaXQuIFVzZSBgcHhgIG9yIGByZW1gLlwiO1xuICAgIH1cblxuICAgIC8vIE9ubHkgYWRkIG1lZGlhIHF1ZXJ5IGlmIGZvbnQtc2l6ZSBpcyBiaWdnZXIgYXMgdGhlIG1pbmltdW0gZm9udC1zaXplXG4gICAgLy8gSWYgJHJmcy1mYWN0b3IgPT0gMSwgbm8gcmVzY2FsaW5nIHdpbGwgdGFrZSBwbGFjZVxuICAgIEBpZiAkZnMgPiAkcmZzLWJhc2UtZm9udC1zaXplIGFuZCAkZW5hYmxlLXJlc3BvbnNpdmUtZm9udC1zaXplcyB7XG4gICAgICAkbWluLXdpZHRoOiBudWxsO1xuICAgICAgJHZhcmlhYmxlLXVuaXQ6IG51bGw7XG5cbiAgICAgIC8vIENhbGN1bGF0ZSBtaW5pbXVtIGZvbnQtc2l6ZSBmb3IgZ2l2ZW4gZm9udC1zaXplXG4gICAgICAkZnMtbWluOiAkcmZzLWJhc2UtZm9udC1zaXplICsgKCRmcyAtICRyZnMtYmFzZS1mb250LXNpemUpIC8gJHJmcy1mYWN0b3I7XG5cbiAgICAgIC8vIENhbGN1bGF0ZSBkaWZmZXJlbmNlIGJldHdlZW4gZ2l2ZW4gZm9udC1zaXplIGFuZCBtaW5pbXVtIGZvbnQtc2l6ZSBmb3IgZ2l2ZW4gZm9udC1zaXplXG4gICAgICAkZnMtZGlmZjogJGZzIC0gJGZzLW1pbjtcblxuICAgICAgLy8gQmFzZSBmb250LXNpemUgZm9ybWF0dGluZ1xuICAgICAgLy8gTm8gbmVlZCB0byBjaGVjayBpZiB0aGUgdW5pdCBpcyB2YWxpZCwgYmVjYXVzZSB3ZSBkaWQgdGhhdCBiZWZvcmVcbiAgICAgICRtaW4td2lkdGg6IGlmKCRyZnMtZm9udC1zaXplLXVuaXQgPT0gcmVtLCAjeyRmcy1taW4gLyAkcmZzLXJlbS12YWx1ZX1yZW0sICN7JGZzLW1pbn1weCk7XG5cbiAgICAgIC8vIElmIHR3by1kaW1lbnNpb25hbCwgdXNlIHNtYWxsZXN0IG9mIHNjcmVlbiB3aWR0aCBhbmQgaGVpZ2h0XG4gICAgICAkdmFyaWFibGUtdW5pdDogaWYoJHJmcy10d28tZGltZW5zaW9uYWwsIHZtaW4sIHZ3KTtcblxuICAgICAgLy8gQ2FsY3VsYXRlIHRoZSB2YXJpYWJsZSB3aWR0aCBiZXR3ZWVuIDAgYW5kICRyZnMtYnJlYWtwb2ludFxuICAgICAgJHZhcmlhYmxlLXdpZHRoOiAjeyRmcy1kaWZmICogMTAwIC8gJHJmcy1icmVha3BvaW50fSN7JHZhcmlhYmxlLXVuaXR9O1xuXG4gICAgICAvLyBTZXQgdGhlIGNhbGN1bGF0ZWQgZm9udC1zaXplLlxuICAgICAgJHJmcy1mbHVpZDogY2FsYygjeyRtaW4td2lkdGh9ICsgI3skdmFyaWFibGUtd2lkdGh9KSAjeyRyZnMtc3VmZml4fTtcbiAgICB9XG5cbiAgICAvLyBSZW5kZXJpbmdcbiAgICBAaWYgJHJmcy1mbHVpZCA9PSBudWxsIHtcbiAgICAgIC8vIE9ubHkgcmVuZGVyIHN0YXRpYyBmb250LXNpemUgaWYgbm8gZmx1aWQgZm9udC1zaXplIGlzIGF2YWlsYWJsZVxuICAgICAgZm9udC1zaXplOiAkcmZzLXN0YXRpYztcbiAgICB9XG4gICAgQGVsc2Uge1xuICAgICAgJG1xLXZhbHVlOiBudWxsO1xuXG4gICAgICAvLyBSRlMgYnJlYWtwb2ludCBmb3JtYXR0aW5nXG4gICAgICBAaWYgJHJmcy1icmVha3BvaW50LXVuaXQgPT0gZW0gb3IgJHJmcy1icmVha3BvaW50LXVuaXQgPT0gcmVtIHtcbiAgICAgICAgJG1xLXZhbHVlOiAjeyRyZnMtYnJlYWtwb2ludCAvICRyZnMtcmVtLXZhbHVlfSN7JHJmcy1icmVha3BvaW50LXVuaXR9O1xuICAgICAgfVxuICAgICAgQGVsc2UgaWYgJHJmcy1icmVha3BvaW50LXVuaXQgPT0gcHgge1xuICAgICAgICAkbXEtdmFsdWU6ICN7JHJmcy1icmVha3BvaW50fXB4O1xuICAgICAgfVxuICAgICAgQGVsc2Uge1xuICAgICAgICBAZXJyb3IgXCJgI3skcmZzLWJyZWFrcG9pbnQtdW5pdH1gIGlzIG5vdCBhIHZhbGlkIHVuaXQgZm9yICRyZnMtYnJlYWtwb2ludC11bml0LiBVc2UgYHB4YCwgYGVtYCBvciBgcmVtYC5cIjtcbiAgICAgIH1cblxuICAgICAgQGlmICRyZnMtY2xhc3MgPT0gXCJkaXNhYmxlXCIge1xuICAgICAgICAvLyBBZGRpbmcgYW4gZXh0cmEgY2xhc3MgaW5jcmVhc2VzIHNwZWNpZmljaXR5LFxuICAgICAgICAvLyB3aGljaCBwcmV2ZW50cyB0aGUgbWVkaWEgcXVlcnkgdG8gb3ZlcnJpZGUgdGhlIGZvbnQgc2l6ZVxuICAgICAgICAmLFxuICAgICAgICAuZGlzYWJsZS1yZXNwb25zaXZlLWZvbnQtc2l6ZSAmLFxuICAgICAgICAmLmRpc2FibGUtcmVzcG9uc2l2ZS1mb250LXNpemUge1xuICAgICAgICAgIGZvbnQtc2l6ZTogJHJmcy1zdGF0aWM7XG4gICAgICAgIH1cbiAgICAgIH1cbiAgICAgIEBlbHNlIHtcbiAgICAgICAgZm9udC1zaXplOiAkcmZzLXN0YXRpYztcbiAgICAgIH1cblxuICAgICAgQGlmICRyZnMtdHdvLWRpbWVuc2lvbmFsIHtcbiAgICAgICAgQG1lZGlhIChtYXgtd2lkdGg6ICN7JG1xLXZhbHVlfSksIChtYXgtaGVpZ2h0OiAjeyRtcS12YWx1ZX0pIHtcbiAgICAgICAgICBAaWYgJHJmcy1jbGFzcyA9PSBcImVuYWJsZVwiIHtcbiAgICAgICAgICAgIC5lbmFibGUtcmVzcG9uc2l2ZS1mb250LXNpemUgJixcbiAgICAgICAgICAgICYuZW5hYmxlLXJlc3BvbnNpdmUtZm9udC1zaXplIHtcbiAgICAgICAgICAgICAgZm9udC1zaXplOiAkcmZzLWZsdWlkO1xuICAgICAgICAgICAgfVxuICAgICAgICAgIH1cbiAgICAgICAgICBAZWxzZSB7XG4gICAgICAgICAgICBmb250LXNpemU6ICRyZnMtZmx1aWQ7XG4gICAgICAgICAgfVxuXG4gICAgICAgICAgQGlmICRyZnMtc2FmYXJpLWlmcmFtZS1yZXNpemUtYnVnLWZpeCB7XG4gICAgICAgICAgICAvLyBzdHlsZWxpbnQtZGlzYWJsZS1uZXh0LWxpbmUgbGVuZ3RoLXplcm8tbm8tdW5pdFxuICAgICAgICAgICAgbWluLXdpZHRoOiAwdnc7XG4gICAgICAgICAgfVxuICAgICAgICB9XG4gICAgICB9XG4gICAgICBAZWxzZSB7XG4gICAgICAgIEBtZWRpYSAobWF4LXdpZHRoOiAjeyRtcS12YWx1ZX0pIHtcbiAgICAgICAgICBAaWYgJHJmcy1jbGFzcyA9PSBcImVuYWJsZVwiIHtcbiAgICAgICAgICAgIC5lbmFibGUtcmVzcG9uc2l2ZS1mb250LXNpemUgJixcbiAgICAgICAgICAgICYuZW5hYmxlLXJlc3BvbnNpdmUtZm9udC1zaXplIHtcbiAgICAgICAgICAgICAgZm9udC1zaXplOiAkcmZzLWZsdWlkO1xuICAgICAgICAgICAgfVxuICAgICAgICAgIH1cbiAgICAgICAgICBAZWxzZSB7XG4gICAgICAgICAgICBmb250LXNpemU6ICRyZnMtZmx1aWQ7XG4gICAgICAgICAgfVxuXG4gICAgICAgICAgQGlmICRyZnMtc2FmYXJpLWlmcmFtZS1yZXNpemUtYnVnLWZpeCB7XG4gICAgICAgICAgICAvLyBzdHlsZWxpbnQtZGlzYWJsZS1uZXh0LWxpbmUgbGVuZ3RoLXplcm8tbm8tdW5pdFxuICAgICAgICAgICAgbWluLXdpZHRoOiAwdnc7XG4gICAgICAgICAgfVxuICAgICAgICB9XG4gICAgICB9XG4gICAgfVxuICB9XG59XG5cbi8vIFRoZSBmb250LXNpemUgJiByZXNwb25zaXZlLWZvbnQtc2l6ZSBtaXhpbiB1c2VzIFJGUyB0byByZXNjYWxlIGZvbnQgc2l6ZXNcbkBtaXhpbiBmb250LXNpemUoJGZzLCAkaW1wb3J0YW50OiBmYWxzZSkge1xuICBAaW5jbHVkZSByZnMoJGZzLCAkaW1wb3J0YW50KTtcbn1cblxuQG1peGluIHJlc3BvbnNpdmUtZm9udC1zaXplKCRmcywgJGltcG9ydGFudDogZmFsc2UpIHtcbiAgQGluY2x1ZGUgcmZzKCRmcywgJGltcG9ydGFudCk7XG59XG4iLCIvKiFcbiAqIEJvb3RzdHJhcCB2NC41LjAgKGh0dHBzOi8vZ2V0Ym9vdHN0cmFwLmNvbS8pXG4gKiBDb3B5cmlnaHQgMjAxMS0yMDIwIFRoZSBCb290c3RyYXAgQXV0aG9yc1xuICogQ29weXJpZ2h0IDIwMTEtMjAyMCBUd2l0dGVyLCBJbmMuXG4gKiBMaWNlbnNlZCB1bmRlciBNSVQgKGh0dHBzOi8vZ2l0aHViLmNvbS90d2JzL2Jvb3RzdHJhcC9ibG9iL21hc3Rlci9MSUNFTlNFKVxuICovXG46cm9vdCB7XG4gIC0tYmx1ZTogIzAwN2JmZjtcbiAgLS1pbmRpZ286ICM2NjEwZjI7XG4gIC0tcHVycGxlOiAjNmY0MmMxO1xuICAtLXBpbms6ICNlODNlOGM7XG4gIC0tcmVkOiAjZGMzNTQ1O1xuICAtLW9yYW5nZTogI2ZkN2UxNDtcbiAgLS15ZWxsb3c6ICNmZmMxMDc7XG4gIC0tZ3JlZW46ICMyOGE3NDU7XG4gIC0tdGVhbDogIzIwYzk5NztcbiAgLS1jeWFuOiAjMTdhMmI4O1xuICAtLXdoaXRlOiAjZmZmO1xuICAtLWdyYXk6ICM2Yzc1N2Q7XG4gIC0tZ3JheS1kYXJrOiAjMzQzYTQwO1xuICAtLXByaW1hcnk6ICMzRjg0RkM7XG4gIC0tc2Vjb25kYXJ5OiAjNzI3Rjk0O1xuICAtLXN1Y2Nlc3M6ICMxREFCNDc7XG4gIC0taW5mbzogIzhBM0ZGQztcbiAgLS13YXJuaW5nOiAjRkNBRTNGO1xuICAtLWRhbmdlcjogI0ZDNDEzRjtcbiAgLS1saWdodDogI2Y4ZjlmYTtcbiAgLS1kYXJrOiAjMUUyMzJEO1xuICAtLWJyZWFrcG9pbnQteHM6IDA7XG4gIC0tYnJlYWtwb2ludC1zbTogNTc2cHg7XG4gIC0tYnJlYWtwb2ludC1tZDogNzY4cHg7XG4gIC0tYnJlYWtwb2ludC1sZzogOTkycHg7XG4gIC0tYnJlYWtwb2ludC14bDogMTIwMHB4O1xuICAtLWZvbnQtZmFtaWx5LXNhbnMtc2VyaWY6IFwiT3BlbiBTYW5zXCIsIC1hcHBsZS1zeXN0ZW0sIEJsaW5rTWFjU3lzdGVtRm9udCwgXCJTZWdvZSBVSVwiLCBSb2JvdG8sIFwiSGVsdmV0aWNhIE5ldWVcIiwgQXJpYWwsIHNhbnMtc2VyaWYsIFwiQXBwbGUgQ29sb3IgRW1vamlcIiwgXCJTZWdvZSBVSSBFbW9qaVwiLCBcIlNlZ29lIFVJIFN5bWJvbFwiLCBcIk5vdG8gQ29sb3IgRW1vamlcIjtcbiAgLS1mb250LWZhbWlseS1tb25vc3BhY2U6IFNGTW9uby1SZWd1bGFyLCBNZW5sbywgTW9uYWNvLCBDb25zb2xhcywgXCJMaWJlcmF0aW9uIE1vbm9cIiwgXCJDb3VyaWVyIE5ld1wiLCBtb25vc3BhY2U7IH1cblxuKixcbio6OmJlZm9yZSxcbio6OmFmdGVyIHtcbiAgYm94LXNpemluZzogYm9yZGVyLWJveDsgfVxuXG5odG1sIHtcbiAgZm9udC1mYW1pbHk6IHNhbnMtc2VyaWY7XG4gIGxpbmUtaGVpZ2h0OiAxLjE1O1xuICAtd2Via2l0LXRleHQtc2l6ZS1hZGp1c3Q6IDEwMCU7XG4gIC13ZWJraXQtdGFwLWhpZ2hsaWdodC1jb2xvcjogcmdiYSgwLCAwLCAwLCAwKTsgfVxuXG5hcnRpY2xlLCBhc2lkZSwgZmlnY2FwdGlvbiwgZmlndXJlLCBmb290ZXIsIGhlYWRlciwgaGdyb3VwLCBtYWluLCBuYXYsIHNlY3Rpb24ge1xuICBkaXNwbGF5OiBibG9jazsgfVxuXG5ib2R5IHtcbiAgbWFyZ2luOiAwO1xuICBmb250LWZhbWlseTogXCJPcGVuIFNhbnNcIiwgLWFwcGxlLXN5c3RlbSwgQmxpbmtNYWNTeXN0ZW1Gb250LCBcIlNlZ29lIFVJXCIsIFJvYm90bywgXCJIZWx2ZXRpY2EgTmV1ZVwiLCBBcmlhbCwgc2Fucy1zZXJpZiwgXCJBcHBsZSBDb2xvciBFbW9qaVwiLCBcIlNlZ29lIFVJIEVtb2ppXCIsIFwiU2Vnb2UgVUkgU3ltYm9sXCIsIFwiTm90byBDb2xvciBFbW9qaVwiO1xuICBmb250LXNpemU6IDFyZW07XG4gIGZvbnQtd2VpZ2h0OiA0MDA7XG4gIGxpbmUtaGVpZ2h0OiAxLjU7XG4gIGNvbG9yOiAjNTE1MTUxO1xuICB0ZXh0LWFsaWduOiBsZWZ0O1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZmZmOyB9XG5cblt0YWJpbmRleD1cIi0xXCJdOmZvY3VzOm5vdCg6Zm9jdXMtdmlzaWJsZSkge1xuICBvdXRsaW5lOiAwICFpbXBvcnRhbnQ7IH1cblxuaHIge1xuICBib3gtc2l6aW5nOiBjb250ZW50LWJveDtcbiAgaGVpZ2h0OiAwO1xuICBvdmVyZmxvdzogdmlzaWJsZTsgfVxuXG5oMSwgaDIsIGgzLCBoNCwgaDUsIGg2IHtcbiAgbWFyZ2luLXRvcDogMDtcbiAgbWFyZ2luLWJvdHRvbTogMC41cmVtOyB9XG5cbnAge1xuICBtYXJnaW4tdG9wOiAwO1xuICBtYXJnaW4tYm90dG9tOiAxcmVtOyB9XG5cbmFiYnJbdGl0bGVdLFxuYWJicltkYXRhLW9yaWdpbmFsLXRpdGxlXSB7XG4gIHRleHQtZGVjb3JhdGlvbjogdW5kZXJsaW5lO1xuICB0ZXh0LWRlY29yYXRpb246IHVuZGVybGluZSBkb3R0ZWQ7XG4gIGN1cnNvcjogaGVscDtcbiAgYm9yZGVyLWJvdHRvbTogMDtcbiAgdGV4dC1kZWNvcmF0aW9uLXNraXAtaW5rOiBub25lOyB9XG5cbmFkZHJlc3Mge1xuICBtYXJnaW4tYm90dG9tOiAxcmVtO1xuICBmb250LXN0eWxlOiBub3JtYWw7XG4gIGxpbmUtaGVpZ2h0OiBpbmhlcml0OyB9XG5cbm9sLFxudWwsXG5kbCB7XG4gIG1hcmdpbi10b3A6IDA7XG4gIG1hcmdpbi1ib3R0b206IDFyZW07IH1cblxub2wgb2wsXG51bCB1bCxcbm9sIHVsLFxudWwgb2wge1xuICBtYXJnaW4tYm90dG9tOiAwOyB9XG5cbmR0IHtcbiAgZm9udC13ZWlnaHQ6IDcwMDsgfVxuXG5kZCB7XG4gIG1hcmdpbi1ib3R0b206IC41cmVtO1xuICBtYXJnaW4tbGVmdDogMDsgfVxuXG5ibG9ja3F1b3RlIHtcbiAgbWFyZ2luOiAwIDAgMXJlbTsgfVxuXG5iLFxuc3Ryb25nIHtcbiAgZm9udC13ZWlnaHQ6IGJvbGRlcjsgfVxuXG5zbWFsbCB7XG4gIGZvbnQtc2l6ZTogODAlOyB9XG5cbnN1YixcbnN1cCB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgZm9udC1zaXplOiA3NSU7XG4gIGxpbmUtaGVpZ2h0OiAwO1xuICB2ZXJ0aWNhbC1hbGlnbjogYmFzZWxpbmU7IH1cblxuc3ViIHtcbiAgYm90dG9tOiAtLjI1ZW07IH1cblxuc3VwIHtcbiAgdG9wOiAtLjVlbTsgfVxuXG5hIHtcbiAgY29sb3I6ICMzRjg0RkM7XG4gIHRleHQtZGVjb3JhdGlvbjogbm9uZTtcbiAgYmFja2dyb3VuZC1jb2xvcjogdHJhbnNwYXJlbnQ7IH1cbiAgYTpob3ZlciB7XG4gICAgY29sb3I6ICMwNDU4ZWI7XG4gICAgdGV4dC1kZWNvcmF0aW9uOiB1bmRlcmxpbmU7IH1cblxuYTpub3QoW2hyZWZdKSB7XG4gIGNvbG9yOiBpbmhlcml0O1xuICB0ZXh0LWRlY29yYXRpb246IG5vbmU7IH1cbiAgYTpub3QoW2hyZWZdKTpob3ZlciB7XG4gICAgY29sb3I6IGluaGVyaXQ7XG4gICAgdGV4dC1kZWNvcmF0aW9uOiBub25lOyB9XG5cbnByZSxcbmNvZGUsXG5rYmQsXG5zYW1wIHtcbiAgZm9udC1mYW1pbHk6IFNGTW9uby1SZWd1bGFyLCBNZW5sbywgTW9uYWNvLCBDb25zb2xhcywgXCJMaWJlcmF0aW9uIE1vbm9cIiwgXCJDb3VyaWVyIE5ld1wiLCBtb25vc3BhY2U7XG4gIGZvbnQtc2l6ZTogMWVtOyB9XG5cbnByZSB7XG4gIG1hcmdpbi10b3A6IDA7XG4gIG1hcmdpbi1ib3R0b206IDFyZW07XG4gIG92ZXJmbG93OiBhdXRvO1xuICAtbXMtb3ZlcmZsb3ctc3R5bGU6IHNjcm9sbGJhcjsgfVxuXG5maWd1cmUge1xuICBtYXJnaW46IDAgMCAxcmVtOyB9XG5cbmltZyB7XG4gIHZlcnRpY2FsLWFsaWduOiBtaWRkbGU7XG4gIGJvcmRlci1zdHlsZTogbm9uZTsgfVxuXG5zdmcge1xuICBvdmVyZmxvdzogaGlkZGVuO1xuICB2ZXJ0aWNhbC1hbGlnbjogbWlkZGxlOyB9XG5cbnRhYmxlIHtcbiAgYm9yZGVyLWNvbGxhcHNlOiBjb2xsYXBzZTsgfVxuXG5jYXB0aW9uIHtcbiAgcGFkZGluZy10b3A6IDAuNzVyZW07XG4gIHBhZGRpbmctYm90dG9tOiAwLjc1cmVtO1xuICBjb2xvcjogIzZjNzU3ZDtcbiAgdGV4dC1hbGlnbjogbGVmdDtcbiAgY2FwdGlvbi1zaWRlOiBib3R0b207IH1cblxudGgge1xuICB0ZXh0LWFsaWduOiBpbmhlcml0OyB9XG5cbmxhYmVsIHtcbiAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICBtYXJnaW4tYm90dG9tOiAwLjVyZW07IH1cblxuYnV0dG9uIHtcbiAgYm9yZGVyLXJhZGl1czogMDsgfVxuXG5idXR0b246Zm9jdXMge1xuICBvdXRsaW5lOiAxcHggZG90dGVkO1xuICBvdXRsaW5lOiA1cHggYXV0byAtd2Via2l0LWZvY3VzLXJpbmctY29sb3I7IH1cblxuaW5wdXQsXG5idXR0b24sXG5zZWxlY3QsXG5vcHRncm91cCxcbnRleHRhcmVhIHtcbiAgbWFyZ2luOiAwO1xuICBmb250LWZhbWlseTogaW5oZXJpdDtcbiAgZm9udC1zaXplOiBpbmhlcml0O1xuICBsaW5lLWhlaWdodDogaW5oZXJpdDsgfVxuXG5idXR0b24sXG5pbnB1dCB7XG4gIG92ZXJmbG93OiB2aXNpYmxlOyB9XG5cbmJ1dHRvbixcbnNlbGVjdCB7XG4gIHRleHQtdHJhbnNmb3JtOiBub25lOyB9XG5cbltyb2xlPVwiYnV0dG9uXCJdIHtcbiAgY3Vyc29yOiBwb2ludGVyOyB9XG5cbnNlbGVjdCB7XG4gIHdvcmQtd3JhcDogbm9ybWFsOyB9XG5cbmJ1dHRvbixcblt0eXBlPVwiYnV0dG9uXCJdLFxuW3R5cGU9XCJyZXNldFwiXSxcblt0eXBlPVwic3VibWl0XCJdIHtcbiAgLXdlYmtpdC1hcHBlYXJhbmNlOiBidXR0b247IH1cblxuYnV0dG9uOm5vdCg6ZGlzYWJsZWQpLFxuW3R5cGU9XCJidXR0b25cIl06bm90KDpkaXNhYmxlZCksXG5bdHlwZT1cInJlc2V0XCJdOm5vdCg6ZGlzYWJsZWQpLFxuW3R5cGU9XCJzdWJtaXRcIl06bm90KDpkaXNhYmxlZCkge1xuICBjdXJzb3I6IHBvaW50ZXI7IH1cblxuYnV0dG9uOjotbW96LWZvY3VzLWlubmVyLFxuW3R5cGU9XCJidXR0b25cIl06Oi1tb3otZm9jdXMtaW5uZXIsXG5bdHlwZT1cInJlc2V0XCJdOjotbW96LWZvY3VzLWlubmVyLFxuW3R5cGU9XCJzdWJtaXRcIl06Oi1tb3otZm9jdXMtaW5uZXIge1xuICBwYWRkaW5nOiAwO1xuICBib3JkZXItc3R5bGU6IG5vbmU7IH1cblxuaW5wdXRbdHlwZT1cInJhZGlvXCJdLFxuaW5wdXRbdHlwZT1cImNoZWNrYm94XCJdIHtcbiAgYm94LXNpemluZzogYm9yZGVyLWJveDtcbiAgcGFkZGluZzogMDsgfVxuXG50ZXh0YXJlYSB7XG4gIG92ZXJmbG93OiBhdXRvO1xuICByZXNpemU6IHZlcnRpY2FsOyB9XG5cbmZpZWxkc2V0IHtcbiAgbWluLXdpZHRoOiAwO1xuICBwYWRkaW5nOiAwO1xuICBtYXJnaW46IDA7XG4gIGJvcmRlcjogMDsgfVxuXG5sZWdlbmQge1xuICBkaXNwbGF5OiBibG9jaztcbiAgd2lkdGg6IDEwMCU7XG4gIG1heC13aWR0aDogMTAwJTtcbiAgcGFkZGluZzogMDtcbiAgbWFyZ2luLWJvdHRvbTogLjVyZW07XG4gIGZvbnQtc2l6ZTogMS41cmVtO1xuICBsaW5lLWhlaWdodDogaW5oZXJpdDtcbiAgY29sb3I6IGluaGVyaXQ7XG4gIHdoaXRlLXNwYWNlOiBub3JtYWw7IH1cblxucHJvZ3Jlc3Mge1xuICB2ZXJ0aWNhbC1hbGlnbjogYmFzZWxpbmU7IH1cblxuW3R5cGU9XCJudW1iZXJcIl06Oi13ZWJraXQtaW5uZXItc3Bpbi1idXR0b24sXG5bdHlwZT1cIm51bWJlclwiXTo6LXdlYmtpdC1vdXRlci1zcGluLWJ1dHRvbiB7XG4gIGhlaWdodDogYXV0bzsgfVxuXG5bdHlwZT1cInNlYXJjaFwiXSB7XG4gIG91dGxpbmUtb2Zmc2V0OiAtMnB4O1xuICAtd2Via2l0LWFwcGVhcmFuY2U6IG5vbmU7IH1cblxuW3R5cGU9XCJzZWFyY2hcIl06Oi13ZWJraXQtc2VhcmNoLWRlY29yYXRpb24ge1xuICAtd2Via2l0LWFwcGVhcmFuY2U6IG5vbmU7IH1cblxuOjotd2Via2l0LWZpbGUtdXBsb2FkLWJ1dHRvbiB7XG4gIGZvbnQ6IGluaGVyaXQ7XG4gIC13ZWJraXQtYXBwZWFyYW5jZTogYnV0dG9uOyB9XG5cbm91dHB1dCB7XG4gIGRpc3BsYXk6IGlubGluZS1ibG9jazsgfVxuXG5zdW1tYXJ5IHtcbiAgZGlzcGxheTogbGlzdC1pdGVtO1xuICBjdXJzb3I6IHBvaW50ZXI7IH1cblxudGVtcGxhdGUge1xuICBkaXNwbGF5OiBub25lOyB9XG5cbltoaWRkZW5dIHtcbiAgZGlzcGxheTogbm9uZSAhaW1wb3J0YW50OyB9XG5cbmgxLCBoMiwgaDMsIGg0LCBoNSwgaDYsXG4uaDEsIC5oMiwgLmgzLCAuaDQsIC5oNSwgLmg2IHtcbiAgbWFyZ2luLWJvdHRvbTogMC41cmVtO1xuICBmb250LXdlaWdodDogNTAwO1xuICBsaW5lLWhlaWdodDogMS4yOyB9XG5cbmgxLCAuaDEge1xuICBmb250LXNpemU6IDIuNXJlbTsgfVxuXG5oMiwgLmgyIHtcbiAgZm9udC1zaXplOiAycmVtOyB9XG5cbmgzLCAuaDMge1xuICBmb250LXNpemU6IDEuNzVyZW07IH1cblxuaDQsIC5oNCB7XG4gIGZvbnQtc2l6ZTogMS41cmVtOyB9XG5cbmg1LCAuaDUge1xuICBmb250LXNpemU6IDEuMjVyZW07IH1cblxuaDYsIC5oNiB7XG4gIGZvbnQtc2l6ZTogMXJlbTsgfVxuXG4ubGVhZCB7XG4gIGZvbnQtc2l6ZTogMS4yNXJlbTtcbiAgZm9udC13ZWlnaHQ6IDMwMDsgfVxuXG4uZGlzcGxheS0xIHtcbiAgZm9udC1zaXplOiA2cmVtO1xuICBmb250LXdlaWdodDogMzAwO1xuICBsaW5lLWhlaWdodDogMS4yOyB9XG5cbi5kaXNwbGF5LTIge1xuICBmb250LXNpemU6IDUuNXJlbTtcbiAgZm9udC13ZWlnaHQ6IDMwMDtcbiAgbGluZS1oZWlnaHQ6IDEuMjsgfVxuXG4uZGlzcGxheS0zIHtcbiAgZm9udC1zaXplOiA0LjVyZW07XG4gIGZvbnQtd2VpZ2h0OiAzMDA7XG4gIGxpbmUtaGVpZ2h0OiAxLjI7IH1cblxuLmRpc3BsYXktNCB7XG4gIGZvbnQtc2l6ZTogMy41cmVtO1xuICBmb250LXdlaWdodDogMzAwO1xuICBsaW5lLWhlaWdodDogMS4yOyB9XG5cbmhyIHtcbiAgbWFyZ2luLXRvcDogMXJlbTtcbiAgbWFyZ2luLWJvdHRvbTogMXJlbTtcbiAgYm9yZGVyOiAwO1xuICBib3JkZXItdG9wOiAxcHggc29saWQgcmdiYSgwLCAwLCAwLCAwLjEpOyB9XG5cbnNtYWxsLFxuLnNtYWxsIHtcbiAgZm9udC1zaXplOiA4MCU7XG4gIGZvbnQtd2VpZ2h0OiA0MDA7IH1cblxubWFyayxcbi5tYXJrIHtcbiAgcGFkZGluZzogMC4yZW07XG4gIGJhY2tncm91bmQtY29sb3I6ICNmY2Y4ZTM7IH1cblxuLmxpc3QtdW5zdHlsZWQge1xuICBwYWRkaW5nLWxlZnQ6IDA7XG4gIGxpc3Qtc3R5bGU6IG5vbmU7IH1cblxuLmxpc3QtaW5saW5lIHtcbiAgcGFkZGluZy1sZWZ0OiAwO1xuICBsaXN0LXN0eWxlOiBub25lOyB9XG5cbi5saXN0LWlubGluZS1pdGVtIHtcbiAgZGlzcGxheTogaW5saW5lLWJsb2NrOyB9XG4gIC5saXN0LWlubGluZS1pdGVtOm5vdCg6bGFzdC1jaGlsZCkge1xuICAgIG1hcmdpbi1yaWdodDogMC41cmVtOyB9XG5cbi5pbml0aWFsaXNtIHtcbiAgZm9udC1zaXplOiA5MCU7XG4gIHRleHQtdHJhbnNmb3JtOiB1cHBlcmNhc2U7IH1cblxuLmJsb2NrcXVvdGUge1xuICBtYXJnaW4tYm90dG9tOiAxcmVtO1xuICBmb250LXNpemU6IDEuMjVyZW07IH1cblxuLmJsb2NrcXVvdGUtZm9vdGVyIHtcbiAgZGlzcGxheTogYmxvY2s7XG4gIGZvbnQtc2l6ZTogODAlO1xuICBjb2xvcjogIzZjNzU3ZDsgfVxuICAuYmxvY2txdW90ZS1mb290ZXI6OmJlZm9yZSB7XG4gICAgY29udGVudDogXCJcXDIwMTRcXDAwQTBcIjsgfVxuXG4uaW1nLWZsdWlkIHtcbiAgbWF4LXdpZHRoOiAxMDAlO1xuICBoZWlnaHQ6IGF1dG87IH1cblxuLmltZy10aHVtYm5haWwge1xuICBwYWRkaW5nOiAwLjI1cmVtO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZmZmO1xuICBib3JkZXI6IDFweCBzb2xpZCAjZGVlMmU2O1xuICBib3JkZXItcmFkaXVzOiAwO1xuICBtYXgtd2lkdGg6IDEwMCU7XG4gIGhlaWdodDogYXV0bzsgfVxuXG4uZmlndXJlIHtcbiAgZGlzcGxheTogaW5saW5lLWJsb2NrOyB9XG5cbi5maWd1cmUtaW1nIHtcbiAgbWFyZ2luLWJvdHRvbTogMC41cmVtO1xuICBsaW5lLWhlaWdodDogMTsgfVxuXG4uZmlndXJlLWNhcHRpb24ge1xuICBmb250LXNpemU6IDkwJTtcbiAgY29sb3I6ICM2Yzc1N2Q7IH1cblxuY29kZSB7XG4gIGZvbnQtc2l6ZTogODcuNSU7XG4gIGNvbG9yOiAjZTgzZThjO1xuICB3b3JkLXdyYXA6IGJyZWFrLXdvcmQ7IH1cbiAgYSA+IGNvZGUge1xuICAgIGNvbG9yOiBpbmhlcml0OyB9XG5cbmtiZCB7XG4gIHBhZGRpbmc6IDAuMnJlbSAwLjRyZW07XG4gIGZvbnQtc2l6ZTogODcuNSU7XG4gIGNvbG9yOiAjZmZmO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjMjEyNTI5O1xuICBib3JkZXItcmFkaXVzOiAwLjJyZW07IH1cbiAga2JkIGtiZCB7XG4gICAgcGFkZGluZzogMDtcbiAgICBmb250LXNpemU6IDEwMCU7XG4gICAgZm9udC13ZWlnaHQ6IDcwMDsgfVxuXG5wcmUge1xuICBkaXNwbGF5OiBibG9jaztcbiAgZm9udC1zaXplOiA4Ny41JTtcbiAgY29sb3I6ICMyMTI1Mjk7IH1cbiAgcHJlIGNvZGUge1xuICAgIGZvbnQtc2l6ZTogaW5oZXJpdDtcbiAgICBjb2xvcjogaW5oZXJpdDtcbiAgICB3b3JkLWJyZWFrOiBub3JtYWw7IH1cblxuLnByZS1zY3JvbGxhYmxlIHtcbiAgbWF4LWhlaWdodDogMzQwcHg7XG4gIG92ZXJmbG93LXk6IHNjcm9sbDsgfVxuXG4uY29udGFpbmVyIHtcbiAgd2lkdGg6IDEwMCU7XG4gIHBhZGRpbmctcmlnaHQ6IDE1cHg7XG4gIHBhZGRpbmctbGVmdDogMTVweDtcbiAgbWFyZ2luLXJpZ2h0OiBhdXRvO1xuICBtYXJnaW4tbGVmdDogYXV0bzsgfVxuICBAbWVkaWEgKG1pbi13aWR0aDogNTc2cHgpIHtcbiAgICAuY29udGFpbmVyIHtcbiAgICAgIG1heC13aWR0aDogNTQwcHg7IH0gfVxuICBAbWVkaWEgKG1pbi13aWR0aDogNzY4cHgpIHtcbiAgICAuY29udGFpbmVyIHtcbiAgICAgIG1heC13aWR0aDogNzIwcHg7IH0gfVxuICBAbWVkaWEgKG1pbi13aWR0aDogOTkycHgpIHtcbiAgICAuY29udGFpbmVyIHtcbiAgICAgIG1heC13aWR0aDogOTYwcHg7IH0gfVxuICBAbWVkaWEgKG1pbi13aWR0aDogMTIwMHB4KSB7XG4gICAgLmNvbnRhaW5lciB7XG4gICAgICBtYXgtd2lkdGg6IDExNDBweDsgfSB9XG5cbi5jb250YWluZXItZmx1aWQsIC5jb250YWluZXItc20sIC5jb250YWluZXItbWQsIC5jb250YWluZXItbGcsIC5jb250YWluZXIteGwge1xuICB3aWR0aDogMTAwJTtcbiAgcGFkZGluZy1yaWdodDogMTVweDtcbiAgcGFkZGluZy1sZWZ0OiAxNXB4O1xuICBtYXJnaW4tcmlnaHQ6IGF1dG87XG4gIG1hcmdpbi1sZWZ0OiBhdXRvOyB9XG5cbkBtZWRpYSAobWluLXdpZHRoOiA1NzZweCkge1xuICAuY29udGFpbmVyLCAuY29udGFpbmVyLXNtIHtcbiAgICBtYXgtd2lkdGg6IDU0MHB4OyB9IH1cblxuQG1lZGlhIChtaW4td2lkdGg6IDc2OHB4KSB7XG4gIC5jb250YWluZXIsIC5jb250YWluZXItc20sIC5jb250YWluZXItbWQge1xuICAgIG1heC13aWR0aDogNzIwcHg7IH0gfVxuXG5AbWVkaWEgKG1pbi13aWR0aDogOTkycHgpIHtcbiAgLmNvbnRhaW5lciwgLmNvbnRhaW5lci1zbSwgLmNvbnRhaW5lci1tZCwgLmNvbnRhaW5lci1sZyB7XG4gICAgbWF4LXdpZHRoOiA5NjBweDsgfSB9XG5cbkBtZWRpYSAobWluLXdpZHRoOiAxMjAwcHgpIHtcbiAgLmNvbnRhaW5lciwgLmNvbnRhaW5lci1zbSwgLmNvbnRhaW5lci1tZCwgLmNvbnRhaW5lci1sZywgLmNvbnRhaW5lci14bCB7XG4gICAgbWF4LXdpZHRoOiAxMTQwcHg7IH0gfVxuXG4ucm93IHtcbiAgZGlzcGxheTogZmxleDtcbiAgZmxleC13cmFwOiB3cmFwO1xuICBtYXJnaW4tcmlnaHQ6IC0xNXB4O1xuICBtYXJnaW4tbGVmdDogLTE1cHg7IH1cblxuLm5vLWd1dHRlcnMge1xuICBtYXJnaW4tcmlnaHQ6IDA7XG4gIG1hcmdpbi1sZWZ0OiAwOyB9XG4gIC5uby1ndXR0ZXJzID4gLmNvbCxcbiAgLm5vLWd1dHRlcnMgPiBbY2xhc3MqPVwiY29sLVwiXSB7XG4gICAgcGFkZGluZy1yaWdodDogMDtcbiAgICBwYWRkaW5nLWxlZnQ6IDA7IH1cblxuLmNvbC0xLCAuY29sLTIsIC5jb2wtMywgLmNvbC00LCAuY29sLTUsIC5jb2wtNiwgLmNvbC03LCAuY29sLTgsIC5jb2wtOSwgLmNvbC0xMCwgLmNvbC0xMSwgLmNvbC0xMiwgLmNvbCxcbi5jb2wtYXV0bywgLmNvbC1zbS0xLCAuY29sLXNtLTIsIC5jb2wtc20tMywgLmNvbC1zbS00LCAuY29sLXNtLTUsIC5jb2wtc20tNiwgLmNvbC1zbS03LCAuY29sLXNtLTgsIC5jb2wtc20tOSwgLmNvbC1zbS0xMCwgLmNvbC1zbS0xMSwgLmNvbC1zbS0xMiwgLmNvbC1zbSxcbi5jb2wtc20tYXV0bywgLmNvbC1tZC0xLCAuY29sLW1kLTIsIC5jb2wtbWQtMywgLmNvbC1tZC00LCAuY29sLW1kLTUsIC5jb2wtbWQtNiwgLmNvbC1tZC03LCAuY29sLW1kLTgsIC5jb2wtbWQtOSwgLmNvbC1tZC0xMCwgLmNvbC1tZC0xMSwgLmNvbC1tZC0xMiwgLmNvbC1tZCxcbi5jb2wtbWQtYXV0bywgLmNvbC1sZy0xLCAuY29sLWxnLTIsIC5jb2wtbGctMywgLmNvbC1sZy00LCAuY29sLWxnLTUsIC5jb2wtbGctNiwgLmNvbC1sZy03LCAuY29sLWxnLTgsIC5jb2wtbGctOSwgLmNvbC1sZy0xMCwgLmNvbC1sZy0xMSwgLmNvbC1sZy0xMiwgLmNvbC1sZyxcbi5jb2wtbGctYXV0bywgLmNvbC14bC0xLCAuY29sLXhsLTIsIC5jb2wteGwtMywgLmNvbC14bC00LCAuY29sLXhsLTUsIC5jb2wteGwtNiwgLmNvbC14bC03LCAuY29sLXhsLTgsIC5jb2wteGwtOSwgLmNvbC14bC0xMCwgLmNvbC14bC0xMSwgLmNvbC14bC0xMiwgLmNvbC14bCxcbi5jb2wteGwtYXV0byB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgd2lkdGg6IDEwMCU7XG4gIHBhZGRpbmctcmlnaHQ6IDE1cHg7XG4gIHBhZGRpbmctbGVmdDogMTVweDsgfVxuXG4uY29sIHtcbiAgZmxleC1iYXNpczogMDtcbiAgZmxleC1ncm93OiAxO1xuICBtaW4td2lkdGg6IDA7XG4gIG1heC13aWR0aDogMTAwJTsgfVxuXG4ucm93LWNvbHMtMSA+ICoge1xuICBmbGV4OiAwIDAgMTAwJTtcbiAgbWF4LXdpZHRoOiAxMDAlOyB9XG5cbi5yb3ctY29scy0yID4gKiB7XG4gIGZsZXg6IDAgMCA1MCU7XG4gIG1heC13aWR0aDogNTAlOyB9XG5cbi5yb3ctY29scy0zID4gKiB7XG4gIGZsZXg6IDAgMCAzMy4zMzMzMyU7XG4gIG1heC13aWR0aDogMzMuMzMzMzMlOyB9XG5cbi5yb3ctY29scy00ID4gKiB7XG4gIGZsZXg6IDAgMCAyNSU7XG4gIG1heC13aWR0aDogMjUlOyB9XG5cbi5yb3ctY29scy01ID4gKiB7XG4gIGZsZXg6IDAgMCAyMCU7XG4gIG1heC13aWR0aDogMjAlOyB9XG5cbi5yb3ctY29scy02ID4gKiB7XG4gIGZsZXg6IDAgMCAxNi42NjY2NyU7XG4gIG1heC13aWR0aDogMTYuNjY2NjclOyB9XG5cbi5jb2wtYXV0byB7XG4gIGZsZXg6IDAgMCBhdXRvO1xuICB3aWR0aDogYXV0bztcbiAgbWF4LXdpZHRoOiAxMDAlOyB9XG5cbi5jb2wtMSB7XG4gIGZsZXg6IDAgMCA4LjMzMzMzJTtcbiAgbWF4LXdpZHRoOiA4LjMzMzMzJTsgfVxuXG4uY29sLTIge1xuICBmbGV4OiAwIDAgMTYuNjY2NjclO1xuICBtYXgtd2lkdGg6IDE2LjY2NjY3JTsgfVxuXG4uY29sLTMge1xuICBmbGV4OiAwIDAgMjUlO1xuICBtYXgtd2lkdGg6IDI1JTsgfVxuXG4uY29sLTQge1xuICBmbGV4OiAwIDAgMzMuMzMzMzMlO1xuICBtYXgtd2lkdGg6IDMzLjMzMzMzJTsgfVxuXG4uY29sLTUge1xuICBmbGV4OiAwIDAgNDEuNjY2NjclO1xuICBtYXgtd2lkdGg6IDQxLjY2NjY3JTsgfVxuXG4uY29sLTYge1xuICBmbGV4OiAwIDAgNTAlO1xuICBtYXgtd2lkdGg6IDUwJTsgfVxuXG4uY29sLTcge1xuICBmbGV4OiAwIDAgNTguMzMzMzMlO1xuICBtYXgtd2lkdGg6IDU4LjMzMzMzJTsgfVxuXG4uY29sLTgge1xuICBmbGV4OiAwIDAgNjYuNjY2NjclO1xuICBtYXgtd2lkdGg6IDY2LjY2NjY3JTsgfVxuXG4uY29sLTkge1xuICBmbGV4OiAwIDAgNzUlO1xuICBtYXgtd2lkdGg6IDc1JTsgfVxuXG4uY29sLTEwIHtcbiAgZmxleDogMCAwIDgzLjMzMzMzJTtcbiAgbWF4LXdpZHRoOiA4My4zMzMzMyU7IH1cblxuLmNvbC0xMSB7XG4gIGZsZXg6IDAgMCA5MS42NjY2NyU7XG4gIG1heC13aWR0aDogOTEuNjY2NjclOyB9XG5cbi5jb2wtMTIge1xuICBmbGV4OiAwIDAgMTAwJTtcbiAgbWF4LXdpZHRoOiAxMDAlOyB9XG5cbi5vcmRlci1maXJzdCB7XG4gIG9yZGVyOiAtMTsgfVxuXG4ub3JkZXItbGFzdCB7XG4gIG9yZGVyOiAxMzsgfVxuXG4ub3JkZXItMCB7XG4gIG9yZGVyOiAwOyB9XG5cbi5vcmRlci0xIHtcbiAgb3JkZXI6IDE7IH1cblxuLm9yZGVyLTIge1xuICBvcmRlcjogMjsgfVxuXG4ub3JkZXItMyB7XG4gIG9yZGVyOiAzOyB9XG5cbi5vcmRlci00IHtcbiAgb3JkZXI6IDQ7IH1cblxuLm9yZGVyLTUge1xuICBvcmRlcjogNTsgfVxuXG4ub3JkZXItNiB7XG4gIG9yZGVyOiA2OyB9XG5cbi5vcmRlci03IHtcbiAgb3JkZXI6IDc7IH1cblxuLm9yZGVyLTgge1xuICBvcmRlcjogODsgfVxuXG4ub3JkZXItOSB7XG4gIG9yZGVyOiA5OyB9XG5cbi5vcmRlci0xMCB7XG4gIG9yZGVyOiAxMDsgfVxuXG4ub3JkZXItMTEge1xuICBvcmRlcjogMTE7IH1cblxuLm9yZGVyLTEyIHtcbiAgb3JkZXI6IDEyOyB9XG5cbi5vZmZzZXQtMSB7XG4gIG1hcmdpbi1sZWZ0OiA4LjMzMzMzJTsgfVxuXG4ub2Zmc2V0LTIge1xuICBtYXJnaW4tbGVmdDogMTYuNjY2NjclOyB9XG5cbi5vZmZzZXQtMyB7XG4gIG1hcmdpbi1sZWZ0OiAyNSU7IH1cblxuLm9mZnNldC00IHtcbiAgbWFyZ2luLWxlZnQ6IDMzLjMzMzMzJTsgfVxuXG4ub2Zmc2V0LTUge1xuICBtYXJnaW4tbGVmdDogNDEuNjY2NjclOyB9XG5cbi5vZmZzZXQtNiB7XG4gIG1hcmdpbi1sZWZ0OiA1MCU7IH1cblxuLm9mZnNldC03IHtcbiAgbWFyZ2luLWxlZnQ6IDU4LjMzMzMzJTsgfVxuXG4ub2Zmc2V0LTgge1xuICBtYXJnaW4tbGVmdDogNjYuNjY2NjclOyB9XG5cbi5vZmZzZXQtOSB7XG4gIG1hcmdpbi1sZWZ0OiA3NSU7IH1cblxuLm9mZnNldC0xMCB7XG4gIG1hcmdpbi1sZWZ0OiA4My4zMzMzMyU7IH1cblxuLm9mZnNldC0xMSB7XG4gIG1hcmdpbi1sZWZ0OiA5MS42NjY2NyU7IH1cblxuQG1lZGlhIChtaW4td2lkdGg6IDU3NnB4KSB7XG4gIC5jb2wtc20ge1xuICAgIGZsZXgtYmFzaXM6IDA7XG4gICAgZmxleC1ncm93OiAxO1xuICAgIG1pbi13aWR0aDogMDtcbiAgICBtYXgtd2lkdGg6IDEwMCU7IH1cbiAgLnJvdy1jb2xzLXNtLTEgPiAqIHtcbiAgICBmbGV4OiAwIDAgMTAwJTtcbiAgICBtYXgtd2lkdGg6IDEwMCU7IH1cbiAgLnJvdy1jb2xzLXNtLTIgPiAqIHtcbiAgICBmbGV4OiAwIDAgNTAlO1xuICAgIG1heC13aWR0aDogNTAlOyB9XG4gIC5yb3ctY29scy1zbS0zID4gKiB7XG4gICAgZmxleDogMCAwIDMzLjMzMzMzJTtcbiAgICBtYXgtd2lkdGg6IDMzLjMzMzMzJTsgfVxuICAucm93LWNvbHMtc20tNCA+ICoge1xuICAgIGZsZXg6IDAgMCAyNSU7XG4gICAgbWF4LXdpZHRoOiAyNSU7IH1cbiAgLnJvdy1jb2xzLXNtLTUgPiAqIHtcbiAgICBmbGV4OiAwIDAgMjAlO1xuICAgIG1heC13aWR0aDogMjAlOyB9XG4gIC5yb3ctY29scy1zbS02ID4gKiB7XG4gICAgZmxleDogMCAwIDE2LjY2NjY3JTtcbiAgICBtYXgtd2lkdGg6IDE2LjY2NjY3JTsgfVxuICAuY29sLXNtLWF1dG8ge1xuICAgIGZsZXg6IDAgMCBhdXRvO1xuICAgIHdpZHRoOiBhdXRvO1xuICAgIG1heC13aWR0aDogMTAwJTsgfVxuICAuY29sLXNtLTEge1xuICAgIGZsZXg6IDAgMCA4LjMzMzMzJTtcbiAgICBtYXgtd2lkdGg6IDguMzMzMzMlOyB9XG4gIC5jb2wtc20tMiB7XG4gICAgZmxleDogMCAwIDE2LjY2NjY3JTtcbiAgICBtYXgtd2lkdGg6IDE2LjY2NjY3JTsgfVxuICAuY29sLXNtLTMge1xuICAgIGZsZXg6IDAgMCAyNSU7XG4gICAgbWF4LXdpZHRoOiAyNSU7IH1cbiAgLmNvbC1zbS00IHtcbiAgICBmbGV4OiAwIDAgMzMuMzMzMzMlO1xuICAgIG1heC13aWR0aDogMzMuMzMzMzMlOyB9XG4gIC5jb2wtc20tNSB7XG4gICAgZmxleDogMCAwIDQxLjY2NjY3JTtcbiAgICBtYXgtd2lkdGg6IDQxLjY2NjY3JTsgfVxuICAuY29sLXNtLTYge1xuICAgIGZsZXg6IDAgMCA1MCU7XG4gICAgbWF4LXdpZHRoOiA1MCU7IH1cbiAgLmNvbC1zbS03IHtcbiAgICBmbGV4OiAwIDAgNTguMzMzMzMlO1xuICAgIG1heC13aWR0aDogNTguMzMzMzMlOyB9XG4gIC5jb2wtc20tOCB7XG4gICAgZmxleDogMCAwIDY2LjY2NjY3JTtcbiAgICBtYXgtd2lkdGg6IDY2LjY2NjY3JTsgfVxuICAuY29sLXNtLTkge1xuICAgIGZsZXg6IDAgMCA3NSU7XG4gICAgbWF4LXdpZHRoOiA3NSU7IH1cbiAgLmNvbC1zbS0xMCB7XG4gICAgZmxleDogMCAwIDgzLjMzMzMzJTtcbiAgICBtYXgtd2lkdGg6IDgzLjMzMzMzJTsgfVxuICAuY29sLXNtLTExIHtcbiAgICBmbGV4OiAwIDAgOTEuNjY2NjclO1xuICAgIG1heC13aWR0aDogOTEuNjY2NjclOyB9XG4gIC5jb2wtc20tMTIge1xuICAgIGZsZXg6IDAgMCAxMDAlO1xuICAgIG1heC13aWR0aDogMTAwJTsgfVxuICAub3JkZXItc20tZmlyc3Qge1xuICAgIG9yZGVyOiAtMTsgfVxuICAub3JkZXItc20tbGFzdCB7XG4gICAgb3JkZXI6IDEzOyB9XG4gIC5vcmRlci1zbS0wIHtcbiAgICBvcmRlcjogMDsgfVxuICAub3JkZXItc20tMSB7XG4gICAgb3JkZXI6IDE7IH1cbiAgLm9yZGVyLXNtLTIge1xuICAgIG9yZGVyOiAyOyB9XG4gIC5vcmRlci1zbS0zIHtcbiAgICBvcmRlcjogMzsgfVxuICAub3JkZXItc20tNCB7XG4gICAgb3JkZXI6IDQ7IH1cbiAgLm9yZGVyLXNtLTUge1xuICAgIG9yZGVyOiA1OyB9XG4gIC5vcmRlci1zbS02IHtcbiAgICBvcmRlcjogNjsgfVxuICAub3JkZXItc20tNyB7XG4gICAgb3JkZXI6IDc7IH1cbiAgLm9yZGVyLXNtLTgge1xuICAgIG9yZGVyOiA4OyB9XG4gIC5vcmRlci1zbS05IHtcbiAgICBvcmRlcjogOTsgfVxuICAub3JkZXItc20tMTAge1xuICAgIG9yZGVyOiAxMDsgfVxuICAub3JkZXItc20tMTEge1xuICAgIG9yZGVyOiAxMTsgfVxuICAub3JkZXItc20tMTIge1xuICAgIG9yZGVyOiAxMjsgfVxuICAub2Zmc2V0LXNtLTAge1xuICAgIG1hcmdpbi1sZWZ0OiAwOyB9XG4gIC5vZmZzZXQtc20tMSB7XG4gICAgbWFyZ2luLWxlZnQ6IDguMzMzMzMlOyB9XG4gIC5vZmZzZXQtc20tMiB7XG4gICAgbWFyZ2luLWxlZnQ6IDE2LjY2NjY3JTsgfVxuICAub2Zmc2V0LXNtLTMge1xuICAgIG1hcmdpbi1sZWZ0OiAyNSU7IH1cbiAgLm9mZnNldC1zbS00IHtcbiAgICBtYXJnaW4tbGVmdDogMzMuMzMzMzMlOyB9XG4gIC5vZmZzZXQtc20tNSB7XG4gICAgbWFyZ2luLWxlZnQ6IDQxLjY2NjY3JTsgfVxuICAub2Zmc2V0LXNtLTYge1xuICAgIG1hcmdpbi1sZWZ0OiA1MCU7IH1cbiAgLm9mZnNldC1zbS03IHtcbiAgICBtYXJnaW4tbGVmdDogNTguMzMzMzMlOyB9XG4gIC5vZmZzZXQtc20tOCB7XG4gICAgbWFyZ2luLWxlZnQ6IDY2LjY2NjY3JTsgfVxuICAub2Zmc2V0LXNtLTkge1xuICAgIG1hcmdpbi1sZWZ0OiA3NSU7IH1cbiAgLm9mZnNldC1zbS0xMCB7XG4gICAgbWFyZ2luLWxlZnQ6IDgzLjMzMzMzJTsgfVxuICAub2Zmc2V0LXNtLTExIHtcbiAgICBtYXJnaW4tbGVmdDogOTEuNjY2NjclOyB9IH1cblxuQG1lZGlhIChtaW4td2lkdGg6IDc2OHB4KSB7XG4gIC5jb2wtbWQge1xuICAgIGZsZXgtYmFzaXM6IDA7XG4gICAgZmxleC1ncm93OiAxO1xuICAgIG1pbi13aWR0aDogMDtcbiAgICBtYXgtd2lkdGg6IDEwMCU7IH1cbiAgLnJvdy1jb2xzLW1kLTEgPiAqIHtcbiAgICBmbGV4OiAwIDAgMTAwJTtcbiAgICBtYXgtd2lkdGg6IDEwMCU7IH1cbiAgLnJvdy1jb2xzLW1kLTIgPiAqIHtcbiAgICBmbGV4OiAwIDAgNTAlO1xuICAgIG1heC13aWR0aDogNTAlOyB9XG4gIC5yb3ctY29scy1tZC0zID4gKiB7XG4gICAgZmxleDogMCAwIDMzLjMzMzMzJTtcbiAgICBtYXgtd2lkdGg6IDMzLjMzMzMzJTsgfVxuICAucm93LWNvbHMtbWQtNCA+ICoge1xuICAgIGZsZXg6IDAgMCAyNSU7XG4gICAgbWF4LXdpZHRoOiAyNSU7IH1cbiAgLnJvdy1jb2xzLW1kLTUgPiAqIHtcbiAgICBmbGV4OiAwIDAgMjAlO1xuICAgIG1heC13aWR0aDogMjAlOyB9XG4gIC5yb3ctY29scy1tZC02ID4gKiB7XG4gICAgZmxleDogMCAwIDE2LjY2NjY3JTtcbiAgICBtYXgtd2lkdGg6IDE2LjY2NjY3JTsgfVxuICAuY29sLW1kLWF1dG8ge1xuICAgIGZsZXg6IDAgMCBhdXRvO1xuICAgIHdpZHRoOiBhdXRvO1xuICAgIG1heC13aWR0aDogMTAwJTsgfVxuICAuY29sLW1kLTEge1xuICAgIGZsZXg6IDAgMCA4LjMzMzMzJTtcbiAgICBtYXgtd2lkdGg6IDguMzMzMzMlOyB9XG4gIC5jb2wtbWQtMiB7XG4gICAgZmxleDogMCAwIDE2LjY2NjY3JTtcbiAgICBtYXgtd2lkdGg6IDE2LjY2NjY3JTsgfVxuICAuY29sLW1kLTMge1xuICAgIGZsZXg6IDAgMCAyNSU7XG4gICAgbWF4LXdpZHRoOiAyNSU7IH1cbiAgLmNvbC1tZC00IHtcbiAgICBmbGV4OiAwIDAgMzMuMzMzMzMlO1xuICAgIG1heC13aWR0aDogMzMuMzMzMzMlOyB9XG4gIC5jb2wtbWQtNSB7XG4gICAgZmxleDogMCAwIDQxLjY2NjY3JTtcbiAgICBtYXgtd2lkdGg6IDQxLjY2NjY3JTsgfVxuICAuY29sLW1kLTYge1xuICAgIGZsZXg6IDAgMCA1MCU7XG4gICAgbWF4LXdpZHRoOiA1MCU7IH1cbiAgLmNvbC1tZC03IHtcbiAgICBmbGV4OiAwIDAgNTguMzMzMzMlO1xuICAgIG1heC13aWR0aDogNTguMzMzMzMlOyB9XG4gIC5jb2wtbWQtOCB7XG4gICAgZmxleDogMCAwIDY2LjY2NjY3JTtcbiAgICBtYXgtd2lkdGg6IDY2LjY2NjY3JTsgfVxuICAuY29sLW1kLTkge1xuICAgIGZsZXg6IDAgMCA3NSU7XG4gICAgbWF4LXdpZHRoOiA3NSU7IH1cbiAgLmNvbC1tZC0xMCB7XG4gICAgZmxleDogMCAwIDgzLjMzMzMzJTtcbiAgICBtYXgtd2lkdGg6IDgzLjMzMzMzJTsgfVxuICAuY29sLW1kLTExIHtcbiAgICBmbGV4OiAwIDAgOTEuNjY2NjclO1xuICAgIG1heC13aWR0aDogOTEuNjY2NjclOyB9XG4gIC5jb2wtbWQtMTIge1xuICAgIGZsZXg6IDAgMCAxMDAlO1xuICAgIG1heC13aWR0aDogMTAwJTsgfVxuICAub3JkZXItbWQtZmlyc3Qge1xuICAgIG9yZGVyOiAtMTsgfVxuICAub3JkZXItbWQtbGFzdCB7XG4gICAgb3JkZXI6IDEzOyB9XG4gIC5vcmRlci1tZC0wIHtcbiAgICBvcmRlcjogMDsgfVxuICAub3JkZXItbWQtMSB7XG4gICAgb3JkZXI6IDE7IH1cbiAgLm9yZGVyLW1kLTIge1xuICAgIG9yZGVyOiAyOyB9XG4gIC5vcmRlci1tZC0zIHtcbiAgICBvcmRlcjogMzsgfVxuICAub3JkZXItbWQtNCB7XG4gICAgb3JkZXI6IDQ7IH1cbiAgLm9yZGVyLW1kLTUge1xuICAgIG9yZGVyOiA1OyB9XG4gIC5vcmRlci1tZC02IHtcbiAgICBvcmRlcjogNjsgfVxuICAub3JkZXItbWQtNyB7XG4gICAgb3JkZXI6IDc7IH1cbiAgLm9yZGVyLW1kLTgge1xuICAgIG9yZGVyOiA4OyB9XG4gIC5vcmRlci1tZC05IHtcbiAgICBvcmRlcjogOTsgfVxuICAub3JkZXItbWQtMTAge1xuICAgIG9yZGVyOiAxMDsgfVxuICAub3JkZXItbWQtMTEge1xuICAgIG9yZGVyOiAxMTsgfVxuICAub3JkZXItbWQtMTIge1xuICAgIG9yZGVyOiAxMjsgfVxuICAub2Zmc2V0LW1kLTAge1xuICAgIG1hcmdpbi1sZWZ0OiAwOyB9XG4gIC5vZmZzZXQtbWQtMSB7XG4gICAgbWFyZ2luLWxlZnQ6IDguMzMzMzMlOyB9XG4gIC5vZmZzZXQtbWQtMiB7XG4gICAgbWFyZ2luLWxlZnQ6IDE2LjY2NjY3JTsgfVxuICAub2Zmc2V0LW1kLTMge1xuICAgIG1hcmdpbi1sZWZ0OiAyNSU7IH1cbiAgLm9mZnNldC1tZC00IHtcbiAgICBtYXJnaW4tbGVmdDogMzMuMzMzMzMlOyB9XG4gIC5vZmZzZXQtbWQtNSB7XG4gICAgbWFyZ2luLWxlZnQ6IDQxLjY2NjY3JTsgfVxuICAub2Zmc2V0LW1kLTYge1xuICAgIG1hcmdpbi1sZWZ0OiA1MCU7IH1cbiAgLm9mZnNldC1tZC03IHtcbiAgICBtYXJnaW4tbGVmdDogNTguMzMzMzMlOyB9XG4gIC5vZmZzZXQtbWQtOCB7XG4gICAgbWFyZ2luLWxlZnQ6IDY2LjY2NjY3JTsgfVxuICAub2Zmc2V0LW1kLTkge1xuICAgIG1hcmdpbi1sZWZ0OiA3NSU7IH1cbiAgLm9mZnNldC1tZC0xMCB7XG4gICAgbWFyZ2luLWxlZnQ6IDgzLjMzMzMzJTsgfVxuICAub2Zmc2V0LW1kLTExIHtcbiAgICBtYXJnaW4tbGVmdDogOTEuNjY2NjclOyB9IH1cblxuQG1lZGlhIChtaW4td2lkdGg6IDk5MnB4KSB7XG4gIC5jb2wtbGcge1xuICAgIGZsZXgtYmFzaXM6IDA7XG4gICAgZmxleC1ncm93OiAxO1xuICAgIG1pbi13aWR0aDogMDtcbiAgICBtYXgtd2lkdGg6IDEwMCU7IH1cbiAgLnJvdy1jb2xzLWxnLTEgPiAqIHtcbiAgICBmbGV4OiAwIDAgMTAwJTtcbiAgICBtYXgtd2lkdGg6IDEwMCU7IH1cbiAgLnJvdy1jb2xzLWxnLTIgPiAqIHtcbiAgICBmbGV4OiAwIDAgNTAlO1xuICAgIG1heC13aWR0aDogNTAlOyB9XG4gIC5yb3ctY29scy1sZy0zID4gKiB7XG4gICAgZmxleDogMCAwIDMzLjMzMzMzJTtcbiAgICBtYXgtd2lkdGg6IDMzLjMzMzMzJTsgfVxuICAucm93LWNvbHMtbGctNCA+ICoge1xuICAgIGZsZXg6IDAgMCAyNSU7XG4gICAgbWF4LXdpZHRoOiAyNSU7IH1cbiAgLnJvdy1jb2xzLWxnLTUgPiAqIHtcbiAgICBmbGV4OiAwIDAgMjAlO1xuICAgIG1heC13aWR0aDogMjAlOyB9XG4gIC5yb3ctY29scy1sZy02ID4gKiB7XG4gICAgZmxleDogMCAwIDE2LjY2NjY3JTtcbiAgICBtYXgtd2lkdGg6IDE2LjY2NjY3JTsgfVxuICAuY29sLWxnLWF1dG8ge1xuICAgIGZsZXg6IDAgMCBhdXRvO1xuICAgIHdpZHRoOiBhdXRvO1xuICAgIG1heC13aWR0aDogMTAwJTsgfVxuICAuY29sLWxnLTEge1xuICAgIGZsZXg6IDAgMCA4LjMzMzMzJTtcbiAgICBtYXgtd2lkdGg6IDguMzMzMzMlOyB9XG4gIC5jb2wtbGctMiB7XG4gICAgZmxleDogMCAwIDE2LjY2NjY3JTtcbiAgICBtYXgtd2lkdGg6IDE2LjY2NjY3JTsgfVxuICAuY29sLWxnLTMge1xuICAgIGZsZXg6IDAgMCAyNSU7XG4gICAgbWF4LXdpZHRoOiAyNSU7IH1cbiAgLmNvbC1sZy00IHtcbiAgICBmbGV4OiAwIDAgMzMuMzMzMzMlO1xuICAgIG1heC13aWR0aDogMzMuMzMzMzMlOyB9XG4gIC5jb2wtbGctNSB7XG4gICAgZmxleDogMCAwIDQxLjY2NjY3JTtcbiAgICBtYXgtd2lkdGg6IDQxLjY2NjY3JTsgfVxuICAuY29sLWxnLTYge1xuICAgIGZsZXg6IDAgMCA1MCU7XG4gICAgbWF4LXdpZHRoOiA1MCU7IH1cbiAgLmNvbC1sZy03IHtcbiAgICBmbGV4OiAwIDAgNTguMzMzMzMlO1xuICAgIG1heC13aWR0aDogNTguMzMzMzMlOyB9XG4gIC5jb2wtbGctOCB7XG4gICAgZmxleDogMCAwIDY2LjY2NjY3JTtcbiAgICBtYXgtd2lkdGg6IDY2LjY2NjY3JTsgfVxuICAuY29sLWxnLTkge1xuICAgIGZsZXg6IDAgMCA3NSU7XG4gICAgbWF4LXdpZHRoOiA3NSU7IH1cbiAgLmNvbC1sZy0xMCB7XG4gICAgZmxleDogMCAwIDgzLjMzMzMzJTtcbiAgICBtYXgtd2lkdGg6IDgzLjMzMzMzJTsgfVxuICAuY29sLWxnLTExIHtcbiAgICBmbGV4OiAwIDAgOTEuNjY2NjclO1xuICAgIG1heC13aWR0aDogOTEuNjY2NjclOyB9XG4gIC5jb2wtbGctMTIge1xuICAgIGZsZXg6IDAgMCAxMDAlO1xuICAgIG1heC13aWR0aDogMTAwJTsgfVxuICAub3JkZXItbGctZmlyc3Qge1xuICAgIG9yZGVyOiAtMTsgfVxuICAub3JkZXItbGctbGFzdCB7XG4gICAgb3JkZXI6IDEzOyB9XG4gIC5vcmRlci1sZy0wIHtcbiAgICBvcmRlcjogMDsgfVxuICAub3JkZXItbGctMSB7XG4gICAgb3JkZXI6IDE7IH1cbiAgLm9yZGVyLWxnLTIge1xuICAgIG9yZGVyOiAyOyB9XG4gIC5vcmRlci1sZy0zIHtcbiAgICBvcmRlcjogMzsgfVxuICAub3JkZXItbGctNCB7XG4gICAgb3JkZXI6IDQ7IH1cbiAgLm9yZGVyLWxnLTUge1xuICAgIG9yZGVyOiA1OyB9XG4gIC5vcmRlci1sZy02IHtcbiAgICBvcmRlcjogNjsgfVxuICAub3JkZXItbGctNyB7XG4gICAgb3JkZXI6IDc7IH1cbiAgLm9yZGVyLWxnLTgge1xuICAgIG9yZGVyOiA4OyB9XG4gIC5vcmRlci1sZy05IHtcbiAgICBvcmRlcjogOTsgfVxuICAub3JkZXItbGctMTAge1xuICAgIG9yZGVyOiAxMDsgfVxuICAub3JkZXItbGctMTEge1xuICAgIG9yZGVyOiAxMTsgfVxuICAub3JkZXItbGctMTIge1xuICAgIG9yZGVyOiAxMjsgfVxuICAub2Zmc2V0LWxnLTAge1xuICAgIG1hcmdpbi1sZWZ0OiAwOyB9XG4gIC5vZmZzZXQtbGctMSB7XG4gICAgbWFyZ2luLWxlZnQ6IDguMzMzMzMlOyB9XG4gIC5vZmZzZXQtbGctMiB7XG4gICAgbWFyZ2luLWxlZnQ6IDE2LjY2NjY3JTsgfVxuICAub2Zmc2V0LWxnLTMge1xuICAgIG1hcmdpbi1sZWZ0OiAyNSU7IH1cbiAgLm9mZnNldC1sZy00IHtcbiAgICBtYXJnaW4tbGVmdDogMzMuMzMzMzMlOyB9XG4gIC5vZmZzZXQtbGctNSB7XG4gICAgbWFyZ2luLWxlZnQ6IDQxLjY2NjY3JTsgfVxuICAub2Zmc2V0LWxnLTYge1xuICAgIG1hcmdpbi1sZWZ0OiA1MCU7IH1cbiAgLm9mZnNldC1sZy03IHtcbiAgICBtYXJnaW4tbGVmdDogNTguMzMzMzMlOyB9XG4gIC5vZmZzZXQtbGctOCB7XG4gICAgbWFyZ2luLWxlZnQ6IDY2LjY2NjY3JTsgfVxuICAub2Zmc2V0LWxnLTkge1xuICAgIG1hcmdpbi1sZWZ0OiA3NSU7IH1cbiAgLm9mZnNldC1sZy0xMCB7XG4gICAgbWFyZ2luLWxlZnQ6IDgzLjMzMzMzJTsgfVxuICAub2Zmc2V0LWxnLTExIHtcbiAgICBtYXJnaW4tbGVmdDogOTEuNjY2NjclOyB9IH1cblxuQG1lZGlhIChtaW4td2lkdGg6IDEyMDBweCkge1xuICAuY29sLXhsIHtcbiAgICBmbGV4LWJhc2lzOiAwO1xuICAgIGZsZXgtZ3JvdzogMTtcbiAgICBtaW4td2lkdGg6IDA7XG4gICAgbWF4LXdpZHRoOiAxMDAlOyB9XG4gIC5yb3ctY29scy14bC0xID4gKiB7XG4gICAgZmxleDogMCAwIDEwMCU7XG4gICAgbWF4LXdpZHRoOiAxMDAlOyB9XG4gIC5yb3ctY29scy14bC0yID4gKiB7XG4gICAgZmxleDogMCAwIDUwJTtcbiAgICBtYXgtd2lkdGg6IDUwJTsgfVxuICAucm93LWNvbHMteGwtMyA+ICoge1xuICAgIGZsZXg6IDAgMCAzMy4zMzMzMyU7XG4gICAgbWF4LXdpZHRoOiAzMy4zMzMzMyU7IH1cbiAgLnJvdy1jb2xzLXhsLTQgPiAqIHtcbiAgICBmbGV4OiAwIDAgMjUlO1xuICAgIG1heC13aWR0aDogMjUlOyB9XG4gIC5yb3ctY29scy14bC01ID4gKiB7XG4gICAgZmxleDogMCAwIDIwJTtcbiAgICBtYXgtd2lkdGg6IDIwJTsgfVxuICAucm93LWNvbHMteGwtNiA+ICoge1xuICAgIGZsZXg6IDAgMCAxNi42NjY2NyU7XG4gICAgbWF4LXdpZHRoOiAxNi42NjY2NyU7IH1cbiAgLmNvbC14bC1hdXRvIHtcbiAgICBmbGV4OiAwIDAgYXV0bztcbiAgICB3aWR0aDogYXV0bztcbiAgICBtYXgtd2lkdGg6IDEwMCU7IH1cbiAgLmNvbC14bC0xIHtcbiAgICBmbGV4OiAwIDAgOC4zMzMzMyU7XG4gICAgbWF4LXdpZHRoOiA4LjMzMzMzJTsgfVxuICAuY29sLXhsLTIge1xuICAgIGZsZXg6IDAgMCAxNi42NjY2NyU7XG4gICAgbWF4LXdpZHRoOiAxNi42NjY2NyU7IH1cbiAgLmNvbC14bC0zIHtcbiAgICBmbGV4OiAwIDAgMjUlO1xuICAgIG1heC13aWR0aDogMjUlOyB9XG4gIC5jb2wteGwtNCB7XG4gICAgZmxleDogMCAwIDMzLjMzMzMzJTtcbiAgICBtYXgtd2lkdGg6IDMzLjMzMzMzJTsgfVxuICAuY29sLXhsLTUge1xuICAgIGZsZXg6IDAgMCA0MS42NjY2NyU7XG4gICAgbWF4LXdpZHRoOiA0MS42NjY2NyU7IH1cbiAgLmNvbC14bC02IHtcbiAgICBmbGV4OiAwIDAgNTAlO1xuICAgIG1heC13aWR0aDogNTAlOyB9XG4gIC5jb2wteGwtNyB7XG4gICAgZmxleDogMCAwIDU4LjMzMzMzJTtcbiAgICBtYXgtd2lkdGg6IDU4LjMzMzMzJTsgfVxuICAuY29sLXhsLTgge1xuICAgIGZsZXg6IDAgMCA2Ni42NjY2NyU7XG4gICAgbWF4LXdpZHRoOiA2Ni42NjY2NyU7IH1cbiAgLmNvbC14bC05IHtcbiAgICBmbGV4OiAwIDAgNzUlO1xuICAgIG1heC13aWR0aDogNzUlOyB9XG4gIC5jb2wteGwtMTAge1xuICAgIGZsZXg6IDAgMCA4My4zMzMzMyU7XG4gICAgbWF4LXdpZHRoOiA4My4zMzMzMyU7IH1cbiAgLmNvbC14bC0xMSB7XG4gICAgZmxleDogMCAwIDkxLjY2NjY3JTtcbiAgICBtYXgtd2lkdGg6IDkxLjY2NjY3JTsgfVxuICAuY29sLXhsLTEyIHtcbiAgICBmbGV4OiAwIDAgMTAwJTtcbiAgICBtYXgtd2lkdGg6IDEwMCU7IH1cbiAgLm9yZGVyLXhsLWZpcnN0IHtcbiAgICBvcmRlcjogLTE7IH1cbiAgLm9yZGVyLXhsLWxhc3Qge1xuICAgIG9yZGVyOiAxMzsgfVxuICAub3JkZXIteGwtMCB7XG4gICAgb3JkZXI6IDA7IH1cbiAgLm9yZGVyLXhsLTEge1xuICAgIG9yZGVyOiAxOyB9XG4gIC5vcmRlci14bC0yIHtcbiAgICBvcmRlcjogMjsgfVxuICAub3JkZXIteGwtMyB7XG4gICAgb3JkZXI6IDM7IH1cbiAgLm9yZGVyLXhsLTQge1xuICAgIG9yZGVyOiA0OyB9XG4gIC5vcmRlci14bC01IHtcbiAgICBvcmRlcjogNTsgfVxuICAub3JkZXIteGwtNiB7XG4gICAgb3JkZXI6IDY7IH1cbiAgLm9yZGVyLXhsLTcge1xuICAgIG9yZGVyOiA3OyB9XG4gIC5vcmRlci14bC04IHtcbiAgICBvcmRlcjogODsgfVxuICAub3JkZXIteGwtOSB7XG4gICAgb3JkZXI6IDk7IH1cbiAgLm9yZGVyLXhsLTEwIHtcbiAgICBvcmRlcjogMTA7IH1cbiAgLm9yZGVyLXhsLTExIHtcbiAgICBvcmRlcjogMTE7IH1cbiAgLm9yZGVyLXhsLTEyIHtcbiAgICBvcmRlcjogMTI7IH1cbiAgLm9mZnNldC14bC0wIHtcbiAgICBtYXJnaW4tbGVmdDogMDsgfVxuICAub2Zmc2V0LXhsLTEge1xuICAgIG1hcmdpbi1sZWZ0OiA4LjMzMzMzJTsgfVxuICAub2Zmc2V0LXhsLTIge1xuICAgIG1hcmdpbi1sZWZ0OiAxNi42NjY2NyU7IH1cbiAgLm9mZnNldC14bC0zIHtcbiAgICBtYXJnaW4tbGVmdDogMjUlOyB9XG4gIC5vZmZzZXQteGwtNCB7XG4gICAgbWFyZ2luLWxlZnQ6IDMzLjMzMzMzJTsgfVxuICAub2Zmc2V0LXhsLTUge1xuICAgIG1hcmdpbi1sZWZ0OiA0MS42NjY2NyU7IH1cbiAgLm9mZnNldC14bC02IHtcbiAgICBtYXJnaW4tbGVmdDogNTAlOyB9XG4gIC5vZmZzZXQteGwtNyB7XG4gICAgbWFyZ2luLWxlZnQ6IDU4LjMzMzMzJTsgfVxuICAub2Zmc2V0LXhsLTgge1xuICAgIG1hcmdpbi1sZWZ0OiA2Ni42NjY2NyU7IH1cbiAgLm9mZnNldC14bC05IHtcbiAgICBtYXJnaW4tbGVmdDogNzUlOyB9XG4gIC5vZmZzZXQteGwtMTAge1xuICAgIG1hcmdpbi1sZWZ0OiA4My4zMzMzMyU7IH1cbiAgLm9mZnNldC14bC0xMSB7XG4gICAgbWFyZ2luLWxlZnQ6IDkxLjY2NjY3JTsgfSB9XG5cbi50YWJsZSB7XG4gIHdpZHRoOiAxMDAlO1xuICBtYXJnaW4tYm90dG9tOiAxcmVtO1xuICBjb2xvcjogIzUxNTE1MTsgfVxuICAudGFibGUgdGgsXG4gIC50YWJsZSB0ZCB7XG4gICAgcGFkZGluZzogMC43NXJlbTtcbiAgICB2ZXJ0aWNhbC1hbGlnbjogdG9wO1xuICAgIGJvcmRlci10b3A6IDFweCBzb2xpZCAjZGVlMmU2OyB9XG4gIC50YWJsZSB0aGVhZCB0aCB7XG4gICAgdmVydGljYWwtYWxpZ246IGJvdHRvbTtcbiAgICBib3JkZXItYm90dG9tOiAycHggc29saWQgI2RlZTJlNjsgfVxuICAudGFibGUgdGJvZHkgKyB0Ym9keSB7XG4gICAgYm9yZGVyLXRvcDogMnB4IHNvbGlkICNkZWUyZTY7IH1cblxuLnRhYmxlLXNtIHRoLFxuLnRhYmxlLXNtIHRkIHtcbiAgcGFkZGluZzogMC4zcmVtOyB9XG5cbi50YWJsZS1ib3JkZXJlZCB7XG4gIGJvcmRlcjogMXB4IHNvbGlkICNkZWUyZTY7IH1cbiAgLnRhYmxlLWJvcmRlcmVkIHRoLFxuICAudGFibGUtYm9yZGVyZWQgdGQge1xuICAgIGJvcmRlcjogMXB4IHNvbGlkICNkZWUyZTY7IH1cbiAgLnRhYmxlLWJvcmRlcmVkIHRoZWFkIHRoLFxuICAudGFibGUtYm9yZGVyZWQgdGhlYWQgdGQge1xuICAgIGJvcmRlci1ib3R0b20td2lkdGg6IDJweDsgfVxuXG4udGFibGUtYm9yZGVybGVzcyB0aCxcbi50YWJsZS1ib3JkZXJsZXNzIHRkLFxuLnRhYmxlLWJvcmRlcmxlc3MgdGhlYWQgdGgsXG4udGFibGUtYm9yZGVybGVzcyB0Ym9keSArIHRib2R5IHtcbiAgYm9yZGVyOiAwOyB9XG5cbi50YWJsZS1zdHJpcGVkIHRib2R5IHRyOm50aC1vZi10eXBlKG9kZCkge1xuICBiYWNrZ3JvdW5kLWNvbG9yOiByZ2JhKDAsIDAsIDAsIDAuMDUpOyB9XG5cbi50YWJsZS1ob3ZlciB0Ym9keSB0cjpob3ZlciB7XG4gIGNvbG9yOiAjNTE1MTUxO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiByZ2JhKDAsIDAsIDAsIDAuMDc1KTsgfVxuXG4udGFibGUtcHJpbWFyeSxcbi50YWJsZS1wcmltYXJ5ID4gdGgsXG4udGFibGUtcHJpbWFyeSA+IHRkIHtcbiAgYmFja2dyb3VuZC1jb2xvcjogI2M5ZGRmZTsgfVxuXG4udGFibGUtcHJpbWFyeSB0aCxcbi50YWJsZS1wcmltYXJ5IHRkLFxuLnRhYmxlLXByaW1hcnkgdGhlYWQgdGgsXG4udGFibGUtcHJpbWFyeSB0Ym9keSArIHRib2R5IHtcbiAgYm9yZGVyLWNvbG9yOiAjOWJiZmZkOyB9XG5cbi50YWJsZS1ob3ZlciAudGFibGUtcHJpbWFyeTpob3ZlciB7XG4gIGJhY2tncm91bmQtY29sb3I6ICNiMGNkZmU7IH1cbiAgLnRhYmxlLWhvdmVyIC50YWJsZS1wcmltYXJ5OmhvdmVyID4gdGQsXG4gIC50YWJsZS1ob3ZlciAudGFibGUtcHJpbWFyeTpob3ZlciA+IHRoIHtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjYjBjZGZlOyB9XG5cbi50YWJsZS1zZWNvbmRhcnksXG4udGFibGUtc2Vjb25kYXJ5ID4gdGgsXG4udGFibGUtc2Vjb25kYXJ5ID4gdGQge1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZDhkYmUxOyB9XG5cbi50YWJsZS1zZWNvbmRhcnkgdGgsXG4udGFibGUtc2Vjb25kYXJ5IHRkLFxuLnRhYmxlLXNlY29uZGFyeSB0aGVhZCB0aCxcbi50YWJsZS1zZWNvbmRhcnkgdGJvZHkgKyB0Ym9keSB7XG4gIGJvcmRlci1jb2xvcjogI2I2YmNjNzsgfVxuXG4udGFibGUtaG92ZXIgLnRhYmxlLXNlY29uZGFyeTpob3ZlciB7XG4gIGJhY2tncm91bmQtY29sb3I6ICNjYWNlZDY7IH1cbiAgLnRhYmxlLWhvdmVyIC50YWJsZS1zZWNvbmRhcnk6aG92ZXIgPiB0ZCxcbiAgLnRhYmxlLWhvdmVyIC50YWJsZS1zZWNvbmRhcnk6aG92ZXIgPiB0aCB7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI2NhY2VkNjsgfVxuXG4udGFibGUtc3VjY2Vzcyxcbi50YWJsZS1zdWNjZXNzID4gdGgsXG4udGFibGUtc3VjY2VzcyA+IHRkIHtcbiAgYmFja2dyb3VuZC1jb2xvcjogI2MwZTdjYjsgfVxuXG4udGFibGUtc3VjY2VzcyB0aCxcbi50YWJsZS1zdWNjZXNzIHRkLFxuLnRhYmxlLXN1Y2Nlc3MgdGhlYWQgdGgsXG4udGFibGUtc3VjY2VzcyB0Ym9keSArIHRib2R5IHtcbiAgYm9yZGVyLWNvbG9yOiAjODlkMzlmOyB9XG5cbi50YWJsZS1ob3ZlciAudGFibGUtc3VjY2Vzczpob3ZlciB7XG4gIGJhY2tncm91bmQtY29sb3I6ICNhZWUwYmM7IH1cbiAgLnRhYmxlLWhvdmVyIC50YWJsZS1zdWNjZXNzOmhvdmVyID4gdGQsXG4gIC50YWJsZS1ob3ZlciAudGFibGUtc3VjY2Vzczpob3ZlciA+IHRoIHtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjYWVlMGJjOyB9XG5cbi50YWJsZS1pbmZvLFxuLnRhYmxlLWluZm8gPiB0aCxcbi50YWJsZS1pbmZvID4gdGQge1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZGVjOWZlOyB9XG5cbi50YWJsZS1pbmZvIHRoLFxuLnRhYmxlLWluZm8gdGQsXG4udGFibGUtaW5mbyB0aGVhZCB0aCxcbi50YWJsZS1pbmZvIHRib2R5ICsgdGJvZHkge1xuICBib3JkZXItY29sb3I6ICNjMjliZmQ7IH1cblxuLnRhYmxlLWhvdmVyIC50YWJsZS1pbmZvOmhvdmVyIHtcbiAgYmFja2dyb3VuZC1jb2xvcjogI2NmYjBmZTsgfVxuICAudGFibGUtaG92ZXIgLnRhYmxlLWluZm86aG92ZXIgPiB0ZCxcbiAgLnRhYmxlLWhvdmVyIC50YWJsZS1pbmZvOmhvdmVyID4gdGgge1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNjZmIwZmU7IH1cblxuLnRhYmxlLXdhcm5pbmcsXG4udGFibGUtd2FybmluZyA+IHRoLFxuLnRhYmxlLXdhcm5pbmcgPiB0ZCB7XG4gIGJhY2tncm91bmQtY29sb3I6ICNmZWU4Yzk7IH1cblxuLnRhYmxlLXdhcm5pbmcgdGgsXG4udGFibGUtd2FybmluZyB0ZCxcbi50YWJsZS13YXJuaW5nIHRoZWFkIHRoLFxuLnRhYmxlLXdhcm5pbmcgdGJvZHkgKyB0Ym9keSB7XG4gIGJvcmRlci1jb2xvcjogI2ZkZDU5YjsgfVxuXG4udGFibGUtaG92ZXIgLnRhYmxlLXdhcm5pbmc6aG92ZXIge1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZmVkZGIwOyB9XG4gIC50YWJsZS1ob3ZlciAudGFibGUtd2FybmluZzpob3ZlciA+IHRkLFxuICAudGFibGUtaG92ZXIgLnRhYmxlLXdhcm5pbmc6aG92ZXIgPiB0aCB7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI2ZlZGRiMDsgfVxuXG4udGFibGUtZGFuZ2VyLFxuLnRhYmxlLWRhbmdlciA+IHRoLFxuLnRhYmxlLWRhbmdlciA+IHRkIHtcbiAgYmFja2dyb3VuZC1jb2xvcjogI2ZlY2FjOTsgfVxuXG4udGFibGUtZGFuZ2VyIHRoLFxuLnRhYmxlLWRhbmdlciB0ZCxcbi50YWJsZS1kYW5nZXIgdGhlYWQgdGgsXG4udGFibGUtZGFuZ2VyIHRib2R5ICsgdGJvZHkge1xuICBib3JkZXItY29sb3I6ICNmZDljOWI7IH1cblxuLnRhYmxlLWhvdmVyIC50YWJsZS1kYW5nZXI6aG92ZXIge1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZmViMWIwOyB9XG4gIC50YWJsZS1ob3ZlciAudGFibGUtZGFuZ2VyOmhvdmVyID4gdGQsXG4gIC50YWJsZS1ob3ZlciAudGFibGUtZGFuZ2VyOmhvdmVyID4gdGgge1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNmZWIxYjA7IH1cblxuLnRhYmxlLWxpZ2h0LFxuLnRhYmxlLWxpZ2h0ID4gdGgsXG4udGFibGUtbGlnaHQgPiB0ZCB7XG4gIGJhY2tncm91bmQtY29sb3I6ICNmZGZkZmU7IH1cblxuLnRhYmxlLWxpZ2h0IHRoLFxuLnRhYmxlLWxpZ2h0IHRkLFxuLnRhYmxlLWxpZ2h0IHRoZWFkIHRoLFxuLnRhYmxlLWxpZ2h0IHRib2R5ICsgdGJvZHkge1xuICBib3JkZXItY29sb3I6ICNmYmZjZmM7IH1cblxuLnRhYmxlLWhvdmVyIC50YWJsZS1saWdodDpob3ZlciB7XG4gIGJhY2tncm91bmQtY29sb3I6ICNlY2VjZjY7IH1cbiAgLnRhYmxlLWhvdmVyIC50YWJsZS1saWdodDpob3ZlciA+IHRkLFxuICAudGFibGUtaG92ZXIgLnRhYmxlLWxpZ2h0OmhvdmVyID4gdGgge1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNlY2VjZjY7IH1cblxuLnRhYmxlLWRhcmssXG4udGFibGUtZGFyayA+IHRoLFxuLnRhYmxlLWRhcmsgPiB0ZCB7XG4gIGJhY2tncm91bmQtY29sb3I6ICNjMGMxYzQ7IH1cblxuLnRhYmxlLWRhcmsgdGgsXG4udGFibGUtZGFyayB0ZCxcbi50YWJsZS1kYXJrIHRoZWFkIHRoLFxuLnRhYmxlLWRhcmsgdGJvZHkgKyB0Ym9keSB7XG4gIGJvcmRlci1jb2xvcjogIzhhOGQ5MjsgfVxuXG4udGFibGUtaG92ZXIgLnRhYmxlLWRhcms6aG92ZXIge1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjYjNiNGI4OyB9XG4gIC50YWJsZS1ob3ZlciAudGFibGUtZGFyazpob3ZlciA+IHRkLFxuICAudGFibGUtaG92ZXIgLnRhYmxlLWRhcms6aG92ZXIgPiB0aCB7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI2IzYjRiODsgfVxuXG4udGFibGUtYWN0aXZlLFxuLnRhYmxlLWFjdGl2ZSA+IHRoLFxuLnRhYmxlLWFjdGl2ZSA+IHRkIHtcbiAgYmFja2dyb3VuZC1jb2xvcjogcmdiYSgwLCAwLCAwLCAwLjA3NSk7IH1cblxuLnRhYmxlLWhvdmVyIC50YWJsZS1hY3RpdmU6aG92ZXIge1xuICBiYWNrZ3JvdW5kLWNvbG9yOiByZ2JhKDAsIDAsIDAsIDAuMDc1KTsgfVxuICAudGFibGUtaG92ZXIgLnRhYmxlLWFjdGl2ZTpob3ZlciA+IHRkLFxuICAudGFibGUtaG92ZXIgLnRhYmxlLWFjdGl2ZTpob3ZlciA+IHRoIHtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiByZ2JhKDAsIDAsIDAsIDAuMDc1KTsgfVxuXG4udGFibGUgLnRoZWFkLWRhcmsgdGgge1xuICBjb2xvcjogI2ZmZjtcbiAgYmFja2dyb3VuZC1jb2xvcjogIzM0M2E0MDtcbiAgYm9yZGVyLWNvbG9yOiAjNDU0ZDU1OyB9XG5cbi50YWJsZSAudGhlYWQtbGlnaHQgdGgge1xuICBjb2xvcjogIzQ5NTA1NztcbiAgYmFja2dyb3VuZC1jb2xvcjogI2U5ZWNlZjtcbiAgYm9yZGVyLWNvbG9yOiAjZGVlMmU2OyB9XG5cbi50YWJsZS1kYXJrIHtcbiAgY29sb3I6ICNmZmY7XG4gIGJhY2tncm91bmQtY29sb3I6ICMzNDNhNDA7IH1cbiAgLnRhYmxlLWRhcmsgdGgsXG4gIC50YWJsZS1kYXJrIHRkLFxuICAudGFibGUtZGFyayB0aGVhZCB0aCB7XG4gICAgYm9yZGVyLWNvbG9yOiAjNDU0ZDU1OyB9XG4gIC50YWJsZS1kYXJrLnRhYmxlLWJvcmRlcmVkIHtcbiAgICBib3JkZXI6IDA7IH1cbiAgLnRhYmxlLWRhcmsudGFibGUtc3RyaXBlZCB0Ym9keSB0cjpudGgtb2YtdHlwZShvZGQpIHtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuMDUpOyB9XG4gIC50YWJsZS1kYXJrLnRhYmxlLWhvdmVyIHRib2R5IHRyOmhvdmVyIHtcbiAgICBjb2xvcjogI2ZmZjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuMDc1KTsgfVxuXG5AbWVkaWEgKG1heC13aWR0aDogNTc1Ljk4cHgpIHtcbiAgLnRhYmxlLXJlc3BvbnNpdmUtc20ge1xuICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgIHdpZHRoOiAxMDAlO1xuICAgIG92ZXJmbG93LXg6IGF1dG87XG4gICAgLXdlYmtpdC1vdmVyZmxvdy1zY3JvbGxpbmc6IHRvdWNoOyB9XG4gICAgLnRhYmxlLXJlc3BvbnNpdmUtc20gPiAudGFibGUtYm9yZGVyZWQge1xuICAgICAgYm9yZGVyOiAwOyB9IH1cblxuQG1lZGlhIChtYXgtd2lkdGg6IDc2Ny45OHB4KSB7XG4gIC50YWJsZS1yZXNwb25zaXZlLW1kIHtcbiAgICBkaXNwbGF5OiBibG9jaztcbiAgICB3aWR0aDogMTAwJTtcbiAgICBvdmVyZmxvdy14OiBhdXRvO1xuICAgIC13ZWJraXQtb3ZlcmZsb3ctc2Nyb2xsaW5nOiB0b3VjaDsgfVxuICAgIC50YWJsZS1yZXNwb25zaXZlLW1kID4gLnRhYmxlLWJvcmRlcmVkIHtcbiAgICAgIGJvcmRlcjogMDsgfSB9XG5cbkBtZWRpYSAobWF4LXdpZHRoOiA5OTEuOThweCkge1xuICAudGFibGUtcmVzcG9uc2l2ZS1sZyB7XG4gICAgZGlzcGxheTogYmxvY2s7XG4gICAgd2lkdGg6IDEwMCU7XG4gICAgb3ZlcmZsb3cteDogYXV0bztcbiAgICAtd2Via2l0LW92ZXJmbG93LXNjcm9sbGluZzogdG91Y2g7IH1cbiAgICAudGFibGUtcmVzcG9uc2l2ZS1sZyA+IC50YWJsZS1ib3JkZXJlZCB7XG4gICAgICBib3JkZXI6IDA7IH0gfVxuXG5AbWVkaWEgKG1heC13aWR0aDogMTE5OS45OHB4KSB7XG4gIC50YWJsZS1yZXNwb25zaXZlLXhsIHtcbiAgICBkaXNwbGF5OiBibG9jaztcbiAgICB3aWR0aDogMTAwJTtcbiAgICBvdmVyZmxvdy14OiBhdXRvO1xuICAgIC13ZWJraXQtb3ZlcmZsb3ctc2Nyb2xsaW5nOiB0b3VjaDsgfVxuICAgIC50YWJsZS1yZXNwb25zaXZlLXhsID4gLnRhYmxlLWJvcmRlcmVkIHtcbiAgICAgIGJvcmRlcjogMDsgfSB9XG5cbi50YWJsZS1yZXNwb25zaXZlIHtcbiAgZGlzcGxheTogYmxvY2s7XG4gIHdpZHRoOiAxMDAlO1xuICBvdmVyZmxvdy14OiBhdXRvO1xuICAtd2Via2l0LW92ZXJmbG93LXNjcm9sbGluZzogdG91Y2g7IH1cbiAgLnRhYmxlLXJlc3BvbnNpdmUgPiAudGFibGUtYm9yZGVyZWQge1xuICAgIGJvcmRlcjogMDsgfVxuXG4uZm9ybS1jb250cm9sIHtcbiAgZGlzcGxheTogYmxvY2s7XG4gIHdpZHRoOiAxMDAlO1xuICBoZWlnaHQ6IGNhbGMoMS41ZW0gKyAwLjc1cmVtICsgMnB4KTtcbiAgcGFkZGluZzogMC4zNzVyZW0gMC43NXJlbTtcbiAgZm9udC1zaXplOiAxcmVtO1xuICBmb250LXdlaWdodDogNDAwO1xuICBsaW5lLWhlaWdodDogMS41O1xuICBjb2xvcjogIzQ5NTA1NztcbiAgYmFja2dyb3VuZC1jb2xvcjogI2ZmZjtcbiAgYmFja2dyb3VuZC1jbGlwOiBwYWRkaW5nLWJveDtcbiAgYm9yZGVyOiAxcHggc29saWQgI2NlZDRkYTtcbiAgYm9yZGVyLXJhZGl1czogMDtcbiAgdHJhbnNpdGlvbjogYm9yZGVyLWNvbG9yIDAuMTVzIGVhc2UtaW4tb3V0LCBib3gtc2hhZG93IDAuMTVzIGVhc2UtaW4tb3V0OyB9XG4gIEBtZWRpYSAocHJlZmVycy1yZWR1Y2VkLW1vdGlvbjogcmVkdWNlKSB7XG4gICAgLmZvcm0tY29udHJvbCB7XG4gICAgICB0cmFuc2l0aW9uOiBub25lOyB9IH1cbiAgLmZvcm0tY29udHJvbDo6LW1zLWV4cGFuZCB7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogdHJhbnNwYXJlbnQ7XG4gICAgYm9yZGVyOiAwOyB9XG4gIC5mb3JtLWNvbnRyb2w6LW1vei1mb2N1c3Jpbmcge1xuICAgIGNvbG9yOiB0cmFuc3BhcmVudDtcbiAgICB0ZXh0LXNoYWRvdzogMCAwIDAgIzQ5NTA1NzsgfVxuICAuZm9ybS1jb250cm9sOmZvY3VzIHtcbiAgICBjb2xvcjogIzQ5NTA1NztcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjZmZmO1xuICAgIGJvcmRlci1jb2xvcjogI2JkZDRmZTtcbiAgICBvdXRsaW5lOiAwO1xuICAgIGJveC1zaGFkb3c6IDAgMCAwIDAuMnJlbSByZ2JhKDYzLCAxMzIsIDI1MiwgMC4yNSk7IH1cbiAgLmZvcm0tY29udHJvbDo6cGxhY2Vob2xkZXIge1xuICAgIGNvbG9yOiAjNmM3NTdkO1xuICAgIG9wYWNpdHk6IDE7IH1cbiAgLmZvcm0tY29udHJvbDpkaXNhYmxlZCwgLmZvcm0tY29udHJvbFtyZWFkb25seV0ge1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNlOWVjZWY7XG4gICAgb3BhY2l0eTogMTsgfVxuXG5pbnB1dFt0eXBlPVwiZGF0ZVwiXS5mb3JtLWNvbnRyb2wsXG5pbnB1dFt0eXBlPVwidGltZVwiXS5mb3JtLWNvbnRyb2wsXG5pbnB1dFt0eXBlPVwiZGF0ZXRpbWUtbG9jYWxcIl0uZm9ybS1jb250cm9sLFxuaW5wdXRbdHlwZT1cIm1vbnRoXCJdLmZvcm0tY29udHJvbCB7XG4gIGFwcGVhcmFuY2U6IG5vbmU7IH1cblxuc2VsZWN0LmZvcm0tY29udHJvbDpmb2N1czo6LW1zLXZhbHVlIHtcbiAgY29sb3I6ICM0OTUwNTc7XG4gIGJhY2tncm91bmQtY29sb3I6ICNmZmY7IH1cblxuLmZvcm0tY29udHJvbC1maWxlLFxuLmZvcm0tY29udHJvbC1yYW5nZSB7XG4gIGRpc3BsYXk6IGJsb2NrO1xuICB3aWR0aDogMTAwJTsgfVxuXG4uY29sLWZvcm0tbGFiZWwge1xuICBwYWRkaW5nLXRvcDogY2FsYygwLjM3NXJlbSArIDFweCk7XG4gIHBhZGRpbmctYm90dG9tOiBjYWxjKDAuMzc1cmVtICsgMXB4KTtcbiAgbWFyZ2luLWJvdHRvbTogMDtcbiAgZm9udC1zaXplOiBpbmhlcml0O1xuICBsaW5lLWhlaWdodDogMS41OyB9XG5cbi5jb2wtZm9ybS1sYWJlbC1sZyB7XG4gIHBhZGRpbmctdG9wOiBjYWxjKDAuNXJlbSArIDFweCk7XG4gIHBhZGRpbmctYm90dG9tOiBjYWxjKDAuNXJlbSArIDFweCk7XG4gIGZvbnQtc2l6ZTogMS4yNXJlbTtcbiAgbGluZS1oZWlnaHQ6IDEuNTsgfVxuXG4uY29sLWZvcm0tbGFiZWwtc20ge1xuICBwYWRkaW5nLXRvcDogY2FsYygwLjI1cmVtICsgMXB4KTtcbiAgcGFkZGluZy1ib3R0b206IGNhbGMoMC4yNXJlbSArIDFweCk7XG4gIGZvbnQtc2l6ZTogMC44NzVyZW07XG4gIGxpbmUtaGVpZ2h0OiAxLjU7IH1cblxuLmZvcm0tY29udHJvbC1wbGFpbnRleHQge1xuICBkaXNwbGF5OiBibG9jaztcbiAgd2lkdGg6IDEwMCU7XG4gIHBhZGRpbmc6IDAuMzc1cmVtIDA7XG4gIG1hcmdpbi1ib3R0b206IDA7XG4gIGZvbnQtc2l6ZTogMXJlbTtcbiAgbGluZS1oZWlnaHQ6IDEuNTtcbiAgY29sb3I6ICM1MTUxNTE7XG4gIGJhY2tncm91bmQtY29sb3I6IHRyYW5zcGFyZW50O1xuICBib3JkZXI6IHNvbGlkIHRyYW5zcGFyZW50O1xuICBib3JkZXItd2lkdGg6IDFweCAwOyB9XG4gIC5mb3JtLWNvbnRyb2wtcGxhaW50ZXh0LmZvcm0tY29udHJvbC1zbSwgLmZvcm0tY29udHJvbC1wbGFpbnRleHQuZm9ybS1jb250cm9sLWxnIHtcbiAgICBwYWRkaW5nLXJpZ2h0OiAwO1xuICAgIHBhZGRpbmctbGVmdDogMDsgfVxuXG4uZm9ybS1jb250cm9sLXNtIHtcbiAgaGVpZ2h0OiBjYWxjKDEuNWVtICsgMC41cmVtICsgMnB4KTtcbiAgcGFkZGluZzogMC4yNXJlbSAwLjVyZW07XG4gIGZvbnQtc2l6ZTogMC44NzVyZW07XG4gIGxpbmUtaGVpZ2h0OiAxLjU7XG4gIGJvcmRlci1yYWRpdXM6IDAuMnJlbTsgfVxuXG4uZm9ybS1jb250cm9sLWxnIHtcbiAgaGVpZ2h0OiBjYWxjKDEuNWVtICsgMXJlbSArIDJweCk7XG4gIHBhZGRpbmc6IDAuNXJlbSAxcmVtO1xuICBmb250LXNpemU6IDEuMjVyZW07XG4gIGxpbmUtaGVpZ2h0OiAxLjU7XG4gIGJvcmRlci1yYWRpdXM6IDAuM3JlbTsgfVxuXG5zZWxlY3QuZm9ybS1jb250cm9sW3NpemVdLCBzZWxlY3QuZm9ybS1jb250cm9sW211bHRpcGxlXSB7XG4gIGhlaWdodDogYXV0bzsgfVxuXG50ZXh0YXJlYS5mb3JtLWNvbnRyb2wge1xuICBoZWlnaHQ6IGF1dG87IH1cblxuLmZvcm0tZ3JvdXAge1xuICBtYXJnaW4tYm90dG9tOiAxcmVtOyB9XG5cbi5mb3JtLXRleHQge1xuICBkaXNwbGF5OiBibG9jaztcbiAgbWFyZ2luLXRvcDogMC4yNXJlbTsgfVxuXG4uZm9ybS1yb3cge1xuICBkaXNwbGF5OiBmbGV4O1xuICBmbGV4LXdyYXA6IHdyYXA7XG4gIG1hcmdpbi1yaWdodDogLTVweDtcbiAgbWFyZ2luLWxlZnQ6IC01cHg7IH1cbiAgLmZvcm0tcm93ID4gLmNvbCxcbiAgLmZvcm0tcm93ID4gW2NsYXNzKj1cImNvbC1cIl0ge1xuICAgIHBhZGRpbmctcmlnaHQ6IDVweDtcbiAgICBwYWRkaW5nLWxlZnQ6IDVweDsgfVxuXG4uZm9ybS1jaGVjayB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgZGlzcGxheTogYmxvY2s7XG4gIHBhZGRpbmctbGVmdDogMS4yNXJlbTsgfVxuXG4uZm9ybS1jaGVjay1pbnB1dCB7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgbWFyZ2luLXRvcDogMC4zcmVtO1xuICBtYXJnaW4tbGVmdDogLTEuMjVyZW07IH1cbiAgLmZvcm0tY2hlY2staW5wdXRbZGlzYWJsZWRdIH4gLmZvcm0tY2hlY2stbGFiZWwsXG4gIC5mb3JtLWNoZWNrLWlucHV0OmRpc2FibGVkIH4gLmZvcm0tY2hlY2stbGFiZWwge1xuICAgIGNvbG9yOiAjNmM3NTdkOyB9XG5cbi5mb3JtLWNoZWNrLWxhYmVsIHtcbiAgbWFyZ2luLWJvdHRvbTogMDsgfVxuXG4uZm9ybS1jaGVjay1pbmxpbmUge1xuICBkaXNwbGF5OiBpbmxpbmUtZmxleDtcbiAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAgcGFkZGluZy1sZWZ0OiAwO1xuICBtYXJnaW4tcmlnaHQ6IDAuNzVyZW07IH1cbiAgLmZvcm0tY2hlY2staW5saW5lIC5mb3JtLWNoZWNrLWlucHV0IHtcbiAgICBwb3NpdGlvbjogc3RhdGljO1xuICAgIG1hcmdpbi10b3A6IDA7XG4gICAgbWFyZ2luLXJpZ2h0OiAwLjMxMjVyZW07XG4gICAgbWFyZ2luLWxlZnQ6IDA7IH1cblxuLnZhbGlkLWZlZWRiYWNrIHtcbiAgZGlzcGxheTogbm9uZTtcbiAgd2lkdGg6IDEwMCU7XG4gIG1hcmdpbi10b3A6IDAuMjVyZW07XG4gIGZvbnQtc2l6ZTogODAlO1xuICBjb2xvcjogIzFEQUI0NzsgfVxuXG4udmFsaWQtdG9vbHRpcCB7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgdG9wOiAxMDAlO1xuICB6LWluZGV4OiA1O1xuICBkaXNwbGF5OiBub25lO1xuICBtYXgtd2lkdGg6IDEwMCU7XG4gIHBhZGRpbmc6IDAuMjVyZW0gMC41cmVtO1xuICBtYXJnaW4tdG9wOiAuMXJlbTtcbiAgZm9udC1zaXplOiAwLjg3NXJlbTtcbiAgbGluZS1oZWlnaHQ6IDEuNTtcbiAgY29sb3I6ICNmZmY7XG4gIGJhY2tncm91bmQtY29sb3I6IHJnYmEoMjksIDE3MSwgNzEsIDAuOSk7XG4gIGJvcmRlci1yYWRpdXM6IDA7IH1cblxuLndhcy12YWxpZGF0ZWQgOnZhbGlkIH4gLnZhbGlkLWZlZWRiYWNrLFxuLndhcy12YWxpZGF0ZWQgOnZhbGlkIH4gLnZhbGlkLXRvb2x0aXAsXG4uaXMtdmFsaWQgfiAudmFsaWQtZmVlZGJhY2ssXG4uaXMtdmFsaWQgfiAudmFsaWQtdG9vbHRpcCB7XG4gIGRpc3BsYXk6IGJsb2NrOyB9XG5cbi53YXMtdmFsaWRhdGVkIC5mb3JtLWNvbnRyb2w6dmFsaWQsIC5mb3JtLWNvbnRyb2wuaXMtdmFsaWQge1xuICBib3JkZXItY29sb3I6ICMxREFCNDc7XG4gIHBhZGRpbmctcmlnaHQ6IGNhbGMoMS41ZW0gKyAwLjc1cmVtKTtcbiAgYmFja2dyb3VuZC1pbWFnZTogdXJsKFwiZGF0YTppbWFnZS9zdmcreG1sLCUzY3N2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHdpZHRoPSc4JyBoZWlnaHQ9JzgnIHZpZXdCb3g9JzAgMCA4IDgnJTNlJTNjcGF0aCBmaWxsPSclMjMxREFCNDcnIGQ9J00yLjMgNi43M0wuNiA0LjUzYy0uNC0xLjA0LjQ2LTEuNCAxLjEtLjhsMS4xIDEuNCAzLjQtMy44Yy42LS42MyAxLjYtLjI3IDEuMi43bC00IDQuNmMtLjQzLjUtLjguNC0xLjEuMXonLyUzZSUzYy9zdmclM2VcIik7XG4gIGJhY2tncm91bmQtcmVwZWF0OiBuby1yZXBlYXQ7XG4gIGJhY2tncm91bmQtcG9zaXRpb246IHJpZ2h0IGNhbGMoMC4zNzVlbSArIDAuMTg3NXJlbSkgY2VudGVyO1xuICBiYWNrZ3JvdW5kLXNpemU6IGNhbGMoMC43NWVtICsgMC4zNzVyZW0pIGNhbGMoMC43NWVtICsgMC4zNzVyZW0pOyB9XG4gIC53YXMtdmFsaWRhdGVkIC5mb3JtLWNvbnRyb2w6dmFsaWQ6Zm9jdXMsIC5mb3JtLWNvbnRyb2wuaXMtdmFsaWQ6Zm9jdXMge1xuICAgIGJvcmRlci1jb2xvcjogIzFEQUI0NztcbiAgICBib3gtc2hhZG93OiAwIDAgMCAwLjJyZW0gcmdiYSgyOSwgMTcxLCA3MSwgMC4yNSk7IH1cblxuLndhcy12YWxpZGF0ZWQgdGV4dGFyZWEuZm9ybS1jb250cm9sOnZhbGlkLCB0ZXh0YXJlYS5mb3JtLWNvbnRyb2wuaXMtdmFsaWQge1xuICBwYWRkaW5nLXJpZ2h0OiBjYWxjKDEuNWVtICsgMC43NXJlbSk7XG4gIGJhY2tncm91bmQtcG9zaXRpb246IHRvcCBjYWxjKDAuMzc1ZW0gKyAwLjE4NzVyZW0pIHJpZ2h0IGNhbGMoMC4zNzVlbSArIDAuMTg3NXJlbSk7IH1cblxuLndhcy12YWxpZGF0ZWQgLmN1c3RvbS1zZWxlY3Q6dmFsaWQsIC5jdXN0b20tc2VsZWN0LmlzLXZhbGlkIHtcbiAgYm9yZGVyLWNvbG9yOiAjMURBQjQ3O1xuICBwYWRkaW5nLXJpZ2h0OiBjYWxjKDAuNzVlbSArIDIuMzEyNXJlbSk7XG4gIGJhY2tncm91bmQ6IHVybChcImRhdGE6aW1hZ2Uvc3ZnK3htbCwlM2NzdmcgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJyB3aWR0aD0nNCcgaGVpZ2h0PSc1JyB2aWV3Qm94PScwIDAgNCA1JyUzZSUzY3BhdGggZmlsbD0nJTIzMzQzYTQwJyBkPSdNMiAwTDAgMmg0em0wIDVMMCAzaDR6Jy8lM2UlM2Mvc3ZnJTNlXCIpIG5vLXJlcGVhdCByaWdodCAwLjc1cmVtIGNlbnRlci84cHggMTBweCwgdXJsKFwiZGF0YTppbWFnZS9zdmcreG1sLCUzY3N2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHdpZHRoPSc4JyBoZWlnaHQ9JzgnIHZpZXdCb3g9JzAgMCA4IDgnJTNlJTNjcGF0aCBmaWxsPSclMjMxREFCNDcnIGQ9J00yLjMgNi43M0wuNiA0LjUzYy0uNC0xLjA0LjQ2LTEuNCAxLjEtLjhsMS4xIDEuNCAzLjQtMy44Yy42LS42MyAxLjYtLjI3IDEuMi43bC00IDQuNmMtLjQzLjUtLjguNC0xLjEuMXonLyUzZSUzYy9zdmclM2VcIikgI2ZmZiBuby1yZXBlYXQgY2VudGVyIHJpZ2h0IDEuNzVyZW0vY2FsYygwLjc1ZW0gKyAwLjM3NXJlbSkgY2FsYygwLjc1ZW0gKyAwLjM3NXJlbSk7IH1cbiAgLndhcy12YWxpZGF0ZWQgLmN1c3RvbS1zZWxlY3Q6dmFsaWQ6Zm9jdXMsIC5jdXN0b20tc2VsZWN0LmlzLXZhbGlkOmZvY3VzIHtcbiAgICBib3JkZXItY29sb3I6ICMxREFCNDc7XG4gICAgYm94LXNoYWRvdzogMCAwIDAgMC4ycmVtIHJnYmEoMjksIDE3MSwgNzEsIDAuMjUpOyB9XG5cbi53YXMtdmFsaWRhdGVkIC5mb3JtLWNoZWNrLWlucHV0OnZhbGlkIH4gLmZvcm0tY2hlY2stbGFiZWwsIC5mb3JtLWNoZWNrLWlucHV0LmlzLXZhbGlkIH4gLmZvcm0tY2hlY2stbGFiZWwge1xuICBjb2xvcjogIzFEQUI0NzsgfVxuXG4ud2FzLXZhbGlkYXRlZCAuZm9ybS1jaGVjay1pbnB1dDp2YWxpZCB+IC52YWxpZC1mZWVkYmFjayxcbi53YXMtdmFsaWRhdGVkIC5mb3JtLWNoZWNrLWlucHV0OnZhbGlkIH4gLnZhbGlkLXRvb2x0aXAsIC5mb3JtLWNoZWNrLWlucHV0LmlzLXZhbGlkIH4gLnZhbGlkLWZlZWRiYWNrLFxuLmZvcm0tY2hlY2staW5wdXQuaXMtdmFsaWQgfiAudmFsaWQtdG9vbHRpcCB7XG4gIGRpc3BsYXk6IGJsb2NrOyB9XG5cbi53YXMtdmFsaWRhdGVkIC5jdXN0b20tY29udHJvbC1pbnB1dDp2YWxpZCB+IC5jdXN0b20tY29udHJvbC1sYWJlbCwgLmN1c3RvbS1jb250cm9sLWlucHV0LmlzLXZhbGlkIH4gLmN1c3RvbS1jb250cm9sLWxhYmVsIHtcbiAgY29sb3I6ICMxREFCNDc7IH1cbiAgLndhcy12YWxpZGF0ZWQgLmN1c3RvbS1jb250cm9sLWlucHV0OnZhbGlkIH4gLmN1c3RvbS1jb250cm9sLWxhYmVsOjpiZWZvcmUsIC5jdXN0b20tY29udHJvbC1pbnB1dC5pcy12YWxpZCB+IC5jdXN0b20tY29udHJvbC1sYWJlbDo6YmVmb3JlIHtcbiAgICBib3JkZXItY29sb3I6ICMxREFCNDc7IH1cblxuLndhcy12YWxpZGF0ZWQgLmN1c3RvbS1jb250cm9sLWlucHV0OnZhbGlkOmNoZWNrZWQgfiAuY3VzdG9tLWNvbnRyb2wtbGFiZWw6OmJlZm9yZSwgLmN1c3RvbS1jb250cm9sLWlucHV0LmlzLXZhbGlkOmNoZWNrZWQgfiAuY3VzdG9tLWNvbnRyb2wtbGFiZWw6OmJlZm9yZSB7XG4gIGJvcmRlci1jb2xvcjogIzI0ZDc1OTtcbiAgYmFja2dyb3VuZC1jb2xvcjogIzI0ZDc1OTsgfVxuXG4ud2FzLXZhbGlkYXRlZCAuY3VzdG9tLWNvbnRyb2wtaW5wdXQ6dmFsaWQ6Zm9jdXMgfiAuY3VzdG9tLWNvbnRyb2wtbGFiZWw6OmJlZm9yZSwgLmN1c3RvbS1jb250cm9sLWlucHV0LmlzLXZhbGlkOmZvY3VzIH4gLmN1c3RvbS1jb250cm9sLWxhYmVsOjpiZWZvcmUge1xuICBib3gtc2hhZG93OiAwIDAgMCAwLjJyZW0gcmdiYSgyOSwgMTcxLCA3MSwgMC4yNSk7IH1cblxuLndhcy12YWxpZGF0ZWQgLmN1c3RvbS1jb250cm9sLWlucHV0OnZhbGlkOmZvY3VzOm5vdCg6Y2hlY2tlZCkgfiAuY3VzdG9tLWNvbnRyb2wtbGFiZWw6OmJlZm9yZSwgLmN1c3RvbS1jb250cm9sLWlucHV0LmlzLXZhbGlkOmZvY3VzOm5vdCg6Y2hlY2tlZCkgfiAuY3VzdG9tLWNvbnRyb2wtbGFiZWw6OmJlZm9yZSB7XG4gIGJvcmRlci1jb2xvcjogIzFEQUI0NzsgfVxuXG4ud2FzLXZhbGlkYXRlZCAuY3VzdG9tLWZpbGUtaW5wdXQ6dmFsaWQgfiAuY3VzdG9tLWZpbGUtbGFiZWwsIC5jdXN0b20tZmlsZS1pbnB1dC5pcy12YWxpZCB+IC5jdXN0b20tZmlsZS1sYWJlbCB7XG4gIGJvcmRlci1jb2xvcjogIzFEQUI0NzsgfVxuXG4ud2FzLXZhbGlkYXRlZCAuY3VzdG9tLWZpbGUtaW5wdXQ6dmFsaWQ6Zm9jdXMgfiAuY3VzdG9tLWZpbGUtbGFiZWwsIC5jdXN0b20tZmlsZS1pbnB1dC5pcy12YWxpZDpmb2N1cyB+IC5jdXN0b20tZmlsZS1sYWJlbCB7XG4gIGJvcmRlci1jb2xvcjogIzFEQUI0NztcbiAgYm94LXNoYWRvdzogMCAwIDAgMC4ycmVtIHJnYmEoMjksIDE3MSwgNzEsIDAuMjUpOyB9XG5cbi5pbnZhbGlkLWZlZWRiYWNrIHtcbiAgZGlzcGxheTogbm9uZTtcbiAgd2lkdGg6IDEwMCU7XG4gIG1hcmdpbi10b3A6IDAuMjVyZW07XG4gIGZvbnQtc2l6ZTogODAlO1xuICBjb2xvcjogI0ZDNDEzRjsgfVxuXG4uaW52YWxpZC10b29sdGlwIHtcbiAgcG9zaXRpb246IGFic29sdXRlO1xuICB0b3A6IDEwMCU7XG4gIHotaW5kZXg6IDU7XG4gIGRpc3BsYXk6IG5vbmU7XG4gIG1heC13aWR0aDogMTAwJTtcbiAgcGFkZGluZzogMC4yNXJlbSAwLjVyZW07XG4gIG1hcmdpbi10b3A6IC4xcmVtO1xuICBmb250LXNpemU6IDAuODc1cmVtO1xuICBsaW5lLWhlaWdodDogMS41O1xuICBjb2xvcjogI2ZmZjtcbiAgYmFja2dyb3VuZC1jb2xvcjogcmdiYSgyNTIsIDY1LCA2MywgMC45KTtcbiAgYm9yZGVyLXJhZGl1czogMDsgfVxuXG4ud2FzLXZhbGlkYXRlZCA6aW52YWxpZCB+IC5pbnZhbGlkLWZlZWRiYWNrLFxuLndhcy12YWxpZGF0ZWQgOmludmFsaWQgfiAuaW52YWxpZC10b29sdGlwLFxuLmlzLWludmFsaWQgfiAuaW52YWxpZC1mZWVkYmFjayxcbi5pcy1pbnZhbGlkIH4gLmludmFsaWQtdG9vbHRpcCB7XG4gIGRpc3BsYXk6IGJsb2NrOyB9XG5cbi53YXMtdmFsaWRhdGVkIC5mb3JtLWNvbnRyb2w6aW52YWxpZCwgLmZvcm0tY29udHJvbC5pcy1pbnZhbGlkIHtcbiAgYm9yZGVyLWNvbG9yOiAjRkM0MTNGO1xuICBwYWRkaW5nLXJpZ2h0OiBjYWxjKDEuNWVtICsgMC43NXJlbSk7XG4gIGJhY2tncm91bmQtaW1hZ2U6IHVybChcImRhdGE6aW1hZ2Uvc3ZnK3htbCwlM2NzdmcgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJyB3aWR0aD0nMTInIGhlaWdodD0nMTInIGZpbGw9J25vbmUnIHN0cm9rZT0nJTIzRkM0MTNGJyB2aWV3Qm94PScwIDAgMTIgMTInJTNlJTNjY2lyY2xlIGN4PSc2JyBjeT0nNicgcj0nNC41Jy8lM2UlM2NwYXRoIHN0cm9rZS1saW5lam9pbj0ncm91bmQnIGQ9J001LjggMy42aC40TDYgNi41eicvJTNlJTNjY2lyY2xlIGN4PSc2JyBjeT0nOC4yJyByPScuNicgZmlsbD0nJTIzRkM0MTNGJyBzdHJva2U9J25vbmUnLyUzZSUzYy9zdmclM2VcIik7XG4gIGJhY2tncm91bmQtcmVwZWF0OiBuby1yZXBlYXQ7XG4gIGJhY2tncm91bmQtcG9zaXRpb246IHJpZ2h0IGNhbGMoMC4zNzVlbSArIDAuMTg3NXJlbSkgY2VudGVyO1xuICBiYWNrZ3JvdW5kLXNpemU6IGNhbGMoMC43NWVtICsgMC4zNzVyZW0pIGNhbGMoMC43NWVtICsgMC4zNzVyZW0pOyB9XG4gIC53YXMtdmFsaWRhdGVkIC5mb3JtLWNvbnRyb2w6aW52YWxpZDpmb2N1cywgLmZvcm0tY29udHJvbC5pcy1pbnZhbGlkOmZvY3VzIHtcbiAgICBib3JkZXItY29sb3I6ICNGQzQxM0Y7XG4gICAgYm94LXNoYWRvdzogMCAwIDAgMC4ycmVtIHJnYmEoMjUyLCA2NSwgNjMsIDAuMjUpOyB9XG5cbi53YXMtdmFsaWRhdGVkIHRleHRhcmVhLmZvcm0tY29udHJvbDppbnZhbGlkLCB0ZXh0YXJlYS5mb3JtLWNvbnRyb2wuaXMtaW52YWxpZCB7XG4gIHBhZGRpbmctcmlnaHQ6IGNhbGMoMS41ZW0gKyAwLjc1cmVtKTtcbiAgYmFja2dyb3VuZC1wb3NpdGlvbjogdG9wIGNhbGMoMC4zNzVlbSArIDAuMTg3NXJlbSkgcmlnaHQgY2FsYygwLjM3NWVtICsgMC4xODc1cmVtKTsgfVxuXG4ud2FzLXZhbGlkYXRlZCAuY3VzdG9tLXNlbGVjdDppbnZhbGlkLCAuY3VzdG9tLXNlbGVjdC5pcy1pbnZhbGlkIHtcbiAgYm9yZGVyLWNvbG9yOiAjRkM0MTNGO1xuICBwYWRkaW5nLXJpZ2h0OiBjYWxjKDAuNzVlbSArIDIuMzEyNXJlbSk7XG4gIGJhY2tncm91bmQ6IHVybChcImRhdGE6aW1hZ2Uvc3ZnK3htbCwlM2NzdmcgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJyB3aWR0aD0nNCcgaGVpZ2h0PSc1JyB2aWV3Qm94PScwIDAgNCA1JyUzZSUzY3BhdGggZmlsbD0nJTIzMzQzYTQwJyBkPSdNMiAwTDAgMmg0em0wIDVMMCAzaDR6Jy8lM2UlM2Mvc3ZnJTNlXCIpIG5vLXJlcGVhdCByaWdodCAwLjc1cmVtIGNlbnRlci84cHggMTBweCwgdXJsKFwiZGF0YTppbWFnZS9zdmcreG1sLCUzY3N2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHdpZHRoPScxMicgaGVpZ2h0PScxMicgZmlsbD0nbm9uZScgc3Ryb2tlPSclMjNGQzQxM0YnIHZpZXdCb3g9JzAgMCAxMiAxMiclM2UlM2NjaXJjbGUgY3g9JzYnIGN5PSc2JyByPSc0LjUnLyUzZSUzY3BhdGggc3Ryb2tlLWxpbmVqb2luPSdyb3VuZCcgZD0nTTUuOCAzLjZoLjRMNiA2LjV6Jy8lM2UlM2NjaXJjbGUgY3g9JzYnIGN5PSc4LjInIHI9Jy42JyBmaWxsPSclMjNGQzQxM0YnIHN0cm9rZT0nbm9uZScvJTNlJTNjL3N2ZyUzZVwiKSAjZmZmIG5vLXJlcGVhdCBjZW50ZXIgcmlnaHQgMS43NXJlbS9jYWxjKDAuNzVlbSArIDAuMzc1cmVtKSBjYWxjKDAuNzVlbSArIDAuMzc1cmVtKTsgfVxuICAud2FzLXZhbGlkYXRlZCAuY3VzdG9tLXNlbGVjdDppbnZhbGlkOmZvY3VzLCAuY3VzdG9tLXNlbGVjdC5pcy1pbnZhbGlkOmZvY3VzIHtcbiAgICBib3JkZXItY29sb3I6ICNGQzQxM0Y7XG4gICAgYm94LXNoYWRvdzogMCAwIDAgMC4ycmVtIHJnYmEoMjUyLCA2NSwgNjMsIDAuMjUpOyB9XG5cbi53YXMtdmFsaWRhdGVkIC5mb3JtLWNoZWNrLWlucHV0OmludmFsaWQgfiAuZm9ybS1jaGVjay1sYWJlbCwgLmZvcm0tY2hlY2staW5wdXQuaXMtaW52YWxpZCB+IC5mb3JtLWNoZWNrLWxhYmVsIHtcbiAgY29sb3I6ICNGQzQxM0Y7IH1cblxuLndhcy12YWxpZGF0ZWQgLmZvcm0tY2hlY2staW5wdXQ6aW52YWxpZCB+IC5pbnZhbGlkLWZlZWRiYWNrLFxuLndhcy12YWxpZGF0ZWQgLmZvcm0tY2hlY2staW5wdXQ6aW52YWxpZCB+IC5pbnZhbGlkLXRvb2x0aXAsIC5mb3JtLWNoZWNrLWlucHV0LmlzLWludmFsaWQgfiAuaW52YWxpZC1mZWVkYmFjayxcbi5mb3JtLWNoZWNrLWlucHV0LmlzLWludmFsaWQgfiAuaW52YWxpZC10b29sdGlwIHtcbiAgZGlzcGxheTogYmxvY2s7IH1cblxuLndhcy12YWxpZGF0ZWQgLmN1c3RvbS1jb250cm9sLWlucHV0OmludmFsaWQgfiAuY3VzdG9tLWNvbnRyb2wtbGFiZWwsIC5jdXN0b20tY29udHJvbC1pbnB1dC5pcy1pbnZhbGlkIH4gLmN1c3RvbS1jb250cm9sLWxhYmVsIHtcbiAgY29sb3I6ICNGQzQxM0Y7IH1cbiAgLndhcy12YWxpZGF0ZWQgLmN1c3RvbS1jb250cm9sLWlucHV0OmludmFsaWQgfiAuY3VzdG9tLWNvbnRyb2wtbGFiZWw6OmJlZm9yZSwgLmN1c3RvbS1jb250cm9sLWlucHV0LmlzLWludmFsaWQgfiAuY3VzdG9tLWNvbnRyb2wtbGFiZWw6OmJlZm9yZSB7XG4gICAgYm9yZGVyLWNvbG9yOiAjRkM0MTNGOyB9XG5cbi53YXMtdmFsaWRhdGVkIC5jdXN0b20tY29udHJvbC1pbnB1dDppbnZhbGlkOmNoZWNrZWQgfiAuY3VzdG9tLWNvbnRyb2wtbGFiZWw6OmJlZm9yZSwgLmN1c3RvbS1jb250cm9sLWlucHV0LmlzLWludmFsaWQ6Y2hlY2tlZCB+IC5jdXN0b20tY29udHJvbC1sYWJlbDo6YmVmb3JlIHtcbiAgYm9yZGVyLWNvbG9yOiAjZmQ3MzcxO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZmQ3MzcxOyB9XG5cbi53YXMtdmFsaWRhdGVkIC5jdXN0b20tY29udHJvbC1pbnB1dDppbnZhbGlkOmZvY3VzIH4gLmN1c3RvbS1jb250cm9sLWxhYmVsOjpiZWZvcmUsIC5jdXN0b20tY29udHJvbC1pbnB1dC5pcy1pbnZhbGlkOmZvY3VzIH4gLmN1c3RvbS1jb250cm9sLWxhYmVsOjpiZWZvcmUge1xuICBib3gtc2hhZG93OiAwIDAgMCAwLjJyZW0gcmdiYSgyNTIsIDY1LCA2MywgMC4yNSk7IH1cblxuLndhcy12YWxpZGF0ZWQgLmN1c3RvbS1jb250cm9sLWlucHV0OmludmFsaWQ6Zm9jdXM6bm90KDpjaGVja2VkKSB+IC5jdXN0b20tY29udHJvbC1sYWJlbDo6YmVmb3JlLCAuY3VzdG9tLWNvbnRyb2wtaW5wdXQuaXMtaW52YWxpZDpmb2N1czpub3QoOmNoZWNrZWQpIH4gLmN1c3RvbS1jb250cm9sLWxhYmVsOjpiZWZvcmUge1xuICBib3JkZXItY29sb3I6ICNGQzQxM0Y7IH1cblxuLndhcy12YWxpZGF0ZWQgLmN1c3RvbS1maWxlLWlucHV0OmludmFsaWQgfiAuY3VzdG9tLWZpbGUtbGFiZWwsIC5jdXN0b20tZmlsZS1pbnB1dC5pcy1pbnZhbGlkIH4gLmN1c3RvbS1maWxlLWxhYmVsIHtcbiAgYm9yZGVyLWNvbG9yOiAjRkM0MTNGOyB9XG5cbi53YXMtdmFsaWRhdGVkIC5jdXN0b20tZmlsZS1pbnB1dDppbnZhbGlkOmZvY3VzIH4gLmN1c3RvbS1maWxlLWxhYmVsLCAuY3VzdG9tLWZpbGUtaW5wdXQuaXMtaW52YWxpZDpmb2N1cyB+IC5jdXN0b20tZmlsZS1sYWJlbCB7XG4gIGJvcmRlci1jb2xvcjogI0ZDNDEzRjtcbiAgYm94LXNoYWRvdzogMCAwIDAgMC4ycmVtIHJnYmEoMjUyLCA2NSwgNjMsIDAuMjUpOyB9XG5cbi5mb3JtLWlubGluZSB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGZsZXgtZmxvdzogcm93IHdyYXA7XG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7IH1cbiAgLmZvcm0taW5saW5lIC5mb3JtLWNoZWNrIHtcbiAgICB3aWR0aDogMTAwJTsgfVxuICBAbWVkaWEgKG1pbi13aWR0aDogNTc2cHgpIHtcbiAgICAuZm9ybS1pbmxpbmUgbGFiZWwge1xuICAgICAgZGlzcGxheTogZmxleDtcbiAgICAgIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gICAgICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcbiAgICAgIG1hcmdpbi1ib3R0b206IDA7IH1cbiAgICAuZm9ybS1pbmxpbmUgLmZvcm0tZ3JvdXAge1xuICAgICAgZGlzcGxheTogZmxleDtcbiAgICAgIGZsZXg6IDAgMCBhdXRvO1xuICAgICAgZmxleC1mbG93OiByb3cgd3JhcDtcbiAgICAgIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gICAgICBtYXJnaW4tYm90dG9tOiAwOyB9XG4gICAgLmZvcm0taW5saW5lIC5mb3JtLWNvbnRyb2wge1xuICAgICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICAgICAgd2lkdGg6IGF1dG87XG4gICAgICB2ZXJ0aWNhbC1hbGlnbjogbWlkZGxlOyB9XG4gICAgLmZvcm0taW5saW5lIC5mb3JtLWNvbnRyb2wtcGxhaW50ZXh0IHtcbiAgICAgIGRpc3BsYXk6IGlubGluZS1ibG9jazsgfVxuICAgIC5mb3JtLWlubGluZSAuaW5wdXQtZ3JvdXAsXG4gICAgLmZvcm0taW5saW5lIC5jdXN0b20tc2VsZWN0IHtcbiAgICAgIHdpZHRoOiBhdXRvOyB9XG4gICAgLmZvcm0taW5saW5lIC5mb3JtLWNoZWNrIHtcbiAgICAgIGRpc3BsYXk6IGZsZXg7XG4gICAgICBhbGlnbi1pdGVtczogY2VudGVyO1xuICAgICAganVzdGlmeS1jb250ZW50OiBjZW50ZXI7XG4gICAgICB3aWR0aDogYXV0bztcbiAgICAgIHBhZGRpbmctbGVmdDogMDsgfVxuICAgIC5mb3JtLWlubGluZSAuZm9ybS1jaGVjay1pbnB1dCB7XG4gICAgICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gICAgICBmbGV4LXNocmluazogMDtcbiAgICAgIG1hcmdpbi10b3A6IDA7XG4gICAgICBtYXJnaW4tcmlnaHQ6IDAuMjVyZW07XG4gICAgICBtYXJnaW4tbGVmdDogMDsgfVxuICAgIC5mb3JtLWlubGluZSAuY3VzdG9tLWNvbnRyb2wge1xuICAgICAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAgICAgIGp1c3RpZnktY29udGVudDogY2VudGVyOyB9XG4gICAgLmZvcm0taW5saW5lIC5jdXN0b20tY29udHJvbC1sYWJlbCB7XG4gICAgICBtYXJnaW4tYm90dG9tOiAwOyB9IH1cblxuLmJ0biB7XG4gIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgZm9udC13ZWlnaHQ6IDQwMDtcbiAgY29sb3I6ICM1MTUxNTE7XG4gIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgdmVydGljYWwtYWxpZ246IG1pZGRsZTtcbiAgdXNlci1zZWxlY3Q6IG5vbmU7XG4gIGJhY2tncm91bmQtY29sb3I6IHRyYW5zcGFyZW50O1xuICBib3JkZXI6IDFweCBzb2xpZCB0cmFuc3BhcmVudDtcbiAgcGFkZGluZzogMC4zNzVyZW0gMC43NXJlbTtcbiAgZm9udC1zaXplOiAxcmVtO1xuICBsaW5lLWhlaWdodDogMS41O1xuICBib3JkZXItcmFkaXVzOiAwO1xuICB0cmFuc2l0aW9uOiBjb2xvciAwLjE1cyBlYXNlLWluLW91dCwgYmFja2dyb3VuZC1jb2xvciAwLjE1cyBlYXNlLWluLW91dCwgYm9yZGVyLWNvbG9yIDAuMTVzIGVhc2UtaW4tb3V0LCBib3gtc2hhZG93IDAuMTVzIGVhc2UtaW4tb3V0OyB9XG4gIEBtZWRpYSAocHJlZmVycy1yZWR1Y2VkLW1vdGlvbjogcmVkdWNlKSB7XG4gICAgLmJ0biB7XG4gICAgICB0cmFuc2l0aW9uOiBub25lOyB9IH1cbiAgLmJ0bjpob3ZlciB7XG4gICAgY29sb3I6ICM1MTUxNTE7XG4gICAgdGV4dC1kZWNvcmF0aW9uOiBub25lOyB9XG4gIC5idG46Zm9jdXMsIC5idG4uZm9jdXMge1xuICAgIG91dGxpbmU6IDA7XG4gICAgYm94LXNoYWRvdzogMCAwIDAgMC4ycmVtIHJnYmEoNjMsIDEzMiwgMjUyLCAwLjI1KTsgfVxuICAuYnRuLmRpc2FibGVkLCAuYnRuOmRpc2FibGVkIHtcbiAgICBvcGFjaXR5OiAwLjY1OyB9XG4gIC5idG46bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCkge1xuICAgIGN1cnNvcjogcG9pbnRlcjsgfVxuXG5hLmJ0bi5kaXNhYmxlZCxcbmZpZWxkc2V0OmRpc2FibGVkIGEuYnRuIHtcbiAgcG9pbnRlci1ldmVudHM6IG5vbmU7IH1cblxuLmJ0bi1wcmltYXJ5IHtcbiAgY29sb3I6ICNmZmY7XG4gIGJhY2tncm91bmQtY29sb3I6ICMzRjg0RkM7XG4gIGJvcmRlci1jb2xvcjogIzNGODRGQzsgfVxuICAuYnRuLXByaW1hcnk6aG92ZXIge1xuICAgIGNvbG9yOiAjZmZmO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICMxOTZjZmI7XG4gICAgYm9yZGVyLWNvbG9yOiAjMGQ2NGZiOyB9XG4gIC5idG4tcHJpbWFyeTpmb2N1cywgLmJ0bi1wcmltYXJ5LmZvY3VzIHtcbiAgICBjb2xvcjogI2ZmZjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjMTk2Y2ZiO1xuICAgIGJvcmRlci1jb2xvcjogIzBkNjRmYjtcbiAgICBib3gtc2hhZG93OiAwIDAgMCAwLjJyZW0gcmdiYSg5MiwgMTUwLCAyNTIsIDAuNSk7IH1cbiAgLmJ0bi1wcmltYXJ5LmRpc2FibGVkLCAuYnRuLXByaW1hcnk6ZGlzYWJsZWQge1xuICAgIGNvbG9yOiAjZmZmO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICMzRjg0RkM7XG4gICAgYm9yZGVyLWNvbG9yOiAjM0Y4NEZDOyB9XG4gIC5idG4tcHJpbWFyeTpub3QoOmRpc2FibGVkKTpub3QoLmRpc2FibGVkKTphY3RpdmUsIC5idG4tcHJpbWFyeTpub3QoOmRpc2FibGVkKTpub3QoLmRpc2FibGVkKS5hY3RpdmUsXG4gIC5zaG93ID4gLmJ0bi1wcmltYXJ5LmRyb3Bkb3duLXRvZ2dsZSB7XG4gICAgY29sb3I6ICNmZmY7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogIzBkNjRmYjtcbiAgICBib3JkZXItY29sb3I6ICMwNDVkZjc7IH1cbiAgICAuYnRuLXByaW1hcnk6bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCk6YWN0aXZlOmZvY3VzLCAuYnRuLXByaW1hcnk6bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCkuYWN0aXZlOmZvY3VzLFxuICAgIC5zaG93ID4gLmJ0bi1wcmltYXJ5LmRyb3Bkb3duLXRvZ2dsZTpmb2N1cyB7XG4gICAgICBib3gtc2hhZG93OiAwIDAgMCAwLjJyZW0gcmdiYSg5MiwgMTUwLCAyNTIsIDAuNSk7IH1cblxuLmJ0bi1zZWNvbmRhcnkge1xuICBjb2xvcjogI2ZmZjtcbiAgYmFja2dyb3VuZC1jb2xvcjogIzcyN0Y5NDtcbiAgYm9yZGVyLWNvbG9yOiAjNzI3Rjk0OyB9XG4gIC5idG4tc2Vjb25kYXJ5OmhvdmVyIHtcbiAgICBjb2xvcjogI2ZmZjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjNjE2YzdmO1xuICAgIGJvcmRlci1jb2xvcjogIzViNjY3ODsgfVxuICAuYnRuLXNlY29uZGFyeTpmb2N1cywgLmJ0bi1zZWNvbmRhcnkuZm9jdXMge1xuICAgIGNvbG9yOiAjZmZmO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICM2MTZjN2Y7XG4gICAgYm9yZGVyLWNvbG9yOiAjNWI2Njc4O1xuICAgIGJveC1zaGFkb3c6IDAgMCAwIDAuMnJlbSByZ2JhKDEzNSwgMTQ2LCAxNjQsIDAuNSk7IH1cbiAgLmJ0bi1zZWNvbmRhcnkuZGlzYWJsZWQsIC5idG4tc2Vjb25kYXJ5OmRpc2FibGVkIHtcbiAgICBjb2xvcjogI2ZmZjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjNzI3Rjk0O1xuICAgIGJvcmRlci1jb2xvcjogIzcyN0Y5NDsgfVxuICAuYnRuLXNlY29uZGFyeTpub3QoOmRpc2FibGVkKTpub3QoLmRpc2FibGVkKTphY3RpdmUsIC5idG4tc2Vjb25kYXJ5Om5vdCg6ZGlzYWJsZWQpOm5vdCguZGlzYWJsZWQpLmFjdGl2ZSxcbiAgLnNob3cgPiAuYnRuLXNlY29uZGFyeS5kcm9wZG93bi10b2dnbGUge1xuICAgIGNvbG9yOiAjZmZmO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICM1YjY2Nzg7XG4gICAgYm9yZGVyLWNvbG9yOiAjNTY2MDcxOyB9XG4gICAgLmJ0bi1zZWNvbmRhcnk6bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCk6YWN0aXZlOmZvY3VzLCAuYnRuLXNlY29uZGFyeTpub3QoOmRpc2FibGVkKTpub3QoLmRpc2FibGVkKS5hY3RpdmU6Zm9jdXMsXG4gICAgLnNob3cgPiAuYnRuLXNlY29uZGFyeS5kcm9wZG93bi10b2dnbGU6Zm9jdXMge1xuICAgICAgYm94LXNoYWRvdzogMCAwIDAgMC4ycmVtIHJnYmEoMTM1LCAxNDYsIDE2NCwgMC41KTsgfVxuXG4uYnRuLXN1Y2Nlc3Mge1xuICBjb2xvcjogI2ZmZjtcbiAgYmFja2dyb3VuZC1jb2xvcjogIzFEQUI0NztcbiAgYm9yZGVyLWNvbG9yOiAjMURBQjQ3OyB9XG4gIC5idG4tc3VjY2Vzczpob3ZlciB7XG4gICAgY29sb3I6ICNmZmY7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogIzE3OGEzOTtcbiAgICBib3JkZXItY29sb3I6ICMxNjdmMzU7IH1cbiAgLmJ0bi1zdWNjZXNzOmZvY3VzLCAuYnRuLXN1Y2Nlc3MuZm9jdXMge1xuICAgIGNvbG9yOiAjZmZmO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICMxNzhhMzk7XG4gICAgYm9yZGVyLWNvbG9yOiAjMTY3ZjM1O1xuICAgIGJveC1zaGFkb3c6IDAgMCAwIDAuMnJlbSByZ2JhKDYzLCAxODQsIDk5LCAwLjUpOyB9XG4gIC5idG4tc3VjY2Vzcy5kaXNhYmxlZCwgLmJ0bi1zdWNjZXNzOmRpc2FibGVkIHtcbiAgICBjb2xvcjogI2ZmZjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjMURBQjQ3O1xuICAgIGJvcmRlci1jb2xvcjogIzFEQUI0NzsgfVxuICAuYnRuLXN1Y2Nlc3M6bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCk6YWN0aXZlLCAuYnRuLXN1Y2Nlc3M6bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCkuYWN0aXZlLFxuICAuc2hvdyA+IC5idG4tc3VjY2Vzcy5kcm9wZG93bi10b2dnbGUge1xuICAgIGNvbG9yOiAjZmZmO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICMxNjdmMzU7XG4gICAgYm9yZGVyLWNvbG9yOiAjMTQ3NDMwOyB9XG4gICAgLmJ0bi1zdWNjZXNzOm5vdCg6ZGlzYWJsZWQpOm5vdCguZGlzYWJsZWQpOmFjdGl2ZTpmb2N1cywgLmJ0bi1zdWNjZXNzOm5vdCg6ZGlzYWJsZWQpOm5vdCguZGlzYWJsZWQpLmFjdGl2ZTpmb2N1cyxcbiAgICAuc2hvdyA+IC5idG4tc3VjY2Vzcy5kcm9wZG93bi10b2dnbGU6Zm9jdXMge1xuICAgICAgYm94LXNoYWRvdzogMCAwIDAgMC4ycmVtIHJnYmEoNjMsIDE4NCwgOTksIDAuNSk7IH1cblxuLmJ0bi1pbmZvIHtcbiAgY29sb3I6ICNmZmY7XG4gIGJhY2tncm91bmQtY29sb3I6ICM4QTNGRkM7XG4gIGJvcmRlci1jb2xvcjogIzhBM0ZGQzsgfVxuICAuYnRuLWluZm86aG92ZXIge1xuICAgIGNvbG9yOiAjZmZmO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICM3MzE5ZmI7XG4gICAgYm9yZGVyLWNvbG9yOiAjNmIwZGZiOyB9XG4gIC5idG4taW5mbzpmb2N1cywgLmJ0bi1pbmZvLmZvY3VzIHtcbiAgICBjb2xvcjogI2ZmZjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjNzMxOWZiO1xuICAgIGJvcmRlci1jb2xvcjogIzZiMGRmYjtcbiAgICBib3gtc2hhZG93OiAwIDAgMCAwLjJyZW0gcmdiYSgxNTYsIDkyLCAyNTIsIDAuNSk7IH1cbiAgLmJ0bi1pbmZvLmRpc2FibGVkLCAuYnRuLWluZm86ZGlzYWJsZWQge1xuICAgIGNvbG9yOiAjZmZmO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICM4QTNGRkM7XG4gICAgYm9yZGVyLWNvbG9yOiAjOEEzRkZDOyB9XG4gIC5idG4taW5mbzpub3QoOmRpc2FibGVkKTpub3QoLmRpc2FibGVkKTphY3RpdmUsIC5idG4taW5mbzpub3QoOmRpc2FibGVkKTpub3QoLmRpc2FibGVkKS5hY3RpdmUsXG4gIC5zaG93ID4gLmJ0bi1pbmZvLmRyb3Bkb3duLXRvZ2dsZSB7XG4gICAgY29sb3I6ICNmZmY7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogIzZiMGRmYjtcbiAgICBib3JkZXItY29sb3I6ICM2NTA0Zjc7IH1cbiAgICAuYnRuLWluZm86bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCk6YWN0aXZlOmZvY3VzLCAuYnRuLWluZm86bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCkuYWN0aXZlOmZvY3VzLFxuICAgIC5zaG93ID4gLmJ0bi1pbmZvLmRyb3Bkb3duLXRvZ2dsZTpmb2N1cyB7XG4gICAgICBib3gtc2hhZG93OiAwIDAgMCAwLjJyZW0gcmdiYSgxNTYsIDkyLCAyNTIsIDAuNSk7IH1cblxuLmJ0bi13YXJuaW5nIHtcbiAgY29sb3I6ICMyMTI1Mjk7XG4gIGJhY2tncm91bmQtY29sb3I6ICNGQ0FFM0Y7XG4gIGJvcmRlci1jb2xvcjogI0ZDQUUzRjsgfVxuICAuYnRuLXdhcm5pbmc6aG92ZXIge1xuICAgIGNvbG9yOiAjMjEyNTI5O1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNmYjllMTk7XG4gICAgYm9yZGVyLWNvbG9yOiAjZmI5OTBkOyB9XG4gIC5idG4td2FybmluZzpmb2N1cywgLmJ0bi13YXJuaW5nLmZvY3VzIHtcbiAgICBjb2xvcjogIzIxMjUyOTtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjZmI5ZTE5O1xuICAgIGJvcmRlci1jb2xvcjogI2ZiOTkwZDtcbiAgICBib3gtc2hhZG93OiAwIDAgMCAwLjJyZW0gcmdiYSgyMTksIDE1MywgNjAsIDAuNSk7IH1cbiAgLmJ0bi13YXJuaW5nLmRpc2FibGVkLCAuYnRuLXdhcm5pbmc6ZGlzYWJsZWQge1xuICAgIGNvbG9yOiAjMjEyNTI5O1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNGQ0FFM0Y7XG4gICAgYm9yZGVyLWNvbG9yOiAjRkNBRTNGOyB9XG4gIC5idG4td2FybmluZzpub3QoOmRpc2FibGVkKTpub3QoLmRpc2FibGVkKTphY3RpdmUsIC5idG4td2FybmluZzpub3QoOmRpc2FibGVkKTpub3QoLmRpc2FibGVkKS5hY3RpdmUsXG4gIC5zaG93ID4gLmJ0bi13YXJuaW5nLmRyb3Bkb3duLXRvZ2dsZSB7XG4gICAgY29sb3I6ICMyMTI1Mjk7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI2ZiOTkwZDtcbiAgICBib3JkZXItY29sb3I6ICNmNzkzMDQ7IH1cbiAgICAuYnRuLXdhcm5pbmc6bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCk6YWN0aXZlOmZvY3VzLCAuYnRuLXdhcm5pbmc6bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCkuYWN0aXZlOmZvY3VzLFxuICAgIC5zaG93ID4gLmJ0bi13YXJuaW5nLmRyb3Bkb3duLXRvZ2dsZTpmb2N1cyB7XG4gICAgICBib3gtc2hhZG93OiAwIDAgMCAwLjJyZW0gcmdiYSgyMTksIDE1MywgNjAsIDAuNSk7IH1cblxuLmJ0bi1kYW5nZXIge1xuICBjb2xvcjogI2ZmZjtcbiAgYmFja2dyb3VuZC1jb2xvcjogI0ZDNDEzRjtcbiAgYm9yZGVyLWNvbG9yOiAjRkM0MTNGOyB9XG4gIC5idG4tZGFuZ2VyOmhvdmVyIHtcbiAgICBjb2xvcjogI2ZmZjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjZmIxYzE5O1xuICAgIGJvcmRlci1jb2xvcjogI2ZiMGYwZDsgfVxuICAuYnRuLWRhbmdlcjpmb2N1cywgLmJ0bi1kYW5nZXIuZm9jdXMge1xuICAgIGNvbG9yOiAjZmZmO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNmYjFjMTk7XG4gICAgYm9yZGVyLWNvbG9yOiAjZmIwZjBkO1xuICAgIGJveC1zaGFkb3c6IDAgMCAwIDAuMnJlbSByZ2JhKDI1MiwgOTQsIDkyLCAwLjUpOyB9XG4gIC5idG4tZGFuZ2VyLmRpc2FibGVkLCAuYnRuLWRhbmdlcjpkaXNhYmxlZCB7XG4gICAgY29sb3I6ICNmZmY7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI0ZDNDEzRjtcbiAgICBib3JkZXItY29sb3I6ICNGQzQxM0Y7IH1cbiAgLmJ0bi1kYW5nZXI6bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCk6YWN0aXZlLCAuYnRuLWRhbmdlcjpub3QoOmRpc2FibGVkKTpub3QoLmRpc2FibGVkKS5hY3RpdmUsXG4gIC5zaG93ID4gLmJ0bi1kYW5nZXIuZHJvcGRvd24tdG9nZ2xlIHtcbiAgICBjb2xvcjogI2ZmZjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjZmIwZjBkO1xuICAgIGJvcmRlci1jb2xvcjogI2Y3MDYwNDsgfVxuICAgIC5idG4tZGFuZ2VyOm5vdCg6ZGlzYWJsZWQpOm5vdCguZGlzYWJsZWQpOmFjdGl2ZTpmb2N1cywgLmJ0bi1kYW5nZXI6bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCkuYWN0aXZlOmZvY3VzLFxuICAgIC5zaG93ID4gLmJ0bi1kYW5nZXIuZHJvcGRvd24tdG9nZ2xlOmZvY3VzIHtcbiAgICAgIGJveC1zaGFkb3c6IDAgMCAwIDAuMnJlbSByZ2JhKDI1MiwgOTQsIDkyLCAwLjUpOyB9XG5cbi5idG4tbGlnaHQge1xuICBjb2xvcjogIzIxMjUyOTtcbiAgYmFja2dyb3VuZC1jb2xvcjogI2Y4ZjlmYTtcbiAgYm9yZGVyLWNvbG9yOiAjZjhmOWZhOyB9XG4gIC5idG4tbGlnaHQ6aG92ZXIge1xuICAgIGNvbG9yOiAjMjEyNTI5O1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNlMmU2ZWE7XG4gICAgYm9yZGVyLWNvbG9yOiAjZGFlMGU1OyB9XG4gIC5idG4tbGlnaHQ6Zm9jdXMsIC5idG4tbGlnaHQuZm9jdXMge1xuICAgIGNvbG9yOiAjMjEyNTI5O1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNlMmU2ZWE7XG4gICAgYm9yZGVyLWNvbG9yOiAjZGFlMGU1O1xuICAgIGJveC1zaGFkb3c6IDAgMCAwIDAuMnJlbSByZ2JhKDIxNiwgMjE3LCAyMTksIDAuNSk7IH1cbiAgLmJ0bi1saWdodC5kaXNhYmxlZCwgLmJ0bi1saWdodDpkaXNhYmxlZCB7XG4gICAgY29sb3I6ICMyMTI1Mjk7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI2Y4ZjlmYTtcbiAgICBib3JkZXItY29sb3I6ICNmOGY5ZmE7IH1cbiAgLmJ0bi1saWdodDpub3QoOmRpc2FibGVkKTpub3QoLmRpc2FibGVkKTphY3RpdmUsIC5idG4tbGlnaHQ6bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCkuYWN0aXZlLFxuICAuc2hvdyA+IC5idG4tbGlnaHQuZHJvcGRvd24tdG9nZ2xlIHtcbiAgICBjb2xvcjogIzIxMjUyOTtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjZGFlMGU1O1xuICAgIGJvcmRlci1jb2xvcjogI2QzZDlkZjsgfVxuICAgIC5idG4tbGlnaHQ6bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCk6YWN0aXZlOmZvY3VzLCAuYnRuLWxpZ2h0Om5vdCg6ZGlzYWJsZWQpOm5vdCguZGlzYWJsZWQpLmFjdGl2ZTpmb2N1cyxcbiAgICAuc2hvdyA+IC5idG4tbGlnaHQuZHJvcGRvd24tdG9nZ2xlOmZvY3VzIHtcbiAgICAgIGJveC1zaGFkb3c6IDAgMCAwIDAuMnJlbSByZ2JhKDIxNiwgMjE3LCAyMTksIDAuNSk7IH1cblxuLmJ0bi1kYXJrIHtcbiAgY29sb3I6ICNmZmY7XG4gIGJhY2tncm91bmQtY29sb3I6ICMxRTIzMkQ7XG4gIGJvcmRlci1jb2xvcjogIzFFMjMyRDsgfVxuICAuYnRuLWRhcms6aG92ZXIge1xuICAgIGNvbG9yOiAjZmZmO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICMwZjExMTY7XG4gICAgYm9yZGVyLWNvbG9yOiAjMGEwYjBlOyB9XG4gIC5idG4tZGFyazpmb2N1cywgLmJ0bi1kYXJrLmZvY3VzIHtcbiAgICBjb2xvcjogI2ZmZjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjMGYxMTE2O1xuICAgIGJvcmRlci1jb2xvcjogIzBhMGIwZTtcbiAgICBib3gtc2hhZG93OiAwIDAgMCAwLjJyZW0gcmdiYSg2NCwgNjgsIDc3LCAwLjUpOyB9XG4gIC5idG4tZGFyay5kaXNhYmxlZCwgLmJ0bi1kYXJrOmRpc2FibGVkIHtcbiAgICBjb2xvcjogI2ZmZjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjMUUyMzJEO1xuICAgIGJvcmRlci1jb2xvcjogIzFFMjMyRDsgfVxuICAuYnRuLWRhcms6bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCk6YWN0aXZlLCAuYnRuLWRhcms6bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCkuYWN0aXZlLFxuICAuc2hvdyA+IC5idG4tZGFyay5kcm9wZG93bi10b2dnbGUge1xuICAgIGNvbG9yOiAjZmZmO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICMwYTBiMGU7XG4gICAgYm9yZGVyLWNvbG9yOiAjMDUwNTA3OyB9XG4gICAgLmJ0bi1kYXJrOm5vdCg6ZGlzYWJsZWQpOm5vdCguZGlzYWJsZWQpOmFjdGl2ZTpmb2N1cywgLmJ0bi1kYXJrOm5vdCg6ZGlzYWJsZWQpOm5vdCguZGlzYWJsZWQpLmFjdGl2ZTpmb2N1cyxcbiAgICAuc2hvdyA+IC5idG4tZGFyay5kcm9wZG93bi10b2dnbGU6Zm9jdXMge1xuICAgICAgYm94LXNoYWRvdzogMCAwIDAgMC4ycmVtIHJnYmEoNjQsIDY4LCA3NywgMC41KTsgfVxuXG4uYnRuLW91dGxpbmUtcHJpbWFyeSB7XG4gIGNvbG9yOiAjM0Y4NEZDO1xuICBib3JkZXItY29sb3I6ICMzRjg0RkM7IH1cbiAgLmJ0bi1vdXRsaW5lLXByaW1hcnk6aG92ZXIge1xuICAgIGNvbG9yOiAjZmZmO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICMzRjg0RkM7XG4gICAgYm9yZGVyLWNvbG9yOiAjM0Y4NEZDOyB9XG4gIC5idG4tb3V0bGluZS1wcmltYXJ5OmZvY3VzLCAuYnRuLW91dGxpbmUtcHJpbWFyeS5mb2N1cyB7XG4gICAgYm94LXNoYWRvdzogMCAwIDAgMC4ycmVtIHJnYmEoNjMsIDEzMiwgMjUyLCAwLjUpOyB9XG4gIC5idG4tb3V0bGluZS1wcmltYXJ5LmRpc2FibGVkLCAuYnRuLW91dGxpbmUtcHJpbWFyeTpkaXNhYmxlZCB7XG4gICAgY29sb3I6ICMzRjg0RkM7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogdHJhbnNwYXJlbnQ7IH1cbiAgLmJ0bi1vdXRsaW5lLXByaW1hcnk6bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCk6YWN0aXZlLCAuYnRuLW91dGxpbmUtcHJpbWFyeTpub3QoOmRpc2FibGVkKTpub3QoLmRpc2FibGVkKS5hY3RpdmUsXG4gIC5zaG93ID4gLmJ0bi1vdXRsaW5lLXByaW1hcnkuZHJvcGRvd24tdG9nZ2xlIHtcbiAgICBjb2xvcjogI2ZmZjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjM0Y4NEZDO1xuICAgIGJvcmRlci1jb2xvcjogIzNGODRGQzsgfVxuICAgIC5idG4tb3V0bGluZS1wcmltYXJ5Om5vdCg6ZGlzYWJsZWQpOm5vdCguZGlzYWJsZWQpOmFjdGl2ZTpmb2N1cywgLmJ0bi1vdXRsaW5lLXByaW1hcnk6bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCkuYWN0aXZlOmZvY3VzLFxuICAgIC5zaG93ID4gLmJ0bi1vdXRsaW5lLXByaW1hcnkuZHJvcGRvd24tdG9nZ2xlOmZvY3VzIHtcbiAgICAgIGJveC1zaGFkb3c6IDAgMCAwIDAuMnJlbSByZ2JhKDYzLCAxMzIsIDI1MiwgMC41KTsgfVxuXG4uYnRuLW91dGxpbmUtc2Vjb25kYXJ5IHtcbiAgY29sb3I6ICM3MjdGOTQ7XG4gIGJvcmRlci1jb2xvcjogIzcyN0Y5NDsgfVxuICAuYnRuLW91dGxpbmUtc2Vjb25kYXJ5OmhvdmVyIHtcbiAgICBjb2xvcjogI2ZmZjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjNzI3Rjk0O1xuICAgIGJvcmRlci1jb2xvcjogIzcyN0Y5NDsgfVxuICAuYnRuLW91dGxpbmUtc2Vjb25kYXJ5OmZvY3VzLCAuYnRuLW91dGxpbmUtc2Vjb25kYXJ5LmZvY3VzIHtcbiAgICBib3gtc2hhZG93OiAwIDAgMCAwLjJyZW0gcmdiYSgxMTQsIDEyNywgMTQ4LCAwLjUpOyB9XG4gIC5idG4tb3V0bGluZS1zZWNvbmRhcnkuZGlzYWJsZWQsIC5idG4tb3V0bGluZS1zZWNvbmRhcnk6ZGlzYWJsZWQge1xuICAgIGNvbG9yOiAjNzI3Rjk0O1xuICAgIGJhY2tncm91bmQtY29sb3I6IHRyYW5zcGFyZW50OyB9XG4gIC5idG4tb3V0bGluZS1zZWNvbmRhcnk6bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCk6YWN0aXZlLCAuYnRuLW91dGxpbmUtc2Vjb25kYXJ5Om5vdCg6ZGlzYWJsZWQpOm5vdCguZGlzYWJsZWQpLmFjdGl2ZSxcbiAgLnNob3cgPiAuYnRuLW91dGxpbmUtc2Vjb25kYXJ5LmRyb3Bkb3duLXRvZ2dsZSB7XG4gICAgY29sb3I6ICNmZmY7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogIzcyN0Y5NDtcbiAgICBib3JkZXItY29sb3I6ICM3MjdGOTQ7IH1cbiAgICAuYnRuLW91dGxpbmUtc2Vjb25kYXJ5Om5vdCg6ZGlzYWJsZWQpOm5vdCguZGlzYWJsZWQpOmFjdGl2ZTpmb2N1cywgLmJ0bi1vdXRsaW5lLXNlY29uZGFyeTpub3QoOmRpc2FibGVkKTpub3QoLmRpc2FibGVkKS5hY3RpdmU6Zm9jdXMsXG4gICAgLnNob3cgPiAuYnRuLW91dGxpbmUtc2Vjb25kYXJ5LmRyb3Bkb3duLXRvZ2dsZTpmb2N1cyB7XG4gICAgICBib3gtc2hhZG93OiAwIDAgMCAwLjJyZW0gcmdiYSgxMTQsIDEyNywgMTQ4LCAwLjUpOyB9XG5cbi5idG4tb3V0bGluZS1zdWNjZXNzIHtcbiAgY29sb3I6ICMxREFCNDc7XG4gIGJvcmRlci1jb2xvcjogIzFEQUI0NzsgfVxuICAuYnRuLW91dGxpbmUtc3VjY2Vzczpob3ZlciB7XG4gICAgY29sb3I6ICNmZmY7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogIzFEQUI0NztcbiAgICBib3JkZXItY29sb3I6ICMxREFCNDc7IH1cbiAgLmJ0bi1vdXRsaW5lLXN1Y2Nlc3M6Zm9jdXMsIC5idG4tb3V0bGluZS1zdWNjZXNzLmZvY3VzIHtcbiAgICBib3gtc2hhZG93OiAwIDAgMCAwLjJyZW0gcmdiYSgyOSwgMTcxLCA3MSwgMC41KTsgfVxuICAuYnRuLW91dGxpbmUtc3VjY2Vzcy5kaXNhYmxlZCwgLmJ0bi1vdXRsaW5lLXN1Y2Nlc3M6ZGlzYWJsZWQge1xuICAgIGNvbG9yOiAjMURBQjQ3O1xuICAgIGJhY2tncm91bmQtY29sb3I6IHRyYW5zcGFyZW50OyB9XG4gIC5idG4tb3V0bGluZS1zdWNjZXNzOm5vdCg6ZGlzYWJsZWQpOm5vdCguZGlzYWJsZWQpOmFjdGl2ZSwgLmJ0bi1vdXRsaW5lLXN1Y2Nlc3M6bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCkuYWN0aXZlLFxuICAuc2hvdyA+IC5idG4tb3V0bGluZS1zdWNjZXNzLmRyb3Bkb3duLXRvZ2dsZSB7XG4gICAgY29sb3I6ICNmZmY7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogIzFEQUI0NztcbiAgICBib3JkZXItY29sb3I6ICMxREFCNDc7IH1cbiAgICAuYnRuLW91dGxpbmUtc3VjY2Vzczpub3QoOmRpc2FibGVkKTpub3QoLmRpc2FibGVkKTphY3RpdmU6Zm9jdXMsIC5idG4tb3V0bGluZS1zdWNjZXNzOm5vdCg6ZGlzYWJsZWQpOm5vdCguZGlzYWJsZWQpLmFjdGl2ZTpmb2N1cyxcbiAgICAuc2hvdyA+IC5idG4tb3V0bGluZS1zdWNjZXNzLmRyb3Bkb3duLXRvZ2dsZTpmb2N1cyB7XG4gICAgICBib3gtc2hhZG93OiAwIDAgMCAwLjJyZW0gcmdiYSgyOSwgMTcxLCA3MSwgMC41KTsgfVxuXG4uYnRuLW91dGxpbmUtaW5mbyB7XG4gIGNvbG9yOiAjOEEzRkZDO1xuICBib3JkZXItY29sb3I6ICM4QTNGRkM7IH1cbiAgLmJ0bi1vdXRsaW5lLWluZm86aG92ZXIge1xuICAgIGNvbG9yOiAjZmZmO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICM4QTNGRkM7XG4gICAgYm9yZGVyLWNvbG9yOiAjOEEzRkZDOyB9XG4gIC5idG4tb3V0bGluZS1pbmZvOmZvY3VzLCAuYnRuLW91dGxpbmUtaW5mby5mb2N1cyB7XG4gICAgYm94LXNoYWRvdzogMCAwIDAgMC4ycmVtIHJnYmEoMTM4LCA2MywgMjUyLCAwLjUpOyB9XG4gIC5idG4tb3V0bGluZS1pbmZvLmRpc2FibGVkLCAuYnRuLW91dGxpbmUtaW5mbzpkaXNhYmxlZCB7XG4gICAgY29sb3I6ICM4QTNGRkM7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogdHJhbnNwYXJlbnQ7IH1cbiAgLmJ0bi1vdXRsaW5lLWluZm86bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCk6YWN0aXZlLCAuYnRuLW91dGxpbmUtaW5mbzpub3QoOmRpc2FibGVkKTpub3QoLmRpc2FibGVkKS5hY3RpdmUsXG4gIC5zaG93ID4gLmJ0bi1vdXRsaW5lLWluZm8uZHJvcGRvd24tdG9nZ2xlIHtcbiAgICBjb2xvcjogI2ZmZjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjOEEzRkZDO1xuICAgIGJvcmRlci1jb2xvcjogIzhBM0ZGQzsgfVxuICAgIC5idG4tb3V0bGluZS1pbmZvOm5vdCg6ZGlzYWJsZWQpOm5vdCguZGlzYWJsZWQpOmFjdGl2ZTpmb2N1cywgLmJ0bi1vdXRsaW5lLWluZm86bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCkuYWN0aXZlOmZvY3VzLFxuICAgIC5zaG93ID4gLmJ0bi1vdXRsaW5lLWluZm8uZHJvcGRvd24tdG9nZ2xlOmZvY3VzIHtcbiAgICAgIGJveC1zaGFkb3c6IDAgMCAwIDAuMnJlbSByZ2JhKDEzOCwgNjMsIDI1MiwgMC41KTsgfVxuXG4uYnRuLW91dGxpbmUtd2FybmluZyB7XG4gIGNvbG9yOiAjRkNBRTNGO1xuICBib3JkZXItY29sb3I6ICNGQ0FFM0Y7IH1cbiAgLmJ0bi1vdXRsaW5lLXdhcm5pbmc6aG92ZXIge1xuICAgIGNvbG9yOiAjMjEyNTI5O1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNGQ0FFM0Y7XG4gICAgYm9yZGVyLWNvbG9yOiAjRkNBRTNGOyB9XG4gIC5idG4tb3V0bGluZS13YXJuaW5nOmZvY3VzLCAuYnRuLW91dGxpbmUtd2FybmluZy5mb2N1cyB7XG4gICAgYm94LXNoYWRvdzogMCAwIDAgMC4ycmVtIHJnYmEoMjUyLCAxNzQsIDYzLCAwLjUpOyB9XG4gIC5idG4tb3V0bGluZS13YXJuaW5nLmRpc2FibGVkLCAuYnRuLW91dGxpbmUtd2FybmluZzpkaXNhYmxlZCB7XG4gICAgY29sb3I6ICNGQ0FFM0Y7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogdHJhbnNwYXJlbnQ7IH1cbiAgLmJ0bi1vdXRsaW5lLXdhcm5pbmc6bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCk6YWN0aXZlLCAuYnRuLW91dGxpbmUtd2FybmluZzpub3QoOmRpc2FibGVkKTpub3QoLmRpc2FibGVkKS5hY3RpdmUsXG4gIC5zaG93ID4gLmJ0bi1vdXRsaW5lLXdhcm5pbmcuZHJvcGRvd24tdG9nZ2xlIHtcbiAgICBjb2xvcjogIzIxMjUyOTtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjRkNBRTNGO1xuICAgIGJvcmRlci1jb2xvcjogI0ZDQUUzRjsgfVxuICAgIC5idG4tb3V0bGluZS13YXJuaW5nOm5vdCg6ZGlzYWJsZWQpOm5vdCguZGlzYWJsZWQpOmFjdGl2ZTpmb2N1cywgLmJ0bi1vdXRsaW5lLXdhcm5pbmc6bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCkuYWN0aXZlOmZvY3VzLFxuICAgIC5zaG93ID4gLmJ0bi1vdXRsaW5lLXdhcm5pbmcuZHJvcGRvd24tdG9nZ2xlOmZvY3VzIHtcbiAgICAgIGJveC1zaGFkb3c6IDAgMCAwIDAuMnJlbSByZ2JhKDI1MiwgMTc0LCA2MywgMC41KTsgfVxuXG4uYnRuLW91dGxpbmUtZGFuZ2VyIHtcbiAgY29sb3I6ICNGQzQxM0Y7XG4gIGJvcmRlci1jb2xvcjogI0ZDNDEzRjsgfVxuICAuYnRuLW91dGxpbmUtZGFuZ2VyOmhvdmVyIHtcbiAgICBjb2xvcjogI2ZmZjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjRkM0MTNGO1xuICAgIGJvcmRlci1jb2xvcjogI0ZDNDEzRjsgfVxuICAuYnRuLW91dGxpbmUtZGFuZ2VyOmZvY3VzLCAuYnRuLW91dGxpbmUtZGFuZ2VyLmZvY3VzIHtcbiAgICBib3gtc2hhZG93OiAwIDAgMCAwLjJyZW0gcmdiYSgyNTIsIDY1LCA2MywgMC41KTsgfVxuICAuYnRuLW91dGxpbmUtZGFuZ2VyLmRpc2FibGVkLCAuYnRuLW91dGxpbmUtZGFuZ2VyOmRpc2FibGVkIHtcbiAgICBjb2xvcjogI0ZDNDEzRjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiB0cmFuc3BhcmVudDsgfVxuICAuYnRuLW91dGxpbmUtZGFuZ2VyOm5vdCg6ZGlzYWJsZWQpOm5vdCguZGlzYWJsZWQpOmFjdGl2ZSwgLmJ0bi1vdXRsaW5lLWRhbmdlcjpub3QoOmRpc2FibGVkKTpub3QoLmRpc2FibGVkKS5hY3RpdmUsXG4gIC5zaG93ID4gLmJ0bi1vdXRsaW5lLWRhbmdlci5kcm9wZG93bi10b2dnbGUge1xuICAgIGNvbG9yOiAjZmZmO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNGQzQxM0Y7XG4gICAgYm9yZGVyLWNvbG9yOiAjRkM0MTNGOyB9XG4gICAgLmJ0bi1vdXRsaW5lLWRhbmdlcjpub3QoOmRpc2FibGVkKTpub3QoLmRpc2FibGVkKTphY3RpdmU6Zm9jdXMsIC5idG4tb3V0bGluZS1kYW5nZXI6bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCkuYWN0aXZlOmZvY3VzLFxuICAgIC5zaG93ID4gLmJ0bi1vdXRsaW5lLWRhbmdlci5kcm9wZG93bi10b2dnbGU6Zm9jdXMge1xuICAgICAgYm94LXNoYWRvdzogMCAwIDAgMC4ycmVtIHJnYmEoMjUyLCA2NSwgNjMsIDAuNSk7IH1cblxuLmJ0bi1vdXRsaW5lLWxpZ2h0IHtcbiAgY29sb3I6ICNmOGY5ZmE7XG4gIGJvcmRlci1jb2xvcjogI2Y4ZjlmYTsgfVxuICAuYnRuLW91dGxpbmUtbGlnaHQ6aG92ZXIge1xuICAgIGNvbG9yOiAjMjEyNTI5O1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNmOGY5ZmE7XG4gICAgYm9yZGVyLWNvbG9yOiAjZjhmOWZhOyB9XG4gIC5idG4tb3V0bGluZS1saWdodDpmb2N1cywgLmJ0bi1vdXRsaW5lLWxpZ2h0LmZvY3VzIHtcbiAgICBib3gtc2hhZG93OiAwIDAgMCAwLjJyZW0gcmdiYSgyNDgsIDI0OSwgMjUwLCAwLjUpOyB9XG4gIC5idG4tb3V0bGluZS1saWdodC5kaXNhYmxlZCwgLmJ0bi1vdXRsaW5lLWxpZ2h0OmRpc2FibGVkIHtcbiAgICBjb2xvcjogI2Y4ZjlmYTtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiB0cmFuc3BhcmVudDsgfVxuICAuYnRuLW91dGxpbmUtbGlnaHQ6bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCk6YWN0aXZlLCAuYnRuLW91dGxpbmUtbGlnaHQ6bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCkuYWN0aXZlLFxuICAuc2hvdyA+IC5idG4tb3V0bGluZS1saWdodC5kcm9wZG93bi10b2dnbGUge1xuICAgIGNvbG9yOiAjMjEyNTI5O1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNmOGY5ZmE7XG4gICAgYm9yZGVyLWNvbG9yOiAjZjhmOWZhOyB9XG4gICAgLmJ0bi1vdXRsaW5lLWxpZ2h0Om5vdCg6ZGlzYWJsZWQpOm5vdCguZGlzYWJsZWQpOmFjdGl2ZTpmb2N1cywgLmJ0bi1vdXRsaW5lLWxpZ2h0Om5vdCg6ZGlzYWJsZWQpOm5vdCguZGlzYWJsZWQpLmFjdGl2ZTpmb2N1cyxcbiAgICAuc2hvdyA+IC5idG4tb3V0bGluZS1saWdodC5kcm9wZG93bi10b2dnbGU6Zm9jdXMge1xuICAgICAgYm94LXNoYWRvdzogMCAwIDAgMC4ycmVtIHJnYmEoMjQ4LCAyNDksIDI1MCwgMC41KTsgfVxuXG4uYnRuLW91dGxpbmUtZGFyayB7XG4gIGNvbG9yOiAjMUUyMzJEO1xuICBib3JkZXItY29sb3I6ICMxRTIzMkQ7IH1cbiAgLmJ0bi1vdXRsaW5lLWRhcms6aG92ZXIge1xuICAgIGNvbG9yOiAjZmZmO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICMxRTIzMkQ7XG4gICAgYm9yZGVyLWNvbG9yOiAjMUUyMzJEOyB9XG4gIC5idG4tb3V0bGluZS1kYXJrOmZvY3VzLCAuYnRuLW91dGxpbmUtZGFyay5mb2N1cyB7XG4gICAgYm94LXNoYWRvdzogMCAwIDAgMC4ycmVtIHJnYmEoMzAsIDM1LCA0NSwgMC41KTsgfVxuICAuYnRuLW91dGxpbmUtZGFyay5kaXNhYmxlZCwgLmJ0bi1vdXRsaW5lLWRhcms6ZGlzYWJsZWQge1xuICAgIGNvbG9yOiAjMUUyMzJEO1xuICAgIGJhY2tncm91bmQtY29sb3I6IHRyYW5zcGFyZW50OyB9XG4gIC5idG4tb3V0bGluZS1kYXJrOm5vdCg6ZGlzYWJsZWQpOm5vdCguZGlzYWJsZWQpOmFjdGl2ZSwgLmJ0bi1vdXRsaW5lLWRhcms6bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCkuYWN0aXZlLFxuICAuc2hvdyA+IC5idG4tb3V0bGluZS1kYXJrLmRyb3Bkb3duLXRvZ2dsZSB7XG4gICAgY29sb3I6ICNmZmY7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogIzFFMjMyRDtcbiAgICBib3JkZXItY29sb3I6ICMxRTIzMkQ7IH1cbiAgICAuYnRuLW91dGxpbmUtZGFyazpub3QoOmRpc2FibGVkKTpub3QoLmRpc2FibGVkKTphY3RpdmU6Zm9jdXMsIC5idG4tb3V0bGluZS1kYXJrOm5vdCg6ZGlzYWJsZWQpOm5vdCguZGlzYWJsZWQpLmFjdGl2ZTpmb2N1cyxcbiAgICAuc2hvdyA+IC5idG4tb3V0bGluZS1kYXJrLmRyb3Bkb3duLXRvZ2dsZTpmb2N1cyB7XG4gICAgICBib3gtc2hhZG93OiAwIDAgMCAwLjJyZW0gcmdiYSgzMCwgMzUsIDQ1LCAwLjUpOyB9XG5cbi5idG4tbGluayB7XG4gIGZvbnQtd2VpZ2h0OiA0MDA7XG4gIGNvbG9yOiAjM0Y4NEZDO1xuICB0ZXh0LWRlY29yYXRpb246IG5vbmU7IH1cbiAgLmJ0bi1saW5rOmhvdmVyIHtcbiAgICBjb2xvcjogIzA0NThlYjtcbiAgICB0ZXh0LWRlY29yYXRpb246IHVuZGVybGluZTsgfVxuICAuYnRuLWxpbms6Zm9jdXMsIC5idG4tbGluay5mb2N1cyB7XG4gICAgdGV4dC1kZWNvcmF0aW9uOiB1bmRlcmxpbmU7IH1cbiAgLmJ0bi1saW5rOmRpc2FibGVkLCAuYnRuLWxpbmsuZGlzYWJsZWQge1xuICAgIGNvbG9yOiAjNmM3NTdkO1xuICAgIHBvaW50ZXItZXZlbnRzOiBub25lOyB9XG5cbi5idG4tbGcsIC5idG4tZ3JvdXAtbGcgPiAuYnRuIHtcbiAgcGFkZGluZzogMC41cmVtIDFyZW07XG4gIGZvbnQtc2l6ZTogMS4yNXJlbTtcbiAgbGluZS1oZWlnaHQ6IDEuNTtcbiAgYm9yZGVyLXJhZGl1czogMC4zcmVtOyB9XG5cbi5idG4tc20sIC5idG4tZ3JvdXAtc20gPiAuYnRuIHtcbiAgcGFkZGluZzogMC4yNXJlbSAwLjVyZW07XG4gIGZvbnQtc2l6ZTogMC44NzVyZW07XG4gIGxpbmUtaGVpZ2h0OiAxLjU7XG4gIGJvcmRlci1yYWRpdXM6IDAuMnJlbTsgfVxuXG4uYnRuLWJsb2NrIHtcbiAgZGlzcGxheTogYmxvY2s7XG4gIHdpZHRoOiAxMDAlOyB9XG4gIC5idG4tYmxvY2sgKyAuYnRuLWJsb2NrIHtcbiAgICBtYXJnaW4tdG9wOiAwLjVyZW07IH1cblxuaW5wdXRbdHlwZT1cInN1Ym1pdFwiXS5idG4tYmxvY2ssXG5pbnB1dFt0eXBlPVwicmVzZXRcIl0uYnRuLWJsb2NrLFxuaW5wdXRbdHlwZT1cImJ1dHRvblwiXS5idG4tYmxvY2sge1xuICB3aWR0aDogMTAwJTsgfVxuXG4uZmFkZSB7XG4gIHRyYW5zaXRpb246IG9wYWNpdHkgMC4xNXMgbGluZWFyOyB9XG4gIEBtZWRpYSAocHJlZmVycy1yZWR1Y2VkLW1vdGlvbjogcmVkdWNlKSB7XG4gICAgLmZhZGUge1xuICAgICAgdHJhbnNpdGlvbjogbm9uZTsgfSB9XG4gIC5mYWRlOm5vdCguc2hvdykge1xuICAgIG9wYWNpdHk6IDA7IH1cblxuLmNvbGxhcHNlOm5vdCguc2hvdykge1xuICBkaXNwbGF5OiBub25lOyB9XG5cbi5jb2xsYXBzaW5nIHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICBoZWlnaHQ6IDA7XG4gIG92ZXJmbG93OiBoaWRkZW47XG4gIHRyYW5zaXRpb246IGhlaWdodCAwLjM1cyBlYXNlOyB9XG4gIEBtZWRpYSAocHJlZmVycy1yZWR1Y2VkLW1vdGlvbjogcmVkdWNlKSB7XG4gICAgLmNvbGxhcHNpbmcge1xuICAgICAgdHJhbnNpdGlvbjogbm9uZTsgfSB9XG5cbi5kcm9wdXAsXG4uZHJvcHJpZ2h0LFxuLmRyb3Bkb3duLFxuLmRyb3BsZWZ0IHtcbiAgcG9zaXRpb246IHJlbGF0aXZlOyB9XG5cbi5kcm9wZG93bi10b2dnbGUge1xuICB3aGl0ZS1zcGFjZTogbm93cmFwOyB9XG4gIC5kcm9wZG93bi10b2dnbGU6OmFmdGVyIHtcbiAgICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gICAgbWFyZ2luLWxlZnQ6IDAuMjU1ZW07XG4gICAgdmVydGljYWwtYWxpZ246IDAuMjU1ZW07XG4gICAgY29udGVudDogXCJcIjtcbiAgICBib3JkZXItdG9wOiAwLjNlbSBzb2xpZDtcbiAgICBib3JkZXItcmlnaHQ6IDAuM2VtIHNvbGlkIHRyYW5zcGFyZW50O1xuICAgIGJvcmRlci1ib3R0b206IDA7XG4gICAgYm9yZGVyLWxlZnQ6IDAuM2VtIHNvbGlkIHRyYW5zcGFyZW50OyB9XG4gIC5kcm9wZG93bi10b2dnbGU6ZW1wdHk6OmFmdGVyIHtcbiAgICBtYXJnaW4tbGVmdDogMDsgfVxuXG4uZHJvcGRvd24tbWVudSB7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgdG9wOiAxMDAlO1xuICBsZWZ0OiAwO1xuICB6LWluZGV4OiAxMDAwO1xuICBkaXNwbGF5OiBub25lO1xuICBmbG9hdDogbGVmdDtcbiAgbWluLXdpZHRoOiAxMHJlbTtcbiAgcGFkZGluZzogMC41cmVtIDA7XG4gIG1hcmdpbjogMC4xMjVyZW0gMCAwO1xuICBmb250LXNpemU6IDFyZW07XG4gIGNvbG9yOiAjNTE1MTUxO1xuICB0ZXh0LWFsaWduOiBsZWZ0O1xuICBsaXN0LXN0eWxlOiBub25lO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZmZmO1xuICBiYWNrZ3JvdW5kLWNsaXA6IHBhZGRpbmctYm94O1xuICBib3JkZXI6IDFweCBzb2xpZCByZ2JhKDAsIDAsIDAsIDAuMTUpO1xuICBib3JkZXItcmFkaXVzOiAwOyB9XG5cbi5kcm9wZG93bi1tZW51LWxlZnQge1xuICByaWdodDogYXV0bztcbiAgbGVmdDogMDsgfVxuXG4uZHJvcGRvd24tbWVudS1yaWdodCB7XG4gIHJpZ2h0OiAwO1xuICBsZWZ0OiBhdXRvOyB9XG5cbkBtZWRpYSAobWluLXdpZHRoOiA1NzZweCkge1xuICAuZHJvcGRvd24tbWVudS1zbS1sZWZ0IHtcbiAgICByaWdodDogYXV0bztcbiAgICBsZWZ0OiAwOyB9XG4gIC5kcm9wZG93bi1tZW51LXNtLXJpZ2h0IHtcbiAgICByaWdodDogMDtcbiAgICBsZWZ0OiBhdXRvOyB9IH1cblxuQG1lZGlhIChtaW4td2lkdGg6IDc2OHB4KSB7XG4gIC5kcm9wZG93bi1tZW51LW1kLWxlZnQge1xuICAgIHJpZ2h0OiBhdXRvO1xuICAgIGxlZnQ6IDA7IH1cbiAgLmRyb3Bkb3duLW1lbnUtbWQtcmlnaHQge1xuICAgIHJpZ2h0OiAwO1xuICAgIGxlZnQ6IGF1dG87IH0gfVxuXG5AbWVkaWEgKG1pbi13aWR0aDogOTkycHgpIHtcbiAgLmRyb3Bkb3duLW1lbnUtbGctbGVmdCB7XG4gICAgcmlnaHQ6IGF1dG87XG4gICAgbGVmdDogMDsgfVxuICAuZHJvcGRvd24tbWVudS1sZy1yaWdodCB7XG4gICAgcmlnaHQ6IDA7XG4gICAgbGVmdDogYXV0bzsgfSB9XG5cbkBtZWRpYSAobWluLXdpZHRoOiAxMjAwcHgpIHtcbiAgLmRyb3Bkb3duLW1lbnUteGwtbGVmdCB7XG4gICAgcmlnaHQ6IGF1dG87XG4gICAgbGVmdDogMDsgfVxuICAuZHJvcGRvd24tbWVudS14bC1yaWdodCB7XG4gICAgcmlnaHQ6IDA7XG4gICAgbGVmdDogYXV0bzsgfSB9XG5cbi5kcm9wdXAgLmRyb3Bkb3duLW1lbnUge1xuICB0b3A6IGF1dG87XG4gIGJvdHRvbTogMTAwJTtcbiAgbWFyZ2luLXRvcDogMDtcbiAgbWFyZ2luLWJvdHRvbTogMC4xMjVyZW07IH1cblxuLmRyb3B1cCAuZHJvcGRvd24tdG9nZ2xlOjphZnRlciB7XG4gIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgbWFyZ2luLWxlZnQ6IDAuMjU1ZW07XG4gIHZlcnRpY2FsLWFsaWduOiAwLjI1NWVtO1xuICBjb250ZW50OiBcIlwiO1xuICBib3JkZXItdG9wOiAwO1xuICBib3JkZXItcmlnaHQ6IDAuM2VtIHNvbGlkIHRyYW5zcGFyZW50O1xuICBib3JkZXItYm90dG9tOiAwLjNlbSBzb2xpZDtcbiAgYm9yZGVyLWxlZnQ6IDAuM2VtIHNvbGlkIHRyYW5zcGFyZW50OyB9XG5cbi5kcm9wdXAgLmRyb3Bkb3duLXRvZ2dsZTplbXB0eTo6YWZ0ZXIge1xuICBtYXJnaW4tbGVmdDogMDsgfVxuXG4uZHJvcHJpZ2h0IC5kcm9wZG93bi1tZW51IHtcbiAgdG9wOiAwO1xuICByaWdodDogYXV0bztcbiAgbGVmdDogMTAwJTtcbiAgbWFyZ2luLXRvcDogMDtcbiAgbWFyZ2luLWxlZnQ6IDAuMTI1cmVtOyB9XG5cbi5kcm9wcmlnaHQgLmRyb3Bkb3duLXRvZ2dsZTo6YWZ0ZXIge1xuICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gIG1hcmdpbi1sZWZ0OiAwLjI1NWVtO1xuICB2ZXJ0aWNhbC1hbGlnbjogMC4yNTVlbTtcbiAgY29udGVudDogXCJcIjtcbiAgYm9yZGVyLXRvcDogMC4zZW0gc29saWQgdHJhbnNwYXJlbnQ7XG4gIGJvcmRlci1yaWdodDogMDtcbiAgYm9yZGVyLWJvdHRvbTogMC4zZW0gc29saWQgdHJhbnNwYXJlbnQ7XG4gIGJvcmRlci1sZWZ0OiAwLjNlbSBzb2xpZDsgfVxuXG4uZHJvcHJpZ2h0IC5kcm9wZG93bi10b2dnbGU6ZW1wdHk6OmFmdGVyIHtcbiAgbWFyZ2luLWxlZnQ6IDA7IH1cblxuLmRyb3ByaWdodCAuZHJvcGRvd24tdG9nZ2xlOjphZnRlciB7XG4gIHZlcnRpY2FsLWFsaWduOiAwOyB9XG5cbi5kcm9wbGVmdCAuZHJvcGRvd24tbWVudSB7XG4gIHRvcDogMDtcbiAgcmlnaHQ6IDEwMCU7XG4gIGxlZnQ6IGF1dG87XG4gIG1hcmdpbi10b3A6IDA7XG4gIG1hcmdpbi1yaWdodDogMC4xMjVyZW07IH1cblxuLmRyb3BsZWZ0IC5kcm9wZG93bi10b2dnbGU6OmFmdGVyIHtcbiAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICBtYXJnaW4tbGVmdDogMC4yNTVlbTtcbiAgdmVydGljYWwtYWxpZ246IDAuMjU1ZW07XG4gIGNvbnRlbnQ6IFwiXCI7IH1cblxuLmRyb3BsZWZ0IC5kcm9wZG93bi10b2dnbGU6OmFmdGVyIHtcbiAgZGlzcGxheTogbm9uZTsgfVxuXG4uZHJvcGxlZnQgLmRyb3Bkb3duLXRvZ2dsZTo6YmVmb3JlIHtcbiAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICBtYXJnaW4tcmlnaHQ6IDAuMjU1ZW07XG4gIHZlcnRpY2FsLWFsaWduOiAwLjI1NWVtO1xuICBjb250ZW50OiBcIlwiO1xuICBib3JkZXItdG9wOiAwLjNlbSBzb2xpZCB0cmFuc3BhcmVudDtcbiAgYm9yZGVyLXJpZ2h0OiAwLjNlbSBzb2xpZDtcbiAgYm9yZGVyLWJvdHRvbTogMC4zZW0gc29saWQgdHJhbnNwYXJlbnQ7IH1cblxuLmRyb3BsZWZ0IC5kcm9wZG93bi10b2dnbGU6ZW1wdHk6OmFmdGVyIHtcbiAgbWFyZ2luLWxlZnQ6IDA7IH1cblxuLmRyb3BsZWZ0IC5kcm9wZG93bi10b2dnbGU6OmJlZm9yZSB7XG4gIHZlcnRpY2FsLWFsaWduOiAwOyB9XG5cbi5kcm9wZG93bi1tZW51W3gtcGxhY2VtZW50Xj1cInRvcFwiXSwgLmRyb3Bkb3duLW1lbnVbeC1wbGFjZW1lbnRePVwicmlnaHRcIl0sIC5kcm9wZG93bi1tZW51W3gtcGxhY2VtZW50Xj1cImJvdHRvbVwiXSwgLmRyb3Bkb3duLW1lbnVbeC1wbGFjZW1lbnRePVwibGVmdFwiXSB7XG4gIHJpZ2h0OiBhdXRvO1xuICBib3R0b206IGF1dG87IH1cblxuLmRyb3Bkb3duLWRpdmlkZXIge1xuICBoZWlnaHQ6IDA7XG4gIG1hcmdpbjogMC41cmVtIDA7XG4gIG92ZXJmbG93OiBoaWRkZW47XG4gIGJvcmRlci10b3A6IDFweCBzb2xpZCAjZTllY2VmOyB9XG5cbi5kcm9wZG93bi1pdGVtIHtcbiAgZGlzcGxheTogYmxvY2s7XG4gIHdpZHRoOiAxMDAlO1xuICBwYWRkaW5nOiAwLjI1cmVtIDEuNXJlbTtcbiAgY2xlYXI6IGJvdGg7XG4gIGZvbnQtd2VpZ2h0OiA0MDA7XG4gIGNvbG9yOiAjMjEyNTI5O1xuICB0ZXh0LWFsaWduOiBpbmhlcml0O1xuICB3aGl0ZS1zcGFjZTogbm93cmFwO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiB0cmFuc3BhcmVudDtcbiAgYm9yZGVyOiAwOyB9XG4gIC5kcm9wZG93bi1pdGVtOmhvdmVyLCAuZHJvcGRvd24taXRlbTpmb2N1cyB7XG4gICAgY29sb3I6ICMxNjE4MWI7XG4gICAgdGV4dC1kZWNvcmF0aW9uOiBub25lO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNmOGY5ZmE7IH1cbiAgLmRyb3Bkb3duLWl0ZW0uYWN0aXZlLCAuZHJvcGRvd24taXRlbTphY3RpdmUge1xuICAgIGNvbG9yOiAjZmZmO1xuICAgIHRleHQtZGVjb3JhdGlvbjogbm9uZTtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjM0Y4NEZDOyB9XG4gIC5kcm9wZG93bi1pdGVtLmRpc2FibGVkLCAuZHJvcGRvd24taXRlbTpkaXNhYmxlZCB7XG4gICAgY29sb3I6ICM2Yzc1N2Q7XG4gICAgcG9pbnRlci1ldmVudHM6IG5vbmU7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogdHJhbnNwYXJlbnQ7IH1cblxuLmRyb3Bkb3duLW1lbnUuc2hvdyB7XG4gIGRpc3BsYXk6IGJsb2NrOyB9XG5cbi5kcm9wZG93bi1oZWFkZXIge1xuICBkaXNwbGF5OiBibG9jaztcbiAgcGFkZGluZzogMC41cmVtIDEuNXJlbTtcbiAgbWFyZ2luLWJvdHRvbTogMDtcbiAgZm9udC1zaXplOiAwLjg3NXJlbTtcbiAgY29sb3I6ICM2Yzc1N2Q7XG4gIHdoaXRlLXNwYWNlOiBub3dyYXA7IH1cblxuLmRyb3Bkb3duLWl0ZW0tdGV4dCB7XG4gIGRpc3BsYXk6IGJsb2NrO1xuICBwYWRkaW5nOiAwLjI1cmVtIDEuNXJlbTtcbiAgY29sb3I6ICMyMTI1Mjk7IH1cblxuLmJ0bi1ncm91cCxcbi5idG4tZ3JvdXAtdmVydGljYWwge1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIGRpc3BsYXk6IGlubGluZS1mbGV4O1xuICB2ZXJ0aWNhbC1hbGlnbjogbWlkZGxlOyB9XG4gIC5idG4tZ3JvdXAgPiAuYnRuLFxuICAuYnRuLWdyb3VwLXZlcnRpY2FsID4gLmJ0biB7XG4gICAgcG9zaXRpb246IHJlbGF0aXZlO1xuICAgIGZsZXg6IDEgMSBhdXRvOyB9XG4gICAgLmJ0bi1ncm91cCA+IC5idG46aG92ZXIsXG4gICAgLmJ0bi1ncm91cC12ZXJ0aWNhbCA+IC5idG46aG92ZXIge1xuICAgICAgei1pbmRleDogMTsgfVxuICAgIC5idG4tZ3JvdXAgPiAuYnRuOmZvY3VzLCAuYnRuLWdyb3VwID4gLmJ0bjphY3RpdmUsIC5idG4tZ3JvdXAgPiAuYnRuLmFjdGl2ZSxcbiAgICAuYnRuLWdyb3VwLXZlcnRpY2FsID4gLmJ0bjpmb2N1cyxcbiAgICAuYnRuLWdyb3VwLXZlcnRpY2FsID4gLmJ0bjphY3RpdmUsXG4gICAgLmJ0bi1ncm91cC12ZXJ0aWNhbCA+IC5idG4uYWN0aXZlIHtcbiAgICAgIHotaW5kZXg6IDE7IH1cblxuLmJ0bi10b29sYmFyIHtcbiAgZGlzcGxheTogZmxleDtcbiAgZmxleC13cmFwOiB3cmFwO1xuICBqdXN0aWZ5LWNvbnRlbnQ6IGZsZXgtc3RhcnQ7IH1cbiAgLmJ0bi10b29sYmFyIC5pbnB1dC1ncm91cCB7XG4gICAgd2lkdGg6IGF1dG87IH1cblxuLmJ0bi1ncm91cCA+IC5idG46bm90KDpmaXJzdC1jaGlsZCksXG4uYnRuLWdyb3VwID4gLmJ0bi1ncm91cDpub3QoOmZpcnN0LWNoaWxkKSB7XG4gIG1hcmdpbi1sZWZ0OiAtMXB4OyB9XG5cbi5idG4tZ3JvdXAgPiAuYnRuOm5vdCg6bGFzdC1jaGlsZCk6bm90KC5kcm9wZG93bi10b2dnbGUpLFxuLmJ0bi1ncm91cCA+IC5idG4tZ3JvdXA6bm90KDpsYXN0LWNoaWxkKSA+IC5idG4ge1xuICBib3JkZXItdG9wLXJpZ2h0LXJhZGl1czogMDtcbiAgYm9yZGVyLWJvdHRvbS1yaWdodC1yYWRpdXM6IDA7IH1cblxuLmJ0bi1ncm91cCA+IC5idG46bm90KDpmaXJzdC1jaGlsZCksXG4uYnRuLWdyb3VwID4gLmJ0bi1ncm91cDpub3QoOmZpcnN0LWNoaWxkKSA+IC5idG4ge1xuICBib3JkZXItdG9wLWxlZnQtcmFkaXVzOiAwO1xuICBib3JkZXItYm90dG9tLWxlZnQtcmFkaXVzOiAwOyB9XG5cbi5kcm9wZG93bi10b2dnbGUtc3BsaXQge1xuICBwYWRkaW5nLXJpZ2h0OiAwLjU2MjVyZW07XG4gIHBhZGRpbmctbGVmdDogMC41NjI1cmVtOyB9XG4gIC5kcm9wZG93bi10b2dnbGUtc3BsaXQ6OmFmdGVyLFxuICAuZHJvcHVwIC5kcm9wZG93bi10b2dnbGUtc3BsaXQ6OmFmdGVyLFxuICAuZHJvcHJpZ2h0IC5kcm9wZG93bi10b2dnbGUtc3BsaXQ6OmFmdGVyIHtcbiAgICBtYXJnaW4tbGVmdDogMDsgfVxuICAuZHJvcGxlZnQgLmRyb3Bkb3duLXRvZ2dsZS1zcGxpdDo6YmVmb3JlIHtcbiAgICBtYXJnaW4tcmlnaHQ6IDA7IH1cblxuLmJ0bi1zbSArIC5kcm9wZG93bi10b2dnbGUtc3BsaXQsIC5idG4tZ3JvdXAtc20gPiAuYnRuICsgLmRyb3Bkb3duLXRvZ2dsZS1zcGxpdCB7XG4gIHBhZGRpbmctcmlnaHQ6IDAuMzc1cmVtO1xuICBwYWRkaW5nLWxlZnQ6IDAuMzc1cmVtOyB9XG5cbi5idG4tbGcgKyAuZHJvcGRvd24tdG9nZ2xlLXNwbGl0LCAuYnRuLWdyb3VwLWxnID4gLmJ0biArIC5kcm9wZG93bi10b2dnbGUtc3BsaXQge1xuICBwYWRkaW5nLXJpZ2h0OiAwLjc1cmVtO1xuICBwYWRkaW5nLWxlZnQ6IDAuNzVyZW07IH1cblxuLmJ0bi1ncm91cC12ZXJ0aWNhbCB7XG4gIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gIGFsaWduLWl0ZW1zOiBmbGV4LXN0YXJ0O1xuICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjsgfVxuICAuYnRuLWdyb3VwLXZlcnRpY2FsID4gLmJ0bixcbiAgLmJ0bi1ncm91cC12ZXJ0aWNhbCA+IC5idG4tZ3JvdXAge1xuICAgIHdpZHRoOiAxMDAlOyB9XG4gIC5idG4tZ3JvdXAtdmVydGljYWwgPiAuYnRuOm5vdCg6Zmlyc3QtY2hpbGQpLFxuICAuYnRuLWdyb3VwLXZlcnRpY2FsID4gLmJ0bi1ncm91cDpub3QoOmZpcnN0LWNoaWxkKSB7XG4gICAgbWFyZ2luLXRvcDogLTFweDsgfVxuICAuYnRuLWdyb3VwLXZlcnRpY2FsID4gLmJ0bjpub3QoOmxhc3QtY2hpbGQpOm5vdCguZHJvcGRvd24tdG9nZ2xlKSxcbiAgLmJ0bi1ncm91cC12ZXJ0aWNhbCA+IC5idG4tZ3JvdXA6bm90KDpsYXN0LWNoaWxkKSA+IC5idG4ge1xuICAgIGJvcmRlci1ib3R0b20tcmlnaHQtcmFkaXVzOiAwO1xuICAgIGJvcmRlci1ib3R0b20tbGVmdC1yYWRpdXM6IDA7IH1cbiAgLmJ0bi1ncm91cC12ZXJ0aWNhbCA+IC5idG46bm90KDpmaXJzdC1jaGlsZCksXG4gIC5idG4tZ3JvdXAtdmVydGljYWwgPiAuYnRuLWdyb3VwOm5vdCg6Zmlyc3QtY2hpbGQpID4gLmJ0biB7XG4gICAgYm9yZGVyLXRvcC1sZWZ0LXJhZGl1czogMDtcbiAgICBib3JkZXItdG9wLXJpZ2h0LXJhZGl1czogMDsgfVxuXG4uYnRuLWdyb3VwLXRvZ2dsZSA+IC5idG4sXG4uYnRuLWdyb3VwLXRvZ2dsZSA+IC5idG4tZ3JvdXAgPiAuYnRuIHtcbiAgbWFyZ2luLWJvdHRvbTogMDsgfVxuICAuYnRuLWdyb3VwLXRvZ2dsZSA+IC5idG4gaW5wdXRbdHlwZT1cInJhZGlvXCJdLFxuICAuYnRuLWdyb3VwLXRvZ2dsZSA+IC5idG4gaW5wdXRbdHlwZT1cImNoZWNrYm94XCJdLFxuICAuYnRuLWdyb3VwLXRvZ2dsZSA+IC5idG4tZ3JvdXAgPiAuYnRuIGlucHV0W3R5cGU9XCJyYWRpb1wiXSxcbiAgLmJ0bi1ncm91cC10b2dnbGUgPiAuYnRuLWdyb3VwID4gLmJ0biBpbnB1dFt0eXBlPVwiY2hlY2tib3hcIl0ge1xuICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICBjbGlwOiByZWN0KDAsIDAsIDAsIDApO1xuICAgIHBvaW50ZXItZXZlbnRzOiBub25lOyB9XG5cbi5pbnB1dC1ncm91cCB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgZGlzcGxheTogZmxleDtcbiAgZmxleC13cmFwOiB3cmFwO1xuICBhbGlnbi1pdGVtczogc3RyZXRjaDtcbiAgd2lkdGg6IDEwMCU7IH1cbiAgLmlucHV0LWdyb3VwID4gLmZvcm0tY29udHJvbCxcbiAgLmlucHV0LWdyb3VwID4gLmZvcm0tY29udHJvbC1wbGFpbnRleHQsXG4gIC5pbnB1dC1ncm91cCA+IC5jdXN0b20tc2VsZWN0LFxuICAuaW5wdXQtZ3JvdXAgPiAuY3VzdG9tLWZpbGUge1xuICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgICBmbGV4OiAxIDEgYXV0bztcbiAgICB3aWR0aDogMSU7XG4gICAgbWluLXdpZHRoOiAwO1xuICAgIG1hcmdpbi1ib3R0b206IDA7IH1cbiAgICAuaW5wdXQtZ3JvdXAgPiAuZm9ybS1jb250cm9sICsgLmZvcm0tY29udHJvbCxcbiAgICAuaW5wdXQtZ3JvdXAgPiAuZm9ybS1jb250cm9sICsgLmN1c3RvbS1zZWxlY3QsXG4gICAgLmlucHV0LWdyb3VwID4gLmZvcm0tY29udHJvbCArIC5jdXN0b20tZmlsZSxcbiAgICAuaW5wdXQtZ3JvdXAgPiAuZm9ybS1jb250cm9sLXBsYWludGV4dCArIC5mb3JtLWNvbnRyb2wsXG4gICAgLmlucHV0LWdyb3VwID4gLmZvcm0tY29udHJvbC1wbGFpbnRleHQgKyAuY3VzdG9tLXNlbGVjdCxcbiAgICAuaW5wdXQtZ3JvdXAgPiAuZm9ybS1jb250cm9sLXBsYWludGV4dCArIC5jdXN0b20tZmlsZSxcbiAgICAuaW5wdXQtZ3JvdXAgPiAuY3VzdG9tLXNlbGVjdCArIC5mb3JtLWNvbnRyb2wsXG4gICAgLmlucHV0LWdyb3VwID4gLmN1c3RvbS1zZWxlY3QgKyAuY3VzdG9tLXNlbGVjdCxcbiAgICAuaW5wdXQtZ3JvdXAgPiAuY3VzdG9tLXNlbGVjdCArIC5jdXN0b20tZmlsZSxcbiAgICAuaW5wdXQtZ3JvdXAgPiAuY3VzdG9tLWZpbGUgKyAuZm9ybS1jb250cm9sLFxuICAgIC5pbnB1dC1ncm91cCA+IC5jdXN0b20tZmlsZSArIC5jdXN0b20tc2VsZWN0LFxuICAgIC5pbnB1dC1ncm91cCA+IC5jdXN0b20tZmlsZSArIC5jdXN0b20tZmlsZSB7XG4gICAgICBtYXJnaW4tbGVmdDogLTFweDsgfVxuICAuaW5wdXQtZ3JvdXAgPiAuZm9ybS1jb250cm9sOmZvY3VzLFxuICAuaW5wdXQtZ3JvdXAgPiAuY3VzdG9tLXNlbGVjdDpmb2N1cyxcbiAgLmlucHV0LWdyb3VwID4gLmN1c3RvbS1maWxlIC5jdXN0b20tZmlsZS1pbnB1dDpmb2N1cyB+IC5jdXN0b20tZmlsZS1sYWJlbCB7XG4gICAgei1pbmRleDogMzsgfVxuICAuaW5wdXQtZ3JvdXAgPiAuY3VzdG9tLWZpbGUgLmN1c3RvbS1maWxlLWlucHV0OmZvY3VzIHtcbiAgICB6LWluZGV4OiA0OyB9XG4gIC5pbnB1dC1ncm91cCA+IC5mb3JtLWNvbnRyb2w6bm90KDpsYXN0LWNoaWxkKSxcbiAgLmlucHV0LWdyb3VwID4gLmN1c3RvbS1zZWxlY3Q6bm90KDpsYXN0LWNoaWxkKSB7XG4gICAgYm9yZGVyLXRvcC1yaWdodC1yYWRpdXM6IDA7XG4gICAgYm9yZGVyLWJvdHRvbS1yaWdodC1yYWRpdXM6IDA7IH1cbiAgLmlucHV0LWdyb3VwID4gLmZvcm0tY29udHJvbDpub3QoOmZpcnN0LWNoaWxkKSxcbiAgLmlucHV0LWdyb3VwID4gLmN1c3RvbS1zZWxlY3Q6bm90KDpmaXJzdC1jaGlsZCkge1xuICAgIGJvcmRlci10b3AtbGVmdC1yYWRpdXM6IDA7XG4gICAgYm9yZGVyLWJvdHRvbS1sZWZ0LXJhZGl1czogMDsgfVxuICAuaW5wdXQtZ3JvdXAgPiAuY3VzdG9tLWZpbGUge1xuICAgIGRpc3BsYXk6IGZsZXg7XG4gICAgYWxpZ24taXRlbXM6IGNlbnRlcjsgfVxuICAgIC5pbnB1dC1ncm91cCA+IC5jdXN0b20tZmlsZTpub3QoOmxhc3QtY2hpbGQpIC5jdXN0b20tZmlsZS1sYWJlbCxcbiAgICAuaW5wdXQtZ3JvdXAgPiAuY3VzdG9tLWZpbGU6bm90KDpsYXN0LWNoaWxkKSAuY3VzdG9tLWZpbGUtbGFiZWw6OmFmdGVyIHtcbiAgICAgIGJvcmRlci10b3AtcmlnaHQtcmFkaXVzOiAwO1xuICAgICAgYm9yZGVyLWJvdHRvbS1yaWdodC1yYWRpdXM6IDA7IH1cbiAgICAuaW5wdXQtZ3JvdXAgPiAuY3VzdG9tLWZpbGU6bm90KDpmaXJzdC1jaGlsZCkgLmN1c3RvbS1maWxlLWxhYmVsIHtcbiAgICAgIGJvcmRlci10b3AtbGVmdC1yYWRpdXM6IDA7XG4gICAgICBib3JkZXItYm90dG9tLWxlZnQtcmFkaXVzOiAwOyB9XG5cbi5pbnB1dC1ncm91cC1wcmVwZW5kLFxuLmlucHV0LWdyb3VwLWFwcGVuZCB7XG4gIGRpc3BsYXk6IGZsZXg7IH1cbiAgLmlucHV0LWdyb3VwLXByZXBlbmQgLmJ0bixcbiAgLmlucHV0LWdyb3VwLWFwcGVuZCAuYnRuIHtcbiAgICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gICAgei1pbmRleDogMjsgfVxuICAgIC5pbnB1dC1ncm91cC1wcmVwZW5kIC5idG46Zm9jdXMsXG4gICAgLmlucHV0LWdyb3VwLWFwcGVuZCAuYnRuOmZvY3VzIHtcbiAgICAgIHotaW5kZXg6IDM7IH1cbiAgLmlucHV0LWdyb3VwLXByZXBlbmQgLmJ0biArIC5idG4sXG4gIC5pbnB1dC1ncm91cC1wcmVwZW5kIC5idG4gKyAuaW5wdXQtZ3JvdXAtdGV4dCxcbiAgLmlucHV0LWdyb3VwLXByZXBlbmQgLmlucHV0LWdyb3VwLXRleHQgKyAuaW5wdXQtZ3JvdXAtdGV4dCxcbiAgLmlucHV0LWdyb3VwLXByZXBlbmQgLmlucHV0LWdyb3VwLXRleHQgKyAuYnRuLFxuICAuaW5wdXQtZ3JvdXAtYXBwZW5kIC5idG4gKyAuYnRuLFxuICAuaW5wdXQtZ3JvdXAtYXBwZW5kIC5idG4gKyAuaW5wdXQtZ3JvdXAtdGV4dCxcbiAgLmlucHV0LWdyb3VwLWFwcGVuZCAuaW5wdXQtZ3JvdXAtdGV4dCArIC5pbnB1dC1ncm91cC10ZXh0LFxuICAuaW5wdXQtZ3JvdXAtYXBwZW5kIC5pbnB1dC1ncm91cC10ZXh0ICsgLmJ0biB7XG4gICAgbWFyZ2luLWxlZnQ6IC0xcHg7IH1cblxuLmlucHV0LWdyb3VwLXByZXBlbmQge1xuICBtYXJnaW4tcmlnaHQ6IC0xcHg7IH1cblxuLmlucHV0LWdyb3VwLWFwcGVuZCB7XG4gIG1hcmdpbi1sZWZ0OiAtMXB4OyB9XG5cbi5pbnB1dC1ncm91cC10ZXh0IHtcbiAgZGlzcGxheTogZmxleDtcbiAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAgcGFkZGluZzogMC4zNzVyZW0gMC43NXJlbTtcbiAgbWFyZ2luLWJvdHRvbTogMDtcbiAgZm9udC1zaXplOiAxcmVtO1xuICBmb250LXdlaWdodDogNDAwO1xuICBsaW5lLWhlaWdodDogMS41O1xuICBjb2xvcjogIzQ5NTA1NztcbiAgdGV4dC1hbGlnbjogY2VudGVyO1xuICB3aGl0ZS1zcGFjZTogbm93cmFwO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZTllY2VmO1xuICBib3JkZXI6IDFweCBzb2xpZCAjY2VkNGRhO1xuICBib3JkZXItcmFkaXVzOiAwOyB9XG4gIC5pbnB1dC1ncm91cC10ZXh0IGlucHV0W3R5cGU9XCJyYWRpb1wiXSxcbiAgLmlucHV0LWdyb3VwLXRleHQgaW5wdXRbdHlwZT1cImNoZWNrYm94XCJdIHtcbiAgICBtYXJnaW4tdG9wOiAwOyB9XG5cbi5pbnB1dC1ncm91cC1sZyA+IC5mb3JtLWNvbnRyb2w6bm90KHRleHRhcmVhKSxcbi5pbnB1dC1ncm91cC1sZyA+IC5jdXN0b20tc2VsZWN0IHtcbiAgaGVpZ2h0OiBjYWxjKDEuNWVtICsgMXJlbSArIDJweCk7IH1cblxuLmlucHV0LWdyb3VwLWxnID4gLmZvcm0tY29udHJvbCxcbi5pbnB1dC1ncm91cC1sZyA+IC5jdXN0b20tc2VsZWN0LFxuLmlucHV0LWdyb3VwLWxnID4gLmlucHV0LWdyb3VwLXByZXBlbmQgPiAuaW5wdXQtZ3JvdXAtdGV4dCxcbi5pbnB1dC1ncm91cC1sZyA+IC5pbnB1dC1ncm91cC1hcHBlbmQgPiAuaW5wdXQtZ3JvdXAtdGV4dCxcbi5pbnB1dC1ncm91cC1sZyA+IC5pbnB1dC1ncm91cC1wcmVwZW5kID4gLmJ0bixcbi5pbnB1dC1ncm91cC1sZyA+IC5pbnB1dC1ncm91cC1hcHBlbmQgPiAuYnRuIHtcbiAgcGFkZGluZzogMC41cmVtIDFyZW07XG4gIGZvbnQtc2l6ZTogMS4yNXJlbTtcbiAgbGluZS1oZWlnaHQ6IDEuNTtcbiAgYm9yZGVyLXJhZGl1czogMC4zcmVtOyB9XG5cbi5pbnB1dC1ncm91cC1zbSA+IC5mb3JtLWNvbnRyb2w6bm90KHRleHRhcmVhKSxcbi5pbnB1dC1ncm91cC1zbSA+IC5jdXN0b20tc2VsZWN0IHtcbiAgaGVpZ2h0OiBjYWxjKDEuNWVtICsgMC41cmVtICsgMnB4KTsgfVxuXG4uaW5wdXQtZ3JvdXAtc20gPiAuZm9ybS1jb250cm9sLFxuLmlucHV0LWdyb3VwLXNtID4gLmN1c3RvbS1zZWxlY3QsXG4uaW5wdXQtZ3JvdXAtc20gPiAuaW5wdXQtZ3JvdXAtcHJlcGVuZCA+IC5pbnB1dC1ncm91cC10ZXh0LFxuLmlucHV0LWdyb3VwLXNtID4gLmlucHV0LWdyb3VwLWFwcGVuZCA+IC5pbnB1dC1ncm91cC10ZXh0LFxuLmlucHV0LWdyb3VwLXNtID4gLmlucHV0LWdyb3VwLXByZXBlbmQgPiAuYnRuLFxuLmlucHV0LWdyb3VwLXNtID4gLmlucHV0LWdyb3VwLWFwcGVuZCA+IC5idG4ge1xuICBwYWRkaW5nOiAwLjI1cmVtIDAuNXJlbTtcbiAgZm9udC1zaXplOiAwLjg3NXJlbTtcbiAgbGluZS1oZWlnaHQ6IDEuNTtcbiAgYm9yZGVyLXJhZGl1czogMC4ycmVtOyB9XG5cbi5pbnB1dC1ncm91cC1sZyA+IC5jdXN0b20tc2VsZWN0LFxuLmlucHV0LWdyb3VwLXNtID4gLmN1c3RvbS1zZWxlY3Qge1xuICBwYWRkaW5nLXJpZ2h0OiAxLjc1cmVtOyB9XG5cbi5pbnB1dC1ncm91cCA+IC5pbnB1dC1ncm91cC1wcmVwZW5kID4gLmJ0bixcbi5pbnB1dC1ncm91cCA+IC5pbnB1dC1ncm91cC1wcmVwZW5kID4gLmlucHV0LWdyb3VwLXRleHQsXG4uaW5wdXQtZ3JvdXAgPiAuaW5wdXQtZ3JvdXAtYXBwZW5kOm5vdCg6bGFzdC1jaGlsZCkgPiAuYnRuLFxuLmlucHV0LWdyb3VwID4gLmlucHV0LWdyb3VwLWFwcGVuZDpub3QoOmxhc3QtY2hpbGQpID4gLmlucHV0LWdyb3VwLXRleHQsXG4uaW5wdXQtZ3JvdXAgPiAuaW5wdXQtZ3JvdXAtYXBwZW5kOmxhc3QtY2hpbGQgPiAuYnRuOm5vdCg6bGFzdC1jaGlsZCk6bm90KC5kcm9wZG93bi10b2dnbGUpLFxuLmlucHV0LWdyb3VwID4gLmlucHV0LWdyb3VwLWFwcGVuZDpsYXN0LWNoaWxkID4gLmlucHV0LWdyb3VwLXRleHQ6bm90KDpsYXN0LWNoaWxkKSB7XG4gIGJvcmRlci10b3AtcmlnaHQtcmFkaXVzOiAwO1xuICBib3JkZXItYm90dG9tLXJpZ2h0LXJhZGl1czogMDsgfVxuXG4uaW5wdXQtZ3JvdXAgPiAuaW5wdXQtZ3JvdXAtYXBwZW5kID4gLmJ0bixcbi5pbnB1dC1ncm91cCA+IC5pbnB1dC1ncm91cC1hcHBlbmQgPiAuaW5wdXQtZ3JvdXAtdGV4dCxcbi5pbnB1dC1ncm91cCA+IC5pbnB1dC1ncm91cC1wcmVwZW5kOm5vdCg6Zmlyc3QtY2hpbGQpID4gLmJ0bixcbi5pbnB1dC1ncm91cCA+IC5pbnB1dC1ncm91cC1wcmVwZW5kOm5vdCg6Zmlyc3QtY2hpbGQpID4gLmlucHV0LWdyb3VwLXRleHQsXG4uaW5wdXQtZ3JvdXAgPiAuaW5wdXQtZ3JvdXAtcHJlcGVuZDpmaXJzdC1jaGlsZCA+IC5idG46bm90KDpmaXJzdC1jaGlsZCksXG4uaW5wdXQtZ3JvdXAgPiAuaW5wdXQtZ3JvdXAtcHJlcGVuZDpmaXJzdC1jaGlsZCA+IC5pbnB1dC1ncm91cC10ZXh0Om5vdCg6Zmlyc3QtY2hpbGQpIHtcbiAgYm9yZGVyLXRvcC1sZWZ0LXJhZGl1czogMDtcbiAgYm9yZGVyLWJvdHRvbS1sZWZ0LXJhZGl1czogMDsgfVxuXG4uY3VzdG9tLWNvbnRyb2wge1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIGRpc3BsYXk6IGJsb2NrO1xuICBtaW4taGVpZ2h0OiAxLjVyZW07XG4gIHBhZGRpbmctbGVmdDogMS41cmVtOyB9XG5cbi5jdXN0b20tY29udHJvbC1pbmxpbmUge1xuICBkaXNwbGF5OiBpbmxpbmUtZmxleDtcbiAgbWFyZ2luLXJpZ2h0OiAxcmVtOyB9XG5cbi5jdXN0b20tY29udHJvbC1pbnB1dCB7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgbGVmdDogMDtcbiAgei1pbmRleDogLTE7XG4gIHdpZHRoOiAxcmVtO1xuICBoZWlnaHQ6IDEuMjVyZW07XG4gIG9wYWNpdHk6IDA7IH1cbiAgLmN1c3RvbS1jb250cm9sLWlucHV0OmNoZWNrZWQgfiAuY3VzdG9tLWNvbnRyb2wtbGFiZWw6OmJlZm9yZSB7XG4gICAgY29sb3I6ICNmZmY7XG4gICAgYm9yZGVyLWNvbG9yOiAjM0Y4NEZDO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICMzRjg0RkM7IH1cbiAgLmN1c3RvbS1jb250cm9sLWlucHV0OmZvY3VzIH4gLmN1c3RvbS1jb250cm9sLWxhYmVsOjpiZWZvcmUge1xuICAgIGJveC1zaGFkb3c6IDAgMCAwIDAuMnJlbSByZ2JhKDYzLCAxMzIsIDI1MiwgMC4yNSk7IH1cbiAgLmN1c3RvbS1jb250cm9sLWlucHV0OmZvY3VzOm5vdCg6Y2hlY2tlZCkgfiAuY3VzdG9tLWNvbnRyb2wtbGFiZWw6OmJlZm9yZSB7XG4gICAgYm9yZGVyLWNvbG9yOiAjYmRkNGZlOyB9XG4gIC5jdXN0b20tY29udHJvbC1pbnB1dDpub3QoOmRpc2FibGVkKTphY3RpdmUgfiAuY3VzdG9tLWNvbnRyb2wtbGFiZWw6OmJlZm9yZSB7XG4gICAgY29sb3I6ICNmZmY7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI2VmZjVmZjtcbiAgICBib3JkZXItY29sb3I6ICNlZmY1ZmY7IH1cbiAgLmN1c3RvbS1jb250cm9sLWlucHV0W2Rpc2FibGVkXSB+IC5jdXN0b20tY29udHJvbC1sYWJlbCwgLmN1c3RvbS1jb250cm9sLWlucHV0OmRpc2FibGVkIH4gLmN1c3RvbS1jb250cm9sLWxhYmVsIHtcbiAgICBjb2xvcjogIzZjNzU3ZDsgfVxuICAgIC5jdXN0b20tY29udHJvbC1pbnB1dFtkaXNhYmxlZF0gfiAuY3VzdG9tLWNvbnRyb2wtbGFiZWw6OmJlZm9yZSwgLmN1c3RvbS1jb250cm9sLWlucHV0OmRpc2FibGVkIH4gLmN1c3RvbS1jb250cm9sLWxhYmVsOjpiZWZvcmUge1xuICAgICAgYmFja2dyb3VuZC1jb2xvcjogI2U5ZWNlZjsgfVxuXG4uY3VzdG9tLWNvbnRyb2wtbGFiZWwge1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIG1hcmdpbi1ib3R0b206IDA7XG4gIHZlcnRpY2FsLWFsaWduOiB0b3A7IH1cbiAgLmN1c3RvbS1jb250cm9sLWxhYmVsOjpiZWZvcmUge1xuICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICB0b3A6IDAuMjVyZW07XG4gICAgbGVmdDogLTEuNXJlbTtcbiAgICBkaXNwbGF5OiBibG9jaztcbiAgICB3aWR0aDogMXJlbTtcbiAgICBoZWlnaHQ6IDFyZW07XG4gICAgcG9pbnRlci1ldmVudHM6IG5vbmU7XG4gICAgY29udGVudDogXCJcIjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjZmZmO1xuICAgIGJvcmRlcjogI2FkYjViZCBzb2xpZCAxcHg7IH1cbiAgLmN1c3RvbS1jb250cm9sLWxhYmVsOjphZnRlciB7XG4gICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgIHRvcDogMC4yNXJlbTtcbiAgICBsZWZ0OiAtMS41cmVtO1xuICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgIHdpZHRoOiAxcmVtO1xuICAgIGhlaWdodDogMXJlbTtcbiAgICBjb250ZW50OiBcIlwiO1xuICAgIGJhY2tncm91bmQ6IG5vLXJlcGVhdCA1MCUgLyA1MCUgNTAlOyB9XG5cbi5jdXN0b20tY2hlY2tib3ggLmN1c3RvbS1jb250cm9sLWxhYmVsOjpiZWZvcmUge1xuICBib3JkZXItcmFkaXVzOiAwOyB9XG5cbi5jdXN0b20tY2hlY2tib3ggLmN1c3RvbS1jb250cm9sLWlucHV0OmNoZWNrZWQgfiAuY3VzdG9tLWNvbnRyb2wtbGFiZWw6OmFmdGVyIHtcbiAgYmFja2dyb3VuZC1pbWFnZTogdXJsKFwiZGF0YTppbWFnZS9zdmcreG1sLCUzY3N2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHdpZHRoPSc4JyBoZWlnaHQ9JzgnIHZpZXdCb3g9JzAgMCA4IDgnJTNlJTNjcGF0aCBmaWxsPSclMjNmZmYnIGQ9J002LjU2NC43NWwtMy41OSAzLjYxMi0xLjUzOC0xLjU1TDAgNC4yNmwyLjk3NCAyLjk5TDggMi4xOTN6Jy8lM2UlM2Mvc3ZnJTNlXCIpOyB9XG5cbi5jdXN0b20tY2hlY2tib3ggLmN1c3RvbS1jb250cm9sLWlucHV0OmluZGV0ZXJtaW5hdGUgfiAuY3VzdG9tLWNvbnRyb2wtbGFiZWw6OmJlZm9yZSB7XG4gIGJvcmRlci1jb2xvcjogIzNGODRGQztcbiAgYmFja2dyb3VuZC1jb2xvcjogIzNGODRGQzsgfVxuXG4uY3VzdG9tLWNoZWNrYm94IC5jdXN0b20tY29udHJvbC1pbnB1dDppbmRldGVybWluYXRlIH4gLmN1c3RvbS1jb250cm9sLWxhYmVsOjphZnRlciB7XG4gIGJhY2tncm91bmQtaW1hZ2U6IHVybChcImRhdGE6aW1hZ2Uvc3ZnK3htbCwlM2NzdmcgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJyB3aWR0aD0nNCcgaGVpZ2h0PSc0JyB2aWV3Qm94PScwIDAgNCA0JyUzZSUzY3BhdGggc3Ryb2tlPSclMjNmZmYnIGQ9J00wIDJoNCcvJTNlJTNjL3N2ZyUzZVwiKTsgfVxuXG4uY3VzdG9tLWNoZWNrYm94IC5jdXN0b20tY29udHJvbC1pbnB1dDpkaXNhYmxlZDpjaGVja2VkIH4gLmN1c3RvbS1jb250cm9sLWxhYmVsOjpiZWZvcmUge1xuICBiYWNrZ3JvdW5kLWNvbG9yOiByZ2JhKDYzLCAxMzIsIDI1MiwgMC41KTsgfVxuXG4uY3VzdG9tLWNoZWNrYm94IC5jdXN0b20tY29udHJvbC1pbnB1dDpkaXNhYmxlZDppbmRldGVybWluYXRlIH4gLmN1c3RvbS1jb250cm9sLWxhYmVsOjpiZWZvcmUge1xuICBiYWNrZ3JvdW5kLWNvbG9yOiByZ2JhKDYzLCAxMzIsIDI1MiwgMC41KTsgfVxuXG4uY3VzdG9tLXJhZGlvIC5jdXN0b20tY29udHJvbC1sYWJlbDo6YmVmb3JlIHtcbiAgYm9yZGVyLXJhZGl1czogNTAlOyB9XG5cbi5jdXN0b20tcmFkaW8gLmN1c3RvbS1jb250cm9sLWlucHV0OmNoZWNrZWQgfiAuY3VzdG9tLWNvbnRyb2wtbGFiZWw6OmFmdGVyIHtcbiAgYmFja2dyb3VuZC1pbWFnZTogdXJsKFwiZGF0YTppbWFnZS9zdmcreG1sLCUzY3N2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHdpZHRoPScxMicgaGVpZ2h0PScxMicgdmlld0JveD0nLTQgLTQgOCA4JyUzZSUzY2NpcmNsZSByPSczJyBmaWxsPSclMjNmZmYnLyUzZSUzYy9zdmclM2VcIik7IH1cblxuLmN1c3RvbS1yYWRpbyAuY3VzdG9tLWNvbnRyb2wtaW5wdXQ6ZGlzYWJsZWQ6Y2hlY2tlZCB+IC5jdXN0b20tY29udHJvbC1sYWJlbDo6YmVmb3JlIHtcbiAgYmFja2dyb3VuZC1jb2xvcjogcmdiYSg2MywgMTMyLCAyNTIsIDAuNSk7IH1cblxuLmN1c3RvbS1zd2l0Y2gge1xuICBwYWRkaW5nLWxlZnQ6IDIuMjVyZW07IH1cbiAgLmN1c3RvbS1zd2l0Y2ggLmN1c3RvbS1jb250cm9sLWxhYmVsOjpiZWZvcmUge1xuICAgIGxlZnQ6IC0yLjI1cmVtO1xuICAgIHdpZHRoOiAxLjc1cmVtO1xuICAgIHBvaW50ZXItZXZlbnRzOiBhbGw7XG4gICAgYm9yZGVyLXJhZGl1czogMC41cmVtOyB9XG4gIC5jdXN0b20tc3dpdGNoIC5jdXN0b20tY29udHJvbC1sYWJlbDo6YWZ0ZXIge1xuICAgIHRvcDogY2FsYygwLjI1cmVtICsgMnB4KTtcbiAgICBsZWZ0OiBjYWxjKC0yLjI1cmVtICsgMnB4KTtcbiAgICB3aWR0aDogY2FsYygxcmVtIC0gNHB4KTtcbiAgICBoZWlnaHQ6IGNhbGMoMXJlbSAtIDRweCk7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI2FkYjViZDtcbiAgICBib3JkZXItcmFkaXVzOiAwLjVyZW07XG4gICAgdHJhbnNpdGlvbjogdHJhbnNmb3JtIDAuMTVzIGVhc2UtaW4tb3V0LCBiYWNrZ3JvdW5kLWNvbG9yIDAuMTVzIGVhc2UtaW4tb3V0LCBib3JkZXItY29sb3IgMC4xNXMgZWFzZS1pbi1vdXQsIGJveC1zaGFkb3cgMC4xNXMgZWFzZS1pbi1vdXQ7IH1cbiAgICBAbWVkaWEgKHByZWZlcnMtcmVkdWNlZC1tb3Rpb246IHJlZHVjZSkge1xuICAgICAgLmN1c3RvbS1zd2l0Y2ggLmN1c3RvbS1jb250cm9sLWxhYmVsOjphZnRlciB7XG4gICAgICAgIHRyYW5zaXRpb246IG5vbmU7IH0gfVxuICAuY3VzdG9tLXN3aXRjaCAuY3VzdG9tLWNvbnRyb2wtaW5wdXQ6Y2hlY2tlZCB+IC5jdXN0b20tY29udHJvbC1sYWJlbDo6YWZ0ZXIge1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNmZmY7XG4gICAgdHJhbnNmb3JtOiB0cmFuc2xhdGVYKDAuNzVyZW0pOyB9XG4gIC5jdXN0b20tc3dpdGNoIC5jdXN0b20tY29udHJvbC1pbnB1dDpkaXNhYmxlZDpjaGVja2VkIH4gLmN1c3RvbS1jb250cm9sLWxhYmVsOjpiZWZvcmUge1xuICAgIGJhY2tncm91bmQtY29sb3I6IHJnYmEoNjMsIDEzMiwgMjUyLCAwLjUpOyB9XG5cbi5jdXN0b20tc2VsZWN0IHtcbiAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICB3aWR0aDogMTAwJTtcbiAgaGVpZ2h0OiBjYWxjKDEuNWVtICsgMC43NXJlbSArIDJweCk7XG4gIHBhZGRpbmc6IDAuMzc1cmVtIDEuNzVyZW0gMC4zNzVyZW0gMC43NXJlbTtcbiAgZm9udC1zaXplOiAxcmVtO1xuICBmb250LXdlaWdodDogNDAwO1xuICBsaW5lLWhlaWdodDogMS41O1xuICBjb2xvcjogIzQ5NTA1NztcbiAgdmVydGljYWwtYWxpZ246IG1pZGRsZTtcbiAgYmFja2dyb3VuZDogI2ZmZiB1cmwoXCJkYXRhOmltYWdlL3N2Zyt4bWwsJTNjc3ZnIHhtbG5zPSdodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2Zycgd2lkdGg9JzQnIGhlaWdodD0nNScgdmlld0JveD0nMCAwIDQgNSclM2UlM2NwYXRoIGZpbGw9JyUyMzM0M2E0MCcgZD0nTTIgMEwwIDJoNHptMCA1TDAgM2g0eicvJTNlJTNjL3N2ZyUzZVwiKSBuby1yZXBlYXQgcmlnaHQgMC43NXJlbSBjZW50ZXIvOHB4IDEwcHg7XG4gIGJvcmRlcjogMXB4IHNvbGlkICNjZWQ0ZGE7XG4gIGJvcmRlci1yYWRpdXM6IDA7XG4gIGFwcGVhcmFuY2U6IG5vbmU7IH1cbiAgLmN1c3RvbS1zZWxlY3Q6Zm9jdXMge1xuICAgIGJvcmRlci1jb2xvcjogI2JkZDRmZTtcbiAgICBvdXRsaW5lOiAwO1xuICAgIGJveC1zaGFkb3c6IDAgMCAwIDAuMnJlbSByZ2JhKDYzLCAxMzIsIDI1MiwgMC4yNSk7IH1cbiAgICAuY3VzdG9tLXNlbGVjdDpmb2N1czo6LW1zLXZhbHVlIHtcbiAgICAgIGNvbG9yOiAjNDk1MDU3O1xuICAgICAgYmFja2dyb3VuZC1jb2xvcjogI2ZmZjsgfVxuICAuY3VzdG9tLXNlbGVjdFttdWx0aXBsZV0sIC5jdXN0b20tc2VsZWN0W3NpemVdOm5vdChbc2l6ZT1cIjFcIl0pIHtcbiAgICBoZWlnaHQ6IGF1dG87XG4gICAgcGFkZGluZy1yaWdodDogMC43NXJlbTtcbiAgICBiYWNrZ3JvdW5kLWltYWdlOiBub25lOyB9XG4gIC5jdXN0b20tc2VsZWN0OmRpc2FibGVkIHtcbiAgICBjb2xvcjogIzZjNzU3ZDtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjZTllY2VmOyB9XG4gIC5jdXN0b20tc2VsZWN0OjotbXMtZXhwYW5kIHtcbiAgICBkaXNwbGF5OiBub25lOyB9XG4gIC5jdXN0b20tc2VsZWN0Oi1tb3otZm9jdXNyaW5nIHtcbiAgICBjb2xvcjogdHJhbnNwYXJlbnQ7XG4gICAgdGV4dC1zaGFkb3c6IDAgMCAwICM0OTUwNTc7IH1cblxuLmN1c3RvbS1zZWxlY3Qtc20ge1xuICBoZWlnaHQ6IGNhbGMoMS41ZW0gKyAwLjVyZW0gKyAycHgpO1xuICBwYWRkaW5nLXRvcDogMC4yNXJlbTtcbiAgcGFkZGluZy1ib3R0b206IDAuMjVyZW07XG4gIHBhZGRpbmctbGVmdDogMC41cmVtO1xuICBmb250LXNpemU6IDAuODc1cmVtOyB9XG5cbi5jdXN0b20tc2VsZWN0LWxnIHtcbiAgaGVpZ2h0OiBjYWxjKDEuNWVtICsgMXJlbSArIDJweCk7XG4gIHBhZGRpbmctdG9wOiAwLjVyZW07XG4gIHBhZGRpbmctYm90dG9tOiAwLjVyZW07XG4gIHBhZGRpbmctbGVmdDogMXJlbTtcbiAgZm9udC1zaXplOiAxLjI1cmVtOyB9XG5cbi5jdXN0b20tZmlsZSB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICB3aWR0aDogMTAwJTtcbiAgaGVpZ2h0OiBjYWxjKDEuNWVtICsgMC43NXJlbSArIDJweCk7XG4gIG1hcmdpbi1ib3R0b206IDA7IH1cblxuLmN1c3RvbS1maWxlLWlucHV0IHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICB6LWluZGV4OiAyO1xuICB3aWR0aDogMTAwJTtcbiAgaGVpZ2h0OiBjYWxjKDEuNWVtICsgMC43NXJlbSArIDJweCk7XG4gIG1hcmdpbjogMDtcbiAgb3BhY2l0eTogMDsgfVxuICAuY3VzdG9tLWZpbGUtaW5wdXQ6Zm9jdXMgfiAuY3VzdG9tLWZpbGUtbGFiZWwge1xuICAgIGJvcmRlci1jb2xvcjogI2JkZDRmZTtcbiAgICBib3gtc2hhZG93OiAwIDAgMCAwLjJyZW0gcmdiYSg2MywgMTMyLCAyNTIsIDAuMjUpOyB9XG4gIC5jdXN0b20tZmlsZS1pbnB1dFtkaXNhYmxlZF0gfiAuY3VzdG9tLWZpbGUtbGFiZWwsXG4gIC5jdXN0b20tZmlsZS1pbnB1dDpkaXNhYmxlZCB+IC5jdXN0b20tZmlsZS1sYWJlbCB7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI2U5ZWNlZjsgfVxuICAuY3VzdG9tLWZpbGUtaW5wdXQ6bGFuZyhlbikgfiAuY3VzdG9tLWZpbGUtbGFiZWw6OmFmdGVyIHtcbiAgICBjb250ZW50OiBcIkJyb3dzZVwiOyB9XG4gIC5jdXN0b20tZmlsZS1pbnB1dCB+IC5jdXN0b20tZmlsZS1sYWJlbFtkYXRhLWJyb3dzZV06OmFmdGVyIHtcbiAgICBjb250ZW50OiBhdHRyKGRhdGEtYnJvd3NlKTsgfVxuXG4uY3VzdG9tLWZpbGUtbGFiZWwge1xuICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gIHRvcDogMDtcbiAgcmlnaHQ6IDA7XG4gIGxlZnQ6IDA7XG4gIHotaW5kZXg6IDE7XG4gIGhlaWdodDogY2FsYygxLjVlbSArIDAuNzVyZW0gKyAycHgpO1xuICBwYWRkaW5nOiAwLjM3NXJlbSAwLjc1cmVtO1xuICBmb250LXdlaWdodDogNDAwO1xuICBsaW5lLWhlaWdodDogMS41O1xuICBjb2xvcjogIzQ5NTA1NztcbiAgYmFja2dyb3VuZC1jb2xvcjogI2ZmZjtcbiAgYm9yZGVyOiAxcHggc29saWQgI2NlZDRkYTtcbiAgYm9yZGVyLXJhZGl1czogMDsgfVxuICAuY3VzdG9tLWZpbGUtbGFiZWw6OmFmdGVyIHtcbiAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgdG9wOiAwO1xuICAgIHJpZ2h0OiAwO1xuICAgIGJvdHRvbTogMDtcbiAgICB6LWluZGV4OiAzO1xuICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgIGhlaWdodDogY2FsYygxLjVlbSArIDAuNzVyZW0pO1xuICAgIHBhZGRpbmc6IDAuMzc1cmVtIDAuNzVyZW07XG4gICAgbGluZS1oZWlnaHQ6IDEuNTtcbiAgICBjb2xvcjogIzQ5NTA1NztcbiAgICBjb250ZW50OiBcIkJyb3dzZVwiO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNlOWVjZWY7XG4gICAgYm9yZGVyLWxlZnQ6IGluaGVyaXQ7XG4gICAgYm9yZGVyLXJhZGl1czogMCAwIDAgMDsgfVxuXG4uY3VzdG9tLXJhbmdlIHtcbiAgd2lkdGg6IDEwMCU7XG4gIGhlaWdodDogMS40cmVtO1xuICBwYWRkaW5nOiAwO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiB0cmFuc3BhcmVudDtcbiAgYXBwZWFyYW5jZTogbm9uZTsgfVxuICAuY3VzdG9tLXJhbmdlOmZvY3VzIHtcbiAgICBvdXRsaW5lOiBub25lOyB9XG4gICAgLmN1c3RvbS1yYW5nZTpmb2N1czo6LXdlYmtpdC1zbGlkZXItdGh1bWIge1xuICAgICAgYm94LXNoYWRvdzogMCAwIDAgMXB4ICNmZmYsIDAgMCAwIDAuMnJlbSByZ2JhKDYzLCAxMzIsIDI1MiwgMC4yNSk7IH1cbiAgICAuY3VzdG9tLXJhbmdlOmZvY3VzOjotbW96LXJhbmdlLXRodW1iIHtcbiAgICAgIGJveC1zaGFkb3c6IDAgMCAwIDFweCAjZmZmLCAwIDAgMCAwLjJyZW0gcmdiYSg2MywgMTMyLCAyNTIsIDAuMjUpOyB9XG4gICAgLmN1c3RvbS1yYW5nZTpmb2N1czo6LW1zLXRodW1iIHtcbiAgICAgIGJveC1zaGFkb3c6IDAgMCAwIDFweCAjZmZmLCAwIDAgMCAwLjJyZW0gcmdiYSg2MywgMTMyLCAyNTIsIDAuMjUpOyB9XG4gIC5jdXN0b20tcmFuZ2U6Oi1tb3otZm9jdXMtb3V0ZXIge1xuICAgIGJvcmRlcjogMDsgfVxuICAuY3VzdG9tLXJhbmdlOjotd2Via2l0LXNsaWRlci10aHVtYiB7XG4gICAgd2lkdGg6IDFyZW07XG4gICAgaGVpZ2h0OiAxcmVtO1xuICAgIG1hcmdpbi10b3A6IC0wLjI1cmVtO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICMzRjg0RkM7XG4gICAgYm9yZGVyOiAwO1xuICAgIGJvcmRlci1yYWRpdXM6IDFyZW07XG4gICAgdHJhbnNpdGlvbjogYmFja2dyb3VuZC1jb2xvciAwLjE1cyBlYXNlLWluLW91dCwgYm9yZGVyLWNvbG9yIDAuMTVzIGVhc2UtaW4tb3V0LCBib3gtc2hhZG93IDAuMTVzIGVhc2UtaW4tb3V0O1xuICAgIGFwcGVhcmFuY2U6IG5vbmU7IH1cbiAgICBAbWVkaWEgKHByZWZlcnMtcmVkdWNlZC1tb3Rpb246IHJlZHVjZSkge1xuICAgICAgLmN1c3RvbS1yYW5nZTo6LXdlYmtpdC1zbGlkZXItdGh1bWIge1xuICAgICAgICB0cmFuc2l0aW9uOiBub25lOyB9IH1cbiAgICAuY3VzdG9tLXJhbmdlOjotd2Via2l0LXNsaWRlci10aHVtYjphY3RpdmUge1xuICAgICAgYmFja2dyb3VuZC1jb2xvcjogI2VmZjVmZjsgfVxuICAuY3VzdG9tLXJhbmdlOjotd2Via2l0LXNsaWRlci1ydW5uYWJsZS10cmFjayB7XG4gICAgd2lkdGg6IDEwMCU7XG4gICAgaGVpZ2h0OiAwLjVyZW07XG4gICAgY29sb3I6IHRyYW5zcGFyZW50O1xuICAgIGN1cnNvcjogcG9pbnRlcjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjZGVlMmU2O1xuICAgIGJvcmRlci1jb2xvcjogdHJhbnNwYXJlbnQ7XG4gICAgYm9yZGVyLXJhZGl1czogMXJlbTsgfVxuICAuY3VzdG9tLXJhbmdlOjotbW96LXJhbmdlLXRodW1iIHtcbiAgICB3aWR0aDogMXJlbTtcbiAgICBoZWlnaHQ6IDFyZW07XG4gICAgYmFja2dyb3VuZC1jb2xvcjogIzNGODRGQztcbiAgICBib3JkZXI6IDA7XG4gICAgYm9yZGVyLXJhZGl1czogMXJlbTtcbiAgICB0cmFuc2l0aW9uOiBiYWNrZ3JvdW5kLWNvbG9yIDAuMTVzIGVhc2UtaW4tb3V0LCBib3JkZXItY29sb3IgMC4xNXMgZWFzZS1pbi1vdXQsIGJveC1zaGFkb3cgMC4xNXMgZWFzZS1pbi1vdXQ7XG4gICAgYXBwZWFyYW5jZTogbm9uZTsgfVxuICAgIEBtZWRpYSAocHJlZmVycy1yZWR1Y2VkLW1vdGlvbjogcmVkdWNlKSB7XG4gICAgICAuY3VzdG9tLXJhbmdlOjotbW96LXJhbmdlLXRodW1iIHtcbiAgICAgICAgdHJhbnNpdGlvbjogbm9uZTsgfSB9XG4gICAgLmN1c3RvbS1yYW5nZTo6LW1vei1yYW5nZS10aHVtYjphY3RpdmUge1xuICAgICAgYmFja2dyb3VuZC1jb2xvcjogI2VmZjVmZjsgfVxuICAuY3VzdG9tLXJhbmdlOjotbW96LXJhbmdlLXRyYWNrIHtcbiAgICB3aWR0aDogMTAwJTtcbiAgICBoZWlnaHQ6IDAuNXJlbTtcbiAgICBjb2xvcjogdHJhbnNwYXJlbnQ7XG4gICAgY3Vyc29yOiBwb2ludGVyO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNkZWUyZTY7XG4gICAgYm9yZGVyLWNvbG9yOiB0cmFuc3BhcmVudDtcbiAgICBib3JkZXItcmFkaXVzOiAxcmVtOyB9XG4gIC5jdXN0b20tcmFuZ2U6Oi1tcy10aHVtYiB7XG4gICAgd2lkdGg6IDFyZW07XG4gICAgaGVpZ2h0OiAxcmVtO1xuICAgIG1hcmdpbi10b3A6IDA7XG4gICAgbWFyZ2luLXJpZ2h0OiAwLjJyZW07XG4gICAgbWFyZ2luLWxlZnQ6IDAuMnJlbTtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjM0Y4NEZDO1xuICAgIGJvcmRlcjogMDtcbiAgICBib3JkZXItcmFkaXVzOiAxcmVtO1xuICAgIHRyYW5zaXRpb246IGJhY2tncm91bmQtY29sb3IgMC4xNXMgZWFzZS1pbi1vdXQsIGJvcmRlci1jb2xvciAwLjE1cyBlYXNlLWluLW91dCwgYm94LXNoYWRvdyAwLjE1cyBlYXNlLWluLW91dDtcbiAgICBhcHBlYXJhbmNlOiBub25lOyB9XG4gICAgQG1lZGlhIChwcmVmZXJzLXJlZHVjZWQtbW90aW9uOiByZWR1Y2UpIHtcbiAgICAgIC5jdXN0b20tcmFuZ2U6Oi1tcy10aHVtYiB7XG4gICAgICAgIHRyYW5zaXRpb246IG5vbmU7IH0gfVxuICAgIC5jdXN0b20tcmFuZ2U6Oi1tcy10aHVtYjphY3RpdmUge1xuICAgICAgYmFja2dyb3VuZC1jb2xvcjogI2VmZjVmZjsgfVxuICAuY3VzdG9tLXJhbmdlOjotbXMtdHJhY2sge1xuICAgIHdpZHRoOiAxMDAlO1xuICAgIGhlaWdodDogMC41cmVtO1xuICAgIGNvbG9yOiB0cmFuc3BhcmVudDtcbiAgICBjdXJzb3I6IHBvaW50ZXI7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogdHJhbnNwYXJlbnQ7XG4gICAgYm9yZGVyLWNvbG9yOiB0cmFuc3BhcmVudDtcbiAgICBib3JkZXItd2lkdGg6IDAuNXJlbTsgfVxuICAuY3VzdG9tLXJhbmdlOjotbXMtZmlsbC1sb3dlciB7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI2RlZTJlNjtcbiAgICBib3JkZXItcmFkaXVzOiAxcmVtOyB9XG4gIC5jdXN0b20tcmFuZ2U6Oi1tcy1maWxsLXVwcGVyIHtcbiAgICBtYXJnaW4tcmlnaHQ6IDE1cHg7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI2RlZTJlNjtcbiAgICBib3JkZXItcmFkaXVzOiAxcmVtOyB9XG4gIC5jdXN0b20tcmFuZ2U6ZGlzYWJsZWQ6Oi13ZWJraXQtc2xpZGVyLXRodW1iIHtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjYWRiNWJkOyB9XG4gIC5jdXN0b20tcmFuZ2U6ZGlzYWJsZWQ6Oi13ZWJraXQtc2xpZGVyLXJ1bm5hYmxlLXRyYWNrIHtcbiAgICBjdXJzb3I6IGRlZmF1bHQ7IH1cbiAgLmN1c3RvbS1yYW5nZTpkaXNhYmxlZDo6LW1vei1yYW5nZS10aHVtYiB7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI2FkYjViZDsgfVxuICAuY3VzdG9tLXJhbmdlOmRpc2FibGVkOjotbW96LXJhbmdlLXRyYWNrIHtcbiAgICBjdXJzb3I6IGRlZmF1bHQ7IH1cbiAgLmN1c3RvbS1yYW5nZTpkaXNhYmxlZDo6LW1zLXRodW1iIHtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjYWRiNWJkOyB9XG5cbi5jdXN0b20tY29udHJvbC1sYWJlbDo6YmVmb3JlLFxuLmN1c3RvbS1maWxlLWxhYmVsLFxuLmN1c3RvbS1zZWxlY3Qge1xuICB0cmFuc2l0aW9uOiBiYWNrZ3JvdW5kLWNvbG9yIDAuMTVzIGVhc2UtaW4tb3V0LCBib3JkZXItY29sb3IgMC4xNXMgZWFzZS1pbi1vdXQsIGJveC1zaGFkb3cgMC4xNXMgZWFzZS1pbi1vdXQ7IH1cbiAgQG1lZGlhIChwcmVmZXJzLXJlZHVjZWQtbW90aW9uOiByZWR1Y2UpIHtcbiAgICAuY3VzdG9tLWNvbnRyb2wtbGFiZWw6OmJlZm9yZSxcbiAgICAuY3VzdG9tLWZpbGUtbGFiZWwsXG4gICAgLmN1c3RvbS1zZWxlY3Qge1xuICAgICAgdHJhbnNpdGlvbjogbm9uZTsgfSB9XG5cbi5uYXYge1xuICBkaXNwbGF5OiBmbGV4O1xuICBmbGV4LXdyYXA6IHdyYXA7XG4gIHBhZGRpbmctbGVmdDogMDtcbiAgbWFyZ2luLWJvdHRvbTogMDtcbiAgbGlzdC1zdHlsZTogbm9uZTsgfVxuXG4ubmF2LWxpbmsge1xuICBkaXNwbGF5OiBibG9jaztcbiAgcGFkZGluZzogMC41cmVtIDFyZW07IH1cbiAgLm5hdi1saW5rOmhvdmVyLCAubmF2LWxpbms6Zm9jdXMge1xuICAgIHRleHQtZGVjb3JhdGlvbjogbm9uZTsgfVxuICAubmF2LWxpbmsuZGlzYWJsZWQge1xuICAgIGNvbG9yOiAjNmM3NTdkO1xuICAgIHBvaW50ZXItZXZlbnRzOiBub25lO1xuICAgIGN1cnNvcjogZGVmYXVsdDsgfVxuXG4ubmF2LXRhYnMge1xuICBib3JkZXItYm90dG9tOiAxcHggc29saWQgI2RlZTJlNjsgfVxuICAubmF2LXRhYnMgLm5hdi1pdGVtIHtcbiAgICBtYXJnaW4tYm90dG9tOiAtMXB4OyB9XG4gIC5uYXYtdGFicyAubmF2LWxpbmsge1xuICAgIGJvcmRlcjogMXB4IHNvbGlkIHRyYW5zcGFyZW50O1xuICAgIGJvcmRlci10b3AtbGVmdC1yYWRpdXM6IDA7XG4gICAgYm9yZGVyLXRvcC1yaWdodC1yYWRpdXM6IDA7IH1cbiAgICAubmF2LXRhYnMgLm5hdi1saW5rOmhvdmVyLCAubmF2LXRhYnMgLm5hdi1saW5rOmZvY3VzIHtcbiAgICAgIGJvcmRlci1jb2xvcjogI2U5ZWNlZiAjZTllY2VmICNkZWUyZTY7IH1cbiAgICAubmF2LXRhYnMgLm5hdi1saW5rLmRpc2FibGVkIHtcbiAgICAgIGNvbG9yOiAjNmM3NTdkO1xuICAgICAgYmFja2dyb3VuZC1jb2xvcjogdHJhbnNwYXJlbnQ7XG4gICAgICBib3JkZXItY29sb3I6IHRyYW5zcGFyZW50OyB9XG4gIC5uYXYtdGFicyAubmF2LWxpbmsuYWN0aXZlLFxuICAubmF2LXRhYnMgLm5hdi1pdGVtLnNob3cgLm5hdi1saW5rIHtcbiAgICBjb2xvcjogIzQ5NTA1NztcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjZmZmO1xuICAgIGJvcmRlci1jb2xvcjogI2RlZTJlNiAjZGVlMmU2ICNmZmY7IH1cbiAgLm5hdi10YWJzIC5kcm9wZG93bi1tZW51IHtcbiAgICBtYXJnaW4tdG9wOiAtMXB4O1xuICAgIGJvcmRlci10b3AtbGVmdC1yYWRpdXM6IDA7XG4gICAgYm9yZGVyLXRvcC1yaWdodC1yYWRpdXM6IDA7IH1cblxuLm5hdi1waWxscyAubmF2LWxpbmsge1xuICBib3JkZXItcmFkaXVzOiAwOyB9XG5cbi5uYXYtcGlsbHMgLm5hdi1saW5rLmFjdGl2ZSxcbi5uYXYtcGlsbHMgLnNob3cgPiAubmF2LWxpbmsge1xuICBjb2xvcjogI2ZmZjtcbiAgYmFja2dyb3VuZC1jb2xvcjogIzNGODRGQzsgfVxuXG4ubmF2LWZpbGwgLm5hdi1pdGVtIHtcbiAgZmxleDogMSAxIGF1dG87XG4gIHRleHQtYWxpZ246IGNlbnRlcjsgfVxuXG4ubmF2LWp1c3RpZmllZCAubmF2LWl0ZW0ge1xuICBmbGV4LWJhc2lzOiAwO1xuICBmbGV4LWdyb3c6IDE7XG4gIHRleHQtYWxpZ246IGNlbnRlcjsgfVxuXG4udGFiLWNvbnRlbnQgPiAudGFiLXBhbmUge1xuICBkaXNwbGF5OiBub25lOyB9XG5cbi50YWItY29udGVudCA+IC5hY3RpdmUge1xuICBkaXNwbGF5OiBibG9jazsgfVxuXG4ubmF2YmFyIHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICBkaXNwbGF5OiBmbGV4O1xuICBmbGV4LXdyYXA6IHdyYXA7XG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gIGp1c3RpZnktY29udGVudDogc3BhY2UtYmV0d2VlbjtcbiAgcGFkZGluZzogMC41cmVtIDFyZW07IH1cbiAgLm5hdmJhciAuY29udGFpbmVyLFxuICAubmF2YmFyIC5jb250YWluZXItZmx1aWQsIC5uYXZiYXIgLmNvbnRhaW5lci1zbSwgLm5hdmJhciAuY29udGFpbmVyLW1kLCAubmF2YmFyIC5jb250YWluZXItbGcsIC5uYXZiYXIgLmNvbnRhaW5lci14bCB7XG4gICAgZGlzcGxheTogZmxleDtcbiAgICBmbGV4LXdyYXA6IHdyYXA7XG4gICAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAgICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWJldHdlZW47IH1cblxuLm5hdmJhci1icmFuZCB7XG4gIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgcGFkZGluZy10b3A6IDAuMzEyNXJlbTtcbiAgcGFkZGluZy1ib3R0b206IDAuMzEyNXJlbTtcbiAgbWFyZ2luLXJpZ2h0OiAxcmVtO1xuICBmb250LXNpemU6IDEuMjVyZW07XG4gIGxpbmUtaGVpZ2h0OiBpbmhlcml0O1xuICB3aGl0ZS1zcGFjZTogbm93cmFwOyB9XG4gIC5uYXZiYXItYnJhbmQ6aG92ZXIsIC5uYXZiYXItYnJhbmQ6Zm9jdXMge1xuICAgIHRleHQtZGVjb3JhdGlvbjogbm9uZTsgfVxuXG4ubmF2YmFyLW5hdiB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gIHBhZGRpbmctbGVmdDogMDtcbiAgbWFyZ2luLWJvdHRvbTogMDtcbiAgbGlzdC1zdHlsZTogbm9uZTsgfVxuICAubmF2YmFyLW5hdiAubmF2LWxpbmsge1xuICAgIHBhZGRpbmctcmlnaHQ6IDA7XG4gICAgcGFkZGluZy1sZWZ0OiAwOyB9XG4gIC5uYXZiYXItbmF2IC5kcm9wZG93bi1tZW51IHtcbiAgICBwb3NpdGlvbjogc3RhdGljO1xuICAgIGZsb2F0OiBub25lOyB9XG5cbi5uYXZiYXItdGV4dCB7XG4gIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgcGFkZGluZy10b3A6IDAuNXJlbTtcbiAgcGFkZGluZy1ib3R0b206IDAuNXJlbTsgfVxuXG4ubmF2YmFyLWNvbGxhcHNlIHtcbiAgZmxleC1iYXNpczogMTAwJTtcbiAgZmxleC1ncm93OiAxO1xuICBhbGlnbi1pdGVtczogY2VudGVyOyB9XG5cbi5uYXZiYXItdG9nZ2xlciB7XG4gIHBhZGRpbmc6IDAuMjVyZW0gMC43NXJlbTtcbiAgZm9udC1zaXplOiAxLjI1cmVtO1xuICBsaW5lLWhlaWdodDogMTtcbiAgYmFja2dyb3VuZC1jb2xvcjogdHJhbnNwYXJlbnQ7XG4gIGJvcmRlcjogMXB4IHNvbGlkIHRyYW5zcGFyZW50O1xuICBib3JkZXItcmFkaXVzOiAwOyB9XG4gIC5uYXZiYXItdG9nZ2xlcjpob3ZlciwgLm5hdmJhci10b2dnbGVyOmZvY3VzIHtcbiAgICB0ZXh0LWRlY29yYXRpb246IG5vbmU7IH1cblxuLm5hdmJhci10b2dnbGVyLWljb24ge1xuICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gIHdpZHRoOiAxLjVlbTtcbiAgaGVpZ2h0OiAxLjVlbTtcbiAgdmVydGljYWwtYWxpZ246IG1pZGRsZTtcbiAgY29udGVudDogXCJcIjtcbiAgYmFja2dyb3VuZDogbm8tcmVwZWF0IGNlbnRlciBjZW50ZXI7XG4gIGJhY2tncm91bmQtc2l6ZTogMTAwJSAxMDAlOyB9XG5cbkBtZWRpYSAobWF4LXdpZHRoOiA1NzUuOThweCkge1xuICAubmF2YmFyLWV4cGFuZC1zbSA+IC5jb250YWluZXIsXG4gIC5uYXZiYXItZXhwYW5kLXNtID4gLmNvbnRhaW5lci1mbHVpZCwgLm5hdmJhci1leHBhbmQtc20gPiAuY29udGFpbmVyLXNtLCAubmF2YmFyLWV4cGFuZC1zbSA+IC5jb250YWluZXItbWQsIC5uYXZiYXItZXhwYW5kLXNtID4gLmNvbnRhaW5lci1sZywgLm5hdmJhci1leHBhbmQtc20gPiAuY29udGFpbmVyLXhsIHtcbiAgICBwYWRkaW5nLXJpZ2h0OiAwO1xuICAgIHBhZGRpbmctbGVmdDogMDsgfSB9XG5cbkBtZWRpYSAobWluLXdpZHRoOiA1NzZweCkge1xuICAubmF2YmFyLWV4cGFuZC1zbSB7XG4gICAgZmxleC1mbG93OiByb3cgbm93cmFwO1xuICAgIGp1c3RpZnktY29udGVudDogZmxleC1zdGFydDsgfVxuICAgIC5uYXZiYXItZXhwYW5kLXNtIC5uYXZiYXItbmF2IHtcbiAgICAgIGZsZXgtZGlyZWN0aW9uOiByb3c7IH1cbiAgICAgIC5uYXZiYXItZXhwYW5kLXNtIC5uYXZiYXItbmF2IC5kcm9wZG93bi1tZW51IHtcbiAgICAgICAgcG9zaXRpb246IGFic29sdXRlOyB9XG4gICAgICAubmF2YmFyLWV4cGFuZC1zbSAubmF2YmFyLW5hdiAubmF2LWxpbmsge1xuICAgICAgICBwYWRkaW5nLXJpZ2h0OiAwLjVyZW07XG4gICAgICAgIHBhZGRpbmctbGVmdDogMC41cmVtOyB9XG4gICAgLm5hdmJhci1leHBhbmQtc20gPiAuY29udGFpbmVyLFxuICAgIC5uYXZiYXItZXhwYW5kLXNtID4gLmNvbnRhaW5lci1mbHVpZCwgLm5hdmJhci1leHBhbmQtc20gPiAuY29udGFpbmVyLXNtLCAubmF2YmFyLWV4cGFuZC1zbSA+IC5jb250YWluZXItbWQsIC5uYXZiYXItZXhwYW5kLXNtID4gLmNvbnRhaW5lci1sZywgLm5hdmJhci1leHBhbmQtc20gPiAuY29udGFpbmVyLXhsIHtcbiAgICAgIGZsZXgtd3JhcDogbm93cmFwOyB9XG4gICAgLm5hdmJhci1leHBhbmQtc20gLm5hdmJhci1jb2xsYXBzZSB7XG4gICAgICBkaXNwbGF5OiBmbGV4ICFpbXBvcnRhbnQ7XG4gICAgICBmbGV4LWJhc2lzOiBhdXRvOyB9XG4gICAgLm5hdmJhci1leHBhbmQtc20gLm5hdmJhci10b2dnbGVyIHtcbiAgICAgIGRpc3BsYXk6IG5vbmU7IH0gfVxuXG5AbWVkaWEgKG1heC13aWR0aDogNzY3Ljk4cHgpIHtcbiAgLm5hdmJhci1leHBhbmQtbWQgPiAuY29udGFpbmVyLFxuICAubmF2YmFyLWV4cGFuZC1tZCA+IC5jb250YWluZXItZmx1aWQsIC5uYXZiYXItZXhwYW5kLW1kID4gLmNvbnRhaW5lci1zbSwgLm5hdmJhci1leHBhbmQtbWQgPiAuY29udGFpbmVyLW1kLCAubmF2YmFyLWV4cGFuZC1tZCA+IC5jb250YWluZXItbGcsIC5uYXZiYXItZXhwYW5kLW1kID4gLmNvbnRhaW5lci14bCB7XG4gICAgcGFkZGluZy1yaWdodDogMDtcbiAgICBwYWRkaW5nLWxlZnQ6IDA7IH0gfVxuXG5AbWVkaWEgKG1pbi13aWR0aDogNzY4cHgpIHtcbiAgLm5hdmJhci1leHBhbmQtbWQge1xuICAgIGZsZXgtZmxvdzogcm93IG5vd3JhcDtcbiAgICBqdXN0aWZ5LWNvbnRlbnQ6IGZsZXgtc3RhcnQ7IH1cbiAgICAubmF2YmFyLWV4cGFuZC1tZCAubmF2YmFyLW5hdiB7XG4gICAgICBmbGV4LWRpcmVjdGlvbjogcm93OyB9XG4gICAgICAubmF2YmFyLWV4cGFuZC1tZCAubmF2YmFyLW5hdiAuZHJvcGRvd24tbWVudSB7XG4gICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTsgfVxuICAgICAgLm5hdmJhci1leHBhbmQtbWQgLm5hdmJhci1uYXYgLm5hdi1saW5rIHtcbiAgICAgICAgcGFkZGluZy1yaWdodDogMC41cmVtO1xuICAgICAgICBwYWRkaW5nLWxlZnQ6IDAuNXJlbTsgfVxuICAgIC5uYXZiYXItZXhwYW5kLW1kID4gLmNvbnRhaW5lcixcbiAgICAubmF2YmFyLWV4cGFuZC1tZCA+IC5jb250YWluZXItZmx1aWQsIC5uYXZiYXItZXhwYW5kLW1kID4gLmNvbnRhaW5lci1zbSwgLm5hdmJhci1leHBhbmQtbWQgPiAuY29udGFpbmVyLW1kLCAubmF2YmFyLWV4cGFuZC1tZCA+IC5jb250YWluZXItbGcsIC5uYXZiYXItZXhwYW5kLW1kID4gLmNvbnRhaW5lci14bCB7XG4gICAgICBmbGV4LXdyYXA6IG5vd3JhcDsgfVxuICAgIC5uYXZiYXItZXhwYW5kLW1kIC5uYXZiYXItY29sbGFwc2Uge1xuICAgICAgZGlzcGxheTogZmxleCAhaW1wb3J0YW50O1xuICAgICAgZmxleC1iYXNpczogYXV0bzsgfVxuICAgIC5uYXZiYXItZXhwYW5kLW1kIC5uYXZiYXItdG9nZ2xlciB7XG4gICAgICBkaXNwbGF5OiBub25lOyB9IH1cblxuQG1lZGlhIChtYXgtd2lkdGg6IDk5MS45OHB4KSB7XG4gIC5uYXZiYXItZXhwYW5kLWxnID4gLmNvbnRhaW5lcixcbiAgLm5hdmJhci1leHBhbmQtbGcgPiAuY29udGFpbmVyLWZsdWlkLCAubmF2YmFyLWV4cGFuZC1sZyA+IC5jb250YWluZXItc20sIC5uYXZiYXItZXhwYW5kLWxnID4gLmNvbnRhaW5lci1tZCwgLm5hdmJhci1leHBhbmQtbGcgPiAuY29udGFpbmVyLWxnLCAubmF2YmFyLWV4cGFuZC1sZyA+IC5jb250YWluZXIteGwge1xuICAgIHBhZGRpbmctcmlnaHQ6IDA7XG4gICAgcGFkZGluZy1sZWZ0OiAwOyB9IH1cblxuQG1lZGlhIChtaW4td2lkdGg6IDk5MnB4KSB7XG4gIC5uYXZiYXItZXhwYW5kLWxnIHtcbiAgICBmbGV4LWZsb3c6IHJvdyBub3dyYXA7XG4gICAganVzdGlmeS1jb250ZW50OiBmbGV4LXN0YXJ0OyB9XG4gICAgLm5hdmJhci1leHBhbmQtbGcgLm5hdmJhci1uYXYge1xuICAgICAgZmxleC1kaXJlY3Rpb246IHJvdzsgfVxuICAgICAgLm5hdmJhci1leHBhbmQtbGcgLm5hdmJhci1uYXYgLmRyb3Bkb3duLW1lbnUge1xuICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGU7IH1cbiAgICAgIC5uYXZiYXItZXhwYW5kLWxnIC5uYXZiYXItbmF2IC5uYXYtbGluayB7XG4gICAgICAgIHBhZGRpbmctcmlnaHQ6IDAuNXJlbTtcbiAgICAgICAgcGFkZGluZy1sZWZ0OiAwLjVyZW07IH1cbiAgICAubmF2YmFyLWV4cGFuZC1sZyA+IC5jb250YWluZXIsXG4gICAgLm5hdmJhci1leHBhbmQtbGcgPiAuY29udGFpbmVyLWZsdWlkLCAubmF2YmFyLWV4cGFuZC1sZyA+IC5jb250YWluZXItc20sIC5uYXZiYXItZXhwYW5kLWxnID4gLmNvbnRhaW5lci1tZCwgLm5hdmJhci1leHBhbmQtbGcgPiAuY29udGFpbmVyLWxnLCAubmF2YmFyLWV4cGFuZC1sZyA+IC5jb250YWluZXIteGwge1xuICAgICAgZmxleC13cmFwOiBub3dyYXA7IH1cbiAgICAubmF2YmFyLWV4cGFuZC1sZyAubmF2YmFyLWNvbGxhcHNlIHtcbiAgICAgIGRpc3BsYXk6IGZsZXggIWltcG9ydGFudDtcbiAgICAgIGZsZXgtYmFzaXM6IGF1dG87IH1cbiAgICAubmF2YmFyLWV4cGFuZC1sZyAubmF2YmFyLXRvZ2dsZXIge1xuICAgICAgZGlzcGxheTogbm9uZTsgfSB9XG5cbkBtZWRpYSAobWF4LXdpZHRoOiAxMTk5Ljk4cHgpIHtcbiAgLm5hdmJhci1leHBhbmQteGwgPiAuY29udGFpbmVyLFxuICAubmF2YmFyLWV4cGFuZC14bCA+IC5jb250YWluZXItZmx1aWQsIC5uYXZiYXItZXhwYW5kLXhsID4gLmNvbnRhaW5lci1zbSwgLm5hdmJhci1leHBhbmQteGwgPiAuY29udGFpbmVyLW1kLCAubmF2YmFyLWV4cGFuZC14bCA+IC5jb250YWluZXItbGcsIC5uYXZiYXItZXhwYW5kLXhsID4gLmNvbnRhaW5lci14bCB7XG4gICAgcGFkZGluZy1yaWdodDogMDtcbiAgICBwYWRkaW5nLWxlZnQ6IDA7IH0gfVxuXG5AbWVkaWEgKG1pbi13aWR0aDogMTIwMHB4KSB7XG4gIC5uYXZiYXItZXhwYW5kLXhsIHtcbiAgICBmbGV4LWZsb3c6IHJvdyBub3dyYXA7XG4gICAganVzdGlmeS1jb250ZW50OiBmbGV4LXN0YXJ0OyB9XG4gICAgLm5hdmJhci1leHBhbmQteGwgLm5hdmJhci1uYXYge1xuICAgICAgZmxleC1kaXJlY3Rpb246IHJvdzsgfVxuICAgICAgLm5hdmJhci1leHBhbmQteGwgLm5hdmJhci1uYXYgLmRyb3Bkb3duLW1lbnUge1xuICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGU7IH1cbiAgICAgIC5uYXZiYXItZXhwYW5kLXhsIC5uYXZiYXItbmF2IC5uYXYtbGluayB7XG4gICAgICAgIHBhZGRpbmctcmlnaHQ6IDAuNXJlbTtcbiAgICAgICAgcGFkZGluZy1sZWZ0OiAwLjVyZW07IH1cbiAgICAubmF2YmFyLWV4cGFuZC14bCA+IC5jb250YWluZXIsXG4gICAgLm5hdmJhci1leHBhbmQteGwgPiAuY29udGFpbmVyLWZsdWlkLCAubmF2YmFyLWV4cGFuZC14bCA+IC5jb250YWluZXItc20sIC5uYXZiYXItZXhwYW5kLXhsID4gLmNvbnRhaW5lci1tZCwgLm5hdmJhci1leHBhbmQteGwgPiAuY29udGFpbmVyLWxnLCAubmF2YmFyLWV4cGFuZC14bCA+IC5jb250YWluZXIteGwge1xuICAgICAgZmxleC13cmFwOiBub3dyYXA7IH1cbiAgICAubmF2YmFyLWV4cGFuZC14bCAubmF2YmFyLWNvbGxhcHNlIHtcbiAgICAgIGRpc3BsYXk6IGZsZXggIWltcG9ydGFudDtcbiAgICAgIGZsZXgtYmFzaXM6IGF1dG87IH1cbiAgICAubmF2YmFyLWV4cGFuZC14bCAubmF2YmFyLXRvZ2dsZXIge1xuICAgICAgZGlzcGxheTogbm9uZTsgfSB9XG5cbi5uYXZiYXItZXhwYW5kIHtcbiAgZmxleC1mbG93OiByb3cgbm93cmFwO1xuICBqdXN0aWZ5LWNvbnRlbnQ6IGZsZXgtc3RhcnQ7IH1cbiAgLm5hdmJhci1leHBhbmQgPiAuY29udGFpbmVyLFxuICAubmF2YmFyLWV4cGFuZCA+IC5jb250YWluZXItZmx1aWQsIC5uYXZiYXItZXhwYW5kID4gLmNvbnRhaW5lci1zbSwgLm5hdmJhci1leHBhbmQgPiAuY29udGFpbmVyLW1kLCAubmF2YmFyLWV4cGFuZCA+IC5jb250YWluZXItbGcsIC5uYXZiYXItZXhwYW5kID4gLmNvbnRhaW5lci14bCB7XG4gICAgcGFkZGluZy1yaWdodDogMDtcbiAgICBwYWRkaW5nLWxlZnQ6IDA7IH1cbiAgLm5hdmJhci1leHBhbmQgLm5hdmJhci1uYXYge1xuICAgIGZsZXgtZGlyZWN0aW9uOiByb3c7IH1cbiAgICAubmF2YmFyLWV4cGFuZCAubmF2YmFyLW5hdiAuZHJvcGRvd24tbWVudSB7XG4gICAgICBwb3NpdGlvbjogYWJzb2x1dGU7IH1cbiAgICAubmF2YmFyLWV4cGFuZCAubmF2YmFyLW5hdiAubmF2LWxpbmsge1xuICAgICAgcGFkZGluZy1yaWdodDogMC41cmVtO1xuICAgICAgcGFkZGluZy1sZWZ0OiAwLjVyZW07IH1cbiAgLm5hdmJhci1leHBhbmQgPiAuY29udGFpbmVyLFxuICAubmF2YmFyLWV4cGFuZCA+IC5jb250YWluZXItZmx1aWQsIC5uYXZiYXItZXhwYW5kID4gLmNvbnRhaW5lci1zbSwgLm5hdmJhci1leHBhbmQgPiAuY29udGFpbmVyLW1kLCAubmF2YmFyLWV4cGFuZCA+IC5jb250YWluZXItbGcsIC5uYXZiYXItZXhwYW5kID4gLmNvbnRhaW5lci14bCB7XG4gICAgZmxleC13cmFwOiBub3dyYXA7IH1cbiAgLm5hdmJhci1leHBhbmQgLm5hdmJhci1jb2xsYXBzZSB7XG4gICAgZGlzcGxheTogZmxleCAhaW1wb3J0YW50O1xuICAgIGZsZXgtYmFzaXM6IGF1dG87IH1cbiAgLm5hdmJhci1leHBhbmQgLm5hdmJhci10b2dnbGVyIHtcbiAgICBkaXNwbGF5OiBub25lOyB9XG5cbi5uYXZiYXItbGlnaHQgLm5hdmJhci1icmFuZCB7XG4gIGNvbG9yOiByZ2JhKDAsIDAsIDAsIDAuOSk7IH1cbiAgLm5hdmJhci1saWdodCAubmF2YmFyLWJyYW5kOmhvdmVyLCAubmF2YmFyLWxpZ2h0IC5uYXZiYXItYnJhbmQ6Zm9jdXMge1xuICAgIGNvbG9yOiByZ2JhKDAsIDAsIDAsIDAuOSk7IH1cblxuLm5hdmJhci1saWdodCAubmF2YmFyLW5hdiAubmF2LWxpbmsge1xuICBjb2xvcjogcmdiYSgwLCAwLCAwLCAwLjUpOyB9XG4gIC5uYXZiYXItbGlnaHQgLm5hdmJhci1uYXYgLm5hdi1saW5rOmhvdmVyLCAubmF2YmFyLWxpZ2h0IC5uYXZiYXItbmF2IC5uYXYtbGluazpmb2N1cyB7XG4gICAgY29sb3I6IHJnYmEoMCwgMCwgMCwgMC43KTsgfVxuICAubmF2YmFyLWxpZ2h0IC5uYXZiYXItbmF2IC5uYXYtbGluay5kaXNhYmxlZCB7XG4gICAgY29sb3I6IHJnYmEoMCwgMCwgMCwgMC4zKTsgfVxuXG4ubmF2YmFyLWxpZ2h0IC5uYXZiYXItbmF2IC5zaG93ID4gLm5hdi1saW5rLFxuLm5hdmJhci1saWdodCAubmF2YmFyLW5hdiAuYWN0aXZlID4gLm5hdi1saW5rLFxuLm5hdmJhci1saWdodCAubmF2YmFyLW5hdiAubmF2LWxpbmsuc2hvdyxcbi5uYXZiYXItbGlnaHQgLm5hdmJhci1uYXYgLm5hdi1saW5rLmFjdGl2ZSB7XG4gIGNvbG9yOiByZ2JhKDAsIDAsIDAsIDAuOSk7IH1cblxuLm5hdmJhci1saWdodCAubmF2YmFyLXRvZ2dsZXIge1xuICBjb2xvcjogcmdiYSgwLCAwLCAwLCAwLjUpO1xuICBib3JkZXItY29sb3I6IHJnYmEoMCwgMCwgMCwgMC4xKTsgfVxuXG4ubmF2YmFyLWxpZ2h0IC5uYXZiYXItdG9nZ2xlci1pY29uIHtcbiAgYmFja2dyb3VuZC1pbWFnZTogdXJsKFwiZGF0YTppbWFnZS9zdmcreG1sLCUzY3N2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHdpZHRoPSczMCcgaGVpZ2h0PSczMCcgdmlld0JveD0nMCAwIDMwIDMwJyUzZSUzY3BhdGggc3Ryb2tlPSdyZ2JhJTI4MCwgMCwgMCwgMC41JTI5JyBzdHJva2UtbGluZWNhcD0ncm91bmQnIHN0cm9rZS1taXRlcmxpbWl0PScxMCcgc3Ryb2tlLXdpZHRoPScyJyBkPSdNNCA3aDIyTTQgMTVoMjJNNCAyM2gyMicvJTNlJTNjL3N2ZyUzZVwiKTsgfVxuXG4ubmF2YmFyLWxpZ2h0IC5uYXZiYXItdGV4dCB7XG4gIGNvbG9yOiByZ2JhKDAsIDAsIDAsIDAuNSk7IH1cbiAgLm5hdmJhci1saWdodCAubmF2YmFyLXRleHQgYSB7XG4gICAgY29sb3I6IHJnYmEoMCwgMCwgMCwgMC45KTsgfVxuICAgIC5uYXZiYXItbGlnaHQgLm5hdmJhci10ZXh0IGE6aG92ZXIsIC5uYXZiYXItbGlnaHQgLm5hdmJhci10ZXh0IGE6Zm9jdXMge1xuICAgICAgY29sb3I6IHJnYmEoMCwgMCwgMCwgMC45KTsgfVxuXG4ubmF2YmFyLWRhcmsgLm5hdmJhci1icmFuZCB7XG4gIGNvbG9yOiAjZmZmOyB9XG4gIC5uYXZiYXItZGFyayAubmF2YmFyLWJyYW5kOmhvdmVyLCAubmF2YmFyLWRhcmsgLm5hdmJhci1icmFuZDpmb2N1cyB7XG4gICAgY29sb3I6ICNmZmY7IH1cblxuLm5hdmJhci1kYXJrIC5uYXZiYXItbmF2IC5uYXYtbGluayB7XG4gIGNvbG9yOiByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuNSk7IH1cbiAgLm5hdmJhci1kYXJrIC5uYXZiYXItbmF2IC5uYXYtbGluazpob3ZlciwgLm5hdmJhci1kYXJrIC5uYXZiYXItbmF2IC5uYXYtbGluazpmb2N1cyB7XG4gICAgY29sb3I6IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC43NSk7IH1cbiAgLm5hdmJhci1kYXJrIC5uYXZiYXItbmF2IC5uYXYtbGluay5kaXNhYmxlZCB7XG4gICAgY29sb3I6IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC4yNSk7IH1cblxuLm5hdmJhci1kYXJrIC5uYXZiYXItbmF2IC5zaG93ID4gLm5hdi1saW5rLFxuLm5hdmJhci1kYXJrIC5uYXZiYXItbmF2IC5hY3RpdmUgPiAubmF2LWxpbmssXG4ubmF2YmFyLWRhcmsgLm5hdmJhci1uYXYgLm5hdi1saW5rLnNob3csXG4ubmF2YmFyLWRhcmsgLm5hdmJhci1uYXYgLm5hdi1saW5rLmFjdGl2ZSB7XG4gIGNvbG9yOiAjZmZmOyB9XG5cbi5uYXZiYXItZGFyayAubmF2YmFyLXRvZ2dsZXIge1xuICBjb2xvcjogcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjUpO1xuICBib3JkZXItY29sb3I6IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC4xKTsgfVxuXG4ubmF2YmFyLWRhcmsgLm5hdmJhci10b2dnbGVyLWljb24ge1xuICBiYWNrZ3JvdW5kLWltYWdlOiB1cmwoXCJkYXRhOmltYWdlL3N2Zyt4bWwsJTNjc3ZnIHhtbG5zPSdodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2Zycgd2lkdGg9JzMwJyBoZWlnaHQ9JzMwJyB2aWV3Qm94PScwIDAgMzAgMzAnJTNlJTNjcGF0aCBzdHJva2U9J3JnYmElMjgyNTUsIDI1NSwgMjU1LCAwLjUlMjknIHN0cm9rZS1saW5lY2FwPSdyb3VuZCcgc3Ryb2tlLW1pdGVybGltaXQ9JzEwJyBzdHJva2Utd2lkdGg9JzInIGQ9J000IDdoMjJNNCAxNWgyMk00IDIzaDIyJy8lM2UlM2Mvc3ZnJTNlXCIpOyB9XG5cbi5uYXZiYXItZGFyayAubmF2YmFyLXRleHQge1xuICBjb2xvcjogcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjUpOyB9XG4gIC5uYXZiYXItZGFyayAubmF2YmFyLXRleHQgYSB7XG4gICAgY29sb3I6ICNmZmY7IH1cbiAgICAubmF2YmFyLWRhcmsgLm5hdmJhci10ZXh0IGE6aG92ZXIsIC5uYXZiYXItZGFyayAubmF2YmFyLXRleHQgYTpmb2N1cyB7XG4gICAgICBjb2xvcjogI2ZmZjsgfVxuXG4uY2FyZCB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgZGlzcGxheTogZmxleDtcbiAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcbiAgbWluLXdpZHRoOiAwO1xuICB3b3JkLXdyYXA6IGJyZWFrLXdvcmQ7XG4gIGJhY2tncm91bmQtY29sb3I6ICNmZmY7XG4gIGJhY2tncm91bmQtY2xpcDogYm9yZGVyLWJveDtcbiAgYm9yZGVyOiAxcHggc29saWQgcmdiYSgwLCAwLCAwLCAwLjEyNSk7XG4gIGJvcmRlci1yYWRpdXM6IDA7IH1cbiAgLmNhcmQgPiBociB7XG4gICAgbWFyZ2luLXJpZ2h0OiAwO1xuICAgIG1hcmdpbi1sZWZ0OiAwOyB9XG4gIC5jYXJkID4gLmxpc3QtZ3JvdXAge1xuICAgIGJvcmRlci10b3A6IGluaGVyaXQ7XG4gICAgYm9yZGVyLWJvdHRvbTogaW5oZXJpdDsgfVxuICAgIC5jYXJkID4gLmxpc3QtZ3JvdXA6Zmlyc3QtY2hpbGQge1xuICAgICAgYm9yZGVyLXRvcC13aWR0aDogMDtcbiAgICAgIGJvcmRlci10b3AtbGVmdC1yYWRpdXM6IDA7XG4gICAgICBib3JkZXItdG9wLXJpZ2h0LXJhZGl1czogMDsgfVxuICAgIC5jYXJkID4gLmxpc3QtZ3JvdXA6bGFzdC1jaGlsZCB7XG4gICAgICBib3JkZXItYm90dG9tLXdpZHRoOiAwO1xuICAgICAgYm9yZGVyLWJvdHRvbS1yaWdodC1yYWRpdXM6IDA7XG4gICAgICBib3JkZXItYm90dG9tLWxlZnQtcmFkaXVzOiAwOyB9XG5cbi5jYXJkLWJvZHkge1xuICBmbGV4OiAxIDEgYXV0bztcbiAgbWluLWhlaWdodDogMXB4O1xuICBwYWRkaW5nOiAxLjI1cmVtOyB9XG5cbi5jYXJkLXRpdGxlIHtcbiAgbWFyZ2luLWJvdHRvbTogMC43NXJlbTsgfVxuXG4uY2FyZC1zdWJ0aXRsZSB7XG4gIG1hcmdpbi10b3A6IC0wLjM3NXJlbTtcbiAgbWFyZ2luLWJvdHRvbTogMDsgfVxuXG4uY2FyZC10ZXh0Omxhc3QtY2hpbGQge1xuICBtYXJnaW4tYm90dG9tOiAwOyB9XG5cbi5jYXJkLWxpbms6aG92ZXIge1xuICB0ZXh0LWRlY29yYXRpb246IG5vbmU7IH1cblxuLmNhcmQtbGluayArIC5jYXJkLWxpbmsge1xuICBtYXJnaW4tbGVmdDogMS4yNXJlbTsgfVxuXG4uY2FyZC1oZWFkZXIge1xuICBwYWRkaW5nOiAwLjc1cmVtIDEuMjVyZW07XG4gIG1hcmdpbi1ib3R0b206IDA7XG4gIGJhY2tncm91bmQtY29sb3I6IHJnYmEoMCwgMCwgMCwgMC4wMyk7XG4gIGJvcmRlci1ib3R0b206IDFweCBzb2xpZCByZ2JhKDAsIDAsIDAsIDAuMTI1KTsgfVxuICAuY2FyZC1oZWFkZXI6Zmlyc3QtY2hpbGQge1xuICAgIGJvcmRlci1yYWRpdXM6IDAgMCAwIDA7IH1cbiAgLmNhcmQtaGVhZGVyICsgLmxpc3QtZ3JvdXAgLmxpc3QtZ3JvdXAtaXRlbTpmaXJzdC1jaGlsZCB7XG4gICAgYm9yZGVyLXRvcDogMDsgfVxuXG4uY2FyZC1mb290ZXIge1xuICBwYWRkaW5nOiAwLjc1cmVtIDEuMjVyZW07XG4gIGJhY2tncm91bmQtY29sb3I6IHJnYmEoMCwgMCwgMCwgMC4wMyk7XG4gIGJvcmRlci10b3A6IDFweCBzb2xpZCByZ2JhKDAsIDAsIDAsIDAuMTI1KTsgfVxuICAuY2FyZC1mb290ZXI6bGFzdC1jaGlsZCB7XG4gICAgYm9yZGVyLXJhZGl1czogMCAwIDAgMDsgfVxuXG4uY2FyZC1oZWFkZXItdGFicyB7XG4gIG1hcmdpbi1yaWdodDogLTAuNjI1cmVtO1xuICBtYXJnaW4tYm90dG9tOiAtMC43NXJlbTtcbiAgbWFyZ2luLWxlZnQ6IC0wLjYyNXJlbTtcbiAgYm9yZGVyLWJvdHRvbTogMDsgfVxuXG4uY2FyZC1oZWFkZXItcGlsbHMge1xuICBtYXJnaW4tcmlnaHQ6IC0wLjYyNXJlbTtcbiAgbWFyZ2luLWxlZnQ6IC0wLjYyNXJlbTsgfVxuXG4uY2FyZC1pbWctb3ZlcmxheSB7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgdG9wOiAwO1xuICByaWdodDogMDtcbiAgYm90dG9tOiAwO1xuICBsZWZ0OiAwO1xuICBwYWRkaW5nOiAxLjI1cmVtOyB9XG5cbi5jYXJkLWltZyxcbi5jYXJkLWltZy10b3AsXG4uY2FyZC1pbWctYm90dG9tIHtcbiAgZmxleC1zaHJpbms6IDA7XG4gIHdpZHRoOiAxMDAlOyB9XG5cbi5jYXJkLWltZyxcbi5jYXJkLWltZy10b3Age1xuICBib3JkZXItdG9wLWxlZnQtcmFkaXVzOiAwO1xuICBib3JkZXItdG9wLXJpZ2h0LXJhZGl1czogMDsgfVxuXG4uY2FyZC1pbWcsXG4uY2FyZC1pbWctYm90dG9tIHtcbiAgYm9yZGVyLWJvdHRvbS1yaWdodC1yYWRpdXM6IDA7XG4gIGJvcmRlci1ib3R0b20tbGVmdC1yYWRpdXM6IDA7IH1cblxuLmNhcmQtZGVjayAuY2FyZCB7XG4gIG1hcmdpbi1ib3R0b206IDE1cHg7IH1cblxuQG1lZGlhIChtaW4td2lkdGg6IDU3NnB4KSB7XG4gIC5jYXJkLWRlY2sge1xuICAgIGRpc3BsYXk6IGZsZXg7XG4gICAgZmxleC1mbG93OiByb3cgd3JhcDtcbiAgICBtYXJnaW4tcmlnaHQ6IC0xNXB4O1xuICAgIG1hcmdpbi1sZWZ0OiAtMTVweDsgfVxuICAgIC5jYXJkLWRlY2sgLmNhcmQge1xuICAgICAgZmxleDogMSAwIDAlO1xuICAgICAgbWFyZ2luLXJpZ2h0OiAxNXB4O1xuICAgICAgbWFyZ2luLWJvdHRvbTogMDtcbiAgICAgIG1hcmdpbi1sZWZ0OiAxNXB4OyB9IH1cblxuLmNhcmQtZ3JvdXAgPiAuY2FyZCB7XG4gIG1hcmdpbi1ib3R0b206IDE1cHg7IH1cblxuQG1lZGlhIChtaW4td2lkdGg6IDU3NnB4KSB7XG4gIC5jYXJkLWdyb3VwIHtcbiAgICBkaXNwbGF5OiBmbGV4O1xuICAgIGZsZXgtZmxvdzogcm93IHdyYXA7IH1cbiAgICAuY2FyZC1ncm91cCA+IC5jYXJkIHtcbiAgICAgIGZsZXg6IDEgMCAwJTtcbiAgICAgIG1hcmdpbi1ib3R0b206IDA7IH1cbiAgICAgIC5jYXJkLWdyb3VwID4gLmNhcmQgKyAuY2FyZCB7XG4gICAgICAgIG1hcmdpbi1sZWZ0OiAwO1xuICAgICAgICBib3JkZXItbGVmdDogMDsgfVxuICAgICAgLmNhcmQtZ3JvdXAgPiAuY2FyZDpub3QoOmxhc3QtY2hpbGQpIHtcbiAgICAgICAgYm9yZGVyLXRvcC1yaWdodC1yYWRpdXM6IDA7XG4gICAgICAgIGJvcmRlci1ib3R0b20tcmlnaHQtcmFkaXVzOiAwOyB9XG4gICAgICAgIC5jYXJkLWdyb3VwID4gLmNhcmQ6bm90KDpsYXN0LWNoaWxkKSAuY2FyZC1pbWctdG9wLFxuICAgICAgICAuY2FyZC1ncm91cCA+IC5jYXJkOm5vdCg6bGFzdC1jaGlsZCkgLmNhcmQtaGVhZGVyIHtcbiAgICAgICAgICBib3JkZXItdG9wLXJpZ2h0LXJhZGl1czogMDsgfVxuICAgICAgICAuY2FyZC1ncm91cCA+IC5jYXJkOm5vdCg6bGFzdC1jaGlsZCkgLmNhcmQtaW1nLWJvdHRvbSxcbiAgICAgICAgLmNhcmQtZ3JvdXAgPiAuY2FyZDpub3QoOmxhc3QtY2hpbGQpIC5jYXJkLWZvb3RlciB7XG4gICAgICAgICAgYm9yZGVyLWJvdHRvbS1yaWdodC1yYWRpdXM6IDA7IH1cbiAgICAgIC5jYXJkLWdyb3VwID4gLmNhcmQ6bm90KDpmaXJzdC1jaGlsZCkge1xuICAgICAgICBib3JkZXItdG9wLWxlZnQtcmFkaXVzOiAwO1xuICAgICAgICBib3JkZXItYm90dG9tLWxlZnQtcmFkaXVzOiAwOyB9XG4gICAgICAgIC5jYXJkLWdyb3VwID4gLmNhcmQ6bm90KDpmaXJzdC1jaGlsZCkgLmNhcmQtaW1nLXRvcCxcbiAgICAgICAgLmNhcmQtZ3JvdXAgPiAuY2FyZDpub3QoOmZpcnN0LWNoaWxkKSAuY2FyZC1oZWFkZXIge1xuICAgICAgICAgIGJvcmRlci10b3AtbGVmdC1yYWRpdXM6IDA7IH1cbiAgICAgICAgLmNhcmQtZ3JvdXAgPiAuY2FyZDpub3QoOmZpcnN0LWNoaWxkKSAuY2FyZC1pbWctYm90dG9tLFxuICAgICAgICAuY2FyZC1ncm91cCA+IC5jYXJkOm5vdCg6Zmlyc3QtY2hpbGQpIC5jYXJkLWZvb3RlciB7XG4gICAgICAgICAgYm9yZGVyLWJvdHRvbS1sZWZ0LXJhZGl1czogMDsgfSB9XG5cbi5jYXJkLWNvbHVtbnMgLmNhcmQge1xuICBtYXJnaW4tYm90dG9tOiAwLjc1cmVtOyB9XG5cbkBtZWRpYSAobWluLXdpZHRoOiA1NzZweCkge1xuICAuY2FyZC1jb2x1bW5zIHtcbiAgICBjb2x1bW4tY291bnQ6IDM7XG4gICAgY29sdW1uLWdhcDogMS4yNXJlbTtcbiAgICBvcnBoYW5zOiAxO1xuICAgIHdpZG93czogMTsgfVxuICAgIC5jYXJkLWNvbHVtbnMgLmNhcmQge1xuICAgICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICAgICAgd2lkdGg6IDEwMCU7IH0gfVxuXG4uYWNjb3JkaW9uID4gLmNhcmQge1xuICBvdmVyZmxvdzogaGlkZGVuOyB9XG4gIC5hY2NvcmRpb24gPiAuY2FyZDpub3QoOmxhc3Qtb2YtdHlwZSkge1xuICAgIGJvcmRlci1ib3R0b206IDA7XG4gICAgYm9yZGVyLWJvdHRvbS1yaWdodC1yYWRpdXM6IDA7XG4gICAgYm9yZGVyLWJvdHRvbS1sZWZ0LXJhZGl1czogMDsgfVxuICAuYWNjb3JkaW9uID4gLmNhcmQ6bm90KDpmaXJzdC1vZi10eXBlKSB7XG4gICAgYm9yZGVyLXRvcC1sZWZ0LXJhZGl1czogMDtcbiAgICBib3JkZXItdG9wLXJpZ2h0LXJhZGl1czogMDsgfVxuICAuYWNjb3JkaW9uID4gLmNhcmQgPiAuY2FyZC1oZWFkZXIge1xuICAgIGJvcmRlci1yYWRpdXM6IDA7XG4gICAgbWFyZ2luLWJvdHRvbTogLTFweDsgfVxuXG4uYnJlYWRjcnVtYiB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGZsZXgtd3JhcDogd3JhcDtcbiAgcGFkZGluZzogMC43NXJlbSAxcmVtO1xuICBtYXJnaW4tYm90dG9tOiAxcmVtO1xuICBsaXN0LXN0eWxlOiBub25lO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZTllY2VmO1xuICBib3JkZXItcmFkaXVzOiAwOyB9XG5cbi5icmVhZGNydW1iLWl0ZW0ge1xuICBkaXNwbGF5OiBmbGV4OyB9XG4gIC5icmVhZGNydW1iLWl0ZW0gKyAuYnJlYWRjcnVtYi1pdGVtIHtcbiAgICBwYWRkaW5nLWxlZnQ6IDAuNXJlbTsgfVxuICAgIC5icmVhZGNydW1iLWl0ZW0gKyAuYnJlYWRjcnVtYi1pdGVtOjpiZWZvcmUge1xuICAgICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICAgICAgcGFkZGluZy1yaWdodDogMC41cmVtO1xuICAgICAgY29sb3I6ICM2Yzc1N2Q7XG4gICAgICBjb250ZW50OiBcIi9cIjsgfVxuICAuYnJlYWRjcnVtYi1pdGVtICsgLmJyZWFkY3J1bWItaXRlbTpob3Zlcjo6YmVmb3JlIHtcbiAgICB0ZXh0LWRlY29yYXRpb246IHVuZGVybGluZTsgfVxuICAuYnJlYWRjcnVtYi1pdGVtICsgLmJyZWFkY3J1bWItaXRlbTpob3Zlcjo6YmVmb3JlIHtcbiAgICB0ZXh0LWRlY29yYXRpb246IG5vbmU7IH1cbiAgLmJyZWFkY3J1bWItaXRlbS5hY3RpdmUge1xuICAgIGNvbG9yOiAjNmM3NTdkOyB9XG5cbi5wYWdpbmF0aW9uIHtcbiAgZGlzcGxheTogZmxleDtcbiAgcGFkZGluZy1sZWZ0OiAwO1xuICBsaXN0LXN0eWxlOiBub25lO1xuICBib3JkZXItcmFkaXVzOiAwOyB9XG5cbi5wYWdlLWxpbmsge1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIGRpc3BsYXk6IGJsb2NrO1xuICBwYWRkaW5nOiAwLjVyZW0gMC43NXJlbTtcbiAgbWFyZ2luLWxlZnQ6IC0xcHg7XG4gIGxpbmUtaGVpZ2h0OiAxLjI1O1xuICBjb2xvcjogIzNGODRGQztcbiAgYmFja2dyb3VuZC1jb2xvcjogI2ZmZjtcbiAgYm9yZGVyOiAxcHggc29saWQgI2RlZTJlNjsgfVxuICAucGFnZS1saW5rOmhvdmVyIHtcbiAgICB6LWluZGV4OiAyO1xuICAgIGNvbG9yOiAjMDQ1OGViO1xuICAgIHRleHQtZGVjb3JhdGlvbjogbm9uZTtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjZTllY2VmO1xuICAgIGJvcmRlci1jb2xvcjogI2RlZTJlNjsgfVxuICAucGFnZS1saW5rOmZvY3VzIHtcbiAgICB6LWluZGV4OiAzO1xuICAgIG91dGxpbmU6IDA7XG4gICAgYm94LXNoYWRvdzogMCAwIDAgMC4ycmVtIHJnYmEoNjMsIDEzMiwgMjUyLCAwLjI1KTsgfVxuXG4ucGFnZS1pdGVtOmZpcnN0LWNoaWxkIC5wYWdlLWxpbmsge1xuICBtYXJnaW4tbGVmdDogMDtcbiAgYm9yZGVyLXRvcC1sZWZ0LXJhZGl1czogMDtcbiAgYm9yZGVyLWJvdHRvbS1sZWZ0LXJhZGl1czogMDsgfVxuXG4ucGFnZS1pdGVtOmxhc3QtY2hpbGQgLnBhZ2UtbGluayB7XG4gIGJvcmRlci10b3AtcmlnaHQtcmFkaXVzOiAwO1xuICBib3JkZXItYm90dG9tLXJpZ2h0LXJhZGl1czogMDsgfVxuXG4ucGFnZS1pdGVtLmFjdGl2ZSAucGFnZS1saW5rIHtcbiAgei1pbmRleDogMztcbiAgY29sb3I6ICNmZmY7XG4gIGJhY2tncm91bmQtY29sb3I6ICMzRjg0RkM7XG4gIGJvcmRlci1jb2xvcjogIzNGODRGQzsgfVxuXG4ucGFnZS1pdGVtLmRpc2FibGVkIC5wYWdlLWxpbmsge1xuICBjb2xvcjogIzZjNzU3ZDtcbiAgcG9pbnRlci1ldmVudHM6IG5vbmU7XG4gIGN1cnNvcjogYXV0bztcbiAgYmFja2dyb3VuZC1jb2xvcjogI2ZmZjtcbiAgYm9yZGVyLWNvbG9yOiAjZGVlMmU2OyB9XG5cbi5wYWdpbmF0aW9uLWxnIC5wYWdlLWxpbmsge1xuICBwYWRkaW5nOiAwLjc1cmVtIDEuNXJlbTtcbiAgZm9udC1zaXplOiAxLjI1cmVtO1xuICBsaW5lLWhlaWdodDogMS41OyB9XG5cbi5wYWdpbmF0aW9uLWxnIC5wYWdlLWl0ZW06Zmlyc3QtY2hpbGQgLnBhZ2UtbGluayB7XG4gIGJvcmRlci10b3AtbGVmdC1yYWRpdXM6IDAuM3JlbTtcbiAgYm9yZGVyLWJvdHRvbS1sZWZ0LXJhZGl1czogMC4zcmVtOyB9XG5cbi5wYWdpbmF0aW9uLWxnIC5wYWdlLWl0ZW06bGFzdC1jaGlsZCAucGFnZS1saW5rIHtcbiAgYm9yZGVyLXRvcC1yaWdodC1yYWRpdXM6IDAuM3JlbTtcbiAgYm9yZGVyLWJvdHRvbS1yaWdodC1yYWRpdXM6IDAuM3JlbTsgfVxuXG4ucGFnaW5hdGlvbi1zbSAucGFnZS1saW5rIHtcbiAgcGFkZGluZzogMC4yNXJlbSAwLjVyZW07XG4gIGZvbnQtc2l6ZTogMC44NzVyZW07XG4gIGxpbmUtaGVpZ2h0OiAxLjU7IH1cblxuLnBhZ2luYXRpb24tc20gLnBhZ2UtaXRlbTpmaXJzdC1jaGlsZCAucGFnZS1saW5rIHtcbiAgYm9yZGVyLXRvcC1sZWZ0LXJhZGl1czogMC4ycmVtO1xuICBib3JkZXItYm90dG9tLWxlZnQtcmFkaXVzOiAwLjJyZW07IH1cblxuLnBhZ2luYXRpb24tc20gLnBhZ2UtaXRlbTpsYXN0LWNoaWxkIC5wYWdlLWxpbmsge1xuICBib3JkZXItdG9wLXJpZ2h0LXJhZGl1czogMC4ycmVtO1xuICBib3JkZXItYm90dG9tLXJpZ2h0LXJhZGl1czogMC4ycmVtOyB9XG5cbi5iYWRnZSB7XG4gIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgcGFkZGluZzogMC4yNWVtIDAuNGVtO1xuICBmb250LXNpemU6IDc1JTtcbiAgZm9udC13ZWlnaHQ6IDcwMDtcbiAgbGluZS1oZWlnaHQ6IDE7XG4gIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgd2hpdGUtc3BhY2U6IG5vd3JhcDtcbiAgdmVydGljYWwtYWxpZ246IGJhc2VsaW5lO1xuICBib3JkZXItcmFkaXVzOiAwO1xuICB0cmFuc2l0aW9uOiBjb2xvciAwLjE1cyBlYXNlLWluLW91dCwgYmFja2dyb3VuZC1jb2xvciAwLjE1cyBlYXNlLWluLW91dCwgYm9yZGVyLWNvbG9yIDAuMTVzIGVhc2UtaW4tb3V0LCBib3gtc2hhZG93IDAuMTVzIGVhc2UtaW4tb3V0OyB9XG4gIEBtZWRpYSAocHJlZmVycy1yZWR1Y2VkLW1vdGlvbjogcmVkdWNlKSB7XG4gICAgLmJhZGdlIHtcbiAgICAgIHRyYW5zaXRpb246IG5vbmU7IH0gfVxuICBhLmJhZGdlOmhvdmVyLCBhLmJhZGdlOmZvY3VzIHtcbiAgICB0ZXh0LWRlY29yYXRpb246IG5vbmU7IH1cbiAgLmJhZGdlOmVtcHR5IHtcbiAgICBkaXNwbGF5OiBub25lOyB9XG5cbi5idG4gLmJhZGdlIHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICB0b3A6IC0xcHg7IH1cblxuLmJhZGdlLXBpbGwge1xuICBwYWRkaW5nLXJpZ2h0OiAwLjZlbTtcbiAgcGFkZGluZy1sZWZ0OiAwLjZlbTtcbiAgYm9yZGVyLXJhZGl1czogMTByZW07IH1cblxuLmJhZGdlLXByaW1hcnkge1xuICBjb2xvcjogI2ZmZjtcbiAgYmFja2dyb3VuZC1jb2xvcjogIzNGODRGQzsgfVxuICBhLmJhZGdlLXByaW1hcnk6aG92ZXIsIGEuYmFkZ2UtcHJpbWFyeTpmb2N1cyB7XG4gICAgY29sb3I6ICNmZmY7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogIzBkNjRmYjsgfVxuICBhLmJhZGdlLXByaW1hcnk6Zm9jdXMsIGEuYmFkZ2UtcHJpbWFyeS5mb2N1cyB7XG4gICAgb3V0bGluZTogMDtcbiAgICBib3gtc2hhZG93OiAwIDAgMCAwLjJyZW0gcmdiYSg2MywgMTMyLCAyNTIsIDAuNSk7IH1cblxuLmJhZGdlLXNlY29uZGFyeSB7XG4gIGNvbG9yOiAjZmZmO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjNzI3Rjk0OyB9XG4gIGEuYmFkZ2Utc2Vjb25kYXJ5OmhvdmVyLCBhLmJhZGdlLXNlY29uZGFyeTpmb2N1cyB7XG4gICAgY29sb3I6ICNmZmY7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogIzViNjY3ODsgfVxuICBhLmJhZGdlLXNlY29uZGFyeTpmb2N1cywgYS5iYWRnZS1zZWNvbmRhcnkuZm9jdXMge1xuICAgIG91dGxpbmU6IDA7XG4gICAgYm94LXNoYWRvdzogMCAwIDAgMC4ycmVtIHJnYmEoMTE0LCAxMjcsIDE0OCwgMC41KTsgfVxuXG4uYmFkZ2Utc3VjY2VzcyB7XG4gIGNvbG9yOiAjZmZmO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjMURBQjQ3OyB9XG4gIGEuYmFkZ2Utc3VjY2Vzczpob3ZlciwgYS5iYWRnZS1zdWNjZXNzOmZvY3VzIHtcbiAgICBjb2xvcjogI2ZmZjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjMTY3ZjM1OyB9XG4gIGEuYmFkZ2Utc3VjY2Vzczpmb2N1cywgYS5iYWRnZS1zdWNjZXNzLmZvY3VzIHtcbiAgICBvdXRsaW5lOiAwO1xuICAgIGJveC1zaGFkb3c6IDAgMCAwIDAuMnJlbSByZ2JhKDI5LCAxNzEsIDcxLCAwLjUpOyB9XG5cbi5iYWRnZS1pbmZvIHtcbiAgY29sb3I6ICNmZmY7XG4gIGJhY2tncm91bmQtY29sb3I6ICM4QTNGRkM7IH1cbiAgYS5iYWRnZS1pbmZvOmhvdmVyLCBhLmJhZGdlLWluZm86Zm9jdXMge1xuICAgIGNvbG9yOiAjZmZmO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICM2YjBkZmI7IH1cbiAgYS5iYWRnZS1pbmZvOmZvY3VzLCBhLmJhZGdlLWluZm8uZm9jdXMge1xuICAgIG91dGxpbmU6IDA7XG4gICAgYm94LXNoYWRvdzogMCAwIDAgMC4ycmVtIHJnYmEoMTM4LCA2MywgMjUyLCAwLjUpOyB9XG5cbi5iYWRnZS13YXJuaW5nIHtcbiAgY29sb3I6ICMyMTI1Mjk7XG4gIGJhY2tncm91bmQtY29sb3I6ICNGQ0FFM0Y7IH1cbiAgYS5iYWRnZS13YXJuaW5nOmhvdmVyLCBhLmJhZGdlLXdhcm5pbmc6Zm9jdXMge1xuICAgIGNvbG9yOiAjMjEyNTI5O1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNmYjk5MGQ7IH1cbiAgYS5iYWRnZS13YXJuaW5nOmZvY3VzLCBhLmJhZGdlLXdhcm5pbmcuZm9jdXMge1xuICAgIG91dGxpbmU6IDA7XG4gICAgYm94LXNoYWRvdzogMCAwIDAgMC4ycmVtIHJnYmEoMjUyLCAxNzQsIDYzLCAwLjUpOyB9XG5cbi5iYWRnZS1kYW5nZXIge1xuICBjb2xvcjogI2ZmZjtcbiAgYmFja2dyb3VuZC1jb2xvcjogI0ZDNDEzRjsgfVxuICBhLmJhZGdlLWRhbmdlcjpob3ZlciwgYS5iYWRnZS1kYW5nZXI6Zm9jdXMge1xuICAgIGNvbG9yOiAjZmZmO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNmYjBmMGQ7IH1cbiAgYS5iYWRnZS1kYW5nZXI6Zm9jdXMsIGEuYmFkZ2UtZGFuZ2VyLmZvY3VzIHtcbiAgICBvdXRsaW5lOiAwO1xuICAgIGJveC1zaGFkb3c6IDAgMCAwIDAuMnJlbSByZ2JhKDI1MiwgNjUsIDYzLCAwLjUpOyB9XG5cbi5iYWRnZS1saWdodCB7XG4gIGNvbG9yOiAjMjEyNTI5O1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZjhmOWZhOyB9XG4gIGEuYmFkZ2UtbGlnaHQ6aG92ZXIsIGEuYmFkZ2UtbGlnaHQ6Zm9jdXMge1xuICAgIGNvbG9yOiAjMjEyNTI5O1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNkYWUwZTU7IH1cbiAgYS5iYWRnZS1saWdodDpmb2N1cywgYS5iYWRnZS1saWdodC5mb2N1cyB7XG4gICAgb3V0bGluZTogMDtcbiAgICBib3gtc2hhZG93OiAwIDAgMCAwLjJyZW0gcmdiYSgyNDgsIDI0OSwgMjUwLCAwLjUpOyB9XG5cbi5iYWRnZS1kYXJrIHtcbiAgY29sb3I6ICNmZmY7XG4gIGJhY2tncm91bmQtY29sb3I6ICMxRTIzMkQ7IH1cbiAgYS5iYWRnZS1kYXJrOmhvdmVyLCBhLmJhZGdlLWRhcms6Zm9jdXMge1xuICAgIGNvbG9yOiAjZmZmO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICMwYTBiMGU7IH1cbiAgYS5iYWRnZS1kYXJrOmZvY3VzLCBhLmJhZGdlLWRhcmsuZm9jdXMge1xuICAgIG91dGxpbmU6IDA7XG4gICAgYm94LXNoYWRvdzogMCAwIDAgMC4ycmVtIHJnYmEoMzAsIDM1LCA0NSwgMC41KTsgfVxuXG4uanVtYm90cm9uIHtcbiAgcGFkZGluZzogMnJlbSAxcmVtO1xuICBtYXJnaW4tYm90dG9tOiAycmVtO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZTllY2VmO1xuICBib3JkZXItcmFkaXVzOiAwLjNyZW07IH1cbiAgQG1lZGlhIChtaW4td2lkdGg6IDU3NnB4KSB7XG4gICAgLmp1bWJvdHJvbiB7XG4gICAgICBwYWRkaW5nOiA0cmVtIDJyZW07IH0gfVxuXG4uanVtYm90cm9uLWZsdWlkIHtcbiAgcGFkZGluZy1yaWdodDogMDtcbiAgcGFkZGluZy1sZWZ0OiAwO1xuICBib3JkZXItcmFkaXVzOiAwOyB9XG5cbi5hbGVydCB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgcGFkZGluZzogMC43NXJlbSAxLjI1cmVtO1xuICBtYXJnaW4tYm90dG9tOiAxcmVtO1xuICBib3JkZXI6IDFweCBzb2xpZCB0cmFuc3BhcmVudDtcbiAgYm9yZGVyLXJhZGl1czogMDsgfVxuXG4uYWxlcnQtaGVhZGluZyB7XG4gIGNvbG9yOiBpbmhlcml0OyB9XG5cbi5hbGVydC1saW5rIHtcbiAgZm9udC13ZWlnaHQ6IDcwMDsgfVxuXG4uYWxlcnQtZGlzbWlzc2libGUge1xuICBwYWRkaW5nLXJpZ2h0OiA0cmVtOyB9XG4gIC5hbGVydC1kaXNtaXNzaWJsZSAuY2xvc2Uge1xuICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICB0b3A6IDA7XG4gICAgcmlnaHQ6IDA7XG4gICAgcGFkZGluZzogMC43NXJlbSAxLjI1cmVtO1xuICAgIGNvbG9yOiBpbmhlcml0OyB9XG5cbi5hbGVydC1wcmltYXJ5IHtcbiAgY29sb3I6ICMyMTQ1ODM7XG4gIGJhY2tncm91bmQtY29sb3I6ICNkOWU2ZmU7XG4gIGJvcmRlci1jb2xvcjogI2M5ZGRmZTsgfVxuICAuYWxlcnQtcHJpbWFyeSBociB7XG4gICAgYm9yZGVyLXRvcC1jb2xvcjogI2IwY2RmZTsgfVxuICAuYWxlcnQtcHJpbWFyeSAuYWxlcnQtbGluayB7XG4gICAgY29sb3I6ICMxNzMwNWE7IH1cblxuLmFsZXJ0LXNlY29uZGFyeSB7XG4gIGNvbG9yOiAjM2I0MjRkO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZTNlNWVhO1xuICBib3JkZXItY29sb3I6ICNkOGRiZTE7IH1cbiAgLmFsZXJ0LXNlY29uZGFyeSBociB7XG4gICAgYm9yZGVyLXRvcC1jb2xvcjogI2NhY2VkNjsgfVxuICAuYWxlcnQtc2Vjb25kYXJ5IC5hbGVydC1saW5rIHtcbiAgICBjb2xvcjogIzI1MjkzMDsgfVxuXG4uYWxlcnQtc3VjY2VzcyB7XG4gIGNvbG9yOiAjMGY1OTI1O1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZDJlZWRhO1xuICBib3JkZXItY29sb3I6ICNjMGU3Y2I7IH1cbiAgLmFsZXJ0LXN1Y2Nlc3MgaHIge1xuICAgIGJvcmRlci10b3AtY29sb3I6ICNhZWUwYmM7IH1cbiAgLmFsZXJ0LXN1Y2Nlc3MgLmFsZXJ0LWxpbmsge1xuICAgIGNvbG9yOiAjMDgyZDEzOyB9XG5cbi5hbGVydC1pbmZvIHtcbiAgY29sb3I6ICM0ODIxODM7XG4gIGJhY2tncm91bmQtY29sb3I6ICNlOGQ5ZmU7XG4gIGJvcmRlci1jb2xvcjogI2RlYzlmZTsgfVxuICAuYWxlcnQtaW5mbyBociB7XG4gICAgYm9yZGVyLXRvcC1jb2xvcjogI2NmYjBmZTsgfVxuICAuYWxlcnQtaW5mbyAuYWxlcnQtbGluayB7XG4gICAgY29sb3I6ICMzMjE3NWE7IH1cblxuLmFsZXJ0LXdhcm5pbmcge1xuICBjb2xvcjogIzgzNWEyMTtcbiAgYmFja2dyb3VuZC1jb2xvcjogI2ZlZWZkOTtcbiAgYm9yZGVyLWNvbG9yOiAjZmVlOGM5OyB9XG4gIC5hbGVydC13YXJuaW5nIGhyIHtcbiAgICBib3JkZXItdG9wLWNvbG9yOiAjZmVkZGIwOyB9XG4gIC5hbGVydC13YXJuaW5nIC5hbGVydC1saW5rIHtcbiAgICBjb2xvcjogIzVhM2UxNzsgfVxuXG4uYWxlcnQtZGFuZ2VyIHtcbiAgY29sb3I6ICM4MzIyMjE7XG4gIGJhY2tncm91bmQtY29sb3I6ICNmZWQ5ZDk7XG4gIGJvcmRlci1jb2xvcjogI2ZlY2FjOTsgfVxuICAuYWxlcnQtZGFuZ2VyIGhyIHtcbiAgICBib3JkZXItdG9wLWNvbG9yOiAjZmViMWIwOyB9XG4gIC5hbGVydC1kYW5nZXIgLmFsZXJ0LWxpbmsge1xuICAgIGNvbG9yOiAjNWExNzE3OyB9XG5cbi5hbGVydC1saWdodCB7XG4gIGNvbG9yOiAjODE4MTgyO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZmVmZWZlO1xuICBib3JkZXItY29sb3I6ICNmZGZkZmU7IH1cbiAgLmFsZXJ0LWxpZ2h0IGhyIHtcbiAgICBib3JkZXItdG9wLWNvbG9yOiAjZWNlY2Y2OyB9XG4gIC5hbGVydC1saWdodCAuYWxlcnQtbGluayB7XG4gICAgY29sb3I6ICM2ODY4Njg7IH1cblxuLmFsZXJ0LWRhcmsge1xuICBjb2xvcjogIzEwMTIxNztcbiAgYmFja2dyb3VuZC1jb2xvcjogI2QyZDNkNTtcbiAgYm9yZGVyLWNvbG9yOiAjYzBjMWM0OyB9XG4gIC5hbGVydC1kYXJrIGhyIHtcbiAgICBib3JkZXItdG9wLWNvbG9yOiAjYjNiNGI4OyB9XG4gIC5hbGVydC1kYXJrIC5hbGVydC1saW5rIHtcbiAgICBjb2xvcjogYmxhY2s7IH1cblxuQGtleWZyYW1lcyBwcm9ncmVzcy1iYXItc3RyaXBlcyB7XG4gIGZyb20ge1xuICAgIGJhY2tncm91bmQtcG9zaXRpb246IDFyZW0gMDsgfVxuICB0byB7XG4gICAgYmFja2dyb3VuZC1wb3NpdGlvbjogMCAwOyB9IH1cblxuLnByb2dyZXNzIHtcbiAgZGlzcGxheTogZmxleDtcbiAgaGVpZ2h0OiAxcmVtO1xuICBvdmVyZmxvdzogaGlkZGVuO1xuICBsaW5lLWhlaWdodDogMDtcbiAgZm9udC1zaXplOiAwLjc1cmVtO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZTllY2VmO1xuICBib3JkZXItcmFkaXVzOiAwOyB9XG5cbi5wcm9ncmVzcy1iYXIge1xuICBkaXNwbGF5OiBmbGV4O1xuICBmbGV4LWRpcmVjdGlvbjogY29sdW1uO1xuICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcbiAgb3ZlcmZsb3c6IGhpZGRlbjtcbiAgY29sb3I6ICNmZmY7XG4gIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgd2hpdGUtc3BhY2U6IG5vd3JhcDtcbiAgYmFja2dyb3VuZC1jb2xvcjogIzNGODRGQztcbiAgdHJhbnNpdGlvbjogd2lkdGggMC42cyBlYXNlOyB9XG4gIEBtZWRpYSAocHJlZmVycy1yZWR1Y2VkLW1vdGlvbjogcmVkdWNlKSB7XG4gICAgLnByb2dyZXNzLWJhciB7XG4gICAgICB0cmFuc2l0aW9uOiBub25lOyB9IH1cblxuLnByb2dyZXNzLWJhci1zdHJpcGVkIHtcbiAgYmFja2dyb3VuZC1pbWFnZTogbGluZWFyLWdyYWRpZW50KDQ1ZGVnLCByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuMTUpIDI1JSwgdHJhbnNwYXJlbnQgMjUlLCB0cmFuc3BhcmVudCA1MCUsIHJnYmEoMjU1LCAyNTUsIDI1NSwgMC4xNSkgNTAlLCByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuMTUpIDc1JSwgdHJhbnNwYXJlbnQgNzUlLCB0cmFuc3BhcmVudCk7XG4gIGJhY2tncm91bmQtc2l6ZTogMXJlbSAxcmVtOyB9XG5cbi5wcm9ncmVzcy1iYXItYW5pbWF0ZWQge1xuICBhbmltYXRpb246IHByb2dyZXNzLWJhci1zdHJpcGVzIDFzIGxpbmVhciBpbmZpbml0ZTsgfVxuICBAbWVkaWEgKHByZWZlcnMtcmVkdWNlZC1tb3Rpb246IHJlZHVjZSkge1xuICAgIC5wcm9ncmVzcy1iYXItYW5pbWF0ZWQge1xuICAgICAgYW5pbWF0aW9uOiBub25lOyB9IH1cblxuLm1lZGlhIHtcbiAgZGlzcGxheTogZmxleDtcbiAgYWxpZ24taXRlbXM6IGZsZXgtc3RhcnQ7IH1cblxuLm1lZGlhLWJvZHkge1xuICBmbGV4OiAxOyB9XG5cbi5saXN0LWdyb3VwIHtcbiAgZGlzcGxheTogZmxleDtcbiAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcbiAgcGFkZGluZy1sZWZ0OiAwO1xuICBtYXJnaW4tYm90dG9tOiAwO1xuICBib3JkZXItcmFkaXVzOiAwOyB9XG5cbi5saXN0LWdyb3VwLWl0ZW0tYWN0aW9uIHtcbiAgd2lkdGg6IDEwMCU7XG4gIGNvbG9yOiAjNDk1MDU3O1xuICB0ZXh0LWFsaWduOiBpbmhlcml0OyB9XG4gIC5saXN0LWdyb3VwLWl0ZW0tYWN0aW9uOmhvdmVyLCAubGlzdC1ncm91cC1pdGVtLWFjdGlvbjpmb2N1cyB7XG4gICAgei1pbmRleDogMTtcbiAgICBjb2xvcjogIzQ5NTA1NztcbiAgICB0ZXh0LWRlY29yYXRpb246IG5vbmU7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI2Y4ZjlmYTsgfVxuICAubGlzdC1ncm91cC1pdGVtLWFjdGlvbjphY3RpdmUge1xuICAgIGNvbG9yOiAjNTE1MTUxO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNlOWVjZWY7IH1cblxuLmxpc3QtZ3JvdXAtaXRlbSB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgZGlzcGxheTogYmxvY2s7XG4gIHBhZGRpbmc6IDAuNzVyZW0gMS4yNXJlbTtcbiAgYmFja2dyb3VuZC1jb2xvcjogI2ZmZjtcbiAgYm9yZGVyOiAxcHggc29saWQgcmdiYSgwLCAwLCAwLCAwLjEyNSk7IH1cbiAgLmxpc3QtZ3JvdXAtaXRlbTpmaXJzdC1jaGlsZCB7XG4gICAgYm9yZGVyLXRvcC1sZWZ0LXJhZGl1czogaW5oZXJpdDtcbiAgICBib3JkZXItdG9wLXJpZ2h0LXJhZGl1czogaW5oZXJpdDsgfVxuICAubGlzdC1ncm91cC1pdGVtOmxhc3QtY2hpbGQge1xuICAgIGJvcmRlci1ib3R0b20tcmlnaHQtcmFkaXVzOiBpbmhlcml0O1xuICAgIGJvcmRlci1ib3R0b20tbGVmdC1yYWRpdXM6IGluaGVyaXQ7IH1cbiAgLmxpc3QtZ3JvdXAtaXRlbS5kaXNhYmxlZCwgLmxpc3QtZ3JvdXAtaXRlbTpkaXNhYmxlZCB7XG4gICAgY29sb3I6ICM2Yzc1N2Q7XG4gICAgcG9pbnRlci1ldmVudHM6IG5vbmU7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI2ZmZjsgfVxuICAubGlzdC1ncm91cC1pdGVtLmFjdGl2ZSB7XG4gICAgei1pbmRleDogMjtcbiAgICBjb2xvcjogI2ZmZjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjM0Y4NEZDO1xuICAgIGJvcmRlci1jb2xvcjogIzNGODRGQzsgfVxuICAubGlzdC1ncm91cC1pdGVtICsgLmxpc3QtZ3JvdXAtaXRlbSB7XG4gICAgYm9yZGVyLXRvcC13aWR0aDogMDsgfVxuICAgIC5saXN0LWdyb3VwLWl0ZW0gKyAubGlzdC1ncm91cC1pdGVtLmFjdGl2ZSB7XG4gICAgICBtYXJnaW4tdG9wOiAtMXB4O1xuICAgICAgYm9yZGVyLXRvcC13aWR0aDogMXB4OyB9XG5cbi5saXN0LWdyb3VwLWhvcml6b250YWwge1xuICBmbGV4LWRpcmVjdGlvbjogcm93OyB9XG4gIC5saXN0LWdyb3VwLWhvcml6b250YWwgPiAubGlzdC1ncm91cC1pdGVtOmZpcnN0LWNoaWxkIHtcbiAgICBib3JkZXItYm90dG9tLWxlZnQtcmFkaXVzOiAwO1xuICAgIGJvcmRlci10b3AtcmlnaHQtcmFkaXVzOiAwOyB9XG4gIC5saXN0LWdyb3VwLWhvcml6b250YWwgPiAubGlzdC1ncm91cC1pdGVtOmxhc3QtY2hpbGQge1xuICAgIGJvcmRlci10b3AtcmlnaHQtcmFkaXVzOiAwO1xuICAgIGJvcmRlci1ib3R0b20tbGVmdC1yYWRpdXM6IDA7IH1cbiAgLmxpc3QtZ3JvdXAtaG9yaXpvbnRhbCA+IC5saXN0LWdyb3VwLWl0ZW0uYWN0aXZlIHtcbiAgICBtYXJnaW4tdG9wOiAwOyB9XG4gIC5saXN0LWdyb3VwLWhvcml6b250YWwgPiAubGlzdC1ncm91cC1pdGVtICsgLmxpc3QtZ3JvdXAtaXRlbSB7XG4gICAgYm9yZGVyLXRvcC13aWR0aDogMXB4O1xuICAgIGJvcmRlci1sZWZ0LXdpZHRoOiAwOyB9XG4gICAgLmxpc3QtZ3JvdXAtaG9yaXpvbnRhbCA+IC5saXN0LWdyb3VwLWl0ZW0gKyAubGlzdC1ncm91cC1pdGVtLmFjdGl2ZSB7XG4gICAgICBtYXJnaW4tbGVmdDogLTFweDtcbiAgICAgIGJvcmRlci1sZWZ0LXdpZHRoOiAxcHg7IH1cblxuQG1lZGlhIChtaW4td2lkdGg6IDU3NnB4KSB7XG4gIC5saXN0LWdyb3VwLWhvcml6b250YWwtc20ge1xuICAgIGZsZXgtZGlyZWN0aW9uOiByb3c7IH1cbiAgICAubGlzdC1ncm91cC1ob3Jpem9udGFsLXNtID4gLmxpc3QtZ3JvdXAtaXRlbTpmaXJzdC1jaGlsZCB7XG4gICAgICBib3JkZXItYm90dG9tLWxlZnQtcmFkaXVzOiAwO1xuICAgICAgYm9yZGVyLXRvcC1yaWdodC1yYWRpdXM6IDA7IH1cbiAgICAubGlzdC1ncm91cC1ob3Jpem9udGFsLXNtID4gLmxpc3QtZ3JvdXAtaXRlbTpsYXN0LWNoaWxkIHtcbiAgICAgIGJvcmRlci10b3AtcmlnaHQtcmFkaXVzOiAwO1xuICAgICAgYm9yZGVyLWJvdHRvbS1sZWZ0LXJhZGl1czogMDsgfVxuICAgIC5saXN0LWdyb3VwLWhvcml6b250YWwtc20gPiAubGlzdC1ncm91cC1pdGVtLmFjdGl2ZSB7XG4gICAgICBtYXJnaW4tdG9wOiAwOyB9XG4gICAgLmxpc3QtZ3JvdXAtaG9yaXpvbnRhbC1zbSA+IC5saXN0LWdyb3VwLWl0ZW0gKyAubGlzdC1ncm91cC1pdGVtIHtcbiAgICAgIGJvcmRlci10b3Atd2lkdGg6IDFweDtcbiAgICAgIGJvcmRlci1sZWZ0LXdpZHRoOiAwOyB9XG4gICAgICAubGlzdC1ncm91cC1ob3Jpem9udGFsLXNtID4gLmxpc3QtZ3JvdXAtaXRlbSArIC5saXN0LWdyb3VwLWl0ZW0uYWN0aXZlIHtcbiAgICAgICAgbWFyZ2luLWxlZnQ6IC0xcHg7XG4gICAgICAgIGJvcmRlci1sZWZ0LXdpZHRoOiAxcHg7IH0gfVxuXG5AbWVkaWEgKG1pbi13aWR0aDogNzY4cHgpIHtcbiAgLmxpc3QtZ3JvdXAtaG9yaXpvbnRhbC1tZCB7XG4gICAgZmxleC1kaXJlY3Rpb246IHJvdzsgfVxuICAgIC5saXN0LWdyb3VwLWhvcml6b250YWwtbWQgPiAubGlzdC1ncm91cC1pdGVtOmZpcnN0LWNoaWxkIHtcbiAgICAgIGJvcmRlci1ib3R0b20tbGVmdC1yYWRpdXM6IDA7XG4gICAgICBib3JkZXItdG9wLXJpZ2h0LXJhZGl1czogMDsgfVxuICAgIC5saXN0LWdyb3VwLWhvcml6b250YWwtbWQgPiAubGlzdC1ncm91cC1pdGVtOmxhc3QtY2hpbGQge1xuICAgICAgYm9yZGVyLXRvcC1yaWdodC1yYWRpdXM6IDA7XG4gICAgICBib3JkZXItYm90dG9tLWxlZnQtcmFkaXVzOiAwOyB9XG4gICAgLmxpc3QtZ3JvdXAtaG9yaXpvbnRhbC1tZCA+IC5saXN0LWdyb3VwLWl0ZW0uYWN0aXZlIHtcbiAgICAgIG1hcmdpbi10b3A6IDA7IH1cbiAgICAubGlzdC1ncm91cC1ob3Jpem9udGFsLW1kID4gLmxpc3QtZ3JvdXAtaXRlbSArIC5saXN0LWdyb3VwLWl0ZW0ge1xuICAgICAgYm9yZGVyLXRvcC13aWR0aDogMXB4O1xuICAgICAgYm9yZGVyLWxlZnQtd2lkdGg6IDA7IH1cbiAgICAgIC5saXN0LWdyb3VwLWhvcml6b250YWwtbWQgPiAubGlzdC1ncm91cC1pdGVtICsgLmxpc3QtZ3JvdXAtaXRlbS5hY3RpdmUge1xuICAgICAgICBtYXJnaW4tbGVmdDogLTFweDtcbiAgICAgICAgYm9yZGVyLWxlZnQtd2lkdGg6IDFweDsgfSB9XG5cbkBtZWRpYSAobWluLXdpZHRoOiA5OTJweCkge1xuICAubGlzdC1ncm91cC1ob3Jpem9udGFsLWxnIHtcbiAgICBmbGV4LWRpcmVjdGlvbjogcm93OyB9XG4gICAgLmxpc3QtZ3JvdXAtaG9yaXpvbnRhbC1sZyA+IC5saXN0LWdyb3VwLWl0ZW06Zmlyc3QtY2hpbGQge1xuICAgICAgYm9yZGVyLWJvdHRvbS1sZWZ0LXJhZGl1czogMDtcbiAgICAgIGJvcmRlci10b3AtcmlnaHQtcmFkaXVzOiAwOyB9XG4gICAgLmxpc3QtZ3JvdXAtaG9yaXpvbnRhbC1sZyA+IC5saXN0LWdyb3VwLWl0ZW06bGFzdC1jaGlsZCB7XG4gICAgICBib3JkZXItdG9wLXJpZ2h0LXJhZGl1czogMDtcbiAgICAgIGJvcmRlci1ib3R0b20tbGVmdC1yYWRpdXM6IDA7IH1cbiAgICAubGlzdC1ncm91cC1ob3Jpem9udGFsLWxnID4gLmxpc3QtZ3JvdXAtaXRlbS5hY3RpdmUge1xuICAgICAgbWFyZ2luLXRvcDogMDsgfVxuICAgIC5saXN0LWdyb3VwLWhvcml6b250YWwtbGcgPiAubGlzdC1ncm91cC1pdGVtICsgLmxpc3QtZ3JvdXAtaXRlbSB7XG4gICAgICBib3JkZXItdG9wLXdpZHRoOiAxcHg7XG4gICAgICBib3JkZXItbGVmdC13aWR0aDogMDsgfVxuICAgICAgLmxpc3QtZ3JvdXAtaG9yaXpvbnRhbC1sZyA+IC5saXN0LWdyb3VwLWl0ZW0gKyAubGlzdC1ncm91cC1pdGVtLmFjdGl2ZSB7XG4gICAgICAgIG1hcmdpbi1sZWZ0OiAtMXB4O1xuICAgICAgICBib3JkZXItbGVmdC13aWR0aDogMXB4OyB9IH1cblxuQG1lZGlhIChtaW4td2lkdGg6IDEyMDBweCkge1xuICAubGlzdC1ncm91cC1ob3Jpem9udGFsLXhsIHtcbiAgICBmbGV4LWRpcmVjdGlvbjogcm93OyB9XG4gICAgLmxpc3QtZ3JvdXAtaG9yaXpvbnRhbC14bCA+IC5saXN0LWdyb3VwLWl0ZW06Zmlyc3QtY2hpbGQge1xuICAgICAgYm9yZGVyLWJvdHRvbS1sZWZ0LXJhZGl1czogMDtcbiAgICAgIGJvcmRlci10b3AtcmlnaHQtcmFkaXVzOiAwOyB9XG4gICAgLmxpc3QtZ3JvdXAtaG9yaXpvbnRhbC14bCA+IC5saXN0LWdyb3VwLWl0ZW06bGFzdC1jaGlsZCB7XG4gICAgICBib3JkZXItdG9wLXJpZ2h0LXJhZGl1czogMDtcbiAgICAgIGJvcmRlci1ib3R0b20tbGVmdC1yYWRpdXM6IDA7IH1cbiAgICAubGlzdC1ncm91cC1ob3Jpem9udGFsLXhsID4gLmxpc3QtZ3JvdXAtaXRlbS5hY3RpdmUge1xuICAgICAgbWFyZ2luLXRvcDogMDsgfVxuICAgIC5saXN0LWdyb3VwLWhvcml6b250YWwteGwgPiAubGlzdC1ncm91cC1pdGVtICsgLmxpc3QtZ3JvdXAtaXRlbSB7XG4gICAgICBib3JkZXItdG9wLXdpZHRoOiAxcHg7XG4gICAgICBib3JkZXItbGVmdC13aWR0aDogMDsgfVxuICAgICAgLmxpc3QtZ3JvdXAtaG9yaXpvbnRhbC14bCA+IC5saXN0LWdyb3VwLWl0ZW0gKyAubGlzdC1ncm91cC1pdGVtLmFjdGl2ZSB7XG4gICAgICAgIG1hcmdpbi1sZWZ0OiAtMXB4O1xuICAgICAgICBib3JkZXItbGVmdC13aWR0aDogMXB4OyB9IH1cblxuLmxpc3QtZ3JvdXAtZmx1c2gge1xuICBib3JkZXItcmFkaXVzOiAwOyB9XG4gIC5saXN0LWdyb3VwLWZsdXNoID4gLmxpc3QtZ3JvdXAtaXRlbSB7XG4gICAgYm9yZGVyLXdpZHRoOiAwIDAgMXB4OyB9XG4gICAgLmxpc3QtZ3JvdXAtZmx1c2ggPiAubGlzdC1ncm91cC1pdGVtOmxhc3QtY2hpbGQge1xuICAgICAgYm9yZGVyLWJvdHRvbS13aWR0aDogMDsgfVxuXG4ubGlzdC1ncm91cC1pdGVtLXByaW1hcnkge1xuICBjb2xvcjogIzIxNDU4MztcbiAgYmFja2dyb3VuZC1jb2xvcjogI2M5ZGRmZTsgfVxuICAubGlzdC1ncm91cC1pdGVtLXByaW1hcnkubGlzdC1ncm91cC1pdGVtLWFjdGlvbjpob3ZlciwgLmxpc3QtZ3JvdXAtaXRlbS1wcmltYXJ5Lmxpc3QtZ3JvdXAtaXRlbS1hY3Rpb246Zm9jdXMge1xuICAgIGNvbG9yOiAjMjE0NTgzO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNiMGNkZmU7IH1cbiAgLmxpc3QtZ3JvdXAtaXRlbS1wcmltYXJ5Lmxpc3QtZ3JvdXAtaXRlbS1hY3Rpb24uYWN0aXZlIHtcbiAgICBjb2xvcjogI2ZmZjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjMjE0NTgzO1xuICAgIGJvcmRlci1jb2xvcjogIzIxNDU4MzsgfVxuXG4ubGlzdC1ncm91cC1pdGVtLXNlY29uZGFyeSB7XG4gIGNvbG9yOiAjM2I0MjRkO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZDhkYmUxOyB9XG4gIC5saXN0LWdyb3VwLWl0ZW0tc2Vjb25kYXJ5Lmxpc3QtZ3JvdXAtaXRlbS1hY3Rpb246aG92ZXIsIC5saXN0LWdyb3VwLWl0ZW0tc2Vjb25kYXJ5Lmxpc3QtZ3JvdXAtaXRlbS1hY3Rpb246Zm9jdXMge1xuICAgIGNvbG9yOiAjM2I0MjRkO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNjYWNlZDY7IH1cbiAgLmxpc3QtZ3JvdXAtaXRlbS1zZWNvbmRhcnkubGlzdC1ncm91cC1pdGVtLWFjdGlvbi5hY3RpdmUge1xuICAgIGNvbG9yOiAjZmZmO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICMzYjQyNGQ7XG4gICAgYm9yZGVyLWNvbG9yOiAjM2I0MjRkOyB9XG5cbi5saXN0LWdyb3VwLWl0ZW0tc3VjY2VzcyB7XG4gIGNvbG9yOiAjMGY1OTI1O1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjYzBlN2NiOyB9XG4gIC5saXN0LWdyb3VwLWl0ZW0tc3VjY2Vzcy5saXN0LWdyb3VwLWl0ZW0tYWN0aW9uOmhvdmVyLCAubGlzdC1ncm91cC1pdGVtLXN1Y2Nlc3MubGlzdC1ncm91cC1pdGVtLWFjdGlvbjpmb2N1cyB7XG4gICAgY29sb3I6ICMwZjU5MjU7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI2FlZTBiYzsgfVxuICAubGlzdC1ncm91cC1pdGVtLXN1Y2Nlc3MubGlzdC1ncm91cC1pdGVtLWFjdGlvbi5hY3RpdmUge1xuICAgIGNvbG9yOiAjZmZmO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICMwZjU5MjU7XG4gICAgYm9yZGVyLWNvbG9yOiAjMGY1OTI1OyB9XG5cbi5saXN0LWdyb3VwLWl0ZW0taW5mbyB7XG4gIGNvbG9yOiAjNDgyMTgzO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZGVjOWZlOyB9XG4gIC5saXN0LWdyb3VwLWl0ZW0taW5mby5saXN0LWdyb3VwLWl0ZW0tYWN0aW9uOmhvdmVyLCAubGlzdC1ncm91cC1pdGVtLWluZm8ubGlzdC1ncm91cC1pdGVtLWFjdGlvbjpmb2N1cyB7XG4gICAgY29sb3I6ICM0ODIxODM7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI2NmYjBmZTsgfVxuICAubGlzdC1ncm91cC1pdGVtLWluZm8ubGlzdC1ncm91cC1pdGVtLWFjdGlvbi5hY3RpdmUge1xuICAgIGNvbG9yOiAjZmZmO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICM0ODIxODM7XG4gICAgYm9yZGVyLWNvbG9yOiAjNDgyMTgzOyB9XG5cbi5saXN0LWdyb3VwLWl0ZW0td2FybmluZyB7XG4gIGNvbG9yOiAjODM1YTIxO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZmVlOGM5OyB9XG4gIC5saXN0LWdyb3VwLWl0ZW0td2FybmluZy5saXN0LWdyb3VwLWl0ZW0tYWN0aW9uOmhvdmVyLCAubGlzdC1ncm91cC1pdGVtLXdhcm5pbmcubGlzdC1ncm91cC1pdGVtLWFjdGlvbjpmb2N1cyB7XG4gICAgY29sb3I6ICM4MzVhMjE7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI2ZlZGRiMDsgfVxuICAubGlzdC1ncm91cC1pdGVtLXdhcm5pbmcubGlzdC1ncm91cC1pdGVtLWFjdGlvbi5hY3RpdmUge1xuICAgIGNvbG9yOiAjZmZmO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICM4MzVhMjE7XG4gICAgYm9yZGVyLWNvbG9yOiAjODM1YTIxOyB9XG5cbi5saXN0LWdyb3VwLWl0ZW0tZGFuZ2VyIHtcbiAgY29sb3I6ICM4MzIyMjE7XG4gIGJhY2tncm91bmQtY29sb3I6ICNmZWNhYzk7IH1cbiAgLmxpc3QtZ3JvdXAtaXRlbS1kYW5nZXIubGlzdC1ncm91cC1pdGVtLWFjdGlvbjpob3ZlciwgLmxpc3QtZ3JvdXAtaXRlbS1kYW5nZXIubGlzdC1ncm91cC1pdGVtLWFjdGlvbjpmb2N1cyB7XG4gICAgY29sb3I6ICM4MzIyMjE7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI2ZlYjFiMDsgfVxuICAubGlzdC1ncm91cC1pdGVtLWRhbmdlci5saXN0LWdyb3VwLWl0ZW0tYWN0aW9uLmFjdGl2ZSB7XG4gICAgY29sb3I6ICNmZmY7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogIzgzMjIyMTtcbiAgICBib3JkZXItY29sb3I6ICM4MzIyMjE7IH1cblxuLmxpc3QtZ3JvdXAtaXRlbS1saWdodCB7XG4gIGNvbG9yOiAjODE4MTgyO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZmRmZGZlOyB9XG4gIC5saXN0LWdyb3VwLWl0ZW0tbGlnaHQubGlzdC1ncm91cC1pdGVtLWFjdGlvbjpob3ZlciwgLmxpc3QtZ3JvdXAtaXRlbS1saWdodC5saXN0LWdyb3VwLWl0ZW0tYWN0aW9uOmZvY3VzIHtcbiAgICBjb2xvcjogIzgxODE4MjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjZWNlY2Y2OyB9XG4gIC5saXN0LWdyb3VwLWl0ZW0tbGlnaHQubGlzdC1ncm91cC1pdGVtLWFjdGlvbi5hY3RpdmUge1xuICAgIGNvbG9yOiAjZmZmO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICM4MTgxODI7XG4gICAgYm9yZGVyLWNvbG9yOiAjODE4MTgyOyB9XG5cbi5saXN0LWdyb3VwLWl0ZW0tZGFyayB7XG4gIGNvbG9yOiAjMTAxMjE3O1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjYzBjMWM0OyB9XG4gIC5saXN0LWdyb3VwLWl0ZW0tZGFyay5saXN0LWdyb3VwLWl0ZW0tYWN0aW9uOmhvdmVyLCAubGlzdC1ncm91cC1pdGVtLWRhcmsubGlzdC1ncm91cC1pdGVtLWFjdGlvbjpmb2N1cyB7XG4gICAgY29sb3I6ICMxMDEyMTc7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI2IzYjRiODsgfVxuICAubGlzdC1ncm91cC1pdGVtLWRhcmsubGlzdC1ncm91cC1pdGVtLWFjdGlvbi5hY3RpdmUge1xuICAgIGNvbG9yOiAjZmZmO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICMxMDEyMTc7XG4gICAgYm9yZGVyLWNvbG9yOiAjMTAxMjE3OyB9XG5cbi5jbG9zZSB7XG4gIGZsb2F0OiByaWdodDtcbiAgZm9udC1zaXplOiAxLjVyZW07XG4gIGZvbnQtd2VpZ2h0OiA3MDA7XG4gIGxpbmUtaGVpZ2h0OiAxO1xuICBjb2xvcjogIzAwMDtcbiAgdGV4dC1zaGFkb3c6IDAgMXB4IDAgI2ZmZjtcbiAgb3BhY2l0eTogLjU7IH1cbiAgLmNsb3NlOmhvdmVyIHtcbiAgICBjb2xvcjogIzAwMDtcbiAgICB0ZXh0LWRlY29yYXRpb246IG5vbmU7IH1cbiAgLmNsb3NlOm5vdCg6ZGlzYWJsZWQpOm5vdCguZGlzYWJsZWQpOmhvdmVyLCAuY2xvc2U6bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCk6Zm9jdXMge1xuICAgIG9wYWNpdHk6IC43NTsgfVxuXG5idXR0b24uY2xvc2Uge1xuICBwYWRkaW5nOiAwO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiB0cmFuc3BhcmVudDtcbiAgYm9yZGVyOiAwOyB9XG5cbmEuY2xvc2UuZGlzYWJsZWQge1xuICBwb2ludGVyLWV2ZW50czogbm9uZTsgfVxuXG4udG9hc3Qge1xuICBtYXgtd2lkdGg6IDM1MHB4O1xuICBvdmVyZmxvdzogaGlkZGVuO1xuICBmb250LXNpemU6IDAuODc1cmVtO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuODUpO1xuICBiYWNrZ3JvdW5kLWNsaXA6IHBhZGRpbmctYm94O1xuICBib3JkZXI6IDFweCBzb2xpZCByZ2JhKDAsIDAsIDAsIDAuMSk7XG4gIGJveC1zaGFkb3c6IDAgMC4yNXJlbSAwLjc1cmVtIHJnYmEoMCwgMCwgMCwgMC4xKTtcbiAgYmFja2Ryb3AtZmlsdGVyOiBibHVyKDEwcHgpO1xuICBvcGFjaXR5OiAwO1xuICBib3JkZXItcmFkaXVzOiAwLjI1cmVtOyB9XG4gIC50b2FzdDpub3QoOmxhc3QtY2hpbGQpIHtcbiAgICBtYXJnaW4tYm90dG9tOiAwLjc1cmVtOyB9XG4gIC50b2FzdC5zaG93aW5nIHtcbiAgICBvcGFjaXR5OiAxOyB9XG4gIC50b2FzdC5zaG93IHtcbiAgICBkaXNwbGF5OiBibG9jaztcbiAgICBvcGFjaXR5OiAxOyB9XG4gIC50b2FzdC5oaWRlIHtcbiAgICBkaXNwbGF5OiBub25lOyB9XG5cbi50b2FzdC1oZWFkZXIge1xuICBkaXNwbGF5OiBmbGV4O1xuICBhbGlnbi1pdGVtczogY2VudGVyO1xuICBwYWRkaW5nOiAwLjI1cmVtIDAuNzVyZW07XG4gIGNvbG9yOiAjNmM3NTdkO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuODUpO1xuICBiYWNrZ3JvdW5kLWNsaXA6IHBhZGRpbmctYm94O1xuICBib3JkZXItYm90dG9tOiAxcHggc29saWQgcmdiYSgwLCAwLCAwLCAwLjA1KTsgfVxuXG4udG9hc3QtYm9keSB7XG4gIHBhZGRpbmc6IDAuNzVyZW07IH1cblxuLm1vZGFsLW9wZW4ge1xuICBvdmVyZmxvdzogaGlkZGVuOyB9XG4gIC5tb2RhbC1vcGVuIC5tb2RhbCB7XG4gICAgb3ZlcmZsb3cteDogaGlkZGVuO1xuICAgIG92ZXJmbG93LXk6IGF1dG87IH1cblxuLm1vZGFsIHtcbiAgcG9zaXRpb246IGZpeGVkO1xuICB0b3A6IDA7XG4gIGxlZnQ6IDA7XG4gIHotaW5kZXg6IDEwNTA7XG4gIGRpc3BsYXk6IG5vbmU7XG4gIHdpZHRoOiAxMDAlO1xuICBoZWlnaHQ6IDEwMCU7XG4gIG92ZXJmbG93OiBoaWRkZW47XG4gIG91dGxpbmU6IDA7IH1cblxuLm1vZGFsLWRpYWxvZyB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgd2lkdGg6IGF1dG87XG4gIG1hcmdpbjogMC41cmVtO1xuICBwb2ludGVyLWV2ZW50czogbm9uZTsgfVxuICAubW9kYWwuZmFkZSAubW9kYWwtZGlhbG9nIHtcbiAgICB0cmFuc2l0aW9uOiB0cmFuc2Zvcm0gMC4zcyBlYXNlLW91dDtcbiAgICB0cmFuc2Zvcm06IHRyYW5zbGF0ZSgwLCAtNTBweCk7IH1cbiAgICBAbWVkaWEgKHByZWZlcnMtcmVkdWNlZC1tb3Rpb246IHJlZHVjZSkge1xuICAgICAgLm1vZGFsLmZhZGUgLm1vZGFsLWRpYWxvZyB7XG4gICAgICAgIHRyYW5zaXRpb246IG5vbmU7IH0gfVxuICAubW9kYWwuc2hvdyAubW9kYWwtZGlhbG9nIHtcbiAgICB0cmFuc2Zvcm06IG5vbmU7IH1cbiAgLm1vZGFsLm1vZGFsLXN0YXRpYyAubW9kYWwtZGlhbG9nIHtcbiAgICB0cmFuc2Zvcm06IHNjYWxlKDEuMDIpOyB9XG5cbi5tb2RhbC1kaWFsb2ctc2Nyb2xsYWJsZSB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIG1heC1oZWlnaHQ6IGNhbGMoMTAwJSAtIDFyZW0pOyB9XG4gIC5tb2RhbC1kaWFsb2ctc2Nyb2xsYWJsZSAubW9kYWwtY29udGVudCB7XG4gICAgbWF4LWhlaWdodDogY2FsYygxMDB2aCAtIDFyZW0pO1xuICAgIG92ZXJmbG93OiBoaWRkZW47IH1cbiAgLm1vZGFsLWRpYWxvZy1zY3JvbGxhYmxlIC5tb2RhbC1oZWFkZXIsXG4gIC5tb2RhbC1kaWFsb2ctc2Nyb2xsYWJsZSAubW9kYWwtZm9vdGVyIHtcbiAgICBmbGV4LXNocmluazogMDsgfVxuICAubW9kYWwtZGlhbG9nLXNjcm9sbGFibGUgLm1vZGFsLWJvZHkge1xuICAgIG92ZXJmbG93LXk6IGF1dG87IH1cblxuLm1vZGFsLWRpYWxvZy1jZW50ZXJlZCB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gIG1pbi1oZWlnaHQ6IGNhbGMoMTAwJSAtIDFyZW0pOyB9XG4gIC5tb2RhbC1kaWFsb2ctY2VudGVyZWQ6OmJlZm9yZSB7XG4gICAgZGlzcGxheTogYmxvY2s7XG4gICAgaGVpZ2h0OiBjYWxjKDEwMHZoIC0gMXJlbSk7XG4gICAgaGVpZ2h0OiBtaW4tY29udGVudDtcbiAgICBjb250ZW50OiBcIlwiOyB9XG4gIC5tb2RhbC1kaWFsb2ctY2VudGVyZWQubW9kYWwtZGlhbG9nLXNjcm9sbGFibGUge1xuICAgIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gICAganVzdGlmeS1jb250ZW50OiBjZW50ZXI7XG4gICAgaGVpZ2h0OiAxMDAlOyB9XG4gICAgLm1vZGFsLWRpYWxvZy1jZW50ZXJlZC5tb2RhbC1kaWFsb2ctc2Nyb2xsYWJsZSAubW9kYWwtY29udGVudCB7XG4gICAgICBtYXgtaGVpZ2h0OiBub25lOyB9XG4gICAgLm1vZGFsLWRpYWxvZy1jZW50ZXJlZC5tb2RhbC1kaWFsb2ctc2Nyb2xsYWJsZTo6YmVmb3JlIHtcbiAgICAgIGNvbnRlbnQ6IG5vbmU7IH1cblxuLm1vZGFsLWNvbnRlbnQge1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gIHdpZHRoOiAxMDAlO1xuICBwb2ludGVyLWV2ZW50czogYXV0bztcbiAgYmFja2dyb3VuZC1jb2xvcjogI2ZmZjtcbiAgYmFja2dyb3VuZC1jbGlwOiBwYWRkaW5nLWJveDtcbiAgYm9yZGVyOiAxcHggc29saWQgcmdiYSgwLCAwLCAwLCAwLjIpO1xuICBib3JkZXItcmFkaXVzOiAwLjNyZW07XG4gIG91dGxpbmU6IDA7IH1cblxuLm1vZGFsLWJhY2tkcm9wIHtcbiAgcG9zaXRpb246IGZpeGVkO1xuICB0b3A6IDA7XG4gIGxlZnQ6IDA7XG4gIHotaW5kZXg6IDEwNDA7XG4gIHdpZHRoOiAxMDB2dztcbiAgaGVpZ2h0OiAxMDB2aDtcbiAgYmFja2dyb3VuZC1jb2xvcjogIzAwMDsgfVxuICAubW9kYWwtYmFja2Ryb3AuZmFkZSB7XG4gICAgb3BhY2l0eTogMDsgfVxuICAubW9kYWwtYmFja2Ryb3Auc2hvdyB7XG4gICAgb3BhY2l0eTogMC41OyB9XG5cbi5tb2RhbC1oZWFkZXIge1xuICBkaXNwbGF5OiBmbGV4O1xuICBhbGlnbi1pdGVtczogZmxleC1zdGFydDtcbiAganVzdGlmeS1jb250ZW50OiBzcGFjZS1iZXR3ZWVuO1xuICBwYWRkaW5nOiAxcmVtIDFyZW07XG4gIGJvcmRlci1ib3R0b206IDFweCBzb2xpZCAjZGVlMmU2O1xuICBib3JkZXItdG9wLWxlZnQtcmFkaXVzOiBjYWxjKDAuM3JlbSAtIDFweCk7XG4gIGJvcmRlci10b3AtcmlnaHQtcmFkaXVzOiBjYWxjKDAuM3JlbSAtIDFweCk7IH1cbiAgLm1vZGFsLWhlYWRlciAuY2xvc2Uge1xuICAgIHBhZGRpbmc6IDFyZW0gMXJlbTtcbiAgICBtYXJnaW46IC0xcmVtIC0xcmVtIC0xcmVtIGF1dG87IH1cblxuLm1vZGFsLXRpdGxlIHtcbiAgbWFyZ2luLWJvdHRvbTogMDtcbiAgbGluZS1oZWlnaHQ6IDEuNTsgfVxuXG4ubW9kYWwtYm9keSB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgZmxleDogMSAxIGF1dG87XG4gIHBhZGRpbmc6IDFyZW07IH1cblxuLm1vZGFsLWZvb3RlciB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGZsZXgtd3JhcDogd3JhcDtcbiAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAganVzdGlmeS1jb250ZW50OiBmbGV4LWVuZDtcbiAgcGFkZGluZzogMC43NXJlbTtcbiAgYm9yZGVyLXRvcDogMXB4IHNvbGlkICNkZWUyZTY7XG4gIGJvcmRlci1ib3R0b20tcmlnaHQtcmFkaXVzOiBjYWxjKDAuM3JlbSAtIDFweCk7XG4gIGJvcmRlci1ib3R0b20tbGVmdC1yYWRpdXM6IGNhbGMoMC4zcmVtIC0gMXB4KTsgfVxuICAubW9kYWwtZm9vdGVyID4gKiB7XG4gICAgbWFyZ2luOiAwLjI1cmVtOyB9XG5cbi5tb2RhbC1zY3JvbGxiYXItbWVhc3VyZSB7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgdG9wOiAtOTk5OXB4O1xuICB3aWR0aDogNTBweDtcbiAgaGVpZ2h0OiA1MHB4O1xuICBvdmVyZmxvdzogc2Nyb2xsOyB9XG5cbkBtZWRpYSAobWluLXdpZHRoOiA1NzZweCkge1xuICAubW9kYWwtZGlhbG9nIHtcbiAgICBtYXgtd2lkdGg6IDUwMHB4O1xuICAgIG1hcmdpbjogMS43NXJlbSBhdXRvOyB9XG4gIC5tb2RhbC1kaWFsb2ctc2Nyb2xsYWJsZSB7XG4gICAgbWF4LWhlaWdodDogY2FsYygxMDAlIC0gMy41cmVtKTsgfVxuICAgIC5tb2RhbC1kaWFsb2ctc2Nyb2xsYWJsZSAubW9kYWwtY29udGVudCB7XG4gICAgICBtYXgtaGVpZ2h0OiBjYWxjKDEwMHZoIC0gMy41cmVtKTsgfVxuICAubW9kYWwtZGlhbG9nLWNlbnRlcmVkIHtcbiAgICBtaW4taGVpZ2h0OiBjYWxjKDEwMCUgLSAzLjVyZW0pOyB9XG4gICAgLm1vZGFsLWRpYWxvZy1jZW50ZXJlZDo6YmVmb3JlIHtcbiAgICAgIGhlaWdodDogY2FsYygxMDB2aCAtIDMuNXJlbSk7XG4gICAgICBoZWlnaHQ6IG1pbi1jb250ZW50OyB9XG4gIC5tb2RhbC1zbSB7XG4gICAgbWF4LXdpZHRoOiAzMDBweDsgfSB9XG5cbkBtZWRpYSAobWluLXdpZHRoOiA5OTJweCkge1xuICAubW9kYWwtbGcsXG4gIC5tb2RhbC14bCB7XG4gICAgbWF4LXdpZHRoOiA4MDBweDsgfSB9XG5cbkBtZWRpYSAobWluLXdpZHRoOiAxMjAwcHgpIHtcbiAgLm1vZGFsLXhsIHtcbiAgICBtYXgtd2lkdGg6IDExNDBweDsgfSB9XG5cbi50b29sdGlwIHtcbiAgcG9zaXRpb246IGFic29sdXRlO1xuICB6LWluZGV4OiAxMDcwO1xuICBkaXNwbGF5OiBibG9jaztcbiAgbWFyZ2luOiAwO1xuICBmb250LWZhbWlseTogXCJPcGVuIFNhbnNcIiwgLWFwcGxlLXN5c3RlbSwgQmxpbmtNYWNTeXN0ZW1Gb250LCBcIlNlZ29lIFVJXCIsIFJvYm90bywgXCJIZWx2ZXRpY2EgTmV1ZVwiLCBBcmlhbCwgc2Fucy1zZXJpZiwgXCJBcHBsZSBDb2xvciBFbW9qaVwiLCBcIlNlZ29lIFVJIEVtb2ppXCIsIFwiU2Vnb2UgVUkgU3ltYm9sXCIsIFwiTm90byBDb2xvciBFbW9qaVwiO1xuICBmb250LXN0eWxlOiBub3JtYWw7XG4gIGZvbnQtd2VpZ2h0OiA0MDA7XG4gIGxpbmUtaGVpZ2h0OiAxLjU7XG4gIHRleHQtYWxpZ246IGxlZnQ7XG4gIHRleHQtYWxpZ246IHN0YXJ0O1xuICB0ZXh0LWRlY29yYXRpb246IG5vbmU7XG4gIHRleHQtc2hhZG93OiBub25lO1xuICB0ZXh0LXRyYW5zZm9ybTogbm9uZTtcbiAgbGV0dGVyLXNwYWNpbmc6IG5vcm1hbDtcbiAgd29yZC1icmVhazogbm9ybWFsO1xuICB3b3JkLXNwYWNpbmc6IG5vcm1hbDtcbiAgd2hpdGUtc3BhY2U6IG5vcm1hbDtcbiAgbGluZS1icmVhazogYXV0bztcbiAgZm9udC1zaXplOiAwLjg3NXJlbTtcbiAgd29yZC13cmFwOiBicmVhay13b3JkO1xuICBvcGFjaXR5OiAwOyB9XG4gIC50b29sdGlwLnNob3cge1xuICAgIG9wYWNpdHk6IDAuOTsgfVxuICAudG9vbHRpcCAuYXJyb3cge1xuICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICBkaXNwbGF5OiBibG9jaztcbiAgICB3aWR0aDogMC44cmVtO1xuICAgIGhlaWdodDogMC40cmVtOyB9XG4gICAgLnRvb2x0aXAgLmFycm93OjpiZWZvcmUge1xuICAgICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgICAgY29udGVudDogXCJcIjtcbiAgICAgIGJvcmRlci1jb2xvcjogdHJhbnNwYXJlbnQ7XG4gICAgICBib3JkZXItc3R5bGU6IHNvbGlkOyB9XG5cbi5icy10b29sdGlwLXRvcCwgLmJzLXRvb2x0aXAtYXV0b1t4LXBsYWNlbWVudF49XCJ0b3BcIl0ge1xuICBwYWRkaW5nOiAwLjRyZW0gMDsgfVxuICAuYnMtdG9vbHRpcC10b3AgLmFycm93LCAuYnMtdG9vbHRpcC1hdXRvW3gtcGxhY2VtZW50Xj1cInRvcFwiXSAuYXJyb3cge1xuICAgIGJvdHRvbTogMDsgfVxuICAgIC5icy10b29sdGlwLXRvcCAuYXJyb3c6OmJlZm9yZSwgLmJzLXRvb2x0aXAtYXV0b1t4LXBsYWNlbWVudF49XCJ0b3BcIl0gLmFycm93OjpiZWZvcmUge1xuICAgICAgdG9wOiAwO1xuICAgICAgYm9yZGVyLXdpZHRoOiAwLjRyZW0gMC40cmVtIDA7XG4gICAgICBib3JkZXItdG9wLWNvbG9yOiAjMDAwOyB9XG5cbi5icy10b29sdGlwLXJpZ2h0LCAuYnMtdG9vbHRpcC1hdXRvW3gtcGxhY2VtZW50Xj1cInJpZ2h0XCJdIHtcbiAgcGFkZGluZzogMCAwLjRyZW07IH1cbiAgLmJzLXRvb2x0aXAtcmlnaHQgLmFycm93LCAuYnMtdG9vbHRpcC1hdXRvW3gtcGxhY2VtZW50Xj1cInJpZ2h0XCJdIC5hcnJvdyB7XG4gICAgbGVmdDogMDtcbiAgICB3aWR0aDogMC40cmVtO1xuICAgIGhlaWdodDogMC44cmVtOyB9XG4gICAgLmJzLXRvb2x0aXAtcmlnaHQgLmFycm93OjpiZWZvcmUsIC5icy10b29sdGlwLWF1dG9beC1wbGFjZW1lbnRePVwicmlnaHRcIl0gLmFycm93OjpiZWZvcmUge1xuICAgICAgcmlnaHQ6IDA7XG4gICAgICBib3JkZXItd2lkdGg6IDAuNHJlbSAwLjRyZW0gMC40cmVtIDA7XG4gICAgICBib3JkZXItcmlnaHQtY29sb3I6ICMwMDA7IH1cblxuLmJzLXRvb2x0aXAtYm90dG9tLCAuYnMtdG9vbHRpcC1hdXRvW3gtcGxhY2VtZW50Xj1cImJvdHRvbVwiXSB7XG4gIHBhZGRpbmc6IDAuNHJlbSAwOyB9XG4gIC5icy10b29sdGlwLWJvdHRvbSAuYXJyb3csIC5icy10b29sdGlwLWF1dG9beC1wbGFjZW1lbnRePVwiYm90dG9tXCJdIC5hcnJvdyB7XG4gICAgdG9wOiAwOyB9XG4gICAgLmJzLXRvb2x0aXAtYm90dG9tIC5hcnJvdzo6YmVmb3JlLCAuYnMtdG9vbHRpcC1hdXRvW3gtcGxhY2VtZW50Xj1cImJvdHRvbVwiXSAuYXJyb3c6OmJlZm9yZSB7XG4gICAgICBib3R0b206IDA7XG4gICAgICBib3JkZXItd2lkdGg6IDAgMC40cmVtIDAuNHJlbTtcbiAgICAgIGJvcmRlci1ib3R0b20tY29sb3I6ICMwMDA7IH1cblxuLmJzLXRvb2x0aXAtbGVmdCwgLmJzLXRvb2x0aXAtYXV0b1t4LXBsYWNlbWVudF49XCJsZWZ0XCJdIHtcbiAgcGFkZGluZzogMCAwLjRyZW07IH1cbiAgLmJzLXRvb2x0aXAtbGVmdCAuYXJyb3csIC5icy10b29sdGlwLWF1dG9beC1wbGFjZW1lbnRePVwibGVmdFwiXSAuYXJyb3cge1xuICAgIHJpZ2h0OiAwO1xuICAgIHdpZHRoOiAwLjRyZW07XG4gICAgaGVpZ2h0OiAwLjhyZW07IH1cbiAgICAuYnMtdG9vbHRpcC1sZWZ0IC5hcnJvdzo6YmVmb3JlLCAuYnMtdG9vbHRpcC1hdXRvW3gtcGxhY2VtZW50Xj1cImxlZnRcIl0gLmFycm93OjpiZWZvcmUge1xuICAgICAgbGVmdDogMDtcbiAgICAgIGJvcmRlci13aWR0aDogMC40cmVtIDAgMC40cmVtIDAuNHJlbTtcbiAgICAgIGJvcmRlci1sZWZ0LWNvbG9yOiAjMDAwOyB9XG5cbi50b29sdGlwLWlubmVyIHtcbiAgbWF4LXdpZHRoOiAyMDBweDtcbiAgcGFkZGluZzogMC4yNXJlbSAwLjVyZW07XG4gIGNvbG9yOiAjZmZmO1xuICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gIGJhY2tncm91bmQtY29sb3I6ICMwMDA7XG4gIGJvcmRlci1yYWRpdXM6IDA7IH1cblxuLnBvcG92ZXIge1xuICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gIHRvcDogMDtcbiAgbGVmdDogMDtcbiAgei1pbmRleDogMTA2MDtcbiAgZGlzcGxheTogYmxvY2s7XG4gIG1heC13aWR0aDogMjc2cHg7XG4gIGZvbnQtZmFtaWx5OiBcIk9wZW4gU2Fuc1wiLCAtYXBwbGUtc3lzdGVtLCBCbGlua01hY1N5c3RlbUZvbnQsIFwiU2Vnb2UgVUlcIiwgUm9ib3RvLCBcIkhlbHZldGljYSBOZXVlXCIsIEFyaWFsLCBzYW5zLXNlcmlmLCBcIkFwcGxlIENvbG9yIEVtb2ppXCIsIFwiU2Vnb2UgVUkgRW1vamlcIiwgXCJTZWdvZSBVSSBTeW1ib2xcIiwgXCJOb3RvIENvbG9yIEVtb2ppXCI7XG4gIGZvbnQtc3R5bGU6IG5vcm1hbDtcbiAgZm9udC13ZWlnaHQ6IDQwMDtcbiAgbGluZS1oZWlnaHQ6IDEuNTtcbiAgdGV4dC1hbGlnbjogbGVmdDtcbiAgdGV4dC1hbGlnbjogc3RhcnQ7XG4gIHRleHQtZGVjb3JhdGlvbjogbm9uZTtcbiAgdGV4dC1zaGFkb3c6IG5vbmU7XG4gIHRleHQtdHJhbnNmb3JtOiBub25lO1xuICBsZXR0ZXItc3BhY2luZzogbm9ybWFsO1xuICB3b3JkLWJyZWFrOiBub3JtYWw7XG4gIHdvcmQtc3BhY2luZzogbm9ybWFsO1xuICB3aGl0ZS1zcGFjZTogbm9ybWFsO1xuICBsaW5lLWJyZWFrOiBhdXRvO1xuICBmb250LXNpemU6IDAuODc1cmVtO1xuICB3b3JkLXdyYXA6IGJyZWFrLXdvcmQ7XG4gIGJhY2tncm91bmQtY29sb3I6ICNmZmY7XG4gIGJhY2tncm91bmQtY2xpcDogcGFkZGluZy1ib3g7XG4gIGJvcmRlcjogMXB4IHNvbGlkIHJnYmEoMCwgMCwgMCwgMC4yKTtcbiAgYm9yZGVyLXJhZGl1czogMC4zcmVtOyB9XG4gIC5wb3BvdmVyIC5hcnJvdyB7XG4gICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgIHdpZHRoOiAxcmVtO1xuICAgIGhlaWdodDogMC41cmVtO1xuICAgIG1hcmdpbjogMCAwLjNyZW07IH1cbiAgICAucG9wb3ZlciAuYXJyb3c6OmJlZm9yZSwgLnBvcG92ZXIgLmFycm93OjphZnRlciB7XG4gICAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgICBkaXNwbGF5OiBibG9jaztcbiAgICAgIGNvbnRlbnQ6IFwiXCI7XG4gICAgICBib3JkZXItY29sb3I6IHRyYW5zcGFyZW50O1xuICAgICAgYm9yZGVyLXN0eWxlOiBzb2xpZDsgfVxuXG4uYnMtcG9wb3Zlci10b3AsIC5icy1wb3BvdmVyLWF1dG9beC1wbGFjZW1lbnRePVwidG9wXCJdIHtcbiAgbWFyZ2luLWJvdHRvbTogMC41cmVtOyB9XG4gIC5icy1wb3BvdmVyLXRvcCA+IC5hcnJvdywgLmJzLXBvcG92ZXItYXV0b1t4LXBsYWNlbWVudF49XCJ0b3BcIl0gPiAuYXJyb3cge1xuICAgIGJvdHRvbTogY2FsYygtMC41cmVtIC0gMXB4KTsgfVxuICAgIC5icy1wb3BvdmVyLXRvcCA+IC5hcnJvdzo6YmVmb3JlLCAuYnMtcG9wb3Zlci1hdXRvW3gtcGxhY2VtZW50Xj1cInRvcFwiXSA+IC5hcnJvdzo6YmVmb3JlIHtcbiAgICAgIGJvdHRvbTogMDtcbiAgICAgIGJvcmRlci13aWR0aDogMC41cmVtIDAuNXJlbSAwO1xuICAgICAgYm9yZGVyLXRvcC1jb2xvcjogcmdiYSgwLCAwLCAwLCAwLjI1KTsgfVxuICAgIC5icy1wb3BvdmVyLXRvcCA+IC5hcnJvdzo6YWZ0ZXIsIC5icy1wb3BvdmVyLWF1dG9beC1wbGFjZW1lbnRePVwidG9wXCJdID4gLmFycm93OjphZnRlciB7XG4gICAgICBib3R0b206IDFweDtcbiAgICAgIGJvcmRlci13aWR0aDogMC41cmVtIDAuNXJlbSAwO1xuICAgICAgYm9yZGVyLXRvcC1jb2xvcjogI2ZmZjsgfVxuXG4uYnMtcG9wb3Zlci1yaWdodCwgLmJzLXBvcG92ZXItYXV0b1t4LXBsYWNlbWVudF49XCJyaWdodFwiXSB7XG4gIG1hcmdpbi1sZWZ0OiAwLjVyZW07IH1cbiAgLmJzLXBvcG92ZXItcmlnaHQgPiAuYXJyb3csIC5icy1wb3BvdmVyLWF1dG9beC1wbGFjZW1lbnRePVwicmlnaHRcIl0gPiAuYXJyb3cge1xuICAgIGxlZnQ6IGNhbGMoLTAuNXJlbSAtIDFweCk7XG4gICAgd2lkdGg6IDAuNXJlbTtcbiAgICBoZWlnaHQ6IDFyZW07XG4gICAgbWFyZ2luOiAwLjNyZW0gMDsgfVxuICAgIC5icy1wb3BvdmVyLXJpZ2h0ID4gLmFycm93OjpiZWZvcmUsIC5icy1wb3BvdmVyLWF1dG9beC1wbGFjZW1lbnRePVwicmlnaHRcIl0gPiAuYXJyb3c6OmJlZm9yZSB7XG4gICAgICBsZWZ0OiAwO1xuICAgICAgYm9yZGVyLXdpZHRoOiAwLjVyZW0gMC41cmVtIDAuNXJlbSAwO1xuICAgICAgYm9yZGVyLXJpZ2h0LWNvbG9yOiByZ2JhKDAsIDAsIDAsIDAuMjUpOyB9XG4gICAgLmJzLXBvcG92ZXItcmlnaHQgPiAuYXJyb3c6OmFmdGVyLCAuYnMtcG9wb3Zlci1hdXRvW3gtcGxhY2VtZW50Xj1cInJpZ2h0XCJdID4gLmFycm93OjphZnRlciB7XG4gICAgICBsZWZ0OiAxcHg7XG4gICAgICBib3JkZXItd2lkdGg6IDAuNXJlbSAwLjVyZW0gMC41cmVtIDA7XG4gICAgICBib3JkZXItcmlnaHQtY29sb3I6ICNmZmY7IH1cblxuLmJzLXBvcG92ZXItYm90dG9tLCAuYnMtcG9wb3Zlci1hdXRvW3gtcGxhY2VtZW50Xj1cImJvdHRvbVwiXSB7XG4gIG1hcmdpbi10b3A6IDAuNXJlbTsgfVxuICAuYnMtcG9wb3Zlci1ib3R0b20gPiAuYXJyb3csIC5icy1wb3BvdmVyLWF1dG9beC1wbGFjZW1lbnRePVwiYm90dG9tXCJdID4gLmFycm93IHtcbiAgICB0b3A6IGNhbGMoLTAuNXJlbSAtIDFweCk7IH1cbiAgICAuYnMtcG9wb3Zlci1ib3R0b20gPiAuYXJyb3c6OmJlZm9yZSwgLmJzLXBvcG92ZXItYXV0b1t4LXBsYWNlbWVudF49XCJib3R0b21cIl0gPiAuYXJyb3c6OmJlZm9yZSB7XG4gICAgICB0b3A6IDA7XG4gICAgICBib3JkZXItd2lkdGg6IDAgMC41cmVtIDAuNXJlbSAwLjVyZW07XG4gICAgICBib3JkZXItYm90dG9tLWNvbG9yOiByZ2JhKDAsIDAsIDAsIDAuMjUpOyB9XG4gICAgLmJzLXBvcG92ZXItYm90dG9tID4gLmFycm93OjphZnRlciwgLmJzLXBvcG92ZXItYXV0b1t4LXBsYWNlbWVudF49XCJib3R0b21cIl0gPiAuYXJyb3c6OmFmdGVyIHtcbiAgICAgIHRvcDogMXB4O1xuICAgICAgYm9yZGVyLXdpZHRoOiAwIDAuNXJlbSAwLjVyZW0gMC41cmVtO1xuICAgICAgYm9yZGVyLWJvdHRvbS1jb2xvcjogI2ZmZjsgfVxuICAuYnMtcG9wb3Zlci1ib3R0b20gLnBvcG92ZXItaGVhZGVyOjpiZWZvcmUsIC5icy1wb3BvdmVyLWF1dG9beC1wbGFjZW1lbnRePVwiYm90dG9tXCJdIC5wb3BvdmVyLWhlYWRlcjo6YmVmb3JlIHtcbiAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgdG9wOiAwO1xuICAgIGxlZnQ6IDUwJTtcbiAgICBkaXNwbGF5OiBibG9jaztcbiAgICB3aWR0aDogMXJlbTtcbiAgICBtYXJnaW4tbGVmdDogLTAuNXJlbTtcbiAgICBjb250ZW50OiBcIlwiO1xuICAgIGJvcmRlci1ib3R0b206IDFweCBzb2xpZCAjZjdmN2Y3OyB9XG5cbi5icy1wb3BvdmVyLWxlZnQsIC5icy1wb3BvdmVyLWF1dG9beC1wbGFjZW1lbnRePVwibGVmdFwiXSB7XG4gIG1hcmdpbi1yaWdodDogMC41cmVtOyB9XG4gIC5icy1wb3BvdmVyLWxlZnQgPiAuYXJyb3csIC5icy1wb3BvdmVyLWF1dG9beC1wbGFjZW1lbnRePVwibGVmdFwiXSA+IC5hcnJvdyB7XG4gICAgcmlnaHQ6IGNhbGMoLTAuNXJlbSAtIDFweCk7XG4gICAgd2lkdGg6IDAuNXJlbTtcbiAgICBoZWlnaHQ6IDFyZW07XG4gICAgbWFyZ2luOiAwLjNyZW0gMDsgfVxuICAgIC5icy1wb3BvdmVyLWxlZnQgPiAuYXJyb3c6OmJlZm9yZSwgLmJzLXBvcG92ZXItYXV0b1t4LXBsYWNlbWVudF49XCJsZWZ0XCJdID4gLmFycm93OjpiZWZvcmUge1xuICAgICAgcmlnaHQ6IDA7XG4gICAgICBib3JkZXItd2lkdGg6IDAuNXJlbSAwIDAuNXJlbSAwLjVyZW07XG4gICAgICBib3JkZXItbGVmdC1jb2xvcjogcmdiYSgwLCAwLCAwLCAwLjI1KTsgfVxuICAgIC5icy1wb3BvdmVyLWxlZnQgPiAuYXJyb3c6OmFmdGVyLCAuYnMtcG9wb3Zlci1hdXRvW3gtcGxhY2VtZW50Xj1cImxlZnRcIl0gPiAuYXJyb3c6OmFmdGVyIHtcbiAgICAgIHJpZ2h0OiAxcHg7XG4gICAgICBib3JkZXItd2lkdGg6IDAuNXJlbSAwIDAuNXJlbSAwLjVyZW07XG4gICAgICBib3JkZXItbGVmdC1jb2xvcjogI2ZmZjsgfVxuXG4ucG9wb3Zlci1oZWFkZXIge1xuICBwYWRkaW5nOiAwLjVyZW0gMC43NXJlbTtcbiAgbWFyZ2luLWJvdHRvbTogMDtcbiAgZm9udC1zaXplOiAxcmVtO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZjdmN2Y3O1xuICBib3JkZXItYm90dG9tOiAxcHggc29saWQgI2ViZWJlYjtcbiAgYm9yZGVyLXRvcC1sZWZ0LXJhZGl1czogY2FsYygwLjNyZW0gLSAxcHgpO1xuICBib3JkZXItdG9wLXJpZ2h0LXJhZGl1czogY2FsYygwLjNyZW0gLSAxcHgpOyB9XG4gIC5wb3BvdmVyLWhlYWRlcjplbXB0eSB7XG4gICAgZGlzcGxheTogbm9uZTsgfVxuXG4ucG9wb3Zlci1ib2R5IHtcbiAgcGFkZGluZzogMC41cmVtIDAuNzVyZW07XG4gIGNvbG9yOiAjNTE1MTUxOyB9XG5cbi5jYXJvdXNlbCB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTsgfVxuXG4uY2Fyb3VzZWwucG9pbnRlci1ldmVudCB7XG4gIHRvdWNoLWFjdGlvbjogcGFuLXk7IH1cblxuLmNhcm91c2VsLWlubmVyIHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICB3aWR0aDogMTAwJTtcbiAgb3ZlcmZsb3c6IGhpZGRlbjsgfVxuICAuY2Fyb3VzZWwtaW5uZXI6OmFmdGVyIHtcbiAgICBkaXNwbGF5OiBibG9jaztcbiAgICBjbGVhcjogYm90aDtcbiAgICBjb250ZW50OiBcIlwiOyB9XG5cbi5jYXJvdXNlbC1pdGVtIHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICBkaXNwbGF5OiBub25lO1xuICBmbG9hdDogbGVmdDtcbiAgd2lkdGg6IDEwMCU7XG4gIG1hcmdpbi1yaWdodDogLTEwMCU7XG4gIGJhY2tmYWNlLXZpc2liaWxpdHk6IGhpZGRlbjtcbiAgdHJhbnNpdGlvbjogdHJhbnNmb3JtIDAuNnMgZWFzZS1pbi1vdXQ7IH1cbiAgQG1lZGlhIChwcmVmZXJzLXJlZHVjZWQtbW90aW9uOiByZWR1Y2UpIHtcbiAgICAuY2Fyb3VzZWwtaXRlbSB7XG4gICAgICB0cmFuc2l0aW9uOiBub25lOyB9IH1cblxuLmNhcm91c2VsLWl0ZW0uYWN0aXZlLFxuLmNhcm91c2VsLWl0ZW0tbmV4dCxcbi5jYXJvdXNlbC1pdGVtLXByZXYge1xuICBkaXNwbGF5OiBibG9jazsgfVxuXG4uY2Fyb3VzZWwtaXRlbS1uZXh0Om5vdCguY2Fyb3VzZWwtaXRlbS1sZWZ0KSxcbi5hY3RpdmUuY2Fyb3VzZWwtaXRlbS1yaWdodCB7XG4gIHRyYW5zZm9ybTogdHJhbnNsYXRlWCgxMDAlKTsgfVxuXG4uY2Fyb3VzZWwtaXRlbS1wcmV2Om5vdCguY2Fyb3VzZWwtaXRlbS1yaWdodCksXG4uYWN0aXZlLmNhcm91c2VsLWl0ZW0tbGVmdCB7XG4gIHRyYW5zZm9ybTogdHJhbnNsYXRlWCgtMTAwJSk7IH1cblxuLmNhcm91c2VsLWZhZGUgLmNhcm91c2VsLWl0ZW0ge1xuICBvcGFjaXR5OiAwO1xuICB0cmFuc2l0aW9uLXByb3BlcnR5OiBvcGFjaXR5O1xuICB0cmFuc2Zvcm06IG5vbmU7IH1cblxuLmNhcm91c2VsLWZhZGUgLmNhcm91c2VsLWl0ZW0uYWN0aXZlLFxuLmNhcm91c2VsLWZhZGUgLmNhcm91c2VsLWl0ZW0tbmV4dC5jYXJvdXNlbC1pdGVtLWxlZnQsXG4uY2Fyb3VzZWwtZmFkZSAuY2Fyb3VzZWwtaXRlbS1wcmV2LmNhcm91c2VsLWl0ZW0tcmlnaHQge1xuICB6LWluZGV4OiAxO1xuICBvcGFjaXR5OiAxOyB9XG5cbi5jYXJvdXNlbC1mYWRlIC5hY3RpdmUuY2Fyb3VzZWwtaXRlbS1sZWZ0LFxuLmNhcm91c2VsLWZhZGUgLmFjdGl2ZS5jYXJvdXNlbC1pdGVtLXJpZ2h0IHtcbiAgei1pbmRleDogMDtcbiAgb3BhY2l0eTogMDtcbiAgdHJhbnNpdGlvbjogb3BhY2l0eSAwcyAwLjZzOyB9XG4gIEBtZWRpYSAocHJlZmVycy1yZWR1Y2VkLW1vdGlvbjogcmVkdWNlKSB7XG4gICAgLmNhcm91c2VsLWZhZGUgLmFjdGl2ZS5jYXJvdXNlbC1pdGVtLWxlZnQsXG4gICAgLmNhcm91c2VsLWZhZGUgLmFjdGl2ZS5jYXJvdXNlbC1pdGVtLXJpZ2h0IHtcbiAgICAgIHRyYW5zaXRpb246IG5vbmU7IH0gfVxuXG4uY2Fyb3VzZWwtY29udHJvbC1wcmV2LFxuLmNhcm91c2VsLWNvbnRyb2wtbmV4dCB7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgdG9wOiAwO1xuICBib3R0b206IDA7XG4gIHotaW5kZXg6IDE7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gIGp1c3RpZnktY29udGVudDogY2VudGVyO1xuICB3aWR0aDogMTUlO1xuICBjb2xvcjogI2ZmZjtcbiAgdGV4dC1hbGlnbjogY2VudGVyO1xuICBvcGFjaXR5OiAwLjU7XG4gIHRyYW5zaXRpb246IG9wYWNpdHkgMC4xNXMgZWFzZTsgfVxuICBAbWVkaWEgKHByZWZlcnMtcmVkdWNlZC1tb3Rpb246IHJlZHVjZSkge1xuICAgIC5jYXJvdXNlbC1jb250cm9sLXByZXYsXG4gICAgLmNhcm91c2VsLWNvbnRyb2wtbmV4dCB7XG4gICAgICB0cmFuc2l0aW9uOiBub25lOyB9IH1cbiAgLmNhcm91c2VsLWNvbnRyb2wtcHJldjpob3ZlciwgLmNhcm91c2VsLWNvbnRyb2wtcHJldjpmb2N1cyxcbiAgLmNhcm91c2VsLWNvbnRyb2wtbmV4dDpob3ZlcixcbiAgLmNhcm91c2VsLWNvbnRyb2wtbmV4dDpmb2N1cyB7XG4gICAgY29sb3I6ICNmZmY7XG4gICAgdGV4dC1kZWNvcmF0aW9uOiBub25lO1xuICAgIG91dGxpbmU6IDA7XG4gICAgb3BhY2l0eTogMC45OyB9XG5cbi5jYXJvdXNlbC1jb250cm9sLXByZXYge1xuICBsZWZ0OiAwOyB9XG5cbi5jYXJvdXNlbC1jb250cm9sLW5leHQge1xuICByaWdodDogMDsgfVxuXG4uY2Fyb3VzZWwtY29udHJvbC1wcmV2LWljb24sXG4uY2Fyb3VzZWwtY29udHJvbC1uZXh0LWljb24ge1xuICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gIHdpZHRoOiAyMHB4O1xuICBoZWlnaHQ6IDIwcHg7XG4gIGJhY2tncm91bmQ6IG5vLXJlcGVhdCA1MCUgLyAxMDAlIDEwMCU7IH1cblxuLmNhcm91c2VsLWNvbnRyb2wtcHJldi1pY29uIHtcbiAgYmFja2dyb3VuZC1pbWFnZTogdXJsKFwiZGF0YTppbWFnZS9zdmcreG1sLCUzY3N2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIGZpbGw9JyUyM2ZmZicgd2lkdGg9JzgnIGhlaWdodD0nOCcgdmlld0JveD0nMCAwIDggOCclM2UlM2NwYXRoIGQ9J001LjI1IDBsLTQgNCA0IDQgMS41LTEuNUw0LjI1IDRsMi41LTIuNUw1LjI1IDB6Jy8lM2UlM2Mvc3ZnJTNlXCIpOyB9XG5cbi5jYXJvdXNlbC1jb250cm9sLW5leHQtaWNvbiB7XG4gIGJhY2tncm91bmQtaW1hZ2U6IHVybChcImRhdGE6aW1hZ2Uvc3ZnK3htbCwlM2NzdmcgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJyBmaWxsPSclMjNmZmYnIHdpZHRoPSc4JyBoZWlnaHQ9JzgnIHZpZXdCb3g9JzAgMCA4IDgnJTNlJTNjcGF0aCBkPSdNMi43NSAwbC0xLjUgMS41TDMuNzUgNGwtMi41IDIuNUwyLjc1IDhsNC00LTQtNHonLyUzZSUzYy9zdmclM2VcIik7IH1cblxuLmNhcm91c2VsLWluZGljYXRvcnMge1xuICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gIHJpZ2h0OiAwO1xuICBib3R0b206IDA7XG4gIGxlZnQ6IDA7XG4gIHotaW5kZXg6IDE1O1xuICBkaXNwbGF5OiBmbGV4O1xuICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcbiAgcGFkZGluZy1sZWZ0OiAwO1xuICBtYXJnaW4tcmlnaHQ6IDE1JTtcbiAgbWFyZ2luLWxlZnQ6IDE1JTtcbiAgbGlzdC1zdHlsZTogbm9uZTsgfVxuICAuY2Fyb3VzZWwtaW5kaWNhdG9ycyBsaSB7XG4gICAgYm94LXNpemluZzogY29udGVudC1ib3g7XG4gICAgZmxleDogMCAxIGF1dG87XG4gICAgd2lkdGg6IDMwcHg7XG4gICAgaGVpZ2h0OiAzcHg7XG4gICAgbWFyZ2luLXJpZ2h0OiAzcHg7XG4gICAgbWFyZ2luLWxlZnQ6IDNweDtcbiAgICB0ZXh0LWluZGVudDogLTk5OXB4O1xuICAgIGN1cnNvcjogcG9pbnRlcjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjZmZmO1xuICAgIGJhY2tncm91bmQtY2xpcDogcGFkZGluZy1ib3g7XG4gICAgYm9yZGVyLXRvcDogMTBweCBzb2xpZCB0cmFuc3BhcmVudDtcbiAgICBib3JkZXItYm90dG9tOiAxMHB4IHNvbGlkIHRyYW5zcGFyZW50O1xuICAgIG9wYWNpdHk6IC41O1xuICAgIHRyYW5zaXRpb246IG9wYWNpdHkgMC42cyBlYXNlOyB9XG4gICAgQG1lZGlhIChwcmVmZXJzLXJlZHVjZWQtbW90aW9uOiByZWR1Y2UpIHtcbiAgICAgIC5jYXJvdXNlbC1pbmRpY2F0b3JzIGxpIHtcbiAgICAgICAgdHJhbnNpdGlvbjogbm9uZTsgfSB9XG4gIC5jYXJvdXNlbC1pbmRpY2F0b3JzIC5hY3RpdmUge1xuICAgIG9wYWNpdHk6IDE7IH1cblxuLmNhcm91c2VsLWNhcHRpb24ge1xuICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gIHJpZ2h0OiAxNSU7XG4gIGJvdHRvbTogMjBweDtcbiAgbGVmdDogMTUlO1xuICB6LWluZGV4OiAxMDtcbiAgcGFkZGluZy10b3A6IDIwcHg7XG4gIHBhZGRpbmctYm90dG9tOiAyMHB4O1xuICBjb2xvcjogI2ZmZjtcbiAgdGV4dC1hbGlnbjogY2VudGVyOyB9XG5cbkBrZXlmcmFtZXMgc3Bpbm5lci1ib3JkZXIge1xuICB0byB7XG4gICAgdHJhbnNmb3JtOiByb3RhdGUoMzYwZGVnKTsgfSB9XG5cbi5zcGlubmVyLWJvcmRlciB7XG4gIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgd2lkdGg6IDJyZW07XG4gIGhlaWdodDogMnJlbTtcbiAgdmVydGljYWwtYWxpZ246IHRleHQtYm90dG9tO1xuICBib3JkZXI6IDAuMjVlbSBzb2xpZCBjdXJyZW50Q29sb3I7XG4gIGJvcmRlci1yaWdodC1jb2xvcjogdHJhbnNwYXJlbnQ7XG4gIGJvcmRlci1yYWRpdXM6IDUwJTtcbiAgYW5pbWF0aW9uOiBzcGlubmVyLWJvcmRlciAuNzVzIGxpbmVhciBpbmZpbml0ZTsgfVxuXG4uc3Bpbm5lci1ib3JkZXItc20ge1xuICB3aWR0aDogMXJlbTtcbiAgaGVpZ2h0OiAxcmVtO1xuICBib3JkZXItd2lkdGg6IDAuMmVtOyB9XG5cbkBrZXlmcmFtZXMgc3Bpbm5lci1ncm93IHtcbiAgMCUge1xuICAgIHRyYW5zZm9ybTogc2NhbGUoMCk7IH1cbiAgNTAlIHtcbiAgICBvcGFjaXR5OiAxO1xuICAgIHRyYW5zZm9ybTogbm9uZTsgfSB9XG5cbi5zcGlubmVyLWdyb3cge1xuICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gIHdpZHRoOiAycmVtO1xuICBoZWlnaHQ6IDJyZW07XG4gIHZlcnRpY2FsLWFsaWduOiB0ZXh0LWJvdHRvbTtcbiAgYmFja2dyb3VuZC1jb2xvcjogY3VycmVudENvbG9yO1xuICBib3JkZXItcmFkaXVzOiA1MCU7XG4gIG9wYWNpdHk6IDA7XG4gIGFuaW1hdGlvbjogc3Bpbm5lci1ncm93IC43NXMgbGluZWFyIGluZmluaXRlOyB9XG5cbi5zcGlubmVyLWdyb3ctc20ge1xuICB3aWR0aDogMXJlbTtcbiAgaGVpZ2h0OiAxcmVtOyB9XG5cbi5hbGlnbi1iYXNlbGluZSB7XG4gIHZlcnRpY2FsLWFsaWduOiBiYXNlbGluZSAhaW1wb3J0YW50OyB9XG5cbi5hbGlnbi10b3Age1xuICB2ZXJ0aWNhbC1hbGlnbjogdG9wICFpbXBvcnRhbnQ7IH1cblxuLmFsaWduLW1pZGRsZSB7XG4gIHZlcnRpY2FsLWFsaWduOiBtaWRkbGUgIWltcG9ydGFudDsgfVxuXG4uYWxpZ24tYm90dG9tIHtcbiAgdmVydGljYWwtYWxpZ246IGJvdHRvbSAhaW1wb3J0YW50OyB9XG5cbi5hbGlnbi10ZXh0LWJvdHRvbSB7XG4gIHZlcnRpY2FsLWFsaWduOiB0ZXh0LWJvdHRvbSAhaW1wb3J0YW50OyB9XG5cbi5hbGlnbi10ZXh0LXRvcCB7XG4gIHZlcnRpY2FsLWFsaWduOiB0ZXh0LXRvcCAhaW1wb3J0YW50OyB9XG5cbi5iZy1wcmltYXJ5IHtcbiAgYmFja2dyb3VuZC1jb2xvcjogIzNGODRGQyAhaW1wb3J0YW50OyB9XG5cbmEuYmctcHJpbWFyeTpob3ZlciwgYS5iZy1wcmltYXJ5OmZvY3VzLFxuYnV0dG9uLmJnLXByaW1hcnk6aG92ZXIsXG5idXR0b24uYmctcHJpbWFyeTpmb2N1cyB7XG4gIGJhY2tncm91bmQtY29sb3I6ICMwZDY0ZmIgIWltcG9ydGFudDsgfVxuXG4uYmctc2Vjb25kYXJ5IHtcbiAgYmFja2dyb3VuZC1jb2xvcjogIzcyN0Y5NCAhaW1wb3J0YW50OyB9XG5cbmEuYmctc2Vjb25kYXJ5OmhvdmVyLCBhLmJnLXNlY29uZGFyeTpmb2N1cyxcbmJ1dHRvbi5iZy1zZWNvbmRhcnk6aG92ZXIsXG5idXR0b24uYmctc2Vjb25kYXJ5OmZvY3VzIHtcbiAgYmFja2dyb3VuZC1jb2xvcjogIzViNjY3OCAhaW1wb3J0YW50OyB9XG5cbi5iZy1zdWNjZXNzIHtcbiAgYmFja2dyb3VuZC1jb2xvcjogIzFEQUI0NyAhaW1wb3J0YW50OyB9XG5cbmEuYmctc3VjY2Vzczpob3ZlciwgYS5iZy1zdWNjZXNzOmZvY3VzLFxuYnV0dG9uLmJnLXN1Y2Nlc3M6aG92ZXIsXG5idXR0b24uYmctc3VjY2Vzczpmb2N1cyB7XG4gIGJhY2tncm91bmQtY29sb3I6ICMxNjdmMzUgIWltcG9ydGFudDsgfVxuXG4uYmctaW5mbyB7XG4gIGJhY2tncm91bmQtY29sb3I6ICM4QTNGRkMgIWltcG9ydGFudDsgfVxuXG5hLmJnLWluZm86aG92ZXIsIGEuYmctaW5mbzpmb2N1cyxcbmJ1dHRvbi5iZy1pbmZvOmhvdmVyLFxuYnV0dG9uLmJnLWluZm86Zm9jdXMge1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjNmIwZGZiICFpbXBvcnRhbnQ7IH1cblxuLmJnLXdhcm5pbmcge1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjRkNBRTNGICFpbXBvcnRhbnQ7IH1cblxuYS5iZy13YXJuaW5nOmhvdmVyLCBhLmJnLXdhcm5pbmc6Zm9jdXMsXG5idXR0b24uYmctd2FybmluZzpob3ZlcixcbmJ1dHRvbi5iZy13YXJuaW5nOmZvY3VzIHtcbiAgYmFja2dyb3VuZC1jb2xvcjogI2ZiOTkwZCAhaW1wb3J0YW50OyB9XG5cbi5iZy1kYW5nZXIge1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjRkM0MTNGICFpbXBvcnRhbnQ7IH1cblxuYS5iZy1kYW5nZXI6aG92ZXIsIGEuYmctZGFuZ2VyOmZvY3VzLFxuYnV0dG9uLmJnLWRhbmdlcjpob3ZlcixcbmJ1dHRvbi5iZy1kYW5nZXI6Zm9jdXMge1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZmIwZjBkICFpbXBvcnRhbnQ7IH1cblxuLmJnLWxpZ2h0IHtcbiAgYmFja2dyb3VuZC1jb2xvcjogI2Y4ZjlmYSAhaW1wb3J0YW50OyB9XG5cbmEuYmctbGlnaHQ6aG92ZXIsIGEuYmctbGlnaHQ6Zm9jdXMsXG5idXR0b24uYmctbGlnaHQ6aG92ZXIsXG5idXR0b24uYmctbGlnaHQ6Zm9jdXMge1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZGFlMGU1ICFpbXBvcnRhbnQ7IH1cblxuLmJnLWRhcmsge1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjMUUyMzJEICFpbXBvcnRhbnQ7IH1cblxuYS5iZy1kYXJrOmhvdmVyLCBhLmJnLWRhcms6Zm9jdXMsXG5idXR0b24uYmctZGFyazpob3ZlcixcbmJ1dHRvbi5iZy1kYXJrOmZvY3VzIHtcbiAgYmFja2dyb3VuZC1jb2xvcjogIzBhMGIwZSAhaW1wb3J0YW50OyB9XG5cbi5iZy13aGl0ZSB7XG4gIGJhY2tncm91bmQtY29sb3I6ICNmZmYgIWltcG9ydGFudDsgfVxuXG4uYmctdHJhbnNwYXJlbnQge1xuICBiYWNrZ3JvdW5kLWNvbG9yOiB0cmFuc3BhcmVudCAhaW1wb3J0YW50OyB9XG5cbi5ib3JkZXIge1xuICBib3JkZXI6IDFweCBzb2xpZCAjZGVlMmU2ICFpbXBvcnRhbnQ7IH1cblxuLmJvcmRlci10b3Age1xuICBib3JkZXItdG9wOiAxcHggc29saWQgI2RlZTJlNiAhaW1wb3J0YW50OyB9XG5cbi5ib3JkZXItcmlnaHQge1xuICBib3JkZXItcmlnaHQ6IDFweCBzb2xpZCAjZGVlMmU2ICFpbXBvcnRhbnQ7IH1cblxuLmJvcmRlci1ib3R0b20ge1xuICBib3JkZXItYm90dG9tOiAxcHggc29saWQgI2RlZTJlNiAhaW1wb3J0YW50OyB9XG5cbi5ib3JkZXItbGVmdCB7XG4gIGJvcmRlci1sZWZ0OiAxcHggc29saWQgI2RlZTJlNiAhaW1wb3J0YW50OyB9XG5cbi5ib3JkZXItMCB7XG4gIGJvcmRlcjogMCAhaW1wb3J0YW50OyB9XG5cbi5ib3JkZXItdG9wLTAge1xuICBib3JkZXItdG9wOiAwICFpbXBvcnRhbnQ7IH1cblxuLmJvcmRlci1yaWdodC0wIHtcbiAgYm9yZGVyLXJpZ2h0OiAwICFpbXBvcnRhbnQ7IH1cblxuLmJvcmRlci1ib3R0b20tMCB7XG4gIGJvcmRlci1ib3R0b206IDAgIWltcG9ydGFudDsgfVxuXG4uYm9yZGVyLWxlZnQtMCB7XG4gIGJvcmRlci1sZWZ0OiAwICFpbXBvcnRhbnQ7IH1cblxuLmJvcmRlci1wcmltYXJ5IHtcbiAgYm9yZGVyLWNvbG9yOiAjM0Y4NEZDICFpbXBvcnRhbnQ7IH1cblxuLmJvcmRlci1zZWNvbmRhcnkge1xuICBib3JkZXItY29sb3I6ICM3MjdGOTQgIWltcG9ydGFudDsgfVxuXG4uYm9yZGVyLXN1Y2Nlc3Mge1xuICBib3JkZXItY29sb3I6ICMxREFCNDcgIWltcG9ydGFudDsgfVxuXG4uYm9yZGVyLWluZm8ge1xuICBib3JkZXItY29sb3I6ICM4QTNGRkMgIWltcG9ydGFudDsgfVxuXG4uYm9yZGVyLXdhcm5pbmcge1xuICBib3JkZXItY29sb3I6ICNGQ0FFM0YgIWltcG9ydGFudDsgfVxuXG4uYm9yZGVyLWRhbmdlciB7XG4gIGJvcmRlci1jb2xvcjogI0ZDNDEzRiAhaW1wb3J0YW50OyB9XG5cbi5ib3JkZXItbGlnaHQge1xuICBib3JkZXItY29sb3I6ICNmOGY5ZmEgIWltcG9ydGFudDsgfVxuXG4uYm9yZGVyLWRhcmsge1xuICBib3JkZXItY29sb3I6ICMxRTIzMkQgIWltcG9ydGFudDsgfVxuXG4uYm9yZGVyLXdoaXRlIHtcbiAgYm9yZGVyLWNvbG9yOiAjZmZmICFpbXBvcnRhbnQ7IH1cblxuLnJvdW5kZWQtc20ge1xuICBib3JkZXItcmFkaXVzOiAwLjJyZW0gIWltcG9ydGFudDsgfVxuXG4ucm91bmRlZCB7XG4gIGJvcmRlci1yYWRpdXM6IDAgIWltcG9ydGFudDsgfVxuXG4ucm91bmRlZC10b3Age1xuICBib3JkZXItdG9wLWxlZnQtcmFkaXVzOiAwICFpbXBvcnRhbnQ7XG4gIGJvcmRlci10b3AtcmlnaHQtcmFkaXVzOiAwICFpbXBvcnRhbnQ7IH1cblxuLnJvdW5kZWQtcmlnaHQge1xuICBib3JkZXItdG9wLXJpZ2h0LXJhZGl1czogMCAhaW1wb3J0YW50O1xuICBib3JkZXItYm90dG9tLXJpZ2h0LXJhZGl1czogMCAhaW1wb3J0YW50OyB9XG5cbi5yb3VuZGVkLWJvdHRvbSB7XG4gIGJvcmRlci1ib3R0b20tcmlnaHQtcmFkaXVzOiAwICFpbXBvcnRhbnQ7XG4gIGJvcmRlci1ib3R0b20tbGVmdC1yYWRpdXM6IDAgIWltcG9ydGFudDsgfVxuXG4ucm91bmRlZC1sZWZ0IHtcbiAgYm9yZGVyLXRvcC1sZWZ0LXJhZGl1czogMCAhaW1wb3J0YW50O1xuICBib3JkZXItYm90dG9tLWxlZnQtcmFkaXVzOiAwICFpbXBvcnRhbnQ7IH1cblxuLnJvdW5kZWQtbGcge1xuICBib3JkZXItcmFkaXVzOiAwLjNyZW0gIWltcG9ydGFudDsgfVxuXG4ucm91bmRlZC1jaXJjbGUge1xuICBib3JkZXItcmFkaXVzOiA1MCUgIWltcG9ydGFudDsgfVxuXG4ucm91bmRlZC1waWxsIHtcbiAgYm9yZGVyLXJhZGl1czogNTByZW0gIWltcG9ydGFudDsgfVxuXG4ucm91bmRlZC0wIHtcbiAgYm9yZGVyLXJhZGl1czogMCAhaW1wb3J0YW50OyB9XG5cbi5jbGVhcmZpeDo6YWZ0ZXIge1xuICBkaXNwbGF5OiBibG9jaztcbiAgY2xlYXI6IGJvdGg7XG4gIGNvbnRlbnQ6IFwiXCI7IH1cblxuLmQtbm9uZSB7XG4gIGRpc3BsYXk6IG5vbmUgIWltcG9ydGFudDsgfVxuXG4uZC1pbmxpbmUge1xuICBkaXNwbGF5OiBpbmxpbmUgIWltcG9ydGFudDsgfVxuXG4uZC1pbmxpbmUtYmxvY2sge1xuICBkaXNwbGF5OiBpbmxpbmUtYmxvY2sgIWltcG9ydGFudDsgfVxuXG4uZC1ibG9jayB7XG4gIGRpc3BsYXk6IGJsb2NrICFpbXBvcnRhbnQ7IH1cblxuLmQtdGFibGUge1xuICBkaXNwbGF5OiB0YWJsZSAhaW1wb3J0YW50OyB9XG5cbi5kLXRhYmxlLXJvdyB7XG4gIGRpc3BsYXk6IHRhYmxlLXJvdyAhaW1wb3J0YW50OyB9XG5cbi5kLXRhYmxlLWNlbGwge1xuICBkaXNwbGF5OiB0YWJsZS1jZWxsICFpbXBvcnRhbnQ7IH1cblxuLmQtZmxleCB7XG4gIGRpc3BsYXk6IGZsZXggIWltcG9ydGFudDsgfVxuXG4uZC1pbmxpbmUtZmxleCB7XG4gIGRpc3BsYXk6IGlubGluZS1mbGV4ICFpbXBvcnRhbnQ7IH1cblxuQG1lZGlhIChtaW4td2lkdGg6IDU3NnB4KSB7XG4gIC5kLXNtLW5vbmUge1xuICAgIGRpc3BsYXk6IG5vbmUgIWltcG9ydGFudDsgfVxuICAuZC1zbS1pbmxpbmUge1xuICAgIGRpc3BsYXk6IGlubGluZSAhaW1wb3J0YW50OyB9XG4gIC5kLXNtLWlubGluZS1ibG9jayB7XG4gICAgZGlzcGxheTogaW5saW5lLWJsb2NrICFpbXBvcnRhbnQ7IH1cbiAgLmQtc20tYmxvY2sge1xuICAgIGRpc3BsYXk6IGJsb2NrICFpbXBvcnRhbnQ7IH1cbiAgLmQtc20tdGFibGUge1xuICAgIGRpc3BsYXk6IHRhYmxlICFpbXBvcnRhbnQ7IH1cbiAgLmQtc20tdGFibGUtcm93IHtcbiAgICBkaXNwbGF5OiB0YWJsZS1yb3cgIWltcG9ydGFudDsgfVxuICAuZC1zbS10YWJsZS1jZWxsIHtcbiAgICBkaXNwbGF5OiB0YWJsZS1jZWxsICFpbXBvcnRhbnQ7IH1cbiAgLmQtc20tZmxleCB7XG4gICAgZGlzcGxheTogZmxleCAhaW1wb3J0YW50OyB9XG4gIC5kLXNtLWlubGluZS1mbGV4IHtcbiAgICBkaXNwbGF5OiBpbmxpbmUtZmxleCAhaW1wb3J0YW50OyB9IH1cblxuQG1lZGlhIChtaW4td2lkdGg6IDc2OHB4KSB7XG4gIC5kLW1kLW5vbmUge1xuICAgIGRpc3BsYXk6IG5vbmUgIWltcG9ydGFudDsgfVxuICAuZC1tZC1pbmxpbmUge1xuICAgIGRpc3BsYXk6IGlubGluZSAhaW1wb3J0YW50OyB9XG4gIC5kLW1kLWlubGluZS1ibG9jayB7XG4gICAgZGlzcGxheTogaW5saW5lLWJsb2NrICFpbXBvcnRhbnQ7IH1cbiAgLmQtbWQtYmxvY2sge1xuICAgIGRpc3BsYXk6IGJsb2NrICFpbXBvcnRhbnQ7IH1cbiAgLmQtbWQtdGFibGUge1xuICAgIGRpc3BsYXk6IHRhYmxlICFpbXBvcnRhbnQ7IH1cbiAgLmQtbWQtdGFibGUtcm93IHtcbiAgICBkaXNwbGF5OiB0YWJsZS1yb3cgIWltcG9ydGFudDsgfVxuICAuZC1tZC10YWJsZS1jZWxsIHtcbiAgICBkaXNwbGF5OiB0YWJsZS1jZWxsICFpbXBvcnRhbnQ7IH1cbiAgLmQtbWQtZmxleCB7XG4gICAgZGlzcGxheTogZmxleCAhaW1wb3J0YW50OyB9XG4gIC5kLW1kLWlubGluZS1mbGV4IHtcbiAgICBkaXNwbGF5OiBpbmxpbmUtZmxleCAhaW1wb3J0YW50OyB9IH1cblxuQG1lZGlhIChtaW4td2lkdGg6IDk5MnB4KSB7XG4gIC5kLWxnLW5vbmUge1xuICAgIGRpc3BsYXk6IG5vbmUgIWltcG9ydGFudDsgfVxuICAuZC1sZy1pbmxpbmUge1xuICAgIGRpc3BsYXk6IGlubGluZSAhaW1wb3J0YW50OyB9XG4gIC5kLWxnLWlubGluZS1ibG9jayB7XG4gICAgZGlzcGxheTogaW5saW5lLWJsb2NrICFpbXBvcnRhbnQ7IH1cbiAgLmQtbGctYmxvY2sge1xuICAgIGRpc3BsYXk6IGJsb2NrICFpbXBvcnRhbnQ7IH1cbiAgLmQtbGctdGFibGUge1xuICAgIGRpc3BsYXk6IHRhYmxlICFpbXBvcnRhbnQ7IH1cbiAgLmQtbGctdGFibGUtcm93IHtcbiAgICBkaXNwbGF5OiB0YWJsZS1yb3cgIWltcG9ydGFudDsgfVxuICAuZC1sZy10YWJsZS1jZWxsIHtcbiAgICBkaXNwbGF5OiB0YWJsZS1jZWxsICFpbXBvcnRhbnQ7IH1cbiAgLmQtbGctZmxleCB7XG4gICAgZGlzcGxheTogZmxleCAhaW1wb3J0YW50OyB9XG4gIC5kLWxnLWlubGluZS1mbGV4IHtcbiAgICBkaXNwbGF5OiBpbmxpbmUtZmxleCAhaW1wb3J0YW50OyB9IH1cblxuQG1lZGlhIChtaW4td2lkdGg6IDEyMDBweCkge1xuICAuZC14bC1ub25lIHtcbiAgICBkaXNwbGF5OiBub25lICFpbXBvcnRhbnQ7IH1cbiAgLmQteGwtaW5saW5lIHtcbiAgICBkaXNwbGF5OiBpbmxpbmUgIWltcG9ydGFudDsgfVxuICAuZC14bC1pbmxpbmUtYmxvY2sge1xuICAgIGRpc3BsYXk6IGlubGluZS1ibG9jayAhaW1wb3J0YW50OyB9XG4gIC5kLXhsLWJsb2NrIHtcbiAgICBkaXNwbGF5OiBibG9jayAhaW1wb3J0YW50OyB9XG4gIC5kLXhsLXRhYmxlIHtcbiAgICBkaXNwbGF5OiB0YWJsZSAhaW1wb3J0YW50OyB9XG4gIC5kLXhsLXRhYmxlLXJvdyB7XG4gICAgZGlzcGxheTogdGFibGUtcm93ICFpbXBvcnRhbnQ7IH1cbiAgLmQteGwtdGFibGUtY2VsbCB7XG4gICAgZGlzcGxheTogdGFibGUtY2VsbCAhaW1wb3J0YW50OyB9XG4gIC5kLXhsLWZsZXgge1xuICAgIGRpc3BsYXk6IGZsZXggIWltcG9ydGFudDsgfVxuICAuZC14bC1pbmxpbmUtZmxleCB7XG4gICAgZGlzcGxheTogaW5saW5lLWZsZXggIWltcG9ydGFudDsgfSB9XG5cbkBtZWRpYSBwcmludCB7XG4gIC5kLXByaW50LW5vbmUge1xuICAgIGRpc3BsYXk6IG5vbmUgIWltcG9ydGFudDsgfVxuICAuZC1wcmludC1pbmxpbmUge1xuICAgIGRpc3BsYXk6IGlubGluZSAhaW1wb3J0YW50OyB9XG4gIC5kLXByaW50LWlubGluZS1ibG9jayB7XG4gICAgZGlzcGxheTogaW5saW5lLWJsb2NrICFpbXBvcnRhbnQ7IH1cbiAgLmQtcHJpbnQtYmxvY2sge1xuICAgIGRpc3BsYXk6IGJsb2NrICFpbXBvcnRhbnQ7IH1cbiAgLmQtcHJpbnQtdGFibGUge1xuICAgIGRpc3BsYXk6IHRhYmxlICFpbXBvcnRhbnQ7IH1cbiAgLmQtcHJpbnQtdGFibGUtcm93IHtcbiAgICBkaXNwbGF5OiB0YWJsZS1yb3cgIWltcG9ydGFudDsgfVxuICAuZC1wcmludC10YWJsZS1jZWxsIHtcbiAgICBkaXNwbGF5OiB0YWJsZS1jZWxsICFpbXBvcnRhbnQ7IH1cbiAgLmQtcHJpbnQtZmxleCB7XG4gICAgZGlzcGxheTogZmxleCAhaW1wb3J0YW50OyB9XG4gIC5kLXByaW50LWlubGluZS1mbGV4IHtcbiAgICBkaXNwbGF5OiBpbmxpbmUtZmxleCAhaW1wb3J0YW50OyB9IH1cblxuLmVtYmVkLXJlc3BvbnNpdmUge1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIGRpc3BsYXk6IGJsb2NrO1xuICB3aWR0aDogMTAwJTtcbiAgcGFkZGluZzogMDtcbiAgb3ZlcmZsb3c6IGhpZGRlbjsgfVxuICAuZW1iZWQtcmVzcG9uc2l2ZTo6YmVmb3JlIHtcbiAgICBkaXNwbGF5OiBibG9jaztcbiAgICBjb250ZW50OiBcIlwiOyB9XG4gIC5lbWJlZC1yZXNwb25zaXZlIC5lbWJlZC1yZXNwb25zaXZlLWl0ZW0sXG4gIC5lbWJlZC1yZXNwb25zaXZlIGlmcmFtZSxcbiAgLmVtYmVkLXJlc3BvbnNpdmUgZW1iZWQsXG4gIC5lbWJlZC1yZXNwb25zaXZlIG9iamVjdCxcbiAgLmVtYmVkLXJlc3BvbnNpdmUgdmlkZW8ge1xuICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICB0b3A6IDA7XG4gICAgYm90dG9tOiAwO1xuICAgIGxlZnQ6IDA7XG4gICAgd2lkdGg6IDEwMCU7XG4gICAgaGVpZ2h0OiAxMDAlO1xuICAgIGJvcmRlcjogMDsgfVxuXG4uZW1iZWQtcmVzcG9uc2l2ZS0yMWJ5OTo6YmVmb3JlIHtcbiAgcGFkZGluZy10b3A6IDQyLjg1NzE0JTsgfVxuXG4uZW1iZWQtcmVzcG9uc2l2ZS0xNmJ5OTo6YmVmb3JlIHtcbiAgcGFkZGluZy10b3A6IDU2LjI1JTsgfVxuXG4uZW1iZWQtcmVzcG9uc2l2ZS00YnkzOjpiZWZvcmUge1xuICBwYWRkaW5nLXRvcDogNzUlOyB9XG5cbi5lbWJlZC1yZXNwb25zaXZlLTFieTE6OmJlZm9yZSB7XG4gIHBhZGRpbmctdG9wOiAxMDAlOyB9XG5cbi5mbGV4LXJvdyB7XG4gIGZsZXgtZGlyZWN0aW9uOiByb3cgIWltcG9ydGFudDsgfVxuXG4uZmxleC1jb2x1bW4ge1xuICBmbGV4LWRpcmVjdGlvbjogY29sdW1uICFpbXBvcnRhbnQ7IH1cblxuLmZsZXgtcm93LXJldmVyc2Uge1xuICBmbGV4LWRpcmVjdGlvbjogcm93LXJldmVyc2UgIWltcG9ydGFudDsgfVxuXG4uZmxleC1jb2x1bW4tcmV2ZXJzZSB7XG4gIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW4tcmV2ZXJzZSAhaW1wb3J0YW50OyB9XG5cbi5mbGV4LXdyYXAge1xuICBmbGV4LXdyYXA6IHdyYXAgIWltcG9ydGFudDsgfVxuXG4uZmxleC1ub3dyYXAge1xuICBmbGV4LXdyYXA6IG5vd3JhcCAhaW1wb3J0YW50OyB9XG5cbi5mbGV4LXdyYXAtcmV2ZXJzZSB7XG4gIGZsZXgtd3JhcDogd3JhcC1yZXZlcnNlICFpbXBvcnRhbnQ7IH1cblxuLmZsZXgtZmlsbCB7XG4gIGZsZXg6IDEgMSBhdXRvICFpbXBvcnRhbnQ7IH1cblxuLmZsZXgtZ3Jvdy0wIHtcbiAgZmxleC1ncm93OiAwICFpbXBvcnRhbnQ7IH1cblxuLmZsZXgtZ3Jvdy0xIHtcbiAgZmxleC1ncm93OiAxICFpbXBvcnRhbnQ7IH1cblxuLmZsZXgtc2hyaW5rLTAge1xuICBmbGV4LXNocmluazogMCAhaW1wb3J0YW50OyB9XG5cbi5mbGV4LXNocmluay0xIHtcbiAgZmxleC1zaHJpbms6IDEgIWltcG9ydGFudDsgfVxuXG4uanVzdGlmeS1jb250ZW50LXN0YXJ0IHtcbiAganVzdGlmeS1jb250ZW50OiBmbGV4LXN0YXJ0ICFpbXBvcnRhbnQ7IH1cblxuLmp1c3RpZnktY29udGVudC1lbmQge1xuICBqdXN0aWZ5LWNvbnRlbnQ6IGZsZXgtZW5kICFpbXBvcnRhbnQ7IH1cblxuLmp1c3RpZnktY29udGVudC1jZW50ZXIge1xuICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlciAhaW1wb3J0YW50OyB9XG5cbi5qdXN0aWZ5LWNvbnRlbnQtYmV0d2VlbiB7XG4gIGp1c3RpZnktY29udGVudDogc3BhY2UtYmV0d2VlbiAhaW1wb3J0YW50OyB9XG5cbi5qdXN0aWZ5LWNvbnRlbnQtYXJvdW5kIHtcbiAganVzdGlmeS1jb250ZW50OiBzcGFjZS1hcm91bmQgIWltcG9ydGFudDsgfVxuXG4uYWxpZ24taXRlbXMtc3RhcnQge1xuICBhbGlnbi1pdGVtczogZmxleC1zdGFydCAhaW1wb3J0YW50OyB9XG5cbi5hbGlnbi1pdGVtcy1lbmQge1xuICBhbGlnbi1pdGVtczogZmxleC1lbmQgIWltcG9ydGFudDsgfVxuXG4uYWxpZ24taXRlbXMtY2VudGVyIHtcbiAgYWxpZ24taXRlbXM6IGNlbnRlciAhaW1wb3J0YW50OyB9XG5cbi5hbGlnbi1pdGVtcy1iYXNlbGluZSB7XG4gIGFsaWduLWl0ZW1zOiBiYXNlbGluZSAhaW1wb3J0YW50OyB9XG5cbi5hbGlnbi1pdGVtcy1zdHJldGNoIHtcbiAgYWxpZ24taXRlbXM6IHN0cmV0Y2ggIWltcG9ydGFudDsgfVxuXG4uYWxpZ24tY29udGVudC1zdGFydCB7XG4gIGFsaWduLWNvbnRlbnQ6IGZsZXgtc3RhcnQgIWltcG9ydGFudDsgfVxuXG4uYWxpZ24tY29udGVudC1lbmQge1xuICBhbGlnbi1jb250ZW50OiBmbGV4LWVuZCAhaW1wb3J0YW50OyB9XG5cbi5hbGlnbi1jb250ZW50LWNlbnRlciB7XG4gIGFsaWduLWNvbnRlbnQ6IGNlbnRlciAhaW1wb3J0YW50OyB9XG5cbi5hbGlnbi1jb250ZW50LWJldHdlZW4ge1xuICBhbGlnbi1jb250ZW50OiBzcGFjZS1iZXR3ZWVuICFpbXBvcnRhbnQ7IH1cblxuLmFsaWduLWNvbnRlbnQtYXJvdW5kIHtcbiAgYWxpZ24tY29udGVudDogc3BhY2UtYXJvdW5kICFpbXBvcnRhbnQ7IH1cblxuLmFsaWduLWNvbnRlbnQtc3RyZXRjaCB7XG4gIGFsaWduLWNvbnRlbnQ6IHN0cmV0Y2ggIWltcG9ydGFudDsgfVxuXG4uYWxpZ24tc2VsZi1hdXRvIHtcbiAgYWxpZ24tc2VsZjogYXV0byAhaW1wb3J0YW50OyB9XG5cbi5hbGlnbi1zZWxmLXN0YXJ0IHtcbiAgYWxpZ24tc2VsZjogZmxleC1zdGFydCAhaW1wb3J0YW50OyB9XG5cbi5hbGlnbi1zZWxmLWVuZCB7XG4gIGFsaWduLXNlbGY6IGZsZXgtZW5kICFpbXBvcnRhbnQ7IH1cblxuLmFsaWduLXNlbGYtY2VudGVyIHtcbiAgYWxpZ24tc2VsZjogY2VudGVyICFpbXBvcnRhbnQ7IH1cblxuLmFsaWduLXNlbGYtYmFzZWxpbmUge1xuICBhbGlnbi1zZWxmOiBiYXNlbGluZSAhaW1wb3J0YW50OyB9XG5cbi5hbGlnbi1zZWxmLXN0cmV0Y2gge1xuICBhbGlnbi1zZWxmOiBzdHJldGNoICFpbXBvcnRhbnQ7IH1cblxuQG1lZGlhIChtaW4td2lkdGg6IDU3NnB4KSB7XG4gIC5mbGV4LXNtLXJvdyB7XG4gICAgZmxleC1kaXJlY3Rpb246IHJvdyAhaW1wb3J0YW50OyB9XG4gIC5mbGV4LXNtLWNvbHVtbiB7XG4gICAgZmxleC1kaXJlY3Rpb246IGNvbHVtbiAhaW1wb3J0YW50OyB9XG4gIC5mbGV4LXNtLXJvdy1yZXZlcnNlIHtcbiAgICBmbGV4LWRpcmVjdGlvbjogcm93LXJldmVyc2UgIWltcG9ydGFudDsgfVxuICAuZmxleC1zbS1jb2x1bW4tcmV2ZXJzZSB7XG4gICAgZmxleC1kaXJlY3Rpb246IGNvbHVtbi1yZXZlcnNlICFpbXBvcnRhbnQ7IH1cbiAgLmZsZXgtc20td3JhcCB7XG4gICAgZmxleC13cmFwOiB3cmFwICFpbXBvcnRhbnQ7IH1cbiAgLmZsZXgtc20tbm93cmFwIHtcbiAgICBmbGV4LXdyYXA6IG5vd3JhcCAhaW1wb3J0YW50OyB9XG4gIC5mbGV4LXNtLXdyYXAtcmV2ZXJzZSB7XG4gICAgZmxleC13cmFwOiB3cmFwLXJldmVyc2UgIWltcG9ydGFudDsgfVxuICAuZmxleC1zbS1maWxsIHtcbiAgICBmbGV4OiAxIDEgYXV0byAhaW1wb3J0YW50OyB9XG4gIC5mbGV4LXNtLWdyb3ctMCB7XG4gICAgZmxleC1ncm93OiAwICFpbXBvcnRhbnQ7IH1cbiAgLmZsZXgtc20tZ3Jvdy0xIHtcbiAgICBmbGV4LWdyb3c6IDEgIWltcG9ydGFudDsgfVxuICAuZmxleC1zbS1zaHJpbmstMCB7XG4gICAgZmxleC1zaHJpbms6IDAgIWltcG9ydGFudDsgfVxuICAuZmxleC1zbS1zaHJpbmstMSB7XG4gICAgZmxleC1zaHJpbms6IDEgIWltcG9ydGFudDsgfVxuICAuanVzdGlmeS1jb250ZW50LXNtLXN0YXJ0IHtcbiAgICBqdXN0aWZ5LWNvbnRlbnQ6IGZsZXgtc3RhcnQgIWltcG9ydGFudDsgfVxuICAuanVzdGlmeS1jb250ZW50LXNtLWVuZCB7XG4gICAganVzdGlmeS1jb250ZW50OiBmbGV4LWVuZCAhaW1wb3J0YW50OyB9XG4gIC5qdXN0aWZ5LWNvbnRlbnQtc20tY2VudGVyIHtcbiAgICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlciAhaW1wb3J0YW50OyB9XG4gIC5qdXN0aWZ5LWNvbnRlbnQtc20tYmV0d2VlbiB7XG4gICAganVzdGlmeS1jb250ZW50OiBzcGFjZS1iZXR3ZWVuICFpbXBvcnRhbnQ7IH1cbiAgLmp1c3RpZnktY29udGVudC1zbS1hcm91bmQge1xuICAgIGp1c3RpZnktY29udGVudDogc3BhY2UtYXJvdW5kICFpbXBvcnRhbnQ7IH1cbiAgLmFsaWduLWl0ZW1zLXNtLXN0YXJ0IHtcbiAgICBhbGlnbi1pdGVtczogZmxleC1zdGFydCAhaW1wb3J0YW50OyB9XG4gIC5hbGlnbi1pdGVtcy1zbS1lbmQge1xuICAgIGFsaWduLWl0ZW1zOiBmbGV4LWVuZCAhaW1wb3J0YW50OyB9XG4gIC5hbGlnbi1pdGVtcy1zbS1jZW50ZXIge1xuICAgIGFsaWduLWl0ZW1zOiBjZW50ZXIgIWltcG9ydGFudDsgfVxuICAuYWxpZ24taXRlbXMtc20tYmFzZWxpbmUge1xuICAgIGFsaWduLWl0ZW1zOiBiYXNlbGluZSAhaW1wb3J0YW50OyB9XG4gIC5hbGlnbi1pdGVtcy1zbS1zdHJldGNoIHtcbiAgICBhbGlnbi1pdGVtczogc3RyZXRjaCAhaW1wb3J0YW50OyB9XG4gIC5hbGlnbi1jb250ZW50LXNtLXN0YXJ0IHtcbiAgICBhbGlnbi1jb250ZW50OiBmbGV4LXN0YXJ0ICFpbXBvcnRhbnQ7IH1cbiAgLmFsaWduLWNvbnRlbnQtc20tZW5kIHtcbiAgICBhbGlnbi1jb250ZW50OiBmbGV4LWVuZCAhaW1wb3J0YW50OyB9XG4gIC5hbGlnbi1jb250ZW50LXNtLWNlbnRlciB7XG4gICAgYWxpZ24tY29udGVudDogY2VudGVyICFpbXBvcnRhbnQ7IH1cbiAgLmFsaWduLWNvbnRlbnQtc20tYmV0d2VlbiB7XG4gICAgYWxpZ24tY29udGVudDogc3BhY2UtYmV0d2VlbiAhaW1wb3J0YW50OyB9XG4gIC5hbGlnbi1jb250ZW50LXNtLWFyb3VuZCB7XG4gICAgYWxpZ24tY29udGVudDogc3BhY2UtYXJvdW5kICFpbXBvcnRhbnQ7IH1cbiAgLmFsaWduLWNvbnRlbnQtc20tc3RyZXRjaCB7XG4gICAgYWxpZ24tY29udGVudDogc3RyZXRjaCAhaW1wb3J0YW50OyB9XG4gIC5hbGlnbi1zZWxmLXNtLWF1dG8ge1xuICAgIGFsaWduLXNlbGY6IGF1dG8gIWltcG9ydGFudDsgfVxuICAuYWxpZ24tc2VsZi1zbS1zdGFydCB7XG4gICAgYWxpZ24tc2VsZjogZmxleC1zdGFydCAhaW1wb3J0YW50OyB9XG4gIC5hbGlnbi1zZWxmLXNtLWVuZCB7XG4gICAgYWxpZ24tc2VsZjogZmxleC1lbmQgIWltcG9ydGFudDsgfVxuICAuYWxpZ24tc2VsZi1zbS1jZW50ZXIge1xuICAgIGFsaWduLXNlbGY6IGNlbnRlciAhaW1wb3J0YW50OyB9XG4gIC5hbGlnbi1zZWxmLXNtLWJhc2VsaW5lIHtcbiAgICBhbGlnbi1zZWxmOiBiYXNlbGluZSAhaW1wb3J0YW50OyB9XG4gIC5hbGlnbi1zZWxmLXNtLXN0cmV0Y2gge1xuICAgIGFsaWduLXNlbGY6IHN0cmV0Y2ggIWltcG9ydGFudDsgfSB9XG5cbkBtZWRpYSAobWluLXdpZHRoOiA3NjhweCkge1xuICAuZmxleC1tZC1yb3cge1xuICAgIGZsZXgtZGlyZWN0aW9uOiByb3cgIWltcG9ydGFudDsgfVxuICAuZmxleC1tZC1jb2x1bW4ge1xuICAgIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW4gIWltcG9ydGFudDsgfVxuICAuZmxleC1tZC1yb3ctcmV2ZXJzZSB7XG4gICAgZmxleC1kaXJlY3Rpb246IHJvdy1yZXZlcnNlICFpbXBvcnRhbnQ7IH1cbiAgLmZsZXgtbWQtY29sdW1uLXJldmVyc2Uge1xuICAgIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW4tcmV2ZXJzZSAhaW1wb3J0YW50OyB9XG4gIC5mbGV4LW1kLXdyYXAge1xuICAgIGZsZXgtd3JhcDogd3JhcCAhaW1wb3J0YW50OyB9XG4gIC5mbGV4LW1kLW5vd3JhcCB7XG4gICAgZmxleC13cmFwOiBub3dyYXAgIWltcG9ydGFudDsgfVxuICAuZmxleC1tZC13cmFwLXJldmVyc2Uge1xuICAgIGZsZXgtd3JhcDogd3JhcC1yZXZlcnNlICFpbXBvcnRhbnQ7IH1cbiAgLmZsZXgtbWQtZmlsbCB7XG4gICAgZmxleDogMSAxIGF1dG8gIWltcG9ydGFudDsgfVxuICAuZmxleC1tZC1ncm93LTAge1xuICAgIGZsZXgtZ3JvdzogMCAhaW1wb3J0YW50OyB9XG4gIC5mbGV4LW1kLWdyb3ctMSB7XG4gICAgZmxleC1ncm93OiAxICFpbXBvcnRhbnQ7IH1cbiAgLmZsZXgtbWQtc2hyaW5rLTAge1xuICAgIGZsZXgtc2hyaW5rOiAwICFpbXBvcnRhbnQ7IH1cbiAgLmZsZXgtbWQtc2hyaW5rLTEge1xuICAgIGZsZXgtc2hyaW5rOiAxICFpbXBvcnRhbnQ7IH1cbiAgLmp1c3RpZnktY29udGVudC1tZC1zdGFydCB7XG4gICAganVzdGlmeS1jb250ZW50OiBmbGV4LXN0YXJ0ICFpbXBvcnRhbnQ7IH1cbiAgLmp1c3RpZnktY29udGVudC1tZC1lbmQge1xuICAgIGp1c3RpZnktY29udGVudDogZmxleC1lbmQgIWltcG9ydGFudDsgfVxuICAuanVzdGlmeS1jb250ZW50LW1kLWNlbnRlciB7XG4gICAganVzdGlmeS1jb250ZW50OiBjZW50ZXIgIWltcG9ydGFudDsgfVxuICAuanVzdGlmeS1jb250ZW50LW1kLWJldHdlZW4ge1xuICAgIGp1c3RpZnktY29udGVudDogc3BhY2UtYmV0d2VlbiAhaW1wb3J0YW50OyB9XG4gIC5qdXN0aWZ5LWNvbnRlbnQtbWQtYXJvdW5kIHtcbiAgICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWFyb3VuZCAhaW1wb3J0YW50OyB9XG4gIC5hbGlnbi1pdGVtcy1tZC1zdGFydCB7XG4gICAgYWxpZ24taXRlbXM6IGZsZXgtc3RhcnQgIWltcG9ydGFudDsgfVxuICAuYWxpZ24taXRlbXMtbWQtZW5kIHtcbiAgICBhbGlnbi1pdGVtczogZmxleC1lbmQgIWltcG9ydGFudDsgfVxuICAuYWxpZ24taXRlbXMtbWQtY2VudGVyIHtcbiAgICBhbGlnbi1pdGVtczogY2VudGVyICFpbXBvcnRhbnQ7IH1cbiAgLmFsaWduLWl0ZW1zLW1kLWJhc2VsaW5lIHtcbiAgICBhbGlnbi1pdGVtczogYmFzZWxpbmUgIWltcG9ydGFudDsgfVxuICAuYWxpZ24taXRlbXMtbWQtc3RyZXRjaCB7XG4gICAgYWxpZ24taXRlbXM6IHN0cmV0Y2ggIWltcG9ydGFudDsgfVxuICAuYWxpZ24tY29udGVudC1tZC1zdGFydCB7XG4gICAgYWxpZ24tY29udGVudDogZmxleC1zdGFydCAhaW1wb3J0YW50OyB9XG4gIC5hbGlnbi1jb250ZW50LW1kLWVuZCB7XG4gICAgYWxpZ24tY29udGVudDogZmxleC1lbmQgIWltcG9ydGFudDsgfVxuICAuYWxpZ24tY29udGVudC1tZC1jZW50ZXIge1xuICAgIGFsaWduLWNvbnRlbnQ6IGNlbnRlciAhaW1wb3J0YW50OyB9XG4gIC5hbGlnbi1jb250ZW50LW1kLWJldHdlZW4ge1xuICAgIGFsaWduLWNvbnRlbnQ6IHNwYWNlLWJldHdlZW4gIWltcG9ydGFudDsgfVxuICAuYWxpZ24tY29udGVudC1tZC1hcm91bmQge1xuICAgIGFsaWduLWNvbnRlbnQ6IHNwYWNlLWFyb3VuZCAhaW1wb3J0YW50OyB9XG4gIC5hbGlnbi1jb250ZW50LW1kLXN0cmV0Y2gge1xuICAgIGFsaWduLWNvbnRlbnQ6IHN0cmV0Y2ggIWltcG9ydGFudDsgfVxuICAuYWxpZ24tc2VsZi1tZC1hdXRvIHtcbiAgICBhbGlnbi1zZWxmOiBhdXRvICFpbXBvcnRhbnQ7IH1cbiAgLmFsaWduLXNlbGYtbWQtc3RhcnQge1xuICAgIGFsaWduLXNlbGY6IGZsZXgtc3RhcnQgIWltcG9ydGFudDsgfVxuICAuYWxpZ24tc2VsZi1tZC1lbmQge1xuICAgIGFsaWduLXNlbGY6IGZsZXgtZW5kICFpbXBvcnRhbnQ7IH1cbiAgLmFsaWduLXNlbGYtbWQtY2VudGVyIHtcbiAgICBhbGlnbi1zZWxmOiBjZW50ZXIgIWltcG9ydGFudDsgfVxuICAuYWxpZ24tc2VsZi1tZC1iYXNlbGluZSB7XG4gICAgYWxpZ24tc2VsZjogYmFzZWxpbmUgIWltcG9ydGFudDsgfVxuICAuYWxpZ24tc2VsZi1tZC1zdHJldGNoIHtcbiAgICBhbGlnbi1zZWxmOiBzdHJldGNoICFpbXBvcnRhbnQ7IH0gfVxuXG5AbWVkaWEgKG1pbi13aWR0aDogOTkycHgpIHtcbiAgLmZsZXgtbGctcm93IHtcbiAgICBmbGV4LWRpcmVjdGlvbjogcm93ICFpbXBvcnRhbnQ7IH1cbiAgLmZsZXgtbGctY29sdW1uIHtcbiAgICBmbGV4LWRpcmVjdGlvbjogY29sdW1uICFpbXBvcnRhbnQ7IH1cbiAgLmZsZXgtbGctcm93LXJldmVyc2Uge1xuICAgIGZsZXgtZGlyZWN0aW9uOiByb3ctcmV2ZXJzZSAhaW1wb3J0YW50OyB9XG4gIC5mbGV4LWxnLWNvbHVtbi1yZXZlcnNlIHtcbiAgICBmbGV4LWRpcmVjdGlvbjogY29sdW1uLXJldmVyc2UgIWltcG9ydGFudDsgfVxuICAuZmxleC1sZy13cmFwIHtcbiAgICBmbGV4LXdyYXA6IHdyYXAgIWltcG9ydGFudDsgfVxuICAuZmxleC1sZy1ub3dyYXAge1xuICAgIGZsZXgtd3JhcDogbm93cmFwICFpbXBvcnRhbnQ7IH1cbiAgLmZsZXgtbGctd3JhcC1yZXZlcnNlIHtcbiAgICBmbGV4LXdyYXA6IHdyYXAtcmV2ZXJzZSAhaW1wb3J0YW50OyB9XG4gIC5mbGV4LWxnLWZpbGwge1xuICAgIGZsZXg6IDEgMSBhdXRvICFpbXBvcnRhbnQ7IH1cbiAgLmZsZXgtbGctZ3Jvdy0wIHtcbiAgICBmbGV4LWdyb3c6IDAgIWltcG9ydGFudDsgfVxuICAuZmxleC1sZy1ncm93LTEge1xuICAgIGZsZXgtZ3JvdzogMSAhaW1wb3J0YW50OyB9XG4gIC5mbGV4LWxnLXNocmluay0wIHtcbiAgICBmbGV4LXNocmluazogMCAhaW1wb3J0YW50OyB9XG4gIC5mbGV4LWxnLXNocmluay0xIHtcbiAgICBmbGV4LXNocmluazogMSAhaW1wb3J0YW50OyB9XG4gIC5qdXN0aWZ5LWNvbnRlbnQtbGctc3RhcnQge1xuICAgIGp1c3RpZnktY29udGVudDogZmxleC1zdGFydCAhaW1wb3J0YW50OyB9XG4gIC5qdXN0aWZ5LWNvbnRlbnQtbGctZW5kIHtcbiAgICBqdXN0aWZ5LWNvbnRlbnQ6IGZsZXgtZW5kICFpbXBvcnRhbnQ7IH1cbiAgLmp1c3RpZnktY29udGVudC1sZy1jZW50ZXIge1xuICAgIGp1c3RpZnktY29udGVudDogY2VudGVyICFpbXBvcnRhbnQ7IH1cbiAgLmp1c3RpZnktY29udGVudC1sZy1iZXR3ZWVuIHtcbiAgICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWJldHdlZW4gIWltcG9ydGFudDsgfVxuICAuanVzdGlmeS1jb250ZW50LWxnLWFyb3VuZCB7XG4gICAganVzdGlmeS1jb250ZW50OiBzcGFjZS1hcm91bmQgIWltcG9ydGFudDsgfVxuICAuYWxpZ24taXRlbXMtbGctc3RhcnQge1xuICAgIGFsaWduLWl0ZW1zOiBmbGV4LXN0YXJ0ICFpbXBvcnRhbnQ7IH1cbiAgLmFsaWduLWl0ZW1zLWxnLWVuZCB7XG4gICAgYWxpZ24taXRlbXM6IGZsZXgtZW5kICFpbXBvcnRhbnQ7IH1cbiAgLmFsaWduLWl0ZW1zLWxnLWNlbnRlciB7XG4gICAgYWxpZ24taXRlbXM6IGNlbnRlciAhaW1wb3J0YW50OyB9XG4gIC5hbGlnbi1pdGVtcy1sZy1iYXNlbGluZSB7XG4gICAgYWxpZ24taXRlbXM6IGJhc2VsaW5lICFpbXBvcnRhbnQ7IH1cbiAgLmFsaWduLWl0ZW1zLWxnLXN0cmV0Y2gge1xuICAgIGFsaWduLWl0ZW1zOiBzdHJldGNoICFpbXBvcnRhbnQ7IH1cbiAgLmFsaWduLWNvbnRlbnQtbGctc3RhcnQge1xuICAgIGFsaWduLWNvbnRlbnQ6IGZsZXgtc3RhcnQgIWltcG9ydGFudDsgfVxuICAuYWxpZ24tY29udGVudC1sZy1lbmQge1xuICAgIGFsaWduLWNvbnRlbnQ6IGZsZXgtZW5kICFpbXBvcnRhbnQ7IH1cbiAgLmFsaWduLWNvbnRlbnQtbGctY2VudGVyIHtcbiAgICBhbGlnbi1jb250ZW50OiBjZW50ZXIgIWltcG9ydGFudDsgfVxuICAuYWxpZ24tY29udGVudC1sZy1iZXR3ZWVuIHtcbiAgICBhbGlnbi1jb250ZW50OiBzcGFjZS1iZXR3ZWVuICFpbXBvcnRhbnQ7IH1cbiAgLmFsaWduLWNvbnRlbnQtbGctYXJvdW5kIHtcbiAgICBhbGlnbi1jb250ZW50OiBzcGFjZS1hcm91bmQgIWltcG9ydGFudDsgfVxuICAuYWxpZ24tY29udGVudC1sZy1zdHJldGNoIHtcbiAgICBhbGlnbi1jb250ZW50OiBzdHJldGNoICFpbXBvcnRhbnQ7IH1cbiAgLmFsaWduLXNlbGYtbGctYXV0byB7XG4gICAgYWxpZ24tc2VsZjogYXV0byAhaW1wb3J0YW50OyB9XG4gIC5hbGlnbi1zZWxmLWxnLXN0YXJ0IHtcbiAgICBhbGlnbi1zZWxmOiBmbGV4LXN0YXJ0ICFpbXBvcnRhbnQ7IH1cbiAgLmFsaWduLXNlbGYtbGctZW5kIHtcbiAgICBhbGlnbi1zZWxmOiBmbGV4LWVuZCAhaW1wb3J0YW50OyB9XG4gIC5hbGlnbi1zZWxmLWxnLWNlbnRlciB7XG4gICAgYWxpZ24tc2VsZjogY2VudGVyICFpbXBvcnRhbnQ7IH1cbiAgLmFsaWduLXNlbGYtbGctYmFzZWxpbmUge1xuICAgIGFsaWduLXNlbGY6IGJhc2VsaW5lICFpbXBvcnRhbnQ7IH1cbiAgLmFsaWduLXNlbGYtbGctc3RyZXRjaCB7XG4gICAgYWxpZ24tc2VsZjogc3RyZXRjaCAhaW1wb3J0YW50OyB9IH1cblxuQG1lZGlhIChtaW4td2lkdGg6IDEyMDBweCkge1xuICAuZmxleC14bC1yb3cge1xuICAgIGZsZXgtZGlyZWN0aW9uOiByb3cgIWltcG9ydGFudDsgfVxuICAuZmxleC14bC1jb2x1bW4ge1xuICAgIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW4gIWltcG9ydGFudDsgfVxuICAuZmxleC14bC1yb3ctcmV2ZXJzZSB7XG4gICAgZmxleC1kaXJlY3Rpb246IHJvdy1yZXZlcnNlICFpbXBvcnRhbnQ7IH1cbiAgLmZsZXgteGwtY29sdW1uLXJldmVyc2Uge1xuICAgIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW4tcmV2ZXJzZSAhaW1wb3J0YW50OyB9XG4gIC5mbGV4LXhsLXdyYXAge1xuICAgIGZsZXgtd3JhcDogd3JhcCAhaW1wb3J0YW50OyB9XG4gIC5mbGV4LXhsLW5vd3JhcCB7XG4gICAgZmxleC13cmFwOiBub3dyYXAgIWltcG9ydGFudDsgfVxuICAuZmxleC14bC13cmFwLXJldmVyc2Uge1xuICAgIGZsZXgtd3JhcDogd3JhcC1yZXZlcnNlICFpbXBvcnRhbnQ7IH1cbiAgLmZsZXgteGwtZmlsbCB7XG4gICAgZmxleDogMSAxIGF1dG8gIWltcG9ydGFudDsgfVxuICAuZmxleC14bC1ncm93LTAge1xuICAgIGZsZXgtZ3JvdzogMCAhaW1wb3J0YW50OyB9XG4gIC5mbGV4LXhsLWdyb3ctMSB7XG4gICAgZmxleC1ncm93OiAxICFpbXBvcnRhbnQ7IH1cbiAgLmZsZXgteGwtc2hyaW5rLTAge1xuICAgIGZsZXgtc2hyaW5rOiAwICFpbXBvcnRhbnQ7IH1cbiAgLmZsZXgteGwtc2hyaW5rLTEge1xuICAgIGZsZXgtc2hyaW5rOiAxICFpbXBvcnRhbnQ7IH1cbiAgLmp1c3RpZnktY29udGVudC14bC1zdGFydCB7XG4gICAganVzdGlmeS1jb250ZW50OiBmbGV4LXN0YXJ0ICFpbXBvcnRhbnQ7IH1cbiAgLmp1c3RpZnktY29udGVudC14bC1lbmQge1xuICAgIGp1c3RpZnktY29udGVudDogZmxleC1lbmQgIWltcG9ydGFudDsgfVxuICAuanVzdGlmeS1jb250ZW50LXhsLWNlbnRlciB7XG4gICAganVzdGlmeS1jb250ZW50OiBjZW50ZXIgIWltcG9ydGFudDsgfVxuICAuanVzdGlmeS1jb250ZW50LXhsLWJldHdlZW4ge1xuICAgIGp1c3RpZnktY29udGVudDogc3BhY2UtYmV0d2VlbiAhaW1wb3J0YW50OyB9XG4gIC5qdXN0aWZ5LWNvbnRlbnQteGwtYXJvdW5kIHtcbiAgICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWFyb3VuZCAhaW1wb3J0YW50OyB9XG4gIC5hbGlnbi1pdGVtcy14bC1zdGFydCB7XG4gICAgYWxpZ24taXRlbXM6IGZsZXgtc3RhcnQgIWltcG9ydGFudDsgfVxuICAuYWxpZ24taXRlbXMteGwtZW5kIHtcbiAgICBhbGlnbi1pdGVtczogZmxleC1lbmQgIWltcG9ydGFudDsgfVxuICAuYWxpZ24taXRlbXMteGwtY2VudGVyIHtcbiAgICBhbGlnbi1pdGVtczogY2VudGVyICFpbXBvcnRhbnQ7IH1cbiAgLmFsaWduLWl0ZW1zLXhsLWJhc2VsaW5lIHtcbiAgICBhbGlnbi1pdGVtczogYmFzZWxpbmUgIWltcG9ydGFudDsgfVxuICAuYWxpZ24taXRlbXMteGwtc3RyZXRjaCB7XG4gICAgYWxpZ24taXRlbXM6IHN0cmV0Y2ggIWltcG9ydGFudDsgfVxuICAuYWxpZ24tY29udGVudC14bC1zdGFydCB7XG4gICAgYWxpZ24tY29udGVudDogZmxleC1zdGFydCAhaW1wb3J0YW50OyB9XG4gIC5hbGlnbi1jb250ZW50LXhsLWVuZCB7XG4gICAgYWxpZ24tY29udGVudDogZmxleC1lbmQgIWltcG9ydGFudDsgfVxuICAuYWxpZ24tY29udGVudC14bC1jZW50ZXIge1xuICAgIGFsaWduLWNvbnRlbnQ6IGNlbnRlciAhaW1wb3J0YW50OyB9XG4gIC5hbGlnbi1jb250ZW50LXhsLWJldHdlZW4ge1xuICAgIGFsaWduLWNvbnRlbnQ6IHNwYWNlLWJldHdlZW4gIWltcG9ydGFudDsgfVxuICAuYWxpZ24tY29udGVudC14bC1hcm91bmQge1xuICAgIGFsaWduLWNvbnRlbnQ6IHNwYWNlLWFyb3VuZCAhaW1wb3J0YW50OyB9XG4gIC5hbGlnbi1jb250ZW50LXhsLXN0cmV0Y2gge1xuICAgIGFsaWduLWNvbnRlbnQ6IHN0cmV0Y2ggIWltcG9ydGFudDsgfVxuICAuYWxpZ24tc2VsZi14bC1hdXRvIHtcbiAgICBhbGlnbi1zZWxmOiBhdXRvICFpbXBvcnRhbnQ7IH1cbiAgLmFsaWduLXNlbGYteGwtc3RhcnQge1xuICAgIGFsaWduLXNlbGY6IGZsZXgtc3RhcnQgIWltcG9ydGFudDsgfVxuICAuYWxpZ24tc2VsZi14bC1lbmQge1xuICAgIGFsaWduLXNlbGY6IGZsZXgtZW5kICFpbXBvcnRhbnQ7IH1cbiAgLmFsaWduLXNlbGYteGwtY2VudGVyIHtcbiAgICBhbGlnbi1zZWxmOiBjZW50ZXIgIWltcG9ydGFudDsgfVxuICAuYWxpZ24tc2VsZi14bC1iYXNlbGluZSB7XG4gICAgYWxpZ24tc2VsZjogYmFzZWxpbmUgIWltcG9ydGFudDsgfVxuICAuYWxpZ24tc2VsZi14bC1zdHJldGNoIHtcbiAgICBhbGlnbi1zZWxmOiBzdHJldGNoICFpbXBvcnRhbnQ7IH0gfVxuXG4uZmxvYXQtbGVmdCB7XG4gIGZsb2F0OiBsZWZ0ICFpbXBvcnRhbnQ7IH1cblxuLmZsb2F0LXJpZ2h0IHtcbiAgZmxvYXQ6IHJpZ2h0ICFpbXBvcnRhbnQ7IH1cblxuLmZsb2F0LW5vbmUge1xuICBmbG9hdDogbm9uZSAhaW1wb3J0YW50OyB9XG5cbkBtZWRpYSAobWluLXdpZHRoOiA1NzZweCkge1xuICAuZmxvYXQtc20tbGVmdCB7XG4gICAgZmxvYXQ6IGxlZnQgIWltcG9ydGFudDsgfVxuICAuZmxvYXQtc20tcmlnaHQge1xuICAgIGZsb2F0OiByaWdodCAhaW1wb3J0YW50OyB9XG4gIC5mbG9hdC1zbS1ub25lIHtcbiAgICBmbG9hdDogbm9uZSAhaW1wb3J0YW50OyB9IH1cblxuQG1lZGlhIChtaW4td2lkdGg6IDc2OHB4KSB7XG4gIC5mbG9hdC1tZC1sZWZ0IHtcbiAgICBmbG9hdDogbGVmdCAhaW1wb3J0YW50OyB9XG4gIC5mbG9hdC1tZC1yaWdodCB7XG4gICAgZmxvYXQ6IHJpZ2h0ICFpbXBvcnRhbnQ7IH1cbiAgLmZsb2F0LW1kLW5vbmUge1xuICAgIGZsb2F0OiBub25lICFpbXBvcnRhbnQ7IH0gfVxuXG5AbWVkaWEgKG1pbi13aWR0aDogOTkycHgpIHtcbiAgLmZsb2F0LWxnLWxlZnQge1xuICAgIGZsb2F0OiBsZWZ0ICFpbXBvcnRhbnQ7IH1cbiAgLmZsb2F0LWxnLXJpZ2h0IHtcbiAgICBmbG9hdDogcmlnaHQgIWltcG9ydGFudDsgfVxuICAuZmxvYXQtbGctbm9uZSB7XG4gICAgZmxvYXQ6IG5vbmUgIWltcG9ydGFudDsgfSB9XG5cbkBtZWRpYSAobWluLXdpZHRoOiAxMjAwcHgpIHtcbiAgLmZsb2F0LXhsLWxlZnQge1xuICAgIGZsb2F0OiBsZWZ0ICFpbXBvcnRhbnQ7IH1cbiAgLmZsb2F0LXhsLXJpZ2h0IHtcbiAgICBmbG9hdDogcmlnaHQgIWltcG9ydGFudDsgfVxuICAuZmxvYXQteGwtbm9uZSB7XG4gICAgZmxvYXQ6IG5vbmUgIWltcG9ydGFudDsgfSB9XG5cbi51c2VyLXNlbGVjdC1hbGwge1xuICB1c2VyLXNlbGVjdDogYWxsICFpbXBvcnRhbnQ7IH1cblxuLnVzZXItc2VsZWN0LWF1dG8ge1xuICB1c2VyLXNlbGVjdDogYXV0byAhaW1wb3J0YW50OyB9XG5cbi51c2VyLXNlbGVjdC1ub25lIHtcbiAgdXNlci1zZWxlY3Q6IG5vbmUgIWltcG9ydGFudDsgfVxuXG4ub3ZlcmZsb3ctYXV0byB7XG4gIG92ZXJmbG93OiBhdXRvICFpbXBvcnRhbnQ7IH1cblxuLm92ZXJmbG93LWhpZGRlbiB7XG4gIG92ZXJmbG93OiBoaWRkZW4gIWltcG9ydGFudDsgfVxuXG4ucG9zaXRpb24tc3RhdGljIHtcbiAgcG9zaXRpb246IHN0YXRpYyAhaW1wb3J0YW50OyB9XG5cbi5wb3NpdGlvbi1yZWxhdGl2ZSB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZSAhaW1wb3J0YW50OyB9XG5cbi5wb3NpdGlvbi1hYnNvbHV0ZSB7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZSAhaW1wb3J0YW50OyB9XG5cbi5wb3NpdGlvbi1maXhlZCB7XG4gIHBvc2l0aW9uOiBmaXhlZCAhaW1wb3J0YW50OyB9XG5cbi5wb3NpdGlvbi1zdGlja3kge1xuICBwb3NpdGlvbjogc3RpY2t5ICFpbXBvcnRhbnQ7IH1cblxuLmZpeGVkLXRvcCB7XG4gIHBvc2l0aW9uOiBmaXhlZDtcbiAgdG9wOiAwO1xuICByaWdodDogMDtcbiAgbGVmdDogMDtcbiAgei1pbmRleDogMTAzMDsgfVxuXG4uZml4ZWQtYm90dG9tIHtcbiAgcG9zaXRpb246IGZpeGVkO1xuICByaWdodDogMDtcbiAgYm90dG9tOiAwO1xuICBsZWZ0OiAwO1xuICB6LWluZGV4OiAxMDMwOyB9XG5cbkBzdXBwb3J0cyAocG9zaXRpb246IHN0aWNreSkge1xuICAuc3RpY2t5LXRvcCB7XG4gICAgcG9zaXRpb246IHN0aWNreTtcbiAgICB0b3A6IDA7XG4gICAgei1pbmRleDogMTAyMDsgfSB9XG5cbi5zci1vbmx5IHtcbiAgcG9zaXRpb246IGFic29sdXRlO1xuICB3aWR0aDogMXB4O1xuICBoZWlnaHQ6IDFweDtcbiAgcGFkZGluZzogMDtcbiAgbWFyZ2luOiAtMXB4O1xuICBvdmVyZmxvdzogaGlkZGVuO1xuICBjbGlwOiByZWN0KDAsIDAsIDAsIDApO1xuICB3aGl0ZS1zcGFjZTogbm93cmFwO1xuICBib3JkZXI6IDA7IH1cblxuLnNyLW9ubHktZm9jdXNhYmxlOmFjdGl2ZSwgLnNyLW9ubHktZm9jdXNhYmxlOmZvY3VzIHtcbiAgcG9zaXRpb246IHN0YXRpYztcbiAgd2lkdGg6IGF1dG87XG4gIGhlaWdodDogYXV0bztcbiAgb3ZlcmZsb3c6IHZpc2libGU7XG4gIGNsaXA6IGF1dG87XG4gIHdoaXRlLXNwYWNlOiBub3JtYWw7IH1cblxuLnNoYWRvdy1zbSB7XG4gIGJveC1zaGFkb3c6IDAgMC4xMjVyZW0gMC4yNXJlbSByZ2JhKDAsIDAsIDAsIDAuMDc1KSAhaW1wb3J0YW50OyB9XG5cbi5zaGFkb3cge1xuICBib3gtc2hhZG93OiAwIDAuNXJlbSAxcmVtIHJnYmEoMCwgMCwgMCwgMC4xNSkgIWltcG9ydGFudDsgfVxuXG4uc2hhZG93LWxnIHtcbiAgYm94LXNoYWRvdzogMCAxcmVtIDNyZW0gcmdiYSgwLCAwLCAwLCAwLjE3NSkgIWltcG9ydGFudDsgfVxuXG4uc2hhZG93LW5vbmUge1xuICBib3gtc2hhZG93OiBub25lICFpbXBvcnRhbnQ7IH1cblxuLnctMjUge1xuICB3aWR0aDogMjUlICFpbXBvcnRhbnQ7IH1cblxuLnctNTAge1xuICB3aWR0aDogNTAlICFpbXBvcnRhbnQ7IH1cblxuLnctNzUge1xuICB3aWR0aDogNzUlICFpbXBvcnRhbnQ7IH1cblxuLnctMTAwIHtcbiAgd2lkdGg6IDEwMCUgIWltcG9ydGFudDsgfVxuXG4udy1hdXRvIHtcbiAgd2lkdGg6IGF1dG8gIWltcG9ydGFudDsgfVxuXG4uaC0yNSB7XG4gIGhlaWdodDogMjUlICFpbXBvcnRhbnQ7IH1cblxuLmgtNTAge1xuICBoZWlnaHQ6IDUwJSAhaW1wb3J0YW50OyB9XG5cbi5oLTc1IHtcbiAgaGVpZ2h0OiA3NSUgIWltcG9ydGFudDsgfVxuXG4uaC0xMDAge1xuICBoZWlnaHQ6IDEwMCUgIWltcG9ydGFudDsgfVxuXG4uaC1hdXRvIHtcbiAgaGVpZ2h0OiBhdXRvICFpbXBvcnRhbnQ7IH1cblxuLm13LTEwMCB7XG4gIG1heC13aWR0aDogMTAwJSAhaW1wb3J0YW50OyB9XG5cbi5taC0xMDAge1xuICBtYXgtaGVpZ2h0OiAxMDAlICFpbXBvcnRhbnQ7IH1cblxuLm1pbi12dy0xMDAge1xuICBtaW4td2lkdGg6IDEwMHZ3ICFpbXBvcnRhbnQ7IH1cblxuLm1pbi12aC0xMDAge1xuICBtaW4taGVpZ2h0OiAxMDB2aCAhaW1wb3J0YW50OyB9XG5cbi52dy0xMDAge1xuICB3aWR0aDogMTAwdncgIWltcG9ydGFudDsgfVxuXG4udmgtMTAwIHtcbiAgaGVpZ2h0OiAxMDB2aCAhaW1wb3J0YW50OyB9XG5cbi5tLTAge1xuICBtYXJnaW46IDAgIWltcG9ydGFudDsgfVxuXG4ubXQtMCxcbi5teS0wIHtcbiAgbWFyZ2luLXRvcDogMCAhaW1wb3J0YW50OyB9XG5cbi5tci0wLFxuLm14LTAge1xuICBtYXJnaW4tcmlnaHQ6IDAgIWltcG9ydGFudDsgfVxuXG4ubWItMCxcbi5teS0wIHtcbiAgbWFyZ2luLWJvdHRvbTogMCAhaW1wb3J0YW50OyB9XG5cbi5tbC0wLFxuLm14LTAge1xuICBtYXJnaW4tbGVmdDogMCAhaW1wb3J0YW50OyB9XG5cbi5tLTEge1xuICBtYXJnaW46IDAuMjVyZW0gIWltcG9ydGFudDsgfVxuXG4ubXQtMSxcbi5teS0xIHtcbiAgbWFyZ2luLXRvcDogMC4yNXJlbSAhaW1wb3J0YW50OyB9XG5cbi5tci0xLFxuLm14LTEge1xuICBtYXJnaW4tcmlnaHQ6IDAuMjVyZW0gIWltcG9ydGFudDsgfVxuXG4ubWItMSxcbi5teS0xIHtcbiAgbWFyZ2luLWJvdHRvbTogMC4yNXJlbSAhaW1wb3J0YW50OyB9XG5cbi5tbC0xLFxuLm14LTEge1xuICBtYXJnaW4tbGVmdDogMC4yNXJlbSAhaW1wb3J0YW50OyB9XG5cbi5tLTIge1xuICBtYXJnaW46IDAuNXJlbSAhaW1wb3J0YW50OyB9XG5cbi5tdC0yLFxuLm15LTIge1xuICBtYXJnaW4tdG9wOiAwLjVyZW0gIWltcG9ydGFudDsgfVxuXG4ubXItMixcbi5teC0yIHtcbiAgbWFyZ2luLXJpZ2h0OiAwLjVyZW0gIWltcG9ydGFudDsgfVxuXG4ubWItMixcbi5teS0yIHtcbiAgbWFyZ2luLWJvdHRvbTogMC41cmVtICFpbXBvcnRhbnQ7IH1cblxuLm1sLTIsXG4ubXgtMiB7XG4gIG1hcmdpbi1sZWZ0OiAwLjVyZW0gIWltcG9ydGFudDsgfVxuXG4ubS0zIHtcbiAgbWFyZ2luOiAxcmVtICFpbXBvcnRhbnQ7IH1cblxuLm10LTMsXG4ubXktMyB7XG4gIG1hcmdpbi10b3A6IDFyZW0gIWltcG9ydGFudDsgfVxuXG4ubXItMyxcbi5teC0zIHtcbiAgbWFyZ2luLXJpZ2h0OiAxcmVtICFpbXBvcnRhbnQ7IH1cblxuLm1iLTMsXG4ubXktMyB7XG4gIG1hcmdpbi1ib3R0b206IDFyZW0gIWltcG9ydGFudDsgfVxuXG4ubWwtMyxcbi5teC0zIHtcbiAgbWFyZ2luLWxlZnQ6IDFyZW0gIWltcG9ydGFudDsgfVxuXG4ubS00IHtcbiAgbWFyZ2luOiAxLjVyZW0gIWltcG9ydGFudDsgfVxuXG4ubXQtNCxcbi5teS00IHtcbiAgbWFyZ2luLXRvcDogMS41cmVtICFpbXBvcnRhbnQ7IH1cblxuLm1yLTQsXG4ubXgtNCB7XG4gIG1hcmdpbi1yaWdodDogMS41cmVtICFpbXBvcnRhbnQ7IH1cblxuLm1iLTQsXG4ubXktNCB7XG4gIG1hcmdpbi1ib3R0b206IDEuNXJlbSAhaW1wb3J0YW50OyB9XG5cbi5tbC00LFxuLm14LTQge1xuICBtYXJnaW4tbGVmdDogMS41cmVtICFpbXBvcnRhbnQ7IH1cblxuLm0tNSB7XG4gIG1hcmdpbjogM3JlbSAhaW1wb3J0YW50OyB9XG5cbi5tdC01LFxuLm15LTUge1xuICBtYXJnaW4tdG9wOiAzcmVtICFpbXBvcnRhbnQ7IH1cblxuLm1yLTUsXG4ubXgtNSB7XG4gIG1hcmdpbi1yaWdodDogM3JlbSAhaW1wb3J0YW50OyB9XG5cbi5tYi01LFxuLm15LTUge1xuICBtYXJnaW4tYm90dG9tOiAzcmVtICFpbXBvcnRhbnQ7IH1cblxuLm1sLTUsXG4ubXgtNSB7XG4gIG1hcmdpbi1sZWZ0OiAzcmVtICFpbXBvcnRhbnQ7IH1cblxuLnAtMCB7XG4gIHBhZGRpbmc6IDAgIWltcG9ydGFudDsgfVxuXG4ucHQtMCxcbi5weS0wIHtcbiAgcGFkZGluZy10b3A6IDAgIWltcG9ydGFudDsgfVxuXG4ucHItMCxcbi5weC0wIHtcbiAgcGFkZGluZy1yaWdodDogMCAhaW1wb3J0YW50OyB9XG5cbi5wYi0wLFxuLnB5LTAge1xuICBwYWRkaW5nLWJvdHRvbTogMCAhaW1wb3J0YW50OyB9XG5cbi5wbC0wLFxuLnB4LTAge1xuICBwYWRkaW5nLWxlZnQ6IDAgIWltcG9ydGFudDsgfVxuXG4ucC0xIHtcbiAgcGFkZGluZzogMC4yNXJlbSAhaW1wb3J0YW50OyB9XG5cbi5wdC0xLFxuLnB5LTEge1xuICBwYWRkaW5nLXRvcDogMC4yNXJlbSAhaW1wb3J0YW50OyB9XG5cbi5wci0xLFxuLnB4LTEge1xuICBwYWRkaW5nLXJpZ2h0OiAwLjI1cmVtICFpbXBvcnRhbnQ7IH1cblxuLnBiLTEsXG4ucHktMSB7XG4gIHBhZGRpbmctYm90dG9tOiAwLjI1cmVtICFpbXBvcnRhbnQ7IH1cblxuLnBsLTEsXG4ucHgtMSB7XG4gIHBhZGRpbmctbGVmdDogMC4yNXJlbSAhaW1wb3J0YW50OyB9XG5cbi5wLTIge1xuICBwYWRkaW5nOiAwLjVyZW0gIWltcG9ydGFudDsgfVxuXG4ucHQtMixcbi5weS0yIHtcbiAgcGFkZGluZy10b3A6IDAuNXJlbSAhaW1wb3J0YW50OyB9XG5cbi5wci0yLFxuLnB4LTIge1xuICBwYWRkaW5nLXJpZ2h0OiAwLjVyZW0gIWltcG9ydGFudDsgfVxuXG4ucGItMixcbi5weS0yIHtcbiAgcGFkZGluZy1ib3R0b206IDAuNXJlbSAhaW1wb3J0YW50OyB9XG5cbi5wbC0yLFxuLnB4LTIge1xuICBwYWRkaW5nLWxlZnQ6IDAuNXJlbSAhaW1wb3J0YW50OyB9XG5cbi5wLTMge1xuICBwYWRkaW5nOiAxcmVtICFpbXBvcnRhbnQ7IH1cblxuLnB0LTMsXG4ucHktMyB7XG4gIHBhZGRpbmctdG9wOiAxcmVtICFpbXBvcnRhbnQ7IH1cblxuLnByLTMsXG4ucHgtMyB7XG4gIHBhZGRpbmctcmlnaHQ6IDFyZW0gIWltcG9ydGFudDsgfVxuXG4ucGItMyxcbi5weS0zIHtcbiAgcGFkZGluZy1ib3R0b206IDFyZW0gIWltcG9ydGFudDsgfVxuXG4ucGwtMyxcbi5weC0zIHtcbiAgcGFkZGluZy1sZWZ0OiAxcmVtICFpbXBvcnRhbnQ7IH1cblxuLnAtNCB7XG4gIHBhZGRpbmc6IDEuNXJlbSAhaW1wb3J0YW50OyB9XG5cbi5wdC00LFxuLnB5LTQge1xuICBwYWRkaW5nLXRvcDogMS41cmVtICFpbXBvcnRhbnQ7IH1cblxuLnByLTQsXG4ucHgtNCB7XG4gIHBhZGRpbmctcmlnaHQ6IDEuNXJlbSAhaW1wb3J0YW50OyB9XG5cbi5wYi00LFxuLnB5LTQge1xuICBwYWRkaW5nLWJvdHRvbTogMS41cmVtICFpbXBvcnRhbnQ7IH1cblxuLnBsLTQsXG4ucHgtNCB7XG4gIHBhZGRpbmctbGVmdDogMS41cmVtICFpbXBvcnRhbnQ7IH1cblxuLnAtNSB7XG4gIHBhZGRpbmc6IDNyZW0gIWltcG9ydGFudDsgfVxuXG4ucHQtNSxcbi5weS01IHtcbiAgcGFkZGluZy10b3A6IDNyZW0gIWltcG9ydGFudDsgfVxuXG4ucHItNSxcbi5weC01IHtcbiAgcGFkZGluZy1yaWdodDogM3JlbSAhaW1wb3J0YW50OyB9XG5cbi5wYi01LFxuLnB5LTUge1xuICBwYWRkaW5nLWJvdHRvbTogM3JlbSAhaW1wb3J0YW50OyB9XG5cbi5wbC01LFxuLnB4LTUge1xuICBwYWRkaW5nLWxlZnQ6IDNyZW0gIWltcG9ydGFudDsgfVxuXG4ubS1uMSB7XG4gIG1hcmdpbjogLTAuMjVyZW0gIWltcG9ydGFudDsgfVxuXG4ubXQtbjEsXG4ubXktbjEge1xuICBtYXJnaW4tdG9wOiAtMC4yNXJlbSAhaW1wb3J0YW50OyB9XG5cbi5tci1uMSxcbi5teC1uMSB7XG4gIG1hcmdpbi1yaWdodDogLTAuMjVyZW0gIWltcG9ydGFudDsgfVxuXG4ubWItbjEsXG4ubXktbjEge1xuICBtYXJnaW4tYm90dG9tOiAtMC4yNXJlbSAhaW1wb3J0YW50OyB9XG5cbi5tbC1uMSxcbi5teC1uMSB7XG4gIG1hcmdpbi1sZWZ0OiAtMC4yNXJlbSAhaW1wb3J0YW50OyB9XG5cbi5tLW4yIHtcbiAgbWFyZ2luOiAtMC41cmVtICFpbXBvcnRhbnQ7IH1cblxuLm10LW4yLFxuLm15LW4yIHtcbiAgbWFyZ2luLXRvcDogLTAuNXJlbSAhaW1wb3J0YW50OyB9XG5cbi5tci1uMixcbi5teC1uMiB7XG4gIG1hcmdpbi1yaWdodDogLTAuNXJlbSAhaW1wb3J0YW50OyB9XG5cbi5tYi1uMixcbi5teS1uMiB7XG4gIG1hcmdpbi1ib3R0b206IC0wLjVyZW0gIWltcG9ydGFudDsgfVxuXG4ubWwtbjIsXG4ubXgtbjIge1xuICBtYXJnaW4tbGVmdDogLTAuNXJlbSAhaW1wb3J0YW50OyB9XG5cbi5tLW4zIHtcbiAgbWFyZ2luOiAtMXJlbSAhaW1wb3J0YW50OyB9XG5cbi5tdC1uMyxcbi5teS1uMyB7XG4gIG1hcmdpbi10b3A6IC0xcmVtICFpbXBvcnRhbnQ7IH1cblxuLm1yLW4zLFxuLm14LW4zIHtcbiAgbWFyZ2luLXJpZ2h0OiAtMXJlbSAhaW1wb3J0YW50OyB9XG5cbi5tYi1uMyxcbi5teS1uMyB7XG4gIG1hcmdpbi1ib3R0b206IC0xcmVtICFpbXBvcnRhbnQ7IH1cblxuLm1sLW4zLFxuLm14LW4zIHtcbiAgbWFyZ2luLWxlZnQ6IC0xcmVtICFpbXBvcnRhbnQ7IH1cblxuLm0tbjQge1xuICBtYXJnaW46IC0xLjVyZW0gIWltcG9ydGFudDsgfVxuXG4ubXQtbjQsXG4ubXktbjQge1xuICBtYXJnaW4tdG9wOiAtMS41cmVtICFpbXBvcnRhbnQ7IH1cblxuLm1yLW40LFxuLm14LW40IHtcbiAgbWFyZ2luLXJpZ2h0OiAtMS41cmVtICFpbXBvcnRhbnQ7IH1cblxuLm1iLW40LFxuLm15LW40IHtcbiAgbWFyZ2luLWJvdHRvbTogLTEuNXJlbSAhaW1wb3J0YW50OyB9XG5cbi5tbC1uNCxcbi5teC1uNCB7XG4gIG1hcmdpbi1sZWZ0OiAtMS41cmVtICFpbXBvcnRhbnQ7IH1cblxuLm0tbjUge1xuICBtYXJnaW46IC0zcmVtICFpbXBvcnRhbnQ7IH1cblxuLm10LW41LFxuLm15LW41IHtcbiAgbWFyZ2luLXRvcDogLTNyZW0gIWltcG9ydGFudDsgfVxuXG4ubXItbjUsXG4ubXgtbjUge1xuICBtYXJnaW4tcmlnaHQ6IC0zcmVtICFpbXBvcnRhbnQ7IH1cblxuLm1iLW41LFxuLm15LW41IHtcbiAgbWFyZ2luLWJvdHRvbTogLTNyZW0gIWltcG9ydGFudDsgfVxuXG4ubWwtbjUsXG4ubXgtbjUge1xuICBtYXJnaW4tbGVmdDogLTNyZW0gIWltcG9ydGFudDsgfVxuXG4ubS1hdXRvIHtcbiAgbWFyZ2luOiBhdXRvICFpbXBvcnRhbnQ7IH1cblxuLm10LWF1dG8sXG4ubXktYXV0byB7XG4gIG1hcmdpbi10b3A6IGF1dG8gIWltcG9ydGFudDsgfVxuXG4ubXItYXV0byxcbi5teC1hdXRvIHtcbiAgbWFyZ2luLXJpZ2h0OiBhdXRvICFpbXBvcnRhbnQ7IH1cblxuLm1iLWF1dG8sXG4ubXktYXV0byB7XG4gIG1hcmdpbi1ib3R0b206IGF1dG8gIWltcG9ydGFudDsgfVxuXG4ubWwtYXV0byxcbi5teC1hdXRvIHtcbiAgbWFyZ2luLWxlZnQ6IGF1dG8gIWltcG9ydGFudDsgfVxuXG5AbWVkaWEgKG1pbi13aWR0aDogNTc2cHgpIHtcbiAgLm0tc20tMCB7XG4gICAgbWFyZ2luOiAwICFpbXBvcnRhbnQ7IH1cbiAgLm10LXNtLTAsXG4gIC5teS1zbS0wIHtcbiAgICBtYXJnaW4tdG9wOiAwICFpbXBvcnRhbnQ7IH1cbiAgLm1yLXNtLTAsXG4gIC5teC1zbS0wIHtcbiAgICBtYXJnaW4tcmlnaHQ6IDAgIWltcG9ydGFudDsgfVxuICAubWItc20tMCxcbiAgLm15LXNtLTAge1xuICAgIG1hcmdpbi1ib3R0b206IDAgIWltcG9ydGFudDsgfVxuICAubWwtc20tMCxcbiAgLm14LXNtLTAge1xuICAgIG1hcmdpbi1sZWZ0OiAwICFpbXBvcnRhbnQ7IH1cbiAgLm0tc20tMSB7XG4gICAgbWFyZ2luOiAwLjI1cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm10LXNtLTEsXG4gIC5teS1zbS0xIHtcbiAgICBtYXJnaW4tdG9wOiAwLjI1cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1yLXNtLTEsXG4gIC5teC1zbS0xIHtcbiAgICBtYXJnaW4tcmlnaHQ6IDAuMjVyZW0gIWltcG9ydGFudDsgfVxuICAubWItc20tMSxcbiAgLm15LXNtLTEge1xuICAgIG1hcmdpbi1ib3R0b206IDAuMjVyZW0gIWltcG9ydGFudDsgfVxuICAubWwtc20tMSxcbiAgLm14LXNtLTEge1xuICAgIG1hcmdpbi1sZWZ0OiAwLjI1cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm0tc20tMiB7XG4gICAgbWFyZ2luOiAwLjVyZW0gIWltcG9ydGFudDsgfVxuICAubXQtc20tMixcbiAgLm15LXNtLTIge1xuICAgIG1hcmdpbi10b3A6IDAuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tci1zbS0yLFxuICAubXgtc20tMiB7XG4gICAgbWFyZ2luLXJpZ2h0OiAwLjVyZW0gIWltcG9ydGFudDsgfVxuICAubWItc20tMixcbiAgLm15LXNtLTIge1xuICAgIG1hcmdpbi1ib3R0b206IDAuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tbC1zbS0yLFxuICAubXgtc20tMiB7XG4gICAgbWFyZ2luLWxlZnQ6IDAuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tLXNtLTMge1xuICAgIG1hcmdpbjogMXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tdC1zbS0zLFxuICAubXktc20tMyB7XG4gICAgbWFyZ2luLXRvcDogMXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tci1zbS0zLFxuICAubXgtc20tMyB7XG4gICAgbWFyZ2luLXJpZ2h0OiAxcmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1iLXNtLTMsXG4gIC5teS1zbS0zIHtcbiAgICBtYXJnaW4tYm90dG9tOiAxcmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1sLXNtLTMsXG4gIC5teC1zbS0zIHtcbiAgICBtYXJnaW4tbGVmdDogMXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tLXNtLTQge1xuICAgIG1hcmdpbjogMS41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm10LXNtLTQsXG4gIC5teS1zbS00IHtcbiAgICBtYXJnaW4tdG9wOiAxLjVyZW0gIWltcG9ydGFudDsgfVxuICAubXItc20tNCxcbiAgLm14LXNtLTQge1xuICAgIG1hcmdpbi1yaWdodDogMS41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1iLXNtLTQsXG4gIC5teS1zbS00IHtcbiAgICBtYXJnaW4tYm90dG9tOiAxLjVyZW0gIWltcG9ydGFudDsgfVxuICAubWwtc20tNCxcbiAgLm14LXNtLTQge1xuICAgIG1hcmdpbi1sZWZ0OiAxLjVyZW0gIWltcG9ydGFudDsgfVxuICAubS1zbS01IHtcbiAgICBtYXJnaW46IDNyZW0gIWltcG9ydGFudDsgfVxuICAubXQtc20tNSxcbiAgLm15LXNtLTUge1xuICAgIG1hcmdpbi10b3A6IDNyZW0gIWltcG9ydGFudDsgfVxuICAubXItc20tNSxcbiAgLm14LXNtLTUge1xuICAgIG1hcmdpbi1yaWdodDogM3JlbSAhaW1wb3J0YW50OyB9XG4gIC5tYi1zbS01LFxuICAubXktc20tNSB7XG4gICAgbWFyZ2luLWJvdHRvbTogM3JlbSAhaW1wb3J0YW50OyB9XG4gIC5tbC1zbS01LFxuICAubXgtc20tNSB7XG4gICAgbWFyZ2luLWxlZnQ6IDNyZW0gIWltcG9ydGFudDsgfVxuICAucC1zbS0wIHtcbiAgICBwYWRkaW5nOiAwICFpbXBvcnRhbnQ7IH1cbiAgLnB0LXNtLTAsXG4gIC5weS1zbS0wIHtcbiAgICBwYWRkaW5nLXRvcDogMCAhaW1wb3J0YW50OyB9XG4gIC5wci1zbS0wLFxuICAucHgtc20tMCB7XG4gICAgcGFkZGluZy1yaWdodDogMCAhaW1wb3J0YW50OyB9XG4gIC5wYi1zbS0wLFxuICAucHktc20tMCB7XG4gICAgcGFkZGluZy1ib3R0b206IDAgIWltcG9ydGFudDsgfVxuICAucGwtc20tMCxcbiAgLnB4LXNtLTAge1xuICAgIHBhZGRpbmctbGVmdDogMCAhaW1wb3J0YW50OyB9XG4gIC5wLXNtLTEge1xuICAgIHBhZGRpbmc6IDAuMjVyZW0gIWltcG9ydGFudDsgfVxuICAucHQtc20tMSxcbiAgLnB5LXNtLTEge1xuICAgIHBhZGRpbmctdG9wOiAwLjI1cmVtICFpbXBvcnRhbnQ7IH1cbiAgLnByLXNtLTEsXG4gIC5weC1zbS0xIHtcbiAgICBwYWRkaW5nLXJpZ2h0OiAwLjI1cmVtICFpbXBvcnRhbnQ7IH1cbiAgLnBiLXNtLTEsXG4gIC5weS1zbS0xIHtcbiAgICBwYWRkaW5nLWJvdHRvbTogMC4yNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wbC1zbS0xLFxuICAucHgtc20tMSB7XG4gICAgcGFkZGluZy1sZWZ0OiAwLjI1cmVtICFpbXBvcnRhbnQ7IH1cbiAgLnAtc20tMiB7XG4gICAgcGFkZGluZzogMC41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLnB0LXNtLTIsXG4gIC5weS1zbS0yIHtcbiAgICBwYWRkaW5nLXRvcDogMC41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLnByLXNtLTIsXG4gIC5weC1zbS0yIHtcbiAgICBwYWRkaW5nLXJpZ2h0OiAwLjVyZW0gIWltcG9ydGFudDsgfVxuICAucGItc20tMixcbiAgLnB5LXNtLTIge1xuICAgIHBhZGRpbmctYm90dG9tOiAwLjVyZW0gIWltcG9ydGFudDsgfVxuICAucGwtc20tMixcbiAgLnB4LXNtLTIge1xuICAgIHBhZGRpbmctbGVmdDogMC41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLnAtc20tMyB7XG4gICAgcGFkZGluZzogMXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wdC1zbS0zLFxuICAucHktc20tMyB7XG4gICAgcGFkZGluZy10b3A6IDFyZW0gIWltcG9ydGFudDsgfVxuICAucHItc20tMyxcbiAgLnB4LXNtLTMge1xuICAgIHBhZGRpbmctcmlnaHQ6IDFyZW0gIWltcG9ydGFudDsgfVxuICAucGItc20tMyxcbiAgLnB5LXNtLTMge1xuICAgIHBhZGRpbmctYm90dG9tOiAxcmVtICFpbXBvcnRhbnQ7IH1cbiAgLnBsLXNtLTMsXG4gIC5weC1zbS0zIHtcbiAgICBwYWRkaW5nLWxlZnQ6IDFyZW0gIWltcG9ydGFudDsgfVxuICAucC1zbS00IHtcbiAgICBwYWRkaW5nOiAxLjVyZW0gIWltcG9ydGFudDsgfVxuICAucHQtc20tNCxcbiAgLnB5LXNtLTQge1xuICAgIHBhZGRpbmctdG9wOiAxLjVyZW0gIWltcG9ydGFudDsgfVxuICAucHItc20tNCxcbiAgLnB4LXNtLTQge1xuICAgIHBhZGRpbmctcmlnaHQ6IDEuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wYi1zbS00LFxuICAucHktc20tNCB7XG4gICAgcGFkZGluZy1ib3R0b206IDEuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wbC1zbS00LFxuICAucHgtc20tNCB7XG4gICAgcGFkZGluZy1sZWZ0OiAxLjVyZW0gIWltcG9ydGFudDsgfVxuICAucC1zbS01IHtcbiAgICBwYWRkaW5nOiAzcmVtICFpbXBvcnRhbnQ7IH1cbiAgLnB0LXNtLTUsXG4gIC5weS1zbS01IHtcbiAgICBwYWRkaW5nLXRvcDogM3JlbSAhaW1wb3J0YW50OyB9XG4gIC5wci1zbS01LFxuICAucHgtc20tNSB7XG4gICAgcGFkZGluZy1yaWdodDogM3JlbSAhaW1wb3J0YW50OyB9XG4gIC5wYi1zbS01LFxuICAucHktc20tNSB7XG4gICAgcGFkZGluZy1ib3R0b206IDNyZW0gIWltcG9ydGFudDsgfVxuICAucGwtc20tNSxcbiAgLnB4LXNtLTUge1xuICAgIHBhZGRpbmctbGVmdDogM3JlbSAhaW1wb3J0YW50OyB9XG4gIC5tLXNtLW4xIHtcbiAgICBtYXJnaW46IC0wLjI1cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm10LXNtLW4xLFxuICAubXktc20tbjEge1xuICAgIG1hcmdpbi10b3A6IC0wLjI1cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1yLXNtLW4xLFxuICAubXgtc20tbjEge1xuICAgIG1hcmdpbi1yaWdodDogLTAuMjVyZW0gIWltcG9ydGFudDsgfVxuICAubWItc20tbjEsXG4gIC5teS1zbS1uMSB7XG4gICAgbWFyZ2luLWJvdHRvbTogLTAuMjVyZW0gIWltcG9ydGFudDsgfVxuICAubWwtc20tbjEsXG4gIC5teC1zbS1uMSB7XG4gICAgbWFyZ2luLWxlZnQ6IC0wLjI1cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm0tc20tbjIge1xuICAgIG1hcmdpbjogLTAuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tdC1zbS1uMixcbiAgLm15LXNtLW4yIHtcbiAgICBtYXJnaW4tdG9wOiAtMC41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1yLXNtLW4yLFxuICAubXgtc20tbjIge1xuICAgIG1hcmdpbi1yaWdodDogLTAuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tYi1zbS1uMixcbiAgLm15LXNtLW4yIHtcbiAgICBtYXJnaW4tYm90dG9tOiAtMC41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1sLXNtLW4yLFxuICAubXgtc20tbjIge1xuICAgIG1hcmdpbi1sZWZ0OiAtMC41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm0tc20tbjMge1xuICAgIG1hcmdpbjogLTFyZW0gIWltcG9ydGFudDsgfVxuICAubXQtc20tbjMsXG4gIC5teS1zbS1uMyB7XG4gICAgbWFyZ2luLXRvcDogLTFyZW0gIWltcG9ydGFudDsgfVxuICAubXItc20tbjMsXG4gIC5teC1zbS1uMyB7XG4gICAgbWFyZ2luLXJpZ2h0OiAtMXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tYi1zbS1uMyxcbiAgLm15LXNtLW4zIHtcbiAgICBtYXJnaW4tYm90dG9tOiAtMXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tbC1zbS1uMyxcbiAgLm14LXNtLW4zIHtcbiAgICBtYXJnaW4tbGVmdDogLTFyZW0gIWltcG9ydGFudDsgfVxuICAubS1zbS1uNCB7XG4gICAgbWFyZ2luOiAtMS41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm10LXNtLW40LFxuICAubXktc20tbjQge1xuICAgIG1hcmdpbi10b3A6IC0xLjVyZW0gIWltcG9ydGFudDsgfVxuICAubXItc20tbjQsXG4gIC5teC1zbS1uNCB7XG4gICAgbWFyZ2luLXJpZ2h0OiAtMS41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1iLXNtLW40LFxuICAubXktc20tbjQge1xuICAgIG1hcmdpbi1ib3R0b206IC0xLjVyZW0gIWltcG9ydGFudDsgfVxuICAubWwtc20tbjQsXG4gIC5teC1zbS1uNCB7XG4gICAgbWFyZ2luLWxlZnQ6IC0xLjVyZW0gIWltcG9ydGFudDsgfVxuICAubS1zbS1uNSB7XG4gICAgbWFyZ2luOiAtM3JlbSAhaW1wb3J0YW50OyB9XG4gIC5tdC1zbS1uNSxcbiAgLm15LXNtLW41IHtcbiAgICBtYXJnaW4tdG9wOiAtM3JlbSAhaW1wb3J0YW50OyB9XG4gIC5tci1zbS1uNSxcbiAgLm14LXNtLW41IHtcbiAgICBtYXJnaW4tcmlnaHQ6IC0zcmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1iLXNtLW41LFxuICAubXktc20tbjUge1xuICAgIG1hcmdpbi1ib3R0b206IC0zcmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1sLXNtLW41LFxuICAubXgtc20tbjUge1xuICAgIG1hcmdpbi1sZWZ0OiAtM3JlbSAhaW1wb3J0YW50OyB9XG4gIC5tLXNtLWF1dG8ge1xuICAgIG1hcmdpbjogYXV0byAhaW1wb3J0YW50OyB9XG4gIC5tdC1zbS1hdXRvLFxuICAubXktc20tYXV0byB7XG4gICAgbWFyZ2luLXRvcDogYXV0byAhaW1wb3J0YW50OyB9XG4gIC5tci1zbS1hdXRvLFxuICAubXgtc20tYXV0byB7XG4gICAgbWFyZ2luLXJpZ2h0OiBhdXRvICFpbXBvcnRhbnQ7IH1cbiAgLm1iLXNtLWF1dG8sXG4gIC5teS1zbS1hdXRvIHtcbiAgICBtYXJnaW4tYm90dG9tOiBhdXRvICFpbXBvcnRhbnQ7IH1cbiAgLm1sLXNtLWF1dG8sXG4gIC5teC1zbS1hdXRvIHtcbiAgICBtYXJnaW4tbGVmdDogYXV0byAhaW1wb3J0YW50OyB9IH1cblxuQG1lZGlhIChtaW4td2lkdGg6IDc2OHB4KSB7XG4gIC5tLW1kLTAge1xuICAgIG1hcmdpbjogMCAhaW1wb3J0YW50OyB9XG4gIC5tdC1tZC0wLFxuICAubXktbWQtMCB7XG4gICAgbWFyZ2luLXRvcDogMCAhaW1wb3J0YW50OyB9XG4gIC5tci1tZC0wLFxuICAubXgtbWQtMCB7XG4gICAgbWFyZ2luLXJpZ2h0OiAwICFpbXBvcnRhbnQ7IH1cbiAgLm1iLW1kLTAsXG4gIC5teS1tZC0wIHtcbiAgICBtYXJnaW4tYm90dG9tOiAwICFpbXBvcnRhbnQ7IH1cbiAgLm1sLW1kLTAsXG4gIC5teC1tZC0wIHtcbiAgICBtYXJnaW4tbGVmdDogMCAhaW1wb3J0YW50OyB9XG4gIC5tLW1kLTEge1xuICAgIG1hcmdpbjogMC4yNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tdC1tZC0xLFxuICAubXktbWQtMSB7XG4gICAgbWFyZ2luLXRvcDogMC4yNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tci1tZC0xLFxuICAubXgtbWQtMSB7XG4gICAgbWFyZ2luLXJpZ2h0OiAwLjI1cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1iLW1kLTEsXG4gIC5teS1tZC0xIHtcbiAgICBtYXJnaW4tYm90dG9tOiAwLjI1cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1sLW1kLTEsXG4gIC5teC1tZC0xIHtcbiAgICBtYXJnaW4tbGVmdDogMC4yNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tLW1kLTIge1xuICAgIG1hcmdpbjogMC41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm10LW1kLTIsXG4gIC5teS1tZC0yIHtcbiAgICBtYXJnaW4tdG9wOiAwLjVyZW0gIWltcG9ydGFudDsgfVxuICAubXItbWQtMixcbiAgLm14LW1kLTIge1xuICAgIG1hcmdpbi1yaWdodDogMC41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1iLW1kLTIsXG4gIC5teS1tZC0yIHtcbiAgICBtYXJnaW4tYm90dG9tOiAwLjVyZW0gIWltcG9ydGFudDsgfVxuICAubWwtbWQtMixcbiAgLm14LW1kLTIge1xuICAgIG1hcmdpbi1sZWZ0OiAwLjVyZW0gIWltcG9ydGFudDsgfVxuICAubS1tZC0zIHtcbiAgICBtYXJnaW46IDFyZW0gIWltcG9ydGFudDsgfVxuICAubXQtbWQtMyxcbiAgLm15LW1kLTMge1xuICAgIG1hcmdpbi10b3A6IDFyZW0gIWltcG9ydGFudDsgfVxuICAubXItbWQtMyxcbiAgLm14LW1kLTMge1xuICAgIG1hcmdpbi1yaWdodDogMXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tYi1tZC0zLFxuICAubXktbWQtMyB7XG4gICAgbWFyZ2luLWJvdHRvbTogMXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tbC1tZC0zLFxuICAubXgtbWQtMyB7XG4gICAgbWFyZ2luLWxlZnQ6IDFyZW0gIWltcG9ydGFudDsgfVxuICAubS1tZC00IHtcbiAgICBtYXJnaW46IDEuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tdC1tZC00LFxuICAubXktbWQtNCB7XG4gICAgbWFyZ2luLXRvcDogMS41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1yLW1kLTQsXG4gIC5teC1tZC00IHtcbiAgICBtYXJnaW4tcmlnaHQ6IDEuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tYi1tZC00LFxuICAubXktbWQtNCB7XG4gICAgbWFyZ2luLWJvdHRvbTogMS41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1sLW1kLTQsXG4gIC5teC1tZC00IHtcbiAgICBtYXJnaW4tbGVmdDogMS41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm0tbWQtNSB7XG4gICAgbWFyZ2luOiAzcmVtICFpbXBvcnRhbnQ7IH1cbiAgLm10LW1kLTUsXG4gIC5teS1tZC01IHtcbiAgICBtYXJnaW4tdG9wOiAzcmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1yLW1kLTUsXG4gIC5teC1tZC01IHtcbiAgICBtYXJnaW4tcmlnaHQ6IDNyZW0gIWltcG9ydGFudDsgfVxuICAubWItbWQtNSxcbiAgLm15LW1kLTUge1xuICAgIG1hcmdpbi1ib3R0b206IDNyZW0gIWltcG9ydGFudDsgfVxuICAubWwtbWQtNSxcbiAgLm14LW1kLTUge1xuICAgIG1hcmdpbi1sZWZ0OiAzcmVtICFpbXBvcnRhbnQ7IH1cbiAgLnAtbWQtMCB7XG4gICAgcGFkZGluZzogMCAhaW1wb3J0YW50OyB9XG4gIC5wdC1tZC0wLFxuICAucHktbWQtMCB7XG4gICAgcGFkZGluZy10b3A6IDAgIWltcG9ydGFudDsgfVxuICAucHItbWQtMCxcbiAgLnB4LW1kLTAge1xuICAgIHBhZGRpbmctcmlnaHQ6IDAgIWltcG9ydGFudDsgfVxuICAucGItbWQtMCxcbiAgLnB5LW1kLTAge1xuICAgIHBhZGRpbmctYm90dG9tOiAwICFpbXBvcnRhbnQ7IH1cbiAgLnBsLW1kLTAsXG4gIC5weC1tZC0wIHtcbiAgICBwYWRkaW5nLWxlZnQ6IDAgIWltcG9ydGFudDsgfVxuICAucC1tZC0xIHtcbiAgICBwYWRkaW5nOiAwLjI1cmVtICFpbXBvcnRhbnQ7IH1cbiAgLnB0LW1kLTEsXG4gIC5weS1tZC0xIHtcbiAgICBwYWRkaW5nLXRvcDogMC4yNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wci1tZC0xLFxuICAucHgtbWQtMSB7XG4gICAgcGFkZGluZy1yaWdodDogMC4yNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wYi1tZC0xLFxuICAucHktbWQtMSB7XG4gICAgcGFkZGluZy1ib3R0b206IDAuMjVyZW0gIWltcG9ydGFudDsgfVxuICAucGwtbWQtMSxcbiAgLnB4LW1kLTEge1xuICAgIHBhZGRpbmctbGVmdDogMC4yNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wLW1kLTIge1xuICAgIHBhZGRpbmc6IDAuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wdC1tZC0yLFxuICAucHktbWQtMiB7XG4gICAgcGFkZGluZy10b3A6IDAuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wci1tZC0yLFxuICAucHgtbWQtMiB7XG4gICAgcGFkZGluZy1yaWdodDogMC41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLnBiLW1kLTIsXG4gIC5weS1tZC0yIHtcbiAgICBwYWRkaW5nLWJvdHRvbTogMC41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLnBsLW1kLTIsXG4gIC5weC1tZC0yIHtcbiAgICBwYWRkaW5nLWxlZnQ6IDAuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wLW1kLTMge1xuICAgIHBhZGRpbmc6IDFyZW0gIWltcG9ydGFudDsgfVxuICAucHQtbWQtMyxcbiAgLnB5LW1kLTMge1xuICAgIHBhZGRpbmctdG9wOiAxcmVtICFpbXBvcnRhbnQ7IH1cbiAgLnByLW1kLTMsXG4gIC5weC1tZC0zIHtcbiAgICBwYWRkaW5nLXJpZ2h0OiAxcmVtICFpbXBvcnRhbnQ7IH1cbiAgLnBiLW1kLTMsXG4gIC5weS1tZC0zIHtcbiAgICBwYWRkaW5nLWJvdHRvbTogMXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wbC1tZC0zLFxuICAucHgtbWQtMyB7XG4gICAgcGFkZGluZy1sZWZ0OiAxcmVtICFpbXBvcnRhbnQ7IH1cbiAgLnAtbWQtNCB7XG4gICAgcGFkZGluZzogMS41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLnB0LW1kLTQsXG4gIC5weS1tZC00IHtcbiAgICBwYWRkaW5nLXRvcDogMS41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLnByLW1kLTQsXG4gIC5weC1tZC00IHtcbiAgICBwYWRkaW5nLXJpZ2h0OiAxLjVyZW0gIWltcG9ydGFudDsgfVxuICAucGItbWQtNCxcbiAgLnB5LW1kLTQge1xuICAgIHBhZGRpbmctYm90dG9tOiAxLjVyZW0gIWltcG9ydGFudDsgfVxuICAucGwtbWQtNCxcbiAgLnB4LW1kLTQge1xuICAgIHBhZGRpbmctbGVmdDogMS41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLnAtbWQtNSB7XG4gICAgcGFkZGluZzogM3JlbSAhaW1wb3J0YW50OyB9XG4gIC5wdC1tZC01LFxuICAucHktbWQtNSB7XG4gICAgcGFkZGluZy10b3A6IDNyZW0gIWltcG9ydGFudDsgfVxuICAucHItbWQtNSxcbiAgLnB4LW1kLTUge1xuICAgIHBhZGRpbmctcmlnaHQ6IDNyZW0gIWltcG9ydGFudDsgfVxuICAucGItbWQtNSxcbiAgLnB5LW1kLTUge1xuICAgIHBhZGRpbmctYm90dG9tOiAzcmVtICFpbXBvcnRhbnQ7IH1cbiAgLnBsLW1kLTUsXG4gIC5weC1tZC01IHtcbiAgICBwYWRkaW5nLWxlZnQ6IDNyZW0gIWltcG9ydGFudDsgfVxuICAubS1tZC1uMSB7XG4gICAgbWFyZ2luOiAtMC4yNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tdC1tZC1uMSxcbiAgLm15LW1kLW4xIHtcbiAgICBtYXJnaW4tdG9wOiAtMC4yNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tci1tZC1uMSxcbiAgLm14LW1kLW4xIHtcbiAgICBtYXJnaW4tcmlnaHQ6IC0wLjI1cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1iLW1kLW4xLFxuICAubXktbWQtbjEge1xuICAgIG1hcmdpbi1ib3R0b206IC0wLjI1cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1sLW1kLW4xLFxuICAubXgtbWQtbjEge1xuICAgIG1hcmdpbi1sZWZ0OiAtMC4yNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tLW1kLW4yIHtcbiAgICBtYXJnaW46IC0wLjVyZW0gIWltcG9ydGFudDsgfVxuICAubXQtbWQtbjIsXG4gIC5teS1tZC1uMiB7XG4gICAgbWFyZ2luLXRvcDogLTAuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tci1tZC1uMixcbiAgLm14LW1kLW4yIHtcbiAgICBtYXJnaW4tcmlnaHQ6IC0wLjVyZW0gIWltcG9ydGFudDsgfVxuICAubWItbWQtbjIsXG4gIC5teS1tZC1uMiB7XG4gICAgbWFyZ2luLWJvdHRvbTogLTAuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tbC1tZC1uMixcbiAgLm14LW1kLW4yIHtcbiAgICBtYXJnaW4tbGVmdDogLTAuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tLW1kLW4zIHtcbiAgICBtYXJnaW46IC0xcmVtICFpbXBvcnRhbnQ7IH1cbiAgLm10LW1kLW4zLFxuICAubXktbWQtbjMge1xuICAgIG1hcmdpbi10b3A6IC0xcmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1yLW1kLW4zLFxuICAubXgtbWQtbjMge1xuICAgIG1hcmdpbi1yaWdodDogLTFyZW0gIWltcG9ydGFudDsgfVxuICAubWItbWQtbjMsXG4gIC5teS1tZC1uMyB7XG4gICAgbWFyZ2luLWJvdHRvbTogLTFyZW0gIWltcG9ydGFudDsgfVxuICAubWwtbWQtbjMsXG4gIC5teC1tZC1uMyB7XG4gICAgbWFyZ2luLWxlZnQ6IC0xcmVtICFpbXBvcnRhbnQ7IH1cbiAgLm0tbWQtbjQge1xuICAgIG1hcmdpbjogLTEuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tdC1tZC1uNCxcbiAgLm15LW1kLW40IHtcbiAgICBtYXJnaW4tdG9wOiAtMS41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1yLW1kLW40LFxuICAubXgtbWQtbjQge1xuICAgIG1hcmdpbi1yaWdodDogLTEuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tYi1tZC1uNCxcbiAgLm15LW1kLW40IHtcbiAgICBtYXJnaW4tYm90dG9tOiAtMS41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1sLW1kLW40LFxuICAubXgtbWQtbjQge1xuICAgIG1hcmdpbi1sZWZ0OiAtMS41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm0tbWQtbjUge1xuICAgIG1hcmdpbjogLTNyZW0gIWltcG9ydGFudDsgfVxuICAubXQtbWQtbjUsXG4gIC5teS1tZC1uNSB7XG4gICAgbWFyZ2luLXRvcDogLTNyZW0gIWltcG9ydGFudDsgfVxuICAubXItbWQtbjUsXG4gIC5teC1tZC1uNSB7XG4gICAgbWFyZ2luLXJpZ2h0OiAtM3JlbSAhaW1wb3J0YW50OyB9XG4gIC5tYi1tZC1uNSxcbiAgLm15LW1kLW41IHtcbiAgICBtYXJnaW4tYm90dG9tOiAtM3JlbSAhaW1wb3J0YW50OyB9XG4gIC5tbC1tZC1uNSxcbiAgLm14LW1kLW41IHtcbiAgICBtYXJnaW4tbGVmdDogLTNyZW0gIWltcG9ydGFudDsgfVxuICAubS1tZC1hdXRvIHtcbiAgICBtYXJnaW46IGF1dG8gIWltcG9ydGFudDsgfVxuICAubXQtbWQtYXV0byxcbiAgLm15LW1kLWF1dG8ge1xuICAgIG1hcmdpbi10b3A6IGF1dG8gIWltcG9ydGFudDsgfVxuICAubXItbWQtYXV0byxcbiAgLm14LW1kLWF1dG8ge1xuICAgIG1hcmdpbi1yaWdodDogYXV0byAhaW1wb3J0YW50OyB9XG4gIC5tYi1tZC1hdXRvLFxuICAubXktbWQtYXV0byB7XG4gICAgbWFyZ2luLWJvdHRvbTogYXV0byAhaW1wb3J0YW50OyB9XG4gIC5tbC1tZC1hdXRvLFxuICAubXgtbWQtYXV0byB7XG4gICAgbWFyZ2luLWxlZnQ6IGF1dG8gIWltcG9ydGFudDsgfSB9XG5cbkBtZWRpYSAobWluLXdpZHRoOiA5OTJweCkge1xuICAubS1sZy0wIHtcbiAgICBtYXJnaW46IDAgIWltcG9ydGFudDsgfVxuICAubXQtbGctMCxcbiAgLm15LWxnLTAge1xuICAgIG1hcmdpbi10b3A6IDAgIWltcG9ydGFudDsgfVxuICAubXItbGctMCxcbiAgLm14LWxnLTAge1xuICAgIG1hcmdpbi1yaWdodDogMCAhaW1wb3J0YW50OyB9XG4gIC5tYi1sZy0wLFxuICAubXktbGctMCB7XG4gICAgbWFyZ2luLWJvdHRvbTogMCAhaW1wb3J0YW50OyB9XG4gIC5tbC1sZy0wLFxuICAubXgtbGctMCB7XG4gICAgbWFyZ2luLWxlZnQ6IDAgIWltcG9ydGFudDsgfVxuICAubS1sZy0xIHtcbiAgICBtYXJnaW46IDAuMjVyZW0gIWltcG9ydGFudDsgfVxuICAubXQtbGctMSxcbiAgLm15LWxnLTEge1xuICAgIG1hcmdpbi10b3A6IDAuMjVyZW0gIWltcG9ydGFudDsgfVxuICAubXItbGctMSxcbiAgLm14LWxnLTEge1xuICAgIG1hcmdpbi1yaWdodDogMC4yNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tYi1sZy0xLFxuICAubXktbGctMSB7XG4gICAgbWFyZ2luLWJvdHRvbTogMC4yNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tbC1sZy0xLFxuICAubXgtbGctMSB7XG4gICAgbWFyZ2luLWxlZnQ6IDAuMjVyZW0gIWltcG9ydGFudDsgfVxuICAubS1sZy0yIHtcbiAgICBtYXJnaW46IDAuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tdC1sZy0yLFxuICAubXktbGctMiB7XG4gICAgbWFyZ2luLXRvcDogMC41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1yLWxnLTIsXG4gIC5teC1sZy0yIHtcbiAgICBtYXJnaW4tcmlnaHQ6IDAuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tYi1sZy0yLFxuICAubXktbGctMiB7XG4gICAgbWFyZ2luLWJvdHRvbTogMC41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1sLWxnLTIsXG4gIC5teC1sZy0yIHtcbiAgICBtYXJnaW4tbGVmdDogMC41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm0tbGctMyB7XG4gICAgbWFyZ2luOiAxcmVtICFpbXBvcnRhbnQ7IH1cbiAgLm10LWxnLTMsXG4gIC5teS1sZy0zIHtcbiAgICBtYXJnaW4tdG9wOiAxcmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1yLWxnLTMsXG4gIC5teC1sZy0zIHtcbiAgICBtYXJnaW4tcmlnaHQ6IDFyZW0gIWltcG9ydGFudDsgfVxuICAubWItbGctMyxcbiAgLm15LWxnLTMge1xuICAgIG1hcmdpbi1ib3R0b206IDFyZW0gIWltcG9ydGFudDsgfVxuICAubWwtbGctMyxcbiAgLm14LWxnLTMge1xuICAgIG1hcmdpbi1sZWZ0OiAxcmVtICFpbXBvcnRhbnQ7IH1cbiAgLm0tbGctNCB7XG4gICAgbWFyZ2luOiAxLjVyZW0gIWltcG9ydGFudDsgfVxuICAubXQtbGctNCxcbiAgLm15LWxnLTQge1xuICAgIG1hcmdpbi10b3A6IDEuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tci1sZy00LFxuICAubXgtbGctNCB7XG4gICAgbWFyZ2luLXJpZ2h0OiAxLjVyZW0gIWltcG9ydGFudDsgfVxuICAubWItbGctNCxcbiAgLm15LWxnLTQge1xuICAgIG1hcmdpbi1ib3R0b206IDEuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tbC1sZy00LFxuICAubXgtbGctNCB7XG4gICAgbWFyZ2luLWxlZnQ6IDEuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tLWxnLTUge1xuICAgIG1hcmdpbjogM3JlbSAhaW1wb3J0YW50OyB9XG4gIC5tdC1sZy01LFxuICAubXktbGctNSB7XG4gICAgbWFyZ2luLXRvcDogM3JlbSAhaW1wb3J0YW50OyB9XG4gIC5tci1sZy01LFxuICAubXgtbGctNSB7XG4gICAgbWFyZ2luLXJpZ2h0OiAzcmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1iLWxnLTUsXG4gIC5teS1sZy01IHtcbiAgICBtYXJnaW4tYm90dG9tOiAzcmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1sLWxnLTUsXG4gIC5teC1sZy01IHtcbiAgICBtYXJnaW4tbGVmdDogM3JlbSAhaW1wb3J0YW50OyB9XG4gIC5wLWxnLTAge1xuICAgIHBhZGRpbmc6IDAgIWltcG9ydGFudDsgfVxuICAucHQtbGctMCxcbiAgLnB5LWxnLTAge1xuICAgIHBhZGRpbmctdG9wOiAwICFpbXBvcnRhbnQ7IH1cbiAgLnByLWxnLTAsXG4gIC5weC1sZy0wIHtcbiAgICBwYWRkaW5nLXJpZ2h0OiAwICFpbXBvcnRhbnQ7IH1cbiAgLnBiLWxnLTAsXG4gIC5weS1sZy0wIHtcbiAgICBwYWRkaW5nLWJvdHRvbTogMCAhaW1wb3J0YW50OyB9XG4gIC5wbC1sZy0wLFxuICAucHgtbGctMCB7XG4gICAgcGFkZGluZy1sZWZ0OiAwICFpbXBvcnRhbnQ7IH1cbiAgLnAtbGctMSB7XG4gICAgcGFkZGluZzogMC4yNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wdC1sZy0xLFxuICAucHktbGctMSB7XG4gICAgcGFkZGluZy10b3A6IDAuMjVyZW0gIWltcG9ydGFudDsgfVxuICAucHItbGctMSxcbiAgLnB4LWxnLTEge1xuICAgIHBhZGRpbmctcmlnaHQ6IDAuMjVyZW0gIWltcG9ydGFudDsgfVxuICAucGItbGctMSxcbiAgLnB5LWxnLTEge1xuICAgIHBhZGRpbmctYm90dG9tOiAwLjI1cmVtICFpbXBvcnRhbnQ7IH1cbiAgLnBsLWxnLTEsXG4gIC5weC1sZy0xIHtcbiAgICBwYWRkaW5nLWxlZnQ6IDAuMjVyZW0gIWltcG9ydGFudDsgfVxuICAucC1sZy0yIHtcbiAgICBwYWRkaW5nOiAwLjVyZW0gIWltcG9ydGFudDsgfVxuICAucHQtbGctMixcbiAgLnB5LWxnLTIge1xuICAgIHBhZGRpbmctdG9wOiAwLjVyZW0gIWltcG9ydGFudDsgfVxuICAucHItbGctMixcbiAgLnB4LWxnLTIge1xuICAgIHBhZGRpbmctcmlnaHQ6IDAuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wYi1sZy0yLFxuICAucHktbGctMiB7XG4gICAgcGFkZGluZy1ib3R0b206IDAuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wbC1sZy0yLFxuICAucHgtbGctMiB7XG4gICAgcGFkZGluZy1sZWZ0OiAwLjVyZW0gIWltcG9ydGFudDsgfVxuICAucC1sZy0zIHtcbiAgICBwYWRkaW5nOiAxcmVtICFpbXBvcnRhbnQ7IH1cbiAgLnB0LWxnLTMsXG4gIC5weS1sZy0zIHtcbiAgICBwYWRkaW5nLXRvcDogMXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wci1sZy0zLFxuICAucHgtbGctMyB7XG4gICAgcGFkZGluZy1yaWdodDogMXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wYi1sZy0zLFxuICAucHktbGctMyB7XG4gICAgcGFkZGluZy1ib3R0b206IDFyZW0gIWltcG9ydGFudDsgfVxuICAucGwtbGctMyxcbiAgLnB4LWxnLTMge1xuICAgIHBhZGRpbmctbGVmdDogMXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wLWxnLTQge1xuICAgIHBhZGRpbmc6IDEuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wdC1sZy00LFxuICAucHktbGctNCB7XG4gICAgcGFkZGluZy10b3A6IDEuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wci1sZy00LFxuICAucHgtbGctNCB7XG4gICAgcGFkZGluZy1yaWdodDogMS41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLnBiLWxnLTQsXG4gIC5weS1sZy00IHtcbiAgICBwYWRkaW5nLWJvdHRvbTogMS41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLnBsLWxnLTQsXG4gIC5weC1sZy00IHtcbiAgICBwYWRkaW5nLWxlZnQ6IDEuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wLWxnLTUge1xuICAgIHBhZGRpbmc6IDNyZW0gIWltcG9ydGFudDsgfVxuICAucHQtbGctNSxcbiAgLnB5LWxnLTUge1xuICAgIHBhZGRpbmctdG9wOiAzcmVtICFpbXBvcnRhbnQ7IH1cbiAgLnByLWxnLTUsXG4gIC5weC1sZy01IHtcbiAgICBwYWRkaW5nLXJpZ2h0OiAzcmVtICFpbXBvcnRhbnQ7IH1cbiAgLnBiLWxnLTUsXG4gIC5weS1sZy01IHtcbiAgICBwYWRkaW5nLWJvdHRvbTogM3JlbSAhaW1wb3J0YW50OyB9XG4gIC5wbC1sZy01LFxuICAucHgtbGctNSB7XG4gICAgcGFkZGluZy1sZWZ0OiAzcmVtICFpbXBvcnRhbnQ7IH1cbiAgLm0tbGctbjEge1xuICAgIG1hcmdpbjogLTAuMjVyZW0gIWltcG9ydGFudDsgfVxuICAubXQtbGctbjEsXG4gIC5teS1sZy1uMSB7XG4gICAgbWFyZ2luLXRvcDogLTAuMjVyZW0gIWltcG9ydGFudDsgfVxuICAubXItbGctbjEsXG4gIC5teC1sZy1uMSB7XG4gICAgbWFyZ2luLXJpZ2h0OiAtMC4yNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tYi1sZy1uMSxcbiAgLm15LWxnLW4xIHtcbiAgICBtYXJnaW4tYm90dG9tOiAtMC4yNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tbC1sZy1uMSxcbiAgLm14LWxnLW4xIHtcbiAgICBtYXJnaW4tbGVmdDogLTAuMjVyZW0gIWltcG9ydGFudDsgfVxuICAubS1sZy1uMiB7XG4gICAgbWFyZ2luOiAtMC41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm10LWxnLW4yLFxuICAubXktbGctbjIge1xuICAgIG1hcmdpbi10b3A6IC0wLjVyZW0gIWltcG9ydGFudDsgfVxuICAubXItbGctbjIsXG4gIC5teC1sZy1uMiB7XG4gICAgbWFyZ2luLXJpZ2h0OiAtMC41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1iLWxnLW4yLFxuICAubXktbGctbjIge1xuICAgIG1hcmdpbi1ib3R0b206IC0wLjVyZW0gIWltcG9ydGFudDsgfVxuICAubWwtbGctbjIsXG4gIC5teC1sZy1uMiB7XG4gICAgbWFyZ2luLWxlZnQ6IC0wLjVyZW0gIWltcG9ydGFudDsgfVxuICAubS1sZy1uMyB7XG4gICAgbWFyZ2luOiAtMXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tdC1sZy1uMyxcbiAgLm15LWxnLW4zIHtcbiAgICBtYXJnaW4tdG9wOiAtMXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tci1sZy1uMyxcbiAgLm14LWxnLW4zIHtcbiAgICBtYXJnaW4tcmlnaHQ6IC0xcmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1iLWxnLW4zLFxuICAubXktbGctbjMge1xuICAgIG1hcmdpbi1ib3R0b206IC0xcmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1sLWxnLW4zLFxuICAubXgtbGctbjMge1xuICAgIG1hcmdpbi1sZWZ0OiAtMXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tLWxnLW40IHtcbiAgICBtYXJnaW46IC0xLjVyZW0gIWltcG9ydGFudDsgfVxuICAubXQtbGctbjQsXG4gIC5teS1sZy1uNCB7XG4gICAgbWFyZ2luLXRvcDogLTEuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tci1sZy1uNCxcbiAgLm14LWxnLW40IHtcbiAgICBtYXJnaW4tcmlnaHQ6IC0xLjVyZW0gIWltcG9ydGFudDsgfVxuICAubWItbGctbjQsXG4gIC5teS1sZy1uNCB7XG4gICAgbWFyZ2luLWJvdHRvbTogLTEuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tbC1sZy1uNCxcbiAgLm14LWxnLW40IHtcbiAgICBtYXJnaW4tbGVmdDogLTEuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tLWxnLW41IHtcbiAgICBtYXJnaW46IC0zcmVtICFpbXBvcnRhbnQ7IH1cbiAgLm10LWxnLW41LFxuICAubXktbGctbjUge1xuICAgIG1hcmdpbi10b3A6IC0zcmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1yLWxnLW41LFxuICAubXgtbGctbjUge1xuICAgIG1hcmdpbi1yaWdodDogLTNyZW0gIWltcG9ydGFudDsgfVxuICAubWItbGctbjUsXG4gIC5teS1sZy1uNSB7XG4gICAgbWFyZ2luLWJvdHRvbTogLTNyZW0gIWltcG9ydGFudDsgfVxuICAubWwtbGctbjUsXG4gIC5teC1sZy1uNSB7XG4gICAgbWFyZ2luLWxlZnQ6IC0zcmVtICFpbXBvcnRhbnQ7IH1cbiAgLm0tbGctYXV0byB7XG4gICAgbWFyZ2luOiBhdXRvICFpbXBvcnRhbnQ7IH1cbiAgLm10LWxnLWF1dG8sXG4gIC5teS1sZy1hdXRvIHtcbiAgICBtYXJnaW4tdG9wOiBhdXRvICFpbXBvcnRhbnQ7IH1cbiAgLm1yLWxnLWF1dG8sXG4gIC5teC1sZy1hdXRvIHtcbiAgICBtYXJnaW4tcmlnaHQ6IGF1dG8gIWltcG9ydGFudDsgfVxuICAubWItbGctYXV0byxcbiAgLm15LWxnLWF1dG8ge1xuICAgIG1hcmdpbi1ib3R0b206IGF1dG8gIWltcG9ydGFudDsgfVxuICAubWwtbGctYXV0byxcbiAgLm14LWxnLWF1dG8ge1xuICAgIG1hcmdpbi1sZWZ0OiBhdXRvICFpbXBvcnRhbnQ7IH0gfVxuXG5AbWVkaWEgKG1pbi13aWR0aDogMTIwMHB4KSB7XG4gIC5tLXhsLTAge1xuICAgIG1hcmdpbjogMCAhaW1wb3J0YW50OyB9XG4gIC5tdC14bC0wLFxuICAubXkteGwtMCB7XG4gICAgbWFyZ2luLXRvcDogMCAhaW1wb3J0YW50OyB9XG4gIC5tci14bC0wLFxuICAubXgteGwtMCB7XG4gICAgbWFyZ2luLXJpZ2h0OiAwICFpbXBvcnRhbnQ7IH1cbiAgLm1iLXhsLTAsXG4gIC5teS14bC0wIHtcbiAgICBtYXJnaW4tYm90dG9tOiAwICFpbXBvcnRhbnQ7IH1cbiAgLm1sLXhsLTAsXG4gIC5teC14bC0wIHtcbiAgICBtYXJnaW4tbGVmdDogMCAhaW1wb3J0YW50OyB9XG4gIC5tLXhsLTEge1xuICAgIG1hcmdpbjogMC4yNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tdC14bC0xLFxuICAubXkteGwtMSB7XG4gICAgbWFyZ2luLXRvcDogMC4yNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tci14bC0xLFxuICAubXgteGwtMSB7XG4gICAgbWFyZ2luLXJpZ2h0OiAwLjI1cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1iLXhsLTEsXG4gIC5teS14bC0xIHtcbiAgICBtYXJnaW4tYm90dG9tOiAwLjI1cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1sLXhsLTEsXG4gIC5teC14bC0xIHtcbiAgICBtYXJnaW4tbGVmdDogMC4yNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tLXhsLTIge1xuICAgIG1hcmdpbjogMC41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm10LXhsLTIsXG4gIC5teS14bC0yIHtcbiAgICBtYXJnaW4tdG9wOiAwLjVyZW0gIWltcG9ydGFudDsgfVxuICAubXIteGwtMixcbiAgLm14LXhsLTIge1xuICAgIG1hcmdpbi1yaWdodDogMC41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1iLXhsLTIsXG4gIC5teS14bC0yIHtcbiAgICBtYXJnaW4tYm90dG9tOiAwLjVyZW0gIWltcG9ydGFudDsgfVxuICAubWwteGwtMixcbiAgLm14LXhsLTIge1xuICAgIG1hcmdpbi1sZWZ0OiAwLjVyZW0gIWltcG9ydGFudDsgfVxuICAubS14bC0zIHtcbiAgICBtYXJnaW46IDFyZW0gIWltcG9ydGFudDsgfVxuICAubXQteGwtMyxcbiAgLm15LXhsLTMge1xuICAgIG1hcmdpbi10b3A6IDFyZW0gIWltcG9ydGFudDsgfVxuICAubXIteGwtMyxcbiAgLm14LXhsLTMge1xuICAgIG1hcmdpbi1yaWdodDogMXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tYi14bC0zLFxuICAubXkteGwtMyB7XG4gICAgbWFyZ2luLWJvdHRvbTogMXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tbC14bC0zLFxuICAubXgteGwtMyB7XG4gICAgbWFyZ2luLWxlZnQ6IDFyZW0gIWltcG9ydGFudDsgfVxuICAubS14bC00IHtcbiAgICBtYXJnaW46IDEuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tdC14bC00LFxuICAubXkteGwtNCB7XG4gICAgbWFyZ2luLXRvcDogMS41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1yLXhsLTQsXG4gIC5teC14bC00IHtcbiAgICBtYXJnaW4tcmlnaHQ6IDEuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tYi14bC00LFxuICAubXkteGwtNCB7XG4gICAgbWFyZ2luLWJvdHRvbTogMS41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1sLXhsLTQsXG4gIC5teC14bC00IHtcbiAgICBtYXJnaW4tbGVmdDogMS41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm0teGwtNSB7XG4gICAgbWFyZ2luOiAzcmVtICFpbXBvcnRhbnQ7IH1cbiAgLm10LXhsLTUsXG4gIC5teS14bC01IHtcbiAgICBtYXJnaW4tdG9wOiAzcmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1yLXhsLTUsXG4gIC5teC14bC01IHtcbiAgICBtYXJnaW4tcmlnaHQ6IDNyZW0gIWltcG9ydGFudDsgfVxuICAubWIteGwtNSxcbiAgLm15LXhsLTUge1xuICAgIG1hcmdpbi1ib3R0b206IDNyZW0gIWltcG9ydGFudDsgfVxuICAubWwteGwtNSxcbiAgLm14LXhsLTUge1xuICAgIG1hcmdpbi1sZWZ0OiAzcmVtICFpbXBvcnRhbnQ7IH1cbiAgLnAteGwtMCB7XG4gICAgcGFkZGluZzogMCAhaW1wb3J0YW50OyB9XG4gIC5wdC14bC0wLFxuICAucHkteGwtMCB7XG4gICAgcGFkZGluZy10b3A6IDAgIWltcG9ydGFudDsgfVxuICAucHIteGwtMCxcbiAgLnB4LXhsLTAge1xuICAgIHBhZGRpbmctcmlnaHQ6IDAgIWltcG9ydGFudDsgfVxuICAucGIteGwtMCxcbiAgLnB5LXhsLTAge1xuICAgIHBhZGRpbmctYm90dG9tOiAwICFpbXBvcnRhbnQ7IH1cbiAgLnBsLXhsLTAsXG4gIC5weC14bC0wIHtcbiAgICBwYWRkaW5nLWxlZnQ6IDAgIWltcG9ydGFudDsgfVxuICAucC14bC0xIHtcbiAgICBwYWRkaW5nOiAwLjI1cmVtICFpbXBvcnRhbnQ7IH1cbiAgLnB0LXhsLTEsXG4gIC5weS14bC0xIHtcbiAgICBwYWRkaW5nLXRvcDogMC4yNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wci14bC0xLFxuICAucHgteGwtMSB7XG4gICAgcGFkZGluZy1yaWdodDogMC4yNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wYi14bC0xLFxuICAucHkteGwtMSB7XG4gICAgcGFkZGluZy1ib3R0b206IDAuMjVyZW0gIWltcG9ydGFudDsgfVxuICAucGwteGwtMSxcbiAgLnB4LXhsLTEge1xuICAgIHBhZGRpbmctbGVmdDogMC4yNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wLXhsLTIge1xuICAgIHBhZGRpbmc6IDAuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wdC14bC0yLFxuICAucHkteGwtMiB7XG4gICAgcGFkZGluZy10b3A6IDAuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wci14bC0yLFxuICAucHgteGwtMiB7XG4gICAgcGFkZGluZy1yaWdodDogMC41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLnBiLXhsLTIsXG4gIC5weS14bC0yIHtcbiAgICBwYWRkaW5nLWJvdHRvbTogMC41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLnBsLXhsLTIsXG4gIC5weC14bC0yIHtcbiAgICBwYWRkaW5nLWxlZnQ6IDAuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wLXhsLTMge1xuICAgIHBhZGRpbmc6IDFyZW0gIWltcG9ydGFudDsgfVxuICAucHQteGwtMyxcbiAgLnB5LXhsLTMge1xuICAgIHBhZGRpbmctdG9wOiAxcmVtICFpbXBvcnRhbnQ7IH1cbiAgLnByLXhsLTMsXG4gIC5weC14bC0zIHtcbiAgICBwYWRkaW5nLXJpZ2h0OiAxcmVtICFpbXBvcnRhbnQ7IH1cbiAgLnBiLXhsLTMsXG4gIC5weS14bC0zIHtcbiAgICBwYWRkaW5nLWJvdHRvbTogMXJlbSAhaW1wb3J0YW50OyB9XG4gIC5wbC14bC0zLFxuICAucHgteGwtMyB7XG4gICAgcGFkZGluZy1sZWZ0OiAxcmVtICFpbXBvcnRhbnQ7IH1cbiAgLnAteGwtNCB7XG4gICAgcGFkZGluZzogMS41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLnB0LXhsLTQsXG4gIC5weS14bC00IHtcbiAgICBwYWRkaW5nLXRvcDogMS41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLnByLXhsLTQsXG4gIC5weC14bC00IHtcbiAgICBwYWRkaW5nLXJpZ2h0OiAxLjVyZW0gIWltcG9ydGFudDsgfVxuICAucGIteGwtNCxcbiAgLnB5LXhsLTQge1xuICAgIHBhZGRpbmctYm90dG9tOiAxLjVyZW0gIWltcG9ydGFudDsgfVxuICAucGwteGwtNCxcbiAgLnB4LXhsLTQge1xuICAgIHBhZGRpbmctbGVmdDogMS41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLnAteGwtNSB7XG4gICAgcGFkZGluZzogM3JlbSAhaW1wb3J0YW50OyB9XG4gIC5wdC14bC01LFxuICAucHkteGwtNSB7XG4gICAgcGFkZGluZy10b3A6IDNyZW0gIWltcG9ydGFudDsgfVxuICAucHIteGwtNSxcbiAgLnB4LXhsLTUge1xuICAgIHBhZGRpbmctcmlnaHQ6IDNyZW0gIWltcG9ydGFudDsgfVxuICAucGIteGwtNSxcbiAgLnB5LXhsLTUge1xuICAgIHBhZGRpbmctYm90dG9tOiAzcmVtICFpbXBvcnRhbnQ7IH1cbiAgLnBsLXhsLTUsXG4gIC5weC14bC01IHtcbiAgICBwYWRkaW5nLWxlZnQ6IDNyZW0gIWltcG9ydGFudDsgfVxuICAubS14bC1uMSB7XG4gICAgbWFyZ2luOiAtMC4yNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tdC14bC1uMSxcbiAgLm15LXhsLW4xIHtcbiAgICBtYXJnaW4tdG9wOiAtMC4yNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tci14bC1uMSxcbiAgLm14LXhsLW4xIHtcbiAgICBtYXJnaW4tcmlnaHQ6IC0wLjI1cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1iLXhsLW4xLFxuICAubXkteGwtbjEge1xuICAgIG1hcmdpbi1ib3R0b206IC0wLjI1cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1sLXhsLW4xLFxuICAubXgteGwtbjEge1xuICAgIG1hcmdpbi1sZWZ0OiAtMC4yNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tLXhsLW4yIHtcbiAgICBtYXJnaW46IC0wLjVyZW0gIWltcG9ydGFudDsgfVxuICAubXQteGwtbjIsXG4gIC5teS14bC1uMiB7XG4gICAgbWFyZ2luLXRvcDogLTAuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tci14bC1uMixcbiAgLm14LXhsLW4yIHtcbiAgICBtYXJnaW4tcmlnaHQ6IC0wLjVyZW0gIWltcG9ydGFudDsgfVxuICAubWIteGwtbjIsXG4gIC5teS14bC1uMiB7XG4gICAgbWFyZ2luLWJvdHRvbTogLTAuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tbC14bC1uMixcbiAgLm14LXhsLW4yIHtcbiAgICBtYXJnaW4tbGVmdDogLTAuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tLXhsLW4zIHtcbiAgICBtYXJnaW46IC0xcmVtICFpbXBvcnRhbnQ7IH1cbiAgLm10LXhsLW4zLFxuICAubXkteGwtbjMge1xuICAgIG1hcmdpbi10b3A6IC0xcmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1yLXhsLW4zLFxuICAubXgteGwtbjMge1xuICAgIG1hcmdpbi1yaWdodDogLTFyZW0gIWltcG9ydGFudDsgfVxuICAubWIteGwtbjMsXG4gIC5teS14bC1uMyB7XG4gICAgbWFyZ2luLWJvdHRvbTogLTFyZW0gIWltcG9ydGFudDsgfVxuICAubWwteGwtbjMsXG4gIC5teC14bC1uMyB7XG4gICAgbWFyZ2luLWxlZnQ6IC0xcmVtICFpbXBvcnRhbnQ7IH1cbiAgLm0teGwtbjQge1xuICAgIG1hcmdpbjogLTEuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tdC14bC1uNCxcbiAgLm15LXhsLW40IHtcbiAgICBtYXJnaW4tdG9wOiAtMS41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1yLXhsLW40LFxuICAubXgteGwtbjQge1xuICAgIG1hcmdpbi1yaWdodDogLTEuNXJlbSAhaW1wb3J0YW50OyB9XG4gIC5tYi14bC1uNCxcbiAgLm15LXhsLW40IHtcbiAgICBtYXJnaW4tYm90dG9tOiAtMS41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm1sLXhsLW40LFxuICAubXgteGwtbjQge1xuICAgIG1hcmdpbi1sZWZ0OiAtMS41cmVtICFpbXBvcnRhbnQ7IH1cbiAgLm0teGwtbjUge1xuICAgIG1hcmdpbjogLTNyZW0gIWltcG9ydGFudDsgfVxuICAubXQteGwtbjUsXG4gIC5teS14bC1uNSB7XG4gICAgbWFyZ2luLXRvcDogLTNyZW0gIWltcG9ydGFudDsgfVxuICAubXIteGwtbjUsXG4gIC5teC14bC1uNSB7XG4gICAgbWFyZ2luLXJpZ2h0OiAtM3JlbSAhaW1wb3J0YW50OyB9XG4gIC5tYi14bC1uNSxcbiAgLm15LXhsLW41IHtcbiAgICBtYXJnaW4tYm90dG9tOiAtM3JlbSAhaW1wb3J0YW50OyB9XG4gIC5tbC14bC1uNSxcbiAgLm14LXhsLW41IHtcbiAgICBtYXJnaW4tbGVmdDogLTNyZW0gIWltcG9ydGFudDsgfVxuICAubS14bC1hdXRvIHtcbiAgICBtYXJnaW46IGF1dG8gIWltcG9ydGFudDsgfVxuICAubXQteGwtYXV0byxcbiAgLm15LXhsLWF1dG8ge1xuICAgIG1hcmdpbi10b3A6IGF1dG8gIWltcG9ydGFudDsgfVxuICAubXIteGwtYXV0byxcbiAgLm14LXhsLWF1dG8ge1xuICAgIG1hcmdpbi1yaWdodDogYXV0byAhaW1wb3J0YW50OyB9XG4gIC5tYi14bC1hdXRvLFxuICAubXkteGwtYXV0byB7XG4gICAgbWFyZ2luLWJvdHRvbTogYXV0byAhaW1wb3J0YW50OyB9XG4gIC5tbC14bC1hdXRvLFxuICAubXgteGwtYXV0byB7XG4gICAgbWFyZ2luLWxlZnQ6IGF1dG8gIWltcG9ydGFudDsgfSB9XG5cbi5zdHJldGNoZWQtbGluazo6YWZ0ZXIge1xuICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gIHRvcDogMDtcbiAgcmlnaHQ6IDA7XG4gIGJvdHRvbTogMDtcbiAgbGVmdDogMDtcbiAgei1pbmRleDogMTtcbiAgcG9pbnRlci1ldmVudHM6IGF1dG87XG4gIGNvbnRlbnQ6IFwiXCI7XG4gIGJhY2tncm91bmQtY29sb3I6IHJnYmEoMCwgMCwgMCwgMCk7IH1cblxuLnRleHQtbW9ub3NwYWNlIHtcbiAgZm9udC1mYW1pbHk6IFNGTW9uby1SZWd1bGFyLCBNZW5sbywgTW9uYWNvLCBDb25zb2xhcywgXCJMaWJlcmF0aW9uIE1vbm9cIiwgXCJDb3VyaWVyIE5ld1wiLCBtb25vc3BhY2UgIWltcG9ydGFudDsgfVxuXG4udGV4dC1qdXN0aWZ5IHtcbiAgdGV4dC1hbGlnbjoganVzdGlmeSAhaW1wb3J0YW50OyB9XG5cbi50ZXh0LXdyYXAge1xuICB3aGl0ZS1zcGFjZTogbm9ybWFsICFpbXBvcnRhbnQ7IH1cblxuLnRleHQtbm93cmFwIHtcbiAgd2hpdGUtc3BhY2U6IG5vd3JhcCAhaW1wb3J0YW50OyB9XG5cbi50ZXh0LXRydW5jYXRlIHtcbiAgb3ZlcmZsb3c6IGhpZGRlbjtcbiAgdGV4dC1vdmVyZmxvdzogZWxsaXBzaXM7XG4gIHdoaXRlLXNwYWNlOiBub3dyYXA7IH1cblxuLnRleHQtbGVmdCB7XG4gIHRleHQtYWxpZ246IGxlZnQgIWltcG9ydGFudDsgfVxuXG4udGV4dC1yaWdodCB7XG4gIHRleHQtYWxpZ246IHJpZ2h0ICFpbXBvcnRhbnQ7IH1cblxuLnRleHQtY2VudGVyIHtcbiAgdGV4dC1hbGlnbjogY2VudGVyICFpbXBvcnRhbnQ7IH1cblxuQG1lZGlhIChtaW4td2lkdGg6IDU3NnB4KSB7XG4gIC50ZXh0LXNtLWxlZnQge1xuICAgIHRleHQtYWxpZ246IGxlZnQgIWltcG9ydGFudDsgfVxuICAudGV4dC1zbS1yaWdodCB7XG4gICAgdGV4dC1hbGlnbjogcmlnaHQgIWltcG9ydGFudDsgfVxuICAudGV4dC1zbS1jZW50ZXIge1xuICAgIHRleHQtYWxpZ246IGNlbnRlciAhaW1wb3J0YW50OyB9IH1cblxuQG1lZGlhIChtaW4td2lkdGg6IDc2OHB4KSB7XG4gIC50ZXh0LW1kLWxlZnQge1xuICAgIHRleHQtYWxpZ246IGxlZnQgIWltcG9ydGFudDsgfVxuICAudGV4dC1tZC1yaWdodCB7XG4gICAgdGV4dC1hbGlnbjogcmlnaHQgIWltcG9ydGFudDsgfVxuICAudGV4dC1tZC1jZW50ZXIge1xuICAgIHRleHQtYWxpZ246IGNlbnRlciAhaW1wb3J0YW50OyB9IH1cblxuQG1lZGlhIChtaW4td2lkdGg6IDk5MnB4KSB7XG4gIC50ZXh0LWxnLWxlZnQge1xuICAgIHRleHQtYWxpZ246IGxlZnQgIWltcG9ydGFudDsgfVxuICAudGV4dC1sZy1yaWdodCB7XG4gICAgdGV4dC1hbGlnbjogcmlnaHQgIWltcG9ydGFudDsgfVxuICAudGV4dC1sZy1jZW50ZXIge1xuICAgIHRleHQtYWxpZ246IGNlbnRlciAhaW1wb3J0YW50OyB9IH1cblxuQG1lZGlhIChtaW4td2lkdGg6IDEyMDBweCkge1xuICAudGV4dC14bC1sZWZ0IHtcbiAgICB0ZXh0LWFsaWduOiBsZWZ0ICFpbXBvcnRhbnQ7IH1cbiAgLnRleHQteGwtcmlnaHQge1xuICAgIHRleHQtYWxpZ246IHJpZ2h0ICFpbXBvcnRhbnQ7IH1cbiAgLnRleHQteGwtY2VudGVyIHtcbiAgICB0ZXh0LWFsaWduOiBjZW50ZXIgIWltcG9ydGFudDsgfSB9XG5cbi50ZXh0LWxvd2VyY2FzZSB7XG4gIHRleHQtdHJhbnNmb3JtOiBsb3dlcmNhc2UgIWltcG9ydGFudDsgfVxuXG4udGV4dC11cHBlcmNhc2Uge1xuICB0ZXh0LXRyYW5zZm9ybTogdXBwZXJjYXNlICFpbXBvcnRhbnQ7IH1cblxuLnRleHQtY2FwaXRhbGl6ZSB7XG4gIHRleHQtdHJhbnNmb3JtOiBjYXBpdGFsaXplICFpbXBvcnRhbnQ7IH1cblxuLmZvbnQtd2VpZ2h0LWxpZ2h0IHtcbiAgZm9udC13ZWlnaHQ6IDMwMCAhaW1wb3J0YW50OyB9XG5cbi5mb250LXdlaWdodC1saWdodGVyIHtcbiAgZm9udC13ZWlnaHQ6IGxpZ2h0ZXIgIWltcG9ydGFudDsgfVxuXG4uZm9udC13ZWlnaHQtbm9ybWFsIHtcbiAgZm9udC13ZWlnaHQ6IDQwMCAhaW1wb3J0YW50OyB9XG5cbi5mb250LXdlaWdodC1ib2xkIHtcbiAgZm9udC13ZWlnaHQ6IDcwMCAhaW1wb3J0YW50OyB9XG5cbi5mb250LXdlaWdodC1ib2xkZXIge1xuICBmb250LXdlaWdodDogYm9sZGVyICFpbXBvcnRhbnQ7IH1cblxuLmZvbnQtaXRhbGljIHtcbiAgZm9udC1zdHlsZTogaXRhbGljICFpbXBvcnRhbnQ7IH1cblxuLnRleHQtd2hpdGUge1xuICBjb2xvcjogI2ZmZiAhaW1wb3J0YW50OyB9XG5cbi50ZXh0LXByaW1hcnkge1xuICBjb2xvcjogIzNGODRGQyAhaW1wb3J0YW50OyB9XG5cbmEudGV4dC1wcmltYXJ5OmhvdmVyLCBhLnRleHQtcHJpbWFyeTpmb2N1cyB7XG4gIGNvbG9yOiAjMDQ1OGViICFpbXBvcnRhbnQ7IH1cblxuLnRleHQtc2Vjb25kYXJ5IHtcbiAgY29sb3I6ICM3MjdGOTQgIWltcG9ydGFudDsgfVxuXG5hLnRleHQtc2Vjb25kYXJ5OmhvdmVyLCBhLnRleHQtc2Vjb25kYXJ5OmZvY3VzIHtcbiAgY29sb3I6ICM1MDVhNjkgIWltcG9ydGFudDsgfVxuXG4udGV4dC1zdWNjZXNzIHtcbiAgY29sb3I6ICMxREFCNDcgIWltcG9ydGFudDsgfVxuXG5hLnRleHQtc3VjY2Vzczpob3ZlciwgYS50ZXh0LXN1Y2Nlc3M6Zm9jdXMge1xuICBjb2xvcjogIzEyNmEyYyAhaW1wb3J0YW50OyB9XG5cbi50ZXh0LWluZm8ge1xuICBjb2xvcjogIzhBM0ZGQyAhaW1wb3J0YW50OyB9XG5cbmEudGV4dC1pbmZvOmhvdmVyLCBhLnRleHQtaW5mbzpmb2N1cyB7XG4gIGNvbG9yOiAjNWYwNGViICFpbXBvcnRhbnQ7IH1cblxuLnRleHQtd2FybmluZyB7XG4gIGNvbG9yOiAjRkNBRTNGICFpbXBvcnRhbnQ7IH1cblxuYS50ZXh0LXdhcm5pbmc6aG92ZXIsIGEudGV4dC13YXJuaW5nOmZvY3VzIHtcbiAgY29sb3I6ICNlYjhiMDQgIWltcG9ydGFudDsgfVxuXG4udGV4dC1kYW5nZXIge1xuICBjb2xvcjogI0ZDNDEzRiAhaW1wb3J0YW50OyB9XG5cbmEudGV4dC1kYW5nZXI6aG92ZXIsIGEudGV4dC1kYW5nZXI6Zm9jdXMge1xuICBjb2xvcjogI2ViMDYwNCAhaW1wb3J0YW50OyB9XG5cbi50ZXh0LWxpZ2h0IHtcbiAgY29sb3I6ICNmOGY5ZmEgIWltcG9ydGFudDsgfVxuXG5hLnRleHQtbGlnaHQ6aG92ZXIsIGEudGV4dC1saWdodDpmb2N1cyB7XG4gIGNvbG9yOiAjY2JkM2RhICFpbXBvcnRhbnQ7IH1cblxuLnRleHQtZGFyayB7XG4gIGNvbG9yOiAjMUUyMzJEICFpbXBvcnRhbnQ7IH1cblxuYS50ZXh0LWRhcms6aG92ZXIsIGEudGV4dC1kYXJrOmZvY3VzIHtcbiAgY29sb3I6IGJsYWNrICFpbXBvcnRhbnQ7IH1cblxuLnRleHQtYm9keSB7XG4gIGNvbG9yOiAjNTE1MTUxICFpbXBvcnRhbnQ7IH1cblxuLnRleHQtbXV0ZWQge1xuICBjb2xvcjogIzZjNzU3ZCAhaW1wb3J0YW50OyB9XG5cbi50ZXh0LWJsYWNrLTUwIHtcbiAgY29sb3I6IHJnYmEoMCwgMCwgMCwgMC41KSAhaW1wb3J0YW50OyB9XG5cbi50ZXh0LXdoaXRlLTUwIHtcbiAgY29sb3I6IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC41KSAhaW1wb3J0YW50OyB9XG5cbi50ZXh0LWhpZGUge1xuICBmb250OiAwLzAgYTtcbiAgY29sb3I6IHRyYW5zcGFyZW50O1xuICB0ZXh0LXNoYWRvdzogbm9uZTtcbiAgYmFja2dyb3VuZC1jb2xvcjogdHJhbnNwYXJlbnQ7XG4gIGJvcmRlcjogMDsgfVxuXG4udGV4dC1kZWNvcmF0aW9uLW5vbmUge1xuICB0ZXh0LWRlY29yYXRpb246IG5vbmUgIWltcG9ydGFudDsgfVxuXG4udGV4dC1icmVhayB7XG4gIHdvcmQtd3JhcDogYnJlYWstd29yZCAhaW1wb3J0YW50OyB9XG5cbi50ZXh0LXJlc2V0IHtcbiAgY29sb3I6IGluaGVyaXQgIWltcG9ydGFudDsgfVxuXG4udmlzaWJsZSB7XG4gIHZpc2liaWxpdHk6IHZpc2libGUgIWltcG9ydGFudDsgfVxuXG4uaW52aXNpYmxlIHtcbiAgdmlzaWJpbGl0eTogaGlkZGVuICFpbXBvcnRhbnQ7IH1cblxuQG1lZGlhIHByaW50IHtcbiAgKixcbiAgKjo6YmVmb3JlLFxuICAqOjphZnRlciB7XG4gICAgdGV4dC1zaGFkb3c6IG5vbmUgIWltcG9ydGFudDtcbiAgICBib3gtc2hhZG93OiBub25lICFpbXBvcnRhbnQ7IH1cbiAgYTpub3QoLmJ0bikge1xuICAgIHRleHQtZGVjb3JhdGlvbjogdW5kZXJsaW5lOyB9XG4gIGFiYnJbdGl0bGVdOjphZnRlciB7XG4gICAgY29udGVudDogXCIgKFwiIGF0dHIodGl0bGUpIFwiKVwiOyB9XG4gIHByZSB7XG4gICAgd2hpdGUtc3BhY2U6IHByZS13cmFwICFpbXBvcnRhbnQ7IH1cbiAgcHJlLFxuICBibG9ja3F1b3RlIHtcbiAgICBib3JkZXI6IDFweCBzb2xpZCAjYWRiNWJkO1xuICAgIHBhZ2UtYnJlYWstaW5zaWRlOiBhdm9pZDsgfVxuICB0aGVhZCB7XG4gICAgZGlzcGxheTogdGFibGUtaGVhZGVyLWdyb3VwOyB9XG4gIHRyLFxuICBpbWcge1xuICAgIHBhZ2UtYnJlYWstaW5zaWRlOiBhdm9pZDsgfVxuICBwLFxuICBoMixcbiAgaDMge1xuICAgIG9ycGhhbnM6IDM7XG4gICAgd2lkb3dzOiAzOyB9XG4gIGgyLFxuICBoMyB7XG4gICAgcGFnZS1icmVhay1hZnRlcjogYXZvaWQ7IH1cbiAgQHBhZ2Uge1xuICAgIHNpemU6IGEzOyB9XG4gIGJvZHkge1xuICAgIG1pbi13aWR0aDogOTkycHggIWltcG9ydGFudDsgfVxuICAuY29udGFpbmVyIHtcbiAgICBtaW4td2lkdGg6IDk5MnB4ICFpbXBvcnRhbnQ7IH1cbiAgLm5hdmJhciB7XG4gICAgZGlzcGxheTogbm9uZTsgfVxuICAuYmFkZ2Uge1xuICAgIGJvcmRlcjogMXB4IHNvbGlkICMwMDA7IH1cbiAgLnRhYmxlIHtcbiAgICBib3JkZXItY29sbGFwc2U6IGNvbGxhcHNlICFpbXBvcnRhbnQ7IH1cbiAgICAudGFibGUgdGQsXG4gICAgLnRhYmxlIHRoIHtcbiAgICAgIGJhY2tncm91bmQtY29sb3I6ICNmZmYgIWltcG9ydGFudDsgfVxuICAudGFibGUtYm9yZGVyZWQgdGgsXG4gIC50YWJsZS1ib3JkZXJlZCB0ZCB7XG4gICAgYm9yZGVyOiAxcHggc29saWQgI2RlZTJlNiAhaW1wb3J0YW50OyB9XG4gIC50YWJsZS1kYXJrIHtcbiAgICBjb2xvcjogaW5oZXJpdDsgfVxuICAgIC50YWJsZS1kYXJrIHRoLFxuICAgIC50YWJsZS1kYXJrIHRkLFxuICAgIC50YWJsZS1kYXJrIHRoZWFkIHRoLFxuICAgIC50YWJsZS1kYXJrIHRib2R5ICsgdGJvZHkge1xuICAgICAgYm9yZGVyLWNvbG9yOiAjZGVlMmU2OyB9XG4gIC50YWJsZSAudGhlYWQtZGFyayB0aCB7XG4gICAgY29sb3I6IGluaGVyaXQ7XG4gICAgYm9yZGVyLWNvbG9yOiAjZGVlMmU2OyB9IH1cblxuLmVhc2lvbi1jYXJkIHtcbiAgYm9yZGVyOiAxcHggc29saWQgI0QzRDNEMztcbiAgYmFja2dyb3VuZDogI2ZmZjtcbiAgbWFyZ2luLWJvdHRvbTogMzBweDsgfVxuICAuZWFzaW9uLWNhcmQgLmNhcmQtaGVhZGVyIHtcbiAgICBtaW4taGVpZ2h0OiA1N3B4O1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNGMEYxRjc7XG4gICAgZGlzcGxheTogZmxleDtcbiAgICBhbGlnbi1pdGVtczogY2VudGVyO1xuICAgIHBhZGRpbmc6IDhweCAzMnB4OyB9XG4gIC5lYXNpb24tY2FyZCAuY2FyZC1ib2R5IHtcbiAgICBwYWRkaW5nOiAyNHB4IDMycHg7IH1cbiAgICBAbWVkaWEgKG1heC13aWR0aDogNzY3Ljk4cHgpIHtcbiAgICAgIC5lYXNpb24tY2FyZCAuY2FyZC1ib2R5IHtcbiAgICAgICAgcGFkZGluZzogMTJweCAxOHB4OyB9IH1cblxuLmVhc2lvbi1jYXJkLWljb24ge1xuICBtYXJnaW4tcmlnaHQ6IDIwcHg7IH1cblxuLmVhc2lvbi1jYXJkLXRpdGxlIHtcbiAgZm9udC13ZWlnaHQ6IGJvbGQ7IH1cblxuLmVhc2lvbi1jYXJkLW1lbnUge1xuICBtYXJnaW4tbGVmdDogYXV0bzsgfVxuXG4uZWFzaW9uLWNhcmQtbWVudS1saW5rIHtcbiAgZGlzcGxheTogZmxleDtcbiAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAganVzdGlmeS1jb250ZW50OiBjZW50ZXI7XG4gIHdpZHRoOiAzMHB4O1xuICBoZWlnaHQ6IDMwcHg7XG4gIG1hcmdpbi1yaWdodDogLTE1cHg7IH1cbiAgLmVhc2lvbi1jYXJkLW1lbnUtbGluazo6YWZ0ZXIge1xuICAgIGNvbnRlbnQ6IFwiXCI7XG4gICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICAgIHdpZHRoOiAwO1xuICAgIGhlaWdodDogMDtcbiAgICBib3JkZXItbGVmdDogNXB4IHNvbGlkIHRyYW5zcGFyZW50O1xuICAgIGJvcmRlci1yaWdodDogNXB4IHNvbGlkIHRyYW5zcGFyZW50O1xuICAgIGJvcmRlci10b3A6IDVweCBzb2xpZCByZ2JhKDgxLCA4MSwgODEsIDAuOCk7IH1cbiAgLnRleHQtd2hpdGUgLmVhc2lvbi1jYXJkLW1lbnUtbGluazo6YWZ0ZXIge1xuICAgIGJvcmRlci10b3AtY29sb3I6ICNmZmY7IH1cblxuLmVhc2lvbi1jYXJkLWJvZHktY2hhcnQge1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIG1heC13aWR0aDogOTklOyB9XG4gIEBtZWRpYSAobWF4LXdpZHRoOiA3NjcuOThweCkge1xuICAgIC5lYXNpb24tY2FyZC1ib2R5LWNoYXJ0IHtcbiAgICAgIHBhZGRpbmc6IDEycHggNXB4OyB9IH1cblxuaDEge1xuICBmb250LWZhbWlseTogXCJOdW5pdG9cIiwgc2Fucy1zZXJpZjtcbiAgZm9udC13ZWlnaHQ6IG5vcm1hbDsgfVxuXG4uZGFzaC10aXRsZSB7XG4gIG1hcmdpbi1ib3R0b206IDMwcHg7IH1cblxuLmNvbnRlbnQtYW5jaG9yOjpiZWZvcmUge1xuICBkaXNwbGF5OiBibG9jaztcbiAgaGVpZ2h0OiA2cmVtO1xuICBtYXJnaW4tdG9wOiAtNnJlbTtcbiAgdmlzaWJpbGl0eTogaGlkZGVuO1xuICBjb250ZW50OiBcIlwiOyB9XG5cbi5jb250ZW50LWFuY2hvci1saW5rIHtcbiAgY29sb3I6ICMyOTI4Mjk7XG4gIG9wYWNpdHk6IC40NjtcbiAgZm9udC1zaXplOiAxOXB4O1xuICBtYXJnaW4tbGVmdDogN3B4OyB9XG5cbmJvZHkge1xuICBiYWNrZ3JvdW5kOiAjRTlFREY0OyB9XG5cbi5kYXNoIHtcbiAgZGlzcGxheTogZmxleDtcbiAgbWluLWhlaWdodDogMTAwdmg7IH1cblxuLmRhc2gtYXBwIHtcbiAgZGlzcGxheTogZmxleDtcbiAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcbiAgZmxleC1ncm93OiAyO1xuICBtYXJnaW4tdG9wOiA4NHB4OyB9XG4gIEBtZWRpYSAobWluLXdpZHRoOiA5OTJweCkge1xuICAgIC5kYXNoLWFwcCB7XG4gICAgICBtYXJnaW4tbGVmdDogMjM4cHg7IH1cbiAgICAgIC5kYXNoLWNvbXBhY3QgLmRhc2gtYXBwIHtcbiAgICAgICAgbWFyZ2luLWxlZnQ6IDA7IH0gfVxuXG4uZGFzaC1jb250ZW50IHtcbiAgZmxleC1ncm93OiAyO1xuICBwYWRkaW5nOiAyNXB4OyB9XG4gIEBtZWRpYSAobWF4LXdpZHRoOiA3NjcuOThweCkge1xuICAgIC5kYXNoLWNvbnRlbnQge1xuICAgICAgcGFkZGluZzogMTVweCAwcHg7IH0gfVxuXG4uZGFzaC1yb3cge1xuICBtYXJnaW4tYm90dG9tOiAzMHB4OyB9XG5cbi5mb3JtLXNjcmVlbiB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gIG1pbi1oZWlnaHQ6IDEwMHZoO1xuICBwYWRkaW5nLXRvcDogMTAwcHg7IH1cbiAgLmZvcm0tc2NyZWVuIC5lYXNpb24tbG9nbyB7XG4gICAgbWFyZ2luLWJvdHRvbTogNjBweDtcbiAgICBvcGFjaXR5OiAuOTsgfVxuICAgIC5mb3JtLXNjcmVlbiAuZWFzaW9uLWxvZ28gaSB7XG4gICAgICBjb2xvcjogIzUxNTE1MTsgfVxuXG4uYWNjb3VudC1kaWFsb2cge1xuICBtYXgtd2lkdGg6IDM2MHB4OyB9XG4gIEBtZWRpYSAobWluLXdpZHRoOiAxMjAwcHgpIHtcbiAgICAuYWNjb3VudC1kaWFsb2cge1xuICAgICAgbWluLXdpZHRoOiAzNjBweDsgfSB9XG5cbi5hY2NvdW50LWRpYWxvZy1hY3Rpb25zIHtcbiAgZGlzcGxheTogZmxleDtcbiAgZmxleC1kaXJlY3Rpb246IHJvdztcbiAgYWxpZ24taXRlbXM6IGNlbnRlcjsgfVxuXG4uYWNjb3VudC1kaWFsb2ctbGluayB7XG4gIG1hcmdpbi1sZWZ0OiAxNXB4O1xuICBmb250LXNpemU6IDE0cHg7XG4gIGNvbG9yOiByZ2JhKDgxLCA4MSwgODEsIDAuOCk7IH1cbiAgLmFjY291bnQtZGlhbG9nLWxpbms6aG92ZXIge1xuICAgIGNvbG9yOiAjNTE1MTUxO1xuICAgIHRleHQtZGVjb3JhdGlvbjogbm9uZTsgfVxuXG4uZGFzaC1uYXYge1xuICBtaW4td2lkdGg6IDIzOHB4O1xuICBwb3NpdGlvbjogZml4ZWQ7XG4gIGxlZnQ6IDA7XG4gIHRvcDogMDtcbiAgYm90dG9tOiAwO1xuICBvdmVyZmxvdzogYXV0bzsgfVxuICAuZGFzaC1jb21wYWN0IC5kYXNoLW5hdiB7XG4gICAgZGlzcGxheTogbm9uZTsgfVxuICAuZGFzaC1uYXY6Oi13ZWJraXQtc2Nyb2xsYmFyIHtcbiAgICB3aWR0aDogMDtcbiAgICBiYWNrZ3JvdW5kOiB0cmFuc3BhcmVudDsgfVxuICBAbWVkaWEgKG1heC13aWR0aDogOTkxLjk4cHgpIHtcbiAgICAuZGFzaC1uYXYge1xuICAgICAgZGlzcGxheTogbm9uZTtcbiAgICAgIHBvc2l0aW9uOiBmaXhlZDtcbiAgICAgIHRvcDogMDtcbiAgICAgIHJpZ2h0OiAwO1xuICAgICAgbGVmdDogMDtcbiAgICAgIGJvdHRvbTogMDtcbiAgICAgIHotaW5kZXg6IDEwNzA7IH1cbiAgICAgIC5kYXNoLW5hdi5tb2JpbGUtc2hvdyB7XG4gICAgICAgIGRpc3BsYXk6IGJsb2NrOyB9IH1cbiAgLmRhc2gtbmF2IGhlYWRlciB7XG4gICAgbWluLWhlaWdodDogODRweDtcbiAgICBwYWRkaW5nOiA4cHggMjdweDtcbiAgICBkaXNwbGF5OiBmbGV4O1xuICAgIGp1c3RpZnktY29udGVudDogY2VudGVyO1xuICAgIGFsaWduLWl0ZW1zOiBjZW50ZXI7IH1cbiAgICAuZGFzaC1uYXYgaGVhZGVyIC5tZW51LXRvZ2dsZSB7XG4gICAgICBkaXNwbGF5OiBub25lO1xuICAgICAgbWFyZ2luLXJpZ2h0OiBhdXRvOyB9XG4gICAgICBAbWVkaWEgKG1heC13aWR0aDogOTkxLjk4cHgpIHtcbiAgICAgICAgLmRhc2gtbmF2IGhlYWRlciAubWVudS10b2dnbGUge1xuICAgICAgICAgIGRpc3BsYXk6IGZsZXg7IH0gfVxuICAgIC5kYXNoLW5hdiBoZWFkZXIgLmVhc2lvbi1sb2dvIHtcbiAgICAgIG1hcmdpbi1yaWdodDogYXV0bztcbiAgICAgIHBhZGRpbmctcmlnaHQ6IDQycHg7IH1cbiAgLmRhc2gtbmF2IGEge1xuICAgIGNvbG9yOiAjNTE1MTUxOyB9XG4gICAgLmRhc2gtbmF2IGE6aG92ZXIge1xuICAgICAgdGV4dC1kZWNvcmF0aW9uOiBub25lOyB9XG4gIC5kYXNoLW5hdi5kYXNoLW5hdi1kYXJrIHtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjMTgxRjJDOyB9XG4gICAgLmRhc2gtbmF2LmRhc2gtbmF2LWRhcmsgYSB7XG4gICAgICBjb2xvcjogI2ZmZjsgfVxuXG4uZWFzaW9uLWxvZ28ge1xuICBmb250LWZhbWlseTogXCJOdW5pdG9cIiwgc2Fucy1zZXJpZjtcbiAgZm9udC13ZWlnaHQ6IGJvbGQ7XG4gIGZvbnQtc2l6ZTogMjBweDtcbiAgZGlzcGxheTogZmxleDtcbiAgY29sb3I6ICM1MTUxNTE7XG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7IH1cbiAgLmVhc2lvbi1sb2dvOmZvY3VzLCAuZWFzaW9uLWxvZ286YWN0aXZlLCAuZWFzaW9uLWxvZ286aG92ZXIge1xuICAgIGNvbG9yOiAjNTE1MTUxO1xuICAgIHRleHQtZGVjb3JhdGlvbjogbm9uZTsgfVxuICAuZWFzaW9uLWxvZ28gaSB7XG4gICAgY29sb3I6ICM1NzYxNzc7XG4gICAgZm9udC1zaXplOiAyN3B4O1xuICAgIG1hcmdpbi1yaWdodDogMTBweDsgfVxuXG4uZGFzaC1uYXYtbGlzdCB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47IH1cblxuLmRhc2gtbmF2LWl0ZW0ge1xuICBtaW4taGVpZ2h0OiA1NnB4O1xuICBwYWRkaW5nOiA4cHggMjBweCA4cHggNzBweDtcbiAgZGlzcGxheTogZmxleDtcbiAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAgbGV0dGVyLXNwYWNpbmc6IC4wMmVtOyB9XG4gIC5kYXNoLW5hdi1pdGVtIGkge1xuICAgIHdpZHRoOiAzNnB4O1xuICAgIGZvbnQtc2l6ZTogMTlweDtcbiAgICBtYXJnaW4tbGVmdDogLTQwcHg7IH1cbiAgLmRhc2gtbmF2LWRhcmsgLmRhc2gtbmF2LWl0ZW06aG92ZXIge1xuICAgIGJhY2tncm91bmQ6IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC4wNCk7IH1cblxuLmRhc2gtbmF2LWRyb3Bkb3duIHtcbiAgZGlzcGxheTogZmxleDtcbiAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjsgfVxuICAuZGFzaC1uYXYtZGFyayAuZGFzaC1uYXYtZHJvcGRvd24uc2hvdyB7XG4gICAgYmFja2dyb3VuZDogcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjA0KTsgfVxuICAuZGFzaC1uYXYtZHJvcGRvd24uc2hvdyA+IC5kYXNoLW5hdi1kcm9wZG93bi10b2dnbGUge1xuICAgIGZvbnQtd2VpZ2h0OiBib2xkOyB9XG4gICAgLmRhc2gtbmF2LWRyb3Bkb3duLnNob3cgPiAuZGFzaC1uYXYtZHJvcGRvd24tdG9nZ2xlOmFmdGVyIHtcbiAgICAgIHRyYW5zZm9ybTogbm9uZTsgfVxuICAuZGFzaC1uYXYtZHJvcGRvd24uc2hvdyA+IC5kYXNoLW5hdi1kcm9wZG93bi1tZW51IHtcbiAgICBkaXNwbGF5OiBmbGV4OyB9XG4gIC5kYXNoLW5hdi1kcm9wZG93bi5zaG93IC5kYXNoLW5hdi1kcm9wZG93bi5zaG93IHtcbiAgICBiYWNrZ3JvdW5kOiBub25lOyB9XG5cbi5kYXNoLW5hdi1kcm9wZG93bi10b2dnbGU6YWZ0ZXIge1xuICBjb250ZW50OiBcIlwiO1xuICBtYXJnaW4tbGVmdDogYXV0bztcbiAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICB3aWR0aDogMDtcbiAgaGVpZ2h0OiAwO1xuICBib3JkZXItbGVmdDogNXB4IHNvbGlkIHRyYW5zcGFyZW50O1xuICBib3JkZXItcmlnaHQ6IDVweCBzb2xpZCB0cmFuc3BhcmVudDtcbiAgYm9yZGVyLXRvcDogNXB4IHNvbGlkIHJnYmEoODEsIDgxLCA4MSwgMC44KTtcbiAgdHJhbnNmb3JtOiByb3RhdGUoOTBkZWcpOyB9XG4gIC5kYXNoLW5hdi1kYXJrIC5kYXNoLW5hdi1kcm9wZG93bi10b2dnbGU6YWZ0ZXIge1xuICAgIGJvcmRlci10b3AtY29sb3I6IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC43Mik7IH1cblxuLmRhc2gtbmF2LWRyb3Bkb3duLW1lbnUge1xuICBkaXNwbGF5OiBub25lO1xuICBmbGV4LWRpcmVjdGlvbjogY29sdW1uOyB9XG4gIC5kYXNoLW5hdi1kcm9wZG93bi1tZW51ID4gLmRhc2gtbmF2LWRyb3Bkb3duIC5kYXNoLW5hdi1kcm9wZG93bi1tZW51IC5kYXNoLW5hdi1kcm9wZG93bi1pdGVtIHtcbiAgICBwYWRkaW5nLWxlZnQ6IDg3cHg7IH1cblxuLmRhc2gtbmF2LWRyb3Bkb3duLWl0ZW0ge1xuICBtaW4taGVpZ2h0OiA0MHB4O1xuICBwYWRkaW5nOiA4cHggMjBweCA4cHggNzBweDtcbiAgZGlzcGxheTogZmxleDtcbiAgYWxpZ24taXRlbXM6IGNlbnRlcjsgfVxuICAuZGFzaC1uYXYtZHJvcGRvd24taXRlbTpob3ZlciB7XG4gICAgYmFja2dyb3VuZDogcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjA0KTsgfVxuXG4ubm90aWZpY2F0aW9ucyB7XG4gIG1hcmdpbjogLThweCAtMzJweDsgfVxuICBAbWVkaWEgKG1heC13aWR0aDogNzY3Ljk4cHgpIHtcbiAgICAubm90aWZpY2F0aW9ucyB7XG4gICAgICBtYXJnaW46IC04cHggLTE4cHg7IH0gfVxuXG4ubm90aWZpY2F0aW9uIHtcbiAgZGlzcGxheTogZmxleDtcbiAgZmxleC1kaXJlY3Rpb246IHJvdztcbiAgcGFkZGluZzogOHB4IDMycHg7XG4gIGNvbG9yOiAjNTE1MTUxOyB9XG4gIC5ub3RpZmljYXRpb246aG92ZXIsIC5ub3RpZmljYXRpb246Zm9jdXMsIC5ub3RpZmljYXRpb246YWN0aXZlIHtcbiAgICBjb2xvcjogIzUxNTE1MTtcbiAgICB0ZXh0LWRlY29yYXRpb246IG5vbmU7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI0YwRjFGNzsgfVxuXG4ubm90aWZpY2F0aW9uLWljb24ge1xuICB3aWR0aDogMzVweDsgfVxuXG4ubm90aWZpY2F0aW9uLXRpbWUge1xuICBtYXJnaW4tbGVmdDogYXV0bztcbiAgb3BhY2l0eTogLjg7IH1cblxuLm5vdGlmaWNhdGlvbnMtc2hvdy1hbGwge1xuICBtYXJnaW4tdG9wOiA4cHg7XG4gIG1hcmdpbi1sZWZ0OiA2N3B4OyB9XG4gIC5ub3RpZmljYXRpb25zLXNob3ctYWxsIGEge1xuICAgIGNvbG9yOiAjNTE1MTUxO1xuICAgIHRleHQtZGVjb3JhdGlvbjogdW5kZXJsaW5lOyB9XG4gICAgLm5vdGlmaWNhdGlvbnMtc2hvdy1hbGwgYTpmb2N1cywgLm5vdGlmaWNhdGlvbnMtc2hvdy1hbGwgYTpob3ZlciwgLm5vdGlmaWNhdGlvbnMtc2hvdy1hbGwgYTphY3RpdmUge1xuICAgICAgY29sb3I6ICM1MTUxNTE7IH1cblxuLnRhYmxlLWluLWNhcmQge1xuICBtYXJnaW46IC0xMnB4IDA7IH1cbiAgLnRhYmxlLWluLWNhcmQgdGhlYWQgdHIgdGgge1xuICAgIGJvcmRlci10b3AtY29sb3I6IHRyYW5zcGFyZW50OyB9XG5cbi5jYXJkLWJvZHktd2l0aC1kYXJrLXRhYmxlIHtcbiAgYmFja2dyb3VuZC1jb2xvcjogIzIxMjUyOTsgfVxuXG4ubWVudS10b2dnbGUsIC5zZWFyY2hib3gtdG9nZ2xlLCAuc2VhcmNoYm94LXN1Ym1pdCwgLnRvb2xzLWl0ZW0ge1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIHdpZHRoOiA0MnB4O1xuICBoZWlnaHQ6IDQycHg7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gIGp1c3RpZnktY29udGVudDogY2VudGVyO1xuICBjb2xvcjogIzUxNTE1MTsgfVxuICAubWVudS10b2dnbGU6aG92ZXIsIC5zZWFyY2hib3gtdG9nZ2xlOmhvdmVyLCAuc2VhcmNoYm94LXN1Ym1pdDpob3ZlciwgLnRvb2xzLWl0ZW06aG92ZXIsIC5tZW51LXRvZ2dsZTphY3RpdmUsIC5zZWFyY2hib3gtdG9nZ2xlOmFjdGl2ZSwgLnNlYXJjaGJveC1zdWJtaXQ6YWN0aXZlLCAudG9vbHMtaXRlbTphY3RpdmUsIC5tZW51LXRvZ2dsZTpmb2N1cywgLnNlYXJjaGJveC10b2dnbGU6Zm9jdXMsIC5zZWFyY2hib3gtc3VibWl0OmZvY3VzLCAudG9vbHMtaXRlbTpmb2N1cyB7XG4gICAgdGV4dC1kZWNvcmF0aW9uOiBub25lO1xuICAgIGNvbG9yOiAjNTE1MTUxOyB9XG4gIC5tZW51LXRvZ2dsZSBpLCAuc2VhcmNoYm94LXRvZ2dsZSBpLCAuc2VhcmNoYm94LXN1Ym1pdCBpLCAudG9vbHMtaXRlbSBpIHtcbiAgICBmb250LXNpemU6IDIwcHg7IH1cblxuLnRvb2xzLWl0ZW0gLnRvb2xzLWl0ZW0tY291bnQge1xuICB3aWR0aDogMTVweDtcbiAgaGVpZ2h0OiAxNXB4O1xuICBib3JkZXItcmFkaXVzOiAyMHB4O1xuICBkaXNwbGF5OiBmbGV4O1xuICBhbGlnbi1pdGVtczogY2VudGVyO1xuICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcbiAgcG9zaXRpb246IGFic29sdXRlO1xuICB0b3A6IDNweDtcbiAgcmlnaHQ6IDNweDtcbiAgZm9udC1zdHlsZTogbm9ybWFsO1xuICBmb250LXNpemU6IDExcHg7XG4gIGJhY2tncm91bmQ6ICNGRjVBMDA7XG4gIGNvbG9yOiAjZmZmOyB9XG5cbi5kYXNoLXRvb2xiYXIge1xuICBtaW4taGVpZ2h0OiA4NHB4O1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjRjNGM0YzO1xuICBkaXNwbGF5OiBmbGV4O1xuICBhbGlnbi1pdGVtczogY2VudGVyO1xuICBwYWRkaW5nOiA4cHggMjdweDtcbiAgcG9zaXRpb246IGZpeGVkO1xuICB0b3A6IDA7XG4gIHJpZ2h0OiAwO1xuICBsZWZ0OiAwO1xuICB6LWluZGV4OiAxMDAwOyB9XG4gIEBtZWRpYSAobWluLXdpZHRoOiA5OTJweCkge1xuICAgIC5kYXNoLXRvb2xiYXIge1xuICAgICAgbGVmdDogMjM4cHg7IH1cbiAgICAgIC5kYXNoLWNvbXBhY3QgLmRhc2gtdG9vbGJhciB7XG4gICAgICAgIGxlZnQ6IDA7IH0gfVxuXG4uc2VhcmNoYm94IHtcbiAgZGlzcGxheTogZmxleDtcbiAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAgZmxleC1ncm93OiAyOyB9XG4gIEBtZWRpYSAobWF4LXdpZHRoOiA3NjcuOThweCkge1xuICAgIC5zZWFyY2hib3gge1xuICAgICAgZGlzcGxheTogbm9uZTtcbiAgICAgIHBvc2l0aW9uOiBmaXhlZDtcbiAgICAgIHRvcDogMDtcbiAgICAgIHJpZ2h0OiAwO1xuICAgICAgbGVmdDogMDtcbiAgICAgIGJhY2tncm91bmQ6ICNGM0YzRjM7XG4gICAgICBtaW4taGVpZ2h0OiA4NHB4O1xuICAgICAgei1pbmRleDogMTA3MTtcbiAgICAgIHBhZGRpbmc6IDhweCAyN3B4OyB9XG4gICAgICAuc2VhcmNoYm94LnNob3cge1xuICAgICAgICBkaXNwbGF5OiBmbGV4OyB9IH1cblxuLnNlYXJjaGJveC10b2dnbGUge1xuICBkaXNwbGF5OiBub25lO1xuICBjb2xvcjogIzUxNTE1MTsgfVxuICAuc2VhcmNoYm94LXRvZ2dsZTpob3ZlciwgLnNlYXJjaGJveC10b2dnbGU6YWN0aXZlLCAuc2VhcmNoYm94LXRvZ2dsZTpmb2N1cyB7XG4gICAgdGV4dC1kZWNvcmF0aW9uOiBub25lO1xuICAgIGNvbG9yOiAjNTE1MTUxOyB9XG4gIEBtZWRpYSAobWF4LXdpZHRoOiA3NjcuOThweCkge1xuICAgIC5zZWFyY2hib3gtdG9nZ2xlIHtcbiAgICAgIGRpc3BsYXk6IGZsZXg7IH0gfVxuXG4uc2VhcmNoYm94LWlucHV0IHtcbiAgYm9yZGVyOiBub25lO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjRjNGM0YzO1xuICBoZWlnaHQ6IDUwcHg7XG4gIHBhZGRpbmc6IDhweCA4cHggMTFweCA0cHg7XG4gIGZsZXgtZ3JvdzogMjtcbiAgd2lkdGg6IDEwMHB4OyB9XG4gIC5zZWFyY2hib3gtaW5wdXQ6OnBsYWNlaG9sZGVyIHtcbiAgICBjb2xvcjogIzhiOGI4YjsgfVxuICAuc2VhcmNoYm94LWlucHV0OmZvY3VzIHtcbiAgICBvdXRsaW5lOiBub25lOyB9XG5cbi5zZWFyY2hib3gtc3VibWl0IHtcbiAgYm9yZGVyOiBub25lO1xuICBiYWNrZ3JvdW5kOiBub25lO1xuICBwYWRkaW5nOiAwOyB9XG4gIEBtZWRpYSAobWF4LXdpZHRoOiA3NjcuOThweCkge1xuICAgIC5zZWFyY2hib3gtc3VibWl0IHtcbiAgICAgIG9yZGVyOiA5OyB9IH1cbiAgLnNlYXJjaGJveC1zdWJtaXQ6Zm9jdXMge1xuICAgIG91dGxpbmU6IG5vbmU7IH1cbiAgLnNlYXJjaGJveC1zdWJtaXQ6aG92ZXIge1xuICAgIGN1cnNvcjogcG9pbnRlcjsgfVxuXG4udG9vbHMge1xuICBtYXJnaW4tbGVmdDogYXV0bztcbiAgZGlzcGxheTogZmxleDsgfVxuICAudG9vbHMgYSB7XG4gICAgY29sb3I6ICM1MTUxNTE7IH1cblxuLnN0YXRzIHtcbiAgcGFkZGluZzogMThweCAyM3B4O1xuICBmb250LWZhbWlseTogXCJOdW5pdG9cIiwgc2Fucy1zZXJpZjtcbiAgYm94LXNoYWRvdzogMCAwIDVweCByZ2JhKDAsIDAsIDAsIDAuMjUpO1xuICBkaXNwbGF5OiBmbGV4O1xuICBmbGV4LWRpcmVjdGlvbjogY29sdW1uO1xuICBtaW4taGVpZ2h0OiAxNzBweDtcbiAgbWFyZ2luLWJvdHRvbTogMzBweDsgfVxuXG4uc3RhdHMtY29udGVudCB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIG1hcmdpbi10b3A6IGF1dG87XG4gIGFsaWduLWl0ZW1zOiBmbGV4LWVuZDsgfVxuXG4uc3RhdHMtdGl0bGUge1xuICBmb250LXNpemU6IDI2cHg7XG4gIGZvbnQtd2VpZ2h0OiA2MDA7XG4gIGxldHRlci1zcGFjaW5nOiAuMDRlbTsgfVxuXG4uc3RhdHMtaWNvbiB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGFsaWduLWl0ZW1zOiBmbGV4LWVuZDtcbiAgZm9udC1zaXplOiAyMHB4OyB9XG5cbi5zdGF0cy1kYXRhIHtcbiAgZGlzcGxheTogZmxleDtcbiAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcbiAgYWxpZ24taXRlbXM6IGZsZXgtZW5kO1xuICBtYXJnaW4tbGVmdDogYXV0bzsgfVxuXG4uc3RhdHMtbnVtYmVyIHtcbiAgZm9udC1zaXplOiAzM3B4O1xuICBsaW5lLWhlaWdodDogMzNweDtcbiAgZm9udC13ZWlnaHQ6IDYwMDtcbiAgbGV0dGVyLXNwYWNpbmc6IC4wNGVtOyB9XG5cbi5zdGF0cy1jaGFuZ2Uge1xuICBtYXJnaW4tdG9wOiA1cHg7XG4gIGZvbnQtZmFtaWx5OiBcIk9wZW4gU2Fuc1wiLCBzYW5zLXNlcmlmOyB9XG5cbi5zdGF0cy1wZXJjZW50YWdlIHtcbiAgb3BhY2l0eTogMTsgfVxuXG4uc3RhdHMtdGltZWZyYW1lIHtcbiAgb3BhY2l0eTogLjU7IH1cblxuLnN0YXRzLXByaW1hcnkge1xuICBjb2xvcjogI2ZmZjtcbiAgYmFja2dyb3VuZDogIzNGODRGQzsgfVxuXG4uc3RhdHMtc2Vjb25kYXJ5IHtcbiAgY29sb3I6ICNmZmY7XG4gIGJhY2tncm91bmQ6ICM3MjdGOTQ7IH1cblxuLnN0YXRzLXN1Y2Nlc3Mge1xuICBjb2xvcjogI2ZmZjtcbiAgYmFja2dyb3VuZDogIzFEQUI0NzsgfVxuXG4uc3RhdHMtaW5mbyB7XG4gIGNvbG9yOiAjZmZmO1xuICBiYWNrZ3JvdW5kOiAjOEEzRkZDOyB9XG5cbi5zdGF0cy13YXJuaW5nIHtcbiAgY29sb3I6ICMyMTI1Mjk7XG4gIGJhY2tncm91bmQ6ICNGQ0FFM0Y7IH1cblxuLnN0YXRzLWRhbmdlciB7XG4gIGNvbG9yOiAjZmZmO1xuICBiYWNrZ3JvdW5kOiAjRkM0MTNGOyB9XG5cbi5zdGF0cy1saWdodCB7XG4gIGNvbG9yOiAjMjEyNTI5O1xuICBiYWNrZ3JvdW5kOiAjZjhmOWZhOyB9XG5cbi5zdGF0cy1kYXJrIHtcbiAgY29sb3I6ICNmZmY7XG4gIGJhY2tncm91bmQ6ICMxRTIzMkQ7IH1cbiIsIi8vIEhvdmVyIG1peGluIGFuZCBgJGVuYWJsZS1ob3Zlci1tZWRpYS1xdWVyeWAgYXJlIGRlcHJlY2F0ZWQuXG4vL1xuLy8gT3JpZ2luYWxseSBhZGRlZCBkdXJpbmcgb3VyIGFscGhhcyBhbmQgbWFpbnRhaW5lZCBkdXJpbmcgYmV0YXMsIHRoaXMgbWl4aW4gd2FzXG4vLyBkZXNpZ25lZCB0byBwcmV2ZW50IGA6aG92ZXJgIHN0aWNraW5lc3Mgb24gaU9TLWFuIGlzc3VlIHdoZXJlIGhvdmVyIHN0eWxlc1xuLy8gd291bGQgcGVyc2lzdCBhZnRlciBpbml0aWFsIHRvdWNoLlxuLy9cbi8vIEZvciBiYWNrd2FyZCBjb21wYXRpYmlsaXR5LCB3ZSd2ZSBrZXB0IHRoZXNlIG1peGlucyBhbmQgdXBkYXRlZCB0aGVtIHRvXG4vLyBhbHdheXMgcmV0dXJuIHRoZWlyIHJlZ3VsYXIgcHNldWRvLWNsYXNzZXMgaW5zdGVhZCBvZiBhIHNoaW1tZWQgbWVkaWEgcXVlcnkuXG4vL1xuLy8gSXNzdWU6IGh0dHBzOi8vZ2l0aHViLmNvbS90d2JzL2Jvb3RzdHJhcC9pc3N1ZXMvMjUxOTVcblxuQG1peGluIGhvdmVyKCkge1xuICAmOmhvdmVyIHsgQGNvbnRlbnQ7IH1cbn1cblxuQG1peGluIGhvdmVyLWZvY3VzKCkge1xuICAmOmhvdmVyLFxuICAmOmZvY3VzIHtcbiAgICBAY29udGVudDtcbiAgfVxufVxuXG5AbWl4aW4gcGxhaW4taG92ZXItZm9jdXMoKSB7XG4gICYsXG4gICY6aG92ZXIsXG4gICY6Zm9jdXMge1xuICAgIEBjb250ZW50O1xuICB9XG59XG5cbkBtaXhpbiBob3Zlci1mb2N1cy1hY3RpdmUoKSB7XG4gICY6aG92ZXIsXG4gICY6Zm9jdXMsXG4gICY6YWN0aXZlIHtcbiAgICBAY29udGVudDtcbiAgfVxufVxuIiwiLy8gc3R5bGVsaW50LWRpc2FibGUgZGVjbGFyYXRpb24tbm8taW1wb3J0YW50LCBzZWxlY3Rvci1saXN0LWNvbW1hLW5ld2xpbmUtYWZ0ZXJcblxuLy9cbi8vIEhlYWRpbmdzXG4vL1xuXG5oMSwgaDIsIGgzLCBoNCwgaDUsIGg2LFxuLmgxLCAuaDIsIC5oMywgLmg0LCAuaDUsIC5oNiB7XG4gIG1hcmdpbi1ib3R0b206ICRoZWFkaW5ncy1tYXJnaW4tYm90dG9tO1xuICBmb250LWZhbWlseTogJGhlYWRpbmdzLWZvbnQtZmFtaWx5O1xuICBmb250LXdlaWdodDogJGhlYWRpbmdzLWZvbnQtd2VpZ2h0O1xuICBsaW5lLWhlaWdodDogJGhlYWRpbmdzLWxpbmUtaGVpZ2h0O1xuICBjb2xvcjogJGhlYWRpbmdzLWNvbG9yO1xufVxuXG5oMSwgLmgxIHsgQGluY2x1ZGUgZm9udC1zaXplKCRoMS1mb250LXNpemUpOyB9XG5oMiwgLmgyIHsgQGluY2x1ZGUgZm9udC1zaXplKCRoMi1mb250LXNpemUpOyB9XG5oMywgLmgzIHsgQGluY2x1ZGUgZm9udC1zaXplKCRoMy1mb250LXNpemUpOyB9XG5oNCwgLmg0IHsgQGluY2x1ZGUgZm9udC1zaXplKCRoNC1mb250LXNpemUpOyB9XG5oNSwgLmg1IHsgQGluY2x1ZGUgZm9udC1zaXplKCRoNS1mb250LXNpemUpOyB9XG5oNiwgLmg2IHsgQGluY2x1ZGUgZm9udC1zaXplKCRoNi1mb250LXNpemUpOyB9XG5cbi5sZWFkIHtcbiAgQGluY2x1ZGUgZm9udC1zaXplKCRsZWFkLWZvbnQtc2l6ZSk7XG4gIGZvbnQtd2VpZ2h0OiAkbGVhZC1mb250LXdlaWdodDtcbn1cblxuLy8gVHlwZSBkaXNwbGF5IGNsYXNzZXNcbi5kaXNwbGF5LTEge1xuICBAaW5jbHVkZSBmb250LXNpemUoJGRpc3BsYXkxLXNpemUpO1xuICBmb250LXdlaWdodDogJGRpc3BsYXkxLXdlaWdodDtcbiAgbGluZS1oZWlnaHQ6ICRkaXNwbGF5LWxpbmUtaGVpZ2h0O1xufVxuLmRpc3BsYXktMiB7XG4gIEBpbmNsdWRlIGZvbnQtc2l6ZSgkZGlzcGxheTItc2l6ZSk7XG4gIGZvbnQtd2VpZ2h0OiAkZGlzcGxheTItd2VpZ2h0O1xuICBsaW5lLWhlaWdodDogJGRpc3BsYXktbGluZS1oZWlnaHQ7XG59XG4uZGlzcGxheS0zIHtcbiAgQGluY2x1ZGUgZm9udC1zaXplKCRkaXNwbGF5My1zaXplKTtcbiAgZm9udC13ZWlnaHQ6ICRkaXNwbGF5My13ZWlnaHQ7XG4gIGxpbmUtaGVpZ2h0OiAkZGlzcGxheS1saW5lLWhlaWdodDtcbn1cbi5kaXNwbGF5LTQge1xuICBAaW5jbHVkZSBmb250LXNpemUoJGRpc3BsYXk0LXNpemUpO1xuICBmb250LXdlaWdodDogJGRpc3BsYXk0LXdlaWdodDtcbiAgbGluZS1oZWlnaHQ6ICRkaXNwbGF5LWxpbmUtaGVpZ2h0O1xufVxuXG5cbi8vXG4vLyBIb3Jpem9udGFsIHJ1bGVzXG4vL1xuXG5ociB7XG4gIG1hcmdpbi10b3A6ICRoci1tYXJnaW4teTtcbiAgbWFyZ2luLWJvdHRvbTogJGhyLW1hcmdpbi15O1xuICBib3JkZXI6IDA7XG4gIGJvcmRlci10b3A6ICRoci1ib3JkZXItd2lkdGggc29saWQgJGhyLWJvcmRlci1jb2xvcjtcbn1cblxuXG4vL1xuLy8gRW1waGFzaXNcbi8vXG5cbnNtYWxsLFxuLnNtYWxsIHtcbiAgQGluY2x1ZGUgZm9udC1zaXplKCRzbWFsbC1mb250LXNpemUpO1xuICBmb250LXdlaWdodDogJGZvbnQtd2VpZ2h0LW5vcm1hbDtcbn1cblxubWFyayxcbi5tYXJrIHtcbiAgcGFkZGluZzogJG1hcmstcGFkZGluZztcbiAgYmFja2dyb3VuZC1jb2xvcjogJG1hcmstYmc7XG59XG5cblxuLy9cbi8vIExpc3RzXG4vL1xuXG4ubGlzdC11bnN0eWxlZCB7XG4gIEBpbmNsdWRlIGxpc3QtdW5zdHlsZWQoKTtcbn1cblxuLy8gSW5saW5lIHR1cm5zIGxpc3QgaXRlbXMgaW50byBpbmxpbmUtYmxvY2tcbi5saXN0LWlubGluZSB7XG4gIEBpbmNsdWRlIGxpc3QtdW5zdHlsZWQoKTtcbn1cbi5saXN0LWlubGluZS1pdGVtIHtcbiAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuXG4gICY6bm90KDpsYXN0LWNoaWxkKSB7XG4gICAgbWFyZ2luLXJpZ2h0OiAkbGlzdC1pbmxpbmUtcGFkZGluZztcbiAgfVxufVxuXG5cbi8vXG4vLyBNaXNjXG4vL1xuXG4vLyBCdWlsZHMgb24gYGFiYnJgXG4uaW5pdGlhbGlzbSB7XG4gIEBpbmNsdWRlIGZvbnQtc2l6ZSg5MCUpO1xuICB0ZXh0LXRyYW5zZm9ybTogdXBwZXJjYXNlO1xufVxuXG4vLyBCbG9ja3F1b3Rlc1xuLmJsb2NrcXVvdGUge1xuICBtYXJnaW4tYm90dG9tOiAkc3BhY2VyO1xuICBAaW5jbHVkZSBmb250LXNpemUoJGJsb2NrcXVvdGUtZm9udC1zaXplKTtcbn1cblxuLmJsb2NrcXVvdGUtZm9vdGVyIHtcbiAgZGlzcGxheTogYmxvY2s7XG4gIEBpbmNsdWRlIGZvbnQtc2l6ZSgkYmxvY2txdW90ZS1zbWFsbC1mb250LXNpemUpO1xuICBjb2xvcjogJGJsb2NrcXVvdGUtc21hbGwtY29sb3I7XG5cbiAgJjo6YmVmb3JlIHtcbiAgICBjb250ZW50OiBcIlxcMjAxNFxcMDBBMFwiOyAvLyBlbSBkYXNoLCBuYnNwXG4gIH1cbn1cbiIsIi8vIExpc3RzXG5cbi8vIFVuc3R5bGVkIGtlZXBzIGxpc3QgaXRlbXMgYmxvY2sgbGV2ZWwsIGp1c3QgcmVtb3ZlcyBkZWZhdWx0IGJyb3dzZXIgcGFkZGluZyBhbmQgbGlzdC1zdHlsZVxuQG1peGluIGxpc3QtdW5zdHlsZWQoKSB7XG4gIHBhZGRpbmctbGVmdDogMDtcbiAgbGlzdC1zdHlsZTogbm9uZTtcbn1cbiIsIi8vIFJlc3BvbnNpdmUgaW1hZ2VzIChlbnN1cmUgaW1hZ2VzIGRvbid0IHNjYWxlIGJleW9uZCB0aGVpciBwYXJlbnRzKVxuLy9cbi8vIFRoaXMgaXMgcHVycG9zZWZ1bGx5IG9wdC1pbiB2aWEgYW4gZXhwbGljaXQgY2xhc3MgcmF0aGVyIHRoYW4gYmVpbmcgdGhlIGRlZmF1bHQgZm9yIGFsbCBgPGltZz5gcy5cbi8vIFdlIHByZXZpb3VzbHkgdHJpZWQgdGhlIFwiaW1hZ2VzIGFyZSByZXNwb25zaXZlIGJ5IGRlZmF1bHRcIiBhcHByb2FjaCBpbiBCb290c3RyYXAgdjIsXG4vLyBhbmQgYWJhbmRvbmVkIGl0IGluIEJvb3RzdHJhcCB2MyBiZWNhdXNlIGl0IGJyZWFrcyBsb3RzIG9mIHRoaXJkLXBhcnR5IHdpZGdldHMgKGluY2x1ZGluZyBHb29nbGUgTWFwcylcbi8vIHdoaWNoIHdlcmVuJ3QgZXhwZWN0aW5nIHRoZSBpbWFnZXMgd2l0aGluIHRoZW1zZWx2ZXMgdG8gYmUgaW52b2x1bnRhcmlseSByZXNpemVkLlxuLy8gU2VlIGFsc28gaHR0cHM6Ly9naXRodWIuY29tL3R3YnMvYm9vdHN0cmFwL2lzc3Vlcy8xODE3OFxuLmltZy1mbHVpZCB7XG4gIEBpbmNsdWRlIGltZy1mbHVpZCgpO1xufVxuXG5cbi8vIEltYWdlIHRodW1ibmFpbHNcbi5pbWctdGh1bWJuYWlsIHtcbiAgcGFkZGluZzogJHRodW1ibmFpbC1wYWRkaW5nO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAkdGh1bWJuYWlsLWJnO1xuICBib3JkZXI6ICR0aHVtYm5haWwtYm9yZGVyLXdpZHRoIHNvbGlkICR0aHVtYm5haWwtYm9yZGVyLWNvbG9yO1xuICBAaW5jbHVkZSBib3JkZXItcmFkaXVzKCR0aHVtYm5haWwtYm9yZGVyLXJhZGl1cyk7XG4gIEBpbmNsdWRlIGJveC1zaGFkb3coJHRodW1ibmFpbC1ib3gtc2hhZG93KTtcblxuICAvLyBLZWVwIHRoZW0gYXQgbW9zdCAxMDAlIHdpZGVcbiAgQGluY2x1ZGUgaW1nLWZsdWlkKCk7XG59XG5cbi8vXG4vLyBGaWd1cmVzXG4vL1xuXG4uZmlndXJlIHtcbiAgLy8gRW5zdXJlcyB0aGUgY2FwdGlvbidzIHRleHQgYWxpZ25zIHdpdGggdGhlIGltYWdlLlxuICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG59XG5cbi5maWd1cmUtaW1nIHtcbiAgbWFyZ2luLWJvdHRvbTogJHNwYWNlciAvIDI7XG4gIGxpbmUtaGVpZ2h0OiAxO1xufVxuXG4uZmlndXJlLWNhcHRpb24ge1xuICBAaW5jbHVkZSBmb250LXNpemUoJGZpZ3VyZS1jYXB0aW9uLWZvbnQtc2l6ZSk7XG4gIGNvbG9yOiAkZmlndXJlLWNhcHRpb24tY29sb3I7XG59XG4iLCIvLyBJbWFnZSBNaXhpbnNcbi8vIC0gUmVzcG9uc2l2ZSBpbWFnZVxuLy8gLSBSZXRpbmEgaW1hZ2VcblxuXG4vLyBSZXNwb25zaXZlIGltYWdlXG4vL1xuLy8gS2VlcCBpbWFnZXMgZnJvbSBzY2FsaW5nIGJleW9uZCB0aGUgd2lkdGggb2YgdGhlaXIgcGFyZW50cy5cblxuQG1peGluIGltZy1mbHVpZCgpIHtcbiAgLy8gUGFydCAxOiBTZXQgYSBtYXhpbXVtIHJlbGF0aXZlIHRvIHRoZSBwYXJlbnRcbiAgbWF4LXdpZHRoOiAxMDAlO1xuICAvLyBQYXJ0IDI6IE92ZXJyaWRlIHRoZSBoZWlnaHQgdG8gYXV0bywgb3RoZXJ3aXNlIGltYWdlcyB3aWxsIGJlIHN0cmV0Y2hlZFxuICAvLyB3aGVuIHNldHRpbmcgYSB3aWR0aCBhbmQgaGVpZ2h0IGF0dHJpYnV0ZSBvbiB0aGUgaW1nIGVsZW1lbnQuXG4gIGhlaWdodDogYXV0bztcbn1cblxuXG4vLyBSZXRpbmEgaW1hZ2Vcbi8vXG4vLyBTaG9ydCByZXRpbmEgbWl4aW4gZm9yIHNldHRpbmcgYmFja2dyb3VuZC1pbWFnZSBhbmQgLXNpemUuXG5cbkBtaXhpbiBpbWctcmV0aW5hKCRmaWxlLTF4LCAkZmlsZS0yeCwgJHdpZHRoLTF4LCAkaGVpZ2h0LTF4KSB7XG4gIGJhY2tncm91bmQtaW1hZ2U6IHVybCgkZmlsZS0xeCk7XG5cbiAgLy8gQXV0b3ByZWZpeGVyIHRha2VzIGNhcmUgb2YgYWRkaW5nIC13ZWJraXQtbWluLWRldmljZS1waXhlbC1yYXRpbyBhbmQgLW8tbWluLWRldmljZS1waXhlbC1yYXRpbyxcbiAgLy8gYnV0IGRvZXNuJ3QgY29udmVydCBkcHB4PT5kcGkuXG4gIC8vIFRoZXJlJ3Mgbm8gc3VjaCB0aGluZyBhcyB1bnByZWZpeGVkIG1pbi1kZXZpY2UtcGl4ZWwtcmF0aW8gc2luY2UgaXQncyBub25zdGFuZGFyZC5cbiAgLy8gQ29tcGF0aWJpbGl0eSBpbmZvOiBodHRwczovL2Nhbml1c2UuY29tLyNmZWF0PWNzcy1tZWRpYS1yZXNvbHV0aW9uXG4gIEBtZWRpYSBvbmx5IHNjcmVlbiBhbmQgKG1pbi1yZXNvbHV0aW9uOiAxOTJkcGkpLCAvLyBJRTktMTEgZG9uJ3Qgc3VwcG9ydCBkcHB4XG4gICAgb25seSBzY3JlZW4gYW5kIChtaW4tcmVzb2x1dGlvbjogMmRwcHgpIHsgLy8gU3RhbmRhcmRpemVkXG4gICAgYmFja2dyb3VuZC1pbWFnZTogdXJsKCRmaWxlLTJ4KTtcbiAgICBiYWNrZ3JvdW5kLXNpemU6ICR3aWR0aC0xeCAkaGVpZ2h0LTF4O1xuICB9XG4gIEBpbmNsdWRlIGRlcHJlY2F0ZShcImBpbWctcmV0aW5hKClgXCIsIFwidjQuMy4wXCIsIFwidjVcIik7XG59XG4iLCIvLyBzdHlsZWxpbnQtZGlzYWJsZSBwcm9wZXJ0eS1ibGFja2xpc3Rcbi8vIFNpbmdsZSBzaWRlIGJvcmRlci1yYWRpdXNcblxuLy8gSGVscGVyIGZ1bmN0aW9uIHRvIHJlcGxhY2UgbmVnYXRpdmUgdmFsdWVzIHdpdGggMFxuQGZ1bmN0aW9uIHZhbGlkLXJhZGl1cygkcmFkaXVzKSB7XG4gICRyZXR1cm46ICgpO1xuICBAZWFjaCAkdmFsdWUgaW4gJHJhZGl1cyB7XG4gICAgQGlmIHR5cGUtb2YoJHZhbHVlKSA9PSBudW1iZXIge1xuICAgICAgJHJldHVybjogYXBwZW5kKCRyZXR1cm4sIG1heCgkdmFsdWUsIDApKTtcbiAgICB9IEBlbHNlIHtcbiAgICAgICRyZXR1cm46IGFwcGVuZCgkcmV0dXJuLCAkdmFsdWUpO1xuICAgIH1cbiAgfVxuICBAcmV0dXJuICRyZXR1cm47XG59XG5cbkBtaXhpbiBib3JkZXItcmFkaXVzKCRyYWRpdXM6ICRib3JkZXItcmFkaXVzLCAkZmFsbGJhY2stYm9yZGVyLXJhZGl1czogZmFsc2UpIHtcbiAgQGlmICRlbmFibGUtcm91bmRlZCB7XG4gICAgYm9yZGVyLXJhZGl1czogdmFsaWQtcmFkaXVzKCRyYWRpdXMpO1xuICB9XG4gIEBlbHNlIGlmICRmYWxsYmFjay1ib3JkZXItcmFkaXVzICE9IGZhbHNlIHtcbiAgICBib3JkZXItcmFkaXVzOiAkZmFsbGJhY2stYm9yZGVyLXJhZGl1cztcbiAgfVxufVxuXG5AbWl4aW4gYm9yZGVyLXRvcC1yYWRpdXMoJHJhZGl1cykge1xuICBAaWYgJGVuYWJsZS1yb3VuZGVkIHtcbiAgICBib3JkZXItdG9wLWxlZnQtcmFkaXVzOiB2YWxpZC1yYWRpdXMoJHJhZGl1cyk7XG4gICAgYm9yZGVyLXRvcC1yaWdodC1yYWRpdXM6IHZhbGlkLXJhZGl1cygkcmFkaXVzKTtcbiAgfVxufVxuXG5AbWl4aW4gYm9yZGVyLXJpZ2h0LXJhZGl1cygkcmFkaXVzKSB7XG4gIEBpZiAkZW5hYmxlLXJvdW5kZWQge1xuICAgIGJvcmRlci10b3AtcmlnaHQtcmFkaXVzOiB2YWxpZC1yYWRpdXMoJHJhZGl1cyk7XG4gICAgYm9yZGVyLWJvdHRvbS1yaWdodC1yYWRpdXM6IHZhbGlkLXJhZGl1cygkcmFkaXVzKTtcbiAgfVxufVxuXG5AbWl4aW4gYm9yZGVyLWJvdHRvbS1yYWRpdXMoJHJhZGl1cykge1xuICBAaWYgJGVuYWJsZS1yb3VuZGVkIHtcbiAgICBib3JkZXItYm90dG9tLXJpZ2h0LXJhZGl1czogdmFsaWQtcmFkaXVzKCRyYWRpdXMpO1xuICAgIGJvcmRlci1ib3R0b20tbGVmdC1yYWRpdXM6IHZhbGlkLXJhZGl1cygkcmFkaXVzKTtcbiAgfVxufVxuXG5AbWl4aW4gYm9yZGVyLWxlZnQtcmFkaXVzKCRyYWRpdXMpIHtcbiAgQGlmICRlbmFibGUtcm91bmRlZCB7XG4gICAgYm9yZGVyLXRvcC1sZWZ0LXJhZGl1czogdmFsaWQtcmFkaXVzKCRyYWRpdXMpO1xuICAgIGJvcmRlci1ib3R0b20tbGVmdC1yYWRpdXM6IHZhbGlkLXJhZGl1cygkcmFkaXVzKTtcbiAgfVxufVxuXG5AbWl4aW4gYm9yZGVyLXRvcC1sZWZ0LXJhZGl1cygkcmFkaXVzKSB7XG4gIEBpZiAkZW5hYmxlLXJvdW5kZWQge1xuICAgIGJvcmRlci10b3AtbGVmdC1yYWRpdXM6IHZhbGlkLXJhZGl1cygkcmFkaXVzKTtcbiAgfVxufVxuXG5AbWl4aW4gYm9yZGVyLXRvcC1yaWdodC1yYWRpdXMoJHJhZGl1cykge1xuICBAaWYgJGVuYWJsZS1yb3VuZGVkIHtcbiAgICBib3JkZXItdG9wLXJpZ2h0LXJhZGl1czogdmFsaWQtcmFkaXVzKCRyYWRpdXMpO1xuICB9XG59XG5cbkBtaXhpbiBib3JkZXItYm90dG9tLXJpZ2h0LXJhZGl1cygkcmFkaXVzKSB7XG4gIEBpZiAkZW5hYmxlLXJvdW5kZWQge1xuICAgIGJvcmRlci1ib3R0b20tcmlnaHQtcmFkaXVzOiB2YWxpZC1yYWRpdXMoJHJhZGl1cyk7XG4gIH1cbn1cblxuQG1peGluIGJvcmRlci1ib3R0b20tbGVmdC1yYWRpdXMoJHJhZGl1cykge1xuICBAaWYgJGVuYWJsZS1yb3VuZGVkIHtcbiAgICBib3JkZXItYm90dG9tLWxlZnQtcmFkaXVzOiB2YWxpZC1yYWRpdXMoJHJhZGl1cyk7XG4gIH1cbn1cbiIsIi8vIElubGluZSBjb2RlXG5jb2RlIHtcbiAgQGluY2x1ZGUgZm9udC1zaXplKCRjb2RlLWZvbnQtc2l6ZSk7XG4gIGNvbG9yOiAkY29kZS1jb2xvcjtcbiAgd29yZC13cmFwOiBicmVhay13b3JkO1xuXG4gIC8vIFN0cmVhbWxpbmUgdGhlIHN0eWxlIHdoZW4gaW5zaWRlIGFuY2hvcnMgdG8gYXZvaWQgYnJva2VuIHVuZGVybGluZSBhbmQgbW9yZVxuICBhID4gJiB7XG4gICAgY29sb3I6IGluaGVyaXQ7XG4gIH1cbn1cblxuLy8gVXNlciBpbnB1dCB0eXBpY2FsbHkgZW50ZXJlZCB2aWEga2V5Ym9hcmRcbmtiZCB7XG4gIHBhZGRpbmc6ICRrYmQtcGFkZGluZy15ICRrYmQtcGFkZGluZy14O1xuICBAaW5jbHVkZSBmb250LXNpemUoJGtiZC1mb250LXNpemUpO1xuICBjb2xvcjogJGtiZC1jb2xvcjtcbiAgYmFja2dyb3VuZC1jb2xvcjogJGtiZC1iZztcbiAgQGluY2x1ZGUgYm9yZGVyLXJhZGl1cygkYm9yZGVyLXJhZGl1cy1zbSk7XG4gIEBpbmNsdWRlIGJveC1zaGFkb3coJGtiZC1ib3gtc2hhZG93KTtcblxuICBrYmQge1xuICAgIHBhZGRpbmc6IDA7XG4gICAgQGluY2x1ZGUgZm9udC1zaXplKDEwMCUpO1xuICAgIGZvbnQtd2VpZ2h0OiAkbmVzdGVkLWtiZC1mb250LXdlaWdodDtcbiAgICBAaW5jbHVkZSBib3gtc2hhZG93KG5vbmUpO1xuICB9XG59XG5cbi8vIEJsb2NrcyBvZiBjb2RlXG5wcmUge1xuICBkaXNwbGF5OiBibG9jaztcbiAgQGluY2x1ZGUgZm9udC1zaXplKCRjb2RlLWZvbnQtc2l6ZSk7XG4gIGNvbG9yOiAkcHJlLWNvbG9yO1xuXG4gIC8vIEFjY291bnQgZm9yIHNvbWUgY29kZSBvdXRwdXRzIHRoYXQgcGxhY2UgY29kZSB0YWdzIGluIHByZSB0YWdzXG4gIGNvZGUge1xuICAgIEBpbmNsdWRlIGZvbnQtc2l6ZShpbmhlcml0KTtcbiAgICBjb2xvcjogaW5oZXJpdDtcbiAgICB3b3JkLWJyZWFrOiBub3JtYWw7XG4gIH1cbn1cblxuLy8gRW5hYmxlIHNjcm9sbGFibGUgYmxvY2tzIG9mIGNvZGVcbi5wcmUtc2Nyb2xsYWJsZSB7XG4gIG1heC1oZWlnaHQ6ICRwcmUtc2Nyb2xsYWJsZS1tYXgtaGVpZ2h0O1xuICBvdmVyZmxvdy15OiBzY3JvbGw7XG59XG4iLCIvLyBDb250YWluZXIgd2lkdGhzXG4vL1xuLy8gU2V0IHRoZSBjb250YWluZXIgd2lkdGgsIGFuZCBvdmVycmlkZSBpdCBmb3IgZml4ZWQgbmF2YmFycyBpbiBtZWRpYSBxdWVyaWVzLlxuXG5AaWYgJGVuYWJsZS1ncmlkLWNsYXNzZXMge1xuICAvLyBTaW5nbGUgY29udGFpbmVyIGNsYXNzIHdpdGggYnJlYWtwb2ludCBtYXgtd2lkdGhzXG4gIC5jb250YWluZXIge1xuICAgIEBpbmNsdWRlIG1ha2UtY29udGFpbmVyKCk7XG4gICAgQGluY2x1ZGUgbWFrZS1jb250YWluZXItbWF4LXdpZHRocygpO1xuICB9XG5cbiAgLy8gMTAwJSB3aWRlIGNvbnRhaW5lciBhdCBhbGwgYnJlYWtwb2ludHNcbiAgLmNvbnRhaW5lci1mbHVpZCB7XG4gICAgQGluY2x1ZGUgbWFrZS1jb250YWluZXIoKTtcbiAgfVxuXG4gIC8vIFJlc3BvbnNpdmUgY29udGFpbmVycyB0aGF0IGFyZSAxMDAlIHdpZGUgdW50aWwgYSBicmVha3BvaW50XG4gIEBlYWNoICRicmVha3BvaW50LCAkY29udGFpbmVyLW1heC13aWR0aCBpbiAkY29udGFpbmVyLW1heC13aWR0aHMge1xuICAgIC5jb250YWluZXItI3skYnJlYWtwb2ludH0ge1xuICAgICAgQGV4dGVuZCAuY29udGFpbmVyLWZsdWlkO1xuICAgIH1cblxuICAgIEBpbmNsdWRlIG1lZGlhLWJyZWFrcG9pbnQtdXAoJGJyZWFrcG9pbnQsICRncmlkLWJyZWFrcG9pbnRzKSB7XG4gICAgICAlcmVzcG9uc2l2ZS1jb250YWluZXItI3skYnJlYWtwb2ludH0ge1xuICAgICAgICBtYXgtd2lkdGg6ICRjb250YWluZXItbWF4LXdpZHRoO1xuICAgICAgfVxuXG4gICAgICAvLyBFeHRlbmQgZWFjaCBicmVha3BvaW50IHdoaWNoIGlzIHNtYWxsZXIgb3IgZXF1YWwgdG8gdGhlIGN1cnJlbnQgYnJlYWtwb2ludFxuICAgICAgJGV4dGVuZC1icmVha3BvaW50OiB0cnVlO1xuXG4gICAgICBAZWFjaCAkbmFtZSwgJHdpZHRoIGluICRncmlkLWJyZWFrcG9pbnRzIHtcbiAgICAgICAgQGlmICgkZXh0ZW5kLWJyZWFrcG9pbnQpIHtcbiAgICAgICAgICAuY29udGFpbmVyI3ticmVha3BvaW50LWluZml4KCRuYW1lLCAkZ3JpZC1icmVha3BvaW50cyl9IHtcbiAgICAgICAgICAgIEBleHRlbmQgJXJlc3BvbnNpdmUtY29udGFpbmVyLSN7JGJyZWFrcG9pbnR9O1xuICAgICAgICAgIH1cblxuICAgICAgICAgIC8vIE9uY2UgdGhlIGN1cnJlbnQgYnJlYWtwb2ludCBpcyByZWFjaGVkLCBzdG9wIGV4dGVuZGluZ1xuICAgICAgICAgIEBpZiAoJGJyZWFrcG9pbnQgPT0gJG5hbWUpIHtcbiAgICAgICAgICAgICRleHRlbmQtYnJlYWtwb2ludDogZmFsc2U7XG4gICAgICAgICAgfVxuICAgICAgICB9XG4gICAgICB9XG4gICAgfVxuICB9XG59XG5cblxuLy8gUm93XG4vL1xuLy8gUm93cyBjb250YWluIHlvdXIgY29sdW1ucy5cblxuQGlmICRlbmFibGUtZ3JpZC1jbGFzc2VzIHtcbiAgLnJvdyB7XG4gICAgQGluY2x1ZGUgbWFrZS1yb3coKTtcbiAgfVxuXG4gIC8vIFJlbW92ZSB0aGUgbmVnYXRpdmUgbWFyZ2luIGZyb20gZGVmYXVsdCAucm93LCB0aGVuIHRoZSBob3Jpem9udGFsIHBhZGRpbmdcbiAgLy8gZnJvbSBhbGwgaW1tZWRpYXRlIGNoaWxkcmVuIGNvbHVtbnMgKHRvIHByZXZlbnQgcnVuYXdheSBzdHlsZSBpbmhlcml0YW5jZSkuXG4gIC5uby1ndXR0ZXJzIHtcbiAgICBtYXJnaW4tcmlnaHQ6IDA7XG4gICAgbWFyZ2luLWxlZnQ6IDA7XG5cbiAgICA+IC5jb2wsXG4gICAgPiBbY2xhc3MqPVwiY29sLVwiXSB7XG4gICAgICBwYWRkaW5nLXJpZ2h0OiAwO1xuICAgICAgcGFkZGluZy1sZWZ0OiAwO1xuICAgIH1cbiAgfVxufVxuXG4vLyBDb2x1bW5zXG4vL1xuLy8gQ29tbW9uIHN0eWxlcyBmb3Igc21hbGwgYW5kIGxhcmdlIGdyaWQgY29sdW1uc1xuXG5AaWYgJGVuYWJsZS1ncmlkLWNsYXNzZXMge1xuICBAaW5jbHVkZSBtYWtlLWdyaWQtY29sdW1ucygpO1xufVxuIiwiLy8vIEdyaWQgc3lzdGVtXG4vL1xuLy8gR2VuZXJhdGUgc2VtYW50aWMgZ3JpZCBjb2x1bW5zIHdpdGggdGhlc2UgbWl4aW5zLlxuXG5AbWl4aW4gbWFrZS1jb250YWluZXIoJGd1dHRlcjogJGdyaWQtZ3V0dGVyLXdpZHRoKSB7XG4gIHdpZHRoOiAxMDAlO1xuICBwYWRkaW5nLXJpZ2h0OiAkZ3V0dGVyIC8gMjtcbiAgcGFkZGluZy1sZWZ0OiAkZ3V0dGVyIC8gMjtcbiAgbWFyZ2luLXJpZ2h0OiBhdXRvO1xuICBtYXJnaW4tbGVmdDogYXV0bztcbn1cblxuXG4vLyBGb3IgZWFjaCBicmVha3BvaW50LCBkZWZpbmUgdGhlIG1heGltdW0gd2lkdGggb2YgdGhlIGNvbnRhaW5lciBpbiBhIG1lZGlhIHF1ZXJ5XG5AbWl4aW4gbWFrZS1jb250YWluZXItbWF4LXdpZHRocygkbWF4LXdpZHRoczogJGNvbnRhaW5lci1tYXgtd2lkdGhzLCAkYnJlYWtwb2ludHM6ICRncmlkLWJyZWFrcG9pbnRzKSB7XG4gIEBlYWNoICRicmVha3BvaW50LCAkY29udGFpbmVyLW1heC13aWR0aCBpbiAkbWF4LXdpZHRocyB7XG4gICAgQGluY2x1ZGUgbWVkaWEtYnJlYWtwb2ludC11cCgkYnJlYWtwb2ludCwgJGJyZWFrcG9pbnRzKSB7XG4gICAgICBtYXgtd2lkdGg6ICRjb250YWluZXItbWF4LXdpZHRoO1xuICAgIH1cbiAgfVxufVxuXG5AbWl4aW4gbWFrZS1yb3coJGd1dHRlcjogJGdyaWQtZ3V0dGVyLXdpZHRoKSB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGZsZXgtd3JhcDogd3JhcDtcbiAgbWFyZ2luLXJpZ2h0OiAtJGd1dHRlciAvIDI7XG4gIG1hcmdpbi1sZWZ0OiAtJGd1dHRlciAvIDI7XG59XG5cbkBtaXhpbiBtYWtlLWNvbC1yZWFkeSgkZ3V0dGVyOiAkZ3JpZC1ndXR0ZXItd2lkdGgpIHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICAvLyBQcmV2ZW50IGNvbHVtbnMgZnJvbSBiZWNvbWluZyB0b28gbmFycm93IHdoZW4gYXQgc21hbGxlciBncmlkIHRpZXJzIGJ5XG4gIC8vIGFsd2F5cyBzZXR0aW5nIGB3aWR0aDogMTAwJTtgLiBUaGlzIHdvcmtzIGJlY2F1c2Ugd2UgdXNlIGBmbGV4YCB2YWx1ZXNcbiAgLy8gbGF0ZXIgb24gdG8gb3ZlcnJpZGUgdGhpcyBpbml0aWFsIHdpZHRoLlxuICB3aWR0aDogMTAwJTtcbiAgcGFkZGluZy1yaWdodDogJGd1dHRlciAvIDI7XG4gIHBhZGRpbmctbGVmdDogJGd1dHRlciAvIDI7XG59XG5cbkBtaXhpbiBtYWtlLWNvbCgkc2l6ZSwgJGNvbHVtbnM6ICRncmlkLWNvbHVtbnMpIHtcbiAgZmxleDogMCAwIHBlcmNlbnRhZ2UoJHNpemUgLyAkY29sdW1ucyk7XG4gIC8vIEFkZCBhIGBtYXgtd2lkdGhgIHRvIGVuc3VyZSBjb250ZW50IHdpdGhpbiBlYWNoIGNvbHVtbiBkb2VzIG5vdCBibG93IG91dFxuICAvLyB0aGUgd2lkdGggb2YgdGhlIGNvbHVtbi4gQXBwbGllcyB0byBJRTEwKyBhbmQgRmlyZWZveC4gQ2hyb21lIGFuZCBTYWZhcmlcbiAgLy8gZG8gbm90IGFwcGVhciB0byByZXF1aXJlIHRoaXMuXG4gIG1heC13aWR0aDogcGVyY2VudGFnZSgkc2l6ZSAvICRjb2x1bW5zKTtcbn1cblxuQG1peGluIG1ha2UtY29sLWF1dG8oKSB7XG4gIGZsZXg6IDAgMCBhdXRvO1xuICB3aWR0aDogYXV0bztcbiAgbWF4LXdpZHRoOiAxMDAlOyAvLyBSZXNldCBlYXJsaWVyIGdyaWQgdGllcnNcbn1cblxuQG1peGluIG1ha2UtY29sLW9mZnNldCgkc2l6ZSwgJGNvbHVtbnM6ICRncmlkLWNvbHVtbnMpIHtcbiAgJG51bTogJHNpemUgLyAkY29sdW1ucztcbiAgbWFyZ2luLWxlZnQ6IGlmKCRudW0gPT0gMCwgMCwgcGVyY2VudGFnZSgkbnVtKSk7XG59XG5cbi8vIFJvdyBjb2x1bW5zXG4vL1xuLy8gU3BlY2lmeSBvbiBhIHBhcmVudCBlbGVtZW50KGUuZy4sIC5yb3cpIHRvIGZvcmNlIGltbWVkaWF0ZSBjaGlsZHJlbiBpbnRvIE5OXG4vLyBudW1iZXJvZiBjb2x1bW5zLiBTdXBwb3J0cyB3cmFwcGluZyB0byBuZXcgbGluZXMsIGJ1dCBkb2VzIG5vdCBkbyBhIE1hc29ucnlcbi8vIHN0eWxlIGdyaWQuXG5AbWl4aW4gcm93LWNvbHMoJGNvdW50KSB7XG4gICYgPiAqIHtcbiAgICBmbGV4OiAwIDAgMTAwJSAvICRjb3VudDtcbiAgICBtYXgtd2lkdGg6IDEwMCUgLyAkY291bnQ7XG4gIH1cbn1cbiIsIi8vIEJyZWFrcG9pbnQgdmlld3BvcnQgc2l6ZXMgYW5kIG1lZGlhIHF1ZXJpZXMuXG4vL1xuLy8gQnJlYWtwb2ludHMgYXJlIGRlZmluZWQgYXMgYSBtYXAgb2YgKG5hbWU6IG1pbmltdW0gd2lkdGgpLCBvcmRlciBmcm9tIHNtYWxsIHRvIGxhcmdlOlxuLy9cbi8vICAgICh4czogMCwgc206IDU3NnB4LCBtZDogNzY4cHgsIGxnOiA5OTJweCwgeGw6IDEyMDBweClcbi8vXG4vLyBUaGUgbWFwIGRlZmluZWQgaW4gdGhlIGAkZ3JpZC1icmVha3BvaW50c2AgZ2xvYmFsIHZhcmlhYmxlIGlzIHVzZWQgYXMgdGhlIGAkYnJlYWtwb2ludHNgIGFyZ3VtZW50IGJ5IGRlZmF1bHQuXG5cbi8vIE5hbWUgb2YgdGhlIG5leHQgYnJlYWtwb2ludCwgb3IgbnVsbCBmb3IgdGhlIGxhc3QgYnJlYWtwb2ludC5cbi8vXG4vLyAgICA+PiBicmVha3BvaW50LW5leHQoc20pXG4vLyAgICBtZFxuLy8gICAgPj4gYnJlYWtwb2ludC1uZXh0KHNtLCAoeHM6IDAsIHNtOiA1NzZweCwgbWQ6IDc2OHB4LCBsZzogOTkycHgsIHhsOiAxMjAwcHgpKVxuLy8gICAgbWRcbi8vICAgID4+IGJyZWFrcG9pbnQtbmV4dChzbSwgJGJyZWFrcG9pbnQtbmFtZXM6ICh4cyBzbSBtZCBsZyB4bCkpXG4vLyAgICBtZFxuQGZ1bmN0aW9uIGJyZWFrcG9pbnQtbmV4dCgkbmFtZSwgJGJyZWFrcG9pbnRzOiAkZ3JpZC1icmVha3BvaW50cywgJGJyZWFrcG9pbnQtbmFtZXM6IG1hcC1rZXlzKCRicmVha3BvaW50cykpIHtcbiAgJG46IGluZGV4KCRicmVha3BvaW50LW5hbWVzLCAkbmFtZSk7XG4gIEByZXR1cm4gaWYoJG4gIT0gbnVsbCBhbmQgJG4gPCBsZW5ndGgoJGJyZWFrcG9pbnQtbmFtZXMpLCBudGgoJGJyZWFrcG9pbnQtbmFtZXMsICRuICsgMSksIG51bGwpO1xufVxuXG4vLyBNaW5pbXVtIGJyZWFrcG9pbnQgd2lkdGguIE51bGwgZm9yIHRoZSBzbWFsbGVzdCAoZmlyc3QpIGJyZWFrcG9pbnQuXG4vL1xuLy8gICAgPj4gYnJlYWtwb2ludC1taW4oc20sICh4czogMCwgc206IDU3NnB4LCBtZDogNzY4cHgsIGxnOiA5OTJweCwgeGw6IDEyMDBweCkpXG4vLyAgICA1NzZweFxuQGZ1bmN0aW9uIGJyZWFrcG9pbnQtbWluKCRuYW1lLCAkYnJlYWtwb2ludHM6ICRncmlkLWJyZWFrcG9pbnRzKSB7XG4gICRtaW46IG1hcC1nZXQoJGJyZWFrcG9pbnRzLCAkbmFtZSk7XG4gIEByZXR1cm4gaWYoJG1pbiAhPSAwLCAkbWluLCBudWxsKTtcbn1cblxuLy8gTWF4aW11bSBicmVha3BvaW50IHdpZHRoLiBOdWxsIGZvciB0aGUgbGFyZ2VzdCAobGFzdCkgYnJlYWtwb2ludC5cbi8vIFRoZSBtYXhpbXVtIHZhbHVlIGlzIGNhbGN1bGF0ZWQgYXMgdGhlIG1pbmltdW0gb2YgdGhlIG5leHQgb25lIGxlc3MgMC4wMnB4XG4vLyB0byB3b3JrIGFyb3VuZCB0aGUgbGltaXRhdGlvbnMgb2YgYG1pbi1gIGFuZCBgbWF4LWAgcHJlZml4ZXMgYW5kIHZpZXdwb3J0cyB3aXRoIGZyYWN0aW9uYWwgd2lkdGhzLlxuLy8gU2VlIGh0dHBzOi8vd3d3LnczLm9yZy9UUi9tZWRpYXF1ZXJpZXMtNC8jbXEtbWluLW1heFxuLy8gVXNlcyAwLjAycHggcmF0aGVyIHRoYW4gMC4wMXB4IHRvIHdvcmsgYXJvdW5kIGEgY3VycmVudCByb3VuZGluZyBidWcgaW4gU2FmYXJpLlxuLy8gU2VlIGh0dHBzOi8vYnVncy53ZWJraXQub3JnL3Nob3dfYnVnLmNnaT9pZD0xNzgyNjFcbi8vXG4vLyAgICA+PiBicmVha3BvaW50LW1heChzbSwgKHhzOiAwLCBzbTogNTc2cHgsIG1kOiA3NjhweCwgbGc6IDk5MnB4LCB4bDogMTIwMHB4KSlcbi8vICAgIDc2Ny45OHB4XG5AZnVuY3Rpb24gYnJlYWtwb2ludC1tYXgoJG5hbWUsICRicmVha3BvaW50czogJGdyaWQtYnJlYWtwb2ludHMpIHtcbiAgJG5leHQ6IGJyZWFrcG9pbnQtbmV4dCgkbmFtZSwgJGJyZWFrcG9pbnRzKTtcbiAgQHJldHVybiBpZigkbmV4dCwgYnJlYWtwb2ludC1taW4oJG5leHQsICRicmVha3BvaW50cykgLSAuMDIsIG51bGwpO1xufVxuXG4vLyBSZXR1cm5zIGEgYmxhbmsgc3RyaW5nIGlmIHNtYWxsZXN0IGJyZWFrcG9pbnQsIG90aGVyd2lzZSByZXR1cm5zIHRoZSBuYW1lIHdpdGggYSBkYXNoIGluIGZyb250LlxuLy8gVXNlZnVsIGZvciBtYWtpbmcgcmVzcG9uc2l2ZSB1dGlsaXRpZXMuXG4vL1xuLy8gICAgPj4gYnJlYWtwb2ludC1pbmZpeCh4cywgKHhzOiAwLCBzbTogNTc2cHgsIG1kOiA3NjhweCwgbGc6IDk5MnB4LCB4bDogMTIwMHB4KSlcbi8vICAgIFwiXCIgIChSZXR1cm5zIGEgYmxhbmsgc3RyaW5nKVxuLy8gICAgPj4gYnJlYWtwb2ludC1pbmZpeChzbSwgKHhzOiAwLCBzbTogNTc2cHgsIG1kOiA3NjhweCwgbGc6IDk5MnB4LCB4bDogMTIwMHB4KSlcbi8vICAgIFwiLXNtXCJcbkBmdW5jdGlvbiBicmVha3BvaW50LWluZml4KCRuYW1lLCAkYnJlYWtwb2ludHM6ICRncmlkLWJyZWFrcG9pbnRzKSB7XG4gIEByZXR1cm4gaWYoYnJlYWtwb2ludC1taW4oJG5hbWUsICRicmVha3BvaW50cykgPT0gbnVsbCwgXCJcIiwgXCItI3skbmFtZX1cIik7XG59XG5cbi8vIE1lZGlhIG9mIGF0IGxlYXN0IHRoZSBtaW5pbXVtIGJyZWFrcG9pbnQgd2lkdGguIE5vIHF1ZXJ5IGZvciB0aGUgc21hbGxlc3QgYnJlYWtwb2ludC5cbi8vIE1ha2VzIHRoZSBAY29udGVudCBhcHBseSB0byB0aGUgZ2l2ZW4gYnJlYWtwb2ludCBhbmQgd2lkZXIuXG5AbWl4aW4gbWVkaWEtYnJlYWtwb2ludC11cCgkbmFtZSwgJGJyZWFrcG9pbnRzOiAkZ3JpZC1icmVha3BvaW50cykge1xuICAkbWluOiBicmVha3BvaW50LW1pbigkbmFtZSwgJGJyZWFrcG9pbnRzKTtcbiAgQGlmICRtaW4ge1xuICAgIEBtZWRpYSAobWluLXdpZHRoOiAkbWluKSB7XG4gICAgICBAY29udGVudDtcbiAgICB9XG4gIH0gQGVsc2Uge1xuICAgIEBjb250ZW50O1xuICB9XG59XG5cbi8vIE1lZGlhIG9mIGF0IG1vc3QgdGhlIG1heGltdW0gYnJlYWtwb2ludCB3aWR0aC4gTm8gcXVlcnkgZm9yIHRoZSBsYXJnZXN0IGJyZWFrcG9pbnQuXG4vLyBNYWtlcyB0aGUgQGNvbnRlbnQgYXBwbHkgdG8gdGhlIGdpdmVuIGJyZWFrcG9pbnQgYW5kIG5hcnJvd2VyLlxuQG1peGluIG1lZGlhLWJyZWFrcG9pbnQtZG93bigkbmFtZSwgJGJyZWFrcG9pbnRzOiAkZ3JpZC1icmVha3BvaW50cykge1xuICAkbWF4OiBicmVha3BvaW50LW1heCgkbmFtZSwgJGJyZWFrcG9pbnRzKTtcbiAgQGlmICRtYXgge1xuICAgIEBtZWRpYSAobWF4LXdpZHRoOiAkbWF4KSB7XG4gICAgICBAY29udGVudDtcbiAgICB9XG4gIH0gQGVsc2Uge1xuICAgIEBjb250ZW50O1xuICB9XG59XG5cbi8vIE1lZGlhIHRoYXQgc3BhbnMgbXVsdGlwbGUgYnJlYWtwb2ludCB3aWR0aHMuXG4vLyBNYWtlcyB0aGUgQGNvbnRlbnQgYXBwbHkgYmV0d2VlbiB0aGUgbWluIGFuZCBtYXggYnJlYWtwb2ludHNcbkBtaXhpbiBtZWRpYS1icmVha3BvaW50LWJldHdlZW4oJGxvd2VyLCAkdXBwZXIsICRicmVha3BvaW50czogJGdyaWQtYnJlYWtwb2ludHMpIHtcbiAgJG1pbjogYnJlYWtwb2ludC1taW4oJGxvd2VyLCAkYnJlYWtwb2ludHMpO1xuICAkbWF4OiBicmVha3BvaW50LW1heCgkdXBwZXIsICRicmVha3BvaW50cyk7XG5cbiAgQGlmICRtaW4gIT0gbnVsbCBhbmQgJG1heCAhPSBudWxsIHtcbiAgICBAbWVkaWEgKG1pbi13aWR0aDogJG1pbikgYW5kIChtYXgtd2lkdGg6ICRtYXgpIHtcbiAgICAgIEBjb250ZW50O1xuICAgIH1cbiAgfSBAZWxzZSBpZiAkbWF4ID09IG51bGwge1xuICAgIEBpbmNsdWRlIG1lZGlhLWJyZWFrcG9pbnQtdXAoJGxvd2VyLCAkYnJlYWtwb2ludHMpIHtcbiAgICAgIEBjb250ZW50O1xuICAgIH1cbiAgfSBAZWxzZSBpZiAkbWluID09IG51bGwge1xuICAgIEBpbmNsdWRlIG1lZGlhLWJyZWFrcG9pbnQtZG93bigkdXBwZXIsICRicmVha3BvaW50cykge1xuICAgICAgQGNvbnRlbnQ7XG4gICAgfVxuICB9XG59XG5cbi8vIE1lZGlhIGJldHdlZW4gdGhlIGJyZWFrcG9pbnQncyBtaW5pbXVtIGFuZCBtYXhpbXVtIHdpZHRocy5cbi8vIE5vIG1pbmltdW0gZm9yIHRoZSBzbWFsbGVzdCBicmVha3BvaW50LCBhbmQgbm8gbWF4aW11bSBmb3IgdGhlIGxhcmdlc3Qgb25lLlxuLy8gTWFrZXMgdGhlIEBjb250ZW50IGFwcGx5IG9ubHkgdG8gdGhlIGdpdmVuIGJyZWFrcG9pbnQsIG5vdCB2aWV3cG9ydHMgYW55IHdpZGVyIG9yIG5hcnJvd2VyLlxuQG1peGluIG1lZGlhLWJyZWFrcG9pbnQtb25seSgkbmFtZSwgJGJyZWFrcG9pbnRzOiAkZ3JpZC1icmVha3BvaW50cykge1xuICAkbWluOiBicmVha3BvaW50LW1pbigkbmFtZSwgJGJyZWFrcG9pbnRzKTtcbiAgJG1heDogYnJlYWtwb2ludC1tYXgoJG5hbWUsICRicmVha3BvaW50cyk7XG5cbiAgQGlmICRtaW4gIT0gbnVsbCBhbmQgJG1heCAhPSBudWxsIHtcbiAgICBAbWVkaWEgKG1pbi13aWR0aDogJG1pbikgYW5kIChtYXgtd2lkdGg6ICRtYXgpIHtcbiAgICAgIEBjb250ZW50O1xuICAgIH1cbiAgfSBAZWxzZSBpZiAkbWF4ID09IG51bGwge1xuICAgIEBpbmNsdWRlIG1lZGlhLWJyZWFrcG9pbnQtdXAoJG5hbWUsICRicmVha3BvaW50cykge1xuICAgICAgQGNvbnRlbnQ7XG4gICAgfVxuICB9IEBlbHNlIGlmICRtaW4gPT0gbnVsbCB7XG4gICAgQGluY2x1ZGUgbWVkaWEtYnJlYWtwb2ludC1kb3duKCRuYW1lLCAkYnJlYWtwb2ludHMpIHtcbiAgICAgIEBjb250ZW50O1xuICAgIH1cbiAgfVxufVxuIiwiLy8gRnJhbWV3b3JrIGdyaWQgZ2VuZXJhdGlvblxuLy9cbi8vIFVzZWQgb25seSBieSBCb290c3RyYXAgdG8gZ2VuZXJhdGUgdGhlIGNvcnJlY3QgbnVtYmVyIG9mIGdyaWQgY2xhc3NlcyBnaXZlblxuLy8gYW55IHZhbHVlIG9mIGAkZ3JpZC1jb2x1bW5zYC5cblxuQG1peGluIG1ha2UtZ3JpZC1jb2x1bW5zKCRjb2x1bW5zOiAkZ3JpZC1jb2x1bW5zLCAkZ3V0dGVyOiAkZ3JpZC1ndXR0ZXItd2lkdGgsICRicmVha3BvaW50czogJGdyaWQtYnJlYWtwb2ludHMpIHtcbiAgLy8gQ29tbW9uIHByb3BlcnRpZXMgZm9yIGFsbCBicmVha3BvaW50c1xuICAlZ3JpZC1jb2x1bW4ge1xuICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgICB3aWR0aDogMTAwJTtcbiAgICBwYWRkaW5nLXJpZ2h0OiAkZ3V0dGVyIC8gMjtcbiAgICBwYWRkaW5nLWxlZnQ6ICRndXR0ZXIgLyAyO1xuICB9XG5cbiAgQGVhY2ggJGJyZWFrcG9pbnQgaW4gbWFwLWtleXMoJGJyZWFrcG9pbnRzKSB7XG4gICAgJGluZml4OiBicmVha3BvaW50LWluZml4KCRicmVha3BvaW50LCAkYnJlYWtwb2ludHMpO1xuXG4gICAgQGlmICRjb2x1bW5zID4gMCB7XG4gICAgICAvLyBBbGxvdyBjb2x1bW5zIHRvIHN0cmV0Y2ggZnVsbCB3aWR0aCBiZWxvdyB0aGVpciBicmVha3BvaW50c1xuICAgICAgQGZvciAkaSBmcm9tIDEgdGhyb3VnaCAkY29sdW1ucyB7XG4gICAgICAgIC5jb2wjeyRpbmZpeH0tI3skaX0ge1xuICAgICAgICAgIEBleHRlbmQgJWdyaWQtY29sdW1uO1xuICAgICAgICB9XG4gICAgICB9XG4gICAgfVxuXG4gICAgLmNvbCN7JGluZml4fSxcbiAgICAuY29sI3skaW5maXh9LWF1dG8ge1xuICAgICAgQGV4dGVuZCAlZ3JpZC1jb2x1bW47XG4gICAgfVxuXG4gICAgQGluY2x1ZGUgbWVkaWEtYnJlYWtwb2ludC11cCgkYnJlYWtwb2ludCwgJGJyZWFrcG9pbnRzKSB7XG4gICAgICAvLyBQcm92aWRlIGJhc2ljIGAuY29sLXticH1gIGNsYXNzZXMgZm9yIGVxdWFsLXdpZHRoIGZsZXhib3ggY29sdW1uc1xuICAgICAgLmNvbCN7JGluZml4fSB7XG4gICAgICAgIGZsZXgtYmFzaXM6IDA7XG4gICAgICAgIGZsZXgtZ3JvdzogMTtcbiAgICAgICAgbWluLXdpZHRoOiAwOyAvLyBTZWUgaHR0cHM6Ly9naXRodWIuY29tL3R3YnMvYm9vdHN0cmFwL2lzc3Vlcy8yNTQxMFxuICAgICAgICBtYXgtd2lkdGg6IDEwMCU7XG4gICAgICB9XG5cbiAgICAgIEBpZiAkZ3JpZC1yb3ctY29sdW1ucyA+IDAge1xuICAgICAgICBAZm9yICRpIGZyb20gMSB0aHJvdWdoICRncmlkLXJvdy1jb2x1bW5zIHtcbiAgICAgICAgICAucm93LWNvbHMjeyRpbmZpeH0tI3skaX0ge1xuICAgICAgICAgICAgQGluY2x1ZGUgcm93LWNvbHMoJGkpO1xuICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgICAgfVxuXG4gICAgICAuY29sI3skaW5maXh9LWF1dG8ge1xuICAgICAgICBAaW5jbHVkZSBtYWtlLWNvbC1hdXRvKCk7XG4gICAgICB9XG5cbiAgICAgIEBpZiAkY29sdW1ucyA+IDAge1xuICAgICAgICBAZm9yICRpIGZyb20gMSB0aHJvdWdoICRjb2x1bW5zIHtcbiAgICAgICAgICAuY29sI3skaW5maXh9LSN7JGl9IHtcbiAgICAgICAgICAgIEBpbmNsdWRlIG1ha2UtY29sKCRpLCAkY29sdW1ucyk7XG4gICAgICAgICAgfVxuICAgICAgICB9XG4gICAgICB9XG5cbiAgICAgIC5vcmRlciN7JGluZml4fS1maXJzdCB7IG9yZGVyOiAtMTsgfVxuXG4gICAgICAub3JkZXIjeyRpbmZpeH0tbGFzdCB7IG9yZGVyOiAkY29sdW1ucyArIDE7IH1cblxuICAgICAgQGZvciAkaSBmcm9tIDAgdGhyb3VnaCAkY29sdW1ucyB7XG4gICAgICAgIC5vcmRlciN7JGluZml4fS0jeyRpfSB7IG9yZGVyOiAkaTsgfVxuICAgICAgfVxuXG4gICAgICBAaWYgJGNvbHVtbnMgPiAwIHtcbiAgICAgICAgLy8gYCRjb2x1bW5zIC0gMWAgYmVjYXVzZSBvZmZzZXR0aW5nIGJ5IHRoZSB3aWR0aCBvZiBhbiBlbnRpcmUgcm93IGlzbid0IHBvc3NpYmxlXG4gICAgICAgIEBmb3IgJGkgZnJvbSAwIHRocm91Z2ggKCRjb2x1bW5zIC0gMSkge1xuICAgICAgICAgIEBpZiBub3QgKCRpbmZpeCA9PSBcIlwiIGFuZCAkaSA9PSAwKSB7IC8vIEF2b2lkIGVtaXR0aW5nIHVzZWxlc3MgLm9mZnNldC0wXG4gICAgICAgICAgICAub2Zmc2V0I3skaW5maXh9LSN7JGl9IHtcbiAgICAgICAgICAgICAgQGluY2x1ZGUgbWFrZS1jb2wtb2Zmc2V0KCRpLCAkY29sdW1ucyk7XG4gICAgICAgICAgICB9XG4gICAgICAgICAgfVxuICAgICAgICB9XG4gICAgICB9XG4gICAgfVxuICB9XG59XG4iLCIvL1xuLy8gQmFzaWMgQm9vdHN0cmFwIHRhYmxlXG4vL1xuXG4udGFibGUge1xuICB3aWR0aDogMTAwJTtcbiAgbWFyZ2luLWJvdHRvbTogJHNwYWNlcjtcbiAgY29sb3I6ICR0YWJsZS1jb2xvcjtcbiAgYmFja2dyb3VuZC1jb2xvcjogJHRhYmxlLWJnOyAvLyBSZXNldCBmb3IgbmVzdGluZyB3aXRoaW4gcGFyZW50cyB3aXRoIGBiYWNrZ3JvdW5kLWNvbG9yYC5cblxuICB0aCxcbiAgdGQge1xuICAgIHBhZGRpbmc6ICR0YWJsZS1jZWxsLXBhZGRpbmc7XG4gICAgdmVydGljYWwtYWxpZ246IHRvcDtcbiAgICBib3JkZXItdG9wOiAkdGFibGUtYm9yZGVyLXdpZHRoIHNvbGlkICR0YWJsZS1ib3JkZXItY29sb3I7XG4gIH1cblxuICB0aGVhZCB0aCB7XG4gICAgdmVydGljYWwtYWxpZ246IGJvdHRvbTtcbiAgICBib3JkZXItYm90dG9tOiAoMiAqICR0YWJsZS1ib3JkZXItd2lkdGgpIHNvbGlkICR0YWJsZS1ib3JkZXItY29sb3I7XG4gIH1cblxuICB0Ym9keSArIHRib2R5IHtcbiAgICBib3JkZXItdG9wOiAoMiAqICR0YWJsZS1ib3JkZXItd2lkdGgpIHNvbGlkICR0YWJsZS1ib3JkZXItY29sb3I7XG4gIH1cbn1cblxuXG4vL1xuLy8gQ29uZGVuc2VkIHRhYmxlIHcvIGhhbGYgcGFkZGluZ1xuLy9cblxuLnRhYmxlLXNtIHtcbiAgdGgsXG4gIHRkIHtcbiAgICBwYWRkaW5nOiAkdGFibGUtY2VsbC1wYWRkaW5nLXNtO1xuICB9XG59XG5cblxuLy8gQm9yZGVyIHZlcnNpb25zXG4vL1xuLy8gQWRkIG9yIHJlbW92ZSBib3JkZXJzIGFsbCBhcm91bmQgdGhlIHRhYmxlIGFuZCBiZXR3ZWVuIGFsbCB0aGUgY29sdW1ucy5cblxuLnRhYmxlLWJvcmRlcmVkIHtcbiAgYm9yZGVyOiAkdGFibGUtYm9yZGVyLXdpZHRoIHNvbGlkICR0YWJsZS1ib3JkZXItY29sb3I7XG5cbiAgdGgsXG4gIHRkIHtcbiAgICBib3JkZXI6ICR0YWJsZS1ib3JkZXItd2lkdGggc29saWQgJHRhYmxlLWJvcmRlci1jb2xvcjtcbiAgfVxuXG4gIHRoZWFkIHtcbiAgICB0aCxcbiAgICB0ZCB7XG4gICAgICBib3JkZXItYm90dG9tLXdpZHRoOiAyICogJHRhYmxlLWJvcmRlci13aWR0aDtcbiAgICB9XG4gIH1cbn1cblxuLnRhYmxlLWJvcmRlcmxlc3Mge1xuICB0aCxcbiAgdGQsXG4gIHRoZWFkIHRoLFxuICB0Ym9keSArIHRib2R5IHtcbiAgICBib3JkZXI6IDA7XG4gIH1cbn1cblxuLy8gWmVicmEtc3RyaXBpbmdcbi8vXG4vLyBEZWZhdWx0IHplYnJhLXN0cmlwZSBzdHlsZXMgKGFsdGVybmF0aW5nIGdyYXkgYW5kIHRyYW5zcGFyZW50IGJhY2tncm91bmRzKVxuXG4udGFibGUtc3RyaXBlZCB7XG4gIHRib2R5IHRyOm50aC1vZi10eXBlKCN7JHRhYmxlLXN0cmlwZWQtb3JkZXJ9KSB7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogJHRhYmxlLWFjY2VudC1iZztcbiAgfVxufVxuXG5cbi8vIEhvdmVyIGVmZmVjdFxuLy9cbi8vIFBsYWNlZCBoZXJlIHNpbmNlIGl0IGhhcyB0byBjb21lIGFmdGVyIHRoZSBwb3RlbnRpYWwgemVicmEgc3RyaXBpbmdcblxuLnRhYmxlLWhvdmVyIHtcbiAgdGJvZHkgdHIge1xuICAgIEBpbmNsdWRlIGhvdmVyKCkge1xuICAgICAgY29sb3I6ICR0YWJsZS1ob3Zlci1jb2xvcjtcbiAgICAgIGJhY2tncm91bmQtY29sb3I6ICR0YWJsZS1ob3Zlci1iZztcbiAgICB9XG4gIH1cbn1cblxuXG4vLyBUYWJsZSBiYWNrZ3JvdW5kc1xuLy9cbi8vIEV4YWN0IHNlbGVjdG9ycyBiZWxvdyByZXF1aXJlZCB0byBvdmVycmlkZSBgLnRhYmxlLXN0cmlwZWRgIGFuZCBwcmV2ZW50XG4vLyBpbmhlcml0YW5jZSB0byBuZXN0ZWQgdGFibGVzLlxuXG5AZWFjaCAkY29sb3IsICR2YWx1ZSBpbiAkdGhlbWUtY29sb3JzIHtcbiAgQGluY2x1ZGUgdGFibGUtcm93LXZhcmlhbnQoJGNvbG9yLCB0aGVtZS1jb2xvci1sZXZlbCgkY29sb3IsICR0YWJsZS1iZy1sZXZlbCksIHRoZW1lLWNvbG9yLWxldmVsKCRjb2xvciwgJHRhYmxlLWJvcmRlci1sZXZlbCkpO1xufVxuXG5AaW5jbHVkZSB0YWJsZS1yb3ctdmFyaWFudChhY3RpdmUsICR0YWJsZS1hY3RpdmUtYmcpO1xuXG5cbi8vIERhcmsgc3R5bGVzXG4vL1xuLy8gU2FtZSB0YWJsZSBtYXJrdXAsIGJ1dCBpbnZlcnRlZCBjb2xvciBzY2hlbWU6IGRhcmsgYmFja2dyb3VuZCBhbmQgbGlnaHQgdGV4dC5cblxuLy8gc3R5bGVsaW50LWRpc2FibGUtbmV4dC1saW5lIG5vLWR1cGxpY2F0ZS1zZWxlY3RvcnNcbi50YWJsZSB7XG4gIC50aGVhZC1kYXJrIHtcbiAgICB0aCB7XG4gICAgICBjb2xvcjogJHRhYmxlLWRhcmstY29sb3I7XG4gICAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkdGFibGUtZGFyay1iZztcbiAgICAgIGJvcmRlci1jb2xvcjogJHRhYmxlLWRhcmstYm9yZGVyLWNvbG9yO1xuICAgIH1cbiAgfVxuXG4gIC50aGVhZC1saWdodCB7XG4gICAgdGgge1xuICAgICAgY29sb3I6ICR0YWJsZS1oZWFkLWNvbG9yO1xuICAgICAgYmFja2dyb3VuZC1jb2xvcjogJHRhYmxlLWhlYWQtYmc7XG4gICAgICBib3JkZXItY29sb3I6ICR0YWJsZS1ib3JkZXItY29sb3I7XG4gICAgfVxuICB9XG59XG5cbi50YWJsZS1kYXJrIHtcbiAgY29sb3I6ICR0YWJsZS1kYXJrLWNvbG9yO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAkdGFibGUtZGFyay1iZztcblxuICB0aCxcbiAgdGQsXG4gIHRoZWFkIHRoIHtcbiAgICBib3JkZXItY29sb3I6ICR0YWJsZS1kYXJrLWJvcmRlci1jb2xvcjtcbiAgfVxuXG4gICYudGFibGUtYm9yZGVyZWQge1xuICAgIGJvcmRlcjogMDtcbiAgfVxuXG4gICYudGFibGUtc3RyaXBlZCB7XG4gICAgdGJvZHkgdHI6bnRoLW9mLXR5cGUoI3skdGFibGUtc3RyaXBlZC1vcmRlcn0pIHtcbiAgICAgIGJhY2tncm91bmQtY29sb3I6ICR0YWJsZS1kYXJrLWFjY2VudC1iZztcbiAgICB9XG4gIH1cblxuICAmLnRhYmxlLWhvdmVyIHtcbiAgICB0Ym9keSB0ciB7XG4gICAgICBAaW5jbHVkZSBob3ZlcigpIHtcbiAgICAgICAgY29sb3I6ICR0YWJsZS1kYXJrLWhvdmVyLWNvbG9yO1xuICAgICAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkdGFibGUtZGFyay1ob3Zlci1iZztcbiAgICAgIH1cbiAgICB9XG4gIH1cbn1cblxuXG4vLyBSZXNwb25zaXZlIHRhYmxlc1xuLy9cbi8vIEdlbmVyYXRlIHNlcmllcyBvZiBgLnRhYmxlLXJlc3BvbnNpdmUtKmAgY2xhc3NlcyBmb3IgY29uZmlndXJpbmcgdGhlIHNjcmVlblxuLy8gc2l6ZSBvZiB3aGVyZSB5b3VyIHRhYmxlIHdpbGwgb3ZlcmZsb3cuXG5cbi50YWJsZS1yZXNwb25zaXZlIHtcbiAgQGVhY2ggJGJyZWFrcG9pbnQgaW4gbWFwLWtleXMoJGdyaWQtYnJlYWtwb2ludHMpIHtcbiAgICAkbmV4dDogYnJlYWtwb2ludC1uZXh0KCRicmVha3BvaW50LCAkZ3JpZC1icmVha3BvaW50cyk7XG4gICAgJGluZml4OiBicmVha3BvaW50LWluZml4KCRuZXh0LCAkZ3JpZC1icmVha3BvaW50cyk7XG5cbiAgICAmI3skaW5maXh9IHtcbiAgICAgIEBpbmNsdWRlIG1lZGlhLWJyZWFrcG9pbnQtZG93bigkYnJlYWtwb2ludCkge1xuICAgICAgICBkaXNwbGF5OiBibG9jaztcbiAgICAgICAgd2lkdGg6IDEwMCU7XG4gICAgICAgIG92ZXJmbG93LXg6IGF1dG87XG4gICAgICAgIC13ZWJraXQtb3ZlcmZsb3ctc2Nyb2xsaW5nOiB0b3VjaDtcblxuICAgICAgICAvLyBQcmV2ZW50IGRvdWJsZSBib3JkZXIgb24gaG9yaXpvbnRhbCBzY3JvbGwgZHVlIHRvIHVzZSBvZiBgZGlzcGxheTogYmxvY2s7YFxuICAgICAgICA+IC50YWJsZS1ib3JkZXJlZCB7XG4gICAgICAgICAgYm9yZGVyOiAwO1xuICAgICAgICB9XG4gICAgICB9XG4gICAgfVxuICB9XG59XG4iLCIvLyBUYWJsZXNcblxuQG1peGluIHRhYmxlLXJvdy12YXJpYW50KCRzdGF0ZSwgJGJhY2tncm91bmQsICRib3JkZXI6IG51bGwpIHtcbiAgLy8gRXhhY3Qgc2VsZWN0b3JzIGJlbG93IHJlcXVpcmVkIHRvIG92ZXJyaWRlIGAudGFibGUtc3RyaXBlZGAgYW5kIHByZXZlbnRcbiAgLy8gaW5oZXJpdGFuY2UgdG8gbmVzdGVkIHRhYmxlcy5cbiAgLnRhYmxlLSN7JHN0YXRlfSB7XG4gICAgJixcbiAgICA+IHRoLFxuICAgID4gdGQge1xuICAgICAgYmFja2dyb3VuZC1jb2xvcjogJGJhY2tncm91bmQ7XG4gICAgfVxuXG4gICAgQGlmICRib3JkZXIgIT0gbnVsbCB7XG4gICAgICB0aCxcbiAgICAgIHRkLFxuICAgICAgdGhlYWQgdGgsXG4gICAgICB0Ym9keSArIHRib2R5IHtcbiAgICAgICAgYm9yZGVyLWNvbG9yOiAkYm9yZGVyO1xuICAgICAgfVxuICAgIH1cbiAgfVxuXG4gIC8vIEhvdmVyIHN0YXRlcyBmb3IgYC50YWJsZS1ob3ZlcmBcbiAgLy8gTm90ZTogdGhpcyBpcyBub3QgYXZhaWxhYmxlIGZvciBjZWxscyBvciByb3dzIHdpdGhpbiBgdGhlYWRgIG9yIGB0Zm9vdGAuXG4gIC50YWJsZS1ob3ZlciB7XG4gICAgJGhvdmVyLWJhY2tncm91bmQ6IGRhcmtlbigkYmFja2dyb3VuZCwgNSUpO1xuXG4gICAgLnRhYmxlLSN7JHN0YXRlfSB7XG4gICAgICBAaW5jbHVkZSBob3ZlcigpIHtcbiAgICAgICAgYmFja2dyb3VuZC1jb2xvcjogJGhvdmVyLWJhY2tncm91bmQ7XG5cbiAgICAgICAgPiB0ZCxcbiAgICAgICAgPiB0aCB7XG4gICAgICAgICAgYmFja2dyb3VuZC1jb2xvcjogJGhvdmVyLWJhY2tncm91bmQ7XG4gICAgICAgIH1cbiAgICAgIH1cbiAgICB9XG4gIH1cbn1cbiIsIi8vIEJvb3RzdHJhcCBmdW5jdGlvbnNcbi8vXG4vLyBVdGlsaXR5IG1peGlucyBhbmQgZnVuY3Rpb25zIGZvciBldmFsdWF0aW5nIHNvdXJjZSBjb2RlIGFjcm9zcyBvdXIgdmFyaWFibGVzLCBtYXBzLCBhbmQgbWl4aW5zLlxuXG4vLyBBc2NlbmRpbmdcbi8vIFVzZWQgdG8gZXZhbHVhdGUgU2FzcyBtYXBzIGxpa2Ugb3VyIGdyaWQgYnJlYWtwb2ludHMuXG5AbWl4aW4gX2Fzc2VydC1hc2NlbmRpbmcoJG1hcCwgJG1hcC1uYW1lKSB7XG4gICRwcmV2LWtleTogbnVsbDtcbiAgJHByZXYtbnVtOiBudWxsO1xuICBAZWFjaCAka2V5LCAkbnVtIGluICRtYXAge1xuICAgIEBpZiAkcHJldi1udW0gPT0gbnVsbCBvciB1bml0KCRudW0pID09IFwiJVwiIG9yIHVuaXQoJHByZXYtbnVtKSA9PSBcIiVcIiB7XG4gICAgICAvLyBEbyBub3RoaW5nXG4gICAgfSBAZWxzZSBpZiBub3QgY29tcGFyYWJsZSgkcHJldi1udW0sICRudW0pIHtcbiAgICAgIEB3YXJuIFwiUG90ZW50aWFsbHkgaW52YWxpZCB2YWx1ZSBmb3IgI3skbWFwLW5hbWV9OiBUaGlzIG1hcCBtdXN0IGJlIGluIGFzY2VuZGluZyBvcmRlciwgYnV0IGtleSAnI3ska2V5fScgaGFzIHZhbHVlICN7JG51bX0gd2hvc2UgdW5pdCBtYWtlcyBpdCBpbmNvbXBhcmFibGUgdG8gI3skcHJldi1udW19LCB0aGUgdmFsdWUgb2YgdGhlIHByZXZpb3VzIGtleSAnI3skcHJldi1rZXl9JyAhXCI7XG4gICAgfSBAZWxzZSBpZiAkcHJldi1udW0gPj0gJG51bSB7XG4gICAgICBAd2FybiBcIkludmFsaWQgdmFsdWUgZm9yICN7JG1hcC1uYW1lfTogVGhpcyBtYXAgbXVzdCBiZSBpbiBhc2NlbmRpbmcgb3JkZXIsIGJ1dCBrZXkgJyN7JGtleX0nIGhhcyB2YWx1ZSAjeyRudW19IHdoaWNoIGlzbid0IGdyZWF0ZXIgdGhhbiAjeyRwcmV2LW51bX0sIHRoZSB2YWx1ZSBvZiB0aGUgcHJldmlvdXMga2V5ICcjeyRwcmV2LWtleX0nICFcIjtcbiAgICB9XG4gICAgJHByZXYta2V5OiAka2V5O1xuICAgICRwcmV2LW51bTogJG51bTtcbiAgfVxufVxuXG4vLyBTdGFydHMgYXQgemVyb1xuLy8gVXNlZCB0byBlbnN1cmUgdGhlIG1pbi13aWR0aCBvZiB0aGUgbG93ZXN0IGJyZWFrcG9pbnQgc3RhcnRzIGF0IDAuXG5AbWl4aW4gX2Fzc2VydC1zdGFydHMtYXQtemVybygkbWFwLCAkbWFwLW5hbWU6IFwiJGdyaWQtYnJlYWtwb2ludHNcIikge1xuICBAaWYgbGVuZ3RoKCRtYXApID4gMCB7XG4gICAgJHZhbHVlczogbWFwLXZhbHVlcygkbWFwKTtcbiAgICAkZmlyc3QtdmFsdWU6IG50aCgkdmFsdWVzLCAxKTtcbiAgICBAaWYgJGZpcnN0LXZhbHVlICE9IDAge1xuICAgICAgQHdhcm4gXCJGaXJzdCBicmVha3BvaW50IGluICN7JG1hcC1uYW1lfSBtdXN0IHN0YXJ0IGF0IDAsIGJ1dCBzdGFydHMgYXQgI3skZmlyc3QtdmFsdWV9LlwiO1xuICAgIH1cbiAgfVxufVxuXG4vLyBSZXBsYWNlIGAkc2VhcmNoYCB3aXRoIGAkcmVwbGFjZWAgaW4gYCRzdHJpbmdgXG4vLyBVc2VkIG9uIG91ciBTVkcgaWNvbiBiYWNrZ3JvdW5kcyBmb3IgY3VzdG9tIGZvcm1zLlxuLy9cbi8vIEBhdXRob3IgSHVnbyBHaXJhdWRlbFxuLy8gQHBhcmFtIHtTdHJpbmd9ICRzdHJpbmcgLSBJbml0aWFsIHN0cmluZ1xuLy8gQHBhcmFtIHtTdHJpbmd9ICRzZWFyY2ggLSBTdWJzdHJpbmcgdG8gcmVwbGFjZVxuLy8gQHBhcmFtIHtTdHJpbmd9ICRyZXBsYWNlICgnJykgLSBOZXcgdmFsdWVcbi8vIEByZXR1cm4ge1N0cmluZ30gLSBVcGRhdGVkIHN0cmluZ1xuQGZ1bmN0aW9uIHN0ci1yZXBsYWNlKCRzdHJpbmcsICRzZWFyY2gsICRyZXBsYWNlOiBcIlwiKSB7XG4gICRpbmRleDogc3RyLWluZGV4KCRzdHJpbmcsICRzZWFyY2gpO1xuXG4gIEBpZiAkaW5kZXgge1xuICAgIEByZXR1cm4gc3RyLXNsaWNlKCRzdHJpbmcsIDEsICRpbmRleCAtIDEpICsgJHJlcGxhY2UgKyBzdHItcmVwbGFjZShzdHItc2xpY2UoJHN0cmluZywgJGluZGV4ICsgc3RyLWxlbmd0aCgkc2VhcmNoKSksICRzZWFyY2gsICRyZXBsYWNlKTtcbiAgfVxuXG4gIEByZXR1cm4gJHN0cmluZztcbn1cblxuLy8gU2VlIGh0dHBzOi8vY29kZXBlbi5pby9rZXZpbndlYmVyL3Blbi9kWFdvUndcbkBmdW5jdGlvbiBlc2NhcGUtc3ZnKCRzdHJpbmcpIHtcbiAgQGlmIHN0ci1pbmRleCgkc3RyaW5nLCBcImRhdGE6aW1hZ2Uvc3ZnK3htbFwiKSB7XG4gICAgQGVhY2ggJGNoYXIsICRlbmNvZGVkIGluICRlc2NhcGVkLWNoYXJhY3RlcnMge1xuICAgICAgLy8gRG8gbm90IGVzY2FwZSB0aGUgdXJsIGJyYWNrZXRzXG4gICAgICBAaWYgc3RyLWluZGV4KCRzdHJpbmcsIFwidXJsKFwiKSA9PSAxIHtcbiAgICAgICAgJHN0cmluZzogdXJsKFwiI3tzdHItcmVwbGFjZShzdHItc2xpY2UoJHN0cmluZywgNiwgLTMpLCAkY2hhciwgJGVuY29kZWQpfVwiKTtcbiAgICAgIH0gQGVsc2Uge1xuICAgICAgICAkc3RyaW5nOiBzdHItcmVwbGFjZSgkc3RyaW5nLCAkY2hhciwgJGVuY29kZWQpO1xuICAgICAgfVxuICAgIH1cbiAgfVxuXG4gIEByZXR1cm4gJHN0cmluZztcbn1cblxuLy8gQ29sb3IgY29udHJhc3RcbkBmdW5jdGlvbiBjb2xvci15aXEoJGNvbG9yLCAkZGFyazogJHlpcS10ZXh0LWRhcmssICRsaWdodDogJHlpcS10ZXh0LWxpZ2h0KSB7XG4gICRyOiByZWQoJGNvbG9yKTtcbiAgJGc6IGdyZWVuKCRjb2xvcik7XG4gICRiOiBibHVlKCRjb2xvcik7XG5cbiAgJHlpcTogKCgkciAqIDI5OSkgKyAoJGcgKiA1ODcpICsgKCRiICogMTE0KSkgLyAxMDAwO1xuXG4gIEBpZiAoJHlpcSA+PSAkeWlxLWNvbnRyYXN0ZWQtdGhyZXNob2xkKSB7XG4gICAgQHJldHVybiAkZGFyaztcbiAgfSBAZWxzZSB7XG4gICAgQHJldHVybiAkbGlnaHQ7XG4gIH1cbn1cblxuLy8gUmV0cmlldmUgY29sb3IgU2FzcyBtYXBzXG5AZnVuY3Rpb24gY29sb3IoJGtleTogXCJibHVlXCIpIHtcbiAgQHJldHVybiBtYXAtZ2V0KCRjb2xvcnMsICRrZXkpO1xufVxuXG5AZnVuY3Rpb24gdGhlbWUtY29sb3IoJGtleTogXCJwcmltYXJ5XCIpIHtcbiAgQHJldHVybiBtYXAtZ2V0KCR0aGVtZS1jb2xvcnMsICRrZXkpO1xufVxuXG5AZnVuY3Rpb24gZ3JheSgka2V5OiBcIjEwMFwiKSB7XG4gIEByZXR1cm4gbWFwLWdldCgkZ3JheXMsICRrZXkpO1xufVxuXG4vLyBSZXF1ZXN0IGEgdGhlbWUgY29sb3IgbGV2ZWxcbkBmdW5jdGlvbiB0aGVtZS1jb2xvci1sZXZlbCgkY29sb3ItbmFtZTogXCJwcmltYXJ5XCIsICRsZXZlbDogMCkge1xuICAkY29sb3I6IHRoZW1lLWNvbG9yKCRjb2xvci1uYW1lKTtcbiAgJGNvbG9yLWJhc2U6IGlmKCRsZXZlbCA+IDAsICRibGFjaywgJHdoaXRlKTtcbiAgJGxldmVsOiBhYnMoJGxldmVsKTtcblxuICBAcmV0dXJuIG1peCgkY29sb3ItYmFzZSwgJGNvbG9yLCAkbGV2ZWwgKiAkdGhlbWUtY29sb3ItaW50ZXJ2YWwpO1xufVxuXG4vLyBSZXR1cm4gdmFsaWQgY2FsY1xuQGZ1bmN0aW9uIGFkZCgkdmFsdWUxLCAkdmFsdWUyLCAkcmV0dXJuLWNhbGM6IHRydWUpIHtcbiAgQGlmICR2YWx1ZTEgPT0gbnVsbCB7XG4gICAgQHJldHVybiAkdmFsdWUyO1xuICB9XG5cbiAgQGlmICR2YWx1ZTIgPT0gbnVsbCB7XG4gICAgQHJldHVybiAkdmFsdWUxO1xuICB9XG5cbiAgQGlmIHR5cGUtb2YoJHZhbHVlMSkgPT0gbnVtYmVyIGFuZCB0eXBlLW9mKCR2YWx1ZTIpID09IG51bWJlciBhbmQgY29tcGFyYWJsZSgkdmFsdWUxLCAkdmFsdWUyKSB7XG4gICAgQHJldHVybiAkdmFsdWUxICsgJHZhbHVlMjtcbiAgfVxuXG4gIEByZXR1cm4gaWYoJHJldHVybi1jYWxjID09IHRydWUsIGNhbGMoI3skdmFsdWUxfSArICN7JHZhbHVlMn0pLCAkdmFsdWUxICsgdW5xdW90ZShcIiArIFwiKSArICR2YWx1ZTIpO1xufVxuXG5AZnVuY3Rpb24gc3VidHJhY3QoJHZhbHVlMSwgJHZhbHVlMiwgJHJldHVybi1jYWxjOiB0cnVlKSB7XG4gIEBpZiAkdmFsdWUxID09IG51bGwgYW5kICR2YWx1ZTIgPT0gbnVsbCB7XG4gICAgQHJldHVybiBudWxsO1xuICB9XG5cbiAgQGlmICR2YWx1ZTEgPT0gbnVsbCB7XG4gICAgQHJldHVybiAtJHZhbHVlMjtcbiAgfVxuXG4gIEBpZiAkdmFsdWUyID09IG51bGwge1xuICAgIEByZXR1cm4gJHZhbHVlMTtcbiAgfVxuXG4gIEBpZiB0eXBlLW9mKCR2YWx1ZTEpID09IG51bWJlciBhbmQgdHlwZS1vZigkdmFsdWUyKSA9PSBudW1iZXIgYW5kIGNvbXBhcmFibGUoJHZhbHVlMSwgJHZhbHVlMikge1xuICAgIEByZXR1cm4gJHZhbHVlMSAtICR2YWx1ZTI7XG4gIH1cblxuICBAcmV0dXJuIGlmKCRyZXR1cm4tY2FsYyA9PSB0cnVlLCBjYWxjKCN7JHZhbHVlMX0gLSAjeyR2YWx1ZTJ9KSwgJHZhbHVlMSArIHVucXVvdGUoXCIgLSBcIikgKyAkdmFsdWUyKTtcbn1cbiIsIi8vIHN0eWxlbGludC1kaXNhYmxlIHNlbGVjdG9yLW5vLXF1YWxpZnlpbmctdHlwZVxuXG4vL1xuLy8gVGV4dHVhbCBmb3JtIGNvbnRyb2xzXG4vL1xuXG4uZm9ybS1jb250cm9sIHtcbiAgZGlzcGxheTogYmxvY2s7XG4gIHdpZHRoOiAxMDAlO1xuICBoZWlnaHQ6ICRpbnB1dC1oZWlnaHQ7XG4gIHBhZGRpbmc6ICRpbnB1dC1wYWRkaW5nLXkgJGlucHV0LXBhZGRpbmcteDtcbiAgZm9udC1mYW1pbHk6ICRpbnB1dC1mb250LWZhbWlseTtcbiAgQGluY2x1ZGUgZm9udC1zaXplKCRpbnB1dC1mb250LXNpemUpO1xuICBmb250LXdlaWdodDogJGlucHV0LWZvbnQtd2VpZ2h0O1xuICBsaW5lLWhlaWdodDogJGlucHV0LWxpbmUtaGVpZ2h0O1xuICBjb2xvcjogJGlucHV0LWNvbG9yO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAkaW5wdXQtYmc7XG4gIGJhY2tncm91bmQtY2xpcDogcGFkZGluZy1ib3g7XG4gIGJvcmRlcjogJGlucHV0LWJvcmRlci13aWR0aCBzb2xpZCAkaW5wdXQtYm9yZGVyLWNvbG9yO1xuXG4gIC8vIE5vdGU6IFRoaXMgaGFzIG5vIGVmZmVjdCBvbiA8c2VsZWN0PnMgaW4gc29tZSBicm93c2VycywgZHVlIHRvIHRoZSBsaW1pdGVkIHN0eWxhYmlsaXR5IG9mIGA8c2VsZWN0PmBzIGluIENTUy5cbiAgQGluY2x1ZGUgYm9yZGVyLXJhZGl1cygkaW5wdXQtYm9yZGVyLXJhZGl1cywgMCk7XG5cbiAgQGluY2x1ZGUgYm94LXNoYWRvdygkaW5wdXQtYm94LXNoYWRvdyk7XG4gIEBpbmNsdWRlIHRyYW5zaXRpb24oJGlucHV0LXRyYW5zaXRpb24pO1xuXG4gIC8vIFVuc3R5bGUgdGhlIGNhcmV0IG9uIGA8c2VsZWN0PmBzIGluIElFMTArLlxuICAmOjotbXMtZXhwYW5kIHtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiB0cmFuc3BhcmVudDtcbiAgICBib3JkZXI6IDA7XG4gIH1cblxuICAvLyBSZW1vdmUgc2VsZWN0IG91dGxpbmUgZnJvbSBzZWxlY3QgYm94IGluIEZGXG4gICY6LW1vei1mb2N1c3Jpbmcge1xuICAgIGNvbG9yOiB0cmFuc3BhcmVudDtcbiAgICB0ZXh0LXNoYWRvdzogMCAwIDAgJGlucHV0LWNvbG9yO1xuICB9XG5cbiAgLy8gQ3VzdG9taXplIHRoZSBgOmZvY3VzYCBzdGF0ZSB0byBpbWl0YXRlIG5hdGl2ZSBXZWJLaXQgc3R5bGVzLlxuICBAaW5jbHVkZSBmb3JtLWNvbnRyb2wtZm9jdXMoJGlnbm9yZS13YXJuaW5nOiB0cnVlKTtcblxuICAvLyBQbGFjZWhvbGRlclxuICAmOjpwbGFjZWhvbGRlciB7XG4gICAgY29sb3I6ICRpbnB1dC1wbGFjZWhvbGRlci1jb2xvcjtcbiAgICAvLyBPdmVycmlkZSBGaXJlZm94J3MgdW51c3VhbCBkZWZhdWx0IG9wYWNpdHk7IHNlZSBodHRwczovL2dpdGh1Yi5jb20vdHdicy9ib290c3RyYXAvcHVsbC8xMTUyNi5cbiAgICBvcGFjaXR5OiAxO1xuICB9XG5cbiAgLy8gRGlzYWJsZWQgYW5kIHJlYWQtb25seSBpbnB1dHNcbiAgLy9cbiAgLy8gSFRNTDUgc2F5cyB0aGF0IGNvbnRyb2xzIHVuZGVyIGEgZmllbGRzZXQgPiBsZWdlbmQ6Zmlyc3QtY2hpbGQgd29uJ3QgYmVcbiAgLy8gZGlzYWJsZWQgaWYgdGhlIGZpZWxkc2V0IGlzIGRpc2FibGVkLiBEdWUgdG8gaW1wbGVtZW50YXRpb24gZGlmZmljdWx0eSwgd2VcbiAgLy8gZG9uJ3QgaG9ub3IgdGhhdCBlZGdlIGNhc2U7IHdlIHN0eWxlIHRoZW0gYXMgZGlzYWJsZWQgYW55d2F5LlxuICAmOmRpc2FibGVkLFxuICAmW3JlYWRvbmx5XSB7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogJGlucHV0LWRpc2FibGVkLWJnO1xuICAgIC8vIGlPUyBmaXggZm9yIHVucmVhZGFibGUgZGlzYWJsZWQgY29udGVudDsgc2VlIGh0dHBzOi8vZ2l0aHViLmNvbS90d2JzL2Jvb3RzdHJhcC9pc3N1ZXMvMTE2NTUuXG4gICAgb3BhY2l0eTogMTtcbiAgfVxufVxuXG5pbnB1dFt0eXBlPVwiZGF0ZVwiXSxcbmlucHV0W3R5cGU9XCJ0aW1lXCJdLFxuaW5wdXRbdHlwZT1cImRhdGV0aW1lLWxvY2FsXCJdLFxuaW5wdXRbdHlwZT1cIm1vbnRoXCJdIHtcbiAgJi5mb3JtLWNvbnRyb2wge1xuICAgIGFwcGVhcmFuY2U6IG5vbmU7IC8vIEZpeCBhcHBlYXJhbmNlIGZvciBkYXRlIGlucHV0cyBpbiBTYWZhcmlcbiAgfVxufVxuXG5zZWxlY3QuZm9ybS1jb250cm9sIHtcbiAgJjpmb2N1czo6LW1zLXZhbHVlIHtcbiAgICAvLyBTdXBwcmVzcyB0aGUgbmVzdGVkIGRlZmF1bHQgd2hpdGUgdGV4dCBvbiBibHVlIGJhY2tncm91bmQgaGlnaGxpZ2h0IGdpdmVuIHRvXG4gICAgLy8gdGhlIHNlbGVjdGVkIG9wdGlvbiB0ZXh0IHdoZW4gdGhlIChzdGlsbCBjbG9zZWQpIDxzZWxlY3Q+IHJlY2VpdmVzIGZvY3VzXG4gICAgLy8gaW4gSUUgYW5kICh1bmRlciBjZXJ0YWluIGNvbmRpdGlvbnMpIEVkZ2UsIGFzIGl0IGxvb2tzIGJhZCBhbmQgY2Fubm90IGJlIG1hZGUgdG9cbiAgICAvLyBtYXRjaCB0aGUgYXBwZWFyYW5jZSBvZiB0aGUgbmF0aXZlIHdpZGdldC5cbiAgICAvLyBTZWUgaHR0cHM6Ly9naXRodWIuY29tL3R3YnMvYm9vdHN0cmFwL2lzc3Vlcy8xOTM5OC5cbiAgICBjb2xvcjogJGlucHV0LWNvbG9yO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICRpbnB1dC1iZztcbiAgfVxufVxuXG4vLyBNYWtlIGZpbGUgaW5wdXRzIGJldHRlciBtYXRjaCB0ZXh0IGlucHV0cyBieSBmb3JjaW5nIHRoZW0gdG8gbmV3IGxpbmVzLlxuLmZvcm0tY29udHJvbC1maWxlLFxuLmZvcm0tY29udHJvbC1yYW5nZSB7XG4gIGRpc3BsYXk6IGJsb2NrO1xuICB3aWR0aDogMTAwJTtcbn1cblxuXG4vL1xuLy8gTGFiZWxzXG4vL1xuXG4vLyBGb3IgdXNlIHdpdGggaG9yaXpvbnRhbCBhbmQgaW5saW5lIGZvcm1zLCB3aGVuIHlvdSBuZWVkIHRoZSBsYWJlbCAob3IgbGVnZW5kKVxuLy8gdGV4dCB0byBhbGlnbiB3aXRoIHRoZSBmb3JtIGNvbnRyb2xzLlxuLmNvbC1mb3JtLWxhYmVsIHtcbiAgcGFkZGluZy10b3A6IGFkZCgkaW5wdXQtcGFkZGluZy15LCAkaW5wdXQtYm9yZGVyLXdpZHRoKTtcbiAgcGFkZGluZy1ib3R0b206IGFkZCgkaW5wdXQtcGFkZGluZy15LCAkaW5wdXQtYm9yZGVyLXdpZHRoKTtcbiAgbWFyZ2luLWJvdHRvbTogMDsgLy8gT3ZlcnJpZGUgdGhlIGA8bGFiZWw+LzxsZWdlbmQ+YCBkZWZhdWx0XG4gIEBpbmNsdWRlIGZvbnQtc2l6ZShpbmhlcml0KTsgLy8gT3ZlcnJpZGUgdGhlIGA8bGVnZW5kPmAgZGVmYXVsdFxuICBsaW5lLWhlaWdodDogJGlucHV0LWxpbmUtaGVpZ2h0O1xufVxuXG4uY29sLWZvcm0tbGFiZWwtbGcge1xuICBwYWRkaW5nLXRvcDogYWRkKCRpbnB1dC1wYWRkaW5nLXktbGcsICRpbnB1dC1ib3JkZXItd2lkdGgpO1xuICBwYWRkaW5nLWJvdHRvbTogYWRkKCRpbnB1dC1wYWRkaW5nLXktbGcsICRpbnB1dC1ib3JkZXItd2lkdGgpO1xuICBAaW5jbHVkZSBmb250LXNpemUoJGlucHV0LWZvbnQtc2l6ZS1sZyk7XG4gIGxpbmUtaGVpZ2h0OiAkaW5wdXQtbGluZS1oZWlnaHQtbGc7XG59XG5cbi5jb2wtZm9ybS1sYWJlbC1zbSB7XG4gIHBhZGRpbmctdG9wOiBhZGQoJGlucHV0LXBhZGRpbmcteS1zbSwgJGlucHV0LWJvcmRlci13aWR0aCk7XG4gIHBhZGRpbmctYm90dG9tOiBhZGQoJGlucHV0LXBhZGRpbmcteS1zbSwgJGlucHV0LWJvcmRlci13aWR0aCk7XG4gIEBpbmNsdWRlIGZvbnQtc2l6ZSgkaW5wdXQtZm9udC1zaXplLXNtKTtcbiAgbGluZS1oZWlnaHQ6ICRpbnB1dC1saW5lLWhlaWdodC1zbTtcbn1cblxuXG4vLyBSZWFkb25seSBjb250cm9scyBhcyBwbGFpbiB0ZXh0XG4vL1xuLy8gQXBwbHkgY2xhc3MgdG8gYSByZWFkb25seSBpbnB1dCB0byBtYWtlIGl0IGFwcGVhciBsaWtlIHJlZ3VsYXIgcGxhaW5cbi8vIHRleHQgKHdpdGhvdXQgYW55IGJvcmRlciwgYmFja2dyb3VuZCBjb2xvciwgZm9jdXMgaW5kaWNhdG9yKVxuXG4uZm9ybS1jb250cm9sLXBsYWludGV4dCB7XG4gIGRpc3BsYXk6IGJsb2NrO1xuICB3aWR0aDogMTAwJTtcbiAgcGFkZGluZzogJGlucHV0LXBhZGRpbmcteSAwO1xuICBtYXJnaW4tYm90dG9tOiAwOyAvLyBtYXRjaCBpbnB1dHMgaWYgdGhpcyBjbGFzcyBjb21lcyBvbiBpbnB1dHMgd2l0aCBkZWZhdWx0IG1hcmdpbnNcbiAgQGluY2x1ZGUgZm9udC1zaXplKCRpbnB1dC1mb250LXNpemUpO1xuICBsaW5lLWhlaWdodDogJGlucHV0LWxpbmUtaGVpZ2h0O1xuICBjb2xvcjogJGlucHV0LXBsYWludGV4dC1jb2xvcjtcbiAgYmFja2dyb3VuZC1jb2xvcjogdHJhbnNwYXJlbnQ7XG4gIGJvcmRlcjogc29saWQgdHJhbnNwYXJlbnQ7XG4gIGJvcmRlci13aWR0aDogJGlucHV0LWJvcmRlci13aWR0aCAwO1xuXG4gICYuZm9ybS1jb250cm9sLXNtLFxuICAmLmZvcm0tY29udHJvbC1sZyB7XG4gICAgcGFkZGluZy1yaWdodDogMDtcbiAgICBwYWRkaW5nLWxlZnQ6IDA7XG4gIH1cbn1cblxuXG4vLyBGb3JtIGNvbnRyb2wgc2l6aW5nXG4vL1xuLy8gQnVpbGQgb24gYC5mb3JtLWNvbnRyb2xgIHdpdGggbW9kaWZpZXIgY2xhc3NlcyB0byBkZWNyZWFzZSBvciBpbmNyZWFzZSB0aGVcbi8vIGhlaWdodCBhbmQgZm9udC1zaXplIG9mIGZvcm0gY29udHJvbHMuXG4vL1xuLy8gUmVwZWF0ZWQgaW4gYF9pbnB1dF9ncm91cC5zY3NzYCB0byBhdm9pZCBTYXNzIGV4dGVuZCBpc3N1ZXMuXG5cbi5mb3JtLWNvbnRyb2wtc20ge1xuICBoZWlnaHQ6ICRpbnB1dC1oZWlnaHQtc207XG4gIHBhZGRpbmc6ICRpbnB1dC1wYWRkaW5nLXktc20gJGlucHV0LXBhZGRpbmcteC1zbTtcbiAgQGluY2x1ZGUgZm9udC1zaXplKCRpbnB1dC1mb250LXNpemUtc20pO1xuICBsaW5lLWhlaWdodDogJGlucHV0LWxpbmUtaGVpZ2h0LXNtO1xuICBAaW5jbHVkZSBib3JkZXItcmFkaXVzKCRpbnB1dC1ib3JkZXItcmFkaXVzLXNtKTtcbn1cblxuLmZvcm0tY29udHJvbC1sZyB7XG4gIGhlaWdodDogJGlucHV0LWhlaWdodC1sZztcbiAgcGFkZGluZzogJGlucHV0LXBhZGRpbmcteS1sZyAkaW5wdXQtcGFkZGluZy14LWxnO1xuICBAaW5jbHVkZSBmb250LXNpemUoJGlucHV0LWZvbnQtc2l6ZS1sZyk7XG4gIGxpbmUtaGVpZ2h0OiAkaW5wdXQtbGluZS1oZWlnaHQtbGc7XG4gIEBpbmNsdWRlIGJvcmRlci1yYWRpdXMoJGlucHV0LWJvcmRlci1yYWRpdXMtbGcpO1xufVxuXG4vLyBzdHlsZWxpbnQtZGlzYWJsZS1uZXh0LWxpbmUgbm8tZHVwbGljYXRlLXNlbGVjdG9yc1xuc2VsZWN0LmZvcm0tY29udHJvbCB7XG4gICZbc2l6ZV0sXG4gICZbbXVsdGlwbGVdIHtcbiAgICBoZWlnaHQ6IGF1dG87XG4gIH1cbn1cblxudGV4dGFyZWEuZm9ybS1jb250cm9sIHtcbiAgaGVpZ2h0OiBhdXRvO1xufVxuXG4vLyBGb3JtIGdyb3Vwc1xuLy9cbi8vIERlc2lnbmVkIHRvIGhlbHAgd2l0aCB0aGUgb3JnYW5pemF0aW9uIGFuZCBzcGFjaW5nIG9mIHZlcnRpY2FsIGZvcm1zLiBGb3Jcbi8vIGhvcml6b250YWwgZm9ybXMsIHVzZSB0aGUgcHJlZGVmaW5lZCBncmlkIGNsYXNzZXMuXG5cbi5mb3JtLWdyb3VwIHtcbiAgbWFyZ2luLWJvdHRvbTogJGZvcm0tZ3JvdXAtbWFyZ2luLWJvdHRvbTtcbn1cblxuLmZvcm0tdGV4dCB7XG4gIGRpc3BsYXk6IGJsb2NrO1xuICBtYXJnaW4tdG9wOiAkZm9ybS10ZXh0LW1hcmdpbi10b3A7XG59XG5cblxuLy8gRm9ybSBncmlkXG4vL1xuLy8gU3BlY2lhbCByZXBsYWNlbWVudCBmb3Igb3VyIGdyaWQgc3lzdGVtJ3MgYC5yb3dgIGZvciB0aWdodGVyIGZvcm0gbGF5b3V0cy5cblxuLmZvcm0tcm93IHtcbiAgZGlzcGxheTogZmxleDtcbiAgZmxleC13cmFwOiB3cmFwO1xuICBtYXJnaW4tcmlnaHQ6IC0kZm9ybS1ncmlkLWd1dHRlci13aWR0aCAvIDI7XG4gIG1hcmdpbi1sZWZ0OiAtJGZvcm0tZ3JpZC1ndXR0ZXItd2lkdGggLyAyO1xuXG4gID4gLmNvbCxcbiAgPiBbY2xhc3MqPVwiY29sLVwiXSB7XG4gICAgcGFkZGluZy1yaWdodDogJGZvcm0tZ3JpZC1ndXR0ZXItd2lkdGggLyAyO1xuICAgIHBhZGRpbmctbGVmdDogJGZvcm0tZ3JpZC1ndXR0ZXItd2lkdGggLyAyO1xuICB9XG59XG5cblxuLy8gQ2hlY2tib3hlcyBhbmQgcmFkaW9zXG4vL1xuLy8gSW5kZW50IHRoZSBsYWJlbHMgdG8gcG9zaXRpb24gcmFkaW9zL2NoZWNrYm94ZXMgYXMgaGFuZ2luZyBjb250cm9scy5cblxuLmZvcm0tY2hlY2sge1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIGRpc3BsYXk6IGJsb2NrO1xuICBwYWRkaW5nLWxlZnQ6ICRmb3JtLWNoZWNrLWlucHV0LWd1dHRlcjtcbn1cblxuLmZvcm0tY2hlY2staW5wdXQge1xuICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gIG1hcmdpbi10b3A6ICRmb3JtLWNoZWNrLWlucHV0LW1hcmdpbi15O1xuICBtYXJnaW4tbGVmdDogLSRmb3JtLWNoZWNrLWlucHV0LWd1dHRlcjtcblxuICAvLyBVc2UgW2Rpc2FibGVkXSBhbmQgOmRpc2FibGVkIGZvciB3b3JrYXJvdW5kIGh0dHBzOi8vZ2l0aHViLmNvbS90d2JzL2Jvb3RzdHJhcC9pc3N1ZXMvMjgyNDdcbiAgJltkaXNhYmxlZF0gfiAuZm9ybS1jaGVjay1sYWJlbCxcbiAgJjpkaXNhYmxlZCB+IC5mb3JtLWNoZWNrLWxhYmVsIHtcbiAgICBjb2xvcjogJHRleHQtbXV0ZWQ7XG4gIH1cbn1cblxuLmZvcm0tY2hlY2stbGFiZWwge1xuICBtYXJnaW4tYm90dG9tOiAwOyAvLyBPdmVycmlkZSBkZWZhdWx0IGA8bGFiZWw+YCBib3R0b20gbWFyZ2luXG59XG5cbi5mb3JtLWNoZWNrLWlubGluZSB7XG4gIGRpc3BsYXk6IGlubGluZS1mbGV4O1xuICBhbGlnbi1pdGVtczogY2VudGVyO1xuICBwYWRkaW5nLWxlZnQ6IDA7IC8vIE92ZXJyaWRlIGJhc2UgLmZvcm0tY2hlY2tcbiAgbWFyZ2luLXJpZ2h0OiAkZm9ybS1jaGVjay1pbmxpbmUtbWFyZ2luLXg7XG5cbiAgLy8gVW5kbyAuZm9ybS1jaGVjay1pbnB1dCBkZWZhdWx0cyBhbmQgYWRkIHNvbWUgYG1hcmdpbi1yaWdodGAuXG4gIC5mb3JtLWNoZWNrLWlucHV0IHtcbiAgICBwb3NpdGlvbjogc3RhdGljO1xuICAgIG1hcmdpbi10b3A6IDA7XG4gICAgbWFyZ2luLXJpZ2h0OiAkZm9ybS1jaGVjay1pbmxpbmUtaW5wdXQtbWFyZ2luLXg7XG4gICAgbWFyZ2luLWxlZnQ6IDA7XG4gIH1cbn1cblxuXG4vLyBGb3JtIHZhbGlkYXRpb25cbi8vXG4vLyBQcm92aWRlIGZlZWRiYWNrIHRvIHVzZXJzIHdoZW4gZm9ybSBmaWVsZCB2YWx1ZXMgYXJlIHZhbGlkIG9yIGludmFsaWQuIFdvcmtzXG4vLyBwcmltYXJpbHkgZm9yIGNsaWVudC1zaWRlIHZhbGlkYXRpb24gdmlhIHNjb3BlZCBgOmludmFsaWRgIGFuZCBgOnZhbGlkYFxuLy8gcHNldWRvLWNsYXNzZXMgYnV0IGFsc28gaW5jbHVkZXMgYC5pcy1pbnZhbGlkYCBhbmQgYC5pcy12YWxpZGAgY2xhc3NlcyBmb3Jcbi8vIHNlcnZlciBzaWRlIHZhbGlkYXRpb24uXG5cbkBlYWNoICRzdGF0ZSwgJGRhdGEgaW4gJGZvcm0tdmFsaWRhdGlvbi1zdGF0ZXMge1xuICBAaW5jbHVkZSBmb3JtLXZhbGlkYXRpb24tc3RhdGUoJHN0YXRlLCBtYXAtZ2V0KCRkYXRhLCBjb2xvciksIG1hcC1nZXQoJGRhdGEsIGljb24pKTtcbn1cblxuLy8gSW5saW5lIGZvcm1zXG4vL1xuLy8gTWFrZSBmb3JtcyBhcHBlYXIgaW5saW5lKC1ibG9jaykgYnkgYWRkaW5nIHRoZSBgLmZvcm0taW5saW5lYCBjbGFzcy4gSW5saW5lXG4vLyBmb3JtcyBiZWdpbiBzdGFja2VkIG9uIGV4dHJhIHNtYWxsIChtb2JpbGUpIGRldmljZXMgYW5kIHRoZW4gZ28gaW5saW5lIHdoZW5cbi8vIHZpZXdwb3J0cyByZWFjaCA8NzY4cHguXG4vL1xuLy8gUmVxdWlyZXMgd3JhcHBpbmcgaW5wdXRzIGFuZCBsYWJlbHMgd2l0aCBgLmZvcm0tZ3JvdXBgIGZvciBwcm9wZXIgZGlzcGxheSBvZlxuLy8gZGVmYXVsdCBIVE1MIGZvcm0gY29udHJvbHMgYW5kIG91ciBjdXN0b20gZm9ybSBjb250cm9scyAoZS5nLiwgaW5wdXQgZ3JvdXBzKS5cblxuLmZvcm0taW5saW5lIHtcbiAgZGlzcGxheTogZmxleDtcbiAgZmxleC1mbG93OiByb3cgd3JhcDtcbiAgYWxpZ24taXRlbXM6IGNlbnRlcjsgLy8gUHJldmVudCBzaG9ydGVyIGVsZW1lbnRzIGZyb20gZ3Jvd2luZyB0byBzYW1lIGhlaWdodCBhcyBvdGhlcnMgKGUuZy4sIHNtYWxsIGJ1dHRvbnMgZ3Jvd2luZyB0byBub3JtYWwgc2l6ZWQgYnV0dG9uIGhlaWdodClcblxuICAvLyBCZWNhdXNlIHdlIHVzZSBmbGV4LCB0aGUgaW5pdGlhbCBzaXppbmcgb2YgY2hlY2tib3hlcyBpcyBjb2xsYXBzZWQgYW5kXG4gIC8vIGRvZXNuJ3Qgb2NjdXB5IHRoZSBmdWxsLXdpZHRoICh3aGljaCBpcyB3aGF0IHdlIHdhbnQgZm9yIHhzIGdyaWQgdGllciksXG4gIC8vIHNvIHdlIGZvcmNlIHRoYXQgaGVyZS5cbiAgLmZvcm0tY2hlY2sge1xuICAgIHdpZHRoOiAxMDAlO1xuICB9XG5cbiAgLy8gS2ljayBpbiB0aGUgaW5saW5lXG4gIEBpbmNsdWRlIG1lZGlhLWJyZWFrcG9pbnQtdXAoc20pIHtcbiAgICBsYWJlbCB7XG4gICAgICBkaXNwbGF5OiBmbGV4O1xuICAgICAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAgICAgIGp1c3RpZnktY29udGVudDogY2VudGVyO1xuICAgICAgbWFyZ2luLWJvdHRvbTogMDtcbiAgICB9XG5cbiAgICAvLyBJbmxpbmUtYmxvY2sgYWxsIHRoZSB0aGluZ3MgZm9yIFwiaW5saW5lXCJcbiAgICAuZm9ybS1ncm91cCB7XG4gICAgICBkaXNwbGF5OiBmbGV4O1xuICAgICAgZmxleDogMCAwIGF1dG87XG4gICAgICBmbGV4LWZsb3c6IHJvdyB3cmFwO1xuICAgICAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAgICAgIG1hcmdpbi1ib3R0b206IDA7XG4gICAgfVxuXG4gICAgLy8gQWxsb3cgZm9sa3MgdG8gKm5vdCogdXNlIGAuZm9ybS1ncm91cGBcbiAgICAuZm9ybS1jb250cm9sIHtcbiAgICAgIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgICAgIHdpZHRoOiBhdXRvOyAvLyBQcmV2ZW50IGxhYmVscyBmcm9tIHN0YWNraW5nIGFib3ZlIGlucHV0cyBpbiBgLmZvcm0tZ3JvdXBgXG4gICAgICB2ZXJ0aWNhbC1hbGlnbjogbWlkZGxlO1xuICAgIH1cblxuICAgIC8vIE1ha2Ugc3RhdGljIGNvbnRyb2xzIGJlaGF2ZSBsaWtlIHJlZ3VsYXIgb25lc1xuICAgIC5mb3JtLWNvbnRyb2wtcGxhaW50ZXh0IHtcbiAgICAgIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgICB9XG5cbiAgICAuaW5wdXQtZ3JvdXAsXG4gICAgLmN1c3RvbS1zZWxlY3Qge1xuICAgICAgd2lkdGg6IGF1dG87XG4gICAgfVxuXG4gICAgLy8gUmVtb3ZlIGRlZmF1bHQgbWFyZ2luIG9uIHJhZGlvcy9jaGVja2JveGVzIHRoYXQgd2VyZSB1c2VkIGZvciBzdGFja2luZywgYW5kXG4gICAgLy8gdGhlbiB1bmRvIHRoZSBmbG9hdGluZyBvZiByYWRpb3MgYW5kIGNoZWNrYm94ZXMgdG8gbWF0Y2guXG4gICAgLmZvcm0tY2hlY2sge1xuICAgICAgZGlzcGxheTogZmxleDtcbiAgICAgIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gICAgICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcbiAgICAgIHdpZHRoOiBhdXRvO1xuICAgICAgcGFkZGluZy1sZWZ0OiAwO1xuICAgIH1cbiAgICAuZm9ybS1jaGVjay1pbnB1dCB7XG4gICAgICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gICAgICBmbGV4LXNocmluazogMDtcbiAgICAgIG1hcmdpbi10b3A6IDA7XG4gICAgICBtYXJnaW4tcmlnaHQ6ICRmb3JtLWNoZWNrLWlucHV0LW1hcmdpbi14O1xuICAgICAgbWFyZ2luLWxlZnQ6IDA7XG4gICAgfVxuXG4gICAgLmN1c3RvbS1jb250cm9sIHtcbiAgICAgIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gICAgICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcbiAgICB9XG4gICAgLmN1c3RvbS1jb250cm9sLWxhYmVsIHtcbiAgICAgIG1hcmdpbi1ib3R0b206IDA7XG4gICAgfVxuICB9XG59XG4iLCIvLyBzdHlsZWxpbnQtZGlzYWJsZSBwcm9wZXJ0eS1ibGFja2xpc3RcbkBtaXhpbiB0cmFuc2l0aW9uKCR0cmFuc2l0aW9uLi4uKSB7XG4gIEBpZiBsZW5ndGgoJHRyYW5zaXRpb24pID09IDAge1xuICAgICR0cmFuc2l0aW9uOiAkdHJhbnNpdGlvbi1iYXNlO1xuICB9XG5cbiAgQGlmIGxlbmd0aCgkdHJhbnNpdGlvbikgPiAxIHtcbiAgICBAZWFjaCAkdmFsdWUgaW4gJHRyYW5zaXRpb24ge1xuICAgICAgQGlmICR2YWx1ZSA9PSBudWxsIG9yICR2YWx1ZSA9PSBub25lIHtcbiAgICAgICAgQHdhcm4gXCJUaGUga2V5d29yZCAnbm9uZScgb3IgJ251bGwnIG11c3QgYmUgdXNlZCBhcyBhIHNpbmdsZSBhcmd1bWVudC5cIjtcbiAgICAgIH1cbiAgICB9XG4gIH1cblxuICBAaWYgJGVuYWJsZS10cmFuc2l0aW9ucyB7XG4gICAgQGlmIG50aCgkdHJhbnNpdGlvbiwgMSkgIT0gbnVsbCB7XG4gICAgICB0cmFuc2l0aW9uOiAkdHJhbnNpdGlvbjtcbiAgICB9XG5cbiAgICBAaWYgJGVuYWJsZS1wcmVmZXJzLXJlZHVjZWQtbW90aW9uLW1lZGlhLXF1ZXJ5IGFuZCBudGgoJHRyYW5zaXRpb24sIDEpICE9IG51bGwgYW5kIG50aCgkdHJhbnNpdGlvbiwgMSkgIT0gbm9uZSB7XG4gICAgICBAbWVkaWEgKHByZWZlcnMtcmVkdWNlZC1tb3Rpb246IHJlZHVjZSkge1xuICAgICAgICB0cmFuc2l0aW9uOiBub25lO1xuICAgICAgfVxuICAgIH1cbiAgfVxufVxuIiwiLy8gRm9ybSBjb250cm9sIGZvY3VzIHN0YXRlXG4vL1xuLy8gR2VuZXJhdGUgYSBjdXN0b21pemVkIGZvY3VzIHN0YXRlIGFuZCBmb3IgYW55IGlucHV0IHdpdGggdGhlIHNwZWNpZmllZCBjb2xvcixcbi8vIHdoaWNoIGRlZmF1bHRzIHRvIHRoZSBgJGlucHV0LWZvY3VzLWJvcmRlci1jb2xvcmAgdmFyaWFibGUuXG4vL1xuLy8gV2UgaGlnaGx5IGVuY291cmFnZSB5b3UgdG8gbm90IGN1c3RvbWl6ZSB0aGUgZGVmYXVsdCB2YWx1ZSwgYnV0IGluc3RlYWQgdXNlXG4vLyB0aGlzIHRvIHR3ZWFrIGNvbG9ycyBvbiBhbiBhcy1uZWVkZWQgYmFzaXMuIFRoaXMgYWVzdGhldGljIGNoYW5nZSBpcyBiYXNlZCBvblxuLy8gV2ViS2l0J3MgZGVmYXVsdCBzdHlsZXMsIGJ1dCBhcHBsaWNhYmxlIHRvIGEgd2lkZXIgcmFuZ2Ugb2YgYnJvd3NlcnMuIEl0c1xuLy8gdXNhYmlsaXR5IGFuZCBhY2Nlc3NpYmlsaXR5IHNob3VsZCBiZSB0YWtlbiBpbnRvIGFjY291bnQgd2l0aCBhbnkgY2hhbmdlLlxuLy9cbi8vIEV4YW1wbGUgdXNhZ2U6IGNoYW5nZSB0aGUgZGVmYXVsdCBibHVlIGJvcmRlciBhbmQgc2hhZG93IHRvIHdoaXRlIGZvciBiZXR0ZXJcbi8vIGNvbnRyYXN0IGFnYWluc3QgYSBkYXJrIGdyYXkgYmFja2dyb3VuZC5cbkBtaXhpbiBmb3JtLWNvbnRyb2wtZm9jdXMoJGlnbm9yZS13YXJuaW5nOiBmYWxzZSkge1xuICAmOmZvY3VzIHtcbiAgICBjb2xvcjogJGlucHV0LWZvY3VzLWNvbG9yO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICRpbnB1dC1mb2N1cy1iZztcbiAgICBib3JkZXItY29sb3I6ICRpbnB1dC1mb2N1cy1ib3JkZXItY29sb3I7XG4gICAgb3V0bGluZTogMDtcbiAgICBAaWYgJGVuYWJsZS1zaGFkb3dzIHtcbiAgICAgIEBpbmNsdWRlIGJveC1zaGFkb3coJGlucHV0LWJveC1zaGFkb3csICRpbnB1dC1mb2N1cy1ib3gtc2hhZG93KTtcbiAgICB9IEBlbHNlIHtcbiAgICAgIC8vIEF2b2lkIHVzaW5nIG1peGluIHNvIHdlIGNhbiBwYXNzIGN1c3RvbSBmb2N1cyBzaGFkb3cgcHJvcGVybHlcbiAgICAgIGJveC1zaGFkb3c6ICRpbnB1dC1mb2N1cy1ib3gtc2hhZG93O1xuICAgIH1cbiAgfVxuICBAaW5jbHVkZSBkZXByZWNhdGUoXCJUaGUgYGZvcm0tY29udHJvbC1mb2N1cygpYCBtaXhpblwiLCBcInY0LjQuMFwiLCBcInY1XCIsICRpZ25vcmUtd2FybmluZyk7XG59XG5cbi8vIFRoaXMgbWl4aW4gdXNlcyBhbiBgaWYoKWAgdGVjaG5pcXVlIHRvIGJlIGNvbXBhdGlibGUgd2l0aCBEYXJ0IFNhc3Ncbi8vIFNlZSBodHRwczovL2dpdGh1Yi5jb20vc2Fzcy9zYXNzL2lzc3Vlcy8xODczI2lzc3VlY29tbWVudC0xNTIyOTM3MjUgZm9yIG1vcmUgZGV0YWlsc1xuQG1peGluIGZvcm0tdmFsaWRhdGlvbi1zdGF0ZS1zZWxlY3Rvcigkc3RhdGUpIHtcbiAgQGlmICgkc3RhdGUgPT0gXCJ2YWxpZFwiIG9yICRzdGF0ZSA9PSBcImludmFsaWRcIikge1xuICAgIC53YXMtdmFsaWRhdGVkICN7aWYoJiwgXCImXCIsIFwiXCIpfTojeyRzdGF0ZX0sXG4gICAgI3tpZigmLCBcIiZcIiwgXCJcIil9LmlzLSN7JHN0YXRlfSB7XG4gICAgICBAY29udGVudDtcbiAgICB9XG4gIH0gQGVsc2Uge1xuICAgICN7aWYoJiwgXCImXCIsIFwiXCIpfS5pcy0jeyRzdGF0ZX0ge1xuICAgICAgQGNvbnRlbnQ7XG4gICAgfVxuICB9XG59XG5cbkBtaXhpbiBmb3JtLXZhbGlkYXRpb24tc3RhdGUoJHN0YXRlLCAkY29sb3IsICRpY29uKSB7XG4gIC4jeyRzdGF0ZX0tZmVlZGJhY2sge1xuICAgIGRpc3BsYXk6IG5vbmU7XG4gICAgd2lkdGg6IDEwMCU7XG4gICAgbWFyZ2luLXRvcDogJGZvcm0tZmVlZGJhY2stbWFyZ2luLXRvcDtcbiAgICBAaW5jbHVkZSBmb250LXNpemUoJGZvcm0tZmVlZGJhY2stZm9udC1zaXplKTtcbiAgICBjb2xvcjogJGNvbG9yO1xuICB9XG5cbiAgLiN7JHN0YXRlfS10b29sdGlwIHtcbiAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgdG9wOiAxMDAlO1xuICAgIHotaW5kZXg6IDU7XG4gICAgZGlzcGxheTogbm9uZTtcbiAgICBtYXgtd2lkdGg6IDEwMCU7IC8vIENvbnRhaW4gdG8gcGFyZW50IHdoZW4gcG9zc2libGVcbiAgICBwYWRkaW5nOiAkZm9ybS1mZWVkYmFjay10b29sdGlwLXBhZGRpbmcteSAkZm9ybS1mZWVkYmFjay10b29sdGlwLXBhZGRpbmcteDtcbiAgICBtYXJnaW4tdG9wOiAuMXJlbTtcbiAgICBAaW5jbHVkZSBmb250LXNpemUoJGZvcm0tZmVlZGJhY2stdG9vbHRpcC1mb250LXNpemUpO1xuICAgIGxpbmUtaGVpZ2h0OiAkZm9ybS1mZWVkYmFjay10b29sdGlwLWxpbmUtaGVpZ2h0O1xuICAgIGNvbG9yOiBjb2xvci15aXEoJGNvbG9yKTtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiByZ2JhKCRjb2xvciwgJGZvcm0tZmVlZGJhY2stdG9vbHRpcC1vcGFjaXR5KTtcbiAgICBAaW5jbHVkZSBib3JkZXItcmFkaXVzKCRmb3JtLWZlZWRiYWNrLXRvb2x0aXAtYm9yZGVyLXJhZGl1cyk7XG4gIH1cblxuICBAaW5jbHVkZSBmb3JtLXZhbGlkYXRpb24tc3RhdGUtc2VsZWN0b3IoJHN0YXRlKSB7XG4gICAgfiAuI3skc3RhdGV9LWZlZWRiYWNrLFxuICAgIH4gLiN7JHN0YXRlfS10b29sdGlwIHtcbiAgICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgIH1cbiAgfVxuXG4gIC5mb3JtLWNvbnRyb2wge1xuICAgIEBpbmNsdWRlIGZvcm0tdmFsaWRhdGlvbi1zdGF0ZS1zZWxlY3Rvcigkc3RhdGUpIHtcbiAgICAgIGJvcmRlci1jb2xvcjogJGNvbG9yO1xuXG4gICAgICBAaWYgJGVuYWJsZS12YWxpZGF0aW9uLWljb25zIHtcbiAgICAgICAgcGFkZGluZy1yaWdodDogJGlucHV0LWhlaWdodC1pbm5lcjtcbiAgICAgICAgYmFja2dyb3VuZC1pbWFnZTogZXNjYXBlLXN2ZygkaWNvbik7XG4gICAgICAgIGJhY2tncm91bmQtcmVwZWF0OiBuby1yZXBlYXQ7XG4gICAgICAgIGJhY2tncm91bmQtcG9zaXRpb246IHJpZ2h0ICRpbnB1dC1oZWlnaHQtaW5uZXItcXVhcnRlciBjZW50ZXI7XG4gICAgICAgIGJhY2tncm91bmQtc2l6ZTogJGlucHV0LWhlaWdodC1pbm5lci1oYWxmICRpbnB1dC1oZWlnaHQtaW5uZXItaGFsZjtcbiAgICAgIH1cblxuICAgICAgJjpmb2N1cyB7XG4gICAgICAgIGJvcmRlci1jb2xvcjogJGNvbG9yO1xuICAgICAgICBib3gtc2hhZG93OiAwIDAgMCAkaW5wdXQtZm9jdXMtd2lkdGggcmdiYSgkY29sb3IsIC4yNSk7XG4gICAgICB9XG4gICAgfVxuICB9XG5cbiAgLy8gc3R5bGVsaW50LWRpc2FibGUtbmV4dC1saW5lIHNlbGVjdG9yLW5vLXF1YWxpZnlpbmctdHlwZVxuICB0ZXh0YXJlYS5mb3JtLWNvbnRyb2wge1xuICAgIEBpbmNsdWRlIGZvcm0tdmFsaWRhdGlvbi1zdGF0ZS1zZWxlY3Rvcigkc3RhdGUpIHtcbiAgICAgIEBpZiAkZW5hYmxlLXZhbGlkYXRpb24taWNvbnMge1xuICAgICAgICBwYWRkaW5nLXJpZ2h0OiAkaW5wdXQtaGVpZ2h0LWlubmVyO1xuICAgICAgICBiYWNrZ3JvdW5kLXBvc2l0aW9uOiB0b3AgJGlucHV0LWhlaWdodC1pbm5lci1xdWFydGVyIHJpZ2h0ICRpbnB1dC1oZWlnaHQtaW5uZXItcXVhcnRlcjtcbiAgICAgIH1cbiAgICB9XG4gIH1cblxuICAuY3VzdG9tLXNlbGVjdCB7XG4gICAgQGluY2x1ZGUgZm9ybS12YWxpZGF0aW9uLXN0YXRlLXNlbGVjdG9yKCRzdGF0ZSkge1xuICAgICAgYm9yZGVyLWNvbG9yOiAkY29sb3I7XG5cbiAgICAgIEBpZiAkZW5hYmxlLXZhbGlkYXRpb24taWNvbnMge1xuICAgICAgICBwYWRkaW5nLXJpZ2h0OiAkY3VzdG9tLXNlbGVjdC1mZWVkYmFjay1pY29uLXBhZGRpbmctcmlnaHQ7XG4gICAgICAgIGJhY2tncm91bmQ6ICRjdXN0b20tc2VsZWN0LWJhY2tncm91bmQsIGVzY2FwZS1zdmcoJGljb24pICRjdXN0b20tc2VsZWN0LWJnIG5vLXJlcGVhdCAkY3VzdG9tLXNlbGVjdC1mZWVkYmFjay1pY29uLXBvc2l0aW9uIC8gJGN1c3RvbS1zZWxlY3QtZmVlZGJhY2staWNvbi1zaXplO1xuICAgICAgfVxuXG4gICAgICAmOmZvY3VzIHtcbiAgICAgICAgYm9yZGVyLWNvbG9yOiAkY29sb3I7XG4gICAgICAgIGJveC1zaGFkb3c6IDAgMCAwICRpbnB1dC1mb2N1cy13aWR0aCByZ2JhKCRjb2xvciwgLjI1KTtcbiAgICAgIH1cbiAgICB9XG4gIH1cblxuICAuZm9ybS1jaGVjay1pbnB1dCB7XG4gICAgQGluY2x1ZGUgZm9ybS12YWxpZGF0aW9uLXN0YXRlLXNlbGVjdG9yKCRzdGF0ZSkge1xuICAgICAgfiAuZm9ybS1jaGVjay1sYWJlbCB7XG4gICAgICAgIGNvbG9yOiAkY29sb3I7XG4gICAgICB9XG5cbiAgICAgIH4gLiN7JHN0YXRlfS1mZWVkYmFjayxcbiAgICAgIH4gLiN7JHN0YXRlfS10b29sdGlwIHtcbiAgICAgICAgZGlzcGxheTogYmxvY2s7XG4gICAgICB9XG4gICAgfVxuICB9XG5cbiAgLmN1c3RvbS1jb250cm9sLWlucHV0IHtcbiAgICBAaW5jbHVkZSBmb3JtLXZhbGlkYXRpb24tc3RhdGUtc2VsZWN0b3IoJHN0YXRlKSB7XG4gICAgICB+IC5jdXN0b20tY29udHJvbC1sYWJlbCB7XG4gICAgICAgIGNvbG9yOiAkY29sb3I7XG5cbiAgICAgICAgJjo6YmVmb3JlIHtcbiAgICAgICAgICBib3JkZXItY29sb3I6ICRjb2xvcjtcbiAgICAgICAgfVxuICAgICAgfVxuXG4gICAgICAmOmNoZWNrZWQge1xuICAgICAgICB+IC5jdXN0b20tY29udHJvbC1sYWJlbDo6YmVmb3JlIHtcbiAgICAgICAgICBib3JkZXItY29sb3I6IGxpZ2h0ZW4oJGNvbG9yLCAxMCUpO1xuICAgICAgICAgIEBpbmNsdWRlIGdyYWRpZW50LWJnKGxpZ2h0ZW4oJGNvbG9yLCAxMCUpKTtcbiAgICAgICAgfVxuICAgICAgfVxuXG4gICAgICAmOmZvY3VzIHtcbiAgICAgICAgfiAuY3VzdG9tLWNvbnRyb2wtbGFiZWw6OmJlZm9yZSB7XG4gICAgICAgICAgYm94LXNoYWRvdzogMCAwIDAgJGlucHV0LWZvY3VzLXdpZHRoIHJnYmEoJGNvbG9yLCAuMjUpO1xuICAgICAgICB9XG5cbiAgICAgICAgJjpub3QoOmNoZWNrZWQpIH4gLmN1c3RvbS1jb250cm9sLWxhYmVsOjpiZWZvcmUge1xuICAgICAgICAgIGJvcmRlci1jb2xvcjogJGNvbG9yO1xuICAgICAgICB9XG4gICAgICB9XG4gICAgfVxuICB9XG5cbiAgLy8gY3VzdG9tIGZpbGVcbiAgLmN1c3RvbS1maWxlLWlucHV0IHtcbiAgICBAaW5jbHVkZSBmb3JtLXZhbGlkYXRpb24tc3RhdGUtc2VsZWN0b3IoJHN0YXRlKSB7XG4gICAgICB+IC5jdXN0b20tZmlsZS1sYWJlbCB7XG4gICAgICAgIGJvcmRlci1jb2xvcjogJGNvbG9yO1xuICAgICAgfVxuXG4gICAgICAmOmZvY3VzIHtcbiAgICAgICAgfiAuY3VzdG9tLWZpbGUtbGFiZWwge1xuICAgICAgICAgIGJvcmRlci1jb2xvcjogJGNvbG9yO1xuICAgICAgICAgIGJveC1zaGFkb3c6IDAgMCAwICRpbnB1dC1mb2N1cy13aWR0aCByZ2JhKCRjb2xvciwgLjI1KTtcbiAgICAgICAgfVxuICAgICAgfVxuICAgIH1cbiAgfVxufVxuIiwiLy8gR3JhZGllbnRzXG5cbkBtaXhpbiBncmFkaWVudC1iZygkY29sb3IpIHtcbiAgQGlmICRlbmFibGUtZ3JhZGllbnRzIHtcbiAgICBiYWNrZ3JvdW5kOiAkY29sb3IgbGluZWFyLWdyYWRpZW50KDE4MGRlZywgbWl4KCRib2R5LWJnLCAkY29sb3IsIDE1JSksICRjb2xvcikgcmVwZWF0LXg7XG4gIH0gQGVsc2Uge1xuICAgIGJhY2tncm91bmQtY29sb3I6ICRjb2xvcjtcbiAgfVxufVxuXG4vLyBIb3Jpem9udGFsIGdyYWRpZW50LCBmcm9tIGxlZnQgdG8gcmlnaHRcbi8vXG4vLyBDcmVhdGVzIHR3byBjb2xvciBzdG9wcywgc3RhcnQgYW5kIGVuZCwgYnkgc3BlY2lmeWluZyBhIGNvbG9yIGFuZCBwb3NpdGlvbiBmb3IgZWFjaCBjb2xvciBzdG9wLlxuQG1peGluIGdyYWRpZW50LXgoJHN0YXJ0LWNvbG9yOiAkZ3JheS03MDAsICRlbmQtY29sb3I6ICRncmF5LTgwMCwgJHN0YXJ0LXBlcmNlbnQ6IDAlLCAkZW5kLXBlcmNlbnQ6IDEwMCUpIHtcbiAgYmFja2dyb3VuZC1pbWFnZTogbGluZWFyLWdyYWRpZW50KHRvIHJpZ2h0LCAkc3RhcnQtY29sb3IgJHN0YXJ0LXBlcmNlbnQsICRlbmQtY29sb3IgJGVuZC1wZXJjZW50KTtcbiAgYmFja2dyb3VuZC1yZXBlYXQ6IHJlcGVhdC14O1xufVxuXG4vLyBWZXJ0aWNhbCBncmFkaWVudCwgZnJvbSB0b3AgdG8gYm90dG9tXG4vL1xuLy8gQ3JlYXRlcyB0d28gY29sb3Igc3RvcHMsIHN0YXJ0IGFuZCBlbmQsIGJ5IHNwZWNpZnlpbmcgYSBjb2xvciBhbmQgcG9zaXRpb24gZm9yIGVhY2ggY29sb3Igc3RvcC5cbkBtaXhpbiBncmFkaWVudC15KCRzdGFydC1jb2xvcjogJGdyYXktNzAwLCAkZW5kLWNvbG9yOiAkZ3JheS04MDAsICRzdGFydC1wZXJjZW50OiAwJSwgJGVuZC1wZXJjZW50OiAxMDAlKSB7XG4gIGJhY2tncm91bmQtaW1hZ2U6IGxpbmVhci1ncmFkaWVudCh0byBib3R0b20sICRzdGFydC1jb2xvciAkc3RhcnQtcGVyY2VudCwgJGVuZC1jb2xvciAkZW5kLXBlcmNlbnQpO1xuICBiYWNrZ3JvdW5kLXJlcGVhdDogcmVwZWF0LXg7XG59XG5cbkBtaXhpbiBncmFkaWVudC1kaXJlY3Rpb25hbCgkc3RhcnQtY29sb3I6ICRncmF5LTcwMCwgJGVuZC1jb2xvcjogJGdyYXktODAwLCAkZGVnOiA0NWRlZykge1xuICBiYWNrZ3JvdW5kLWltYWdlOiBsaW5lYXItZ3JhZGllbnQoJGRlZywgJHN0YXJ0LWNvbG9yLCAkZW5kLWNvbG9yKTtcbiAgYmFja2dyb3VuZC1yZXBlYXQ6IHJlcGVhdC14O1xufVxuQG1peGluIGdyYWRpZW50LXgtdGhyZWUtY29sb3JzKCRzdGFydC1jb2xvcjogJGJsdWUsICRtaWQtY29sb3I6ICRwdXJwbGUsICRjb2xvci1zdG9wOiA1MCUsICRlbmQtY29sb3I6ICRyZWQpIHtcbiAgYmFja2dyb3VuZC1pbWFnZTogbGluZWFyLWdyYWRpZW50KHRvIHJpZ2h0LCAkc3RhcnQtY29sb3IsICRtaWQtY29sb3IgJGNvbG9yLXN0b3AsICRlbmQtY29sb3IpO1xuICBiYWNrZ3JvdW5kLXJlcGVhdDogbm8tcmVwZWF0O1xufVxuQG1peGluIGdyYWRpZW50LXktdGhyZWUtY29sb3JzKCRzdGFydC1jb2xvcjogJGJsdWUsICRtaWQtY29sb3I6ICRwdXJwbGUsICRjb2xvci1zdG9wOiA1MCUsICRlbmQtY29sb3I6ICRyZWQpIHtcbiAgYmFja2dyb3VuZC1pbWFnZTogbGluZWFyLWdyYWRpZW50KCRzdGFydC1jb2xvciwgJG1pZC1jb2xvciAkY29sb3Itc3RvcCwgJGVuZC1jb2xvcik7XG4gIGJhY2tncm91bmQtcmVwZWF0OiBuby1yZXBlYXQ7XG59XG5AbWl4aW4gZ3JhZGllbnQtcmFkaWFsKCRpbm5lci1jb2xvcjogJGdyYXktNzAwLCAkb3V0ZXItY29sb3I6ICRncmF5LTgwMCkge1xuICBiYWNrZ3JvdW5kLWltYWdlOiByYWRpYWwtZ3JhZGllbnQoY2lyY2xlLCAkaW5uZXItY29sb3IsICRvdXRlci1jb2xvcik7XG4gIGJhY2tncm91bmQtcmVwZWF0OiBuby1yZXBlYXQ7XG59XG5AbWl4aW4gZ3JhZGllbnQtc3RyaXBlZCgkY29sb3I6IHJnYmEoJHdoaXRlLCAuMTUpLCAkYW5nbGU6IDQ1ZGVnKSB7XG4gIGJhY2tncm91bmQtaW1hZ2U6IGxpbmVhci1ncmFkaWVudCgkYW5nbGUsICRjb2xvciAyNSUsIHRyYW5zcGFyZW50IDI1JSwgdHJhbnNwYXJlbnQgNTAlLCAkY29sb3IgNTAlLCAkY29sb3IgNzUlLCB0cmFuc3BhcmVudCA3NSUsIHRyYW5zcGFyZW50KTtcbn1cbiIsIi8vIHN0eWxlbGludC1kaXNhYmxlIHNlbGVjdG9yLW5vLXF1YWxpZnlpbmctdHlwZVxuXG4vL1xuLy8gQmFzZSBzdHlsZXNcbi8vXG5cbi5idG4ge1xuICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gIGZvbnQtZmFtaWx5OiAkYnRuLWZvbnQtZmFtaWx5O1xuICBmb250LXdlaWdodDogJGJ0bi1mb250LXdlaWdodDtcbiAgY29sb3I6ICRib2R5LWNvbG9yO1xuICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gIHRleHQtZGVjb3JhdGlvbjogaWYoJGxpbmstZGVjb3JhdGlvbiA9PSBub25lLCBudWxsLCBub25lKTtcbiAgd2hpdGUtc3BhY2U6ICRidG4td2hpdGUtc3BhY2U7XG4gIHZlcnRpY2FsLWFsaWduOiBtaWRkbGU7XG4gIHVzZXItc2VsZWN0OiBub25lO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiB0cmFuc3BhcmVudDtcbiAgYm9yZGVyOiAkYnRuLWJvcmRlci13aWR0aCBzb2xpZCB0cmFuc3BhcmVudDtcbiAgQGluY2x1ZGUgYnV0dG9uLXNpemUoJGJ0bi1wYWRkaW5nLXksICRidG4tcGFkZGluZy14LCAkYnRuLWZvbnQtc2l6ZSwgJGJ0bi1saW5lLWhlaWdodCwgJGJ0bi1ib3JkZXItcmFkaXVzKTtcbiAgQGluY2x1ZGUgdHJhbnNpdGlvbigkYnRuLXRyYW5zaXRpb24pO1xuXG4gIEBpbmNsdWRlIGhvdmVyKCkge1xuICAgIGNvbG9yOiAkYm9keS1jb2xvcjtcbiAgICB0ZXh0LWRlY29yYXRpb246IG5vbmU7XG4gIH1cblxuICAmOmZvY3VzLFxuICAmLmZvY3VzIHtcbiAgICBvdXRsaW5lOiAwO1xuICAgIGJveC1zaGFkb3c6ICRidG4tZm9jdXMtYm94LXNoYWRvdztcbiAgfVxuXG4gIC8vIERpc2FibGVkIGNvbWVzIGZpcnN0IHNvIGFjdGl2ZSBjYW4gcHJvcGVybHkgcmVzdHlsZVxuICAmLmRpc2FibGVkLFxuICAmOmRpc2FibGVkIHtcbiAgICBvcGFjaXR5OiAkYnRuLWRpc2FibGVkLW9wYWNpdHk7XG4gICAgQGluY2x1ZGUgYm94LXNoYWRvdyhub25lKTtcbiAgfVxuXG4gICY6bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCkge1xuICAgIGN1cnNvcjogaWYoJGVuYWJsZS1wb2ludGVyLWN1cnNvci1mb3ItYnV0dG9ucywgcG9pbnRlciwgbnVsbCk7XG5cbiAgICAmOmFjdGl2ZSxcbiAgICAmLmFjdGl2ZSB7XG4gICAgICBAaW5jbHVkZSBib3gtc2hhZG93KCRidG4tYWN0aXZlLWJveC1zaGFkb3cpO1xuXG4gICAgICAmOmZvY3VzIHtcbiAgICAgICAgQGluY2x1ZGUgYm94LXNoYWRvdygkYnRuLWZvY3VzLWJveC1zaGFkb3csICRidG4tYWN0aXZlLWJveC1zaGFkb3cpO1xuICAgICAgfVxuICAgIH1cbiAgfVxufVxuXG4vLyBGdXR1cmUtcHJvb2YgZGlzYWJsaW5nIG9mIGNsaWNrcyBvbiBgPGE+YCBlbGVtZW50c1xuYS5idG4uZGlzYWJsZWQsXG5maWVsZHNldDpkaXNhYmxlZCBhLmJ0biB7XG4gIHBvaW50ZXItZXZlbnRzOiBub25lO1xufVxuXG5cbi8vXG4vLyBBbHRlcm5hdGUgYnV0dG9uc1xuLy9cblxuQGVhY2ggJGNvbG9yLCAkdmFsdWUgaW4gJHRoZW1lLWNvbG9ycyB7XG4gIC5idG4tI3skY29sb3J9IHtcbiAgICBAaW5jbHVkZSBidXR0b24tdmFyaWFudCgkdmFsdWUsICR2YWx1ZSk7XG4gIH1cbn1cblxuQGVhY2ggJGNvbG9yLCAkdmFsdWUgaW4gJHRoZW1lLWNvbG9ycyB7XG4gIC5idG4tb3V0bGluZS0jeyRjb2xvcn0ge1xuICAgIEBpbmNsdWRlIGJ1dHRvbi1vdXRsaW5lLXZhcmlhbnQoJHZhbHVlKTtcbiAgfVxufVxuXG5cbi8vXG4vLyBMaW5rIGJ1dHRvbnNcbi8vXG5cbi8vIE1ha2UgYSBidXR0b24gbG9vayBhbmQgYmVoYXZlIGxpa2UgYSBsaW5rXG4uYnRuLWxpbmsge1xuICBmb250LXdlaWdodDogJGZvbnQtd2VpZ2h0LW5vcm1hbDtcbiAgY29sb3I6ICRsaW5rLWNvbG9yO1xuICB0ZXh0LWRlY29yYXRpb246ICRsaW5rLWRlY29yYXRpb247XG5cbiAgQGluY2x1ZGUgaG92ZXIoKSB7XG4gICAgY29sb3I6ICRsaW5rLWhvdmVyLWNvbG9yO1xuICAgIHRleHQtZGVjb3JhdGlvbjogJGxpbmstaG92ZXItZGVjb3JhdGlvbjtcbiAgfVxuXG4gICY6Zm9jdXMsXG4gICYuZm9jdXMge1xuICAgIHRleHQtZGVjb3JhdGlvbjogJGxpbmstaG92ZXItZGVjb3JhdGlvbjtcbiAgfVxuXG4gICY6ZGlzYWJsZWQsXG4gICYuZGlzYWJsZWQge1xuICAgIGNvbG9yOiAkYnRuLWxpbmstZGlzYWJsZWQtY29sb3I7XG4gICAgcG9pbnRlci1ldmVudHM6IG5vbmU7XG4gIH1cblxuICAvLyBObyBuZWVkIGZvciBhbiBhY3RpdmUgc3RhdGUgaGVyZVxufVxuXG5cbi8vXG4vLyBCdXR0b24gU2l6ZXNcbi8vXG5cbi5idG4tbGcge1xuICBAaW5jbHVkZSBidXR0b24tc2l6ZSgkYnRuLXBhZGRpbmcteS1sZywgJGJ0bi1wYWRkaW5nLXgtbGcsICRidG4tZm9udC1zaXplLWxnLCAkYnRuLWxpbmUtaGVpZ2h0LWxnLCAkYnRuLWJvcmRlci1yYWRpdXMtbGcpO1xufVxuXG4uYnRuLXNtIHtcbiAgQGluY2x1ZGUgYnV0dG9uLXNpemUoJGJ0bi1wYWRkaW5nLXktc20sICRidG4tcGFkZGluZy14LXNtLCAkYnRuLWZvbnQtc2l6ZS1zbSwgJGJ0bi1saW5lLWhlaWdodC1zbSwgJGJ0bi1ib3JkZXItcmFkaXVzLXNtKTtcbn1cblxuXG4vL1xuLy8gQmxvY2sgYnV0dG9uXG4vL1xuXG4uYnRuLWJsb2NrIHtcbiAgZGlzcGxheTogYmxvY2s7XG4gIHdpZHRoOiAxMDAlO1xuXG4gIC8vIFZlcnRpY2FsbHkgc3BhY2Ugb3V0IG11bHRpcGxlIGJsb2NrIGJ1dHRvbnNcbiAgKyAuYnRuLWJsb2NrIHtcbiAgICBtYXJnaW4tdG9wOiAkYnRuLWJsb2NrLXNwYWNpbmcteTtcbiAgfVxufVxuXG4vLyBTcGVjaWZpY2l0eSBvdmVycmlkZXNcbmlucHV0W3R5cGU9XCJzdWJtaXRcIl0sXG5pbnB1dFt0eXBlPVwicmVzZXRcIl0sXG5pbnB1dFt0eXBlPVwiYnV0dG9uXCJdIHtcbiAgJi5idG4tYmxvY2sge1xuICAgIHdpZHRoOiAxMDAlO1xuICB9XG59XG4iLCIvLyBCdXR0b24gdmFyaWFudHNcbi8vXG4vLyBFYXNpbHkgcHVtcCBvdXQgZGVmYXVsdCBzdHlsZXMsIGFzIHdlbGwgYXMgOmhvdmVyLCA6Zm9jdXMsIDphY3RpdmUsXG4vLyBhbmQgZGlzYWJsZWQgb3B0aW9ucyBmb3IgYWxsIGJ1dHRvbnNcblxuQG1peGluIGJ1dHRvbi12YXJpYW50KCRiYWNrZ3JvdW5kLCAkYm9yZGVyLCAkaG92ZXItYmFja2dyb3VuZDogZGFya2VuKCRiYWNrZ3JvdW5kLCA3LjUlKSwgJGhvdmVyLWJvcmRlcjogZGFya2VuKCRib3JkZXIsIDEwJSksICRhY3RpdmUtYmFja2dyb3VuZDogZGFya2VuKCRiYWNrZ3JvdW5kLCAxMCUpLCAkYWN0aXZlLWJvcmRlcjogZGFya2VuKCRib3JkZXIsIDEyLjUlKSkge1xuICBjb2xvcjogY29sb3IteWlxKCRiYWNrZ3JvdW5kKTtcbiAgQGluY2x1ZGUgZ3JhZGllbnQtYmcoJGJhY2tncm91bmQpO1xuICBib3JkZXItY29sb3I6ICRib3JkZXI7XG4gIEBpbmNsdWRlIGJveC1zaGFkb3coJGJ0bi1ib3gtc2hhZG93KTtcblxuICBAaW5jbHVkZSBob3ZlcigpIHtcbiAgICBjb2xvcjogY29sb3IteWlxKCRob3Zlci1iYWNrZ3JvdW5kKTtcbiAgICBAaW5jbHVkZSBncmFkaWVudC1iZygkaG92ZXItYmFja2dyb3VuZCk7XG4gICAgYm9yZGVyLWNvbG9yOiAkaG92ZXItYm9yZGVyO1xuICB9XG5cbiAgJjpmb2N1cyxcbiAgJi5mb2N1cyB7XG4gICAgY29sb3I6IGNvbG9yLXlpcSgkaG92ZXItYmFja2dyb3VuZCk7XG4gICAgQGluY2x1ZGUgZ3JhZGllbnQtYmcoJGhvdmVyLWJhY2tncm91bmQpO1xuICAgIGJvcmRlci1jb2xvcjogJGhvdmVyLWJvcmRlcjtcbiAgICBAaWYgJGVuYWJsZS1zaGFkb3dzIHtcbiAgICAgIEBpbmNsdWRlIGJveC1zaGFkb3coJGJ0bi1ib3gtc2hhZG93LCAwIDAgMCAkYnRuLWZvY3VzLXdpZHRoIHJnYmEobWl4KGNvbG9yLXlpcSgkYmFja2dyb3VuZCksICRib3JkZXIsIDE1JSksIC41KSk7XG4gICAgfSBAZWxzZSB7XG4gICAgICAvLyBBdm9pZCB1c2luZyBtaXhpbiBzbyB3ZSBjYW4gcGFzcyBjdXN0b20gZm9jdXMgc2hhZG93IHByb3Blcmx5XG4gICAgICBib3gtc2hhZG93OiAwIDAgMCAkYnRuLWZvY3VzLXdpZHRoIHJnYmEobWl4KGNvbG9yLXlpcSgkYmFja2dyb3VuZCksICRib3JkZXIsIDE1JSksIC41KTtcbiAgICB9XG4gIH1cblxuICAvLyBEaXNhYmxlZCBjb21lcyBmaXJzdCBzbyBhY3RpdmUgY2FuIHByb3Blcmx5IHJlc3R5bGVcbiAgJi5kaXNhYmxlZCxcbiAgJjpkaXNhYmxlZCB7XG4gICAgY29sb3I6IGNvbG9yLXlpcSgkYmFja2dyb3VuZCk7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogJGJhY2tncm91bmQ7XG4gICAgYm9yZGVyLWNvbG9yOiAkYm9yZGVyO1xuICAgIC8vIFJlbW92ZSBDU1MgZ3JhZGllbnRzIGlmIHRoZXkncmUgZW5hYmxlZFxuICAgIEBpZiAkZW5hYmxlLWdyYWRpZW50cyB7XG4gICAgICBiYWNrZ3JvdW5kLWltYWdlOiBub25lO1xuICAgIH1cbiAgfVxuXG4gICY6bm90KDpkaXNhYmxlZCk6bm90KC5kaXNhYmxlZCk6YWN0aXZlLFxuICAmOm5vdCg6ZGlzYWJsZWQpOm5vdCguZGlzYWJsZWQpLmFjdGl2ZSxcbiAgLnNob3cgPiAmLmRyb3Bkb3duLXRvZ2dsZSB7XG4gICAgY29sb3I6IGNvbG9yLXlpcSgkYWN0aXZlLWJhY2tncm91bmQpO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICRhY3RpdmUtYmFja2dyb3VuZDtcbiAgICBAaWYgJGVuYWJsZS1ncmFkaWVudHMge1xuICAgICAgYmFja2dyb3VuZC1pbWFnZTogbm9uZTsgLy8gUmVtb3ZlIHRoZSBncmFkaWVudCBmb3IgdGhlIHByZXNzZWQvYWN0aXZlIHN0YXRlXG4gICAgfVxuICAgIGJvcmRlci1jb2xvcjogJGFjdGl2ZS1ib3JkZXI7XG5cbiAgICAmOmZvY3VzIHtcbiAgICAgIEBpZiAkZW5hYmxlLXNoYWRvd3MgYW5kICRidG4tYWN0aXZlLWJveC1zaGFkb3cgIT0gbm9uZSB7XG4gICAgICAgIEBpbmNsdWRlIGJveC1zaGFkb3coJGJ0bi1hY3RpdmUtYm94LXNoYWRvdywgMCAwIDAgJGJ0bi1mb2N1cy13aWR0aCByZ2JhKG1peChjb2xvci15aXEoJGJhY2tncm91bmQpLCAkYm9yZGVyLCAxNSUpLCAuNSkpO1xuICAgICAgfSBAZWxzZSB7XG4gICAgICAgIC8vIEF2b2lkIHVzaW5nIG1peGluIHNvIHdlIGNhbiBwYXNzIGN1c3RvbSBmb2N1cyBzaGFkb3cgcHJvcGVybHlcbiAgICAgICAgYm94LXNoYWRvdzogMCAwIDAgJGJ0bi1mb2N1cy13aWR0aCByZ2JhKG1peChjb2xvci15aXEoJGJhY2tncm91bmQpLCAkYm9yZGVyLCAxNSUpLCAuNSk7XG4gICAgICB9XG4gICAgfVxuICB9XG59XG5cbkBtaXhpbiBidXR0b24tb3V0bGluZS12YXJpYW50KCRjb2xvciwgJGNvbG9yLWhvdmVyOiBjb2xvci15aXEoJGNvbG9yKSwgJGFjdGl2ZS1iYWNrZ3JvdW5kOiAkY29sb3IsICRhY3RpdmUtYm9yZGVyOiAkY29sb3IpIHtcbiAgY29sb3I6ICRjb2xvcjtcbiAgYm9yZGVyLWNvbG9yOiAkY29sb3I7XG5cbiAgQGluY2x1ZGUgaG92ZXIoKSB7XG4gICAgY29sb3I6ICRjb2xvci1ob3ZlcjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkYWN0aXZlLWJhY2tncm91bmQ7XG4gICAgYm9yZGVyLWNvbG9yOiAkYWN0aXZlLWJvcmRlcjtcbiAgfVxuXG4gICY6Zm9jdXMsXG4gICYuZm9jdXMge1xuICAgIGJveC1zaGFkb3c6IDAgMCAwICRidG4tZm9jdXMtd2lkdGggcmdiYSgkY29sb3IsIC41KTtcbiAgfVxuXG4gICYuZGlzYWJsZWQsXG4gICY6ZGlzYWJsZWQge1xuICAgIGNvbG9yOiAkY29sb3I7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogdHJhbnNwYXJlbnQ7XG4gIH1cblxuICAmOm5vdCg6ZGlzYWJsZWQpOm5vdCguZGlzYWJsZWQpOmFjdGl2ZSxcbiAgJjpub3QoOmRpc2FibGVkKTpub3QoLmRpc2FibGVkKS5hY3RpdmUsXG4gIC5zaG93ID4gJi5kcm9wZG93bi10b2dnbGUge1xuICAgIGNvbG9yOiBjb2xvci15aXEoJGFjdGl2ZS1iYWNrZ3JvdW5kKTtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkYWN0aXZlLWJhY2tncm91bmQ7XG4gICAgYm9yZGVyLWNvbG9yOiAkYWN0aXZlLWJvcmRlcjtcblxuICAgICY6Zm9jdXMge1xuICAgICAgQGlmICRlbmFibGUtc2hhZG93cyBhbmQgJGJ0bi1hY3RpdmUtYm94LXNoYWRvdyAhPSBub25lIHtcbiAgICAgICAgQGluY2x1ZGUgYm94LXNoYWRvdygkYnRuLWFjdGl2ZS1ib3gtc2hhZG93LCAwIDAgMCAkYnRuLWZvY3VzLXdpZHRoIHJnYmEoJGNvbG9yLCAuNSkpO1xuICAgICAgfSBAZWxzZSB7XG4gICAgICAgIC8vIEF2b2lkIHVzaW5nIG1peGluIHNvIHdlIGNhbiBwYXNzIGN1c3RvbSBmb2N1cyBzaGFkb3cgcHJvcGVybHlcbiAgICAgICAgYm94LXNoYWRvdzogMCAwIDAgJGJ0bi1mb2N1cy13aWR0aCByZ2JhKCRjb2xvciwgLjUpO1xuICAgICAgfVxuICAgIH1cbiAgfVxufVxuXG4vLyBCdXR0b24gc2l6ZXNcbkBtaXhpbiBidXR0b24tc2l6ZSgkcGFkZGluZy15LCAkcGFkZGluZy14LCAkZm9udC1zaXplLCAkbGluZS1oZWlnaHQsICRib3JkZXItcmFkaXVzKSB7XG4gIHBhZGRpbmc6ICRwYWRkaW5nLXkgJHBhZGRpbmcteDtcbiAgQGluY2x1ZGUgZm9udC1zaXplKCRmb250LXNpemUpO1xuICBsaW5lLWhlaWdodDogJGxpbmUtaGVpZ2h0O1xuICAvLyBNYW51YWxseSBkZWNsYXJlIHRvIHByb3ZpZGUgYW4gb3ZlcnJpZGUgdG8gdGhlIGJyb3dzZXIgZGVmYXVsdFxuICBAaW5jbHVkZSBib3JkZXItcmFkaXVzKCRib3JkZXItcmFkaXVzLCAwKTtcbn1cbiIsIi5mYWRlIHtcbiAgQGluY2x1ZGUgdHJhbnNpdGlvbigkdHJhbnNpdGlvbi1mYWRlKTtcblxuICAmOm5vdCguc2hvdykge1xuICAgIG9wYWNpdHk6IDA7XG4gIH1cbn1cblxuLmNvbGxhcHNlIHtcbiAgJjpub3QoLnNob3cpIHtcbiAgICBkaXNwbGF5OiBub25lO1xuICB9XG59XG5cbi5jb2xsYXBzaW5nIHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICBoZWlnaHQ6IDA7XG4gIG92ZXJmbG93OiBoaWRkZW47XG4gIEBpbmNsdWRlIHRyYW5zaXRpb24oJHRyYW5zaXRpb24tY29sbGFwc2UpO1xufVxuIiwiLy8gVGhlIGRyb3Bkb3duIHdyYXBwZXIgKGA8ZGl2PmApXG4uZHJvcHVwLFxuLmRyb3ByaWdodCxcbi5kcm9wZG93bixcbi5kcm9wbGVmdCB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbn1cblxuLmRyb3Bkb3duLXRvZ2dsZSB7XG4gIHdoaXRlLXNwYWNlOiBub3dyYXA7XG5cbiAgLy8gR2VuZXJhdGUgdGhlIGNhcmV0IGF1dG9tYXRpY2FsbHlcbiAgQGluY2x1ZGUgY2FyZXQoKTtcbn1cblxuLy8gVGhlIGRyb3Bkb3duIG1lbnVcbi5kcm9wZG93bi1tZW51IHtcbiAgcG9zaXRpb246IGFic29sdXRlO1xuICB0b3A6IDEwMCU7XG4gIGxlZnQ6IDA7XG4gIHotaW5kZXg6ICR6aW5kZXgtZHJvcGRvd247XG4gIGRpc3BsYXk6IG5vbmU7IC8vIG5vbmUgYnkgZGVmYXVsdCwgYnV0IGJsb2NrIG9uIFwib3BlblwiIG9mIHRoZSBtZW51XG4gIGZsb2F0OiBsZWZ0O1xuICBtaW4td2lkdGg6ICRkcm9wZG93bi1taW4td2lkdGg7XG4gIHBhZGRpbmc6ICRkcm9wZG93bi1wYWRkaW5nLXkgMDtcbiAgbWFyZ2luOiAkZHJvcGRvd24tc3BhY2VyIDAgMDsgLy8gb3ZlcnJpZGUgZGVmYXVsdCB1bFxuICBAaW5jbHVkZSBmb250LXNpemUoJGRyb3Bkb3duLWZvbnQtc2l6ZSk7XG4gIGNvbG9yOiAkZHJvcGRvd24tY29sb3I7XG4gIHRleHQtYWxpZ246IGxlZnQ7IC8vIEVuc3VyZXMgcHJvcGVyIGFsaWdubWVudCBpZiBwYXJlbnQgaGFzIGl0IGNoYW5nZWQgKGUuZy4sIG1vZGFsIGZvb3RlcilcbiAgbGlzdC1zdHlsZTogbm9uZTtcbiAgYmFja2dyb3VuZC1jb2xvcjogJGRyb3Bkb3duLWJnO1xuICBiYWNrZ3JvdW5kLWNsaXA6IHBhZGRpbmctYm94O1xuICBib3JkZXI6ICRkcm9wZG93bi1ib3JkZXItd2lkdGggc29saWQgJGRyb3Bkb3duLWJvcmRlci1jb2xvcjtcbiAgQGluY2x1ZGUgYm9yZGVyLXJhZGl1cygkZHJvcGRvd24tYm9yZGVyLXJhZGl1cyk7XG4gIEBpbmNsdWRlIGJveC1zaGFkb3coJGRyb3Bkb3duLWJveC1zaGFkb3cpO1xufVxuXG5AZWFjaCAkYnJlYWtwb2ludCBpbiBtYXAta2V5cygkZ3JpZC1icmVha3BvaW50cykge1xuICBAaW5jbHVkZSBtZWRpYS1icmVha3BvaW50LXVwKCRicmVha3BvaW50KSB7XG4gICAgJGluZml4OiBicmVha3BvaW50LWluZml4KCRicmVha3BvaW50LCAkZ3JpZC1icmVha3BvaW50cyk7XG5cbiAgICAuZHJvcGRvd24tbWVudSN7JGluZml4fS1sZWZ0IHtcbiAgICAgIHJpZ2h0OiBhdXRvO1xuICAgICAgbGVmdDogMDtcbiAgICB9XG5cbiAgICAuZHJvcGRvd24tbWVudSN7JGluZml4fS1yaWdodCB7XG4gICAgICByaWdodDogMDtcbiAgICAgIGxlZnQ6IGF1dG87XG4gICAgfVxuICB9XG59XG5cbi8vIEFsbG93IGZvciBkcm9wZG93bnMgdG8gZ28gYm90dG9tIHVwIChha2EsIGRyb3B1cC1tZW51KVxuLy8gSnVzdCBhZGQgLmRyb3B1cCBhZnRlciB0aGUgc3RhbmRhcmQgLmRyb3Bkb3duIGNsYXNzIGFuZCB5b3UncmUgc2V0LlxuLmRyb3B1cCB7XG4gIC5kcm9wZG93bi1tZW51IHtcbiAgICB0b3A6IGF1dG87XG4gICAgYm90dG9tOiAxMDAlO1xuICAgIG1hcmdpbi10b3A6IDA7XG4gICAgbWFyZ2luLWJvdHRvbTogJGRyb3Bkb3duLXNwYWNlcjtcbiAgfVxuXG4gIC5kcm9wZG93bi10b2dnbGUge1xuICAgIEBpbmNsdWRlIGNhcmV0KHVwKTtcbiAgfVxufVxuXG4uZHJvcHJpZ2h0IHtcbiAgLmRyb3Bkb3duLW1lbnUge1xuICAgIHRvcDogMDtcbiAgICByaWdodDogYXV0bztcbiAgICBsZWZ0OiAxMDAlO1xuICAgIG1hcmdpbi10b3A6IDA7XG4gICAgbWFyZ2luLWxlZnQ6ICRkcm9wZG93bi1zcGFjZXI7XG4gIH1cblxuICAuZHJvcGRvd24tdG9nZ2xlIHtcbiAgICBAaW5jbHVkZSBjYXJldChyaWdodCk7XG4gICAgJjo6YWZ0ZXIge1xuICAgICAgdmVydGljYWwtYWxpZ246IDA7XG4gICAgfVxuICB9XG59XG5cbi5kcm9wbGVmdCB7XG4gIC5kcm9wZG93bi1tZW51IHtcbiAgICB0b3A6IDA7XG4gICAgcmlnaHQ6IDEwMCU7XG4gICAgbGVmdDogYXV0bztcbiAgICBtYXJnaW4tdG9wOiAwO1xuICAgIG1hcmdpbi1yaWdodDogJGRyb3Bkb3duLXNwYWNlcjtcbiAgfVxuXG4gIC5kcm9wZG93bi10b2dnbGUge1xuICAgIEBpbmNsdWRlIGNhcmV0KGxlZnQpO1xuICAgICY6OmJlZm9yZSB7XG4gICAgICB2ZXJ0aWNhbC1hbGlnbjogMDtcbiAgICB9XG4gIH1cbn1cblxuLy8gV2hlbiBlbmFibGVkIFBvcHBlci5qcywgcmVzZXQgYmFzaWMgZHJvcGRvd24gcG9zaXRpb25cbi8vIHN0eWxlbGludC1kaXNhYmxlLW5leHQtbGluZSBuby1kdXBsaWNhdGUtc2VsZWN0b3JzXG4uZHJvcGRvd24tbWVudSB7XG4gICZbeC1wbGFjZW1lbnRePVwidG9wXCJdLFxuICAmW3gtcGxhY2VtZW50Xj1cInJpZ2h0XCJdLFxuICAmW3gtcGxhY2VtZW50Xj1cImJvdHRvbVwiXSxcbiAgJlt4LXBsYWNlbWVudF49XCJsZWZ0XCJdIHtcbiAgICByaWdodDogYXV0bztcbiAgICBib3R0b206IGF1dG87XG4gIH1cbn1cblxuLy8gRGl2aWRlcnMgKGJhc2ljYWxseSBhbiBgPGhyPmApIHdpdGhpbiB0aGUgZHJvcGRvd25cbi5kcm9wZG93bi1kaXZpZGVyIHtcbiAgQGluY2x1ZGUgbmF2LWRpdmlkZXIoJGRyb3Bkb3duLWRpdmlkZXItYmcsICRkcm9wZG93bi1kaXZpZGVyLW1hcmdpbi15LCB0cnVlKTtcbn1cblxuLy8gTGlua3MsIGJ1dHRvbnMsIGFuZCBtb3JlIHdpdGhpbiB0aGUgZHJvcGRvd24gbWVudVxuLy9cbi8vIGA8YnV0dG9uPmAtc3BlY2lmaWMgc3R5bGVzIGFyZSBkZW5vdGVkIHdpdGggYC8vIEZvciA8YnV0dG9uPnNgXG4uZHJvcGRvd24taXRlbSB7XG4gIGRpc3BsYXk6IGJsb2NrO1xuICB3aWR0aDogMTAwJTsgLy8gRm9yIGA8YnV0dG9uPmBzXG4gIHBhZGRpbmc6ICRkcm9wZG93bi1pdGVtLXBhZGRpbmcteSAkZHJvcGRvd24taXRlbS1wYWRkaW5nLXg7XG4gIGNsZWFyOiBib3RoO1xuICBmb250LXdlaWdodDogJGZvbnQtd2VpZ2h0LW5vcm1hbDtcbiAgY29sb3I6ICRkcm9wZG93bi1saW5rLWNvbG9yO1xuICB0ZXh0LWFsaWduOiBpbmhlcml0OyAvLyBGb3IgYDxidXR0b24+YHNcbiAgdGV4dC1kZWNvcmF0aW9uOiBpZigkbGluay1kZWNvcmF0aW9uID09IG5vbmUsIG51bGwsIG5vbmUpO1xuICB3aGl0ZS1zcGFjZTogbm93cmFwOyAvLyBwcmV2ZW50IGxpbmtzIGZyb20gcmFuZG9tbHkgYnJlYWtpbmcgb250byBuZXcgbGluZXNcbiAgYmFja2dyb3VuZC1jb2xvcjogdHJhbnNwYXJlbnQ7IC8vIEZvciBgPGJ1dHRvbj5gc1xuICBib3JkZXI6IDA7IC8vIEZvciBgPGJ1dHRvbj5gc1xuXG4gIC8vIFByZXZlbnQgZHJvcGRvd24gb3ZlcmZsb3cgaWYgdGhlcmUncyBubyBwYWRkaW5nXG4gIC8vIFNlZSBodHRwczovL2dpdGh1Yi5jb20vdHdicy9ib290c3RyYXAvcHVsbC8yNzcwM1xuICBAaWYgJGRyb3Bkb3duLXBhZGRpbmcteSA9PSAwIHtcbiAgICAmOmZpcnN0LWNoaWxkIHtcbiAgICAgIEBpbmNsdWRlIGJvcmRlci10b3AtcmFkaXVzKCRkcm9wZG93bi1pbm5lci1ib3JkZXItcmFkaXVzKTtcbiAgICB9XG5cbiAgICAmOmxhc3QtY2hpbGQge1xuICAgICAgQGluY2x1ZGUgYm9yZGVyLWJvdHRvbS1yYWRpdXMoJGRyb3Bkb3duLWlubmVyLWJvcmRlci1yYWRpdXMpO1xuICAgIH1cbiAgfVxuXG4gIEBpbmNsdWRlIGhvdmVyLWZvY3VzKCkge1xuICAgIGNvbG9yOiAkZHJvcGRvd24tbGluay1ob3Zlci1jb2xvcjtcbiAgICB0ZXh0LWRlY29yYXRpb246IG5vbmU7XG4gICAgQGluY2x1ZGUgZ3JhZGllbnQtYmcoJGRyb3Bkb3duLWxpbmstaG92ZXItYmcpO1xuICB9XG5cbiAgJi5hY3RpdmUsXG4gICY6YWN0aXZlIHtcbiAgICBjb2xvcjogJGRyb3Bkb3duLWxpbmstYWN0aXZlLWNvbG9yO1xuICAgIHRleHQtZGVjb3JhdGlvbjogbm9uZTtcbiAgICBAaW5jbHVkZSBncmFkaWVudC1iZygkZHJvcGRvd24tbGluay1hY3RpdmUtYmcpO1xuICB9XG5cbiAgJi5kaXNhYmxlZCxcbiAgJjpkaXNhYmxlZCB7XG4gICAgY29sb3I6ICRkcm9wZG93bi1saW5rLWRpc2FibGVkLWNvbG9yO1xuICAgIHBvaW50ZXItZXZlbnRzOiBub25lO1xuICAgIGJhY2tncm91bmQtY29sb3I6IHRyYW5zcGFyZW50O1xuICAgIC8vIFJlbW92ZSBDU1MgZ3JhZGllbnRzIGlmIHRoZXkncmUgZW5hYmxlZFxuICAgIEBpZiAkZW5hYmxlLWdyYWRpZW50cyB7XG4gICAgICBiYWNrZ3JvdW5kLWltYWdlOiBub25lO1xuICAgIH1cbiAgfVxufVxuXG4uZHJvcGRvd24tbWVudS5zaG93IHtcbiAgZGlzcGxheTogYmxvY2s7XG59XG5cbi8vIERyb3Bkb3duIHNlY3Rpb24gaGVhZGVyc1xuLmRyb3Bkb3duLWhlYWRlciB7XG4gIGRpc3BsYXk6IGJsb2NrO1xuICBwYWRkaW5nOiAkZHJvcGRvd24taGVhZGVyLXBhZGRpbmc7XG4gIG1hcmdpbi1ib3R0b206IDA7IC8vIGZvciB1c2Ugd2l0aCBoZWFkaW5nIGVsZW1lbnRzXG4gIEBpbmNsdWRlIGZvbnQtc2l6ZSgkZm9udC1zaXplLXNtKTtcbiAgY29sb3I6ICRkcm9wZG93bi1oZWFkZXItY29sb3I7XG4gIHdoaXRlLXNwYWNlOiBub3dyYXA7IC8vIGFzIHdpdGggPiBsaSA+IGFcbn1cblxuLy8gRHJvcGRvd24gdGV4dFxuLmRyb3Bkb3duLWl0ZW0tdGV4dCB7XG4gIGRpc3BsYXk6IGJsb2NrO1xuICBwYWRkaW5nOiAkZHJvcGRvd24taXRlbS1wYWRkaW5nLXkgJGRyb3Bkb3duLWl0ZW0tcGFkZGluZy14O1xuICBjb2xvcjogJGRyb3Bkb3duLWxpbmstY29sb3I7XG59XG4iLCJAbWl4aW4gY2FyZXQtZG93bigpIHtcbiAgYm9yZGVyLXRvcDogJGNhcmV0LXdpZHRoIHNvbGlkO1xuICBib3JkZXItcmlnaHQ6ICRjYXJldC13aWR0aCBzb2xpZCB0cmFuc3BhcmVudDtcbiAgYm9yZGVyLWJvdHRvbTogMDtcbiAgYm9yZGVyLWxlZnQ6ICRjYXJldC13aWR0aCBzb2xpZCB0cmFuc3BhcmVudDtcbn1cblxuQG1peGluIGNhcmV0LXVwKCkge1xuICBib3JkZXItdG9wOiAwO1xuICBib3JkZXItcmlnaHQ6ICRjYXJldC13aWR0aCBzb2xpZCB0cmFuc3BhcmVudDtcbiAgYm9yZGVyLWJvdHRvbTogJGNhcmV0LXdpZHRoIHNvbGlkO1xuICBib3JkZXItbGVmdDogJGNhcmV0LXdpZHRoIHNvbGlkIHRyYW5zcGFyZW50O1xufVxuXG5AbWl4aW4gY2FyZXQtcmlnaHQoKSB7XG4gIGJvcmRlci10b3A6ICRjYXJldC13aWR0aCBzb2xpZCB0cmFuc3BhcmVudDtcbiAgYm9yZGVyLXJpZ2h0OiAwO1xuICBib3JkZXItYm90dG9tOiAkY2FyZXQtd2lkdGggc29saWQgdHJhbnNwYXJlbnQ7XG4gIGJvcmRlci1sZWZ0OiAkY2FyZXQtd2lkdGggc29saWQ7XG59XG5cbkBtaXhpbiBjYXJldC1sZWZ0KCkge1xuICBib3JkZXItdG9wOiAkY2FyZXQtd2lkdGggc29saWQgdHJhbnNwYXJlbnQ7XG4gIGJvcmRlci1yaWdodDogJGNhcmV0LXdpZHRoIHNvbGlkO1xuICBib3JkZXItYm90dG9tOiAkY2FyZXQtd2lkdGggc29saWQgdHJhbnNwYXJlbnQ7XG59XG5cbkBtaXhpbiBjYXJldCgkZGlyZWN0aW9uOiBkb3duKSB7XG4gIEBpZiAkZW5hYmxlLWNhcmV0IHtcbiAgICAmOjphZnRlciB7XG4gICAgICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gICAgICBtYXJnaW4tbGVmdDogJGNhcmV0LXNwYWNpbmc7XG4gICAgICB2ZXJ0aWNhbC1hbGlnbjogJGNhcmV0LXZlcnRpY2FsLWFsaWduO1xuICAgICAgY29udGVudDogXCJcIjtcbiAgICAgIEBpZiAkZGlyZWN0aW9uID09IGRvd24ge1xuICAgICAgICBAaW5jbHVkZSBjYXJldC1kb3duKCk7XG4gICAgICB9IEBlbHNlIGlmICRkaXJlY3Rpb24gPT0gdXAge1xuICAgICAgICBAaW5jbHVkZSBjYXJldC11cCgpO1xuICAgICAgfSBAZWxzZSBpZiAkZGlyZWN0aW9uID09IHJpZ2h0IHtcbiAgICAgICAgQGluY2x1ZGUgY2FyZXQtcmlnaHQoKTtcbiAgICAgIH1cbiAgICB9XG5cbiAgICBAaWYgJGRpcmVjdGlvbiA9PSBsZWZ0IHtcbiAgICAgICY6OmFmdGVyIHtcbiAgICAgICAgZGlzcGxheTogbm9uZTtcbiAgICAgIH1cblxuICAgICAgJjo6YmVmb3JlIHtcbiAgICAgICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICAgICAgICBtYXJnaW4tcmlnaHQ6ICRjYXJldC1zcGFjaW5nO1xuICAgICAgICB2ZXJ0aWNhbC1hbGlnbjogJGNhcmV0LXZlcnRpY2FsLWFsaWduO1xuICAgICAgICBjb250ZW50OiBcIlwiO1xuICAgICAgICBAaW5jbHVkZSBjYXJldC1sZWZ0KCk7XG4gICAgICB9XG4gICAgfVxuXG4gICAgJjplbXB0eTo6YWZ0ZXIge1xuICAgICAgbWFyZ2luLWxlZnQ6IDA7XG4gICAgfVxuICB9XG59XG4iLCIvLyBIb3Jpem9udGFsIGRpdmlkZXJzXG4vL1xuLy8gRGl2aWRlcnMgKGJhc2ljYWxseSBhbiBocikgd2l0aGluIGRyb3Bkb3ducyBhbmQgbmF2IGxpc3RzXG5cbkBtaXhpbiBuYXYtZGl2aWRlcigkY29sb3I6ICRuYXYtZGl2aWRlci1jb2xvciwgJG1hcmdpbi15OiAkbmF2LWRpdmlkZXItbWFyZ2luLXksICRpZ25vcmUtd2FybmluZzogZmFsc2UpIHtcbiAgaGVpZ2h0OiAwO1xuICBtYXJnaW46ICRtYXJnaW4teSAwO1xuICBvdmVyZmxvdzogaGlkZGVuO1xuICBib3JkZXItdG9wOiAxcHggc29saWQgJGNvbG9yO1xuICBAaW5jbHVkZSBkZXByZWNhdGUoXCJUaGUgYG5hdi1kaXZpZGVyKClgIG1peGluXCIsIFwidjQuNC4wXCIsIFwidjVcIiwgJGlnbm9yZS13YXJuaW5nKTtcbn1cbiIsIi8vIHN0eWxlbGludC1kaXNhYmxlIHNlbGVjdG9yLW5vLXF1YWxpZnlpbmctdHlwZVxuXG4vLyBNYWtlIHRoZSBkaXYgYmVoYXZlIGxpa2UgYSBidXR0b25cbi5idG4tZ3JvdXAsXG4uYnRuLWdyb3VwLXZlcnRpY2FsIHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICBkaXNwbGF5OiBpbmxpbmUtZmxleDtcbiAgdmVydGljYWwtYWxpZ246IG1pZGRsZTsgLy8gbWF0Y2ggLmJ0biBhbGlnbm1lbnQgZ2l2ZW4gZm9udC1zaXplIGhhY2sgYWJvdmVcblxuICA+IC5idG4ge1xuICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgICBmbGV4OiAxIDEgYXV0bztcblxuICAgIC8vIEJyaW5nIHRoZSBob3ZlciwgZm9jdXNlZCwgYW5kIFwiYWN0aXZlXCIgYnV0dG9ucyB0byB0aGUgZnJvbnQgdG8gb3ZlcmxheVxuICAgIC8vIHRoZSBib3JkZXJzIHByb3Blcmx5XG4gICAgQGluY2x1ZGUgaG92ZXIoKSB7XG4gICAgICB6LWluZGV4OiAxO1xuICAgIH1cbiAgICAmOmZvY3VzLFxuICAgICY6YWN0aXZlLFxuICAgICYuYWN0aXZlIHtcbiAgICAgIHotaW5kZXg6IDE7XG4gICAgfVxuICB9XG59XG5cbi8vIE9wdGlvbmFsOiBHcm91cCBtdWx0aXBsZSBidXR0b24gZ3JvdXBzIHRvZ2V0aGVyIGZvciBhIHRvb2xiYXJcbi5idG4tdG9vbGJhciB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGZsZXgtd3JhcDogd3JhcDtcbiAganVzdGlmeS1jb250ZW50OiBmbGV4LXN0YXJ0O1xuXG4gIC5pbnB1dC1ncm91cCB7XG4gICAgd2lkdGg6IGF1dG87XG4gIH1cbn1cblxuLmJ0bi1ncm91cCB7XG4gIC8vIFByZXZlbnQgZG91YmxlIGJvcmRlcnMgd2hlbiBidXR0b25zIGFyZSBuZXh0IHRvIGVhY2ggb3RoZXJcbiAgPiAuYnRuOm5vdCg6Zmlyc3QtY2hpbGQpLFxuICA+IC5idG4tZ3JvdXA6bm90KDpmaXJzdC1jaGlsZCkge1xuICAgIG1hcmdpbi1sZWZ0OiAtJGJ0bi1ib3JkZXItd2lkdGg7XG4gIH1cblxuICAvLyBSZXNldCByb3VuZGVkIGNvcm5lcnNcbiAgPiAuYnRuOm5vdCg6bGFzdC1jaGlsZCk6bm90KC5kcm9wZG93bi10b2dnbGUpLFxuICA+IC5idG4tZ3JvdXA6bm90KDpsYXN0LWNoaWxkKSA+IC5idG4ge1xuICAgIEBpbmNsdWRlIGJvcmRlci1yaWdodC1yYWRpdXMoMCk7XG4gIH1cblxuICA+IC5idG46bm90KDpmaXJzdC1jaGlsZCksXG4gID4gLmJ0bi1ncm91cDpub3QoOmZpcnN0LWNoaWxkKSA+IC5idG4ge1xuICAgIEBpbmNsdWRlIGJvcmRlci1sZWZ0LXJhZGl1cygwKTtcbiAgfVxufVxuXG4vLyBTaXppbmdcbi8vXG4vLyBSZW1peCB0aGUgZGVmYXVsdCBidXR0b24gc2l6aW5nIGNsYXNzZXMgaW50byBuZXcgb25lcyBmb3IgZWFzaWVyIG1hbmlwdWxhdGlvbi5cblxuLmJ0bi1ncm91cC1zbSA+IC5idG4geyBAZXh0ZW5kIC5idG4tc207IH1cbi5idG4tZ3JvdXAtbGcgPiAuYnRuIHsgQGV4dGVuZCAuYnRuLWxnOyB9XG5cblxuLy9cbi8vIFNwbGl0IGJ1dHRvbiBkcm9wZG93bnNcbi8vXG5cbi5kcm9wZG93bi10b2dnbGUtc3BsaXQge1xuICBwYWRkaW5nLXJpZ2h0OiAkYnRuLXBhZGRpbmcteCAqIC43NTtcbiAgcGFkZGluZy1sZWZ0OiAkYnRuLXBhZGRpbmcteCAqIC43NTtcblxuICAmOjphZnRlcixcbiAgLmRyb3B1cCAmOjphZnRlcixcbiAgLmRyb3ByaWdodCAmOjphZnRlciB7XG4gICAgbWFyZ2luLWxlZnQ6IDA7XG4gIH1cblxuICAuZHJvcGxlZnQgJjo6YmVmb3JlIHtcbiAgICBtYXJnaW4tcmlnaHQ6IDA7XG4gIH1cbn1cblxuLmJ0bi1zbSArIC5kcm9wZG93bi10b2dnbGUtc3BsaXQge1xuICBwYWRkaW5nLXJpZ2h0OiAkYnRuLXBhZGRpbmcteC1zbSAqIC43NTtcbiAgcGFkZGluZy1sZWZ0OiAkYnRuLXBhZGRpbmcteC1zbSAqIC43NTtcbn1cblxuLmJ0bi1sZyArIC5kcm9wZG93bi10b2dnbGUtc3BsaXQge1xuICBwYWRkaW5nLXJpZ2h0OiAkYnRuLXBhZGRpbmcteC1sZyAqIC43NTtcbiAgcGFkZGluZy1sZWZ0OiAkYnRuLXBhZGRpbmcteC1sZyAqIC43NTtcbn1cblxuXG4vLyBUaGUgY2xpY2thYmxlIGJ1dHRvbiBmb3IgdG9nZ2xpbmcgdGhlIG1lbnVcbi8vIFNldCB0aGUgc2FtZSBpbnNldCBzaGFkb3cgYXMgdGhlIDphY3RpdmUgc3RhdGVcbi5idG4tZ3JvdXAuc2hvdyAuZHJvcGRvd24tdG9nZ2xlIHtcbiAgQGluY2x1ZGUgYm94LXNoYWRvdygkYnRuLWFjdGl2ZS1ib3gtc2hhZG93KTtcblxuICAvLyBTaG93IG5vIHNoYWRvdyBmb3IgYC5idG4tbGlua2Agc2luY2UgaXQgaGFzIG5vIG90aGVyIGJ1dHRvbiBzdHlsZXMuXG4gICYuYnRuLWxpbmsge1xuICAgIEBpbmNsdWRlIGJveC1zaGFkb3cobm9uZSk7XG4gIH1cbn1cblxuXG4vL1xuLy8gVmVydGljYWwgYnV0dG9uIGdyb3Vwc1xuLy9cblxuLmJ0bi1ncm91cC12ZXJ0aWNhbCB7XG4gIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gIGFsaWduLWl0ZW1zOiBmbGV4LXN0YXJ0O1xuICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcblxuICA+IC5idG4sXG4gID4gLmJ0bi1ncm91cCB7XG4gICAgd2lkdGg6IDEwMCU7XG4gIH1cblxuICA+IC5idG46bm90KDpmaXJzdC1jaGlsZCksXG4gID4gLmJ0bi1ncm91cDpub3QoOmZpcnN0LWNoaWxkKSB7XG4gICAgbWFyZ2luLXRvcDogLSRidG4tYm9yZGVyLXdpZHRoO1xuICB9XG5cbiAgLy8gUmVzZXQgcm91bmRlZCBjb3JuZXJzXG4gID4gLmJ0bjpub3QoOmxhc3QtY2hpbGQpOm5vdCguZHJvcGRvd24tdG9nZ2xlKSxcbiAgPiAuYnRuLWdyb3VwOm5vdCg6bGFzdC1jaGlsZCkgPiAuYnRuIHtcbiAgICBAaW5jbHVkZSBib3JkZXItYm90dG9tLXJhZGl1cygwKTtcbiAgfVxuXG4gID4gLmJ0bjpub3QoOmZpcnN0LWNoaWxkKSxcbiAgPiAuYnRuLWdyb3VwOm5vdCg6Zmlyc3QtY2hpbGQpID4gLmJ0biB7XG4gICAgQGluY2x1ZGUgYm9yZGVyLXRvcC1yYWRpdXMoMCk7XG4gIH1cbn1cblxuXG4vLyBDaGVja2JveCBhbmQgcmFkaW8gb3B0aW9uc1xuLy9cbi8vIEluIG9yZGVyIHRvIHN1cHBvcnQgdGhlIGJyb3dzZXIncyBmb3JtIHZhbGlkYXRpb24gZmVlZGJhY2ssIHBvd2VyZWQgYnkgdGhlXG4vLyBgcmVxdWlyZWRgIGF0dHJpYnV0ZSwgd2UgaGF2ZSB0byBcImhpZGVcIiB0aGUgaW5wdXRzIHZpYSBgY2xpcGAuIFdlIGNhbm5vdCB1c2Vcbi8vIGBkaXNwbGF5OiBub25lO2Agb3IgYHZpc2liaWxpdHk6IGhpZGRlbjtgIGFzIHRoYXQgYWxzbyBoaWRlcyB0aGUgcG9wb3Zlci5cbi8vIFNpbXBseSB2aXN1YWxseSBoaWRpbmcgdGhlIGlucHV0cyB2aWEgYG9wYWNpdHlgIHdvdWxkIGxlYXZlIHRoZW0gY2xpY2thYmxlIGluXG4vLyBjZXJ0YWluIGNhc2VzIHdoaWNoIGlzIHByZXZlbnRlZCBieSB1c2luZyBgY2xpcGAgYW5kIGBwb2ludGVyLWV2ZW50c2AuXG4vLyBUaGlzIHdheSwgd2UgZW5zdXJlIGEgRE9NIGVsZW1lbnQgaXMgdmlzaWJsZSB0byBwb3NpdGlvbiB0aGUgcG9wb3ZlciBmcm9tLlxuLy9cbi8vIFNlZSBodHRwczovL2dpdGh1Yi5jb20vdHdicy9ib290c3RyYXAvcHVsbC8xMjc5NCBhbmRcbi8vIGh0dHBzOi8vZ2l0aHViLmNvbS90d2JzL2Jvb3RzdHJhcC9wdWxsLzE0NTU5IGZvciBtb3JlIGluZm9ybWF0aW9uLlxuXG4uYnRuLWdyb3VwLXRvZ2dsZSB7XG4gID4gLmJ0bixcbiAgPiAuYnRuLWdyb3VwID4gLmJ0biB7XG4gICAgbWFyZ2luLWJvdHRvbTogMDsgLy8gT3ZlcnJpZGUgZGVmYXVsdCBgPGxhYmVsPmAgdmFsdWVcblxuICAgIGlucHV0W3R5cGU9XCJyYWRpb1wiXSxcbiAgICBpbnB1dFt0eXBlPVwiY2hlY2tib3hcIl0ge1xuICAgICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgICAgY2xpcDogcmVjdCgwLCAwLCAwLCAwKTtcbiAgICAgIHBvaW50ZXItZXZlbnRzOiBub25lO1xuICAgIH1cbiAgfVxufVxuIiwiLy8gc3R5bGVsaW50LWRpc2FibGUgc2VsZWN0b3Itbm8tcXVhbGlmeWluZy10eXBlXG5cbi8vXG4vLyBCYXNlIHN0eWxlc1xuLy9cblxuLmlucHV0LWdyb3VwIHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICBkaXNwbGF5OiBmbGV4O1xuICBmbGV4LXdyYXA6IHdyYXA7IC8vIEZvciBmb3JtIHZhbGlkYXRpb24gZmVlZGJhY2tcbiAgYWxpZ24taXRlbXM6IHN0cmV0Y2g7XG4gIHdpZHRoOiAxMDAlO1xuXG4gID4gLmZvcm0tY29udHJvbCxcbiAgPiAuZm9ybS1jb250cm9sLXBsYWludGV4dCxcbiAgPiAuY3VzdG9tLXNlbGVjdCxcbiAgPiAuY3VzdG9tLWZpbGUge1xuICAgIHBvc2l0aW9uOiByZWxhdGl2ZTsgLy8gRm9yIGZvY3VzIHN0YXRlJ3Mgei1pbmRleFxuICAgIGZsZXg6IDEgMSBhdXRvO1xuICAgIHdpZHRoOiAxJTtcbiAgICBtaW4td2lkdGg6IDA7IC8vIGh0dHBzOi8vc3RhY2tvdmVyZmxvdy5jb20vcXVlc3Rpb25zLzM2MjQ3MTQwL3doeS1kb250LWZsZXgtaXRlbXMtc2hyaW5rLXBhc3QtY29udGVudC1zaXplXG4gICAgbWFyZ2luLWJvdHRvbTogMDtcblxuICAgICsgLmZvcm0tY29udHJvbCxcbiAgICArIC5jdXN0b20tc2VsZWN0LFxuICAgICsgLmN1c3RvbS1maWxlIHtcbiAgICAgIG1hcmdpbi1sZWZ0OiAtJGlucHV0LWJvcmRlci13aWR0aDtcbiAgICB9XG4gIH1cblxuICAvLyBCcmluZyB0aGUgXCJhY3RpdmVcIiBmb3JtIGNvbnRyb2wgdG8gdGhlIHRvcCBvZiBzdXJyb3VuZGluZyBlbGVtZW50c1xuICA+IC5mb3JtLWNvbnRyb2w6Zm9jdXMsXG4gID4gLmN1c3RvbS1zZWxlY3Q6Zm9jdXMsXG4gID4gLmN1c3RvbS1maWxlIC5jdXN0b20tZmlsZS1pbnB1dDpmb2N1cyB+IC5jdXN0b20tZmlsZS1sYWJlbCB7XG4gICAgei1pbmRleDogMztcbiAgfVxuXG4gIC8vIEJyaW5nIHRoZSBjdXN0b20gZmlsZSBpbnB1dCBhYm92ZSB0aGUgbGFiZWxcbiAgPiAuY3VzdG9tLWZpbGUgLmN1c3RvbS1maWxlLWlucHV0OmZvY3VzIHtcbiAgICB6LWluZGV4OiA0O1xuICB9XG5cbiAgPiAuZm9ybS1jb250cm9sLFxuICA+IC5jdXN0b20tc2VsZWN0IHtcbiAgICAmOm5vdCg6bGFzdC1jaGlsZCkgeyBAaW5jbHVkZSBib3JkZXItcmlnaHQtcmFkaXVzKDApOyB9XG4gICAgJjpub3QoOmZpcnN0LWNoaWxkKSB7IEBpbmNsdWRlIGJvcmRlci1sZWZ0LXJhZGl1cygwKTsgfVxuICB9XG5cbiAgLy8gQ3VzdG9tIGZpbGUgaW5wdXRzIGhhdmUgbW9yZSBjb21wbGV4IG1hcmt1cCwgdGh1cyByZXF1aXJpbmcgZGlmZmVyZW50XG4gIC8vIGJvcmRlci1yYWRpdXMgb3ZlcnJpZGVzLlxuICA+IC5jdXN0b20tZmlsZSB7XG4gICAgZGlzcGxheTogZmxleDtcbiAgICBhbGlnbi1pdGVtczogY2VudGVyO1xuXG4gICAgJjpub3QoOmxhc3QtY2hpbGQpIC5jdXN0b20tZmlsZS1sYWJlbCxcbiAgICAmOm5vdCg6bGFzdC1jaGlsZCkgLmN1c3RvbS1maWxlLWxhYmVsOjphZnRlciB7IEBpbmNsdWRlIGJvcmRlci1yaWdodC1yYWRpdXMoMCk7IH1cbiAgICAmOm5vdCg6Zmlyc3QtY2hpbGQpIC5jdXN0b20tZmlsZS1sYWJlbCB7IEBpbmNsdWRlIGJvcmRlci1sZWZ0LXJhZGl1cygwKTsgfVxuICB9XG59XG5cblxuLy8gUHJlcGVuZCBhbmQgYXBwZW5kXG4vL1xuLy8gV2hpbGUgaXQgcmVxdWlyZXMgb25lIGV4dHJhIGxheWVyIG9mIEhUTUwgZm9yIGVhY2gsIGRlZGljYXRlZCBwcmVwZW5kIGFuZFxuLy8gYXBwZW5kIGVsZW1lbnRzIGFsbG93IHVzIHRvIDEpIGJlIGxlc3MgY2xldmVyLCAyKSBzaW1wbGlmeSBvdXIgc2VsZWN0b3JzLCBhbmRcbi8vIDMpIHN1cHBvcnQgSFRNTDUgZm9ybSB2YWxpZGF0aW9uLlxuXG4uaW5wdXQtZ3JvdXAtcHJlcGVuZCxcbi5pbnB1dC1ncm91cC1hcHBlbmQge1xuICBkaXNwbGF5OiBmbGV4O1xuXG4gIC8vIEVuc3VyZSBidXR0b25zIGFyZSBhbHdheXMgYWJvdmUgaW5wdXRzIGZvciBtb3JlIHZpc3VhbGx5IHBsZWFzaW5nIGJvcmRlcnMuXG4gIC8vIFRoaXMgaXNuJ3QgbmVlZGVkIGZvciBgLmlucHV0LWdyb3VwLXRleHRgIHNpbmNlIGl0IHNoYXJlcyB0aGUgc2FtZSBib3JkZXItY29sb3JcbiAgLy8gYXMgb3VyIGlucHV0cy5cbiAgLmJ0biB7XG4gICAgcG9zaXRpb246IHJlbGF0aXZlO1xuICAgIHotaW5kZXg6IDI7XG5cbiAgICAmOmZvY3VzIHtcbiAgICAgIHotaW5kZXg6IDM7XG4gICAgfVxuICB9XG5cbiAgLmJ0biArIC5idG4sXG4gIC5idG4gKyAuaW5wdXQtZ3JvdXAtdGV4dCxcbiAgLmlucHV0LWdyb3VwLXRleHQgKyAuaW5wdXQtZ3JvdXAtdGV4dCxcbiAgLmlucHV0LWdyb3VwLXRleHQgKyAuYnRuIHtcbiAgICBtYXJnaW4tbGVmdDogLSRpbnB1dC1ib3JkZXItd2lkdGg7XG4gIH1cbn1cblxuLmlucHV0LWdyb3VwLXByZXBlbmQgeyBtYXJnaW4tcmlnaHQ6IC0kaW5wdXQtYm9yZGVyLXdpZHRoOyB9XG4uaW5wdXQtZ3JvdXAtYXBwZW5kIHsgbWFyZ2luLWxlZnQ6IC0kaW5wdXQtYm9yZGVyLXdpZHRoOyB9XG5cblxuLy8gVGV4dHVhbCBhZGRvbnNcbi8vXG4vLyBTZXJ2ZXMgYXMgYSBjYXRjaC1hbGwgZWxlbWVudCBmb3IgYW55IHRleHQgb3IgcmFkaW8vY2hlY2tib3ggaW5wdXQgeW91IHdpc2hcbi8vIHRvIHByZXBlbmQgb3IgYXBwZW5kIHRvIGFuIGlucHV0LlxuXG4uaW5wdXQtZ3JvdXAtdGV4dCB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gIHBhZGRpbmc6ICRpbnB1dC1wYWRkaW5nLXkgJGlucHV0LXBhZGRpbmcteDtcbiAgbWFyZ2luLWJvdHRvbTogMDsgLy8gQWxsb3cgdXNlIG9mIDxsYWJlbD4gZWxlbWVudHMgYnkgb3ZlcnJpZGluZyBvdXIgZGVmYXVsdCBtYXJnaW4tYm90dG9tXG4gIEBpbmNsdWRlIGZvbnQtc2l6ZSgkaW5wdXQtZm9udC1zaXplKTsgLy8gTWF0Y2ggaW5wdXRzXG4gIGZvbnQtd2VpZ2h0OiAkZm9udC13ZWlnaHQtbm9ybWFsO1xuICBsaW5lLWhlaWdodDogJGlucHV0LWxpbmUtaGVpZ2h0O1xuICBjb2xvcjogJGlucHV0LWdyb3VwLWFkZG9uLWNvbG9yO1xuICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gIHdoaXRlLXNwYWNlOiBub3dyYXA7XG4gIGJhY2tncm91bmQtY29sb3I6ICRpbnB1dC1ncm91cC1hZGRvbi1iZztcbiAgYm9yZGVyOiAkaW5wdXQtYm9yZGVyLXdpZHRoIHNvbGlkICRpbnB1dC1ncm91cC1hZGRvbi1ib3JkZXItY29sb3I7XG4gIEBpbmNsdWRlIGJvcmRlci1yYWRpdXMoJGlucHV0LWJvcmRlci1yYWRpdXMpO1xuXG4gIC8vIE51a2UgZGVmYXVsdCBtYXJnaW5zIGZyb20gY2hlY2tib3hlcyBhbmQgcmFkaW9zIHRvIHZlcnRpY2FsbHkgY2VudGVyIHdpdGhpbi5cbiAgaW5wdXRbdHlwZT1cInJhZGlvXCJdLFxuICBpbnB1dFt0eXBlPVwiY2hlY2tib3hcIl0ge1xuICAgIG1hcmdpbi10b3A6IDA7XG4gIH1cbn1cblxuXG4vLyBTaXppbmdcbi8vXG4vLyBSZW1peCB0aGUgZGVmYXVsdCBmb3JtIGNvbnRyb2wgc2l6aW5nIGNsYXNzZXMgaW50byBuZXcgb25lcyBmb3IgZWFzaWVyXG4vLyBtYW5pcHVsYXRpb24uXG5cbi5pbnB1dC1ncm91cC1sZyA+IC5mb3JtLWNvbnRyb2w6bm90KHRleHRhcmVhKSxcbi5pbnB1dC1ncm91cC1sZyA+IC5jdXN0b20tc2VsZWN0IHtcbiAgaGVpZ2h0OiAkaW5wdXQtaGVpZ2h0LWxnO1xufVxuXG4uaW5wdXQtZ3JvdXAtbGcgPiAuZm9ybS1jb250cm9sLFxuLmlucHV0LWdyb3VwLWxnID4gLmN1c3RvbS1zZWxlY3QsXG4uaW5wdXQtZ3JvdXAtbGcgPiAuaW5wdXQtZ3JvdXAtcHJlcGVuZCA+IC5pbnB1dC1ncm91cC10ZXh0LFxuLmlucHV0LWdyb3VwLWxnID4gLmlucHV0LWdyb3VwLWFwcGVuZCA+IC5pbnB1dC1ncm91cC10ZXh0LFxuLmlucHV0LWdyb3VwLWxnID4gLmlucHV0LWdyb3VwLXByZXBlbmQgPiAuYnRuLFxuLmlucHV0LWdyb3VwLWxnID4gLmlucHV0LWdyb3VwLWFwcGVuZCA+IC5idG4ge1xuICBwYWRkaW5nOiAkaW5wdXQtcGFkZGluZy15LWxnICRpbnB1dC1wYWRkaW5nLXgtbGc7XG4gIEBpbmNsdWRlIGZvbnQtc2l6ZSgkaW5wdXQtZm9udC1zaXplLWxnKTtcbiAgbGluZS1oZWlnaHQ6ICRpbnB1dC1saW5lLWhlaWdodC1sZztcbiAgQGluY2x1ZGUgYm9yZGVyLXJhZGl1cygkaW5wdXQtYm9yZGVyLXJhZGl1cy1sZyk7XG59XG5cbi5pbnB1dC1ncm91cC1zbSA+IC5mb3JtLWNvbnRyb2w6bm90KHRleHRhcmVhKSxcbi5pbnB1dC1ncm91cC1zbSA+IC5jdXN0b20tc2VsZWN0IHtcbiAgaGVpZ2h0OiAkaW5wdXQtaGVpZ2h0LXNtO1xufVxuXG4uaW5wdXQtZ3JvdXAtc20gPiAuZm9ybS1jb250cm9sLFxuLmlucHV0LWdyb3VwLXNtID4gLmN1c3RvbS1zZWxlY3QsXG4uaW5wdXQtZ3JvdXAtc20gPiAuaW5wdXQtZ3JvdXAtcHJlcGVuZCA+IC5pbnB1dC1ncm91cC10ZXh0LFxuLmlucHV0LWdyb3VwLXNtID4gLmlucHV0LWdyb3VwLWFwcGVuZCA+IC5pbnB1dC1ncm91cC10ZXh0LFxuLmlucHV0LWdyb3VwLXNtID4gLmlucHV0LWdyb3VwLXByZXBlbmQgPiAuYnRuLFxuLmlucHV0LWdyb3VwLXNtID4gLmlucHV0LWdyb3VwLWFwcGVuZCA+IC5idG4ge1xuICBwYWRkaW5nOiAkaW5wdXQtcGFkZGluZy15LXNtICRpbnB1dC1wYWRkaW5nLXgtc207XG4gIEBpbmNsdWRlIGZvbnQtc2l6ZSgkaW5wdXQtZm9udC1zaXplLXNtKTtcbiAgbGluZS1oZWlnaHQ6ICRpbnB1dC1saW5lLWhlaWdodC1zbTtcbiAgQGluY2x1ZGUgYm9yZGVyLXJhZGl1cygkaW5wdXQtYm9yZGVyLXJhZGl1cy1zbSk7XG59XG5cbi5pbnB1dC1ncm91cC1sZyA+IC5jdXN0b20tc2VsZWN0LFxuLmlucHV0LWdyb3VwLXNtID4gLmN1c3RvbS1zZWxlY3Qge1xuICBwYWRkaW5nLXJpZ2h0OiAkY3VzdG9tLXNlbGVjdC1wYWRkaW5nLXggKyAkY3VzdG9tLXNlbGVjdC1pbmRpY2F0b3ItcGFkZGluZztcbn1cblxuXG4vLyBQcmVwZW5kIGFuZCBhcHBlbmQgcm91bmRlZCBjb3JuZXJzXG4vL1xuLy8gVGhlc2UgcnVsZXNldHMgbXVzdCBjb21lIGFmdGVyIHRoZSBzaXppbmcgb25lcyB0byBwcm9wZXJseSBvdmVycmlkZSBzbSBhbmQgbGdcbi8vIGJvcmRlci1yYWRpdXMgdmFsdWVzIHdoZW4gZXh0ZW5kaW5nLiBUaGV5J3JlIG1vcmUgc3BlY2lmaWMgdGhhbiB3ZSdkIGxpa2Vcbi8vIHdpdGggdGhlIGAuaW5wdXQtZ3JvdXAgPmAgcGFydCwgYnV0IHdpdGhvdXQgaXQsIHdlIGNhbm5vdCBvdmVycmlkZSB0aGUgc2l6aW5nLlxuXG5cbi5pbnB1dC1ncm91cCA+IC5pbnB1dC1ncm91cC1wcmVwZW5kID4gLmJ0bixcbi5pbnB1dC1ncm91cCA+IC5pbnB1dC1ncm91cC1wcmVwZW5kID4gLmlucHV0LWdyb3VwLXRleHQsXG4uaW5wdXQtZ3JvdXAgPiAuaW5wdXQtZ3JvdXAtYXBwZW5kOm5vdCg6bGFzdC1jaGlsZCkgPiAuYnRuLFxuLmlucHV0LWdyb3VwID4gLmlucHV0LWdyb3VwLWFwcGVuZDpub3QoOmxhc3QtY2hpbGQpID4gLmlucHV0LWdyb3VwLXRleHQsXG4uaW5wdXQtZ3JvdXAgPiAuaW5wdXQtZ3JvdXAtYXBwZW5kOmxhc3QtY2hpbGQgPiAuYnRuOm5vdCg6bGFzdC1jaGlsZCk6bm90KC5kcm9wZG93bi10b2dnbGUpLFxuLmlucHV0LWdyb3VwID4gLmlucHV0LWdyb3VwLWFwcGVuZDpsYXN0LWNoaWxkID4gLmlucHV0LWdyb3VwLXRleHQ6bm90KDpsYXN0LWNoaWxkKSB7XG4gIEBpbmNsdWRlIGJvcmRlci1yaWdodC1yYWRpdXMoMCk7XG59XG5cbi5pbnB1dC1ncm91cCA+IC5pbnB1dC1ncm91cC1hcHBlbmQgPiAuYnRuLFxuLmlucHV0LWdyb3VwID4gLmlucHV0LWdyb3VwLWFwcGVuZCA+IC5pbnB1dC1ncm91cC10ZXh0LFxuLmlucHV0LWdyb3VwID4gLmlucHV0LWdyb3VwLXByZXBlbmQ6bm90KDpmaXJzdC1jaGlsZCkgPiAuYnRuLFxuLmlucHV0LWdyb3VwID4gLmlucHV0LWdyb3VwLXByZXBlbmQ6bm90KDpmaXJzdC1jaGlsZCkgPiAuaW5wdXQtZ3JvdXAtdGV4dCxcbi5pbnB1dC1ncm91cCA+IC5pbnB1dC1ncm91cC1wcmVwZW5kOmZpcnN0LWNoaWxkID4gLmJ0bjpub3QoOmZpcnN0LWNoaWxkKSxcbi5pbnB1dC1ncm91cCA+IC5pbnB1dC1ncm91cC1wcmVwZW5kOmZpcnN0LWNoaWxkID4gLmlucHV0LWdyb3VwLXRleHQ6bm90KDpmaXJzdC1jaGlsZCkge1xuICBAaW5jbHVkZSBib3JkZXItbGVmdC1yYWRpdXMoMCk7XG59XG4iLCIvLyBFbWJlZGRlZCBpY29ucyBmcm9tIE9wZW4gSWNvbmljLlxuLy8gUmVsZWFzZWQgdW5kZXIgTUlUIGFuZCBjb3B5cmlnaHQgMjAxNCBXYXlidXJ5LlxuLy8gaHR0cHM6Ly91c2VpY29uaWMuY29tL29wZW5cblxuXG4vLyBDaGVja2JveGVzIGFuZCByYWRpb3Ncbi8vXG4vLyBCYXNlIGNsYXNzIHRha2VzIGNhcmUgb2YgYWxsIHRoZSBrZXkgYmVoYXZpb3JhbCBhc3BlY3RzLlxuXG4uY3VzdG9tLWNvbnRyb2wge1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIGRpc3BsYXk6IGJsb2NrO1xuICBtaW4taGVpZ2h0OiAkZm9udC1zaXplLWJhc2UgKiAkbGluZS1oZWlnaHQtYmFzZTtcbiAgcGFkZGluZy1sZWZ0OiAkY3VzdG9tLWNvbnRyb2wtZ3V0dGVyICsgJGN1c3RvbS1jb250cm9sLWluZGljYXRvci1zaXplO1xufVxuXG4uY3VzdG9tLWNvbnRyb2wtaW5saW5lIHtcbiAgZGlzcGxheTogaW5saW5lLWZsZXg7XG4gIG1hcmdpbi1yaWdodDogJGN1c3RvbS1jb250cm9sLXNwYWNlci14O1xufVxuXG4uY3VzdG9tLWNvbnRyb2wtaW5wdXQge1xuICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gIGxlZnQ6IDA7XG4gIHotaW5kZXg6IC0xOyAvLyBQdXQgdGhlIGlucHV0IGJlaGluZCB0aGUgbGFiZWwgc28gaXQgZG9lc24ndCBvdmVybGF5IHRleHRcbiAgd2lkdGg6ICRjdXN0b20tY29udHJvbC1pbmRpY2F0b3Itc2l6ZTtcbiAgaGVpZ2h0OiAoJGZvbnQtc2l6ZS1iYXNlICogJGxpbmUtaGVpZ2h0LWJhc2UgKyAkY3VzdG9tLWNvbnRyb2wtaW5kaWNhdG9yLXNpemUpIC8gMjtcbiAgb3BhY2l0eTogMDtcblxuICAmOmNoZWNrZWQgfiAuY3VzdG9tLWNvbnRyb2wtbGFiZWw6OmJlZm9yZSB7XG4gICAgY29sb3I6ICRjdXN0b20tY29udHJvbC1pbmRpY2F0b3ItY2hlY2tlZC1jb2xvcjtcbiAgICBib3JkZXItY29sb3I6ICRjdXN0b20tY29udHJvbC1pbmRpY2F0b3ItY2hlY2tlZC1ib3JkZXItY29sb3I7XG4gICAgQGluY2x1ZGUgZ3JhZGllbnQtYmcoJGN1c3RvbS1jb250cm9sLWluZGljYXRvci1jaGVja2VkLWJnKTtcbiAgICBAaW5jbHVkZSBib3gtc2hhZG93KCRjdXN0b20tY29udHJvbC1pbmRpY2F0b3ItY2hlY2tlZC1ib3gtc2hhZG93KTtcbiAgfVxuXG4gICY6Zm9jdXMgfiAuY3VzdG9tLWNvbnRyb2wtbGFiZWw6OmJlZm9yZSB7XG4gICAgLy8gdGhlIG1peGluIGlzIG5vdCB1c2VkIGhlcmUgdG8gbWFrZSBzdXJlIHRoZXJlIGlzIGZlZWRiYWNrXG4gICAgQGlmICRlbmFibGUtc2hhZG93cyB7XG4gICAgICBib3gtc2hhZG93OiAkaW5wdXQtYm94LXNoYWRvdywgJGlucHV0LWZvY3VzLWJveC1zaGFkb3c7XG4gICAgfSBAZWxzZSB7XG4gICAgICBib3gtc2hhZG93OiAkY3VzdG9tLWNvbnRyb2wtaW5kaWNhdG9yLWZvY3VzLWJveC1zaGFkb3c7XG4gICAgfVxuICB9XG5cbiAgJjpmb2N1czpub3QoOmNoZWNrZWQpIH4gLmN1c3RvbS1jb250cm9sLWxhYmVsOjpiZWZvcmUge1xuICAgIGJvcmRlci1jb2xvcjogJGN1c3RvbS1jb250cm9sLWluZGljYXRvci1mb2N1cy1ib3JkZXItY29sb3I7XG4gIH1cblxuICAmOm5vdCg6ZGlzYWJsZWQpOmFjdGl2ZSB+IC5jdXN0b20tY29udHJvbC1sYWJlbDo6YmVmb3JlIHtcbiAgICBjb2xvcjogJGN1c3RvbS1jb250cm9sLWluZGljYXRvci1hY3RpdmUtY29sb3I7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogJGN1c3RvbS1jb250cm9sLWluZGljYXRvci1hY3RpdmUtYmc7XG4gICAgYm9yZGVyLWNvbG9yOiAkY3VzdG9tLWNvbnRyb2wtaW5kaWNhdG9yLWFjdGl2ZS1ib3JkZXItY29sb3I7XG4gICAgQGluY2x1ZGUgYm94LXNoYWRvdygkY3VzdG9tLWNvbnRyb2wtaW5kaWNhdG9yLWFjdGl2ZS1ib3gtc2hhZG93KTtcbiAgfVxuXG4gIC8vIFVzZSBbZGlzYWJsZWRdIGFuZCA6ZGlzYWJsZWQgdG8gd29yayBhcm91bmQgaHR0cHM6Ly9naXRodWIuY29tL3R3YnMvYm9vdHN0cmFwL2lzc3Vlcy8yODI0N1xuICAmW2Rpc2FibGVkXSxcbiAgJjpkaXNhYmxlZCB7XG4gICAgfiAuY3VzdG9tLWNvbnRyb2wtbGFiZWwge1xuICAgICAgY29sb3I6ICRjdXN0b20tY29udHJvbC1sYWJlbC1kaXNhYmxlZC1jb2xvcjtcblxuICAgICAgJjo6YmVmb3JlIHtcbiAgICAgICAgYmFja2dyb3VuZC1jb2xvcjogJGN1c3RvbS1jb250cm9sLWluZGljYXRvci1kaXNhYmxlZC1iZztcbiAgICAgIH1cbiAgICB9XG4gIH1cbn1cblxuLy8gQ3VzdG9tIGNvbnRyb2wgaW5kaWNhdG9yc1xuLy9cbi8vIEJ1aWxkIHRoZSBjdXN0b20gY29udHJvbHMgb3V0IG9mIHBzZXVkby1lbGVtZW50cy5cblxuLmN1c3RvbS1jb250cm9sLWxhYmVsIHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICBtYXJnaW4tYm90dG9tOiAwO1xuICBjb2xvcjogJGN1c3RvbS1jb250cm9sLWxhYmVsLWNvbG9yO1xuICB2ZXJ0aWNhbC1hbGlnbjogdG9wO1xuICBjdXJzb3I6ICRjdXN0b20tY29udHJvbC1jdXJzb3I7XG5cbiAgLy8gQmFja2dyb3VuZC1jb2xvciBhbmQgKHdoZW4gZW5hYmxlZCkgZ3JhZGllbnRcbiAgJjo6YmVmb3JlIHtcbiAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgdG9wOiAoJGZvbnQtc2l6ZS1iYXNlICogJGxpbmUtaGVpZ2h0LWJhc2UgLSAkY3VzdG9tLWNvbnRyb2wtaW5kaWNhdG9yLXNpemUpIC8gMjtcbiAgICBsZWZ0OiAtKCRjdXN0b20tY29udHJvbC1ndXR0ZXIgKyAkY3VzdG9tLWNvbnRyb2wtaW5kaWNhdG9yLXNpemUpO1xuICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgIHdpZHRoOiAkY3VzdG9tLWNvbnRyb2wtaW5kaWNhdG9yLXNpemU7XG4gICAgaGVpZ2h0OiAkY3VzdG9tLWNvbnRyb2wtaW5kaWNhdG9yLXNpemU7XG4gICAgcG9pbnRlci1ldmVudHM6IG5vbmU7XG4gICAgY29udGVudDogXCJcIjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkY3VzdG9tLWNvbnRyb2wtaW5kaWNhdG9yLWJnO1xuICAgIGJvcmRlcjogJGN1c3RvbS1jb250cm9sLWluZGljYXRvci1ib3JkZXItY29sb3Igc29saWQgJGN1c3RvbS1jb250cm9sLWluZGljYXRvci1ib3JkZXItd2lkdGg7XG4gICAgQGluY2x1ZGUgYm94LXNoYWRvdygkY3VzdG9tLWNvbnRyb2wtaW5kaWNhdG9yLWJveC1zaGFkb3cpO1xuICB9XG5cbiAgLy8gRm9yZWdyb3VuZCAoaWNvbilcbiAgJjo6YWZ0ZXIge1xuICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICB0b3A6ICgkZm9udC1zaXplLWJhc2UgKiAkbGluZS1oZWlnaHQtYmFzZSAtICRjdXN0b20tY29udHJvbC1pbmRpY2F0b3Itc2l6ZSkgLyAyO1xuICAgIGxlZnQ6IC0oJGN1c3RvbS1jb250cm9sLWd1dHRlciArICRjdXN0b20tY29udHJvbC1pbmRpY2F0b3Itc2l6ZSk7XG4gICAgZGlzcGxheTogYmxvY2s7XG4gICAgd2lkdGg6ICRjdXN0b20tY29udHJvbC1pbmRpY2F0b3Itc2l6ZTtcbiAgICBoZWlnaHQ6ICRjdXN0b20tY29udHJvbC1pbmRpY2F0b3Itc2l6ZTtcbiAgICBjb250ZW50OiBcIlwiO1xuICAgIGJhY2tncm91bmQ6IG5vLXJlcGVhdCA1MCUgLyAjeyRjdXN0b20tY29udHJvbC1pbmRpY2F0b3ItYmctc2l6ZX07XG4gIH1cbn1cblxuXG4vLyBDaGVja2JveGVzXG4vL1xuLy8gVHdlYWsganVzdCBhIGZldyB0aGluZ3MgZm9yIGNoZWNrYm94ZXMuXG5cbi5jdXN0b20tY2hlY2tib3gge1xuICAuY3VzdG9tLWNvbnRyb2wtbGFiZWw6OmJlZm9yZSB7XG4gICAgQGluY2x1ZGUgYm9yZGVyLXJhZGl1cygkY3VzdG9tLWNoZWNrYm94LWluZGljYXRvci1ib3JkZXItcmFkaXVzKTtcbiAgfVxuXG4gIC5jdXN0b20tY29udHJvbC1pbnB1dDpjaGVja2VkIH4gLmN1c3RvbS1jb250cm9sLWxhYmVsIHtcbiAgICAmOjphZnRlciB7XG4gICAgICBiYWNrZ3JvdW5kLWltYWdlOiBlc2NhcGUtc3ZnKCRjdXN0b20tY2hlY2tib3gtaW5kaWNhdG9yLWljb24tY2hlY2tlZCk7XG4gICAgfVxuICB9XG5cbiAgLmN1c3RvbS1jb250cm9sLWlucHV0OmluZGV0ZXJtaW5hdGUgfiAuY3VzdG9tLWNvbnRyb2wtbGFiZWwge1xuICAgICY6OmJlZm9yZSB7XG4gICAgICBib3JkZXItY29sb3I6ICRjdXN0b20tY2hlY2tib3gtaW5kaWNhdG9yLWluZGV0ZXJtaW5hdGUtYm9yZGVyLWNvbG9yO1xuICAgICAgQGluY2x1ZGUgZ3JhZGllbnQtYmcoJGN1c3RvbS1jaGVja2JveC1pbmRpY2F0b3ItaW5kZXRlcm1pbmF0ZS1iZyk7XG4gICAgICBAaW5jbHVkZSBib3gtc2hhZG93KCRjdXN0b20tY2hlY2tib3gtaW5kaWNhdG9yLWluZGV0ZXJtaW5hdGUtYm94LXNoYWRvdyk7XG4gICAgfVxuICAgICY6OmFmdGVyIHtcbiAgICAgIGJhY2tncm91bmQtaW1hZ2U6IGVzY2FwZS1zdmcoJGN1c3RvbS1jaGVja2JveC1pbmRpY2F0b3ItaWNvbi1pbmRldGVybWluYXRlKTtcbiAgICB9XG4gIH1cblxuICAuY3VzdG9tLWNvbnRyb2wtaW5wdXQ6ZGlzYWJsZWQge1xuICAgICY6Y2hlY2tlZCB+IC5jdXN0b20tY29udHJvbC1sYWJlbDo6YmVmb3JlIHtcbiAgICAgIGJhY2tncm91bmQtY29sb3I6ICRjdXN0b20tY29udHJvbC1pbmRpY2F0b3ItY2hlY2tlZC1kaXNhYmxlZC1iZztcbiAgICB9XG4gICAgJjppbmRldGVybWluYXRlIH4gLmN1c3RvbS1jb250cm9sLWxhYmVsOjpiZWZvcmUge1xuICAgICAgYmFja2dyb3VuZC1jb2xvcjogJGN1c3RvbS1jb250cm9sLWluZGljYXRvci1jaGVja2VkLWRpc2FibGVkLWJnO1xuICAgIH1cbiAgfVxufVxuXG4vLyBSYWRpb3Ncbi8vXG4vLyBUd2VhayBqdXN0IGEgZmV3IHRoaW5ncyBmb3IgcmFkaW9zLlxuXG4uY3VzdG9tLXJhZGlvIHtcbiAgLmN1c3RvbS1jb250cm9sLWxhYmVsOjpiZWZvcmUge1xuICAgIC8vIHN0eWxlbGludC1kaXNhYmxlLW5leHQtbGluZSBwcm9wZXJ0eS1ibGFja2xpc3RcbiAgICBib3JkZXItcmFkaXVzOiAkY3VzdG9tLXJhZGlvLWluZGljYXRvci1ib3JkZXItcmFkaXVzO1xuICB9XG5cbiAgLmN1c3RvbS1jb250cm9sLWlucHV0OmNoZWNrZWQgfiAuY3VzdG9tLWNvbnRyb2wtbGFiZWwge1xuICAgICY6OmFmdGVyIHtcbiAgICAgIGJhY2tncm91bmQtaW1hZ2U6IGVzY2FwZS1zdmcoJGN1c3RvbS1yYWRpby1pbmRpY2F0b3ItaWNvbi1jaGVja2VkKTtcbiAgICB9XG4gIH1cblxuICAuY3VzdG9tLWNvbnRyb2wtaW5wdXQ6ZGlzYWJsZWQge1xuICAgICY6Y2hlY2tlZCB+IC5jdXN0b20tY29udHJvbC1sYWJlbDo6YmVmb3JlIHtcbiAgICAgIGJhY2tncm91bmQtY29sb3I6ICRjdXN0b20tY29udHJvbC1pbmRpY2F0b3ItY2hlY2tlZC1kaXNhYmxlZC1iZztcbiAgICB9XG4gIH1cbn1cblxuXG4vLyBzd2l0Y2hlc1xuLy9cbi8vIFR3ZWFrIGEgZmV3IHRoaW5ncyBmb3Igc3dpdGNoZXNcblxuLmN1c3RvbS1zd2l0Y2gge1xuICBwYWRkaW5nLWxlZnQ6ICRjdXN0b20tc3dpdGNoLXdpZHRoICsgJGN1c3RvbS1jb250cm9sLWd1dHRlcjtcblxuICAuY3VzdG9tLWNvbnRyb2wtbGFiZWwge1xuICAgICY6OmJlZm9yZSB7XG4gICAgICBsZWZ0OiAtKCRjdXN0b20tc3dpdGNoLXdpZHRoICsgJGN1c3RvbS1jb250cm9sLWd1dHRlcik7XG4gICAgICB3aWR0aDogJGN1c3RvbS1zd2l0Y2gtd2lkdGg7XG4gICAgICBwb2ludGVyLWV2ZW50czogYWxsO1xuICAgICAgLy8gc3R5bGVsaW50LWRpc2FibGUtbmV4dC1saW5lIHByb3BlcnR5LWJsYWNrbGlzdFxuICAgICAgYm9yZGVyLXJhZGl1czogJGN1c3RvbS1zd2l0Y2gtaW5kaWNhdG9yLWJvcmRlci1yYWRpdXM7XG4gICAgfVxuXG4gICAgJjo6YWZ0ZXIge1xuICAgICAgdG9wOiBhZGQoKCRmb250LXNpemUtYmFzZSAqICRsaW5lLWhlaWdodC1iYXNlIC0gJGN1c3RvbS1jb250cm9sLWluZGljYXRvci1zaXplKSAvIDIsICRjdXN0b20tY29udHJvbC1pbmRpY2F0b3ItYm9yZGVyLXdpZHRoICogMik7XG4gICAgICBsZWZ0OiBhZGQoLSgkY3VzdG9tLXN3aXRjaC13aWR0aCArICRjdXN0b20tY29udHJvbC1ndXR0ZXIpLCAkY3VzdG9tLWNvbnRyb2wtaW5kaWNhdG9yLWJvcmRlci13aWR0aCAqIDIpO1xuICAgICAgd2lkdGg6ICRjdXN0b20tc3dpdGNoLWluZGljYXRvci1zaXplO1xuICAgICAgaGVpZ2h0OiAkY3VzdG9tLXN3aXRjaC1pbmRpY2F0b3Itc2l6ZTtcbiAgICAgIGJhY2tncm91bmQtY29sb3I6ICRjdXN0b20tY29udHJvbC1pbmRpY2F0b3ItYm9yZGVyLWNvbG9yO1xuICAgICAgLy8gc3R5bGVsaW50LWRpc2FibGUtbmV4dC1saW5lIHByb3BlcnR5LWJsYWNrbGlzdFxuICAgICAgYm9yZGVyLXJhZGl1czogJGN1c3RvbS1zd2l0Y2gtaW5kaWNhdG9yLWJvcmRlci1yYWRpdXM7XG4gICAgICBAaW5jbHVkZSB0cmFuc2l0aW9uKHRyYW5zZm9ybSAuMTVzIGVhc2UtaW4tb3V0LCAkY3VzdG9tLWZvcm1zLXRyYW5zaXRpb24pO1xuICAgIH1cbiAgfVxuXG4gIC5jdXN0b20tY29udHJvbC1pbnB1dDpjaGVja2VkIH4gLmN1c3RvbS1jb250cm9sLWxhYmVsIHtcbiAgICAmOjphZnRlciB7XG4gICAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkY3VzdG9tLWNvbnRyb2wtaW5kaWNhdG9yLWJnO1xuICAgICAgdHJhbnNmb3JtOiB0cmFuc2xhdGVYKCRjdXN0b20tc3dpdGNoLXdpZHRoIC0gJGN1c3RvbS1jb250cm9sLWluZGljYXRvci1zaXplKTtcbiAgICB9XG4gIH1cblxuICAuY3VzdG9tLWNvbnRyb2wtaW5wdXQ6ZGlzYWJsZWQge1xuICAgICY6Y2hlY2tlZCB+IC5jdXN0b20tY29udHJvbC1sYWJlbDo6YmVmb3JlIHtcbiAgICAgIGJhY2tncm91bmQtY29sb3I6ICRjdXN0b20tY29udHJvbC1pbmRpY2F0b3ItY2hlY2tlZC1kaXNhYmxlZC1iZztcbiAgICB9XG4gIH1cbn1cblxuXG4vLyBTZWxlY3Rcbi8vXG4vLyBSZXBsYWNlcyB0aGUgYnJvd3NlciBkZWZhdWx0IHNlbGVjdCB3aXRoIGEgY3VzdG9tIG9uZSwgbW9zdGx5IHB1bGxlZCBmcm9tXG4vLyBodHRwczovL3ByaW1lci5naXRodWIuaW8vLlxuLy9cblxuLmN1c3RvbS1zZWxlY3Qge1xuICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gIHdpZHRoOiAxMDAlO1xuICBoZWlnaHQ6ICRjdXN0b20tc2VsZWN0LWhlaWdodDtcbiAgcGFkZGluZzogJGN1c3RvbS1zZWxlY3QtcGFkZGluZy15ICgkY3VzdG9tLXNlbGVjdC1wYWRkaW5nLXggKyAkY3VzdG9tLXNlbGVjdC1pbmRpY2F0b3ItcGFkZGluZykgJGN1c3RvbS1zZWxlY3QtcGFkZGluZy15ICRjdXN0b20tc2VsZWN0LXBhZGRpbmcteDtcbiAgZm9udC1mYW1pbHk6ICRjdXN0b20tc2VsZWN0LWZvbnQtZmFtaWx5O1xuICBAaW5jbHVkZSBmb250LXNpemUoJGN1c3RvbS1zZWxlY3QtZm9udC1zaXplKTtcbiAgZm9udC13ZWlnaHQ6ICRjdXN0b20tc2VsZWN0LWZvbnQtd2VpZ2h0O1xuICBsaW5lLWhlaWdodDogJGN1c3RvbS1zZWxlY3QtbGluZS1oZWlnaHQ7XG4gIGNvbG9yOiAkY3VzdG9tLXNlbGVjdC1jb2xvcjtcbiAgdmVydGljYWwtYWxpZ246IG1pZGRsZTtcbiAgYmFja2dyb3VuZDogJGN1c3RvbS1zZWxlY3QtYmcgJGN1c3RvbS1zZWxlY3QtYmFja2dyb3VuZDtcbiAgYm9yZGVyOiAkY3VzdG9tLXNlbGVjdC1ib3JkZXItd2lkdGggc29saWQgJGN1c3RvbS1zZWxlY3QtYm9yZGVyLWNvbG9yO1xuICBAaW5jbHVkZSBib3JkZXItcmFkaXVzKCRjdXN0b20tc2VsZWN0LWJvcmRlci1yYWRpdXMsIDApO1xuICBAaW5jbHVkZSBib3gtc2hhZG93KCRjdXN0b20tc2VsZWN0LWJveC1zaGFkb3cpO1xuICBhcHBlYXJhbmNlOiBub25lO1xuXG4gICY6Zm9jdXMge1xuICAgIGJvcmRlci1jb2xvcjogJGN1c3RvbS1zZWxlY3QtZm9jdXMtYm9yZGVyLWNvbG9yO1xuICAgIG91dGxpbmU6IDA7XG4gICAgQGlmICRlbmFibGUtc2hhZG93cyB7XG4gICAgICBAaW5jbHVkZSBib3gtc2hhZG93KCRjdXN0b20tc2VsZWN0LWJveC1zaGFkb3csICRjdXN0b20tc2VsZWN0LWZvY3VzLWJveC1zaGFkb3cpO1xuICAgIH0gQGVsc2Uge1xuICAgICAgLy8gQXZvaWQgdXNpbmcgbWl4aW4gc28gd2UgY2FuIHBhc3MgY3VzdG9tIGZvY3VzIHNoYWRvdyBwcm9wZXJseVxuICAgICAgYm94LXNoYWRvdzogJGN1c3RvbS1zZWxlY3QtZm9jdXMtYm94LXNoYWRvdztcbiAgICB9XG5cbiAgICAmOjotbXMtdmFsdWUge1xuICAgICAgLy8gRm9yIHZpc3VhbCBjb25zaXN0ZW5jeSB3aXRoIG90aGVyIHBsYXRmb3Jtcy9icm93c2VycyxcbiAgICAgIC8vIHN1cHByZXNzIHRoZSBkZWZhdWx0IHdoaXRlIHRleHQgb24gYmx1ZSBiYWNrZ3JvdW5kIGhpZ2hsaWdodCBnaXZlbiB0b1xuICAgICAgLy8gdGhlIHNlbGVjdGVkIG9wdGlvbiB0ZXh0IHdoZW4gdGhlIChzdGlsbCBjbG9zZWQpIDxzZWxlY3Q+IHJlY2VpdmVzIGZvY3VzXG4gICAgICAvLyBpbiBJRSBhbmQgKHVuZGVyIGNlcnRhaW4gY29uZGl0aW9ucykgRWRnZS5cbiAgICAgIC8vIFNlZSBodHRwczovL2dpdGh1Yi5jb20vdHdicy9ib290c3RyYXAvaXNzdWVzLzE5Mzk4LlxuICAgICAgY29sb3I6ICRpbnB1dC1jb2xvcjtcbiAgICAgIGJhY2tncm91bmQtY29sb3I6ICRpbnB1dC1iZztcbiAgICB9XG4gIH1cblxuICAmW211bHRpcGxlXSxcbiAgJltzaXplXTpub3QoW3NpemU9XCIxXCJdKSB7XG4gICAgaGVpZ2h0OiBhdXRvO1xuICAgIHBhZGRpbmctcmlnaHQ6ICRjdXN0b20tc2VsZWN0LXBhZGRpbmcteDtcbiAgICBiYWNrZ3JvdW5kLWltYWdlOiBub25lO1xuICB9XG5cbiAgJjpkaXNhYmxlZCB7XG4gICAgY29sb3I6ICRjdXN0b20tc2VsZWN0LWRpc2FibGVkLWNvbG9yO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICRjdXN0b20tc2VsZWN0LWRpc2FibGVkLWJnO1xuICB9XG5cbiAgLy8gSGlkZXMgdGhlIGRlZmF1bHQgY2FyZXQgaW4gSUUxMVxuICAmOjotbXMtZXhwYW5kIHtcbiAgICBkaXNwbGF5OiBub25lO1xuICB9XG5cbiAgLy8gUmVtb3ZlIG91dGxpbmUgZnJvbSBzZWxlY3QgYm94IGluIEZGXG4gICY6LW1vei1mb2N1c3Jpbmcge1xuICAgIGNvbG9yOiB0cmFuc3BhcmVudDtcbiAgICB0ZXh0LXNoYWRvdzogMCAwIDAgJGN1c3RvbS1zZWxlY3QtY29sb3I7XG4gIH1cbn1cblxuLmN1c3RvbS1zZWxlY3Qtc20ge1xuICBoZWlnaHQ6ICRjdXN0b20tc2VsZWN0LWhlaWdodC1zbTtcbiAgcGFkZGluZy10b3A6ICRjdXN0b20tc2VsZWN0LXBhZGRpbmcteS1zbTtcbiAgcGFkZGluZy1ib3R0b206ICRjdXN0b20tc2VsZWN0LXBhZGRpbmcteS1zbTtcbiAgcGFkZGluZy1sZWZ0OiAkY3VzdG9tLXNlbGVjdC1wYWRkaW5nLXgtc207XG4gIEBpbmNsdWRlIGZvbnQtc2l6ZSgkY3VzdG9tLXNlbGVjdC1mb250LXNpemUtc20pO1xufVxuXG4uY3VzdG9tLXNlbGVjdC1sZyB7XG4gIGhlaWdodDogJGN1c3RvbS1zZWxlY3QtaGVpZ2h0LWxnO1xuICBwYWRkaW5nLXRvcDogJGN1c3RvbS1zZWxlY3QtcGFkZGluZy15LWxnO1xuICBwYWRkaW5nLWJvdHRvbTogJGN1c3RvbS1zZWxlY3QtcGFkZGluZy15LWxnO1xuICBwYWRkaW5nLWxlZnQ6ICRjdXN0b20tc2VsZWN0LXBhZGRpbmcteC1sZztcbiAgQGluY2x1ZGUgZm9udC1zaXplKCRjdXN0b20tc2VsZWN0LWZvbnQtc2l6ZS1sZyk7XG59XG5cblxuLy8gRmlsZVxuLy9cbi8vIEN1c3RvbSBmaWxlIGlucHV0LlxuXG4uY3VzdG9tLWZpbGUge1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgd2lkdGg6IDEwMCU7XG4gIGhlaWdodDogJGN1c3RvbS1maWxlLWhlaWdodDtcbiAgbWFyZ2luLWJvdHRvbTogMDtcbn1cblxuLmN1c3RvbS1maWxlLWlucHV0IHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICB6LWluZGV4OiAyO1xuICB3aWR0aDogMTAwJTtcbiAgaGVpZ2h0OiAkY3VzdG9tLWZpbGUtaGVpZ2h0O1xuICBtYXJnaW46IDA7XG4gIG9wYWNpdHk6IDA7XG5cbiAgJjpmb2N1cyB+IC5jdXN0b20tZmlsZS1sYWJlbCB7XG4gICAgYm9yZGVyLWNvbG9yOiAkY3VzdG9tLWZpbGUtZm9jdXMtYm9yZGVyLWNvbG9yO1xuICAgIGJveC1zaGFkb3c6ICRjdXN0b20tZmlsZS1mb2N1cy1ib3gtc2hhZG93O1xuICB9XG5cbiAgLy8gVXNlIFtkaXNhYmxlZF0gYW5kIDpkaXNhYmxlZCB0byB3b3JrIGFyb3VuZCBodHRwczovL2dpdGh1Yi5jb20vdHdicy9ib290c3RyYXAvaXNzdWVzLzI4MjQ3XG4gICZbZGlzYWJsZWRdIH4gLmN1c3RvbS1maWxlLWxhYmVsLFxuICAmOmRpc2FibGVkIH4gLmN1c3RvbS1maWxlLWxhYmVsIHtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkY3VzdG9tLWZpbGUtZGlzYWJsZWQtYmc7XG4gIH1cblxuICBAZWFjaCAkbGFuZywgJHZhbHVlIGluICRjdXN0b20tZmlsZS10ZXh0IHtcbiAgICAmOmxhbmcoI3skbGFuZ30pIH4gLmN1c3RvbS1maWxlLWxhYmVsOjphZnRlciB7XG4gICAgICBjb250ZW50OiAkdmFsdWU7XG4gICAgfVxuICB9XG5cbiAgfiAuY3VzdG9tLWZpbGUtbGFiZWxbZGF0YS1icm93c2VdOjphZnRlciB7XG4gICAgY29udGVudDogYXR0cihkYXRhLWJyb3dzZSk7XG4gIH1cbn1cblxuLmN1c3RvbS1maWxlLWxhYmVsIHtcbiAgcG9zaXRpb246IGFic29sdXRlO1xuICB0b3A6IDA7XG4gIHJpZ2h0OiAwO1xuICBsZWZ0OiAwO1xuICB6LWluZGV4OiAxO1xuICBoZWlnaHQ6ICRjdXN0b20tZmlsZS1oZWlnaHQ7XG4gIHBhZGRpbmc6ICRjdXN0b20tZmlsZS1wYWRkaW5nLXkgJGN1c3RvbS1maWxlLXBhZGRpbmcteDtcbiAgZm9udC1mYW1pbHk6ICRjdXN0b20tZmlsZS1mb250LWZhbWlseTtcbiAgZm9udC13ZWlnaHQ6ICRjdXN0b20tZmlsZS1mb250LXdlaWdodDtcbiAgbGluZS1oZWlnaHQ6ICRjdXN0b20tZmlsZS1saW5lLWhlaWdodDtcbiAgY29sb3I6ICRjdXN0b20tZmlsZS1jb2xvcjtcbiAgYmFja2dyb3VuZC1jb2xvcjogJGN1c3RvbS1maWxlLWJnO1xuICBib3JkZXI6ICRjdXN0b20tZmlsZS1ib3JkZXItd2lkdGggc29saWQgJGN1c3RvbS1maWxlLWJvcmRlci1jb2xvcjtcbiAgQGluY2x1ZGUgYm9yZGVyLXJhZGl1cygkY3VzdG9tLWZpbGUtYm9yZGVyLXJhZGl1cyk7XG4gIEBpbmNsdWRlIGJveC1zaGFkb3coJGN1c3RvbS1maWxlLWJveC1zaGFkb3cpO1xuXG4gICY6OmFmdGVyIHtcbiAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgdG9wOiAwO1xuICAgIHJpZ2h0OiAwO1xuICAgIGJvdHRvbTogMDtcbiAgICB6LWluZGV4OiAzO1xuICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgIGhlaWdodDogJGN1c3RvbS1maWxlLWhlaWdodC1pbm5lcjtcbiAgICBwYWRkaW5nOiAkY3VzdG9tLWZpbGUtcGFkZGluZy15ICRjdXN0b20tZmlsZS1wYWRkaW5nLXg7XG4gICAgbGluZS1oZWlnaHQ6ICRjdXN0b20tZmlsZS1saW5lLWhlaWdodDtcbiAgICBjb2xvcjogJGN1c3RvbS1maWxlLWJ1dHRvbi1jb2xvcjtcbiAgICBjb250ZW50OiBcIkJyb3dzZVwiO1xuICAgIEBpbmNsdWRlIGdyYWRpZW50LWJnKCRjdXN0b20tZmlsZS1idXR0b24tYmcpO1xuICAgIGJvcmRlci1sZWZ0OiBpbmhlcml0O1xuICAgIEBpbmNsdWRlIGJvcmRlci1yYWRpdXMoMCAkY3VzdG9tLWZpbGUtYm9yZGVyLXJhZGl1cyAkY3VzdG9tLWZpbGUtYm9yZGVyLXJhZGl1cyAwKTtcbiAgfVxufVxuXG4vLyBSYW5nZVxuLy9cbi8vIFN0eWxlIHJhbmdlIGlucHV0cyB0aGUgc2FtZSBhY3Jvc3MgYnJvd3NlcnMuIFZlbmRvci1zcGVjaWZpYyBydWxlcyBmb3IgcHNldWRvXG4vLyBlbGVtZW50cyBjYW5ub3QgYmUgbWl4ZWQuIEFzIHN1Y2gsIHRoZXJlIGFyZSBubyBzaGFyZWQgc3R5bGVzIGZvciBmb2N1cyBvclxuLy8gYWN0aXZlIHN0YXRlcyBvbiBwcmVmaXhlZCBzZWxlY3RvcnMuXG5cbi5jdXN0b20tcmFuZ2Uge1xuICB3aWR0aDogMTAwJTtcbiAgaGVpZ2h0OiBhZGQoJGN1c3RvbS1yYW5nZS10aHVtYi1oZWlnaHQsICRjdXN0b20tcmFuZ2UtdGh1bWItZm9jdXMtYm94LXNoYWRvdy13aWR0aCAqIDIpO1xuICBwYWRkaW5nOiAwOyAvLyBOZWVkIHRvIHJlc2V0IHBhZGRpbmdcbiAgYmFja2dyb3VuZC1jb2xvcjogdHJhbnNwYXJlbnQ7XG4gIGFwcGVhcmFuY2U6IG5vbmU7XG5cbiAgJjpmb2N1cyB7XG4gICAgb3V0bGluZTogbm9uZTtcblxuICAgIC8vIFBzZXVkby1lbGVtZW50cyBtdXN0IGJlIHNwbGl0IGFjcm9zcyBtdWx0aXBsZSBydWxlc2V0cyB0byBoYXZlIGFuIGVmZmVjdC5cbiAgICAvLyBObyBib3gtc2hhZG93KCkgbWl4aW4gZm9yIGZvY3VzIGFjY2Vzc2liaWxpdHkuXG4gICAgJjo6LXdlYmtpdC1zbGlkZXItdGh1bWIgeyBib3gtc2hhZG93OiAkY3VzdG9tLXJhbmdlLXRodW1iLWZvY3VzLWJveC1zaGFkb3c7IH1cbiAgICAmOjotbW96LXJhbmdlLXRodW1iICAgICB7IGJveC1zaGFkb3c6ICRjdXN0b20tcmFuZ2UtdGh1bWItZm9jdXMtYm94LXNoYWRvdzsgfVxuICAgICY6Oi1tcy10aHVtYiAgICAgICAgICAgIHsgYm94LXNoYWRvdzogJGN1c3RvbS1yYW5nZS10aHVtYi1mb2N1cy1ib3gtc2hhZG93OyB9XG4gIH1cblxuICAmOjotbW96LWZvY3VzLW91dGVyIHtcbiAgICBib3JkZXI6IDA7XG4gIH1cblxuICAmOjotd2Via2l0LXNsaWRlci10aHVtYiB7XG4gICAgd2lkdGg6ICRjdXN0b20tcmFuZ2UtdGh1bWItd2lkdGg7XG4gICAgaGVpZ2h0OiAkY3VzdG9tLXJhbmdlLXRodW1iLWhlaWdodDtcbiAgICBtYXJnaW4tdG9wOiAoJGN1c3RvbS1yYW5nZS10cmFjay1oZWlnaHQgLSAkY3VzdG9tLXJhbmdlLXRodW1iLWhlaWdodCkgLyAyOyAvLyBXZWJraXQgc3BlY2lmaWNcbiAgICBAaW5jbHVkZSBncmFkaWVudC1iZygkY3VzdG9tLXJhbmdlLXRodW1iLWJnKTtcbiAgICBib3JkZXI6ICRjdXN0b20tcmFuZ2UtdGh1bWItYm9yZGVyO1xuICAgIEBpbmNsdWRlIGJvcmRlci1yYWRpdXMoJGN1c3RvbS1yYW5nZS10aHVtYi1ib3JkZXItcmFkaXVzKTtcbiAgICBAaW5jbHVkZSBib3gtc2hhZG93KCRjdXN0b20tcmFuZ2UtdGh1bWItYm94LXNoYWRvdyk7XG4gICAgQGluY2x1ZGUgdHJhbnNpdGlvbigkY3VzdG9tLWZvcm1zLXRyYW5zaXRpb24pO1xuICAgIGFwcGVhcmFuY2U6IG5vbmU7XG5cbiAgICAmOmFjdGl2ZSB7XG4gICAgICBAaW5jbHVkZSBncmFkaWVudC1iZygkY3VzdG9tLXJhbmdlLXRodW1iLWFjdGl2ZS1iZyk7XG4gICAgfVxuICB9XG5cbiAgJjo6LXdlYmtpdC1zbGlkZXItcnVubmFibGUtdHJhY2sge1xuICAgIHdpZHRoOiAkY3VzdG9tLXJhbmdlLXRyYWNrLXdpZHRoO1xuICAgIGhlaWdodDogJGN1c3RvbS1yYW5nZS10cmFjay1oZWlnaHQ7XG4gICAgY29sb3I6IHRyYW5zcGFyZW50OyAvLyBXaHk/XG4gICAgY3Vyc29yOiAkY3VzdG9tLXJhbmdlLXRyYWNrLWN1cnNvcjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkY3VzdG9tLXJhbmdlLXRyYWNrLWJnO1xuICAgIGJvcmRlci1jb2xvcjogdHJhbnNwYXJlbnQ7XG4gICAgQGluY2x1ZGUgYm9yZGVyLXJhZGl1cygkY3VzdG9tLXJhbmdlLXRyYWNrLWJvcmRlci1yYWRpdXMpO1xuICAgIEBpbmNsdWRlIGJveC1zaGFkb3coJGN1c3RvbS1yYW5nZS10cmFjay1ib3gtc2hhZG93KTtcbiAgfVxuXG4gICY6Oi1tb3otcmFuZ2UtdGh1bWIge1xuICAgIHdpZHRoOiAkY3VzdG9tLXJhbmdlLXRodW1iLXdpZHRoO1xuICAgIGhlaWdodDogJGN1c3RvbS1yYW5nZS10aHVtYi1oZWlnaHQ7XG4gICAgQGluY2x1ZGUgZ3JhZGllbnQtYmcoJGN1c3RvbS1yYW5nZS10aHVtYi1iZyk7XG4gICAgYm9yZGVyOiAkY3VzdG9tLXJhbmdlLXRodW1iLWJvcmRlcjtcbiAgICBAaW5jbHVkZSBib3JkZXItcmFkaXVzKCRjdXN0b20tcmFuZ2UtdGh1bWItYm9yZGVyLXJhZGl1cyk7XG4gICAgQGluY2x1ZGUgYm94LXNoYWRvdygkY3VzdG9tLXJhbmdlLXRodW1iLWJveC1zaGFkb3cpO1xuICAgIEBpbmNsdWRlIHRyYW5zaXRpb24oJGN1c3RvbS1mb3Jtcy10cmFuc2l0aW9uKTtcbiAgICBhcHBlYXJhbmNlOiBub25lO1xuXG4gICAgJjphY3RpdmUge1xuICAgICAgQGluY2x1ZGUgZ3JhZGllbnQtYmcoJGN1c3RvbS1yYW5nZS10aHVtYi1hY3RpdmUtYmcpO1xuICAgIH1cbiAgfVxuXG4gICY6Oi1tb3otcmFuZ2UtdHJhY2sge1xuICAgIHdpZHRoOiAkY3VzdG9tLXJhbmdlLXRyYWNrLXdpZHRoO1xuICAgIGhlaWdodDogJGN1c3RvbS1yYW5nZS10cmFjay1oZWlnaHQ7XG4gICAgY29sb3I6IHRyYW5zcGFyZW50O1xuICAgIGN1cnNvcjogJGN1c3RvbS1yYW5nZS10cmFjay1jdXJzb3I7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogJGN1c3RvbS1yYW5nZS10cmFjay1iZztcbiAgICBib3JkZXItY29sb3I6IHRyYW5zcGFyZW50OyAvLyBGaXJlZm94IHNwZWNpZmljP1xuICAgIEBpbmNsdWRlIGJvcmRlci1yYWRpdXMoJGN1c3RvbS1yYW5nZS10cmFjay1ib3JkZXItcmFkaXVzKTtcbiAgICBAaW5jbHVkZSBib3gtc2hhZG93KCRjdXN0b20tcmFuZ2UtdHJhY2stYm94LXNoYWRvdyk7XG4gIH1cblxuICAmOjotbXMtdGh1bWIge1xuICAgIHdpZHRoOiAkY3VzdG9tLXJhbmdlLXRodW1iLXdpZHRoO1xuICAgIGhlaWdodDogJGN1c3RvbS1yYW5nZS10aHVtYi1oZWlnaHQ7XG4gICAgbWFyZ2luLXRvcDogMDsgLy8gRWRnZSBzcGVjaWZpY1xuICAgIG1hcmdpbi1yaWdodDogJGN1c3RvbS1yYW5nZS10aHVtYi1mb2N1cy1ib3gtc2hhZG93LXdpZHRoOyAvLyBXb3JrYXJvdW5kIHRoYXQgb3ZlcmZsb3dlZCBib3gtc2hhZG93IGlzIGhpZGRlbi5cbiAgICBtYXJnaW4tbGVmdDogJGN1c3RvbS1yYW5nZS10aHVtYi1mb2N1cy1ib3gtc2hhZG93LXdpZHRoOyAgLy8gV29ya2Fyb3VuZCB0aGF0IG92ZXJmbG93ZWQgYm94LXNoYWRvdyBpcyBoaWRkZW4uXG4gICAgQGluY2x1ZGUgZ3JhZGllbnQtYmcoJGN1c3RvbS1yYW5nZS10aHVtYi1iZyk7XG4gICAgYm9yZGVyOiAkY3VzdG9tLXJhbmdlLXRodW1iLWJvcmRlcjtcbiAgICBAaW5jbHVkZSBib3JkZXItcmFkaXVzKCRjdXN0b20tcmFuZ2UtdGh1bWItYm9yZGVyLXJhZGl1cyk7XG4gICAgQGluY2x1ZGUgYm94LXNoYWRvdygkY3VzdG9tLXJhbmdlLXRodW1iLWJveC1zaGFkb3cpO1xuICAgIEBpbmNsdWRlIHRyYW5zaXRpb24oJGN1c3RvbS1mb3Jtcy10cmFuc2l0aW9uKTtcbiAgICBhcHBlYXJhbmNlOiBub25lO1xuXG4gICAgJjphY3RpdmUge1xuICAgICAgQGluY2x1ZGUgZ3JhZGllbnQtYmcoJGN1c3RvbS1yYW5nZS10aHVtYi1hY3RpdmUtYmcpO1xuICAgIH1cbiAgfVxuXG4gICY6Oi1tcy10cmFjayB7XG4gICAgd2lkdGg6ICRjdXN0b20tcmFuZ2UtdHJhY2std2lkdGg7XG4gICAgaGVpZ2h0OiAkY3VzdG9tLXJhbmdlLXRyYWNrLWhlaWdodDtcbiAgICBjb2xvcjogdHJhbnNwYXJlbnQ7XG4gICAgY3Vyc29yOiAkY3VzdG9tLXJhbmdlLXRyYWNrLWN1cnNvcjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiB0cmFuc3BhcmVudDtcbiAgICBib3JkZXItY29sb3I6IHRyYW5zcGFyZW50O1xuICAgIGJvcmRlci13aWR0aDogJGN1c3RvbS1yYW5nZS10aHVtYi1oZWlnaHQgLyAyO1xuICAgIEBpbmNsdWRlIGJveC1zaGFkb3coJGN1c3RvbS1yYW5nZS10cmFjay1ib3gtc2hhZG93KTtcbiAgfVxuXG4gICY6Oi1tcy1maWxsLWxvd2VyIHtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkY3VzdG9tLXJhbmdlLXRyYWNrLWJnO1xuICAgIEBpbmNsdWRlIGJvcmRlci1yYWRpdXMoJGN1c3RvbS1yYW5nZS10cmFjay1ib3JkZXItcmFkaXVzKTtcbiAgfVxuXG4gICY6Oi1tcy1maWxsLXVwcGVyIHtcbiAgICBtYXJnaW4tcmlnaHQ6IDE1cHg7IC8vIGFyYml0cmFyeT9cbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkY3VzdG9tLXJhbmdlLXRyYWNrLWJnO1xuICAgIEBpbmNsdWRlIGJvcmRlci1yYWRpdXMoJGN1c3RvbS1yYW5nZS10cmFjay1ib3JkZXItcmFkaXVzKTtcbiAgfVxuXG4gICY6ZGlzYWJsZWQge1xuICAgICY6Oi13ZWJraXQtc2xpZGVyLXRodW1iIHtcbiAgICAgIGJhY2tncm91bmQtY29sb3I6ICRjdXN0b20tcmFuZ2UtdGh1bWItZGlzYWJsZWQtYmc7XG4gICAgfVxuXG4gICAgJjo6LXdlYmtpdC1zbGlkZXItcnVubmFibGUtdHJhY2sge1xuICAgICAgY3Vyc29yOiBkZWZhdWx0O1xuICAgIH1cblxuICAgICY6Oi1tb3otcmFuZ2UtdGh1bWIge1xuICAgICAgYmFja2dyb3VuZC1jb2xvcjogJGN1c3RvbS1yYW5nZS10aHVtYi1kaXNhYmxlZC1iZztcbiAgICB9XG5cbiAgICAmOjotbW96LXJhbmdlLXRyYWNrIHtcbiAgICAgIGN1cnNvcjogZGVmYXVsdDtcbiAgICB9XG5cbiAgICAmOjotbXMtdGh1bWIge1xuICAgICAgYmFja2dyb3VuZC1jb2xvcjogJGN1c3RvbS1yYW5nZS10aHVtYi1kaXNhYmxlZC1iZztcbiAgICB9XG4gIH1cbn1cblxuLmN1c3RvbS1jb250cm9sLWxhYmVsOjpiZWZvcmUsXG4uY3VzdG9tLWZpbGUtbGFiZWwsXG4uY3VzdG9tLXNlbGVjdCB7XG4gIEBpbmNsdWRlIHRyYW5zaXRpb24oJGN1c3RvbS1mb3Jtcy10cmFuc2l0aW9uKTtcbn1cbiIsIi8vIEJhc2UgY2xhc3Ncbi8vXG4vLyBLaWNrc3RhcnQgYW55IG5hdmlnYXRpb24gY29tcG9uZW50IHdpdGggYSBzZXQgb2Ygc3R5bGUgcmVzZXRzLiBXb3JrcyB3aXRoXG4vLyBgPG5hdj5gcywgYDx1bD5gcyBvciBgPG9sPmBzLlxuXG4ubmF2IHtcbiAgZGlzcGxheTogZmxleDtcbiAgZmxleC13cmFwOiB3cmFwO1xuICBwYWRkaW5nLWxlZnQ6IDA7XG4gIG1hcmdpbi1ib3R0b206IDA7XG4gIGxpc3Qtc3R5bGU6IG5vbmU7XG59XG5cbi5uYXYtbGluayB7XG4gIGRpc3BsYXk6IGJsb2NrO1xuICBwYWRkaW5nOiAkbmF2LWxpbmstcGFkZGluZy15ICRuYXYtbGluay1wYWRkaW5nLXg7XG4gIHRleHQtZGVjb3JhdGlvbjogaWYoJGxpbmstZGVjb3JhdGlvbiA9PSBub25lLCBudWxsLCBub25lKTtcblxuICBAaW5jbHVkZSBob3Zlci1mb2N1cygpIHtcbiAgICB0ZXh0LWRlY29yYXRpb246IG5vbmU7XG4gIH1cblxuICAvLyBEaXNhYmxlZCBzdGF0ZSBsaWdodGVucyB0ZXh0XG4gICYuZGlzYWJsZWQge1xuICAgIGNvbG9yOiAkbmF2LWxpbmstZGlzYWJsZWQtY29sb3I7XG4gICAgcG9pbnRlci1ldmVudHM6IG5vbmU7XG4gICAgY3Vyc29yOiBkZWZhdWx0O1xuICB9XG59XG5cbi8vXG4vLyBUYWJzXG4vL1xuXG4ubmF2LXRhYnMge1xuICBib3JkZXItYm90dG9tOiAkbmF2LXRhYnMtYm9yZGVyLXdpZHRoIHNvbGlkICRuYXYtdGFicy1ib3JkZXItY29sb3I7XG5cbiAgLm5hdi1pdGVtIHtcbiAgICBtYXJnaW4tYm90dG9tOiAtJG5hdi10YWJzLWJvcmRlci13aWR0aDtcbiAgfVxuXG4gIC5uYXYtbGluayB7XG4gICAgYm9yZGVyOiAkbmF2LXRhYnMtYm9yZGVyLXdpZHRoIHNvbGlkIHRyYW5zcGFyZW50O1xuICAgIEBpbmNsdWRlIGJvcmRlci10b3AtcmFkaXVzKCRuYXYtdGFicy1ib3JkZXItcmFkaXVzKTtcblxuICAgIEBpbmNsdWRlIGhvdmVyLWZvY3VzKCkge1xuICAgICAgYm9yZGVyLWNvbG9yOiAkbmF2LXRhYnMtbGluay1ob3Zlci1ib3JkZXItY29sb3I7XG4gICAgfVxuXG4gICAgJi5kaXNhYmxlZCB7XG4gICAgICBjb2xvcjogJG5hdi1saW5rLWRpc2FibGVkLWNvbG9yO1xuICAgICAgYmFja2dyb3VuZC1jb2xvcjogdHJhbnNwYXJlbnQ7XG4gICAgICBib3JkZXItY29sb3I6IHRyYW5zcGFyZW50O1xuICAgIH1cbiAgfVxuXG4gIC5uYXYtbGluay5hY3RpdmUsXG4gIC5uYXYtaXRlbS5zaG93IC5uYXYtbGluayB7XG4gICAgY29sb3I6ICRuYXYtdGFicy1saW5rLWFjdGl2ZS1jb2xvcjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkbmF2LXRhYnMtbGluay1hY3RpdmUtYmc7XG4gICAgYm9yZGVyLWNvbG9yOiAkbmF2LXRhYnMtbGluay1hY3RpdmUtYm9yZGVyLWNvbG9yO1xuICB9XG5cbiAgLmRyb3Bkb3duLW1lbnUge1xuICAgIC8vIE1ha2UgZHJvcGRvd24gYm9yZGVyIG92ZXJsYXAgdGFiIGJvcmRlclxuICAgIG1hcmdpbi10b3A6IC0kbmF2LXRhYnMtYm9yZGVyLXdpZHRoO1xuICAgIC8vIFJlbW92ZSB0aGUgdG9wIHJvdW5kZWQgY29ybmVycyBoZXJlIHNpbmNlIHRoZXJlIGlzIGEgaGFyZCBlZGdlIGFib3ZlIHRoZSBtZW51XG4gICAgQGluY2x1ZGUgYm9yZGVyLXRvcC1yYWRpdXMoMCk7XG4gIH1cbn1cblxuXG4vL1xuLy8gUGlsbHNcbi8vXG5cbi5uYXYtcGlsbHMge1xuICAubmF2LWxpbmsge1xuICAgIEBpbmNsdWRlIGJvcmRlci1yYWRpdXMoJG5hdi1waWxscy1ib3JkZXItcmFkaXVzKTtcbiAgfVxuXG4gIC5uYXYtbGluay5hY3RpdmUsXG4gIC5zaG93ID4gLm5hdi1saW5rIHtcbiAgICBjb2xvcjogJG5hdi1waWxscy1saW5rLWFjdGl2ZS1jb2xvcjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkbmF2LXBpbGxzLWxpbmstYWN0aXZlLWJnO1xuICB9XG59XG5cblxuLy9cbi8vIEp1c3RpZmllZCB2YXJpYW50c1xuLy9cblxuLm5hdi1maWxsIHtcbiAgLm5hdi1pdGVtIHtcbiAgICBmbGV4OiAxIDEgYXV0bztcbiAgICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gIH1cbn1cblxuLm5hdi1qdXN0aWZpZWQge1xuICAubmF2LWl0ZW0ge1xuICAgIGZsZXgtYmFzaXM6IDA7XG4gICAgZmxleC1ncm93OiAxO1xuICAgIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgfVxufVxuXG5cbi8vIFRhYmJhYmxlIHRhYnNcbi8vXG4vLyBIaWRlIHRhYmJhYmxlIHBhbmVzIHRvIHN0YXJ0LCBzaG93IHRoZW0gd2hlbiBgLmFjdGl2ZWBcblxuLnRhYi1jb250ZW50IHtcbiAgPiAudGFiLXBhbmUge1xuICAgIGRpc3BsYXk6IG5vbmU7XG4gIH1cbiAgPiAuYWN0aXZlIHtcbiAgICBkaXNwbGF5OiBibG9jaztcbiAgfVxufVxuIiwiLy8gQ29udGVudHNcbi8vXG4vLyBOYXZiYXJcbi8vIE5hdmJhciBicmFuZFxuLy8gTmF2YmFyIG5hdlxuLy8gTmF2YmFyIHRleHRcbi8vIE5hdmJhciBkaXZpZGVyXG4vLyBSZXNwb25zaXZlIG5hdmJhclxuLy8gTmF2YmFyIHBvc2l0aW9uXG4vLyBOYXZiYXIgdGhlbWVzXG5cblxuLy8gTmF2YmFyXG4vL1xuLy8gUHJvdmlkZSBhIHN0YXRpYyBuYXZiYXIgZnJvbSB3aGljaCB3ZSBleHBhbmQgdG8gY3JlYXRlIGZ1bGwtd2lkdGgsIGZpeGVkLCBhbmRcbi8vIG90aGVyIG5hdmJhciB2YXJpYXRpb25zLlxuXG4ubmF2YmFyIHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICBkaXNwbGF5OiBmbGV4O1xuICBmbGV4LXdyYXA6IHdyYXA7IC8vIGFsbG93IHVzIHRvIGRvIHRoZSBsaW5lIGJyZWFrIGZvciBjb2xsYXBzaW5nIGNvbnRlbnRcbiAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAganVzdGlmeS1jb250ZW50OiBzcGFjZS1iZXR3ZWVuOyAvLyBzcGFjZSBvdXQgYnJhbmQgZnJvbSBsb2dvXG4gIHBhZGRpbmc6ICRuYXZiYXItcGFkZGluZy15ICRuYXZiYXItcGFkZGluZy14O1xuXG4gIC8vIEJlY2F1c2UgZmxleCBwcm9wZXJ0aWVzIGFyZW4ndCBpbmhlcml0ZWQsIHdlIG5lZWQgdG8gcmVkZWNsYXJlIHRoZXNlIGZpcnN0XG4gIC8vIGZldyBwcm9wZXJ0aWVzIHNvIHRoYXQgY29udGVudCBuZXN0ZWQgd2l0aGluIGJlaGF2ZSBwcm9wZXJseS5cbiAgJWNvbnRhaW5lci1mbGV4LXByb3BlcnRpZXMge1xuICAgIGRpc3BsYXk6IGZsZXg7XG4gICAgZmxleC13cmFwOiB3cmFwO1xuICAgIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gICAganVzdGlmeS1jb250ZW50OiBzcGFjZS1iZXR3ZWVuO1xuICB9XG5cbiAgLmNvbnRhaW5lcixcbiAgLmNvbnRhaW5lci1mbHVpZCB7XG4gICAgQGV4dGVuZCAlY29udGFpbmVyLWZsZXgtcHJvcGVydGllcztcbiAgfVxuXG4gIEBlYWNoICRicmVha3BvaW50LCAkY29udGFpbmVyLW1heC13aWR0aCBpbiAkY29udGFpbmVyLW1heC13aWR0aHMge1xuICAgID4gLmNvbnRhaW5lciN7YnJlYWtwb2ludC1pbmZpeCgkYnJlYWtwb2ludCwgJGNvbnRhaW5lci1tYXgtd2lkdGhzKX0ge1xuICAgICAgQGV4dGVuZCAlY29udGFpbmVyLWZsZXgtcHJvcGVydGllcztcbiAgICB9XG4gIH1cbn1cblxuXG4vLyBOYXZiYXIgYnJhbmRcbi8vXG4vLyBVc2VkIGZvciBicmFuZCwgcHJvamVjdCwgb3Igc2l0ZSBuYW1lcy5cblxuLm5hdmJhci1icmFuZCB7XG4gIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgcGFkZGluZy10b3A6ICRuYXZiYXItYnJhbmQtcGFkZGluZy15O1xuICBwYWRkaW5nLWJvdHRvbTogJG5hdmJhci1icmFuZC1wYWRkaW5nLXk7XG4gIG1hcmdpbi1yaWdodDogJG5hdmJhci1wYWRkaW5nLXg7XG4gIEBpbmNsdWRlIGZvbnQtc2l6ZSgkbmF2YmFyLWJyYW5kLWZvbnQtc2l6ZSk7XG4gIGxpbmUtaGVpZ2h0OiBpbmhlcml0O1xuICB3aGl0ZS1zcGFjZTogbm93cmFwO1xuXG4gIEBpbmNsdWRlIGhvdmVyLWZvY3VzKCkge1xuICAgIHRleHQtZGVjb3JhdGlvbjogbm9uZTtcbiAgfVxufVxuXG5cbi8vIE5hdmJhciBuYXZcbi8vXG4vLyBDdXN0b20gbmF2YmFyIG5hdmlnYXRpb24gKGRvZXNuJ3QgcmVxdWlyZSBgLm5hdmAsIGJ1dCBkb2VzIG1ha2UgdXNlIG9mIGAubmF2LWxpbmtgKS5cblxuLm5hdmJhci1uYXYge1xuICBkaXNwbGF5OiBmbGV4O1xuICBmbGV4LWRpcmVjdGlvbjogY29sdW1uOyAvLyBjYW5ub3QgdXNlIGBpbmhlcml0YCB0byBnZXQgdGhlIGAubmF2YmFyYHMgdmFsdWVcbiAgcGFkZGluZy1sZWZ0OiAwO1xuICBtYXJnaW4tYm90dG9tOiAwO1xuICBsaXN0LXN0eWxlOiBub25lO1xuXG4gIC5uYXYtbGluayB7XG4gICAgcGFkZGluZy1yaWdodDogMDtcbiAgICBwYWRkaW5nLWxlZnQ6IDA7XG4gIH1cblxuICAuZHJvcGRvd24tbWVudSB7XG4gICAgcG9zaXRpb246IHN0YXRpYztcbiAgICBmbG9hdDogbm9uZTtcbiAgfVxufVxuXG5cbi8vIE5hdmJhciB0ZXh0XG4vL1xuLy9cblxuLm5hdmJhci10ZXh0IHtcbiAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICBwYWRkaW5nLXRvcDogJG5hdi1saW5rLXBhZGRpbmcteTtcbiAgcGFkZGluZy1ib3R0b206ICRuYXYtbGluay1wYWRkaW5nLXk7XG59XG5cblxuLy8gUmVzcG9uc2l2ZSBuYXZiYXJcbi8vXG4vLyBDdXN0b20gc3R5bGVzIGZvciByZXNwb25zaXZlIGNvbGxhcHNpbmcgYW5kIHRvZ2dsaW5nIG9mIG5hdmJhciBjb250ZW50cy5cbi8vIFBvd2VyZWQgYnkgdGhlIGNvbGxhcHNlIEJvb3RzdHJhcCBKYXZhU2NyaXB0IHBsdWdpbi5cblxuLy8gV2hlbiBjb2xsYXBzZWQsIHByZXZlbnQgdGhlIHRvZ2dsZWFibGUgbmF2YmFyIGNvbnRlbnRzIGZyb20gYXBwZWFyaW5nIGluXG4vLyB0aGUgZGVmYXVsdCBmbGV4Ym94IHJvdyBvcmllbnRhdGlvbi4gUmVxdWlyZXMgdGhlIHVzZSBvZiBgZmxleC13cmFwOiB3cmFwYFxuLy8gb24gdGhlIGAubmF2YmFyYCBwYXJlbnQuXG4ubmF2YmFyLWNvbGxhcHNlIHtcbiAgZmxleC1iYXNpczogMTAwJTtcbiAgZmxleC1ncm93OiAxO1xuICAvLyBGb3IgYWx3YXlzIGV4cGFuZGVkIG9yIGV4dHJhIGZ1bGwgbmF2YmFycywgZW5zdXJlIGNvbnRlbnQgYWxpZ25zIGl0c2VsZlxuICAvLyBwcm9wZXJseSB2ZXJ0aWNhbGx5LiBDYW4gYmUgZWFzaWx5IG92ZXJyaWRkZW4gd2l0aCBmbGV4IHV0aWxpdGllcy5cbiAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbn1cblxuLy8gQnV0dG9uIGZvciB0b2dnbGluZyB0aGUgbmF2YmFyIHdoZW4gaW4gaXRzIGNvbGxhcHNlZCBzdGF0ZVxuLm5hdmJhci10b2dnbGVyIHtcbiAgcGFkZGluZzogJG5hdmJhci10b2dnbGVyLXBhZGRpbmcteSAkbmF2YmFyLXRvZ2dsZXItcGFkZGluZy14O1xuICBAaW5jbHVkZSBmb250LXNpemUoJG5hdmJhci10b2dnbGVyLWZvbnQtc2l6ZSk7XG4gIGxpbmUtaGVpZ2h0OiAxO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiB0cmFuc3BhcmVudDsgLy8gcmVtb3ZlIGRlZmF1bHQgYnV0dG9uIHN0eWxlXG4gIGJvcmRlcjogJGJvcmRlci13aWR0aCBzb2xpZCB0cmFuc3BhcmVudDsgLy8gcmVtb3ZlIGRlZmF1bHQgYnV0dG9uIHN0eWxlXG4gIEBpbmNsdWRlIGJvcmRlci1yYWRpdXMoJG5hdmJhci10b2dnbGVyLWJvcmRlci1yYWRpdXMpO1xuXG4gIEBpbmNsdWRlIGhvdmVyLWZvY3VzKCkge1xuICAgIHRleHQtZGVjb3JhdGlvbjogbm9uZTtcbiAgfVxufVxuXG4vLyBLZWVwIGFzIGEgc2VwYXJhdGUgZWxlbWVudCBzbyBmb2xrcyBjYW4gZWFzaWx5IG92ZXJyaWRlIGl0IHdpdGggYW5vdGhlciBpY29uXG4vLyBvciBpbWFnZSBmaWxlIGFzIG5lZWRlZC5cbi5uYXZiYXItdG9nZ2xlci1pY29uIHtcbiAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICB3aWR0aDogMS41ZW07XG4gIGhlaWdodDogMS41ZW07XG4gIHZlcnRpY2FsLWFsaWduOiBtaWRkbGU7XG4gIGNvbnRlbnQ6IFwiXCI7XG4gIGJhY2tncm91bmQ6IG5vLXJlcGVhdCBjZW50ZXIgY2VudGVyO1xuICBiYWNrZ3JvdW5kLXNpemU6IDEwMCUgMTAwJTtcbn1cblxuLy8gR2VuZXJhdGUgc2VyaWVzIG9mIGAubmF2YmFyLWV4cGFuZC0qYCByZXNwb25zaXZlIGNsYXNzZXMgZm9yIGNvbmZpZ3VyaW5nXG4vLyB3aGVyZSB5b3VyIG5hdmJhciBjb2xsYXBzZXMuXG4ubmF2YmFyLWV4cGFuZCB7XG4gIEBlYWNoICRicmVha3BvaW50IGluIG1hcC1rZXlzKCRncmlkLWJyZWFrcG9pbnRzKSB7XG4gICAgJG5leHQ6IGJyZWFrcG9pbnQtbmV4dCgkYnJlYWtwb2ludCwgJGdyaWQtYnJlYWtwb2ludHMpO1xuICAgICRpbmZpeDogYnJlYWtwb2ludC1pbmZpeCgkbmV4dCwgJGdyaWQtYnJlYWtwb2ludHMpO1xuXG4gICAgJiN7JGluZml4fSB7XG4gICAgICBAaW5jbHVkZSBtZWRpYS1icmVha3BvaW50LWRvd24oJGJyZWFrcG9pbnQpIHtcbiAgICAgICAgJWNvbnRhaW5lci1uYXZiYXItZXhwYW5kLSN7JGJyZWFrcG9pbnR9IHtcbiAgICAgICAgICBwYWRkaW5nLXJpZ2h0OiAwO1xuICAgICAgICAgIHBhZGRpbmctbGVmdDogMDtcbiAgICAgICAgfVxuXG4gICAgICAgID4gLmNvbnRhaW5lcixcbiAgICAgICAgPiAuY29udGFpbmVyLWZsdWlkIHtcbiAgICAgICAgICBAZXh0ZW5kICVjb250YWluZXItbmF2YmFyLWV4cGFuZC0jeyRicmVha3BvaW50fTtcbiAgICAgICAgfVxuXG4gICAgICAgIEBlYWNoICRzaXplLCAkY29udGFpbmVyLW1heC13aWR0aCBpbiAkY29udGFpbmVyLW1heC13aWR0aHMge1xuICAgICAgICAgID4gLmNvbnRhaW5lciN7YnJlYWtwb2ludC1pbmZpeCgkc2l6ZSwgJGNvbnRhaW5lci1tYXgtd2lkdGhzKX0ge1xuICAgICAgICAgICAgQGV4dGVuZCAlY29udGFpbmVyLW5hdmJhci1leHBhbmQtI3skYnJlYWtwb2ludH07XG4gICAgICAgICAgfVxuICAgICAgICB9XG4gICAgICB9XG5cbiAgICAgIEBpbmNsdWRlIG1lZGlhLWJyZWFrcG9pbnQtdXAoJG5leHQpIHtcbiAgICAgICAgZmxleC1mbG93OiByb3cgbm93cmFwO1xuICAgICAgICBqdXN0aWZ5LWNvbnRlbnQ6IGZsZXgtc3RhcnQ7XG5cbiAgICAgICAgLm5hdmJhci1uYXYge1xuICAgICAgICAgIGZsZXgtZGlyZWN0aW9uOiByb3c7XG5cbiAgICAgICAgICAuZHJvcGRvd24tbWVudSB7XG4gICAgICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgICAgICAgfVxuXG4gICAgICAgICAgLm5hdi1saW5rIHtcbiAgICAgICAgICAgIHBhZGRpbmctcmlnaHQ6ICRuYXZiYXItbmF2LWxpbmstcGFkZGluZy14O1xuICAgICAgICAgICAgcGFkZGluZy1sZWZ0OiAkbmF2YmFyLW5hdi1saW5rLXBhZGRpbmcteDtcbiAgICAgICAgICB9XG4gICAgICAgIH1cblxuICAgICAgICAvLyBGb3IgbmVzdGluZyBjb250YWluZXJzLCBoYXZlIHRvIHJlZGVjbGFyZSBmb3IgYWxpZ25tZW50IHB1cnBvc2VzXG4gICAgICAgICVjb250YWluZXItbmVzdGluZy0jeyRicmVha3BvaW50fSB7XG4gICAgICAgICAgZmxleC13cmFwOiBub3dyYXA7XG4gICAgICAgIH1cblxuICAgICAgICA+IC5jb250YWluZXIsXG4gICAgICAgID4gLmNvbnRhaW5lci1mbHVpZCB7XG4gICAgICAgICAgQGV4dGVuZCAlY29udGFpbmVyLW5lc3RpbmctI3skYnJlYWtwb2ludH07XG4gICAgICAgIH1cblxuICAgICAgICBAZWFjaCAkc2l6ZSwgJGNvbnRhaW5lci1tYXgtd2lkdGggaW4gJGNvbnRhaW5lci1tYXgtd2lkdGhzIHtcbiAgICAgICAgICA+IC5jb250YWluZXIje2JyZWFrcG9pbnQtaW5maXgoJHNpemUsICRjb250YWluZXItbWF4LXdpZHRocyl9IHtcbiAgICAgICAgICAgIEBleHRlbmQgJWNvbnRhaW5lci1uZXN0aW5nLSN7JGJyZWFrcG9pbnR9O1xuICAgICAgICAgIH1cbiAgICAgICAgfVxuXG4gICAgICAgIC5uYXZiYXItY29sbGFwc2Uge1xuICAgICAgICAgIGRpc3BsYXk6IGZsZXggIWltcG9ydGFudDsgLy8gc3R5bGVsaW50LWRpc2FibGUtbGluZSBkZWNsYXJhdGlvbi1uby1pbXBvcnRhbnRcblxuICAgICAgICAgIC8vIENoYW5nZXMgZmxleC1iYXNlcyB0byBhdXRvIGJlY2F1c2Ugb2YgYW4gSUUxMCBidWdcbiAgICAgICAgICBmbGV4LWJhc2lzOiBhdXRvO1xuICAgICAgICB9XG5cbiAgICAgICAgLm5hdmJhci10b2dnbGVyIHtcbiAgICAgICAgICBkaXNwbGF5OiBub25lO1xuICAgICAgICB9XG4gICAgICB9XG4gICAgfVxuICB9XG59XG5cblxuLy8gTmF2YmFyIHRoZW1lc1xuLy9cbi8vIFN0eWxlcyBmb3Igc3dpdGNoaW5nIGJldHdlZW4gbmF2YmFycyB3aXRoIGxpZ2h0IG9yIGRhcmsgYmFja2dyb3VuZC5cblxuLy8gRGFyayBsaW5rcyBhZ2FpbnN0IGEgbGlnaHQgYmFja2dyb3VuZFxuLm5hdmJhci1saWdodCB7XG4gIC5uYXZiYXItYnJhbmQge1xuICAgIGNvbG9yOiAkbmF2YmFyLWxpZ2h0LWJyYW5kLWNvbG9yO1xuXG4gICAgQGluY2x1ZGUgaG92ZXItZm9jdXMoKSB7XG4gICAgICBjb2xvcjogJG5hdmJhci1saWdodC1icmFuZC1ob3Zlci1jb2xvcjtcbiAgICB9XG4gIH1cblxuICAubmF2YmFyLW5hdiB7XG4gICAgLm5hdi1saW5rIHtcbiAgICAgIGNvbG9yOiAkbmF2YmFyLWxpZ2h0LWNvbG9yO1xuXG4gICAgICBAaW5jbHVkZSBob3Zlci1mb2N1cygpIHtcbiAgICAgICAgY29sb3I6ICRuYXZiYXItbGlnaHQtaG92ZXItY29sb3I7XG4gICAgICB9XG5cbiAgICAgICYuZGlzYWJsZWQge1xuICAgICAgICBjb2xvcjogJG5hdmJhci1saWdodC1kaXNhYmxlZC1jb2xvcjtcbiAgICAgIH1cbiAgICB9XG5cbiAgICAuc2hvdyA+IC5uYXYtbGluayxcbiAgICAuYWN0aXZlID4gLm5hdi1saW5rLFxuICAgIC5uYXYtbGluay5zaG93LFxuICAgIC5uYXYtbGluay5hY3RpdmUge1xuICAgICAgY29sb3I6ICRuYXZiYXItbGlnaHQtYWN0aXZlLWNvbG9yO1xuICAgIH1cbiAgfVxuXG4gIC5uYXZiYXItdG9nZ2xlciB7XG4gICAgY29sb3I6ICRuYXZiYXItbGlnaHQtY29sb3I7XG4gICAgYm9yZGVyLWNvbG9yOiAkbmF2YmFyLWxpZ2h0LXRvZ2dsZXItYm9yZGVyLWNvbG9yO1xuICB9XG5cbiAgLm5hdmJhci10b2dnbGVyLWljb24ge1xuICAgIGJhY2tncm91bmQtaW1hZ2U6IGVzY2FwZS1zdmcoJG5hdmJhci1saWdodC10b2dnbGVyLWljb24tYmcpO1xuICB9XG5cbiAgLm5hdmJhci10ZXh0IHtcbiAgICBjb2xvcjogJG5hdmJhci1saWdodC1jb2xvcjtcbiAgICBhIHtcbiAgICAgIGNvbG9yOiAkbmF2YmFyLWxpZ2h0LWFjdGl2ZS1jb2xvcjtcblxuICAgICAgQGluY2x1ZGUgaG92ZXItZm9jdXMoKSB7XG4gICAgICAgIGNvbG9yOiAkbmF2YmFyLWxpZ2h0LWFjdGl2ZS1jb2xvcjtcbiAgICAgIH1cbiAgICB9XG4gIH1cbn1cblxuLy8gV2hpdGUgbGlua3MgYWdhaW5zdCBhIGRhcmsgYmFja2dyb3VuZFxuLm5hdmJhci1kYXJrIHtcbiAgLm5hdmJhci1icmFuZCB7XG4gICAgY29sb3I6ICRuYXZiYXItZGFyay1icmFuZC1jb2xvcjtcblxuICAgIEBpbmNsdWRlIGhvdmVyLWZvY3VzKCkge1xuICAgICAgY29sb3I6ICRuYXZiYXItZGFyay1icmFuZC1ob3Zlci1jb2xvcjtcbiAgICB9XG4gIH1cblxuICAubmF2YmFyLW5hdiB7XG4gICAgLm5hdi1saW5rIHtcbiAgICAgIGNvbG9yOiAkbmF2YmFyLWRhcmstY29sb3I7XG5cbiAgICAgIEBpbmNsdWRlIGhvdmVyLWZvY3VzKCkge1xuICAgICAgICBjb2xvcjogJG5hdmJhci1kYXJrLWhvdmVyLWNvbG9yO1xuICAgICAgfVxuXG4gICAgICAmLmRpc2FibGVkIHtcbiAgICAgICAgY29sb3I6ICRuYXZiYXItZGFyay1kaXNhYmxlZC1jb2xvcjtcbiAgICAgIH1cbiAgICB9XG5cbiAgICAuc2hvdyA+IC5uYXYtbGluayxcbiAgICAuYWN0aXZlID4gLm5hdi1saW5rLFxuICAgIC5uYXYtbGluay5zaG93LFxuICAgIC5uYXYtbGluay5hY3RpdmUge1xuICAgICAgY29sb3I6ICRuYXZiYXItZGFyay1hY3RpdmUtY29sb3I7XG4gICAgfVxuICB9XG5cbiAgLm5hdmJhci10b2dnbGVyIHtcbiAgICBjb2xvcjogJG5hdmJhci1kYXJrLWNvbG9yO1xuICAgIGJvcmRlci1jb2xvcjogJG5hdmJhci1kYXJrLXRvZ2dsZXItYm9yZGVyLWNvbG9yO1xuICB9XG5cbiAgLm5hdmJhci10b2dnbGVyLWljb24ge1xuICAgIGJhY2tncm91bmQtaW1hZ2U6IGVzY2FwZS1zdmcoJG5hdmJhci1kYXJrLXRvZ2dsZXItaWNvbi1iZyk7XG4gIH1cblxuICAubmF2YmFyLXRleHQge1xuICAgIGNvbG9yOiAkbmF2YmFyLWRhcmstY29sb3I7XG4gICAgYSB7XG4gICAgICBjb2xvcjogJG5hdmJhci1kYXJrLWFjdGl2ZS1jb2xvcjtcblxuICAgICAgQGluY2x1ZGUgaG92ZXItZm9jdXMoKSB7XG4gICAgICAgIGNvbG9yOiAkbmF2YmFyLWRhcmstYWN0aXZlLWNvbG9yO1xuICAgICAgfVxuICAgIH1cbiAgfVxufVxuIiwiLy9cbi8vIEJhc2Ugc3R5bGVzXG4vL1xuXG4uY2FyZCB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgZGlzcGxheTogZmxleDtcbiAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcbiAgbWluLXdpZHRoOiAwOyAvLyBTZWUgaHR0cHM6Ly9naXRodWIuY29tL3R3YnMvYm9vdHN0cmFwL3B1bGwvMjI3NDAjaXNzdWVjb21tZW50LTMwNTg2ODEwNlxuICBoZWlnaHQ6ICRjYXJkLWhlaWdodDtcbiAgd29yZC13cmFwOiBicmVhay13b3JkO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAkY2FyZC1iZztcbiAgYmFja2dyb3VuZC1jbGlwOiBib3JkZXItYm94O1xuICBib3JkZXI6ICRjYXJkLWJvcmRlci13aWR0aCBzb2xpZCAkY2FyZC1ib3JkZXItY29sb3I7XG4gIEBpbmNsdWRlIGJvcmRlci1yYWRpdXMoJGNhcmQtYm9yZGVyLXJhZGl1cyk7XG5cbiAgPiBociB7XG4gICAgbWFyZ2luLXJpZ2h0OiAwO1xuICAgIG1hcmdpbi1sZWZ0OiAwO1xuICB9XG5cbiAgPiAubGlzdC1ncm91cCB7XG4gICAgYm9yZGVyLXRvcDogaW5oZXJpdDtcbiAgICBib3JkZXItYm90dG9tOiBpbmhlcml0O1xuXG4gICAgJjpmaXJzdC1jaGlsZCB7XG4gICAgICBib3JkZXItdG9wLXdpZHRoOiAwO1xuICAgICAgQGluY2x1ZGUgYm9yZGVyLXRvcC1yYWRpdXMoJGNhcmQtaW5uZXItYm9yZGVyLXJhZGl1cyk7XG4gICAgfVxuXG4gICAgJjpsYXN0LWNoaWxkICB7XG4gICAgICBib3JkZXItYm90dG9tLXdpZHRoOiAwO1xuICAgICAgQGluY2x1ZGUgYm9yZGVyLWJvdHRvbS1yYWRpdXMoJGNhcmQtaW5uZXItYm9yZGVyLXJhZGl1cyk7XG4gICAgfVxuICB9XG59XG5cbi5jYXJkLWJvZHkge1xuICAvLyBFbmFibGUgYGZsZXgtZ3JvdzogMWAgZm9yIGRlY2tzIGFuZCBncm91cHMgc28gdGhhdCBjYXJkIGJsb2NrcyB0YWtlIHVwXG4gIC8vIGFzIG11Y2ggc3BhY2UgYXMgcG9zc2libGUsIGVuc3VyaW5nIGZvb3RlcnMgYXJlIGFsaWduZWQgdG8gdGhlIGJvdHRvbS5cbiAgZmxleDogMSAxIGF1dG87XG4gIC8vIFdvcmthcm91bmQgZm9yIHRoZSBpbWFnZSBzaXplIGJ1ZyBpbiBJRVxuICAvLyBTZWU6IGh0dHBzOi8vZ2l0aHViLmNvbS90d2JzL2Jvb3RzdHJhcC9wdWxsLzI4ODU1XG4gIG1pbi1oZWlnaHQ6IDFweDtcbiAgcGFkZGluZzogJGNhcmQtc3BhY2VyLXg7XG4gIGNvbG9yOiAkY2FyZC1jb2xvcjtcbn1cblxuLmNhcmQtdGl0bGUge1xuICBtYXJnaW4tYm90dG9tOiAkY2FyZC1zcGFjZXIteTtcbn1cblxuLmNhcmQtc3VidGl0bGUge1xuICBtYXJnaW4tdG9wOiAtJGNhcmQtc3BhY2VyLXkgLyAyO1xuICBtYXJnaW4tYm90dG9tOiAwO1xufVxuXG4uY2FyZC10ZXh0Omxhc3QtY2hpbGQge1xuICBtYXJnaW4tYm90dG9tOiAwO1xufVxuXG4uY2FyZC1saW5rIHtcbiAgQGluY2x1ZGUgaG92ZXIoKSB7XG4gICAgdGV4dC1kZWNvcmF0aW9uOiBub25lO1xuICB9XG5cbiAgKyAuY2FyZC1saW5rIHtcbiAgICBtYXJnaW4tbGVmdDogJGNhcmQtc3BhY2VyLXg7XG4gIH1cbn1cblxuLy9cbi8vIE9wdGlvbmFsIHRleHR1YWwgY2Fwc1xuLy9cblxuLmNhcmQtaGVhZGVyIHtcbiAgcGFkZGluZzogJGNhcmQtc3BhY2VyLXkgJGNhcmQtc3BhY2VyLXg7XG4gIG1hcmdpbi1ib3R0b206IDA7IC8vIFJlbW92ZXMgdGhlIGRlZmF1bHQgbWFyZ2luLWJvdHRvbSBvZiA8aE4+XG4gIGNvbG9yOiAkY2FyZC1jYXAtY29sb3I7XG4gIGJhY2tncm91bmQtY29sb3I6ICRjYXJkLWNhcC1iZztcbiAgYm9yZGVyLWJvdHRvbTogJGNhcmQtYm9yZGVyLXdpZHRoIHNvbGlkICRjYXJkLWJvcmRlci1jb2xvcjtcblxuICAmOmZpcnN0LWNoaWxkIHtcbiAgICBAaW5jbHVkZSBib3JkZXItcmFkaXVzKCRjYXJkLWlubmVyLWJvcmRlci1yYWRpdXMgJGNhcmQtaW5uZXItYm9yZGVyLXJhZGl1cyAwIDApO1xuICB9XG5cbiAgKyAubGlzdC1ncm91cCB7XG4gICAgLmxpc3QtZ3JvdXAtaXRlbTpmaXJzdC1jaGlsZCB7XG4gICAgICBib3JkZXItdG9wOiAwO1xuICAgIH1cbiAgfVxufVxuXG4uY2FyZC1mb290ZXIge1xuICBwYWRkaW5nOiAkY2FyZC1zcGFjZXIteSAkY2FyZC1zcGFjZXIteDtcbiAgY29sb3I6ICRjYXJkLWNhcC1jb2xvcjtcbiAgYmFja2dyb3VuZC1jb2xvcjogJGNhcmQtY2FwLWJnO1xuICBib3JkZXItdG9wOiAkY2FyZC1ib3JkZXItd2lkdGggc29saWQgJGNhcmQtYm9yZGVyLWNvbG9yO1xuXG4gICY6bGFzdC1jaGlsZCB7XG4gICAgQGluY2x1ZGUgYm9yZGVyLXJhZGl1cygwIDAgJGNhcmQtaW5uZXItYm9yZGVyLXJhZGl1cyAkY2FyZC1pbm5lci1ib3JkZXItcmFkaXVzKTtcbiAgfVxufVxuXG5cbi8vXG4vLyBIZWFkZXIgbmF2c1xuLy9cblxuLmNhcmQtaGVhZGVyLXRhYnMge1xuICBtYXJnaW4tcmlnaHQ6IC0kY2FyZC1zcGFjZXIteCAvIDI7XG4gIG1hcmdpbi1ib3R0b206IC0kY2FyZC1zcGFjZXIteTtcbiAgbWFyZ2luLWxlZnQ6IC0kY2FyZC1zcGFjZXIteCAvIDI7XG4gIGJvcmRlci1ib3R0b206IDA7XG59XG5cbi5jYXJkLWhlYWRlci1waWxscyB7XG4gIG1hcmdpbi1yaWdodDogLSRjYXJkLXNwYWNlci14IC8gMjtcbiAgbWFyZ2luLWxlZnQ6IC0kY2FyZC1zcGFjZXIteCAvIDI7XG59XG5cbi8vIENhcmQgaW1hZ2Vcbi5jYXJkLWltZy1vdmVybGF5IHtcbiAgcG9zaXRpb246IGFic29sdXRlO1xuICB0b3A6IDA7XG4gIHJpZ2h0OiAwO1xuICBib3R0b206IDA7XG4gIGxlZnQ6IDA7XG4gIHBhZGRpbmc6ICRjYXJkLWltZy1vdmVybGF5LXBhZGRpbmc7XG59XG5cbi5jYXJkLWltZyxcbi5jYXJkLWltZy10b3AsXG4uY2FyZC1pbWctYm90dG9tIHtcbiAgZmxleC1zaHJpbms6IDA7IC8vIEZvciBJRTogaHR0cHM6Ly9naXRodWIuY29tL3R3YnMvYm9vdHN0cmFwL2lzc3Vlcy8yOTM5NlxuICB3aWR0aDogMTAwJTsgLy8gUmVxdWlyZWQgYmVjYXVzZSB3ZSB1c2UgZmxleGJveCBhbmQgdGhpcyBpbmhlcmVudGx5IGFwcGxpZXMgYWxpZ24tc2VsZjogc3RyZXRjaFxufVxuXG4uY2FyZC1pbWcsXG4uY2FyZC1pbWctdG9wIHtcbiAgQGluY2x1ZGUgYm9yZGVyLXRvcC1yYWRpdXMoJGNhcmQtaW5uZXItYm9yZGVyLXJhZGl1cyk7XG59XG5cbi5jYXJkLWltZyxcbi5jYXJkLWltZy1ib3R0b20ge1xuICBAaW5jbHVkZSBib3JkZXItYm90dG9tLXJhZGl1cygkY2FyZC1pbm5lci1ib3JkZXItcmFkaXVzKTtcbn1cblxuXG4vLyBDYXJkIGRlY2tcblxuLmNhcmQtZGVjayB7XG4gIC5jYXJkIHtcbiAgICBtYXJnaW4tYm90dG9tOiAkY2FyZC1kZWNrLW1hcmdpbjtcbiAgfVxuXG4gIEBpbmNsdWRlIG1lZGlhLWJyZWFrcG9pbnQtdXAoc20pIHtcbiAgICBkaXNwbGF5OiBmbGV4O1xuICAgIGZsZXgtZmxvdzogcm93IHdyYXA7XG4gICAgbWFyZ2luLXJpZ2h0OiAtJGNhcmQtZGVjay1tYXJnaW47XG4gICAgbWFyZ2luLWxlZnQ6IC0kY2FyZC1kZWNrLW1hcmdpbjtcblxuICAgIC5jYXJkIHtcbiAgICAgIC8vIEZsZXhidWdzICM0OiBodHRwczovL2dpdGh1Yi5jb20vcGhpbGlwd2FsdG9uL2ZsZXhidWdzI2ZsZXhidWctNFxuICAgICAgZmxleDogMSAwIDAlO1xuICAgICAgbWFyZ2luLXJpZ2h0OiAkY2FyZC1kZWNrLW1hcmdpbjtcbiAgICAgIG1hcmdpbi1ib3R0b206IDA7IC8vIE92ZXJyaWRlIHRoZSBkZWZhdWx0XG4gICAgICBtYXJnaW4tbGVmdDogJGNhcmQtZGVjay1tYXJnaW47XG4gICAgfVxuICB9XG59XG5cblxuLy9cbi8vIENhcmQgZ3JvdXBzXG4vL1xuXG4uY2FyZC1ncm91cCB7XG4gIC8vIFRoZSBjaGlsZCBzZWxlY3RvciBhbGxvd3MgbmVzdGVkIGAuY2FyZGAgd2l0aGluIGAuY2FyZC1ncm91cGBcbiAgLy8gdG8gZGlzcGxheSBwcm9wZXJseS5cbiAgPiAuY2FyZCB7XG4gICAgbWFyZ2luLWJvdHRvbTogJGNhcmQtZ3JvdXAtbWFyZ2luO1xuICB9XG5cbiAgQGluY2x1ZGUgbWVkaWEtYnJlYWtwb2ludC11cChzbSkge1xuICAgIGRpc3BsYXk6IGZsZXg7XG4gICAgZmxleC1mbG93OiByb3cgd3JhcDtcbiAgICAvLyBUaGUgY2hpbGQgc2VsZWN0b3IgYWxsb3dzIG5lc3RlZCBgLmNhcmRgIHdpdGhpbiBgLmNhcmQtZ3JvdXBgXG4gICAgLy8gdG8gZGlzcGxheSBwcm9wZXJseS5cbiAgICA+IC5jYXJkIHtcbiAgICAgIC8vIEZsZXhidWdzICM0OiBodHRwczovL2dpdGh1Yi5jb20vcGhpbGlwd2FsdG9uL2ZsZXhidWdzI2ZsZXhidWctNFxuICAgICAgZmxleDogMSAwIDAlO1xuICAgICAgbWFyZ2luLWJvdHRvbTogMDtcblxuICAgICAgKyAuY2FyZCB7XG4gICAgICAgIG1hcmdpbi1sZWZ0OiAwO1xuICAgICAgICBib3JkZXItbGVmdDogMDtcbiAgICAgIH1cblxuICAgICAgLy8gSGFuZGxlIHJvdW5kZWQgY29ybmVyc1xuICAgICAgQGlmICRlbmFibGUtcm91bmRlZCB7XG4gICAgICAgICY6bm90KDpsYXN0LWNoaWxkKSB7XG4gICAgICAgICAgQGluY2x1ZGUgYm9yZGVyLXJpZ2h0LXJhZGl1cygwKTtcblxuICAgICAgICAgIC5jYXJkLWltZy10b3AsXG4gICAgICAgICAgLmNhcmQtaGVhZGVyIHtcbiAgICAgICAgICAgIC8vIHN0eWxlbGludC1kaXNhYmxlLW5leHQtbGluZSBwcm9wZXJ0eS1ibGFja2xpc3RcbiAgICAgICAgICAgIGJvcmRlci10b3AtcmlnaHQtcmFkaXVzOiAwO1xuICAgICAgICAgIH1cbiAgICAgICAgICAuY2FyZC1pbWctYm90dG9tLFxuICAgICAgICAgIC5jYXJkLWZvb3RlciB7XG4gICAgICAgICAgICAvLyBzdHlsZWxpbnQtZGlzYWJsZS1uZXh0LWxpbmUgcHJvcGVydHktYmxhY2tsaXN0XG4gICAgICAgICAgICBib3JkZXItYm90dG9tLXJpZ2h0LXJhZGl1czogMDtcbiAgICAgICAgICB9XG4gICAgICAgIH1cblxuICAgICAgICAmOm5vdCg6Zmlyc3QtY2hpbGQpIHtcbiAgICAgICAgICBAaW5jbHVkZSBib3JkZXItbGVmdC1yYWRpdXMoMCk7XG5cbiAgICAgICAgICAuY2FyZC1pbWctdG9wLFxuICAgICAgICAgIC5jYXJkLWhlYWRlciB7XG4gICAgICAgICAgICAvLyBzdHlsZWxpbnQtZGlzYWJsZS1uZXh0LWxpbmUgcHJvcGVydHktYmxhY2tsaXN0XG4gICAgICAgICAgICBib3JkZXItdG9wLWxlZnQtcmFkaXVzOiAwO1xuICAgICAgICAgIH1cbiAgICAgICAgICAuY2FyZC1pbWctYm90dG9tLFxuICAgICAgICAgIC5jYXJkLWZvb3RlciB7XG4gICAgICAgICAgICAvLyBzdHlsZWxpbnQtZGlzYWJsZS1uZXh0LWxpbmUgcHJvcGVydHktYmxhY2tsaXN0XG4gICAgICAgICAgICBib3JkZXItYm90dG9tLWxlZnQtcmFkaXVzOiAwO1xuICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgICAgfVxuICAgIH1cbiAgfVxufVxuXG5cbi8vXG4vLyBDb2x1bW5zXG4vL1xuXG4uY2FyZC1jb2x1bW5zIHtcbiAgLmNhcmQge1xuICAgIG1hcmdpbi1ib3R0b206ICRjYXJkLWNvbHVtbnMtbWFyZ2luO1xuICB9XG5cbiAgQGluY2x1ZGUgbWVkaWEtYnJlYWtwb2ludC11cChzbSkge1xuICAgIGNvbHVtbi1jb3VudDogJGNhcmQtY29sdW1ucy1jb3VudDtcbiAgICBjb2x1bW4tZ2FwOiAkY2FyZC1jb2x1bW5zLWdhcDtcbiAgICBvcnBoYW5zOiAxO1xuICAgIHdpZG93czogMTtcblxuICAgIC5jYXJkIHtcbiAgICAgIGRpc3BsYXk6IGlubGluZS1ibG9jazsgLy8gRG9uJ3QgbGV0IHRoZW0gdmVydGljYWxseSBzcGFuIG11bHRpcGxlIGNvbHVtbnNcbiAgICAgIHdpZHRoOiAxMDAlOyAvLyBEb24ndCBsZXQgdGhlaXIgd2lkdGggY2hhbmdlXG4gICAgfVxuICB9XG59XG5cblxuLy9cbi8vIEFjY29yZGlvblxuLy9cblxuLmFjY29yZGlvbiB7XG4gID4gLmNhcmQge1xuICAgIG92ZXJmbG93OiBoaWRkZW47XG5cbiAgICAmOm5vdCg6bGFzdC1vZi10eXBlKSB7XG4gICAgICBib3JkZXItYm90dG9tOiAwO1xuICAgICAgQGluY2x1ZGUgYm9yZGVyLWJvdHRvbS1yYWRpdXMoMCk7XG4gICAgfVxuXG4gICAgJjpub3QoOmZpcnN0LW9mLXR5cGUpIHtcbiAgICAgIEBpbmNsdWRlIGJvcmRlci10b3AtcmFkaXVzKDApO1xuICAgIH1cblxuICAgID4gLmNhcmQtaGVhZGVyIHtcbiAgICAgIEBpbmNsdWRlIGJvcmRlci1yYWRpdXMoMCk7XG4gICAgICBtYXJnaW4tYm90dG9tOiAtJGNhcmQtYm9yZGVyLXdpZHRoO1xuICAgIH1cbiAgfVxufVxuIiwiLmJyZWFkY3J1bWIge1xuICBkaXNwbGF5OiBmbGV4O1xuICBmbGV4LXdyYXA6IHdyYXA7XG4gIHBhZGRpbmc6ICRicmVhZGNydW1iLXBhZGRpbmcteSAkYnJlYWRjcnVtYi1wYWRkaW5nLXg7XG4gIG1hcmdpbi1ib3R0b206ICRicmVhZGNydW1iLW1hcmdpbi1ib3R0b207XG4gIEBpbmNsdWRlIGZvbnQtc2l6ZSgkYnJlYWRjcnVtYi1mb250LXNpemUpO1xuICBsaXN0LXN0eWxlOiBub25lO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAkYnJlYWRjcnVtYi1iZztcbiAgQGluY2x1ZGUgYm9yZGVyLXJhZGl1cygkYnJlYWRjcnVtYi1ib3JkZXItcmFkaXVzKTtcbn1cblxuLmJyZWFkY3J1bWItaXRlbSB7XG4gIGRpc3BsYXk6IGZsZXg7XG5cbiAgLy8gVGhlIHNlcGFyYXRvciBiZXR3ZWVuIGJyZWFkY3J1bWJzIChieSBkZWZhdWx0LCBhIGZvcndhcmQtc2xhc2g6IFwiL1wiKVxuICArIC5icmVhZGNydW1iLWl0ZW0ge1xuICAgIHBhZGRpbmctbGVmdDogJGJyZWFkY3J1bWItaXRlbS1wYWRkaW5nO1xuXG4gICAgJjo6YmVmb3JlIHtcbiAgICAgIGRpc3BsYXk6IGlubGluZS1ibG9jazsgLy8gU3VwcHJlc3MgdW5kZXJsaW5pbmcgb2YgdGhlIHNlcGFyYXRvciBpbiBtb2Rlcm4gYnJvd3NlcnNcbiAgICAgIHBhZGRpbmctcmlnaHQ6ICRicmVhZGNydW1iLWl0ZW0tcGFkZGluZztcbiAgICAgIGNvbG9yOiAkYnJlYWRjcnVtYi1kaXZpZGVyLWNvbG9yO1xuICAgICAgY29udGVudDogZXNjYXBlLXN2ZygkYnJlYWRjcnVtYi1kaXZpZGVyKTtcbiAgICB9XG4gIH1cblxuICAvLyBJRTktMTEgaGFjayB0byBwcm9wZXJseSBoYW5kbGUgaHlwZXJsaW5rIHVuZGVybGluZXMgZm9yIGJyZWFkY3J1bWJzIGJ1aWx0XG4gIC8vIHdpdGhvdXQgYDx1bD5gcy4gVGhlIGA6OmJlZm9yZWAgcHNldWRvLWVsZW1lbnQgZ2VuZXJhdGVzIGFuIGVsZW1lbnRcbiAgLy8gKndpdGhpbiogdGhlIC5icmVhZGNydW1iLWl0ZW0gYW5kIHRoZXJlYnkgaW5oZXJpdHMgdGhlIGB0ZXh0LWRlY29yYXRpb25gLlxuICAvL1xuICAvLyBUbyB0cmljayBJRSBpbnRvIHN1cHByZXNzaW5nIHRoZSB1bmRlcmxpbmUsIHdlIGdpdmUgdGhlIHBzZXVkby1lbGVtZW50IGFuXG4gIC8vIHVuZGVybGluZSBhbmQgdGhlbiBpbW1lZGlhdGVseSByZW1vdmUgaXQuXG4gICsgLmJyZWFkY3J1bWItaXRlbTpob3Zlcjo6YmVmb3JlIHtcbiAgICB0ZXh0LWRlY29yYXRpb246IHVuZGVybGluZTtcbiAgfVxuICAvLyBzdHlsZWxpbnQtZGlzYWJsZS1uZXh0LWxpbmUgbm8tZHVwbGljYXRlLXNlbGVjdG9yc1xuICArIC5icmVhZGNydW1iLWl0ZW06aG92ZXI6OmJlZm9yZSB7XG4gICAgdGV4dC1kZWNvcmF0aW9uOiBub25lO1xuICB9XG5cbiAgJi5hY3RpdmUge1xuICAgIGNvbG9yOiAkYnJlYWRjcnVtYi1hY3RpdmUtY29sb3I7XG4gIH1cbn1cbiIsIi5wYWdpbmF0aW9uIHtcbiAgZGlzcGxheTogZmxleDtcbiAgQGluY2x1ZGUgbGlzdC11bnN0eWxlZCgpO1xuICBAaW5jbHVkZSBib3JkZXItcmFkaXVzKCk7XG59XG5cbi5wYWdlLWxpbmsge1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIGRpc3BsYXk6IGJsb2NrO1xuICBwYWRkaW5nOiAkcGFnaW5hdGlvbi1wYWRkaW5nLXkgJHBhZ2luYXRpb24tcGFkZGluZy14O1xuICBtYXJnaW4tbGVmdDogLSRwYWdpbmF0aW9uLWJvcmRlci13aWR0aDtcbiAgbGluZS1oZWlnaHQ6ICRwYWdpbmF0aW9uLWxpbmUtaGVpZ2h0O1xuICBjb2xvcjogJHBhZ2luYXRpb24tY29sb3I7XG4gIHRleHQtZGVjb3JhdGlvbjogaWYoJGxpbmstZGVjb3JhdGlvbiA9PSBub25lLCBudWxsLCBub25lKTtcbiAgYmFja2dyb3VuZC1jb2xvcjogJHBhZ2luYXRpb24tYmc7XG4gIGJvcmRlcjogJHBhZ2luYXRpb24tYm9yZGVyLXdpZHRoIHNvbGlkICRwYWdpbmF0aW9uLWJvcmRlci1jb2xvcjtcblxuICAmOmhvdmVyIHtcbiAgICB6LWluZGV4OiAyO1xuICAgIGNvbG9yOiAkcGFnaW5hdGlvbi1ob3Zlci1jb2xvcjtcbiAgICB0ZXh0LWRlY29yYXRpb246IG5vbmU7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogJHBhZ2luYXRpb24taG92ZXItYmc7XG4gICAgYm9yZGVyLWNvbG9yOiAkcGFnaW5hdGlvbi1ob3Zlci1ib3JkZXItY29sb3I7XG4gIH1cblxuICAmOmZvY3VzIHtcbiAgICB6LWluZGV4OiAzO1xuICAgIG91dGxpbmU6ICRwYWdpbmF0aW9uLWZvY3VzLW91dGxpbmU7XG4gICAgYm94LXNoYWRvdzogJHBhZ2luYXRpb24tZm9jdXMtYm94LXNoYWRvdztcbiAgfVxufVxuXG4ucGFnZS1pdGVtIHtcbiAgJjpmaXJzdC1jaGlsZCB7XG4gICAgLnBhZ2UtbGluayB7XG4gICAgICBtYXJnaW4tbGVmdDogMDtcbiAgICAgIEBpbmNsdWRlIGJvcmRlci1sZWZ0LXJhZGl1cygkYm9yZGVyLXJhZGl1cyk7XG4gICAgfVxuICB9XG4gICY6bGFzdC1jaGlsZCB7XG4gICAgLnBhZ2UtbGluayB7XG4gICAgICBAaW5jbHVkZSBib3JkZXItcmlnaHQtcmFkaXVzKCRib3JkZXItcmFkaXVzKTtcbiAgICB9XG4gIH1cblxuICAmLmFjdGl2ZSAucGFnZS1saW5rIHtcbiAgICB6LWluZGV4OiAzO1xuICAgIGNvbG9yOiAkcGFnaW5hdGlvbi1hY3RpdmUtY29sb3I7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogJHBhZ2luYXRpb24tYWN0aXZlLWJnO1xuICAgIGJvcmRlci1jb2xvcjogJHBhZ2luYXRpb24tYWN0aXZlLWJvcmRlci1jb2xvcjtcbiAgfVxuXG4gICYuZGlzYWJsZWQgLnBhZ2UtbGluayB7XG4gICAgY29sb3I6ICRwYWdpbmF0aW9uLWRpc2FibGVkLWNvbG9yO1xuICAgIHBvaW50ZXItZXZlbnRzOiBub25lO1xuICAgIC8vIE9waW5pb25hdGVkOiByZW1vdmUgdGhlIFwiaGFuZFwiIGN1cnNvciBzZXQgcHJldmlvdXNseSBmb3IgLnBhZ2UtbGlua1xuICAgIGN1cnNvcjogYXV0bztcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkcGFnaW5hdGlvbi1kaXNhYmxlZC1iZztcbiAgICBib3JkZXItY29sb3I6ICRwYWdpbmF0aW9uLWRpc2FibGVkLWJvcmRlci1jb2xvcjtcbiAgfVxufVxuXG5cbi8vXG4vLyBTaXppbmdcbi8vXG5cbi5wYWdpbmF0aW9uLWxnIHtcbiAgQGluY2x1ZGUgcGFnaW5hdGlvbi1zaXplKCRwYWdpbmF0aW9uLXBhZGRpbmcteS1sZywgJHBhZ2luYXRpb24tcGFkZGluZy14LWxnLCAkZm9udC1zaXplLWxnLCAkbGluZS1oZWlnaHQtbGcsICRib3JkZXItcmFkaXVzLWxnKTtcbn1cblxuLnBhZ2luYXRpb24tc20ge1xuICBAaW5jbHVkZSBwYWdpbmF0aW9uLXNpemUoJHBhZ2luYXRpb24tcGFkZGluZy15LXNtLCAkcGFnaW5hdGlvbi1wYWRkaW5nLXgtc20sICRmb250LXNpemUtc20sICRsaW5lLWhlaWdodC1zbSwgJGJvcmRlci1yYWRpdXMtc20pO1xufVxuIiwiLy8gUGFnaW5hdGlvblxuXG5AbWl4aW4gcGFnaW5hdGlvbi1zaXplKCRwYWRkaW5nLXksICRwYWRkaW5nLXgsICRmb250LXNpemUsICRsaW5lLWhlaWdodCwgJGJvcmRlci1yYWRpdXMpIHtcbiAgLnBhZ2UtbGluayB7XG4gICAgcGFkZGluZzogJHBhZGRpbmcteSAkcGFkZGluZy14O1xuICAgIEBpbmNsdWRlIGZvbnQtc2l6ZSgkZm9udC1zaXplKTtcbiAgICBsaW5lLWhlaWdodDogJGxpbmUtaGVpZ2h0O1xuICB9XG5cbiAgLnBhZ2UtaXRlbSB7XG4gICAgJjpmaXJzdC1jaGlsZCB7XG4gICAgICAucGFnZS1saW5rIHtcbiAgICAgICAgQGluY2x1ZGUgYm9yZGVyLWxlZnQtcmFkaXVzKCRib3JkZXItcmFkaXVzKTtcbiAgICAgIH1cbiAgICB9XG4gICAgJjpsYXN0LWNoaWxkIHtcbiAgICAgIC5wYWdlLWxpbmsge1xuICAgICAgICBAaW5jbHVkZSBib3JkZXItcmlnaHQtcmFkaXVzKCRib3JkZXItcmFkaXVzKTtcbiAgICAgIH1cbiAgICB9XG4gIH1cbn1cbiIsIi8vIEJhc2UgY2xhc3Ncbi8vXG4vLyBSZXF1aXJlcyBvbmUgb2YgdGhlIGNvbnRleHR1YWwsIGNvbG9yIG1vZGlmaWVyIGNsYXNzZXMgZm9yIGBjb2xvcmAgYW5kXG4vLyBgYmFja2dyb3VuZC1jb2xvcmAuXG5cbi5iYWRnZSB7XG4gIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgcGFkZGluZzogJGJhZGdlLXBhZGRpbmcteSAkYmFkZ2UtcGFkZGluZy14O1xuICBAaW5jbHVkZSBmb250LXNpemUoJGJhZGdlLWZvbnQtc2l6ZSk7XG4gIGZvbnQtd2VpZ2h0OiAkYmFkZ2UtZm9udC13ZWlnaHQ7XG4gIGxpbmUtaGVpZ2h0OiAxO1xuICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gIHdoaXRlLXNwYWNlOiBub3dyYXA7XG4gIHZlcnRpY2FsLWFsaWduOiBiYXNlbGluZTtcbiAgQGluY2x1ZGUgYm9yZGVyLXJhZGl1cygkYmFkZ2UtYm9yZGVyLXJhZGl1cyk7XG4gIEBpbmNsdWRlIHRyYW5zaXRpb24oJGJhZGdlLXRyYW5zaXRpb24pO1xuXG4gIEBhdC1yb290IGEjeyZ9IHtcbiAgICBAaW5jbHVkZSBob3Zlci1mb2N1cygpIHtcbiAgICAgIHRleHQtZGVjb3JhdGlvbjogbm9uZTtcbiAgICB9XG4gIH1cblxuICAvLyBFbXB0eSBiYWRnZXMgY29sbGFwc2UgYXV0b21hdGljYWxseVxuICAmOmVtcHR5IHtcbiAgICBkaXNwbGF5OiBub25lO1xuICB9XG59XG5cbi8vIFF1aWNrIGZpeCBmb3IgYmFkZ2VzIGluIGJ1dHRvbnNcbi5idG4gLmJhZGdlIHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICB0b3A6IC0xcHg7XG59XG5cbi8vIFBpbGwgYmFkZ2VzXG4vL1xuLy8gTWFrZSB0aGVtIGV4dHJhIHJvdW5kZWQgd2l0aCBhIG1vZGlmaWVyIHRvIHJlcGxhY2UgdjMncyBiYWRnZXMuXG5cbi5iYWRnZS1waWxsIHtcbiAgcGFkZGluZy1yaWdodDogJGJhZGdlLXBpbGwtcGFkZGluZy14O1xuICBwYWRkaW5nLWxlZnQ6ICRiYWRnZS1waWxsLXBhZGRpbmcteDtcbiAgQGluY2x1ZGUgYm9yZGVyLXJhZGl1cygkYmFkZ2UtcGlsbC1ib3JkZXItcmFkaXVzKTtcbn1cblxuLy8gQ29sb3JzXG4vL1xuLy8gQ29udGV4dHVhbCB2YXJpYXRpb25zIChsaW5rZWQgYmFkZ2VzIGdldCBkYXJrZXIgb24gOmhvdmVyKS5cblxuQGVhY2ggJGNvbG9yLCAkdmFsdWUgaW4gJHRoZW1lLWNvbG9ycyB7XG4gIC5iYWRnZS0jeyRjb2xvcn0ge1xuICAgIEBpbmNsdWRlIGJhZGdlLXZhcmlhbnQoJHZhbHVlKTtcbiAgfVxufVxuIiwiQG1peGluIGJhZGdlLXZhcmlhbnQoJGJnKSB7XG4gIGNvbG9yOiBjb2xvci15aXEoJGJnKTtcbiAgYmFja2dyb3VuZC1jb2xvcjogJGJnO1xuXG4gIEBhdC1yb290IGEjeyZ9IHtcbiAgICBAaW5jbHVkZSBob3Zlci1mb2N1cygpIHtcbiAgICAgIGNvbG9yOiBjb2xvci15aXEoJGJnKTtcbiAgICAgIGJhY2tncm91bmQtY29sb3I6IGRhcmtlbigkYmcsIDEwJSk7XG4gICAgfVxuXG4gICAgJjpmb2N1cyxcbiAgICAmLmZvY3VzIHtcbiAgICAgIG91dGxpbmU6IDA7XG4gICAgICBib3gtc2hhZG93OiAwIDAgMCAkYmFkZ2UtZm9jdXMtd2lkdGggcmdiYSgkYmcsIC41KTtcbiAgICB9XG4gIH1cbn1cbiIsIi5qdW1ib3Ryb24ge1xuICBwYWRkaW5nOiAkanVtYm90cm9uLXBhZGRpbmcgKCRqdW1ib3Ryb24tcGFkZGluZyAvIDIpO1xuICBtYXJnaW4tYm90dG9tOiAkanVtYm90cm9uLXBhZGRpbmc7XG4gIGNvbG9yOiAkanVtYm90cm9uLWNvbG9yO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAkanVtYm90cm9uLWJnO1xuICBAaW5jbHVkZSBib3JkZXItcmFkaXVzKCRib3JkZXItcmFkaXVzLWxnKTtcblxuICBAaW5jbHVkZSBtZWRpYS1icmVha3BvaW50LXVwKHNtKSB7XG4gICAgcGFkZGluZzogKCRqdW1ib3Ryb24tcGFkZGluZyAqIDIpICRqdW1ib3Ryb24tcGFkZGluZztcbiAgfVxufVxuXG4uanVtYm90cm9uLWZsdWlkIHtcbiAgcGFkZGluZy1yaWdodDogMDtcbiAgcGFkZGluZy1sZWZ0OiAwO1xuICBAaW5jbHVkZSBib3JkZXItcmFkaXVzKDApO1xufVxuIiwiLy9cbi8vIEJhc2Ugc3R5bGVzXG4vL1xuXG4uYWxlcnQge1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIHBhZGRpbmc6ICRhbGVydC1wYWRkaW5nLXkgJGFsZXJ0LXBhZGRpbmcteDtcbiAgbWFyZ2luLWJvdHRvbTogJGFsZXJ0LW1hcmdpbi1ib3R0b207XG4gIGJvcmRlcjogJGFsZXJ0LWJvcmRlci13aWR0aCBzb2xpZCB0cmFuc3BhcmVudDtcbiAgQGluY2x1ZGUgYm9yZGVyLXJhZGl1cygkYWxlcnQtYm9yZGVyLXJhZGl1cyk7XG59XG5cbi8vIEhlYWRpbmdzIGZvciBsYXJnZXIgYWxlcnRzXG4uYWxlcnQtaGVhZGluZyB7XG4gIC8vIFNwZWNpZmllZCB0byBwcmV2ZW50IGNvbmZsaWN0cyBvZiBjaGFuZ2luZyAkaGVhZGluZ3MtY29sb3JcbiAgY29sb3I6IGluaGVyaXQ7XG59XG5cbi8vIFByb3ZpZGUgY2xhc3MgZm9yIGxpbmtzIHRoYXQgbWF0Y2ggYWxlcnRzXG4uYWxlcnQtbGluayB7XG4gIGZvbnQtd2VpZ2h0OiAkYWxlcnQtbGluay1mb250LXdlaWdodDtcbn1cblxuXG4vLyBEaXNtaXNzaWJsZSBhbGVydHNcbi8vXG4vLyBFeHBhbmQgdGhlIHJpZ2h0IHBhZGRpbmcgYW5kIGFjY291bnQgZm9yIHRoZSBjbG9zZSBidXR0b24ncyBwb3NpdGlvbmluZy5cblxuLmFsZXJ0LWRpc21pc3NpYmxlIHtcbiAgcGFkZGluZy1yaWdodDogJGNsb3NlLWZvbnQtc2l6ZSArICRhbGVydC1wYWRkaW5nLXggKiAyO1xuXG4gIC8vIEFkanVzdCBjbG9zZSBsaW5rIHBvc2l0aW9uXG4gIC5jbG9zZSB7XG4gICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgIHRvcDogMDtcbiAgICByaWdodDogMDtcbiAgICBwYWRkaW5nOiAkYWxlcnQtcGFkZGluZy15ICRhbGVydC1wYWRkaW5nLXg7XG4gICAgY29sb3I6IGluaGVyaXQ7XG4gIH1cbn1cblxuXG4vLyBBbHRlcm5hdGUgc3R5bGVzXG4vL1xuLy8gR2VuZXJhdGUgY29udGV4dHVhbCBtb2RpZmllciBjbGFzc2VzIGZvciBjb2xvcml6aW5nIHRoZSBhbGVydC5cblxuQGVhY2ggJGNvbG9yLCAkdmFsdWUgaW4gJHRoZW1lLWNvbG9ycyB7XG4gIC5hbGVydC0jeyRjb2xvcn0ge1xuICAgIEBpbmNsdWRlIGFsZXJ0LXZhcmlhbnQodGhlbWUtY29sb3ItbGV2ZWwoJGNvbG9yLCAkYWxlcnQtYmctbGV2ZWwpLCB0aGVtZS1jb2xvci1sZXZlbCgkY29sb3IsICRhbGVydC1ib3JkZXItbGV2ZWwpLCB0aGVtZS1jb2xvci1sZXZlbCgkY29sb3IsICRhbGVydC1jb2xvci1sZXZlbCkpO1xuICB9XG59XG4iLCJAbWl4aW4gYWxlcnQtdmFyaWFudCgkYmFja2dyb3VuZCwgJGJvcmRlciwgJGNvbG9yKSB7XG4gIGNvbG9yOiAkY29sb3I7XG4gIEBpbmNsdWRlIGdyYWRpZW50LWJnKCRiYWNrZ3JvdW5kKTtcbiAgYm9yZGVyLWNvbG9yOiAkYm9yZGVyO1xuXG4gIGhyIHtcbiAgICBib3JkZXItdG9wLWNvbG9yOiBkYXJrZW4oJGJvcmRlciwgNSUpO1xuICB9XG5cbiAgLmFsZXJ0LWxpbmsge1xuICAgIGNvbG9yOiBkYXJrZW4oJGNvbG9yLCAxMCUpO1xuICB9XG59XG4iLCIvLyBEaXNhYmxlIGFuaW1hdGlvbiBpZiB0cmFuc2l0aW9ucyBhcmUgZGlzYWJsZWRcbkBpZiAkZW5hYmxlLXRyYW5zaXRpb25zIHtcbiAgQGtleWZyYW1lcyBwcm9ncmVzcy1iYXItc3RyaXBlcyB7XG4gICAgZnJvbSB7IGJhY2tncm91bmQtcG9zaXRpb246ICRwcm9ncmVzcy1oZWlnaHQgMDsgfVxuICAgIHRvIHsgYmFja2dyb3VuZC1wb3NpdGlvbjogMCAwOyB9XG4gIH1cbn1cblxuLnByb2dyZXNzIHtcbiAgZGlzcGxheTogZmxleDtcbiAgaGVpZ2h0OiAkcHJvZ3Jlc3MtaGVpZ2h0O1xuICBvdmVyZmxvdzogaGlkZGVuOyAvLyBmb3JjZSByb3VuZGVkIGNvcm5lcnMgYnkgY3JvcHBpbmcgaXRcbiAgbGluZS1oZWlnaHQ6IDA7XG4gIEBpbmNsdWRlIGZvbnQtc2l6ZSgkcHJvZ3Jlc3MtZm9udC1zaXplKTtcbiAgYmFja2dyb3VuZC1jb2xvcjogJHByb2dyZXNzLWJnO1xuICBAaW5jbHVkZSBib3JkZXItcmFkaXVzKCRwcm9ncmVzcy1ib3JkZXItcmFkaXVzKTtcbiAgQGluY2x1ZGUgYm94LXNoYWRvdygkcHJvZ3Jlc3MtYm94LXNoYWRvdyk7XG59XG5cbi5wcm9ncmVzcy1iYXIge1xuICBkaXNwbGF5OiBmbGV4O1xuICBmbGV4LWRpcmVjdGlvbjogY29sdW1uO1xuICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcbiAgb3ZlcmZsb3c6IGhpZGRlbjtcbiAgY29sb3I6ICRwcm9ncmVzcy1iYXItY29sb3I7XG4gIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgd2hpdGUtc3BhY2U6IG5vd3JhcDtcbiAgYmFja2dyb3VuZC1jb2xvcjogJHByb2dyZXNzLWJhci1iZztcbiAgQGluY2x1ZGUgdHJhbnNpdGlvbigkcHJvZ3Jlc3MtYmFyLXRyYW5zaXRpb24pO1xufVxuXG4ucHJvZ3Jlc3MtYmFyLXN0cmlwZWQge1xuICBAaW5jbHVkZSBncmFkaWVudC1zdHJpcGVkKCk7XG4gIGJhY2tncm91bmQtc2l6ZTogJHByb2dyZXNzLWhlaWdodCAkcHJvZ3Jlc3MtaGVpZ2h0O1xufVxuXG5AaWYgJGVuYWJsZS10cmFuc2l0aW9ucyB7XG4gIC5wcm9ncmVzcy1iYXItYW5pbWF0ZWQge1xuICAgIGFuaW1hdGlvbjogcHJvZ3Jlc3MtYmFyLXN0cmlwZXMgJHByb2dyZXNzLWJhci1hbmltYXRpb24tdGltaW5nO1xuXG4gICAgQGlmICRlbmFibGUtcHJlZmVycy1yZWR1Y2VkLW1vdGlvbi1tZWRpYS1xdWVyeSB7XG4gICAgICBAbWVkaWEgKHByZWZlcnMtcmVkdWNlZC1tb3Rpb246IHJlZHVjZSkge1xuICAgICAgICBhbmltYXRpb246IG5vbmU7XG4gICAgICB9XG4gICAgfVxuICB9XG59XG4iLCIubWVkaWEge1xuICBkaXNwbGF5OiBmbGV4O1xuICBhbGlnbi1pdGVtczogZmxleC1zdGFydDtcbn1cblxuLm1lZGlhLWJvZHkge1xuICBmbGV4OiAxO1xufVxuIiwiLy8gQmFzZSBjbGFzc1xuLy9cbi8vIEVhc2lseSB1c2FibGUgb24gPHVsPiwgPG9sPiwgb3IgPGRpdj4uXG5cbi5saXN0LWdyb3VwIHtcbiAgZGlzcGxheTogZmxleDtcbiAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcblxuICAvLyBObyBuZWVkIHRvIHNldCBsaXN0LXN0eWxlOiBub25lOyBzaW5jZSAubGlzdC1ncm91cC1pdGVtIGlzIGJsb2NrIGxldmVsXG4gIHBhZGRpbmctbGVmdDogMDsgLy8gcmVzZXQgcGFkZGluZyBiZWNhdXNlIHVsIGFuZCBvbFxuICBtYXJnaW4tYm90dG9tOiAwO1xuICBAaW5jbHVkZSBib3JkZXItcmFkaXVzKCRsaXN0LWdyb3VwLWJvcmRlci1yYWRpdXMpO1xufVxuXG5cbi8vIEludGVyYWN0aXZlIGxpc3QgaXRlbXNcbi8vXG4vLyBVc2UgYW5jaG9yIG9yIGJ1dHRvbiBlbGVtZW50cyBpbnN0ZWFkIG9mIGBsaWBzIG9yIGBkaXZgcyB0byBjcmVhdGUgaW50ZXJhY3RpdmVcbi8vIGxpc3QgaXRlbXMuIEluY2x1ZGVzIGFuIGV4dHJhIGAuYWN0aXZlYCBtb2RpZmllciBjbGFzcyBmb3Igc2VsZWN0ZWQgaXRlbXMuXG5cbi5saXN0LWdyb3VwLWl0ZW0tYWN0aW9uIHtcbiAgd2lkdGg6IDEwMCU7IC8vIEZvciBgPGJ1dHRvbj5gcyAoYW5jaG9ycyBiZWNvbWUgMTAwJSBieSBkZWZhdWx0IHRob3VnaClcbiAgY29sb3I6ICRsaXN0LWdyb3VwLWFjdGlvbi1jb2xvcjtcbiAgdGV4dC1hbGlnbjogaW5oZXJpdDsgLy8gRm9yIGA8YnV0dG9uPmBzIChhbmNob3JzIGluaGVyaXQpXG5cbiAgLy8gSG92ZXIgc3RhdGVcbiAgQGluY2x1ZGUgaG92ZXItZm9jdXMoKSB7XG4gICAgei1pbmRleDogMTsgLy8gUGxhY2UgaG92ZXIvZm9jdXMgaXRlbXMgYWJvdmUgdGhlaXIgc2libGluZ3MgZm9yIHByb3BlciBib3JkZXIgc3R5bGluZ1xuICAgIGNvbG9yOiAkbGlzdC1ncm91cC1hY3Rpb24taG92ZXItY29sb3I7XG4gICAgdGV4dC1kZWNvcmF0aW9uOiBub25lO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICRsaXN0LWdyb3VwLWhvdmVyLWJnO1xuICB9XG5cbiAgJjphY3RpdmUge1xuICAgIGNvbG9yOiAkbGlzdC1ncm91cC1hY3Rpb24tYWN0aXZlLWNvbG9yO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICRsaXN0LWdyb3VwLWFjdGlvbi1hY3RpdmUtYmc7XG4gIH1cbn1cblxuXG4vLyBJbmRpdmlkdWFsIGxpc3QgaXRlbXNcbi8vXG4vLyBVc2Ugb24gYGxpYHMgb3IgYGRpdmBzIHdpdGhpbiB0aGUgYC5saXN0LWdyb3VwYCBwYXJlbnQuXG5cbi5saXN0LWdyb3VwLWl0ZW0ge1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIGRpc3BsYXk6IGJsb2NrO1xuICBwYWRkaW5nOiAkbGlzdC1ncm91cC1pdGVtLXBhZGRpbmcteSAkbGlzdC1ncm91cC1pdGVtLXBhZGRpbmcteDtcbiAgY29sb3I6ICRsaXN0LWdyb3VwLWNvbG9yO1xuICB0ZXh0LWRlY29yYXRpb246IGlmKCRsaW5rLWRlY29yYXRpb24gPT0gbm9uZSwgbnVsbCwgbm9uZSk7XG4gIGJhY2tncm91bmQtY29sb3I6ICRsaXN0LWdyb3VwLWJnO1xuICBib3JkZXI6ICRsaXN0LWdyb3VwLWJvcmRlci13aWR0aCBzb2xpZCAkbGlzdC1ncm91cC1ib3JkZXItY29sb3I7XG5cbiAgJjpmaXJzdC1jaGlsZCB7XG4gICAgQGluY2x1ZGUgYm9yZGVyLXRvcC1yYWRpdXMoaW5oZXJpdCk7XG4gIH1cblxuICAmOmxhc3QtY2hpbGQge1xuICAgIEBpbmNsdWRlIGJvcmRlci1ib3R0b20tcmFkaXVzKGluaGVyaXQpO1xuICB9XG5cbiAgJi5kaXNhYmxlZCxcbiAgJjpkaXNhYmxlZCB7XG4gICAgY29sb3I6ICRsaXN0LWdyb3VwLWRpc2FibGVkLWNvbG9yO1xuICAgIHBvaW50ZXItZXZlbnRzOiBub25lO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICRsaXN0LWdyb3VwLWRpc2FibGVkLWJnO1xuICB9XG5cbiAgLy8gSW5jbHVkZSBib3RoIGhlcmUgZm9yIGA8YT5gcyBhbmQgYDxidXR0b24+YHNcbiAgJi5hY3RpdmUge1xuICAgIHotaW5kZXg6IDI7IC8vIFBsYWNlIGFjdGl2ZSBpdGVtcyBhYm92ZSB0aGVpciBzaWJsaW5ncyBmb3IgcHJvcGVyIGJvcmRlciBzdHlsaW5nXG4gICAgY29sb3I6ICRsaXN0LWdyb3VwLWFjdGl2ZS1jb2xvcjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkbGlzdC1ncm91cC1hY3RpdmUtYmc7XG4gICAgYm9yZGVyLWNvbG9yOiAkbGlzdC1ncm91cC1hY3RpdmUtYm9yZGVyLWNvbG9yO1xuICB9XG5cbiAgJiArICYge1xuICAgIGJvcmRlci10b3Atd2lkdGg6IDA7XG5cbiAgICAmLmFjdGl2ZSB7XG4gICAgICBtYXJnaW4tdG9wOiAtJGxpc3QtZ3JvdXAtYm9yZGVyLXdpZHRoO1xuICAgICAgYm9yZGVyLXRvcC13aWR0aDogJGxpc3QtZ3JvdXAtYm9yZGVyLXdpZHRoO1xuICAgIH1cbiAgfVxufVxuXG5cbi8vIEhvcml6b250YWxcbi8vXG4vLyBDaGFuZ2UgdGhlIGxheW91dCBvZiBsaXN0IGdyb3VwIGl0ZW1zIGZyb20gdmVydGljYWwgKGRlZmF1bHQpIHRvIGhvcml6b250YWwuXG5cbkBlYWNoICRicmVha3BvaW50IGluIG1hcC1rZXlzKCRncmlkLWJyZWFrcG9pbnRzKSB7XG4gIEBpbmNsdWRlIG1lZGlhLWJyZWFrcG9pbnQtdXAoJGJyZWFrcG9pbnQpIHtcbiAgICAkaW5maXg6IGJyZWFrcG9pbnQtaW5maXgoJGJyZWFrcG9pbnQsICRncmlkLWJyZWFrcG9pbnRzKTtcblxuICAgIC5saXN0LWdyb3VwLWhvcml6b250YWwjeyRpbmZpeH0ge1xuICAgICAgZmxleC1kaXJlY3Rpb246IHJvdztcblxuICAgICAgPiAubGlzdC1ncm91cC1pdGVtIHtcbiAgICAgICAgJjpmaXJzdC1jaGlsZCB7XG4gICAgICAgICAgQGluY2x1ZGUgYm9yZGVyLWJvdHRvbS1sZWZ0LXJhZGl1cygkbGlzdC1ncm91cC1ib3JkZXItcmFkaXVzKTtcbiAgICAgICAgICBAaW5jbHVkZSBib3JkZXItdG9wLXJpZ2h0LXJhZGl1cygwKTtcbiAgICAgICAgfVxuXG4gICAgICAgICY6bGFzdC1jaGlsZCB7XG4gICAgICAgICAgQGluY2x1ZGUgYm9yZGVyLXRvcC1yaWdodC1yYWRpdXMoJGxpc3QtZ3JvdXAtYm9yZGVyLXJhZGl1cyk7XG4gICAgICAgICAgQGluY2x1ZGUgYm9yZGVyLWJvdHRvbS1sZWZ0LXJhZGl1cygwKTtcbiAgICAgICAgfVxuXG4gICAgICAgICYuYWN0aXZlIHtcbiAgICAgICAgICBtYXJnaW4tdG9wOiAwO1xuICAgICAgICB9XG5cbiAgICAgICAgJiArIC5saXN0LWdyb3VwLWl0ZW0ge1xuICAgICAgICAgIGJvcmRlci10b3Atd2lkdGg6ICRsaXN0LWdyb3VwLWJvcmRlci13aWR0aDtcbiAgICAgICAgICBib3JkZXItbGVmdC13aWR0aDogMDtcblxuICAgICAgICAgICYuYWN0aXZlIHtcbiAgICAgICAgICAgIG1hcmdpbi1sZWZ0OiAtJGxpc3QtZ3JvdXAtYm9yZGVyLXdpZHRoO1xuICAgICAgICAgICAgYm9yZGVyLWxlZnQtd2lkdGg6ICRsaXN0LWdyb3VwLWJvcmRlci13aWR0aDtcbiAgICAgICAgICB9XG4gICAgICAgIH1cbiAgICAgIH1cbiAgICB9XG4gIH1cbn1cblxuXG4vLyBGbHVzaCBsaXN0IGl0ZW1zXG4vL1xuLy8gUmVtb3ZlIGJvcmRlcnMgYW5kIGJvcmRlci1yYWRpdXMgdG8ga2VlcCBsaXN0IGdyb3VwIGl0ZW1zIGVkZ2UtdG8tZWRnZS4gTW9zdFxuLy8gdXNlZnVsIHdpdGhpbiBvdGhlciBjb21wb25lbnRzIChlLmcuLCBjYXJkcykuXG5cbi5saXN0LWdyb3VwLWZsdXNoIHtcbiAgQGluY2x1ZGUgYm9yZGVyLXJhZGl1cygwKTtcblxuICA+IC5saXN0LWdyb3VwLWl0ZW0ge1xuICAgIGJvcmRlci13aWR0aDogMCAwICRsaXN0LWdyb3VwLWJvcmRlci13aWR0aDtcblxuICAgICY6bGFzdC1jaGlsZCB7XG4gICAgICBib3JkZXItYm90dG9tLXdpZHRoOiAwO1xuICAgIH1cbiAgfVxufVxuXG5cbi8vIENvbnRleHR1YWwgdmFyaWFudHNcbi8vXG4vLyBBZGQgbW9kaWZpZXIgY2xhc3NlcyB0byBjaGFuZ2UgdGV4dCBhbmQgYmFja2dyb3VuZCBjb2xvciBvbiBpbmRpdmlkdWFsIGl0ZW1zLlxuLy8gT3JnYW5pemF0aW9uYWxseSwgdGhpcyBtdXN0IGNvbWUgYWZ0ZXIgdGhlIGA6aG92ZXJgIHN0YXRlcy5cblxuQGVhY2ggJGNvbG9yLCAkdmFsdWUgaW4gJHRoZW1lLWNvbG9ycyB7XG4gIEBpbmNsdWRlIGxpc3QtZ3JvdXAtaXRlbS12YXJpYW50KCRjb2xvciwgdGhlbWUtY29sb3ItbGV2ZWwoJGNvbG9yLCAtOSksIHRoZW1lLWNvbG9yLWxldmVsKCRjb2xvciwgNikpO1xufVxuIiwiLy8gTGlzdCBHcm91cHNcblxuQG1peGluIGxpc3QtZ3JvdXAtaXRlbS12YXJpYW50KCRzdGF0ZSwgJGJhY2tncm91bmQsICRjb2xvcikge1xuICAubGlzdC1ncm91cC1pdGVtLSN7JHN0YXRlfSB7XG4gICAgY29sb3I6ICRjb2xvcjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkYmFja2dyb3VuZDtcblxuICAgICYubGlzdC1ncm91cC1pdGVtLWFjdGlvbiB7XG4gICAgICBAaW5jbHVkZSBob3Zlci1mb2N1cygpIHtcbiAgICAgICAgY29sb3I6ICRjb2xvcjtcbiAgICAgICAgYmFja2dyb3VuZC1jb2xvcjogZGFya2VuKCRiYWNrZ3JvdW5kLCA1JSk7XG4gICAgICB9XG5cbiAgICAgICYuYWN0aXZlIHtcbiAgICAgICAgY29sb3I6ICR3aGl0ZTtcbiAgICAgICAgYmFja2dyb3VuZC1jb2xvcjogJGNvbG9yO1xuICAgICAgICBib3JkZXItY29sb3I6ICRjb2xvcjtcbiAgICAgIH1cbiAgICB9XG4gIH1cbn1cbiIsIi5jbG9zZSB7XG4gIGZsb2F0OiByaWdodDtcbiAgQGluY2x1ZGUgZm9udC1zaXplKCRjbG9zZS1mb250LXNpemUpO1xuICBmb250LXdlaWdodDogJGNsb3NlLWZvbnQtd2VpZ2h0O1xuICBsaW5lLWhlaWdodDogMTtcbiAgY29sb3I6ICRjbG9zZS1jb2xvcjtcbiAgdGV4dC1zaGFkb3c6ICRjbG9zZS10ZXh0LXNoYWRvdztcbiAgb3BhY2l0eTogLjU7XG5cbiAgLy8gT3ZlcnJpZGUgPGE+J3MgaG92ZXIgc3R5bGVcbiAgQGluY2x1ZGUgaG92ZXIoKSB7XG4gICAgY29sb3I6ICRjbG9zZS1jb2xvcjtcbiAgICB0ZXh0LWRlY29yYXRpb246IG5vbmU7XG4gIH1cblxuICAmOm5vdCg6ZGlzYWJsZWQpOm5vdCguZGlzYWJsZWQpIHtcbiAgICBAaW5jbHVkZSBob3Zlci1mb2N1cygpIHtcbiAgICAgIG9wYWNpdHk6IC43NTtcbiAgICB9XG4gIH1cbn1cblxuLy8gQWRkaXRpb25hbCBwcm9wZXJ0aWVzIGZvciBidXR0b24gdmVyc2lvblxuLy8gaU9TIHJlcXVpcmVzIHRoZSBidXR0b24gZWxlbWVudCBpbnN0ZWFkIG9mIGFuIGFuY2hvciB0YWcuXG4vLyBJZiB5b3Ugd2FudCB0aGUgYW5jaG9yIHZlcnNpb24sIGl0IHJlcXVpcmVzIGBocmVmPVwiI1wiYC5cbi8vIFNlZSBodHRwczovL2RldmVsb3Blci5tb3ppbGxhLm9yZy9lbi1VUy9kb2NzL1dlYi9FdmVudHMvY2xpY2sjU2FmYXJpX01vYmlsZVxuXG4vLyBzdHlsZWxpbnQtZGlzYWJsZS1uZXh0LWxpbmUgc2VsZWN0b3Itbm8tcXVhbGlmeWluZy10eXBlXG5idXR0b24uY2xvc2Uge1xuICBwYWRkaW5nOiAwO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiB0cmFuc3BhcmVudDtcbiAgYm9yZGVyOiAwO1xufVxuXG4vLyBGdXR1cmUtcHJvb2YgZGlzYWJsaW5nIG9mIGNsaWNrcyBvbiBgPGE+YCBlbGVtZW50c1xuXG4vLyBzdHlsZWxpbnQtZGlzYWJsZS1uZXh0LWxpbmUgc2VsZWN0b3Itbm8tcXVhbGlmeWluZy10eXBlXG5hLmNsb3NlLmRpc2FibGVkIHtcbiAgcG9pbnRlci1ldmVudHM6IG5vbmU7XG59XG4iLCIudG9hc3Qge1xuICBtYXgtd2lkdGg6ICR0b2FzdC1tYXgtd2lkdGg7XG4gIG92ZXJmbG93OiBoaWRkZW47IC8vIGNoZWFwIHJvdW5kZWQgY29ybmVycyBvbiBuZXN0ZWQgaXRlbXNcbiAgQGluY2x1ZGUgZm9udC1zaXplKCR0b2FzdC1mb250LXNpemUpO1xuICBjb2xvcjogJHRvYXN0LWNvbG9yO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAkdG9hc3QtYmFja2dyb3VuZC1jb2xvcjtcbiAgYmFja2dyb3VuZC1jbGlwOiBwYWRkaW5nLWJveDtcbiAgYm9yZGVyOiAkdG9hc3QtYm9yZGVyLXdpZHRoIHNvbGlkICR0b2FzdC1ib3JkZXItY29sb3I7XG4gIGJveC1zaGFkb3c6ICR0b2FzdC1ib3gtc2hhZG93O1xuICBiYWNrZHJvcC1maWx0ZXI6IGJsdXIoMTBweCk7XG4gIG9wYWNpdHk6IDA7XG4gIEBpbmNsdWRlIGJvcmRlci1yYWRpdXMoJHRvYXN0LWJvcmRlci1yYWRpdXMpO1xuXG4gICY6bm90KDpsYXN0LWNoaWxkKSB7XG4gICAgbWFyZ2luLWJvdHRvbTogJHRvYXN0LXBhZGRpbmcteDtcbiAgfVxuXG4gICYuc2hvd2luZyB7XG4gICAgb3BhY2l0eTogMTtcbiAgfVxuXG4gICYuc2hvdyB7XG4gICAgZGlzcGxheTogYmxvY2s7XG4gICAgb3BhY2l0eTogMTtcbiAgfVxuXG4gICYuaGlkZSB7XG4gICAgZGlzcGxheTogbm9uZTtcbiAgfVxufVxuXG4udG9hc3QtaGVhZGVyIHtcbiAgZGlzcGxheTogZmxleDtcbiAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAgcGFkZGluZzogJHRvYXN0LXBhZGRpbmcteSAkdG9hc3QtcGFkZGluZy14O1xuICBjb2xvcjogJHRvYXN0LWhlYWRlci1jb2xvcjtcbiAgYmFja2dyb3VuZC1jb2xvcjogJHRvYXN0LWhlYWRlci1iYWNrZ3JvdW5kLWNvbG9yO1xuICBiYWNrZ3JvdW5kLWNsaXA6IHBhZGRpbmctYm94O1xuICBib3JkZXItYm90dG9tOiAkdG9hc3QtYm9yZGVyLXdpZHRoIHNvbGlkICR0b2FzdC1oZWFkZXItYm9yZGVyLWNvbG9yO1xufVxuXG4udG9hc3QtYm9keSB7XG4gIHBhZGRpbmc6ICR0b2FzdC1wYWRkaW5nLXg7IC8vIGFwcGx5IHRvIGJvdGggdmVydGljYWwgYW5kIGhvcml6b250YWxcbn1cbiIsIi8vIC5tb2RhbC1vcGVuICAgICAgLSBib2R5IGNsYXNzIGZvciBraWxsaW5nIHRoZSBzY3JvbGxcbi8vIC5tb2RhbCAgICAgICAgICAgLSBjb250YWluZXIgdG8gc2Nyb2xsIHdpdGhpblxuLy8gLm1vZGFsLWRpYWxvZyAgICAtIHBvc2l0aW9uaW5nIHNoZWxsIGZvciB0aGUgYWN0dWFsIG1vZGFsXG4vLyAubW9kYWwtY29udGVudCAgIC0gYWN0dWFsIG1vZGFsIHcvIGJnIGFuZCBjb3JuZXJzIGFuZCBzdHVmZlxuXG5cbi5tb2RhbC1vcGVuIHtcbiAgLy8gS2lsbCB0aGUgc2Nyb2xsIG9uIHRoZSBib2R5XG4gIG92ZXJmbG93OiBoaWRkZW47XG5cbiAgLm1vZGFsIHtcbiAgICBvdmVyZmxvdy14OiBoaWRkZW47XG4gICAgb3ZlcmZsb3cteTogYXV0bztcbiAgfVxufVxuXG4vLyBDb250YWluZXIgdGhhdCB0aGUgbW9kYWwgc2Nyb2xscyB3aXRoaW5cbi5tb2RhbCB7XG4gIHBvc2l0aW9uOiBmaXhlZDtcbiAgdG9wOiAwO1xuICBsZWZ0OiAwO1xuICB6LWluZGV4OiAkemluZGV4LW1vZGFsO1xuICBkaXNwbGF5OiBub25lO1xuICB3aWR0aDogMTAwJTtcbiAgaGVpZ2h0OiAxMDAlO1xuICBvdmVyZmxvdzogaGlkZGVuO1xuICAvLyBQcmV2ZW50IENocm9tZSBvbiBXaW5kb3dzIGZyb20gYWRkaW5nIGEgZm9jdXMgb3V0bGluZS4gRm9yIGRldGFpbHMsIHNlZVxuICAvLyBodHRwczovL2dpdGh1Yi5jb20vdHdicy9ib290c3RyYXAvcHVsbC8xMDk1MS5cbiAgb3V0bGluZTogMDtcbiAgLy8gV2UgZGVsaWJlcmF0ZWx5IGRvbid0IHVzZSBgLXdlYmtpdC1vdmVyZmxvdy1zY3JvbGxpbmc6IHRvdWNoO2AgZHVlIHRvIGFcbiAgLy8gZ25hcmx5IGlPUyBTYWZhcmkgYnVnOiBodHRwczovL2J1Z3Mud2Via2l0Lm9yZy9zaG93X2J1Zy5jZ2k/aWQ9MTU4MzQyXG4gIC8vIFNlZSBhbHNvIGh0dHBzOi8vZ2l0aHViLmNvbS90d2JzL2Jvb3RzdHJhcC9pc3N1ZXMvMTc2OTVcbn1cblxuLy8gU2hlbGwgZGl2IHRvIHBvc2l0aW9uIHRoZSBtb2RhbCB3aXRoIGJvdHRvbSBwYWRkaW5nXG4ubW9kYWwtZGlhbG9nIHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICB3aWR0aDogYXV0bztcbiAgbWFyZ2luOiAkbW9kYWwtZGlhbG9nLW1hcmdpbjtcbiAgLy8gYWxsb3cgY2xpY2tzIHRvIHBhc3MgdGhyb3VnaCBmb3IgY3VzdG9tIGNsaWNrIGhhbmRsaW5nIHRvIGNsb3NlIG1vZGFsXG4gIHBvaW50ZXItZXZlbnRzOiBub25lO1xuXG4gIC8vIFdoZW4gZmFkaW5nIGluIHRoZSBtb2RhbCwgYW5pbWF0ZSBpdCB0byBzbGlkZSBkb3duXG4gIC5tb2RhbC5mYWRlICYge1xuICAgIEBpbmNsdWRlIHRyYW5zaXRpb24oJG1vZGFsLXRyYW5zaXRpb24pO1xuICAgIHRyYW5zZm9ybTogJG1vZGFsLWZhZGUtdHJhbnNmb3JtO1xuICB9XG4gIC5tb2RhbC5zaG93ICYge1xuICAgIHRyYW5zZm9ybTogJG1vZGFsLXNob3ctdHJhbnNmb3JtO1xuICB9XG5cbiAgLy8gV2hlbiB0cnlpbmcgdG8gY2xvc2UsIGFuaW1hdGUgZm9jdXMgdG8gc2NhbGVcbiAgLm1vZGFsLm1vZGFsLXN0YXRpYyAmIHtcbiAgICB0cmFuc2Zvcm06ICRtb2RhbC1zY2FsZS10cmFuc2Zvcm07XG4gIH1cbn1cblxuLm1vZGFsLWRpYWxvZy1zY3JvbGxhYmxlIHtcbiAgZGlzcGxheTogZmxleDsgLy8gSUUxMC8xMVxuICBtYXgtaGVpZ2h0OiBzdWJ0cmFjdCgxMDAlLCAkbW9kYWwtZGlhbG9nLW1hcmdpbiAqIDIpO1xuXG4gIC5tb2RhbC1jb250ZW50IHtcbiAgICBtYXgtaGVpZ2h0OiBzdWJ0cmFjdCgxMDB2aCwgJG1vZGFsLWRpYWxvZy1tYXJnaW4gKiAyKTsgLy8gSUUxMC8xMVxuICAgIG92ZXJmbG93OiBoaWRkZW47XG4gIH1cblxuICAubW9kYWwtaGVhZGVyLFxuICAubW9kYWwtZm9vdGVyIHtcbiAgICBmbGV4LXNocmluazogMDtcbiAgfVxuXG4gIC5tb2RhbC1ib2R5IHtcbiAgICBvdmVyZmxvdy15OiBhdXRvO1xuICB9XG59XG5cbi5tb2RhbC1kaWFsb2ctY2VudGVyZWQge1xuICBkaXNwbGF5OiBmbGV4O1xuICBhbGlnbi1pdGVtczogY2VudGVyO1xuICBtaW4taGVpZ2h0OiBzdWJ0cmFjdCgxMDAlLCAkbW9kYWwtZGlhbG9nLW1hcmdpbiAqIDIpO1xuXG4gIC8vIEVuc3VyZSBgbW9kYWwtZGlhbG9nLWNlbnRlcmVkYCBleHRlbmRzIHRoZSBmdWxsIGhlaWdodCBvZiB0aGUgdmlldyAoSUUxMC8xMSlcbiAgJjo6YmVmb3JlIHtcbiAgICBkaXNwbGF5OiBibG9jazsgLy8gSUUxMFxuICAgIGhlaWdodDogc3VidHJhY3QoMTAwdmgsICRtb2RhbC1kaWFsb2ctbWFyZ2luICogMik7XG4gICAgaGVpZ2h0OiBtaW4tY29udGVudDsgLy8gUmVzZXQgaGVpZ2h0IHRvIDAgZXhjZXB0IG9uIElFXG4gICAgY29udGVudDogXCJcIjtcbiAgfVxuXG4gIC8vIEVuc3VyZSBgLm1vZGFsLWJvZHlgIHNob3dzIHNjcm9sbGJhciAoSUUxMC8xMSlcbiAgJi5tb2RhbC1kaWFsb2ctc2Nyb2xsYWJsZSB7XG4gICAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcbiAgICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcbiAgICBoZWlnaHQ6IDEwMCU7XG5cbiAgICAubW9kYWwtY29udGVudCB7XG4gICAgICBtYXgtaGVpZ2h0OiBub25lO1xuICAgIH1cblxuICAgICY6OmJlZm9yZSB7XG4gICAgICBjb250ZW50OiBub25lO1xuICAgIH1cbiAgfVxufVxuXG4vLyBBY3R1YWwgbW9kYWxcbi5tb2RhbC1jb250ZW50IHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICBkaXNwbGF5OiBmbGV4O1xuICBmbGV4LWRpcmVjdGlvbjogY29sdW1uO1xuICB3aWR0aDogMTAwJTsgLy8gRW5zdXJlIGAubW9kYWwtY29udGVudGAgZXh0ZW5kcyB0aGUgZnVsbCB3aWR0aCBvZiB0aGUgcGFyZW50IGAubW9kYWwtZGlhbG9nYFxuICAvLyBjb3VudGVyYWN0IHRoZSBwb2ludGVyLWV2ZW50czogbm9uZTsgaW4gdGhlIC5tb2RhbC1kaWFsb2dcbiAgY29sb3I6ICRtb2RhbC1jb250ZW50LWNvbG9yO1xuICBwb2ludGVyLWV2ZW50czogYXV0bztcbiAgYmFja2dyb3VuZC1jb2xvcjogJG1vZGFsLWNvbnRlbnQtYmc7XG4gIGJhY2tncm91bmQtY2xpcDogcGFkZGluZy1ib3g7XG4gIGJvcmRlcjogJG1vZGFsLWNvbnRlbnQtYm9yZGVyLXdpZHRoIHNvbGlkICRtb2RhbC1jb250ZW50LWJvcmRlci1jb2xvcjtcbiAgQGluY2x1ZGUgYm9yZGVyLXJhZGl1cygkbW9kYWwtY29udGVudC1ib3JkZXItcmFkaXVzKTtcbiAgQGluY2x1ZGUgYm94LXNoYWRvdygkbW9kYWwtY29udGVudC1ib3gtc2hhZG93LXhzKTtcbiAgLy8gUmVtb3ZlIGZvY3VzIG91dGxpbmUgZnJvbSBvcGVuZWQgbW9kYWxcbiAgb3V0bGluZTogMDtcbn1cblxuLy8gTW9kYWwgYmFja2dyb3VuZFxuLm1vZGFsLWJhY2tkcm9wIHtcbiAgcG9zaXRpb246IGZpeGVkO1xuICB0b3A6IDA7XG4gIGxlZnQ6IDA7XG4gIHotaW5kZXg6ICR6aW5kZXgtbW9kYWwtYmFja2Ryb3A7XG4gIHdpZHRoOiAxMDB2dztcbiAgaGVpZ2h0OiAxMDB2aDtcbiAgYmFja2dyb3VuZC1jb2xvcjogJG1vZGFsLWJhY2tkcm9wLWJnO1xuXG4gIC8vIEZhZGUgZm9yIGJhY2tkcm9wXG4gICYuZmFkZSB7IG9wYWNpdHk6IDA7IH1cbiAgJi5zaG93IHsgb3BhY2l0eTogJG1vZGFsLWJhY2tkcm9wLW9wYWNpdHk7IH1cbn1cblxuLy8gTW9kYWwgaGVhZGVyXG4vLyBUb3Agc2VjdGlvbiBvZiB0aGUgbW9kYWwgdy8gdGl0bGUgYW5kIGRpc21pc3Ncbi5tb2RhbC1oZWFkZXIge1xuICBkaXNwbGF5OiBmbGV4O1xuICBhbGlnbi1pdGVtczogZmxleC1zdGFydDsgLy8gc28gdGhlIGNsb3NlIGJ0biBhbHdheXMgc3RheXMgb24gdGhlIHVwcGVyIHJpZ2h0IGNvcm5lclxuICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWJldHdlZW47IC8vIFB1dCBtb2RhbCBoZWFkZXIgZWxlbWVudHMgKHRpdGxlIGFuZCBkaXNtaXNzKSBvbiBvcHBvc2l0ZSBlbmRzXG4gIHBhZGRpbmc6ICRtb2RhbC1oZWFkZXItcGFkZGluZztcbiAgYm9yZGVyLWJvdHRvbTogJG1vZGFsLWhlYWRlci1ib3JkZXItd2lkdGggc29saWQgJG1vZGFsLWhlYWRlci1ib3JkZXItY29sb3I7XG4gIEBpbmNsdWRlIGJvcmRlci10b3AtcmFkaXVzKCRtb2RhbC1jb250ZW50LWlubmVyLWJvcmRlci1yYWRpdXMpO1xuXG4gIC5jbG9zZSB7XG4gICAgcGFkZGluZzogJG1vZGFsLWhlYWRlci1wYWRkaW5nO1xuICAgIC8vIGF1dG8gb24gdGhlIGxlZnQgZm9yY2UgaWNvbiB0byB0aGUgcmlnaHQgZXZlbiB3aGVuIHRoZXJlIGlzIG5vIC5tb2RhbC10aXRsZVxuICAgIG1hcmdpbjogKC0kbW9kYWwtaGVhZGVyLXBhZGRpbmcteSkgKC0kbW9kYWwtaGVhZGVyLXBhZGRpbmcteCkgKC0kbW9kYWwtaGVhZGVyLXBhZGRpbmcteSkgYXV0bztcbiAgfVxufVxuXG4vLyBUaXRsZSB0ZXh0IHdpdGhpbiBoZWFkZXJcbi5tb2RhbC10aXRsZSB7XG4gIG1hcmdpbi1ib3R0b206IDA7XG4gIGxpbmUtaGVpZ2h0OiAkbW9kYWwtdGl0bGUtbGluZS1oZWlnaHQ7XG59XG5cbi8vIE1vZGFsIGJvZHlcbi8vIFdoZXJlIGFsbCBtb2RhbCBjb250ZW50IHJlc2lkZXMgKHNpYmxpbmcgb2YgLm1vZGFsLWhlYWRlciBhbmQgLm1vZGFsLWZvb3Rlcilcbi5tb2RhbC1ib2R5IHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICAvLyBFbmFibGUgYGZsZXgtZ3JvdzogMWAgc28gdGhhdCB0aGUgYm9keSB0YWtlIHVwIGFzIG11Y2ggc3BhY2UgYXMgcG9zc2libGVcbiAgLy8gd2hlbiB0aGVyZSBzaG91bGQgYmUgYSBmaXhlZCBoZWlnaHQgb24gYC5tb2RhbC1kaWFsb2dgLlxuICBmbGV4OiAxIDEgYXV0bztcbiAgcGFkZGluZzogJG1vZGFsLWlubmVyLXBhZGRpbmc7XG59XG5cbi8vIEZvb3RlciAoZm9yIGFjdGlvbnMpXG4ubW9kYWwtZm9vdGVyIHtcbiAgZGlzcGxheTogZmxleDtcbiAgZmxleC13cmFwOiB3cmFwO1xuICBhbGlnbi1pdGVtczogY2VudGVyOyAvLyB2ZXJ0aWNhbGx5IGNlbnRlclxuICBqdXN0aWZ5LWNvbnRlbnQ6IGZsZXgtZW5kOyAvLyBSaWdodCBhbGlnbiBidXR0b25zIHdpdGggZmxleCBwcm9wZXJ0eSBiZWNhdXNlIHRleHQtYWxpZ24gZG9lc24ndCB3b3JrIG9uIGZsZXggaXRlbXNcbiAgcGFkZGluZzogJG1vZGFsLWlubmVyLXBhZGRpbmcgLSAkbW9kYWwtZm9vdGVyLW1hcmdpbi1iZXR3ZWVuIC8gMjtcbiAgYm9yZGVyLXRvcDogJG1vZGFsLWZvb3Rlci1ib3JkZXItd2lkdGggc29saWQgJG1vZGFsLWZvb3Rlci1ib3JkZXItY29sb3I7XG4gIEBpbmNsdWRlIGJvcmRlci1ib3R0b20tcmFkaXVzKCRtb2RhbC1jb250ZW50LWlubmVyLWJvcmRlci1yYWRpdXMpO1xuXG4gIC8vIFBsYWNlIG1hcmdpbiBiZXR3ZWVuIGZvb3RlciBlbGVtZW50c1xuICAvLyBUaGlzIHNvbHV0aW9uIGlzIGZhciBmcm9tIGlkZWFsIGJlY2F1c2Ugb2YgdGhlIHVuaXZlcnNhbCBzZWxlY3RvciB1c2FnZSxcbiAgLy8gYnV0IGlzIG5lZWRlZCB0byBmaXggaHR0cHM6Ly9naXRodWIuY29tL3R3YnMvYm9vdHN0cmFwL2lzc3Vlcy8yNDgwMFxuICAvLyBzdHlsZWxpbnQtZGlzYWJsZS1uZXh0LWxpbmUgc2VsZWN0b3ItbWF4LXVuaXZlcnNhbFxuICA+ICoge1xuICAgIG1hcmdpbjogJG1vZGFsLWZvb3Rlci1tYXJnaW4tYmV0d2VlbiAvIDI7XG4gIH1cbn1cblxuLy8gTWVhc3VyZSBzY3JvbGxiYXIgd2lkdGggZm9yIHBhZGRpbmcgYm9keSBkdXJpbmcgbW9kYWwgc2hvdy9oaWRlXG4ubW9kYWwtc2Nyb2xsYmFyLW1lYXN1cmUge1xuICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gIHRvcDogLTk5OTlweDtcbiAgd2lkdGg6IDUwcHg7XG4gIGhlaWdodDogNTBweDtcbiAgb3ZlcmZsb3c6IHNjcm9sbDtcbn1cblxuLy8gU2NhbGUgdXAgdGhlIG1vZGFsXG5AaW5jbHVkZSBtZWRpYS1icmVha3BvaW50LXVwKHNtKSB7XG4gIC8vIEF1dG9tYXRpY2FsbHkgc2V0IG1vZGFsJ3Mgd2lkdGggZm9yIGxhcmdlciB2aWV3cG9ydHNcbiAgLm1vZGFsLWRpYWxvZyB7XG4gICAgbWF4LXdpZHRoOiAkbW9kYWwtbWQ7XG4gICAgbWFyZ2luOiAkbW9kYWwtZGlhbG9nLW1hcmdpbi15LXNtLXVwIGF1dG87XG4gIH1cblxuICAubW9kYWwtZGlhbG9nLXNjcm9sbGFibGUge1xuICAgIG1heC1oZWlnaHQ6IHN1YnRyYWN0KDEwMCUsICRtb2RhbC1kaWFsb2ctbWFyZ2luLXktc20tdXAgKiAyKTtcblxuICAgIC5tb2RhbC1jb250ZW50IHtcbiAgICAgIG1heC1oZWlnaHQ6IHN1YnRyYWN0KDEwMHZoLCAkbW9kYWwtZGlhbG9nLW1hcmdpbi15LXNtLXVwICogMik7XG4gICAgfVxuICB9XG5cbiAgLm1vZGFsLWRpYWxvZy1jZW50ZXJlZCB7XG4gICAgbWluLWhlaWdodDogc3VidHJhY3QoMTAwJSwgJG1vZGFsLWRpYWxvZy1tYXJnaW4teS1zbS11cCAqIDIpO1xuXG4gICAgJjo6YmVmb3JlIHtcbiAgICAgIGhlaWdodDogc3VidHJhY3QoMTAwdmgsICRtb2RhbC1kaWFsb2ctbWFyZ2luLXktc20tdXAgKiAyKTtcbiAgICAgIGhlaWdodDogbWluLWNvbnRlbnQ7XG4gICAgfVxuICB9XG5cbiAgLm1vZGFsLWNvbnRlbnQge1xuICAgIEBpbmNsdWRlIGJveC1zaGFkb3coJG1vZGFsLWNvbnRlbnQtYm94LXNoYWRvdy1zbS11cCk7XG4gIH1cblxuICAubW9kYWwtc20geyBtYXgtd2lkdGg6ICRtb2RhbC1zbTsgfVxufVxuXG5AaW5jbHVkZSBtZWRpYS1icmVha3BvaW50LXVwKGxnKSB7XG4gIC5tb2RhbC1sZyxcbiAgLm1vZGFsLXhsIHtcbiAgICBtYXgtd2lkdGg6ICRtb2RhbC1sZztcbiAgfVxufVxuXG5AaW5jbHVkZSBtZWRpYS1icmVha3BvaW50LXVwKHhsKSB7XG4gIC5tb2RhbC14bCB7IG1heC13aWR0aDogJG1vZGFsLXhsOyB9XG59XG4iLCIvLyBCYXNlIGNsYXNzXG4udG9vbHRpcCB7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgei1pbmRleDogJHppbmRleC10b29sdGlwO1xuICBkaXNwbGF5OiBibG9jaztcbiAgbWFyZ2luOiAkdG9vbHRpcC1tYXJnaW47XG4gIC8vIE91ciBwYXJlbnQgZWxlbWVudCBjYW4gYmUgYXJiaXRyYXJ5IHNpbmNlIHRvb2x0aXBzIGFyZSBieSBkZWZhdWx0IGluc2VydGVkIGFzIGEgc2libGluZyBvZiB0aGVpciB0YXJnZXQgZWxlbWVudC5cbiAgLy8gU28gcmVzZXQgb3VyIGZvbnQgYW5kIHRleHQgcHJvcGVydGllcyB0byBhdm9pZCBpbmhlcml0aW5nIHdlaXJkIHZhbHVlcy5cbiAgQGluY2x1ZGUgcmVzZXQtdGV4dCgpO1xuICBAaW5jbHVkZSBmb250LXNpemUoJHRvb2x0aXAtZm9udC1zaXplKTtcbiAgLy8gQWxsb3cgYnJlYWtpbmcgdmVyeSBsb25nIHdvcmRzIHNvIHRoZXkgZG9uJ3Qgb3ZlcmZsb3cgdGhlIHRvb2x0aXAncyBib3VuZHNcbiAgd29yZC13cmFwOiBicmVhay13b3JkO1xuICBvcGFjaXR5OiAwO1xuXG4gICYuc2hvdyB7IG9wYWNpdHk6ICR0b29sdGlwLW9wYWNpdHk7IH1cblxuICAuYXJyb3cge1xuICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICBkaXNwbGF5OiBibG9jaztcbiAgICB3aWR0aDogJHRvb2x0aXAtYXJyb3ctd2lkdGg7XG4gICAgaGVpZ2h0OiAkdG9vbHRpcC1hcnJvdy1oZWlnaHQ7XG5cbiAgICAmOjpiZWZvcmUge1xuICAgICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgICAgY29udGVudDogXCJcIjtcbiAgICAgIGJvcmRlci1jb2xvcjogdHJhbnNwYXJlbnQ7XG4gICAgICBib3JkZXItc3R5bGU6IHNvbGlkO1xuICAgIH1cbiAgfVxufVxuXG4uYnMtdG9vbHRpcC10b3Age1xuICBwYWRkaW5nOiAkdG9vbHRpcC1hcnJvdy1oZWlnaHQgMDtcblxuICAuYXJyb3cge1xuICAgIGJvdHRvbTogMDtcblxuICAgICY6OmJlZm9yZSB7XG4gICAgICB0b3A6IDA7XG4gICAgICBib3JkZXItd2lkdGg6ICR0b29sdGlwLWFycm93LWhlaWdodCAoJHRvb2x0aXAtYXJyb3ctd2lkdGggLyAyKSAwO1xuICAgICAgYm9yZGVyLXRvcC1jb2xvcjogJHRvb2x0aXAtYXJyb3ctY29sb3I7XG4gICAgfVxuICB9XG59XG5cbi5icy10b29sdGlwLXJpZ2h0IHtcbiAgcGFkZGluZzogMCAkdG9vbHRpcC1hcnJvdy1oZWlnaHQ7XG5cbiAgLmFycm93IHtcbiAgICBsZWZ0OiAwO1xuICAgIHdpZHRoOiAkdG9vbHRpcC1hcnJvdy1oZWlnaHQ7XG4gICAgaGVpZ2h0OiAkdG9vbHRpcC1hcnJvdy13aWR0aDtcblxuICAgICY6OmJlZm9yZSB7XG4gICAgICByaWdodDogMDtcbiAgICAgIGJvcmRlci13aWR0aDogKCR0b29sdGlwLWFycm93LXdpZHRoIC8gMikgJHRvb2x0aXAtYXJyb3ctaGVpZ2h0ICgkdG9vbHRpcC1hcnJvdy13aWR0aCAvIDIpIDA7XG4gICAgICBib3JkZXItcmlnaHQtY29sb3I6ICR0b29sdGlwLWFycm93LWNvbG9yO1xuICAgIH1cbiAgfVxufVxuXG4uYnMtdG9vbHRpcC1ib3R0b20ge1xuICBwYWRkaW5nOiAkdG9vbHRpcC1hcnJvdy1oZWlnaHQgMDtcblxuICAuYXJyb3cge1xuICAgIHRvcDogMDtcblxuICAgICY6OmJlZm9yZSB7XG4gICAgICBib3R0b206IDA7XG4gICAgICBib3JkZXItd2lkdGg6IDAgKCR0b29sdGlwLWFycm93LXdpZHRoIC8gMikgJHRvb2x0aXAtYXJyb3ctaGVpZ2h0O1xuICAgICAgYm9yZGVyLWJvdHRvbS1jb2xvcjogJHRvb2x0aXAtYXJyb3ctY29sb3I7XG4gICAgfVxuICB9XG59XG5cbi5icy10b29sdGlwLWxlZnQge1xuICBwYWRkaW5nOiAwICR0b29sdGlwLWFycm93LWhlaWdodDtcblxuICAuYXJyb3cge1xuICAgIHJpZ2h0OiAwO1xuICAgIHdpZHRoOiAkdG9vbHRpcC1hcnJvdy1oZWlnaHQ7XG4gICAgaGVpZ2h0OiAkdG9vbHRpcC1hcnJvdy13aWR0aDtcblxuICAgICY6OmJlZm9yZSB7XG4gICAgICBsZWZ0OiAwO1xuICAgICAgYm9yZGVyLXdpZHRoOiAoJHRvb2x0aXAtYXJyb3ctd2lkdGggLyAyKSAwICgkdG9vbHRpcC1hcnJvdy13aWR0aCAvIDIpICR0b29sdGlwLWFycm93LWhlaWdodDtcbiAgICAgIGJvcmRlci1sZWZ0LWNvbG9yOiAkdG9vbHRpcC1hcnJvdy1jb2xvcjtcbiAgICB9XG4gIH1cbn1cblxuLmJzLXRvb2x0aXAtYXV0byB7XG4gICZbeC1wbGFjZW1lbnRePVwidG9wXCJdIHtcbiAgICBAZXh0ZW5kIC5icy10b29sdGlwLXRvcDtcbiAgfVxuICAmW3gtcGxhY2VtZW50Xj1cInJpZ2h0XCJdIHtcbiAgICBAZXh0ZW5kIC5icy10b29sdGlwLXJpZ2h0O1xuICB9XG4gICZbeC1wbGFjZW1lbnRePVwiYm90dG9tXCJdIHtcbiAgICBAZXh0ZW5kIC5icy10b29sdGlwLWJvdHRvbTtcbiAgfVxuICAmW3gtcGxhY2VtZW50Xj1cImxlZnRcIl0ge1xuICAgIEBleHRlbmQgLmJzLXRvb2x0aXAtbGVmdDtcbiAgfVxufVxuXG4vLyBXcmFwcGVyIGZvciB0aGUgdG9vbHRpcCBjb250ZW50XG4udG9vbHRpcC1pbm5lciB7XG4gIG1heC13aWR0aDogJHRvb2x0aXAtbWF4LXdpZHRoO1xuICBwYWRkaW5nOiAkdG9vbHRpcC1wYWRkaW5nLXkgJHRvb2x0aXAtcGFkZGluZy14O1xuICBjb2xvcjogJHRvb2x0aXAtY29sb3I7XG4gIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgYmFja2dyb3VuZC1jb2xvcjogJHRvb2x0aXAtYmc7XG4gIEBpbmNsdWRlIGJvcmRlci1yYWRpdXMoJHRvb2x0aXAtYm9yZGVyLXJhZGl1cyk7XG59XG4iLCJAbWl4aW4gcmVzZXQtdGV4dCgpIHtcbiAgZm9udC1mYW1pbHk6ICRmb250LWZhbWlseS1iYXNlO1xuICAvLyBXZSBkZWxpYmVyYXRlbHkgZG8gTk9UIHJlc2V0IGZvbnQtc2l6ZSBvciB3b3JkLXdyYXAuXG4gIGZvbnQtc3R5bGU6IG5vcm1hbDtcbiAgZm9udC13ZWlnaHQ6ICRmb250LXdlaWdodC1ub3JtYWw7XG4gIGxpbmUtaGVpZ2h0OiAkbGluZS1oZWlnaHQtYmFzZTtcbiAgdGV4dC1hbGlnbjogbGVmdDsgLy8gRmFsbGJhY2sgZm9yIHdoZXJlIGBzdGFydGAgaXMgbm90IHN1cHBvcnRlZFxuICB0ZXh0LWFsaWduOiBzdGFydDtcbiAgdGV4dC1kZWNvcmF0aW9uOiBub25lO1xuICB0ZXh0LXNoYWRvdzogbm9uZTtcbiAgdGV4dC10cmFuc2Zvcm06IG5vbmU7XG4gIGxldHRlci1zcGFjaW5nOiBub3JtYWw7XG4gIHdvcmQtYnJlYWs6IG5vcm1hbDtcbiAgd29yZC1zcGFjaW5nOiBub3JtYWw7XG4gIHdoaXRlLXNwYWNlOiBub3JtYWw7XG4gIGxpbmUtYnJlYWs6IGF1dG87XG59XG4iLCIucG9wb3ZlciB7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgdG9wOiAwO1xuICBsZWZ0OiAwO1xuICB6LWluZGV4OiAkemluZGV4LXBvcG92ZXI7XG4gIGRpc3BsYXk6IGJsb2NrO1xuICBtYXgtd2lkdGg6ICRwb3BvdmVyLW1heC13aWR0aDtcbiAgLy8gT3VyIHBhcmVudCBlbGVtZW50IGNhbiBiZSBhcmJpdHJhcnkgc2luY2UgdG9vbHRpcHMgYXJlIGJ5IGRlZmF1bHQgaW5zZXJ0ZWQgYXMgYSBzaWJsaW5nIG9mIHRoZWlyIHRhcmdldCBlbGVtZW50LlxuICAvLyBTbyByZXNldCBvdXIgZm9udCBhbmQgdGV4dCBwcm9wZXJ0aWVzIHRvIGF2b2lkIGluaGVyaXRpbmcgd2VpcmQgdmFsdWVzLlxuICBAaW5jbHVkZSByZXNldC10ZXh0KCk7XG4gIEBpbmNsdWRlIGZvbnQtc2l6ZSgkcG9wb3Zlci1mb250LXNpemUpO1xuICAvLyBBbGxvdyBicmVha2luZyB2ZXJ5IGxvbmcgd29yZHMgc28gdGhleSBkb24ndCBvdmVyZmxvdyB0aGUgcG9wb3ZlcidzIGJvdW5kc1xuICB3b3JkLXdyYXA6IGJyZWFrLXdvcmQ7XG4gIGJhY2tncm91bmQtY29sb3I6ICRwb3BvdmVyLWJnO1xuICBiYWNrZ3JvdW5kLWNsaXA6IHBhZGRpbmctYm94O1xuICBib3JkZXI6ICRwb3BvdmVyLWJvcmRlci13aWR0aCBzb2xpZCAkcG9wb3Zlci1ib3JkZXItY29sb3I7XG4gIEBpbmNsdWRlIGJvcmRlci1yYWRpdXMoJHBvcG92ZXItYm9yZGVyLXJhZGl1cyk7XG4gIEBpbmNsdWRlIGJveC1zaGFkb3coJHBvcG92ZXItYm94LXNoYWRvdyk7XG5cbiAgLmFycm93IHtcbiAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgZGlzcGxheTogYmxvY2s7XG4gICAgd2lkdGg6ICRwb3BvdmVyLWFycm93LXdpZHRoO1xuICAgIGhlaWdodDogJHBvcG92ZXItYXJyb3ctaGVpZ2h0O1xuICAgIG1hcmdpbjogMCAkcG9wb3Zlci1ib3JkZXItcmFkaXVzO1xuXG4gICAgJjo6YmVmb3JlLFxuICAgICY6OmFmdGVyIHtcbiAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgICAgY29udGVudDogXCJcIjtcbiAgICAgIGJvcmRlci1jb2xvcjogdHJhbnNwYXJlbnQ7XG4gICAgICBib3JkZXItc3R5bGU6IHNvbGlkO1xuICAgIH1cbiAgfVxufVxuXG4uYnMtcG9wb3Zlci10b3Age1xuICBtYXJnaW4tYm90dG9tOiAkcG9wb3Zlci1hcnJvdy1oZWlnaHQ7XG5cbiAgPiAuYXJyb3cge1xuICAgIGJvdHRvbTogc3VidHJhY3QoLSRwb3BvdmVyLWFycm93LWhlaWdodCwgJHBvcG92ZXItYm9yZGVyLXdpZHRoKTtcblxuICAgICY6OmJlZm9yZSB7XG4gICAgICBib3R0b206IDA7XG4gICAgICBib3JkZXItd2lkdGg6ICRwb3BvdmVyLWFycm93LWhlaWdodCAoJHBvcG92ZXItYXJyb3ctd2lkdGggLyAyKSAwO1xuICAgICAgYm9yZGVyLXRvcC1jb2xvcjogJHBvcG92ZXItYXJyb3ctb3V0ZXItY29sb3I7XG4gICAgfVxuXG4gICAgJjo6YWZ0ZXIge1xuICAgICAgYm90dG9tOiAkcG9wb3Zlci1ib3JkZXItd2lkdGg7XG4gICAgICBib3JkZXItd2lkdGg6ICRwb3BvdmVyLWFycm93LWhlaWdodCAoJHBvcG92ZXItYXJyb3ctd2lkdGggLyAyKSAwO1xuICAgICAgYm9yZGVyLXRvcC1jb2xvcjogJHBvcG92ZXItYXJyb3ctY29sb3I7XG4gICAgfVxuICB9XG59XG5cbi5icy1wb3BvdmVyLXJpZ2h0IHtcbiAgbWFyZ2luLWxlZnQ6ICRwb3BvdmVyLWFycm93LWhlaWdodDtcblxuICA+IC5hcnJvdyB7XG4gICAgbGVmdDogc3VidHJhY3QoLSRwb3BvdmVyLWFycm93LWhlaWdodCwgJHBvcG92ZXItYm9yZGVyLXdpZHRoKTtcbiAgICB3aWR0aDogJHBvcG92ZXItYXJyb3ctaGVpZ2h0O1xuICAgIGhlaWdodDogJHBvcG92ZXItYXJyb3ctd2lkdGg7XG4gICAgbWFyZ2luOiAkcG9wb3Zlci1ib3JkZXItcmFkaXVzIDA7IC8vIG1ha2Ugc3VyZSB0aGUgYXJyb3cgZG9lcyBub3QgdG91Y2ggdGhlIHBvcG92ZXIncyByb3VuZGVkIGNvcm5lcnNcblxuICAgICY6OmJlZm9yZSB7XG4gICAgICBsZWZ0OiAwO1xuICAgICAgYm9yZGVyLXdpZHRoOiAoJHBvcG92ZXItYXJyb3ctd2lkdGggLyAyKSAkcG9wb3Zlci1hcnJvdy1oZWlnaHQgKCRwb3BvdmVyLWFycm93LXdpZHRoIC8gMikgMDtcbiAgICAgIGJvcmRlci1yaWdodC1jb2xvcjogJHBvcG92ZXItYXJyb3ctb3V0ZXItY29sb3I7XG4gICAgfVxuXG4gICAgJjo6YWZ0ZXIge1xuICAgICAgbGVmdDogJHBvcG92ZXItYm9yZGVyLXdpZHRoO1xuICAgICAgYm9yZGVyLXdpZHRoOiAoJHBvcG92ZXItYXJyb3ctd2lkdGggLyAyKSAkcG9wb3Zlci1hcnJvdy1oZWlnaHQgKCRwb3BvdmVyLWFycm93LXdpZHRoIC8gMikgMDtcbiAgICAgIGJvcmRlci1yaWdodC1jb2xvcjogJHBvcG92ZXItYXJyb3ctY29sb3I7XG4gICAgfVxuICB9XG59XG5cbi5icy1wb3BvdmVyLWJvdHRvbSB7XG4gIG1hcmdpbi10b3A6ICRwb3BvdmVyLWFycm93LWhlaWdodDtcblxuICA+IC5hcnJvdyB7XG4gICAgdG9wOiBzdWJ0cmFjdCgtJHBvcG92ZXItYXJyb3ctaGVpZ2h0LCAkcG9wb3Zlci1ib3JkZXItd2lkdGgpO1xuXG4gICAgJjo6YmVmb3JlIHtcbiAgICAgIHRvcDogMDtcbiAgICAgIGJvcmRlci13aWR0aDogMCAoJHBvcG92ZXItYXJyb3ctd2lkdGggLyAyKSAkcG9wb3Zlci1hcnJvdy1oZWlnaHQgKCRwb3BvdmVyLWFycm93LXdpZHRoIC8gMik7XG4gICAgICBib3JkZXItYm90dG9tLWNvbG9yOiAkcG9wb3Zlci1hcnJvdy1vdXRlci1jb2xvcjtcbiAgICB9XG5cbiAgICAmOjphZnRlciB7XG4gICAgICB0b3A6ICRwb3BvdmVyLWJvcmRlci13aWR0aDtcbiAgICAgIGJvcmRlci13aWR0aDogMCAoJHBvcG92ZXItYXJyb3ctd2lkdGggLyAyKSAkcG9wb3Zlci1hcnJvdy1oZWlnaHQgKCRwb3BvdmVyLWFycm93LXdpZHRoIC8gMik7XG4gICAgICBib3JkZXItYm90dG9tLWNvbG9yOiAkcG9wb3Zlci1hcnJvdy1jb2xvcjtcbiAgICB9XG4gIH1cblxuICAvLyBUaGlzIHdpbGwgcmVtb3ZlIHRoZSBwb3BvdmVyLWhlYWRlcidzIGJvcmRlciBqdXN0IGJlbG93IHRoZSBhcnJvd1xuICAucG9wb3Zlci1oZWFkZXI6OmJlZm9yZSB7XG4gICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgIHRvcDogMDtcbiAgICBsZWZ0OiA1MCU7XG4gICAgZGlzcGxheTogYmxvY2s7XG4gICAgd2lkdGg6ICRwb3BvdmVyLWFycm93LXdpZHRoO1xuICAgIG1hcmdpbi1sZWZ0OiAtJHBvcG92ZXItYXJyb3ctd2lkdGggLyAyO1xuICAgIGNvbnRlbnQ6IFwiXCI7XG4gICAgYm9yZGVyLWJvdHRvbTogJHBvcG92ZXItYm9yZGVyLXdpZHRoIHNvbGlkICRwb3BvdmVyLWhlYWRlci1iZztcbiAgfVxufVxuXG4uYnMtcG9wb3Zlci1sZWZ0IHtcbiAgbWFyZ2luLXJpZ2h0OiAkcG9wb3Zlci1hcnJvdy1oZWlnaHQ7XG5cbiAgPiAuYXJyb3cge1xuICAgIHJpZ2h0OiBzdWJ0cmFjdCgtJHBvcG92ZXItYXJyb3ctaGVpZ2h0LCAkcG9wb3Zlci1ib3JkZXItd2lkdGgpO1xuICAgIHdpZHRoOiAkcG9wb3Zlci1hcnJvdy1oZWlnaHQ7XG4gICAgaGVpZ2h0OiAkcG9wb3Zlci1hcnJvdy13aWR0aDtcbiAgICBtYXJnaW46ICRwb3BvdmVyLWJvcmRlci1yYWRpdXMgMDsgLy8gbWFrZSBzdXJlIHRoZSBhcnJvdyBkb2VzIG5vdCB0b3VjaCB0aGUgcG9wb3ZlcidzIHJvdW5kZWQgY29ybmVyc1xuXG4gICAgJjo6YmVmb3JlIHtcbiAgICAgIHJpZ2h0OiAwO1xuICAgICAgYm9yZGVyLXdpZHRoOiAoJHBvcG92ZXItYXJyb3ctd2lkdGggLyAyKSAwICgkcG9wb3Zlci1hcnJvdy13aWR0aCAvIDIpICRwb3BvdmVyLWFycm93LWhlaWdodDtcbiAgICAgIGJvcmRlci1sZWZ0LWNvbG9yOiAkcG9wb3Zlci1hcnJvdy1vdXRlci1jb2xvcjtcbiAgICB9XG5cbiAgICAmOjphZnRlciB7XG4gICAgICByaWdodDogJHBvcG92ZXItYm9yZGVyLXdpZHRoO1xuICAgICAgYm9yZGVyLXdpZHRoOiAoJHBvcG92ZXItYXJyb3ctd2lkdGggLyAyKSAwICgkcG9wb3Zlci1hcnJvdy13aWR0aCAvIDIpICRwb3BvdmVyLWFycm93LWhlaWdodDtcbiAgICAgIGJvcmRlci1sZWZ0LWNvbG9yOiAkcG9wb3Zlci1hcnJvdy1jb2xvcjtcbiAgICB9XG4gIH1cbn1cblxuLmJzLXBvcG92ZXItYXV0byB7XG4gICZbeC1wbGFjZW1lbnRePVwidG9wXCJdIHtcbiAgICBAZXh0ZW5kIC5icy1wb3BvdmVyLXRvcDtcbiAgfVxuICAmW3gtcGxhY2VtZW50Xj1cInJpZ2h0XCJdIHtcbiAgICBAZXh0ZW5kIC5icy1wb3BvdmVyLXJpZ2h0O1xuICB9XG4gICZbeC1wbGFjZW1lbnRePVwiYm90dG9tXCJdIHtcbiAgICBAZXh0ZW5kIC5icy1wb3BvdmVyLWJvdHRvbTtcbiAgfVxuICAmW3gtcGxhY2VtZW50Xj1cImxlZnRcIl0ge1xuICAgIEBleHRlbmQgLmJzLXBvcG92ZXItbGVmdDtcbiAgfVxufVxuXG5cbi8vIE9mZnNldCB0aGUgcG9wb3ZlciB0byBhY2NvdW50IGZvciB0aGUgcG9wb3ZlciBhcnJvd1xuLnBvcG92ZXItaGVhZGVyIHtcbiAgcGFkZGluZzogJHBvcG92ZXItaGVhZGVyLXBhZGRpbmcteSAkcG9wb3Zlci1oZWFkZXItcGFkZGluZy14O1xuICBtYXJnaW4tYm90dG9tOiAwOyAvLyBSZXNldCB0aGUgZGVmYXVsdCBmcm9tIFJlYm9vdFxuICBAaW5jbHVkZSBmb250LXNpemUoJGZvbnQtc2l6ZS1iYXNlKTtcbiAgY29sb3I6ICRwb3BvdmVyLWhlYWRlci1jb2xvcjtcbiAgYmFja2dyb3VuZC1jb2xvcjogJHBvcG92ZXItaGVhZGVyLWJnO1xuICBib3JkZXItYm90dG9tOiAkcG9wb3Zlci1ib3JkZXItd2lkdGggc29saWQgZGFya2VuKCRwb3BvdmVyLWhlYWRlci1iZywgNSUpO1xuICBAaW5jbHVkZSBib3JkZXItdG9wLXJhZGl1cygkcG9wb3Zlci1pbm5lci1ib3JkZXItcmFkaXVzKTtcblxuICAmOmVtcHR5IHtcbiAgICBkaXNwbGF5OiBub25lO1xuICB9XG59XG5cbi5wb3BvdmVyLWJvZHkge1xuICBwYWRkaW5nOiAkcG9wb3Zlci1ib2R5LXBhZGRpbmcteSAkcG9wb3Zlci1ib2R5LXBhZGRpbmcteDtcbiAgY29sb3I6ICRwb3BvdmVyLWJvZHktY29sb3I7XG59XG4iLCIvLyBOb3RlcyBvbiB0aGUgY2xhc3Nlczpcbi8vXG4vLyAxLiAuY2Fyb3VzZWwucG9pbnRlci1ldmVudCBzaG91bGQgaWRlYWxseSBiZSBwYW4teSAodG8gYWxsb3cgZm9yIHVzZXJzIHRvIHNjcm9sbCB2ZXJ0aWNhbGx5KVxuLy8gICAgZXZlbiB3aGVuIHRoZWlyIHNjcm9sbCBhY3Rpb24gc3RhcnRlZCBvbiBhIGNhcm91c2VsLCBidXQgZm9yIGNvbXBhdGliaWxpdHkgKHdpdGggRmlyZWZveClcbi8vICAgIHdlJ3JlIHByZXZlbnRpbmcgYWxsIGFjdGlvbnMgaW5zdGVhZFxuLy8gMi4gVGhlIC5jYXJvdXNlbC1pdGVtLWxlZnQgYW5kIC5jYXJvdXNlbC1pdGVtLXJpZ2h0IGlzIHVzZWQgdG8gaW5kaWNhdGUgd2hlcmVcbi8vICAgIHRoZSBhY3RpdmUgc2xpZGUgaXMgaGVhZGluZy5cbi8vIDMuIC5hY3RpdmUuY2Fyb3VzZWwtaXRlbSBpcyB0aGUgY3VycmVudCBzbGlkZS5cbi8vIDQuIC5hY3RpdmUuY2Fyb3VzZWwtaXRlbS1sZWZ0IGFuZCAuYWN0aXZlLmNhcm91c2VsLWl0ZW0tcmlnaHQgaXMgdGhlIGN1cnJlbnRcbi8vICAgIHNsaWRlIGluIGl0cyBpbi10cmFuc2l0aW9uIHN0YXRlLiBPbmx5IG9uZSBvZiB0aGVzZSBvY2N1cnMgYXQgYSB0aW1lLlxuLy8gNS4gLmNhcm91c2VsLWl0ZW0tbmV4dC5jYXJvdXNlbC1pdGVtLWxlZnQgYW5kIC5jYXJvdXNlbC1pdGVtLXByZXYuY2Fyb3VzZWwtaXRlbS1yaWdodFxuLy8gICAgaXMgdGhlIHVwY29taW5nIHNsaWRlIGluIHRyYW5zaXRpb24uXG5cbi5jYXJvdXNlbCB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbn1cblxuLmNhcm91c2VsLnBvaW50ZXItZXZlbnQge1xuICB0b3VjaC1hY3Rpb246IHBhbi15O1xufVxuXG4uY2Fyb3VzZWwtaW5uZXIge1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIHdpZHRoOiAxMDAlO1xuICBvdmVyZmxvdzogaGlkZGVuO1xuICBAaW5jbHVkZSBjbGVhcmZpeCgpO1xufVxuXG4uY2Fyb3VzZWwtaXRlbSB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgZGlzcGxheTogbm9uZTtcbiAgZmxvYXQ6IGxlZnQ7XG4gIHdpZHRoOiAxMDAlO1xuICBtYXJnaW4tcmlnaHQ6IC0xMDAlO1xuICBiYWNrZmFjZS12aXNpYmlsaXR5OiBoaWRkZW47XG4gIEBpbmNsdWRlIHRyYW5zaXRpb24oJGNhcm91c2VsLXRyYW5zaXRpb24pO1xufVxuXG4uY2Fyb3VzZWwtaXRlbS5hY3RpdmUsXG4uY2Fyb3VzZWwtaXRlbS1uZXh0LFxuLmNhcm91c2VsLWl0ZW0tcHJldiB7XG4gIGRpc3BsYXk6IGJsb2NrO1xufVxuXG4uY2Fyb3VzZWwtaXRlbS1uZXh0Om5vdCguY2Fyb3VzZWwtaXRlbS1sZWZ0KSxcbi5hY3RpdmUuY2Fyb3VzZWwtaXRlbS1yaWdodCB7XG4gIHRyYW5zZm9ybTogdHJhbnNsYXRlWCgxMDAlKTtcbn1cblxuLmNhcm91c2VsLWl0ZW0tcHJldjpub3QoLmNhcm91c2VsLWl0ZW0tcmlnaHQpLFxuLmFjdGl2ZS5jYXJvdXNlbC1pdGVtLWxlZnQge1xuICB0cmFuc2Zvcm06IHRyYW5zbGF0ZVgoLTEwMCUpO1xufVxuXG5cbi8vXG4vLyBBbHRlcm5hdGUgdHJhbnNpdGlvbnNcbi8vXG5cbi5jYXJvdXNlbC1mYWRlIHtcbiAgLmNhcm91c2VsLWl0ZW0ge1xuICAgIG9wYWNpdHk6IDA7XG4gICAgdHJhbnNpdGlvbi1wcm9wZXJ0eTogb3BhY2l0eTtcbiAgICB0cmFuc2Zvcm06IG5vbmU7XG4gIH1cblxuICAuY2Fyb3VzZWwtaXRlbS5hY3RpdmUsXG4gIC5jYXJvdXNlbC1pdGVtLW5leHQuY2Fyb3VzZWwtaXRlbS1sZWZ0LFxuICAuY2Fyb3VzZWwtaXRlbS1wcmV2LmNhcm91c2VsLWl0ZW0tcmlnaHQge1xuICAgIHotaW5kZXg6IDE7XG4gICAgb3BhY2l0eTogMTtcbiAgfVxuXG4gIC5hY3RpdmUuY2Fyb3VzZWwtaXRlbS1sZWZ0LFxuICAuYWN0aXZlLmNhcm91c2VsLWl0ZW0tcmlnaHQge1xuICAgIHotaW5kZXg6IDA7XG4gICAgb3BhY2l0eTogMDtcbiAgICBAaW5jbHVkZSB0cmFuc2l0aW9uKG9wYWNpdHkgMHMgJGNhcm91c2VsLXRyYW5zaXRpb24tZHVyYXRpb24pO1xuICB9XG59XG5cblxuLy9cbi8vIExlZnQvcmlnaHQgY29udHJvbHMgZm9yIG5hdlxuLy9cblxuLmNhcm91c2VsLWNvbnRyb2wtcHJldixcbi5jYXJvdXNlbC1jb250cm9sLW5leHQge1xuICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gIHRvcDogMDtcbiAgYm90dG9tOiAwO1xuICB6LWluZGV4OiAxO1xuICAvLyBVc2UgZmxleCBmb3IgYWxpZ25tZW50ICgxLTMpXG4gIGRpc3BsYXk6IGZsZXg7IC8vIDEuIGFsbG93IGZsZXggc3R5bGVzXG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7IC8vIDIuIHZlcnRpY2FsbHkgY2VudGVyIGNvbnRlbnRzXG4gIGp1c3RpZnktY29udGVudDogY2VudGVyOyAvLyAzLiBob3Jpem9udGFsbHkgY2VudGVyIGNvbnRlbnRzXG4gIHdpZHRoOiAkY2Fyb3VzZWwtY29udHJvbC13aWR0aDtcbiAgY29sb3I6ICRjYXJvdXNlbC1jb250cm9sLWNvbG9yO1xuICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gIG9wYWNpdHk6ICRjYXJvdXNlbC1jb250cm9sLW9wYWNpdHk7XG4gIEBpbmNsdWRlIHRyYW5zaXRpb24oJGNhcm91c2VsLWNvbnRyb2wtdHJhbnNpdGlvbik7XG5cbiAgLy8gSG92ZXIvZm9jdXMgc3RhdGVcbiAgQGluY2x1ZGUgaG92ZXItZm9jdXMoKSB7XG4gICAgY29sb3I6ICRjYXJvdXNlbC1jb250cm9sLWNvbG9yO1xuICAgIHRleHQtZGVjb3JhdGlvbjogbm9uZTtcbiAgICBvdXRsaW5lOiAwO1xuICAgIG9wYWNpdHk6ICRjYXJvdXNlbC1jb250cm9sLWhvdmVyLW9wYWNpdHk7XG4gIH1cbn1cbi5jYXJvdXNlbC1jb250cm9sLXByZXYge1xuICBsZWZ0OiAwO1xuICBAaWYgJGVuYWJsZS1ncmFkaWVudHMge1xuICAgIGJhY2tncm91bmQtaW1hZ2U6IGxpbmVhci1ncmFkaWVudCg5MGRlZywgcmdiYSgkYmxhY2ssIC4yNSksIHJnYmEoJGJsYWNrLCAuMDAxKSk7XG4gIH1cbn1cbi5jYXJvdXNlbC1jb250cm9sLW5leHQge1xuICByaWdodDogMDtcbiAgQGlmICRlbmFibGUtZ3JhZGllbnRzIHtcbiAgICBiYWNrZ3JvdW5kLWltYWdlOiBsaW5lYXItZ3JhZGllbnQoMjcwZGVnLCByZ2JhKCRibGFjaywgLjI1KSwgcmdiYSgkYmxhY2ssIC4wMDEpKTtcbiAgfVxufVxuXG4vLyBJY29ucyBmb3Igd2l0aGluXG4uY2Fyb3VzZWwtY29udHJvbC1wcmV2LWljb24sXG4uY2Fyb3VzZWwtY29udHJvbC1uZXh0LWljb24ge1xuICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gIHdpZHRoOiAkY2Fyb3VzZWwtY29udHJvbC1pY29uLXdpZHRoO1xuICBoZWlnaHQ6ICRjYXJvdXNlbC1jb250cm9sLWljb24td2lkdGg7XG4gIGJhY2tncm91bmQ6IG5vLXJlcGVhdCA1MCUgLyAxMDAlIDEwMCU7XG59XG4uY2Fyb3VzZWwtY29udHJvbC1wcmV2LWljb24ge1xuICBiYWNrZ3JvdW5kLWltYWdlOiBlc2NhcGUtc3ZnKCRjYXJvdXNlbC1jb250cm9sLXByZXYtaWNvbi1iZyk7XG59XG4uY2Fyb3VzZWwtY29udHJvbC1uZXh0LWljb24ge1xuICBiYWNrZ3JvdW5kLWltYWdlOiBlc2NhcGUtc3ZnKCRjYXJvdXNlbC1jb250cm9sLW5leHQtaWNvbi1iZyk7XG59XG5cblxuLy8gT3B0aW9uYWwgaW5kaWNhdG9yIHBpcHNcbi8vXG4vLyBBZGQgYW4gb3JkZXJlZCBsaXN0IHdpdGggdGhlIGZvbGxvd2luZyBjbGFzcyBhbmQgYWRkIGEgbGlzdCBpdGVtIGZvciBlYWNoXG4vLyBzbGlkZSB5b3VyIGNhcm91c2VsIGhvbGRzLlxuXG4uY2Fyb3VzZWwtaW5kaWNhdG9ycyB7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgcmlnaHQ6IDA7XG4gIGJvdHRvbTogMDtcbiAgbGVmdDogMDtcbiAgei1pbmRleDogMTU7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGp1c3RpZnktY29udGVudDogY2VudGVyO1xuICBwYWRkaW5nLWxlZnQ6IDA7IC8vIG92ZXJyaWRlIDxvbD4gZGVmYXVsdFxuICAvLyBVc2UgdGhlIC5jYXJvdXNlbC1jb250cm9sJ3Mgd2lkdGggYXMgbWFyZ2luIHNvIHdlIGRvbid0IG92ZXJsYXkgdGhvc2VcbiAgbWFyZ2luLXJpZ2h0OiAkY2Fyb3VzZWwtY29udHJvbC13aWR0aDtcbiAgbWFyZ2luLWxlZnQ6ICRjYXJvdXNlbC1jb250cm9sLXdpZHRoO1xuICBsaXN0LXN0eWxlOiBub25lO1xuXG4gIGxpIHtcbiAgICBib3gtc2l6aW5nOiBjb250ZW50LWJveDtcbiAgICBmbGV4OiAwIDEgYXV0bztcbiAgICB3aWR0aDogJGNhcm91c2VsLWluZGljYXRvci13aWR0aDtcbiAgICBoZWlnaHQ6ICRjYXJvdXNlbC1pbmRpY2F0b3ItaGVpZ2h0O1xuICAgIG1hcmdpbi1yaWdodDogJGNhcm91c2VsLWluZGljYXRvci1zcGFjZXI7XG4gICAgbWFyZ2luLWxlZnQ6ICRjYXJvdXNlbC1pbmRpY2F0b3Itc3BhY2VyO1xuICAgIHRleHQtaW5kZW50OiAtOTk5cHg7XG4gICAgY3Vyc29yOiBwb2ludGVyO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICRjYXJvdXNlbC1pbmRpY2F0b3ItYWN0aXZlLWJnO1xuICAgIGJhY2tncm91bmQtY2xpcDogcGFkZGluZy1ib3g7XG4gICAgLy8gVXNlIHRyYW5zcGFyZW50IGJvcmRlcnMgdG8gaW5jcmVhc2UgdGhlIGhpdCBhcmVhIGJ5IDEwcHggb24gdG9wIGFuZCBib3R0b20uXG4gICAgYm9yZGVyLXRvcDogJGNhcm91c2VsLWluZGljYXRvci1oaXQtYXJlYS1oZWlnaHQgc29saWQgdHJhbnNwYXJlbnQ7XG4gICAgYm9yZGVyLWJvdHRvbTogJGNhcm91c2VsLWluZGljYXRvci1oaXQtYXJlYS1oZWlnaHQgc29saWQgdHJhbnNwYXJlbnQ7XG4gICAgb3BhY2l0eTogLjU7XG4gICAgQGluY2x1ZGUgdHJhbnNpdGlvbigkY2Fyb3VzZWwtaW5kaWNhdG9yLXRyYW5zaXRpb24pO1xuICB9XG5cbiAgLmFjdGl2ZSB7XG4gICAgb3BhY2l0eTogMTtcbiAgfVxufVxuXG5cbi8vIE9wdGlvbmFsIGNhcHRpb25zXG4vL1xuLy9cblxuLmNhcm91c2VsLWNhcHRpb24ge1xuICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gIHJpZ2h0OiAoMTAwJSAtICRjYXJvdXNlbC1jYXB0aW9uLXdpZHRoKSAvIDI7XG4gIGJvdHRvbTogMjBweDtcbiAgbGVmdDogKDEwMCUgLSAkY2Fyb3VzZWwtY2FwdGlvbi13aWR0aCkgLyAyO1xuICB6LWluZGV4OiAxMDtcbiAgcGFkZGluZy10b3A6IDIwcHg7XG4gIHBhZGRpbmctYm90dG9tOiAyMHB4O1xuICBjb2xvcjogJGNhcm91c2VsLWNhcHRpb24tY29sb3I7XG4gIHRleHQtYWxpZ246IGNlbnRlcjtcbn1cbiIsIkBtaXhpbiBjbGVhcmZpeCgpIHtcbiAgJjo6YWZ0ZXIge1xuICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgIGNsZWFyOiBib3RoO1xuICAgIGNvbnRlbnQ6IFwiXCI7XG4gIH1cbn1cbiIsIi8vXG4vLyBSb3RhdGluZyBib3JkZXJcbi8vXG5cbkBrZXlmcmFtZXMgc3Bpbm5lci1ib3JkZXIge1xuICB0byB7IHRyYW5zZm9ybTogcm90YXRlKDM2MGRlZyk7IH1cbn1cblxuLnNwaW5uZXItYm9yZGVyIHtcbiAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICB3aWR0aDogJHNwaW5uZXItd2lkdGg7XG4gIGhlaWdodDogJHNwaW5uZXItaGVpZ2h0O1xuICB2ZXJ0aWNhbC1hbGlnbjogdGV4dC1ib3R0b207XG4gIGJvcmRlcjogJHNwaW5uZXItYm9yZGVyLXdpZHRoIHNvbGlkIGN1cnJlbnRDb2xvcjtcbiAgYm9yZGVyLXJpZ2h0LWNvbG9yOiB0cmFuc3BhcmVudDtcbiAgLy8gc3R5bGVsaW50LWRpc2FibGUtbmV4dC1saW5lIHByb3BlcnR5LWJsYWNrbGlzdFxuICBib3JkZXItcmFkaXVzOiA1MCU7XG4gIGFuaW1hdGlvbjogc3Bpbm5lci1ib3JkZXIgLjc1cyBsaW5lYXIgaW5maW5pdGU7XG59XG5cbi5zcGlubmVyLWJvcmRlci1zbSB7XG4gIHdpZHRoOiAkc3Bpbm5lci13aWR0aC1zbTtcbiAgaGVpZ2h0OiAkc3Bpbm5lci1oZWlnaHQtc207XG4gIGJvcmRlci13aWR0aDogJHNwaW5uZXItYm9yZGVyLXdpZHRoLXNtO1xufVxuXG4vL1xuLy8gR3Jvd2luZyBjaXJjbGVcbi8vXG5cbkBrZXlmcmFtZXMgc3Bpbm5lci1ncm93IHtcbiAgMCUge1xuICAgIHRyYW5zZm9ybTogc2NhbGUoMCk7XG4gIH1cbiAgNTAlIHtcbiAgICBvcGFjaXR5OiAxO1xuICAgIHRyYW5zZm9ybTogbm9uZTtcbiAgfVxufVxuXG4uc3Bpbm5lci1ncm93IHtcbiAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICB3aWR0aDogJHNwaW5uZXItd2lkdGg7XG4gIGhlaWdodDogJHNwaW5uZXItaGVpZ2h0O1xuICB2ZXJ0aWNhbC1hbGlnbjogdGV4dC1ib3R0b207XG4gIGJhY2tncm91bmQtY29sb3I6IGN1cnJlbnRDb2xvcjtcbiAgLy8gc3R5bGVsaW50LWRpc2FibGUtbmV4dC1saW5lIHByb3BlcnR5LWJsYWNrbGlzdFxuICBib3JkZXItcmFkaXVzOiA1MCU7XG4gIG9wYWNpdHk6IDA7XG4gIGFuaW1hdGlvbjogc3Bpbm5lci1ncm93IC43NXMgbGluZWFyIGluZmluaXRlO1xufVxuXG4uc3Bpbm5lci1ncm93LXNtIHtcbiAgd2lkdGg6ICRzcGlubmVyLXdpZHRoLXNtO1xuICBoZWlnaHQ6ICRzcGlubmVyLWhlaWdodC1zbTtcbn1cbiIsIi8vIHN0eWxlbGludC1kaXNhYmxlIGRlY2xhcmF0aW9uLW5vLWltcG9ydGFudFxuXG4uYWxpZ24tYmFzZWxpbmUgICAgeyB2ZXJ0aWNhbC1hbGlnbjogYmFzZWxpbmUgIWltcG9ydGFudDsgfSAvLyBCcm93c2VyIGRlZmF1bHRcbi5hbGlnbi10b3AgICAgICAgICB7IHZlcnRpY2FsLWFsaWduOiB0b3AgIWltcG9ydGFudDsgfVxuLmFsaWduLW1pZGRsZSAgICAgIHsgdmVydGljYWwtYWxpZ246IG1pZGRsZSAhaW1wb3J0YW50OyB9XG4uYWxpZ24tYm90dG9tICAgICAgeyB2ZXJ0aWNhbC1hbGlnbjogYm90dG9tICFpbXBvcnRhbnQ7IH1cbi5hbGlnbi10ZXh0LWJvdHRvbSB7IHZlcnRpY2FsLWFsaWduOiB0ZXh0LWJvdHRvbSAhaW1wb3J0YW50OyB9XG4uYWxpZ24tdGV4dC10b3AgICAgeyB2ZXJ0aWNhbC1hbGlnbjogdGV4dC10b3AgIWltcG9ydGFudDsgfVxuIiwiLy8gc3R5bGVsaW50LWRpc2FibGUgZGVjbGFyYXRpb24tbm8taW1wb3J0YW50XG5cbi8vIENvbnRleHR1YWwgYmFja2dyb3VuZHNcblxuQG1peGluIGJnLXZhcmlhbnQoJHBhcmVudCwgJGNvbG9yLCAkaWdub3JlLXdhcm5pbmc6IGZhbHNlKSB7XG4gICN7JHBhcmVudH0ge1xuICAgIGJhY2tncm91bmQtY29sb3I6ICRjb2xvciAhaW1wb3J0YW50O1xuICB9XG4gIGEjeyRwYXJlbnR9LFxuICBidXR0b24jeyRwYXJlbnR9IHtcbiAgICBAaW5jbHVkZSBob3Zlci1mb2N1cygpIHtcbiAgICAgIGJhY2tncm91bmQtY29sb3I6IGRhcmtlbigkY29sb3IsIDEwJSkgIWltcG9ydGFudDtcbiAgICB9XG4gIH1cbiAgQGluY2x1ZGUgZGVwcmVjYXRlKFwiVGhlIGBiZy12YXJpYW50YCBtaXhpblwiLCBcInY0LjQuMFwiLCBcInY1XCIsICRpZ25vcmUtd2FybmluZyk7XG59XG5cbkBtaXhpbiBiZy1ncmFkaWVudC12YXJpYW50KCRwYXJlbnQsICRjb2xvciwgJGlnbm9yZS13YXJuaW5nOiBmYWxzZSkge1xuICAjeyRwYXJlbnR9IHtcbiAgICBiYWNrZ3JvdW5kOiAkY29sb3IgbGluZWFyLWdyYWRpZW50KDE4MGRlZywgbWl4KCRib2R5LWJnLCAkY29sb3IsIDE1JSksICRjb2xvcikgcmVwZWF0LXggIWltcG9ydGFudDtcbiAgfVxuICBAaW5jbHVkZSBkZXByZWNhdGUoXCJUaGUgYGJnLWdyYWRpZW50LXZhcmlhbnRgIG1peGluXCIsIFwidjQuNS4wXCIsIFwidjVcIiwgJGlnbm9yZS13YXJuaW5nKTtcbn1cbiIsIi8vIHN0eWxlbGludC1kaXNhYmxlIGRlY2xhcmF0aW9uLW5vLWltcG9ydGFudFxuXG5AZWFjaCAkY29sb3IsICR2YWx1ZSBpbiAkdGhlbWUtY29sb3JzIHtcbiAgQGluY2x1ZGUgYmctdmFyaWFudChcIi5iZy0jeyRjb2xvcn1cIiwgJHZhbHVlLCB0cnVlKTtcbn1cblxuQGlmICRlbmFibGUtZ3JhZGllbnRzIHtcbiAgQGVhY2ggJGNvbG9yLCAkdmFsdWUgaW4gJHRoZW1lLWNvbG9ycyB7XG4gICAgQGluY2x1ZGUgYmctZ3JhZGllbnQtdmFyaWFudChcIi5iZy1ncmFkaWVudC0jeyRjb2xvcn1cIiwgJHZhbHVlLCB0cnVlKTtcbiAgfVxufVxuXG4uYmctd2hpdGUge1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAkd2hpdGUgIWltcG9ydGFudDtcbn1cblxuLmJnLXRyYW5zcGFyZW50IHtcbiAgYmFja2dyb3VuZC1jb2xvcjogdHJhbnNwYXJlbnQgIWltcG9ydGFudDtcbn1cbiIsIi8vIHN0eWxlbGludC1kaXNhYmxlIHByb3BlcnR5LWJsYWNrbGlzdCwgZGVjbGFyYXRpb24tbm8taW1wb3J0YW50XG5cbi8vXG4vLyBCb3JkZXJcbi8vXG5cbi5ib3JkZXIgICAgICAgICB7IGJvcmRlcjogJGJvcmRlci13aWR0aCBzb2xpZCAkYm9yZGVyLWNvbG9yICFpbXBvcnRhbnQ7IH1cbi5ib3JkZXItdG9wICAgICB7IGJvcmRlci10b3A6ICRib3JkZXItd2lkdGggc29saWQgJGJvcmRlci1jb2xvciAhaW1wb3J0YW50OyB9XG4uYm9yZGVyLXJpZ2h0ICAgeyBib3JkZXItcmlnaHQ6ICRib3JkZXItd2lkdGggc29saWQgJGJvcmRlci1jb2xvciAhaW1wb3J0YW50OyB9XG4uYm9yZGVyLWJvdHRvbSAgeyBib3JkZXItYm90dG9tOiAkYm9yZGVyLXdpZHRoIHNvbGlkICRib3JkZXItY29sb3IgIWltcG9ydGFudDsgfVxuLmJvcmRlci1sZWZ0ICAgIHsgYm9yZGVyLWxlZnQ6ICRib3JkZXItd2lkdGggc29saWQgJGJvcmRlci1jb2xvciAhaW1wb3J0YW50OyB9XG5cbi5ib3JkZXItMCAgICAgICAgeyBib3JkZXI6IDAgIWltcG9ydGFudDsgfVxuLmJvcmRlci10b3AtMCAgICB7IGJvcmRlci10b3A6IDAgIWltcG9ydGFudDsgfVxuLmJvcmRlci1yaWdodC0wICB7IGJvcmRlci1yaWdodDogMCAhaW1wb3J0YW50OyB9XG4uYm9yZGVyLWJvdHRvbS0wIHsgYm9yZGVyLWJvdHRvbTogMCAhaW1wb3J0YW50OyB9XG4uYm9yZGVyLWxlZnQtMCAgIHsgYm9yZGVyLWxlZnQ6IDAgIWltcG9ydGFudDsgfVxuXG5AZWFjaCAkY29sb3IsICR2YWx1ZSBpbiAkdGhlbWUtY29sb3JzIHtcbiAgLmJvcmRlci0jeyRjb2xvcn0ge1xuICAgIGJvcmRlci1jb2xvcjogJHZhbHVlICFpbXBvcnRhbnQ7XG4gIH1cbn1cblxuLmJvcmRlci13aGl0ZSB7XG4gIGJvcmRlci1jb2xvcjogJHdoaXRlICFpbXBvcnRhbnQ7XG59XG5cbi8vXG4vLyBCb3JkZXItcmFkaXVzXG4vL1xuXG4ucm91bmRlZC1zbSB7XG4gIGJvcmRlci1yYWRpdXM6ICRib3JkZXItcmFkaXVzLXNtICFpbXBvcnRhbnQ7XG59XG5cbi5yb3VuZGVkIHtcbiAgYm9yZGVyLXJhZGl1czogJGJvcmRlci1yYWRpdXMgIWltcG9ydGFudDtcbn1cblxuLnJvdW5kZWQtdG9wIHtcbiAgYm9yZGVyLXRvcC1sZWZ0LXJhZGl1czogJGJvcmRlci1yYWRpdXMgIWltcG9ydGFudDtcbiAgYm9yZGVyLXRvcC1yaWdodC1yYWRpdXM6ICRib3JkZXItcmFkaXVzICFpbXBvcnRhbnQ7XG59XG5cbi5yb3VuZGVkLXJpZ2h0IHtcbiAgYm9yZGVyLXRvcC1yaWdodC1yYWRpdXM6ICRib3JkZXItcmFkaXVzICFpbXBvcnRhbnQ7XG4gIGJvcmRlci1ib3R0b20tcmlnaHQtcmFkaXVzOiAkYm9yZGVyLXJhZGl1cyAhaW1wb3J0YW50O1xufVxuXG4ucm91bmRlZC1ib3R0b20ge1xuICBib3JkZXItYm90dG9tLXJpZ2h0LXJhZGl1czogJGJvcmRlci1yYWRpdXMgIWltcG9ydGFudDtcbiAgYm9yZGVyLWJvdHRvbS1sZWZ0LXJhZGl1czogJGJvcmRlci1yYWRpdXMgIWltcG9ydGFudDtcbn1cblxuLnJvdW5kZWQtbGVmdCB7XG4gIGJvcmRlci10b3AtbGVmdC1yYWRpdXM6ICRib3JkZXItcmFkaXVzICFpbXBvcnRhbnQ7XG4gIGJvcmRlci1ib3R0b20tbGVmdC1yYWRpdXM6ICRib3JkZXItcmFkaXVzICFpbXBvcnRhbnQ7XG59XG5cbi5yb3VuZGVkLWxnIHtcbiAgYm9yZGVyLXJhZGl1czogJGJvcmRlci1yYWRpdXMtbGcgIWltcG9ydGFudDtcbn1cblxuLnJvdW5kZWQtY2lyY2xlIHtcbiAgYm9yZGVyLXJhZGl1czogNTAlICFpbXBvcnRhbnQ7XG59XG5cbi5yb3VuZGVkLXBpbGwge1xuICBib3JkZXItcmFkaXVzOiAkcm91bmRlZC1waWxsICFpbXBvcnRhbnQ7XG59XG5cbi5yb3VuZGVkLTAge1xuICBib3JkZXItcmFkaXVzOiAwICFpbXBvcnRhbnQ7XG59XG4iLCIvLyBzdHlsZWxpbnQtZGlzYWJsZSBkZWNsYXJhdGlvbi1uby1pbXBvcnRhbnRcblxuLy9cbi8vIFV0aWxpdGllcyBmb3IgY29tbW9uIGBkaXNwbGF5YCB2YWx1ZXNcbi8vXG5cbkBlYWNoICRicmVha3BvaW50IGluIG1hcC1rZXlzKCRncmlkLWJyZWFrcG9pbnRzKSB7XG4gIEBpbmNsdWRlIG1lZGlhLWJyZWFrcG9pbnQtdXAoJGJyZWFrcG9pbnQpIHtcbiAgICAkaW5maXg6IGJyZWFrcG9pbnQtaW5maXgoJGJyZWFrcG9pbnQsICRncmlkLWJyZWFrcG9pbnRzKTtcblxuICAgIEBlYWNoICR2YWx1ZSBpbiAkZGlzcGxheXMge1xuICAgICAgLmQjeyRpbmZpeH0tI3skdmFsdWV9IHsgZGlzcGxheTogJHZhbHVlICFpbXBvcnRhbnQ7IH1cbiAgICB9XG4gIH1cbn1cblxuXG4vL1xuLy8gVXRpbGl0aWVzIGZvciB0b2dnbGluZyBgZGlzcGxheWAgaW4gcHJpbnRcbi8vXG5cbkBtZWRpYSBwcmludCB7XG4gIEBlYWNoICR2YWx1ZSBpbiAkZGlzcGxheXMge1xuICAgIC5kLXByaW50LSN7JHZhbHVlfSB7IGRpc3BsYXk6ICR2YWx1ZSAhaW1wb3J0YW50OyB9XG4gIH1cbn1cbiIsIi8vIENyZWRpdDogTmljb2xhcyBHYWxsYWdoZXIgYW5kIFNVSVQgQ1NTLlxuXG4uZW1iZWQtcmVzcG9uc2l2ZSB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgZGlzcGxheTogYmxvY2s7XG4gIHdpZHRoOiAxMDAlO1xuICBwYWRkaW5nOiAwO1xuICBvdmVyZmxvdzogaGlkZGVuO1xuXG4gICY6OmJlZm9yZSB7XG4gICAgZGlzcGxheTogYmxvY2s7XG4gICAgY29udGVudDogXCJcIjtcbiAgfVxuXG4gIC5lbWJlZC1yZXNwb25zaXZlLWl0ZW0sXG4gIGlmcmFtZSxcbiAgZW1iZWQsXG4gIG9iamVjdCxcbiAgdmlkZW8ge1xuICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICB0b3A6IDA7XG4gICAgYm90dG9tOiAwO1xuICAgIGxlZnQ6IDA7XG4gICAgd2lkdGg6IDEwMCU7XG4gICAgaGVpZ2h0OiAxMDAlO1xuICAgIGJvcmRlcjogMDtcbiAgfVxufVxuXG5AZWFjaCAkZW1iZWQtcmVzcG9uc2l2ZS1hc3BlY3QtcmF0aW8gaW4gJGVtYmVkLXJlc3BvbnNpdmUtYXNwZWN0LXJhdGlvcyB7XG4gICRlbWJlZC1yZXNwb25zaXZlLWFzcGVjdC1yYXRpby14OiBudGgoJGVtYmVkLXJlc3BvbnNpdmUtYXNwZWN0LXJhdGlvLCAxKTtcbiAgJGVtYmVkLXJlc3BvbnNpdmUtYXNwZWN0LXJhdGlvLXk6IG50aCgkZW1iZWQtcmVzcG9uc2l2ZS1hc3BlY3QtcmF0aW8sIDIpO1xuXG4gIC5lbWJlZC1yZXNwb25zaXZlLSN7JGVtYmVkLXJlc3BvbnNpdmUtYXNwZWN0LXJhdGlvLXh9YnkjeyRlbWJlZC1yZXNwb25zaXZlLWFzcGVjdC1yYXRpby15fSB7XG4gICAgJjo6YmVmb3JlIHtcbiAgICAgIHBhZGRpbmctdG9wOiBwZXJjZW50YWdlKCRlbWJlZC1yZXNwb25zaXZlLWFzcGVjdC1yYXRpby15IC8gJGVtYmVkLXJlc3BvbnNpdmUtYXNwZWN0LXJhdGlvLXgpO1xuICAgIH1cbiAgfVxufVxuIiwiLy8gc3R5bGVsaW50LWRpc2FibGUgZGVjbGFyYXRpb24tbm8taW1wb3J0YW50XG5cbi8vIEZsZXggdmFyaWF0aW9uXG4vL1xuLy8gQ3VzdG9tIHN0eWxlcyBmb3IgYWRkaXRpb25hbCBmbGV4IGFsaWdubWVudCBvcHRpb25zLlxuXG5AZWFjaCAkYnJlYWtwb2ludCBpbiBtYXAta2V5cygkZ3JpZC1icmVha3BvaW50cykge1xuICBAaW5jbHVkZSBtZWRpYS1icmVha3BvaW50LXVwKCRicmVha3BvaW50KSB7XG4gICAgJGluZml4OiBicmVha3BvaW50LWluZml4KCRicmVha3BvaW50LCAkZ3JpZC1icmVha3BvaW50cyk7XG5cbiAgICAuZmxleCN7JGluZml4fS1yb3cgICAgICAgICAgICB7IGZsZXgtZGlyZWN0aW9uOiByb3cgIWltcG9ydGFudDsgfVxuICAgIC5mbGV4I3skaW5maXh9LWNvbHVtbiAgICAgICAgIHsgZmxleC1kaXJlY3Rpb246IGNvbHVtbiAhaW1wb3J0YW50OyB9XG4gICAgLmZsZXgjeyRpbmZpeH0tcm93LXJldmVyc2UgICAgeyBmbGV4LWRpcmVjdGlvbjogcm93LXJldmVyc2UgIWltcG9ydGFudDsgfVxuICAgIC5mbGV4I3skaW5maXh9LWNvbHVtbi1yZXZlcnNlIHsgZmxleC1kaXJlY3Rpb246IGNvbHVtbi1yZXZlcnNlICFpbXBvcnRhbnQ7IH1cblxuICAgIC5mbGV4I3skaW5maXh9LXdyYXAgICAgICAgICB7IGZsZXgtd3JhcDogd3JhcCAhaW1wb3J0YW50OyB9XG4gICAgLmZsZXgjeyRpbmZpeH0tbm93cmFwICAgICAgIHsgZmxleC13cmFwOiBub3dyYXAgIWltcG9ydGFudDsgfVxuICAgIC5mbGV4I3skaW5maXh9LXdyYXAtcmV2ZXJzZSB7IGZsZXgtd3JhcDogd3JhcC1yZXZlcnNlICFpbXBvcnRhbnQ7IH1cbiAgICAuZmxleCN7JGluZml4fS1maWxsICAgICAgICAgeyBmbGV4OiAxIDEgYXV0byAhaW1wb3J0YW50OyB9XG4gICAgLmZsZXgjeyRpbmZpeH0tZ3Jvdy0wICAgICAgIHsgZmxleC1ncm93OiAwICFpbXBvcnRhbnQ7IH1cbiAgICAuZmxleCN7JGluZml4fS1ncm93LTEgICAgICAgeyBmbGV4LWdyb3c6IDEgIWltcG9ydGFudDsgfVxuICAgIC5mbGV4I3skaW5maXh9LXNocmluay0wICAgICB7IGZsZXgtc2hyaW5rOiAwICFpbXBvcnRhbnQ7IH1cbiAgICAuZmxleCN7JGluZml4fS1zaHJpbmstMSAgICAgeyBmbGV4LXNocmluazogMSAhaW1wb3J0YW50OyB9XG5cbiAgICAuanVzdGlmeS1jb250ZW50I3skaW5maXh9LXN0YXJ0ICAgeyBqdXN0aWZ5LWNvbnRlbnQ6IGZsZXgtc3RhcnQgIWltcG9ydGFudDsgfVxuICAgIC5qdXN0aWZ5LWNvbnRlbnQjeyRpbmZpeH0tZW5kICAgICB7IGp1c3RpZnktY29udGVudDogZmxleC1lbmQgIWltcG9ydGFudDsgfVxuICAgIC5qdXN0aWZ5LWNvbnRlbnQjeyRpbmZpeH0tY2VudGVyICB7IGp1c3RpZnktY29udGVudDogY2VudGVyICFpbXBvcnRhbnQ7IH1cbiAgICAuanVzdGlmeS1jb250ZW50I3skaW5maXh9LWJldHdlZW4geyBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWJldHdlZW4gIWltcG9ydGFudDsgfVxuICAgIC5qdXN0aWZ5LWNvbnRlbnQjeyRpbmZpeH0tYXJvdW5kICB7IGp1c3RpZnktY29udGVudDogc3BhY2UtYXJvdW5kICFpbXBvcnRhbnQ7IH1cblxuICAgIC5hbGlnbi1pdGVtcyN7JGluZml4fS1zdGFydCAgICB7IGFsaWduLWl0ZW1zOiBmbGV4LXN0YXJ0ICFpbXBvcnRhbnQ7IH1cbiAgICAuYWxpZ24taXRlbXMjeyRpbmZpeH0tZW5kICAgICAgeyBhbGlnbi1pdGVtczogZmxleC1lbmQgIWltcG9ydGFudDsgfVxuICAgIC5hbGlnbi1pdGVtcyN7JGluZml4fS1jZW50ZXIgICB7IGFsaWduLWl0ZW1zOiBjZW50ZXIgIWltcG9ydGFudDsgfVxuICAgIC5hbGlnbi1pdGVtcyN7JGluZml4fS1iYXNlbGluZSB7IGFsaWduLWl0ZW1zOiBiYXNlbGluZSAhaW1wb3J0YW50OyB9XG4gICAgLmFsaWduLWl0ZW1zI3skaW5maXh9LXN0cmV0Y2ggIHsgYWxpZ24taXRlbXM6IHN0cmV0Y2ggIWltcG9ydGFudDsgfVxuXG4gICAgLmFsaWduLWNvbnRlbnQjeyRpbmZpeH0tc3RhcnQgICB7IGFsaWduLWNvbnRlbnQ6IGZsZXgtc3RhcnQgIWltcG9ydGFudDsgfVxuICAgIC5hbGlnbi1jb250ZW50I3skaW5maXh9LWVuZCAgICAgeyBhbGlnbi1jb250ZW50OiBmbGV4LWVuZCAhaW1wb3J0YW50OyB9XG4gICAgLmFsaWduLWNvbnRlbnQjeyRpbmZpeH0tY2VudGVyICB7IGFsaWduLWNvbnRlbnQ6IGNlbnRlciAhaW1wb3J0YW50OyB9XG4gICAgLmFsaWduLWNvbnRlbnQjeyRpbmZpeH0tYmV0d2VlbiB7IGFsaWduLWNvbnRlbnQ6IHNwYWNlLWJldHdlZW4gIWltcG9ydGFudDsgfVxuICAgIC5hbGlnbi1jb250ZW50I3skaW5maXh9LWFyb3VuZCAgeyBhbGlnbi1jb250ZW50OiBzcGFjZS1hcm91bmQgIWltcG9ydGFudDsgfVxuICAgIC5hbGlnbi1jb250ZW50I3skaW5maXh9LXN0cmV0Y2ggeyBhbGlnbi1jb250ZW50OiBzdHJldGNoICFpbXBvcnRhbnQ7IH1cblxuICAgIC5hbGlnbi1zZWxmI3skaW5maXh9LWF1dG8gICAgIHsgYWxpZ24tc2VsZjogYXV0byAhaW1wb3J0YW50OyB9XG4gICAgLmFsaWduLXNlbGYjeyRpbmZpeH0tc3RhcnQgICAgeyBhbGlnbi1zZWxmOiBmbGV4LXN0YXJ0ICFpbXBvcnRhbnQ7IH1cbiAgICAuYWxpZ24tc2VsZiN7JGluZml4fS1lbmQgICAgICB7IGFsaWduLXNlbGY6IGZsZXgtZW5kICFpbXBvcnRhbnQ7IH1cbiAgICAuYWxpZ24tc2VsZiN7JGluZml4fS1jZW50ZXIgICB7IGFsaWduLXNlbGY6IGNlbnRlciAhaW1wb3J0YW50OyB9XG4gICAgLmFsaWduLXNlbGYjeyRpbmZpeH0tYmFzZWxpbmUgeyBhbGlnbi1zZWxmOiBiYXNlbGluZSAhaW1wb3J0YW50OyB9XG4gICAgLmFsaWduLXNlbGYjeyRpbmZpeH0tc3RyZXRjaCAgeyBhbGlnbi1zZWxmOiBzdHJldGNoICFpbXBvcnRhbnQ7IH1cbiAgfVxufVxuIiwiLy8gc3R5bGVsaW50LWRpc2FibGUgZGVjbGFyYXRpb24tbm8taW1wb3J0YW50XG5cbkBlYWNoICRicmVha3BvaW50IGluIG1hcC1rZXlzKCRncmlkLWJyZWFrcG9pbnRzKSB7XG4gIEBpbmNsdWRlIG1lZGlhLWJyZWFrcG9pbnQtdXAoJGJyZWFrcG9pbnQpIHtcbiAgICAkaW5maXg6IGJyZWFrcG9pbnQtaW5maXgoJGJyZWFrcG9pbnQsICRncmlkLWJyZWFrcG9pbnRzKTtcblxuICAgIC5mbG9hdCN7JGluZml4fS1sZWZ0ICB7IGZsb2F0OiBsZWZ0ICFpbXBvcnRhbnQ7IH1cbiAgICAuZmxvYXQjeyRpbmZpeH0tcmlnaHQgeyBmbG9hdDogcmlnaHQgIWltcG9ydGFudDsgfVxuICAgIC5mbG9hdCN7JGluZml4fS1ub25lICB7IGZsb2F0OiBub25lICFpbXBvcnRhbnQ7IH1cbiAgfVxufVxuIiwiLy8gc3R5bGVsaW50LWRpc2FibGUgZGVjbGFyYXRpb24tbm8taW1wb3J0YW50XG5cbkBlYWNoICR2YWx1ZSBpbiAkdXNlci1zZWxlY3RzIHtcbiAgLnVzZXItc2VsZWN0LSN7JHZhbHVlfSB7IHVzZXItc2VsZWN0OiAkdmFsdWUgIWltcG9ydGFudDsgfVxufVxuIiwiLy8gc3R5bGVsaW50LWRpc2FibGUgZGVjbGFyYXRpb24tbm8taW1wb3J0YW50XG5cbkBlYWNoICR2YWx1ZSBpbiAkb3ZlcmZsb3dzIHtcbiAgLm92ZXJmbG93LSN7JHZhbHVlfSB7IG92ZXJmbG93OiAkdmFsdWUgIWltcG9ydGFudDsgfVxufVxuIiwiLy8gc3R5bGVsaW50LWRpc2FibGUgZGVjbGFyYXRpb24tbm8taW1wb3J0YW50XG5cbi8vIENvbW1vbiB2YWx1ZXNcbkBlYWNoICRwb3NpdGlvbiBpbiAkcG9zaXRpb25zIHtcbiAgLnBvc2l0aW9uLSN7JHBvc2l0aW9ufSB7IHBvc2l0aW9uOiAkcG9zaXRpb24gIWltcG9ydGFudDsgfVxufVxuXG4vLyBTaG9ydGhhbmRcblxuLmZpeGVkLXRvcCB7XG4gIHBvc2l0aW9uOiBmaXhlZDtcbiAgdG9wOiAwO1xuICByaWdodDogMDtcbiAgbGVmdDogMDtcbiAgei1pbmRleDogJHppbmRleC1maXhlZDtcbn1cblxuLmZpeGVkLWJvdHRvbSB7XG4gIHBvc2l0aW9uOiBmaXhlZDtcbiAgcmlnaHQ6IDA7XG4gIGJvdHRvbTogMDtcbiAgbGVmdDogMDtcbiAgei1pbmRleDogJHppbmRleC1maXhlZDtcbn1cblxuLnN0aWNreS10b3Age1xuICBAc3VwcG9ydHMgKHBvc2l0aW9uOiBzdGlja3kpIHtcbiAgICBwb3NpdGlvbjogc3RpY2t5O1xuICAgIHRvcDogMDtcbiAgICB6LWluZGV4OiAkemluZGV4LXN0aWNreTtcbiAgfVxufVxuIiwiLy9cbi8vIFNjcmVlbnJlYWRlcnNcbi8vXG5cbi5zci1vbmx5IHtcbiAgQGluY2x1ZGUgc3Itb25seSgpO1xufVxuXG4uc3Itb25seS1mb2N1c2FibGUge1xuICBAaW5jbHVkZSBzci1vbmx5LWZvY3VzYWJsZSgpO1xufVxuIiwiLy8gT25seSBkaXNwbGF5IGNvbnRlbnQgdG8gc2NyZWVuIHJlYWRlcnNcbi8vXG4vLyBTZWU6IGh0dHBzOi8vYTExeXByb2plY3QuY29tL3Bvc3RzL2hvdy10by1oaWRlLWNvbnRlbnQvXG4vLyBTZWU6IGh0dHBzOi8vaHVnb2dpcmF1ZGVsLmNvbS8yMDE2LzEwLzEzL2Nzcy1oaWRlLWFuZC1zZWVrL1xuXG5AbWl4aW4gc3Itb25seSgpIHtcbiAgcG9zaXRpb246IGFic29sdXRlO1xuICB3aWR0aDogMXB4O1xuICBoZWlnaHQ6IDFweDtcbiAgcGFkZGluZzogMDtcbiAgbWFyZ2luOiAtMXB4OyAvLyBGaXggZm9yIGh0dHBzOi8vZ2l0aHViLmNvbS90d2JzL2Jvb3RzdHJhcC9pc3N1ZXMvMjU2ODZcbiAgb3ZlcmZsb3c6IGhpZGRlbjtcbiAgY2xpcDogcmVjdCgwLCAwLCAwLCAwKTtcbiAgd2hpdGUtc3BhY2U6IG5vd3JhcDtcbiAgYm9yZGVyOiAwO1xufVxuXG4vLyBVc2UgaW4gY29uanVuY3Rpb24gd2l0aCAuc3Itb25seSB0byBvbmx5IGRpc3BsYXkgY29udGVudCB3aGVuIGl0J3MgZm9jdXNlZC5cbi8vXG4vLyBVc2VmdWwgZm9yIFwiU2tpcCB0byBtYWluIGNvbnRlbnRcIiBsaW5rczsgc2VlIGh0dHBzOi8vd3d3LnczLm9yZy9UUi8yMDEzL05PVEUtV0NBRzIwLVRFQ0hTLTIwMTMwOTA1L0cxXG4vL1xuLy8gQ3JlZGl0OiBIVE1MNSBCb2lsZXJwbGF0ZVxuXG5AbWl4aW4gc3Itb25seS1mb2N1c2FibGUoKSB7XG4gICY6YWN0aXZlLFxuICAmOmZvY3VzIHtcbiAgICBwb3NpdGlvbjogc3RhdGljO1xuICAgIHdpZHRoOiBhdXRvO1xuICAgIGhlaWdodDogYXV0bztcbiAgICBvdmVyZmxvdzogdmlzaWJsZTtcbiAgICBjbGlwOiBhdXRvO1xuICAgIHdoaXRlLXNwYWNlOiBub3JtYWw7XG4gIH1cbn1cbiIsIi8vIHN0eWxlbGludC1kaXNhYmxlIGRlY2xhcmF0aW9uLW5vLWltcG9ydGFudFxuXG4uc2hhZG93LXNtIHsgYm94LXNoYWRvdzogJGJveC1zaGFkb3ctc20gIWltcG9ydGFudDsgfVxuLnNoYWRvdyB7IGJveC1zaGFkb3c6ICRib3gtc2hhZG93ICFpbXBvcnRhbnQ7IH1cbi5zaGFkb3ctbGcgeyBib3gtc2hhZG93OiAkYm94LXNoYWRvdy1sZyAhaW1wb3J0YW50OyB9XG4uc2hhZG93LW5vbmUgeyBib3gtc2hhZG93OiBub25lICFpbXBvcnRhbnQ7IH1cbiIsIi8vIHN0eWxlbGludC1kaXNhYmxlIGRlY2xhcmF0aW9uLW5vLWltcG9ydGFudFxuXG4vLyBXaWR0aCBhbmQgaGVpZ2h0XG5cbkBlYWNoICRwcm9wLCAkYWJicmV2IGluICh3aWR0aDogdywgaGVpZ2h0OiBoKSB7XG4gIEBlYWNoICRzaXplLCAkbGVuZ3RoIGluICRzaXplcyB7XG4gICAgLiN7JGFiYnJldn0tI3skc2l6ZX0geyAjeyRwcm9wfTogJGxlbmd0aCAhaW1wb3J0YW50OyB9XG4gIH1cbn1cblxuLm13LTEwMCB7IG1heC13aWR0aDogMTAwJSAhaW1wb3J0YW50OyB9XG4ubWgtMTAwIHsgbWF4LWhlaWdodDogMTAwJSAhaW1wb3J0YW50OyB9XG5cbi8vIFZpZXdwb3J0IGFkZGl0aW9uYWwgaGVscGVyc1xuXG4ubWluLXZ3LTEwMCB7IG1pbi13aWR0aDogMTAwdncgIWltcG9ydGFudDsgfVxuLm1pbi12aC0xMDAgeyBtaW4taGVpZ2h0OiAxMDB2aCAhaW1wb3J0YW50OyB9XG5cbi52dy0xMDAgeyB3aWR0aDogMTAwdncgIWltcG9ydGFudDsgfVxuLnZoLTEwMCB7IGhlaWdodDogMTAwdmggIWltcG9ydGFudDsgfVxuIiwiLy8gc3R5bGVsaW50LWRpc2FibGUgZGVjbGFyYXRpb24tbm8taW1wb3J0YW50XG5cbi8vIE1hcmdpbiBhbmQgUGFkZGluZ1xuXG5AZWFjaCAkYnJlYWtwb2ludCBpbiBtYXAta2V5cygkZ3JpZC1icmVha3BvaW50cykge1xuICBAaW5jbHVkZSBtZWRpYS1icmVha3BvaW50LXVwKCRicmVha3BvaW50KSB7XG4gICAgJGluZml4OiBicmVha3BvaW50LWluZml4KCRicmVha3BvaW50LCAkZ3JpZC1icmVha3BvaW50cyk7XG5cbiAgICBAZWFjaCAkcHJvcCwgJGFiYnJldiBpbiAobWFyZ2luOiBtLCBwYWRkaW5nOiBwKSB7XG4gICAgICBAZWFjaCAkc2l6ZSwgJGxlbmd0aCBpbiAkc3BhY2VycyB7XG4gICAgICAgIC4jeyRhYmJyZXZ9I3skaW5maXh9LSN7JHNpemV9IHsgI3skcHJvcH06ICRsZW5ndGggIWltcG9ydGFudDsgfVxuICAgICAgICAuI3skYWJicmV2fXQjeyRpbmZpeH0tI3skc2l6ZX0sXG4gICAgICAgIC4jeyRhYmJyZXZ9eSN7JGluZml4fS0jeyRzaXplfSB7XG4gICAgICAgICAgI3skcHJvcH0tdG9wOiAkbGVuZ3RoICFpbXBvcnRhbnQ7XG4gICAgICAgIH1cbiAgICAgICAgLiN7JGFiYnJldn1yI3skaW5maXh9LSN7JHNpemV9LFxuICAgICAgICAuI3skYWJicmV2fXgjeyRpbmZpeH0tI3skc2l6ZX0ge1xuICAgICAgICAgICN7JHByb3B9LXJpZ2h0OiAkbGVuZ3RoICFpbXBvcnRhbnQ7XG4gICAgICAgIH1cbiAgICAgICAgLiN7JGFiYnJldn1iI3skaW5maXh9LSN7JHNpemV9LFxuICAgICAgICAuI3skYWJicmV2fXkjeyRpbmZpeH0tI3skc2l6ZX0ge1xuICAgICAgICAgICN7JHByb3B9LWJvdHRvbTogJGxlbmd0aCAhaW1wb3J0YW50O1xuICAgICAgICB9XG4gICAgICAgIC4jeyRhYmJyZXZ9bCN7JGluZml4fS0jeyRzaXplfSxcbiAgICAgICAgLiN7JGFiYnJldn14I3skaW5maXh9LSN7JHNpemV9IHtcbiAgICAgICAgICAjeyRwcm9wfS1sZWZ0OiAkbGVuZ3RoICFpbXBvcnRhbnQ7XG4gICAgICAgIH1cbiAgICAgIH1cbiAgICB9XG5cbiAgICAvLyBOZWdhdGl2ZSBtYXJnaW5zIChlLmcuLCB3aGVyZSBgLm1iLW4xYCBpcyBuZWdhdGl2ZSB2ZXJzaW9uIG9mIGAubWItMWApXG4gICAgQGVhY2ggJHNpemUsICRsZW5ndGggaW4gJHNwYWNlcnMge1xuICAgICAgQGlmICRzaXplICE9IDAge1xuICAgICAgICAubSN7JGluZml4fS1uI3skc2l6ZX0geyBtYXJnaW46IC0kbGVuZ3RoICFpbXBvcnRhbnQ7IH1cbiAgICAgICAgLm10I3skaW5maXh9LW4jeyRzaXplfSxcbiAgICAgICAgLm15I3skaW5maXh9LW4jeyRzaXplfSB7XG4gICAgICAgICAgbWFyZ2luLXRvcDogLSRsZW5ndGggIWltcG9ydGFudDtcbiAgICAgICAgfVxuICAgICAgICAubXIjeyRpbmZpeH0tbiN7JHNpemV9LFxuICAgICAgICAubXgjeyRpbmZpeH0tbiN7JHNpemV9IHtcbiAgICAgICAgICBtYXJnaW4tcmlnaHQ6IC0kbGVuZ3RoICFpbXBvcnRhbnQ7XG4gICAgICAgIH1cbiAgICAgICAgLm1iI3skaW5maXh9LW4jeyRzaXplfSxcbiAgICAgICAgLm15I3skaW5maXh9LW4jeyRzaXplfSB7XG4gICAgICAgICAgbWFyZ2luLWJvdHRvbTogLSRsZW5ndGggIWltcG9ydGFudDtcbiAgICAgICAgfVxuICAgICAgICAubWwjeyRpbmZpeH0tbiN7JHNpemV9LFxuICAgICAgICAubXgjeyRpbmZpeH0tbiN7JHNpemV9IHtcbiAgICAgICAgICBtYXJnaW4tbGVmdDogLSRsZW5ndGggIWltcG9ydGFudDtcbiAgICAgICAgfVxuICAgICAgfVxuICAgIH1cblxuICAgIC8vIFNvbWUgc3BlY2lhbCBtYXJnaW4gdXRpbHNcbiAgICAubSN7JGluZml4fS1hdXRvIHsgbWFyZ2luOiBhdXRvICFpbXBvcnRhbnQ7IH1cbiAgICAubXQjeyRpbmZpeH0tYXV0byxcbiAgICAubXkjeyRpbmZpeH0tYXV0byB7XG4gICAgICBtYXJnaW4tdG9wOiBhdXRvICFpbXBvcnRhbnQ7XG4gICAgfVxuICAgIC5tciN7JGluZml4fS1hdXRvLFxuICAgIC5teCN7JGluZml4fS1hdXRvIHtcbiAgICAgIG1hcmdpbi1yaWdodDogYXV0byAhaW1wb3J0YW50O1xuICAgIH1cbiAgICAubWIjeyRpbmZpeH0tYXV0byxcbiAgICAubXkjeyRpbmZpeH0tYXV0byB7XG4gICAgICBtYXJnaW4tYm90dG9tOiBhdXRvICFpbXBvcnRhbnQ7XG4gICAgfVxuICAgIC5tbCN7JGluZml4fS1hdXRvLFxuICAgIC5teCN7JGluZml4fS1hdXRvIHtcbiAgICAgIG1hcmdpbi1sZWZ0OiBhdXRvICFpbXBvcnRhbnQ7XG4gICAgfVxuICB9XG59XG4iLCIvL1xuLy8gU3RyZXRjaGVkIGxpbmtcbi8vXG5cbi5zdHJldGNoZWQtbGluayB7XG4gICY6OmFmdGVyIHtcbiAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgdG9wOiAwO1xuICAgIHJpZ2h0OiAwO1xuICAgIGJvdHRvbTogMDtcbiAgICBsZWZ0OiAwO1xuICAgIHotaW5kZXg6IDE7XG4gICAgLy8gSnVzdCBpbiBjYXNlIGBwb2ludGVyLWV2ZW50czogbm9uZWAgaXMgc2V0IG9uIGEgcGFyZW50XG4gICAgcG9pbnRlci1ldmVudHM6IGF1dG87XG4gICAgY29udGVudDogXCJcIjtcbiAgICAvLyBJRTEwIGJ1Z2ZpeCwgc2VlIGh0dHBzOi8vc3RhY2tvdmVyZmxvdy5jb20vcXVlc3Rpb25zLzE2OTQ3OTY3L2llMTAtaG92ZXItcHNldWRvLWNsYXNzLWRvZXNudC13b3JrLXdpdGhvdXQtYmFja2dyb3VuZC1jb2xvclxuICAgIGJhY2tncm91bmQtY29sb3I6IHJnYmEoMCwgMCwgMCwgMCk7XG4gIH1cbn1cbiIsIi8vIHN0eWxlbGludC1kaXNhYmxlIGRlY2xhcmF0aW9uLW5vLWltcG9ydGFudFxuXG4vL1xuLy8gVGV4dFxuLy9cblxuLnRleHQtbW9ub3NwYWNlIHsgZm9udC1mYW1pbHk6ICRmb250LWZhbWlseS1tb25vc3BhY2UgIWltcG9ydGFudDsgfVxuXG4vLyBBbGlnbm1lbnRcblxuLnRleHQtanVzdGlmeSAgeyB0ZXh0LWFsaWduOiBqdXN0aWZ5ICFpbXBvcnRhbnQ7IH1cbi50ZXh0LXdyYXAgICAgIHsgd2hpdGUtc3BhY2U6IG5vcm1hbCAhaW1wb3J0YW50OyB9XG4udGV4dC1ub3dyYXAgICB7IHdoaXRlLXNwYWNlOiBub3dyYXAgIWltcG9ydGFudDsgfVxuLnRleHQtdHJ1bmNhdGUgeyBAaW5jbHVkZSB0ZXh0LXRydW5jYXRlKCk7IH1cblxuLy8gUmVzcG9uc2l2ZSBhbGlnbm1lbnRcblxuQGVhY2ggJGJyZWFrcG9pbnQgaW4gbWFwLWtleXMoJGdyaWQtYnJlYWtwb2ludHMpIHtcbiAgQGluY2x1ZGUgbWVkaWEtYnJlYWtwb2ludC11cCgkYnJlYWtwb2ludCkge1xuICAgICRpbmZpeDogYnJlYWtwb2ludC1pbmZpeCgkYnJlYWtwb2ludCwgJGdyaWQtYnJlYWtwb2ludHMpO1xuXG4gICAgLnRleHQjeyRpbmZpeH0tbGVmdCAgIHsgdGV4dC1hbGlnbjogbGVmdCAhaW1wb3J0YW50OyB9XG4gICAgLnRleHQjeyRpbmZpeH0tcmlnaHQgIHsgdGV4dC1hbGlnbjogcmlnaHQgIWltcG9ydGFudDsgfVxuICAgIC50ZXh0I3skaW5maXh9LWNlbnRlciB7IHRleHQtYWxpZ246IGNlbnRlciAhaW1wb3J0YW50OyB9XG4gIH1cbn1cblxuLy8gVHJhbnNmb3JtYXRpb25cblxuLnRleHQtbG93ZXJjYXNlICB7IHRleHQtdHJhbnNmb3JtOiBsb3dlcmNhc2UgIWltcG9ydGFudDsgfVxuLnRleHQtdXBwZXJjYXNlICB7IHRleHQtdHJhbnNmb3JtOiB1cHBlcmNhc2UgIWltcG9ydGFudDsgfVxuLnRleHQtY2FwaXRhbGl6ZSB7IHRleHQtdHJhbnNmb3JtOiBjYXBpdGFsaXplICFpbXBvcnRhbnQ7IH1cblxuLy8gV2VpZ2h0IGFuZCBpdGFsaWNzXG5cbi5mb250LXdlaWdodC1saWdodCAgIHsgZm9udC13ZWlnaHQ6ICRmb250LXdlaWdodC1saWdodCAhaW1wb3J0YW50OyB9XG4uZm9udC13ZWlnaHQtbGlnaHRlciB7IGZvbnQtd2VpZ2h0OiAkZm9udC13ZWlnaHQtbGlnaHRlciAhaW1wb3J0YW50OyB9XG4uZm9udC13ZWlnaHQtbm9ybWFsICB7IGZvbnQtd2VpZ2h0OiAkZm9udC13ZWlnaHQtbm9ybWFsICFpbXBvcnRhbnQ7IH1cbi5mb250LXdlaWdodC1ib2xkICAgIHsgZm9udC13ZWlnaHQ6ICRmb250LXdlaWdodC1ib2xkICFpbXBvcnRhbnQ7IH1cbi5mb250LXdlaWdodC1ib2xkZXIgIHsgZm9udC13ZWlnaHQ6ICRmb250LXdlaWdodC1ib2xkZXIgIWltcG9ydGFudDsgfVxuLmZvbnQtaXRhbGljICAgICAgICAgeyBmb250LXN0eWxlOiBpdGFsaWMgIWltcG9ydGFudDsgfVxuXG4vLyBDb250ZXh0dWFsIGNvbG9yc1xuXG4udGV4dC13aGl0ZSB7IGNvbG9yOiAkd2hpdGUgIWltcG9ydGFudDsgfVxuXG5AZWFjaCAkY29sb3IsICR2YWx1ZSBpbiAkdGhlbWUtY29sb3JzIHtcbiAgQGluY2x1ZGUgdGV4dC1lbXBoYXNpcy12YXJpYW50KFwiLnRleHQtI3skY29sb3J9XCIsICR2YWx1ZSwgdHJ1ZSk7XG59XG5cbi50ZXh0LWJvZHkgeyBjb2xvcjogJGJvZHktY29sb3IgIWltcG9ydGFudDsgfVxuLnRleHQtbXV0ZWQgeyBjb2xvcjogJHRleHQtbXV0ZWQgIWltcG9ydGFudDsgfVxuXG4udGV4dC1ibGFjay01MCB7IGNvbG9yOiByZ2JhKCRibGFjaywgLjUpICFpbXBvcnRhbnQ7IH1cbi50ZXh0LXdoaXRlLTUwIHsgY29sb3I6IHJnYmEoJHdoaXRlLCAuNSkgIWltcG9ydGFudDsgfVxuXG4vLyBNaXNjXG5cbi50ZXh0LWhpZGUge1xuICBAaW5jbHVkZSB0ZXh0LWhpZGUoJGlnbm9yZS13YXJuaW5nOiB0cnVlKTtcbn1cblxuLnRleHQtZGVjb3JhdGlvbi1ub25lIHsgdGV4dC1kZWNvcmF0aW9uOiBub25lICFpbXBvcnRhbnQ7IH1cblxuLnRleHQtYnJlYWsge1xuICB3b3JkLXdyYXA6IGJyZWFrLXdvcmQgIWltcG9ydGFudDtcbn1cblxuLy8gUmVzZXRcblxuLnRleHQtcmVzZXQgeyBjb2xvcjogaW5oZXJpdCAhaW1wb3J0YW50OyB9XG4iLCIvLyBUZXh0IHRydW5jYXRlXG4vLyBSZXF1aXJlcyBpbmxpbmUtYmxvY2sgb3IgYmxvY2sgZm9yIHByb3BlciBzdHlsaW5nXG5cbkBtaXhpbiB0ZXh0LXRydW5jYXRlKCkge1xuICBvdmVyZmxvdzogaGlkZGVuO1xuICB0ZXh0LW92ZXJmbG93OiBlbGxpcHNpcztcbiAgd2hpdGUtc3BhY2U6IG5vd3JhcDtcbn1cbiIsIi8vIHN0eWxlbGludC1kaXNhYmxlIGRlY2xhcmF0aW9uLW5vLWltcG9ydGFudFxuXG4vLyBUeXBvZ3JhcGh5XG5cbkBtaXhpbiB0ZXh0LWVtcGhhc2lzLXZhcmlhbnQoJHBhcmVudCwgJGNvbG9yLCAkaWdub3JlLXdhcm5pbmc6IGZhbHNlKSB7XG4gICN7JHBhcmVudH0ge1xuICAgIGNvbG9yOiAkY29sb3IgIWltcG9ydGFudDtcbiAgfVxuICBAaWYgJGVtcGhhc2l6ZWQtbGluay1ob3Zlci1kYXJrZW4tcGVyY2VudGFnZSAhPSAwIHtcbiAgICBhI3skcGFyZW50fSB7XG4gICAgICBAaW5jbHVkZSBob3Zlci1mb2N1cygpIHtcbiAgICAgICAgY29sb3I6IGRhcmtlbigkY29sb3IsICRlbXBoYXNpemVkLWxpbmstaG92ZXItZGFya2VuLXBlcmNlbnRhZ2UpICFpbXBvcnRhbnQ7XG4gICAgICB9XG4gICAgfVxuICB9XG4gIEBpbmNsdWRlIGRlcHJlY2F0ZShcImB0ZXh0LWVtcGhhc2lzLXZhcmlhbnQoKWBcIiwgXCJ2NC40LjBcIiwgXCJ2NVwiLCAkaWdub3JlLXdhcm5pbmcpO1xufVxuIiwiLy8gQ1NTIGltYWdlIHJlcGxhY2VtZW50XG5AbWl4aW4gdGV4dC1oaWRlKCRpZ25vcmUtd2FybmluZzogZmFsc2UpIHtcbiAgLy8gc3R5bGVsaW50LWRpc2FibGUtbmV4dC1saW5lIGZvbnQtZmFtaWx5LW5vLW1pc3NpbmctZ2VuZXJpYy1mYW1pbHkta2V5d29yZFxuICBmb250OiAwLzAgYTtcbiAgY29sb3I6IHRyYW5zcGFyZW50O1xuICB0ZXh0LXNoYWRvdzogbm9uZTtcbiAgYmFja2dyb3VuZC1jb2xvcjogdHJhbnNwYXJlbnQ7XG4gIGJvcmRlcjogMDtcblxuICBAaW5jbHVkZSBkZXByZWNhdGUoXCJgdGV4dC1oaWRlKClgXCIsIFwidjQuMS4wXCIsIFwidjVcIiwgJGlnbm9yZS13YXJuaW5nKTtcbn1cbiIsIi8vIHN0eWxlbGludC1kaXNhYmxlIGRlY2xhcmF0aW9uLW5vLWltcG9ydGFudFxuXG4vL1xuLy8gVmlzaWJpbGl0eSB1dGlsaXRpZXNcbi8vXG5cbi52aXNpYmxlIHtcbiAgdmlzaWJpbGl0eTogdmlzaWJsZSAhaW1wb3J0YW50O1xufVxuXG4uaW52aXNpYmxlIHtcbiAgdmlzaWJpbGl0eTogaGlkZGVuICFpbXBvcnRhbnQ7XG59XG4iLCIvLyBzdHlsZWxpbnQtZGlzYWJsZSBkZWNsYXJhdGlvbi1uby1pbXBvcnRhbnQsIHNlbGVjdG9yLW5vLXF1YWxpZnlpbmctdHlwZVxuXG4vLyBTb3VyY2U6IGh0dHBzOi8vZ2l0aHViLmNvbS9oNWJwL21haW4uY3NzL2Jsb2IvbWFzdGVyL3NyYy9fcHJpbnQuY3NzXG5cbi8vID09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09XG4vLyBQcmludCBzdHlsZXMuXG4vLyBJbmxpbmVkIHRvIGF2b2lkIHRoZSBhZGRpdGlvbmFsIEhUVFAgcmVxdWVzdDpcbi8vIGh0dHBzOi8vd3d3LnBocGllZC5jb20vZGVsYXktbG9hZGluZy15b3VyLXByaW50LWNzcy9cbi8vID09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09XG5cbkBpZiAkZW5hYmxlLXByaW50LXN0eWxlcyB7XG4gIEBtZWRpYSBwcmludCB7XG4gICAgKixcbiAgICAqOjpiZWZvcmUsXG4gICAgKjo6YWZ0ZXIge1xuICAgICAgLy8gQm9vdHN0cmFwIHNwZWNpZmljOyBjb21tZW50IG91dCBgY29sb3JgIGFuZCBgYmFja2dyb3VuZGBcbiAgICAgIC8vY29sb3I6ICRibGFjayAhaW1wb3J0YW50OyAvLyBCbGFjayBwcmludHMgZmFzdGVyXG4gICAgICB0ZXh0LXNoYWRvdzogbm9uZSAhaW1wb3J0YW50O1xuICAgICAgLy9iYWNrZ3JvdW5kOiB0cmFuc3BhcmVudCAhaW1wb3J0YW50O1xuICAgICAgYm94LXNoYWRvdzogbm9uZSAhaW1wb3J0YW50O1xuICAgIH1cblxuICAgIGEge1xuICAgICAgJjpub3QoLmJ0bikge1xuICAgICAgICB0ZXh0LWRlY29yYXRpb246IHVuZGVybGluZTtcbiAgICAgIH1cbiAgICB9XG5cbiAgICAvLyBCb290c3RyYXAgc3BlY2lmaWM7IGNvbW1lbnQgdGhlIGZvbGxvd2luZyBzZWxlY3RvciBvdXRcbiAgICAvL2FbaHJlZl06OmFmdGVyIHtcbiAgICAvLyAgY29udGVudDogXCIgKFwiIGF0dHIoaHJlZikgXCIpXCI7XG4gICAgLy99XG5cbiAgICBhYmJyW3RpdGxlXTo6YWZ0ZXIge1xuICAgICAgY29udGVudDogXCIgKFwiIGF0dHIodGl0bGUpIFwiKVwiO1xuICAgIH1cblxuICAgIC8vIEJvb3RzdHJhcCBzcGVjaWZpYzsgY29tbWVudCB0aGUgZm9sbG93aW5nIHNlbGVjdG9yIG91dFxuICAgIC8vXG4gICAgLy8gRG9uJ3Qgc2hvdyBsaW5rcyB0aGF0IGFyZSBmcmFnbWVudCBpZGVudGlmaWVycyxcbiAgICAvLyBvciB1c2UgdGhlIGBqYXZhc2NyaXB0OmAgcHNldWRvIHByb3RvY29sXG4gICAgLy9cblxuICAgIC8vYVtocmVmXj1cIiNcIl06OmFmdGVyLFxuICAgIC8vYVtocmVmXj1cImphdmFzY3JpcHQ6XCJdOjphZnRlciB7XG4gICAgLy8gY29udGVudDogXCJcIjtcbiAgICAvL31cblxuICAgIHByZSB7XG4gICAgICB3aGl0ZS1zcGFjZTogcHJlLXdyYXAgIWltcG9ydGFudDtcbiAgICB9XG4gICAgcHJlLFxuICAgIGJsb2NrcXVvdGUge1xuICAgICAgYm9yZGVyOiAkYm9yZGVyLXdpZHRoIHNvbGlkICRncmF5LTUwMDsgLy8gQm9vdHN0cmFwIGN1c3RvbSBjb2RlOyB1c2luZyBgJGJvcmRlci13aWR0aGAgaW5zdGVhZCBvZiAxcHhcbiAgICAgIHBhZ2UtYnJlYWstaW5zaWRlOiBhdm9pZDtcbiAgICB9XG5cbiAgICAvL1xuICAgIC8vIFByaW50aW5nIFRhYmxlczpcbiAgICAvLyBodHRwczovL3dlYi5hcmNoaXZlLm9yZy93ZWIvMjAxODA4MTUxNTA5MzQvaHR0cDovL2Nzcy1kaXNjdXNzLmluY3V0aW8uY29tL3dpa2kvUHJpbnRpbmdfVGFibGVzXG4gICAgLy9cblxuICAgIHRoZWFkIHtcbiAgICAgIGRpc3BsYXk6IHRhYmxlLWhlYWRlci1ncm91cDtcbiAgICB9XG5cbiAgICB0cixcbiAgICBpbWcge1xuICAgICAgcGFnZS1icmVhay1pbnNpZGU6IGF2b2lkO1xuICAgIH1cblxuICAgIHAsXG4gICAgaDIsXG4gICAgaDMge1xuICAgICAgb3JwaGFuczogMztcbiAgICAgIHdpZG93czogMztcbiAgICB9XG5cbiAgICBoMixcbiAgICBoMyB7XG4gICAgICBwYWdlLWJyZWFrLWFmdGVyOiBhdm9pZDtcbiAgICB9XG5cbiAgICAvLyBCb290c3RyYXAgc3BlY2lmaWMgY2hhbmdlcyBzdGFydFxuXG4gICAgLy8gU3BlY2lmeSBhIHNpemUgYW5kIG1pbi13aWR0aCB0byBtYWtlIHByaW50aW5nIGNsb3NlciBhY3Jvc3MgYnJvd3NlcnMuXG4gICAgLy8gV2UgZG9uJ3Qgc2V0IG1hcmdpbiBoZXJlIGJlY2F1c2UgaXQgYnJlYWtzIGBzaXplYCBpbiBDaHJvbWUuIFdlIGFsc29cbiAgICAvLyBkb24ndCB1c2UgYCFpbXBvcnRhbnRgIG9uIGBzaXplYCBhcyBpdCBicmVha3MgaW4gQ2hyb21lLlxuICAgIEBwYWdlIHtcbiAgICAgIHNpemU6ICRwcmludC1wYWdlLXNpemU7XG4gICAgfVxuICAgIGJvZHkge1xuICAgICAgbWluLXdpZHRoOiAkcHJpbnQtYm9keS1taW4td2lkdGggIWltcG9ydGFudDtcbiAgICB9XG4gICAgLmNvbnRhaW5lciB7XG4gICAgICBtaW4td2lkdGg6ICRwcmludC1ib2R5LW1pbi13aWR0aCAhaW1wb3J0YW50O1xuICAgIH1cblxuICAgIC8vIEJvb3RzdHJhcCBjb21wb25lbnRzXG4gICAgLm5hdmJhciB7XG4gICAgICBkaXNwbGF5OiBub25lO1xuICAgIH1cbiAgICAuYmFkZ2Uge1xuICAgICAgYm9yZGVyOiAkYm9yZGVyLXdpZHRoIHNvbGlkICRibGFjaztcbiAgICB9XG5cbiAgICAudGFibGUge1xuICAgICAgYm9yZGVyLWNvbGxhcHNlOiBjb2xsYXBzZSAhaW1wb3J0YW50O1xuXG4gICAgICB0ZCxcbiAgICAgIHRoIHtcbiAgICAgICAgYmFja2dyb3VuZC1jb2xvcjogJHdoaXRlICFpbXBvcnRhbnQ7XG4gICAgICB9XG4gICAgfVxuXG4gICAgLnRhYmxlLWJvcmRlcmVkIHtcbiAgICAgIHRoLFxuICAgICAgdGQge1xuICAgICAgICBib3JkZXI6IDFweCBzb2xpZCAkZ3JheS0zMDAgIWltcG9ydGFudDtcbiAgICAgIH1cbiAgICB9XG5cbiAgICAudGFibGUtZGFyayB7XG4gICAgICBjb2xvcjogaW5oZXJpdDtcblxuICAgICAgdGgsXG4gICAgICB0ZCxcbiAgICAgIHRoZWFkIHRoLFxuICAgICAgdGJvZHkgKyB0Ym9keSB7XG4gICAgICAgIGJvcmRlci1jb2xvcjogJHRhYmxlLWJvcmRlci1jb2xvcjtcbiAgICAgIH1cbiAgICB9XG5cbiAgICAudGFibGUgLnRoZWFkLWRhcmsgdGgge1xuICAgICAgY29sb3I6IGluaGVyaXQ7XG4gICAgICBib3JkZXItY29sb3I6ICR0YWJsZS1ib3JkZXItY29sb3I7XG4gICAgfVxuXG4gICAgLy8gQm9vdHN0cmFwIHNwZWNpZmljIGNoYW5nZXMgZW5kXG4gIH1cbn1cbiIsIi5lYXNpb24tY2FyZCB7XG4gIGJvcmRlcjogMXB4IHNvbGlkICNEM0QzRDM7XG4gIGJhY2tncm91bmQ6ICNmZmY7XG4gIC8vbWluLWhlaWdodDogMjIwcHg7XG4gIG1hcmdpbi1ib3R0b206IDMwcHg7XG5cbiAgLmNhcmQtaGVhZGVyIHtcbiAgICBtaW4taGVpZ2h0OiA1N3B4O1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNGMEYxRjc7XG4gICAgZGlzcGxheTogZmxleDtcbiAgICBhbGlnbi1pdGVtczogY2VudGVyO1xuICAgIHBhZGRpbmc6IDhweCAzMnB4O1xuICB9XG5cbiAgLmNhcmQtYm9keSB7XG4gICAgcGFkZGluZzogMjRweCAzMnB4O1xuXG4gICAgQGluY2x1ZGUgbWVkaWEtYnJlYWtwb2ludC1kb3duKHNtKSB7XG4gICAgICBwYWRkaW5nOiAxMnB4IDE4cHg7XG4gICAgfVxuICB9XG59XG5cbi5lYXNpb24tY2FyZC1pY29uIHtcbiAgbWFyZ2luLXJpZ2h0OiAyMHB4O1xufVxuXG4uZWFzaW9uLWNhcmQtdGl0bGUge1xuICBmb250LXdlaWdodDogYm9sZDtcbn1cblxuLmVhc2lvbi1jYXJkLW1lbnUge1xuICBtYXJnaW4tbGVmdDogYXV0bztcbn1cblxuLmVhc2lvbi1jYXJkLW1lbnUtbGluayB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gIGp1c3RpZnktY29udGVudDogY2VudGVyO1xuICB3aWR0aDogMzBweDtcbiAgaGVpZ2h0OiAzMHB4O1xuICBtYXJnaW4tcmlnaHQ6IC0xNXB4O1xuXG5cbiAgJjo6YWZ0ZXIge1xuICAgIGNvbnRlbnQ6IFwiXCI7XG4gICAgLy9tYXJnaW4tbGVmdDogYXV0bztcbiAgICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gICAgd2lkdGg6IDA7XG4gICAgaGVpZ2h0OiAwO1xuICAgIGJvcmRlci1sZWZ0OiA1cHggc29saWQgdHJhbnNwYXJlbnQ7XG4gICAgYm9yZGVyLXJpZ2h0OiA1cHggc29saWQgdHJhbnNwYXJlbnQ7XG4gICAgYm9yZGVyLXRvcDogNXB4IHNvbGlkIHJnYmEoJGJvZHktY29sb3IsIC44KTtcbiAgfVxuXG4gIC50ZXh0LXdoaXRlICYge1xuICAgICY6OmFmdGVyIHtcbiAgICAgIGJvcmRlci10b3AtY29sb3I6ICNmZmY7XG4gICAgfVxuICB9XG59XG5cbi5lYXNpb24tY2FyZC1ib2R5LWNoYXJ0IHtcbiAgQGluY2x1ZGUgbWVkaWEtYnJlYWtwb2ludC1kb3duKHNtKSB7XG4gICAgcGFkZGluZzogMTJweCA1cHg7XG4gIH1cblxuICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIG1heC13aWR0aDogOTklO1xufVxuXG5cblxuIiwiaDEge1xuICBmb250LWZhbWlseTogXCJOdW5pdG9cIiwgc2Fucy1zZXJpZjtcbiAgZm9udC13ZWlnaHQ6IG5vcm1hbDtcbn1cblxuLmRhc2gtdGl0bGUge1xuICBtYXJnaW4tYm90dG9tOiAzMHB4O1xufVxuXG4uY29udGVudC1hbmNob3Ige1xuICAmOjpiZWZvcmUge1xuICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgIGhlaWdodDogNnJlbTtcbiAgICBtYXJnaW4tdG9wOiAtNnJlbTtcbiAgICB2aXNpYmlsaXR5OiBoaWRkZW47XG4gICAgY29udGVudDogXCJcIjtcbiAgfVxufVxuXG4uY29udGVudC1hbmNob3ItbGluayB7XG4gIGNvbG9yOiAjMjkyODI5O1xuICBvcGFjaXR5OiAuNDY7XG4gIGZvbnQtc2l6ZTogMTlweDtcbiAgbWFyZ2luLWxlZnQ6IDdweDtcbn1cblxuIiwiYm9keSB7XG4gIGJhY2tncm91bmQ6ICNFOUVERjQ7XG59XG5cbi5kYXNoIHtcbiAgZGlzcGxheTogZmxleDtcbiAgbWluLWhlaWdodDogMTAwdmg7XG59XG5cbi5kYXNoLWFwcCB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gIGZsZXgtZ3JvdzogMjtcblxuICBtYXJnaW4tdG9wOiA4NHB4O1xuXG4gIEBpbmNsdWRlIG1lZGlhLWJyZWFrcG9pbnQtdXAobGcpIHtcbiAgICBtYXJnaW4tbGVmdDogMjM4cHg7XG5cbiAgICAuZGFzaC1jb21wYWN0ICYge1xuICAgICAgbWFyZ2luLWxlZnQ6IDA7XG4gICAgfVxuICB9XG59XG5cbi5kYXNoLWNvbnRlbnQge1xuICBmbGV4LWdyb3c6IDI7XG4gIHBhZGRpbmc6IDI1cHg7XG5cbiAgQGluY2x1ZGUgbWVkaWEtYnJlYWtwb2ludC1kb3duKHNtKSB7XG4gICAgcGFkZGluZzogMTVweCAwcHg7XG4gIH1cblxuXG4gID4gLmNvbnRhaW5lci1mbHVpZCB7XG4gICAgLy9wYWRkaW5nOiAwO1xuICB9XG59XG5cbi5kYXNoLXJvdyB7XG4gIG1hcmdpbi1ib3R0b206IDMwcHg7XG59XG5cbi5mb3JtLXNjcmVlbiB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gIG1pbi1oZWlnaHQ6IDEwMHZoO1xuICBwYWRkaW5nLXRvcDogMTAwcHg7XG5cbiAgLmVhc2lvbi1sb2dvIHtcbiAgICBtYXJnaW4tYm90dG9tOiA2MHB4O1xuICAgIG9wYWNpdHk6IC45O1xuXG4gICAgaSB7XG4gICAgICBjb2xvcjogJGJvZHktY29sb3I7XG4gICAgfVxuICB9XG59XG5cbi5hY2NvdW50LWRpYWxvZyB7XG4gIG1heC13aWR0aDogMzYwcHg7XG5cbiAgQGluY2x1ZGUgbWVkaWEtYnJlYWtwb2ludC11cCh4bCkge1xuICAgIG1pbi13aWR0aDogMzYwcHg7XG4gIH1cbn1cblxuLmFjY291bnQtZGlhbG9nLWFjdGlvbnMge1xuICBkaXNwbGF5OiBmbGV4O1xuICBmbGV4LWRpcmVjdGlvbjogcm93O1xuICBhbGlnbi1pdGVtczogY2VudGVyO1xufVxuXG4uYWNjb3VudC1kaWFsb2ctbGluayB7XG4gIG1hcmdpbi1sZWZ0OiAxNXB4O1xuICBmb250LXNpemU6IDE0cHg7XG4gIGNvbG9yOiByZ2JhKCRib2R5LWNvbG9yLCAuOCk7XG5cbiAgJjpob3ZlciB7XG4gICAgY29sb3I6ICRib2R5LWNvbG9yO1xuICAgIHRleHQtZGVjb3JhdGlvbjogbm9uZTtcbiAgfVxufVxuIiwiLmRhc2gtbmF2IHtcbiAgbWluLXdpZHRoOiAyMzhweDtcbiAgcG9zaXRpb246IGZpeGVkO1xuICBsZWZ0OiAwO1xuICB0b3A6IDA7XG4gIGJvdHRvbTogMDtcbiAgb3ZlcmZsb3c6IGF1dG87XG5cbiAgLmRhc2gtY29tcGFjdCAmIHtcbiAgICBkaXNwbGF5OiBub25lO1xuICB9XG5cbiAgJjo6LXdlYmtpdC1zY3JvbGxiYXIge1xuICAgIHdpZHRoOiAwO1xuICAgIGJhY2tncm91bmQ6IHRyYW5zcGFyZW50O1xuICB9XG5cbiAgQGluY2x1ZGUgbWVkaWEtYnJlYWtwb2ludC1kb3duKG1kKSB7XG4gICAgZGlzcGxheTogbm9uZTtcbiAgICBwb3NpdGlvbjogZml4ZWQ7XG4gICAgdG9wOiAwO1xuICAgIHJpZ2h0OiAwO1xuICAgIGxlZnQ6IDA7XG4gICAgYm90dG9tOiAwO1xuICAgIHotaW5kZXg6IDEwNzA7XG5cbiAgICAmLm1vYmlsZS1zaG93IHtcbiAgICAgIGRpc3BsYXk6IGJsb2NrO1xuXG4gICAgfVxuICB9XG5cbiAgaGVhZGVyIHtcbiAgICBtaW4taGVpZ2h0OiA4NHB4O1xuICAgIHBhZGRpbmc6IDhweCAyN3B4O1xuICAgIGRpc3BsYXk6IGZsZXg7XG4gICAganVzdGlmeS1jb250ZW50OiBjZW50ZXI7XG4gICAgYWxpZ24taXRlbXM6IGNlbnRlcjtcblxuICAgIC5tZW51LXRvZ2dsZSB7XG4gICAgICBkaXNwbGF5OiBub25lO1xuICAgICAgbWFyZ2luLXJpZ2h0OiBhdXRvO1xuXG4gICAgICBAaW5jbHVkZSBtZWRpYS1icmVha3BvaW50LWRvd24obWQpIHtcbiAgICAgICAgZGlzcGxheTogZmxleDtcbiAgICAgIH1cbiAgICB9XG5cbiAgICAuZWFzaW9uLWxvZ28ge1xuICAgICAgbWFyZ2luLXJpZ2h0OiBhdXRvO1xuICAgICAgcGFkZGluZy1yaWdodDogNDJweDsgLy8gdGhpcyBlcXVhbGl6ZXMgdGhlIG1lbnUtdG9nZ2xlIG9uIHRoZSBsZWZ0XG4gICAgfVxuICB9XG5cbiAgYSB7XG4gICAgY29sb3I6ICRib2R5LWNvbG9yO1xuXG4gICAgJjpob3ZlciB7XG4gICAgICB0ZXh0LWRlY29yYXRpb246IG5vbmU7XG4gICAgfVxuICB9XG5cbiAgJi5kYXNoLW5hdi1kYXJrIHtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkZGFzaC1uYXYtZGFyay1iZztcbiAgICBhIHtcbiAgICAgIGNvbG9yOiAkZGFzaC1uYXYtZGFyay1jb2xvcjtcbiAgICB9XG4gIH1cbn1cblxuLmVhc2lvbi1sb2dvIHtcbiAgZm9udC1mYW1pbHk6IFwiTnVuaXRvXCIsIHNhbnMtc2VyaWY7XG4gIGZvbnQtd2VpZ2h0OiBib2xkO1xuICBmb250LXNpemU6IDIwcHg7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGNvbG9yOiAkYm9keS1jb2xvcjtcbiAgYWxpZ24taXRlbXM6IGNlbnRlcjtcblxuICAmOmZvY3VzLFxuICAmOmFjdGl2ZSxcbiAgJjpob3ZlciB7XG4gICAgY29sb3I6ICRib2R5LWNvbG9yO1xuICAgIHRleHQtZGVjb3JhdGlvbjogbm9uZTtcbiAgfVxuXG4gIGkge1xuICAgIGNvbG9yOiAkbG9nby1jb2xvcjtcbiAgICBmb250LXNpemU6IDI3cHg7XG4gICAgbWFyZ2luLXJpZ2h0OiAxMHB4O1xuICB9XG59XG5cbi5kYXNoLW5hdi1saXN0IHtcbiAgZGlzcGxheTogZmxleDtcbiAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcbn1cblxuLmRhc2gtbmF2LWl0ZW0ge1xuICBtaW4taGVpZ2h0OiA1NnB4O1xuICBwYWRkaW5nOiA4cHggMjBweCA4cHggNzBweDtcbiAgZGlzcGxheTogZmxleDtcbiAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAgbGV0dGVyLXNwYWNpbmc6IC4wMmVtO1xuXG4gIGkge1xuICAgIHdpZHRoOiAzNnB4O1xuICAgIGZvbnQtc2l6ZTogMTlweDtcbiAgICBtYXJnaW4tbGVmdDogLTQwcHg7XG4gIH1cblxuICAmOmhvdmVyIHtcbiAgICAuZGFzaC1uYXYtZGFyayAmIHtcbiAgICAgIGJhY2tncm91bmQ6ICRkYXNoLW5hdi1kYXJrLWhvdmVyLWJnO1xuICAgIH1cbiAgfVxufVxuXG4uZGFzaC1uYXYtZHJvcGRvd24ge1xuICBkaXNwbGF5OiBmbGV4O1xuICBmbGV4LWRpcmVjdGlvbjogY29sdW1uO1xuXG4gICYuc2hvdyB7XG4gICAgLmRhc2gtbmF2LWRhcmsgJiB7XG4gICAgICBiYWNrZ3JvdW5kOiAkZGFzaC1uYXYtZGFyay1ob3Zlci1iZztcbiAgICB9XG5cbiAgICA+IC5kYXNoLW5hdi1kcm9wZG93bi10b2dnbGUge1xuICAgICAgZm9udC13ZWlnaHQ6IGJvbGQ7XG5cbiAgICAgICY6YWZ0ZXIge1xuICAgICAgICB0cmFuc2Zvcm06IG5vbmU7XG4gICAgICB9XG4gICAgfVxuXG4gICAgPiAuZGFzaC1uYXYtZHJvcGRvd24tbWVudSB7XG4gICAgICBkaXNwbGF5OiBmbGV4O1xuICAgIH1cblxuICAgIC5kYXNoLW5hdi1kcm9wZG93biB7XG4gICAgICAmLnNob3cge1xuICAgICAgICBiYWNrZ3JvdW5kOiBub25lO1xuICAgICAgfVxuICAgIH1cbiAgfVxufVxuXG4uZGFzaC1uYXYtZHJvcGRvd24tdG9nZ2xlIHtcbiAgJjphZnRlciB7XG4gICAgY29udGVudDogXCJcIjtcbiAgICBtYXJnaW4tbGVmdDogYXV0bztcbiAgICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gICAgd2lkdGg6IDA7XG4gICAgaGVpZ2h0OiAwO1xuICAgIGJvcmRlci1sZWZ0OiA1cHggc29saWQgdHJhbnNwYXJlbnQ7XG4gICAgYm9yZGVyLXJpZ2h0OiA1cHggc29saWQgdHJhbnNwYXJlbnQ7XG4gICAgYm9yZGVyLXRvcDogNXB4IHNvbGlkIHJnYmEoJGJvZHktY29sb3IsIC44KTtcbiAgICB0cmFuc2Zvcm06IHJvdGF0ZSg5MGRlZyk7XG5cbiAgICAuZGFzaC1uYXYtZGFyayAmIHtcbiAgICAgIGJvcmRlci10b3AtY29sb3I6IHJnYmEoJGRhc2gtbmF2LWRhcmstY29sb3IsIC43Mik7XG4gICAgfVxuICB9XG59XG5cbi5kYXNoLW5hdi1kcm9wZG93bi1tZW51IHtcbiAgZGlzcGxheTogbm9uZTtcbiAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcblxuICA+IC5kYXNoLW5hdi1kcm9wZG93biB7XG4gICAgLmRhc2gtbmF2LWRyb3Bkb3duLW1lbnUge1xuICAgICAgLmRhc2gtbmF2LWRyb3Bkb3duLWl0ZW0ge1xuICAgICAgICBwYWRkaW5nLWxlZnQ6IDg3cHg7XG4gICAgICB9XG4gICAgfVxuICB9XG59XG5cbi5kYXNoLW5hdi1kcm9wZG93bi1pdGVtIHtcbiAgbWluLWhlaWdodDogNDBweDtcbiAgcGFkZGluZzogOHB4IDIwcHggOHB4IDcwcHg7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG5cbiAgJjpob3ZlciB7XG4gICAgYmFja2dyb3VuZDogJGRhc2gtbmF2LWRhcmstaG92ZXItYmc7XG4gIH1cbn1cblxuXG4iLCIubm90aWZpY2F0aW9ucyB7XG4gIG1hcmdpbjogLThweCAtMzJweDtcblxuICBAaW5jbHVkZSBtZWRpYS1icmVha3BvaW50LWRvd24oc20pIHtcbiAgICBtYXJnaW46IC04cHggLTE4cHg7XG4gIH1cbn1cblxuLm5vdGlmaWNhdGlvbiB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGZsZXgtZGlyZWN0aW9uOiByb3c7XG4gIHBhZGRpbmc6IDhweCAzMnB4O1xuICBjb2xvcjogJGJvZHktY29sb3I7XG5cbiAgJjpob3ZlcixcbiAgJjpmb2N1cyxcbiAgJjphY3RpdmUge1xuICAgIGNvbG9yOiAkYm9keS1jb2xvcjtcbiAgICB0ZXh0LWRlY29yYXRpb246IG5vbmU7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI0YwRjFGNztcbiAgfVxufVxuXG4ubm90aWZpY2F0aW9uLXRleHQge1xufVxuXG4ubm90aWZpY2F0aW9uLWljb24ge1xuICAvL21hcmdpbi1yaWdodDogMjBweDtcbiAgd2lkdGg6IDM1cHg7XG59XG5cbi5ub3RpZmljYXRpb24tdGltZSB7XG4gIG1hcmdpbi1sZWZ0OiBhdXRvO1xuICBvcGFjaXR5OiAuODtcbn1cblxuLm5vdGlmaWNhdGlvbnMtc2hvdy1hbGwge1xuICBtYXJnaW4tdG9wOiA4cHg7XG4gIG1hcmdpbi1sZWZ0OiA2N3B4O1xuXG4gIGEge1xuICAgIGNvbG9yOiAkYm9keS1jb2xvcjtcbiAgICB0ZXh0LWRlY29yYXRpb246IHVuZGVybGluZTtcblxuICAgICY6Zm9jdXMsXG4gICAgJjpob3ZlcixcbiAgICAmOmFjdGl2ZSB7XG4gICAgICBjb2xvcjogJGJvZHktY29sb3I7XG4gICAgfVxuXG4gIH1cbn1cbiIsIi50YWJsZS1pbi1jYXJkIHtcbiAgbWFyZ2luOiAtMTJweCAwO1xuXG4gIHRoZWFkIHtcbiAgICB0ciB7XG4gICAgICB0aCB7XG4gICAgICAgIGJvcmRlci10b3AtY29sb3I6IHRyYW5zcGFyZW50O1xuICAgICAgfVxuICAgIH1cbiAgfVxufVxuXG4uY2FyZC1ib2R5LXdpdGgtZGFyay10YWJsZSB7XG4gIGJhY2tncm91bmQtY29sb3I6ICMyMTI1Mjk7XG59XG4iLCIldG9vbGJhci1pY29uIHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICB3aWR0aDogNDJweDtcbiAgaGVpZ2h0OiA0MnB4O1xuICBkaXNwbGF5OiBmbGV4O1xuICBhbGlnbi1pdGVtczogY2VudGVyO1xuICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcbiAgY29sb3I6ICRib2R5LWNvbG9yO1xuXG4gICY6aG92ZXIsXG4gICY6YWN0aXZlLFxuICAmOmZvY3VzIHtcbiAgICB0ZXh0LWRlY29yYXRpb246IG5vbmU7XG4gICAgY29sb3I6ICRib2R5LWNvbG9yO1xuICB9XG5cbiAgaSB7XG4gICAgZm9udC1zaXplOiAyMHB4O1xuICB9XG59XG5cbiVpY29uLW5vdGlmaWNhdGlvbi1jb3VudGVyIHtcbiAgd2lkdGg6IDE1cHg7XG4gIGhlaWdodDogMTVweDtcbiAgYm9yZGVyLXJhZGl1czogMjBweDtcbiAgZGlzcGxheTogZmxleDtcbiAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAganVzdGlmeS1jb250ZW50OiBjZW50ZXI7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgdG9wOiAzcHg7XG4gIHJpZ2h0OiAzcHg7XG4gIGZvbnQtc3R5bGU6IG5vcm1hbDtcbiAgZm9udC1zaXplOiAxMXB4O1xuICBiYWNrZ3JvdW5kOiAjRkY1QTAwO1xuICBjb2xvcjogI2ZmZjtcbn1cblxuXG4uZGFzaC10b29sYmFyIHtcbiAgbWluLWhlaWdodDogODRweDtcbiAgYmFja2dyb3VuZC1jb2xvcjogJHRvb2xiYXItYmc7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gIHBhZGRpbmc6IDhweCAyN3B4O1xuICBwb3NpdGlvbjogZml4ZWQ7XG4gIHRvcDogMDtcbiAgcmlnaHQ6IDA7XG4gIGxlZnQ6IDA7XG4gIHotaW5kZXg6IDEwMDA7XG5cbiAgQGluY2x1ZGUgbWVkaWEtYnJlYWtwb2ludC11cChsZykge1xuICAgIGxlZnQ6IDIzOHB4O1xuXG4gICAgLmRhc2gtY29tcGFjdCAmIHtcbiAgICAgIGxlZnQ6IDA7XG4gICAgfVxuICB9XG5cbiAgQGluY2x1ZGUgbWVkaWEtYnJlYWtwb2ludC1kb3duKHhzKSB7XG4gICAgLy9wYWRkaW5nOiA4cHggODRweCA4cHggMTZweDtcbiAgfVxufVxuXG4ubWVudS10b2dnbGUge1xuICBAZXh0ZW5kICV0b29sYmFyLWljb247XG59XG5cbi5zZWFyY2hib3gge1xuICBkaXNwbGF5OiBmbGV4O1xuICBhbGlnbi1pdGVtczogY2VudGVyO1xuICBmbGV4LWdyb3c6IDI7XG5cbiAgQGluY2x1ZGUgbWVkaWEtYnJlYWtwb2ludC1kb3duKHNtKSB7XG4gICAgZGlzcGxheTogbm9uZTtcbiAgICBwb3NpdGlvbjogZml4ZWQ7XG4gICAgdG9wOiAwO1xuICAgIHJpZ2h0OiAwO1xuICAgIGxlZnQ6IDA7XG4gICAgYmFja2dyb3VuZDogJHRvb2xiYXItYmc7XG4gICAgbWluLWhlaWdodDogODRweDtcbiAgICB6LWluZGV4OiAxMDcxO1xuICAgIHBhZGRpbmc6IDhweCAyN3B4O1xuXG4gICAgJi5zaG93IHtcbiAgICAgIGRpc3BsYXk6IGZsZXg7XG4gICAgfVxuICB9XG59XG5cbi5zZWFyY2hib3gtdG9nZ2xlIHtcbiAgQGV4dGVuZCAldG9vbGJhci1pY29uO1xuICBkaXNwbGF5OiBub25lO1xuICBjb2xvcjogJGJvZHktY29sb3I7XG5cbiAgJjpob3ZlcixcbiAgJjphY3RpdmUsXG4gICY6Zm9jdXMge1xuICAgIHRleHQtZGVjb3JhdGlvbjogbm9uZTtcbiAgICBjb2xvcjogJGJvZHktY29sb3I7XG4gIH1cblxuICBAaW5jbHVkZSBtZWRpYS1icmVha3BvaW50LWRvd24oc20pIHtcbiAgICBkaXNwbGF5OiBmbGV4O1xuICB9XG5cbn1cblxuLnNlYXJjaGJveC1pbnB1dCB7XG4gIGJvcmRlcjogbm9uZTtcbiAgYmFja2dyb3VuZC1jb2xvcjogJHRvb2xiYXItYmc7XG4gIC8vYmFja2dyb3VuZC1jb2xvcjogZnVjaHNpYTtcbiAgaGVpZ2h0OiA1MHB4O1xuICAvL3dpZHRoOiA0MDBweDtcbiAgcGFkZGluZzogOHB4IDhweCAxMXB4IDRweDtcbiAgZmxleC1ncm93OiAyO1xuICB3aWR0aDogMTAwcHg7XG5cbiAgJjo6cGxhY2Vob2xkZXIge1xuICAgIGNvbG9yOiAkc2VhcmNoYm94LWlucHV0LXBsYWNlaG9sZGVyO1xuICB9XG5cbiAgJjpmb2N1cyB7XG4gICAgb3V0bGluZTogbm9uZTtcbiAgfVxufVxuXG4uc2VhcmNoYm94LXN1Ym1pdCB7XG4gIEBleHRlbmQgJXRvb2xiYXItaWNvbjtcbiAgYm9yZGVyOiBub25lO1xuICBiYWNrZ3JvdW5kOiBub25lO1xuICAvL2NvbG9yOiAkc2VhcmNoYm94LWlucHV0LXBsYWNlaG9sZGVyO1xuICBwYWRkaW5nOiAwO1xuXG4gIEBpbmNsdWRlIG1lZGlhLWJyZWFrcG9pbnQtZG93bihzbSkge1xuICAgIG9yZGVyOiA5O1xuICB9XG5cbiAgJjpmb2N1cyB7XG4gICAgb3V0bGluZTogbm9uZTtcbiAgfVxuXG4gICY6aG92ZXIge1xuICAgIGN1cnNvcjogcG9pbnRlcjtcbiAgfVxufVxuXG4udG9vbHMge1xuICBtYXJnaW4tbGVmdDogYXV0bztcbiAgZGlzcGxheTogZmxleDtcblxuICBhIHtcbiAgICBjb2xvcjogJGJvZHktY29sb3I7XG4gIH1cbn1cblxuLnRvb2xzLWl0ZW0ge1xuICBAZXh0ZW5kICV0b29sYmFyLWljb247XG5cbiAgLy9tYXJnaW4tbGVmdDogNDFweDtcbiAgLy9cbiAgLy8mOmZpcnN0LWNoaWxkIHtcbiAgLy8gIG1hcmdpbi1sZWZ0OiAwO1xuICAvL31cblxuICAudG9vbHMtaXRlbS1jb3VudCB7XG4gICAgQGV4dGVuZCAlaWNvbi1ub3RpZmljYXRpb24tY291bnRlcjtcbiAgfVxufVxuIiwiLnN0YXRzIHtcbiAgcGFkZGluZzogMThweCAyM3B4O1xuICBmb250LWZhbWlseTogXCJOdW5pdG9cIiwgc2Fucy1zZXJpZjtcbiAgYm94LXNoYWRvdzogMCAwIDVweCByZ2JhKCMwMDAsIC4yNSk7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gIG1pbi1oZWlnaHQ6IDE3MHB4O1xuICBtYXJnaW4tYm90dG9tOiAzMHB4O1xufVxuXG4uc3RhdHMtY29udGVudCB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIG1hcmdpbi10b3A6IGF1dG87XG4gIGFsaWduLWl0ZW1zOiBmbGV4LWVuZDtcbn1cblxuLnN0YXRzLXRpdGxlIHtcbiAgZm9udC1zaXplOiAyNnB4O1xuICBmb250LXdlaWdodDogNjAwO1xuICBsZXR0ZXItc3BhY2luZzogLjA0ZW07XG59XG5cbi5zdGF0cy1pY29uIHtcbiAgZGlzcGxheTogZmxleDtcbiAgYWxpZ24taXRlbXM6IGZsZXgtZW5kO1xuICBmb250LXNpemU6IDIwcHg7XG59XG5cbi5zdGF0cy1kYXRhIHtcbiAgZGlzcGxheTogZmxleDtcbiAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcbiAgYWxpZ24taXRlbXM6IGZsZXgtZW5kO1xuICBtYXJnaW4tbGVmdDogYXV0bztcbn1cblxuLnN0YXRzLW51bWJlciB7XG4gIGZvbnQtc2l6ZTogMzNweDtcbiAgbGluZS1oZWlnaHQ6IDMzcHg7XG4gIGZvbnQtd2VpZ2h0OiA2MDA7XG4gIGxldHRlci1zcGFjaW5nOiAuMDRlbTtcbn1cblxuLnN0YXRzLWNoYW5nZSB7XG4gIG1hcmdpbi10b3A6IDVweDtcbiAgZm9udC1mYW1pbHk6IFwiT3BlbiBTYW5zXCIsIHNhbnMtc2VyaWY7XG59XG5cbi5zdGF0cy1wZXJjZW50YWdlIHtcbiAgb3BhY2l0eTogMTtcbn1cblxuLnN0YXRzLXRpbWVmcmFtZSB7XG4gIG9wYWNpdHk6IC41O1xufVxuXG5AbWl4aW4gc3RhdHMtdmFyaWFudCgkYmFja2dyb3VuZCkge1xuICBjb2xvcjogY29sb3IteWlxKCRiYWNrZ3JvdW5kKTtcbiAgYmFja2dyb3VuZDogJGJhY2tncm91bmQ7XG59XG5cbkBlYWNoICRjb2xvciwgJHZhbHVlIGluICR0aGVtZS1jb2xvcnMge1xuICAuc3RhdHMtI3skY29sb3J9IHtcbiAgICBAaW5jbHVkZSBzdGF0cy12YXJpYW50KCR2YWx1ZSk7XG4gIH1cbn1cbiJdfQ== */

</style>