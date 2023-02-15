<style>
    /*body */

    .header {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        margin-left: 169px;
        margin-right: 169px;
        background-color: #e8ebf8;
        text-align: center;


    }

    html {
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
    }

    body {
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: left;
        background-color: #fff;
        background: linear-gradient(to bottom, rgb(255, 255, 255), rgb(128, 255, 255));
        background-attachment: fixed;
    }

    [tabindex="-1"]:focus {
        outline: 0 !important
    }

    hr {
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        height: 0;
        overflow: visible
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-top: 0;
        margin-bottom: .5rem
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem
    }

    ol,
    ul,
    dl {
        margin-top: 0;
        margin-bottom: 1rem
    }

    ol ol,
    ul ul,
    ol ul,
    ul ol {
        margin-bottom: 0
    }

    dt {
        font-weight: 700
    }

    dd {
        margin-bottom: .5rem;
        margin-left: 0
    }

    blockquote {
        margin: 0 0 1rem
    }

    b,
    strong {
        font-weight: bolder
    }

    small {
        font-size: 80%
    }

    sub,
    sup {
        position: relative;
        font-size: 75%;
        line-height: 0;
        vertical-align: baseline
    }

    sub {
        bottom: -.25em
    }

    sup {
        top: -.5em
    }

    a {
        color: #007bff;
        text-decoration: none;
        background-color: transparent
    }

    a:hover {
        color: #0056b3;
        text-decoration: underline
    }

    a:not([href]):not([tabindex]) {
        color: inherit;
        text-decoration: none
    }

    a:not([href]):not([tabindex]):hover,
    a:not([href]):not([tabindex]):focus {
        color: inherit;
        text-decoration: none
    }

    a:not([href]):not([tabindex]):focus {
        outline: 0
    }

    pre,
    code,
    kbd,
    samp {
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        font-size: 1em
    }

    pre {
        margin-top: 0;
        margin-bottom: 1rem;
        overflow: auto
    }

    figure {
        margin: 0 0 1rem
    }

    img {
        vertical-align: middle;
        border-style: none
    }

    svg {
        overflow: hidden;
        vertical-align: middle
    }

    table {
        border-collapse: collapse
    }

    caption {
        padding-top: .75rem;
        padding-bottom: .75rem;
        color: #6c757d;
        text-align: left;
        caption-side: bottom
    }

    th {
        text-align: inherit
    }

    label {
        display: inline-block;
        margin-bottom: .5rem
    }

    button {
        border-radius: 0
    }

    button:focus {
        outline: 1px dotted;
        outline: 5px auto -webkit-focus-ring-color
    }

    input,
    button,
    select,
    optgroup,
    textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit
    }

    button,
    input {
        overflow: visible
    }

    button,
    select {
        text-transform: none
    }

    select {
        word-wrap: normal
    }

    button:not(:disabled),
    [type="button"]:not(:disabled),
    [type="reset"]:not(:disabled),
    [type="submit"]:not(:disabled) {
        cursor: pointer
    }

    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
        padding: 0;
        border-style: none
    }

    input[type="radio"],
    input[type="checkbox"] {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding: 0
    }

    textarea {
        overflow: auto;
        resize: vertical
    }

    fieldset {
        min-width: 0;
        padding: 0;
        margin: 0;
        border: 0
    }

    legend {
        display: block;
        width: 100%;
        max-width: 100%;
        padding: 0;
        margin-bottom: .5rem;
        font-size: 1.5rem;
        line-height: inherit;
        color: inherit;
        white-space: normal
    }

    progress {
        vertical-align: baseline
    }

    [type="number"]::-webkit-inner-spin-button,
    [type="number"]::-webkit-outer-spin-button {
        height: auto
    }

    [type="search"] {
        outline-offset: -2px;
    }

    [type="search"]::-webkit-search-decoration {
        -webkit-appearance: none
    }

    ::-webkit-file-upload-button {
        font: inherit;
        -webkit-appearance: button
    }

    output {
        display: inline-block
    }

    summary {
        display: list-item;
        cursor: pointer
    }

    template {
        display: none
    }

    [hidden] {
        display: none !important
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6 {
        margin-bottom: .5rem;
        font-weight: 500;
        line-height: 1.2
    }

    h1,
    .h1 {
        font-size: 2.5rem
    }

    h2,
    .h2 {
        font-size: 2rem
    }

    h3,
    .h3 {
        font-size: 1.75rem
    }

    h4,
    .h4 {
        font-size: 1.5rem
    }

    h5,
    .h5 {
        font-size: 1.25rem
    }

    h6,
    .h6 {
        font-size: 1rem
    }

    .lead {
        font-size: 1.25rem;
        font-weight: 300
    }

    .display-1 {
        font-size: 6rem;
        font-weight: 300;
        line-height: 1.2
    }

    .display-2 {
        font-size: 5.5rem;
        font-weight: 300;
        line-height: 1.2
    }

    .display-3 {
        font-size: 4.5rem;
        font-weight: 300;
        line-height: 1.2
    }

    .display-4 {
        font-size: 3.5rem;
        font-weight: 300;
        line-height: 1.2
    }

    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, .1)
    }

    small,
    .small {
        font-size: 80%;
        font-weight: 400
    }

    mark,
    .mark {
        padding: .2em;
        background-color: #fcf8e3
    }

    .list-unstyled {
        padding-left: 0;
        list-style: none
    }

    .list-inline {
        padding-left: 0;
        list-style: none
    }

    .list-inline-item {
        display: inline-block
    }

    .list-inline-item:not(:last-child) {
        margin-right: .5rem
    }

    .initialism {
        font-size: 90%;
        text-transform: uppercase
    }

    .blockquote {
        margin-bottom: 1rem;
        font-size: 1.25rem
    }

    .blockquote-footer {
        display: block;
        font-size: 80%;
        color: #6c757d
    }

    .blockquote-footer::before {
        content: "\2014\00A0"
    }

    .img-fluid {
        max-width: 100%;
        height: auto
    }

    .img-thumbnail {
        padding: .25rem;
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: .25rem;
        max-width: 100%;
        height: auto
    }

    .figure {
        display: inline-block
    }

    .figure-img {
        margin-bottom: .5rem;
        line-height: 1
    }

    .figure-caption {
        font-size: 90%;
        color: #6c757d
    }

    code {
        font-size: 87.5%;
        color: #e83e8c;
        word-break: break-word
    }

    a>code {
        color: inherit
    }

    kbd {
        padding: .2rem .4rem;
        font-size: 87.5%;
        color: #fff;
        background-color: #212529;
        border-radius: .2rem
    }

    kbd kbd {
        padding: 0;
        font-size: 100%;
        font-weight: 700
    }

    pre {
        display: block;
        font-size: 87.5%;
        color: #212529
    }

    pre code {
        font-size: inherit;
        color: inherit;
        word-break: normal
    }

    .pre-scrollable {
        max-height: 340px;
        overflow-y: scroll
    }

    .container {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto
    }

    @media (min-width:576px) {
        .container {
            max-width: 540px
        }
    }

    @media (min-width:768px) {
        .container {
            max-width: 720px
        }
    }

    @media (min-width:992px) {
        .container {
            max-width: 960px
        }
    }

    @media (min-width:1200px) {
        .container {
            max-width: 1140px
        }
    }

    @media (min-width:576px) {
        .col-sm {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%
        }

        .col-sm-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%
        }

        .col-sm-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.33333%;
            flex: 0 0 8.33333%;
            max-width: 8.33333%
        }

        .col-sm-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
            max-width: 16.66667%
        }

        .col-sm-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-sm-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%
        }

        .col-sm-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.66667%;
            flex: 0 0 41.66667%;
            max-width: 41.66667%
        }

        .col-sm-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-sm-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.33333%;
            flex: 0 0 58.33333%;
            max-width: 58.33333%
        }

        .col-sm-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.66667%;
            flex: 0 0 66.66667%;
            max-width: 66.66667%
        }

        .col-sm-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-sm-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.33333%;
            flex: 0 0 83.33333%;
            max-width: 83.33333%
        }

        .col-sm-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.66667%;
            flex: 0 0 91.66667%;
            max-width: 91.66667%
        }

        .col-sm-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }

        .order-sm-first {
            -webkit-box-ordinal-group: 0;
            -ms-flex-order: -1;
            order: -1
        }

        .order-sm-last {
            -webkit-box-ordinal-group: 14;
            -ms-flex-order: 13;
            order: 13
        }

        .order-sm-0 {
            -webkit-box-ordinal-group: 1;
            -ms-flex-order: 0;
            order: 0
        }

        .order-sm-1 {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1
        }

        .order-sm-2 {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2
        }

        .order-sm-3 {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3
        }

        .order-sm-4 {
            -webkit-box-ordinal-group: 5;
            -ms-flex-order: 4;
            order: 4
        }

        .order-sm-5 {
            -webkit-box-ordinal-group: 6;
            -ms-flex-order: 5;
            order: 5
        }

        .order-sm-6 {
            -webkit-box-ordinal-group: 7;
            -ms-flex-order: 6;
            order: 6
        }

        .order-sm-7 {
            -webkit-box-ordinal-group: 8;
            -ms-flex-order: 7;
            order: 7
        }

        .order-sm-8 {
            -webkit-box-ordinal-group: 9;
            -ms-flex-order: 8;
            order: 8
        }

        .order-sm-9 {
            -webkit-box-ordinal-group: 10;
            -ms-flex-order: 9;
            order: 9
        }

        .order-sm-10 {
            -webkit-box-ordinal-group: 11;
            -ms-flex-order: 10;
            order: 10
        }

        .order-sm-11 {
            -webkit-box-ordinal-group: 12;
            -ms-flex-order: 11;
            order: 11
        }

        .order-sm-12 {
            -webkit-box-ordinal-group: 13;
            -ms-flex-order: 12;
            order: 12
        }

        .offset-sm-0 {
            margin-left: 0
        }

        .offset-sm-1 {
            margin-left: 8.33333%
        }

        .offset-sm-2 {
            margin-left: 16.66667%
        }

        .offset-sm-3 {
            margin-left: 25%
        }

        .offset-sm-4 {
            margin-left: 33.33333%
        }

        .offset-sm-5 {
            margin-left: 41.66667%
        }

        .offset-sm-6 {
            margin-left: 50%
        }

        .offset-sm-7 {
            margin-left: 58.33333%
        }

        .offset-sm-8 {
            margin-left: 66.66667%
        }

        .offset-sm-9 {
            margin-left: 75%
        }

        .offset-sm-10 {
            margin-left: 83.33333%
        }

        .offset-sm-11 {
            margin-left: 91.66667%
        }
    }

    @media (min-width:768px) {
        .col-md {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%
        }

        .col-md-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%
        }

        .col-md-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.33333%;
            flex: 0 0 8.33333%;
            max-width: 8.33333%
        }

        .col-md-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
            max-width: 16.66667%
        }

        .col-md-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-md-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%
        }

        .col-md-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.66667%;
            flex: 0 0 41.66667%;
            max-width: 41.66667%
        }

        .col-md-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-md-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.33333%;
            flex: 0 0 58.33333%;
            max-width: 58.33333%
        }

        .col-md-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.66667%;
            flex: 0 0 66.66667%;
            max-width: 66.66667%
        }

        .col-md-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-md-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.33333%;
            flex: 0 0 83.33333%;
            max-width: 83.33333%
        }

        .col-md-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.66667%;
            flex: 0 0 91.66667%;
            max-width: 91.66667%
        }

        .col-md-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }

        .order-md-first {
            -webkit-box-ordinal-group: 0;
            -ms-flex-order: -1;
            order: -1
        }

        .order-md-last {
            -webkit-box-ordinal-group: 14;
            -ms-flex-order: 13;
            order: 13
        }

        .order-md-0 {
            -webkit-box-ordinal-group: 1;
            -ms-flex-order: 0;
            order: 0
        }

        .order-md-1 {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1
        }

        .order-md-2 {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2
        }

        .order-md-3 {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3
        }

        .order-md-4 {
            -webkit-box-ordinal-group: 5;
            -ms-flex-order: 4;
            order: 4
        }

        .order-md-5 {
            -webkit-box-ordinal-group: 6;
            -ms-flex-order: 5;
            order: 5
        }

        .order-md-6 {
            -webkit-box-ordinal-group: 7;
            -ms-flex-order: 6;
            order: 6
        }

        .order-md-7 {
            -webkit-box-ordinal-group: 8;
            -ms-flex-order: 7;
            order: 7
        }

        .order-md-8 {
            -webkit-box-ordinal-group: 9;
            -ms-flex-order: 8;
            order: 8
        }

        .order-md-9 {
            -webkit-box-ordinal-group: 10;
            -ms-flex-order: 9;
            order: 9
        }

        .order-md-10 {
            -webkit-box-ordinal-group: 11;
            -ms-flex-order: 10;
            order: 10
        }

        .order-md-11 {
            -webkit-box-ordinal-group: 12;
            -ms-flex-order: 11;
            order: 11
        }

        .order-md-12 {
            -webkit-box-ordinal-group: 13;
            -ms-flex-order: 12;
            order: 12
        }

        .offset-md-0 {
            margin-left: 0
        }

        .offset-md-1 {
            margin-left: 8.33333%
        }

        .offset-md-2 {
            margin-left: 16.66667%
        }

        .offset-md-3 {
            margin-left: 25%
        }

        .offset-md-4 {
            margin-left: 33.33333%
        }

        .offset-md-5 {
            margin-left: 41.66667%
        }

        .offset-md-6 {
            margin-left: 50%
        }

        .offset-md-7 {
            margin-left: 58.33333%
        }

        .offset-md-8 {
            margin-left: 66.66667%
        }

        .offset-md-9 {
            margin-left: 75%
        }

        .offset-md-10 {
            margin-left: 83.33333%
        }

        .offset-md-11 {
            margin-left: 91.66667%
        }
    }

    .table {
        width: 100%;
        color: #212529
    }

    .table th,
    .table td {
        padding: .75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6
    }

    .table tbody+tbody {
        border-top: 2px solid #dee2e6
    }

    .table-sm th,
    .table-sm td {
        padding: .3rem
    }

    .table-bordered {
        border: 1px solid #dee2e6
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid #dee2e6
    }

    .table-bordered thead th,
    .table-bordered thead td {
        border-bottom-width: 2px
    }

    .btn {
        display: inline-block;
        font-weight: 400;
        color: #212529;
        text-align: center;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: .25rem;
        -webkit-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
        -o-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out
    }

    body {
        font-family: "Poppins", Arial, sans-serif;
        font-size: 16px;
        line-height: 1.8;
        font-weight: normal;
        background: #f8f9fd;
        color: gray;
        background: linear-gradient(to bottom, rgb(255, 255, 255), rgb(128, 255, 255));
        background-attachment: fixed;
    }

    a {
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease;
        color: #6807f9
    }

    a:hover,
    a:focus {
        text-decoration: none !important;
        outline: none !important;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    .h1,
    .h2,
    .h3,
    .h4,
    .h5 {
        line-height: 1.5;
        font-weight: 400;
        font-family: "Poppins", Arial, sans-serif;
        color: #000
    }

    .bg-primary {
        background: #6807f9 !important
    }

    .ftco-section {
        padding: 7em 0
    }

    .ftco-no-pt {
        padding-top: 0
    }

    .ftco-no-pb {
        padding-bottom: 0
    }

    .heading-section {
        font-size: 28px;
        color: #000
    }

    .table-wrap {
        overflow-x: scroll
    }

    .table {
        min-width: 1000px !important;
        width: 100%;
        background: #fff;
        -webkit-box-shadow: 0 5px 12px -12px rgba(0, 0, 0, .29);
        -moz-box-shadow: 0 5px 12px -12px rgba(0, 0, 0, .29);
        box-shadow: 0 5px 12px -12px rgba(0, 0, 0, .29);
        text-align: center
    }

    .table thead.thead-primary {
        background: #6807f9
    }

    .table thead th {
        border: none;
        padding: 30px;
        font-size: 14px;
        color: #fff
    }

    .table tbody tr {
        margin-bottom: 10px
    }

    .table tbody th,
    .table tbody td {
        border: none;
        padding: 30px;
        font-size: 14px;
        background: #fff;
        vertical-align: middle;
        border-bottom: 2px solid #f8f9fd
    }

    .table tbody th.scope {
        background: #e8ebf8;
        border-bottom: 2px solid #e0e5f6
    }

    @media (min-width:768px) {
        .table tbody td:nth-child(odd) {
            background: #f4f6fc;
            border-bottom: 2px solid #eceffa
        }
    }

    .btn {
        cursor: pointer;
        border-width: 2px;
        border-radius: 2px;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        font-size: 13px;
        font-weight: 500;
        -webkit-box-shadow: 0 10px 20px -6px rgba(0, 0, 0, .12);
        -moz-box-shadow: 0 10px 20px -6px rgba(0, 0, 0, .12);
        box-shadow: 0 10px 20px -6px rgba(0, 0, 0, .12)
    }

    .btn:hover,
    .btn:active,
    .btn:focus {
        outline: none !important;
        -webkit-box-shadow: 0 12px 20px -6px rgba(0, 0, 0, .21);
        -moz-box-shadow: 0 12px 20px -6px rgba(0, 0, 0, .21);
        box-shadow: 0 12px 20px -6px rgba(0, 0, 0, .21)
    }

    .btn.btn-primary {
        background: #6807f9;
        border-color: #6807f9;
        color: #fff
    }

    .btn.btn-primary:hover,
    .btn.btn-primary:focus {
        border-color: #5305c8 !important;
        background: #5305c8 !important
    }

    .btn.btn-primary.btn-link {
        background: transparent;
        color: #fff;
        border: none;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .btn.btn-outline-primary {
        color: #fff
    }
</style>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr>
                                    <th>S.NO</th>
                                    <th>ID</th>
                                    <th>Acadamy Name</th>
                                    <th>State</th>
                                    <th>District</th>
                                    <th>Locality</th>
                                    <th>More Details</th>
                                </tr>
                            </thead>
                            <?php

                            include '../security/encryption.php';
                            include '../security/decryption.php';

                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "kheloindia";


                            $sports_category = $_POST['sports_category'];
                            $state = $_POST['state'];
                            $district = $_POST['district'];
                            $locality = $_POST['locality'];

                            $sql1 = "SELECT * FROM application_details ";

                            if (empty($sports_category)) {
                                $cut = 0;
                            } else {
                                $sql1 = $sql1 . "where sports_category like '%" . $sports_category . "%'";
                                $cut = 1;
                            }
                            if (!empty($state)) {
                                if ($cut == 0) {
                                    $sql1 = $sql1 . "where state='" . $state . "'";
                                    $cut++;
                                } else {
                                    $sql1 = $sql1 . " and state='" . $state . "'";
                                }
                            }
                            if (!empty($district)) {
                                if ($cut == 0) {
                                    $sql1 = $sql1 . "where district like '%" . $district . "%'";
                                    $cut++;
                                } else {
                                    $sql1 = $sql1 . " and district like '%" . $district . "%'";
                                }
                            }
                            if (!empty($locality)) {
                                if ($cut == 0) {
                                    $sql1 = $sql1 . "where locality like '%" . $locality . "%'";
                                    $cut++;
                                } else {
                                    $sql1 = $sql1 . " and locality like '%" . $locality . "%'";
                                }
                            }

                            // Create connection
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            // $result = $conn->query($sql);
                            // $count=1;
                            // if ($result->num_rows > 0) {
                            //     // output data of each row
                            //     while($row = $result->fetch_assoc()) {
                            //         echo "         
                            //             <tbody>
                            //                 <tr>
                            //                     <th>".$count."</th>
                            //                     <td>".$row['id']."</td>
                            //                     <td>".decryption($row['orgname'])."</td>
                            //                     <td>".decryption($row['state'])."</td>
                            //                     <td>".decryption($row['district'])."</td>
                            //                     <td>".decryption($row['locality'])."</td>
                            //                     <td>
                            //                         <form id='cap-form' action='view_user.php' method='post' name='form' enctype='multipart/form-data'>
                            //                             <input type='text' name='id' value='".$row['id']."' hidden>
                            //                             <input class='btn btn-primary' type='submit' value='View' name='submit' />
                            //                         </form>
                            //                     </td> 
                            //                 </tr>
                            //             </tbody>
                            //         ";
                            //         $count+=1;
                            //     }
                            // }

                            // $sql = "SELECT * FROM application_details ";
                            // $cut=0;$sql2="";

                            // if(empty($sql1)){
                            //     if(empty($district)){
                            //         $cut=0;
                            //     }
                            //     else{
                            //         $sql2="where district like '%".$sports_category."%'";
                            //         $cut=1;
                            //     }
                            //     if(empty($locality)){
                            //         $cut=0;
                            //     }
                            //     else{
                            //         if($cut==0){
                            //             $sql2=$sql2."where locality like '%".$locality."%'";
                            //         }
                            //         else{
                            //             $sql2=$sql2." and locality like '%".$locality."%'";
                            //         }
                            //     }
                            // }
                            // else{
                            //     if(empty($district)){
                            //         $cut=0;
                            //     }
                            //     else{
                            //         $sql2=$sql2."and district like '%".$sports_category."%'";
                            //         $cut=1;
                            //     }
                            //     if(empty($locality)){
                            //         $cut=0;
                            //     }
                            //     else{
                            //         $sql2=$sql2."and locality like '%".$locality."%'";
                            //         $cut=1;
                            //     }
                            // }

                            // // if(empty($sql1)){
                            // //     $sql=$sql.$sql2;
                            // // }
                            // // else if(empty($sql2)){
                            // //     $sql=$sql.$sql1;
                            // // }
                            // // else{
                            // //     $sql=$sql.$sql1.$sql2;
                            // // }

                            // $sql=$sql.$sql1.$sql2;

                            $result = $conn->query($sql1);
                            $count = 1;
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo "         
                                            <tbody>
                                                <tr>
                                                    <th>" . $count . "</th>
                                                    <td>" . $row['id'] . "</td>
                                                    <td>" . decryption($row['orgname']) . "</td>
                                                    <td>" . $row['state'] . "</td>
                                                    <td>" . $row['district'] . "</td>
                                                    <td>" . $row['locality'] . "</td>
                                                    <td>
                                                        <form id='cap-form' action='view_user.php' method='post' name='form' enctype='multipart/form-data'>
                                                            <input type='text' name='id' value='" . $row['id'] . "' hidden>
                                                            <input class='btn btn-primary' type='submit' value='View' name='submit' />
                                                        </form>
                                                    </td> 
                                                </tr>
                                            </tbody>
                                        ";
                                    $count += 1;
                                }
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js+bootstrap.min.js+main.js.pagespeed.jc.mGo61WuhWO.js"></script>
    <script>
        eval(mod_pagespeed_VlMY9A_Ej6);
    </script>
    <script>
        eval(mod_pagespeed_Jrc1mCtwoH);
    </script>
    <script>
        eval(mod_pagespeed_p4wjUenRL9);
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"738639cf4d6b4adb","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.6.0","si":100}' crossorigin="anonymous"></script>
    <script>
        function disappear(id) {
            console.log("in" + id);
            document.getElementById("in" + id).style.border = "3px solid green";
            document.getElementById("inn" + id).style.border = "1px solid aliceblue";
        }

        function appear(id) {
            var x = document.getElementById("in" + id).value;
            console.log(x);
            if (x) {
                console.log("in" + id);
                document.getElementById("in" + id).style.border = "1px solid black";
                document.getElementById("inn" + id).style.border = "3px solid aliceblue";
            } else {
                console.log("uhvosovjsovjsoi");
                document.getElementById("in" + id).style.border = "3px solid red";
                document.getElementById("inn" + id).style.border = "1px solid aliceblue";
            }
        }
    </script>
</body>