/* Materialize Init File */
/* Sidenav */
$(document).ready(function () {
    $('.sidenav').sidenav({
        draggable: true,
        edge: 'right',
    });
});

/* Dropdown */
$(document).ready(function () {
    $(".dropdown-trigger").dropdown({
        inDuration: 300,
        outDuration: 225,
        hover: false,
        coverTrigger: false,
        belowOrigin: true,
        constrainWidth: false,
        alignment: 'right',
    });
});

/* Pushpin */
$(document).ready(function () {
    $('.navindex').pushpin({
        top: 937,
    });
});

$(document).ready(function () {
    $('.pin').pushpin({
        top: 494,
        offset: 60,
    });
});

/* Forms */
$(document).ready(function() {
    $('input#input_text, textarea#input_text').characterCounter();
  });

$('#input_text').val('');
M.textareaAutoResize($('#input_text'));

/* Datepicker */
$(document).ready(function () {
    $('.datepicker').datepicker({
        format: 'dd mmm yyyy',
        setDefaultDate: true,
        defaultDate: '01 Jan 1990',

    });
});

/* Select */
$(document).ready(function () {
    $('select').formSelect();
});

/* FeatureDiscovery */
$(document).ready(function () {
    $('.tap-target').tapTarget();
});

/* FAB */
$(document).ready(function () {
    $('.fixed-action-btn').floatingActionButton();
});

/* parallax */
$(document).ready(function () {
    $('.parallax').parallax();
});

/*/ collapsible */
$(document).ready(function () {
    $('.collapsible').collapsible({
        accordion: true,

    });
});

/* tabs */
$(document).ready(function () {
    $('.tabs').tabs({
        swipeable: false,
    });
});

/* carrousel */
$(document).ready(function () {
    $('.carousel').carousel({
        numVisible: 5,
        autoplay: true,
        dist: 0,
    });
});

$('.carousel').carousel();
setInterval(function () {
    $('.job_carousel').carousel('next');
}, 2000); // every 2 seconds

/* Material boxed */
$(document).ready(function () {
    $('.materialboxed').materialbox();
});

/* slider */

$(document).ready(function () {
    $('.fullslider').slider({
        indicators: true,
        height: $(window).height(),
        duration: 250,
        interval: 6000,
    });
});

$(document).ready(function () {
    $('.litleslider').slider({
        indicators: true,
        height: 350,
        duration: 250,
        interval: 6000,
    });
});

/* Modal */
$(document).ready(function () {
    $('.modal').modal();
});

/* Chips */

$('.chips').chips();
$('.chips-initial').chips({
    data: [{
        tag: 'Apple',
    }, {
        tag: 'Microsoft',
    }, {
        tag: 'Google',
    }],
});
$('.chips-placeholder').chips({
    placeholder: 'Enter a tag',
    secondaryPlaceholder: '+Tag',
});
$('.chips-autocomplete').chips({
    autocompleteOptions: {
        data: {
            'Apple': null,
            'Microsoft': null,
            'Google': null
        },
        limit: Infinity,
        minLength: 1
    }
});

$(document).ready(function () {
    $('.tooltipped').tooltip({
        enterDelay: 400,
    });
});
