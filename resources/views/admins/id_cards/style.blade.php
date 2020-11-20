<style>
/********************************* CUSTOM INPUT FILES FOR IMAGES *********************************/
/*** GENERAL STYLES ***/
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

/* body {
	 margin: 0;
	 padding: 1rem;
	 font-family: 'Josefin Sans', sans-serif;
	 font-size: 16px;
	 background: lightcoral;
} */
#page {
    text-align: center;
}

#page h1 {
    margin-bottom: 4rem;
    font-family: 'Lemonada', cursive;
    text-transform: uppercase;
    font-weight: normal;
    color: #fff;
    font-size: 2rem;
}

/*** CUSTOM FILE INPUT STYE ***/
.wrap-custom-file {
    position: relative;
    display: inline-block;
    width: 100px;
    height: 100px;
    margin: 0 0.5rem 1rem;
    text-align: center;
}

.wrap-custom-file input[type="file"] {
    position: absolute;
    top: 0;
    left: 0;
    width: 2px;
    height: 2px;
    overflow: hidden;
    opacity: 0;
}

.wrap-custom-file label {
    z-index: 1;
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    width: 100%;
    overflow: hidden;
    padding: 0 0.5rem;
    cursor: pointer;
    background-color: #fff;
    border-radius: 4px;
    -webkit-transition: -webkit-transform 0.4s;
    -moz-transition: -moz-transform 0.4s;
    -ms-transition: -ms-transform 0.4s;
    -o-transition: -o-transform 0.4s;
    transition: transform 0.4s;
}

.wrap-custom-file label span {
    display: block;
    margin-top: 2rem;
    font-size: 1.4rem;
    color: #777;
    -webkit-transition: color 0.4s;
    -moz-transition: color 0.4s;
    -ms-transition: color 0.4s;
    -o-transition: color 0.4s;
    transition: color 0.4s;
}

.wrap-custom-file label .fa {
    position: absolute;
    bottom: 1rem;
    left: 50%;
    -webkit-transform: translatex(-50%);
    -moz-transform: translatex(-50%);
    -ms-transform: translatex(-50%);
    -o-transform: translatex(-50%);
    transform: translatex(-50%);
    font-size: 1.5rem;
    color: lightcoral;
    -webkit-transition: color 0.4s;
    -moz-transition: color 0.4s;
    -ms-transition: color 0.4s;
    -o-transition: color 0.4s;
    transition: color 0.4s;
}

.wrap-custom-file label:hover {
    -webkit-transform: translateY(-1rem);
    -moz-transform: translateY(-1rem);
    -ms-transform: translateY(-1rem);
    -o-transform: translateY(-1rem);
    transform: translateY(-1rem);
}

.wrap-custom-file label:hover span,
.wrap-custom-file label:hover .fa {
    color: #333;
}

.wrap-custom-file label.file-ok {
    background-size: cover;
    background-position: center;
}

.wrap-custom-file label.file-ok span {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 0.3rem;
    font-size: 1.1rem;
    color: #000;
    background-color: rgba(255, 255, 255, .7);
}

.wrap-custom-file label.file-ok .fa {
    display: none;
}
</style>