$(document).ready(function(){

    $('#btn-admin').on('click', function(e){
        e.preventDefault();
        $('.tab').addClass('hidden');
        $('#tab-admin').removeClass('hidden');
        $('.btn-tab').removeClass('btn-tab-background');
        $('#btn-admin').addClass('btn-tab-background');
    });
    $('#btn-landing').on('click', function(e){
        e.preventDefault();
        $('.tab').addClass('hidden');
        $('#tab-landing').removeClass('hidden');
        $('.btn-tab').removeClass('btn-tab-background');
        $('#btn-landing').addClass('btn-tab-background');
    });
    $('#btn-hour').on('click', function(e){
        e.preventDefault();
        $('.tab').addClass('hidden');
        $('#tab-hours').removeClass('hidden');
        $('.btn-tab').removeClass('btn-tab-background');
        $('#btn-hour').addClass('btn-tab-background');
    });
    $('#btn-carte').on('click', function(e){
        e.preventDefault();
        $('.tab').addClass('hidden');
        $('#tab-carte').removeClass('hidden');
        $('.btn-tab').removeClass('btn-tab-background');
        $('#btn-carte').addClass('btn-tab-background');
    });
    $('#btn-booking').on('click', function(e){
        e.preventDefault();
        $('.tab').addClass('hidden');
        $('#tab-bookings').removeClass('hidden');
        $('.btn-tab').removeClass('btn-tab-background');
        $('#btn-booking').addClass('btn-tab-background');
    });
});