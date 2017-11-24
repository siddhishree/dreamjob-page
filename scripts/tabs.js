$('.tab a').on('click', function (e){
        e.preventDefault();
        $(this).parent().addClass('active');
        $(this).siblings().removeClass('active');

        target=$(this).attr('href');

        $('.tab-contain > div').not(target).hide();

        $(target).fadeIn(300);
});
