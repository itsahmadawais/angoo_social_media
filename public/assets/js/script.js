$(document).ready(function(){
    /**
     * Signup Ajax
     */
    $("#signupform").on('submit',function(e){
        e.preventDefault();
        var spinner = "<div class='spinner spinner-border' role='status'><span class='sr-only'></span></div>";
        var url = $(this).attr('action');
        var form = $(this).serialize();
        $("#signup-btn").parent().append(spinner);
        $("#signup-btn").hide();
        /**
         * Ajax
         */
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type:'POST',
            url:url,
            data: form,
            success: function( response ) {
                console.log(response);
            },
            error: function (request, status, error) {
                console.log(error);
                console.log(request);
                console.log(status);
                toastr.error('Error', 'Error in Signing up!');
                $("#signup-btn").show();
                $("#signup-btn").closest('.spinner').remove();
            }
        });
    });
    /**
     * Login Ajax
     */
    $("#loginform").on('submit',function(e){
        e.preventDefault();
        var spinner = "<div class='spinner spinner-border' role='status'><span class='sr-only'></span></div>";
        var url = $(this).attr('action');
        var form = $(this).serialize();
        $("#login-btn").parent().append(spinner);
        $("#login-btn").hide();
        /**
         * Ajax
         */
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type:'POST',
            url:url,
            data: form,
            success: function( response ) {
                console.log(response);
                window.location.replace(response.redirect);
            },
            error: function (request, status, error) {
                console.log(error);
                console.log(request);
                console.log(status);
                toastr.error('Error', 'Error in Loggin in!');
                $("#login-btn").show();
                $("#login-btn").siblings('.spinner').remove();
            }
        });
    });
    /**
     * Send Friend Request
     */
    $(".send-friend-request-btn").on('click',function(){
        var friend = $(this).data('friend');
        /**
         * Ajax
         */
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type:'POST',
            url:'/send-friend-request',
            data:{
                friend: friend
            },
            success: function( response ) {
                console.log(response);
                $(this).hide();
            },
            error: function (request, status, error) {
                
            }
        });
    });
    /**
     * Create Post Modal
     */
    $("#input-post").on('click',function(){
        $('#postModal').modal('show');
    });
    $(".dropdown-menu-list").on('click',function(e){
        e.stopPropagation();
        $(".dropdown-list").toggle();
    });
    $("#remove-img-post").on('click',function(){
        $("#image-box").hide();
    });
    $("#photo-post").on('click',function(){
        $("#image-box").show();
    });
    $("#privacy-btn").on('click',function(){
        $("div[data-screen=1]").hide();
        $("div[data-screen=2]").show();
        $("div[data-screen=3]").hide();
    });
    $("#check-post").on('click',function(){
        $("div[data-screen=1]").hide();
        $("div[data-screen=2]").hide();
        $("div[data-screen=3]").show();
    });
    $("#createPostModal").on('hide.bs.modal',function(e){
        $("div[data-screen=1]").show();
        $("div[data-screen=2]").hide();
        $("div[data-screen=3]").hide();     
    });
    $("#goBackToPostCreator").on('click',function(){
        $("div[data-screen=1]").show();
        $("div[data-screen=2]").hide();
        $("div[data-screen=3]").hide(); 
    });
    $("#cover-photo-btn").on('click',function(){
        $("#cover_photo").click();
    });
    $("input#cover_photo").on('change',function(){
        $("#cover-photo-form").submit();
    });
    $("#update-avatar-btn").on('click',function(){
        $("#avatar").click();
    });
    $("#avatar").on('change',function(){
        $("#update-avatar-form").submit();
    });
    $(".reaction-btn").on('mouseover',function(){
        $(this).parent('.reactions').children('.reactions-emojis').fadeIn();
    });
    $(".feed-post").on('mouseleave',function(){
        $(this).parent('.reactions').children('.reactions-emojis').fadeOut();
    });
    $(".toggle-form .toggle-btn").on('click',function(){
        $(this).parent(".toggle-form").children(".toggle-div").slideToggle('slow');
    });
    $(document).on('click',".img-box .remove-btn",function(){
        $(this).closest('.img-box-container').remove();
    });
    $(".image-uploader-box .img-picker").on('click',function(){
        $("#postImages").click();
    });
    $("#postImages").on('change',function(e){
        var html ="<div class='img-box-container col-4 mb-2'>";
        html+="<div class='img-box'>";
        html+="<input type='hidden' name='img[]' value=''>";
        html+="<img src='"+URL.createObjectURL(e.target.files[0])+"' class='w-100'>";
        html+="<a href='javascript:void(0)' class='remove-btn'>";
        html+="<span class='badge bg-danger'>";
        html+="<i class='fa fa-times'></i>";
        html+="</span>";
        html+="</a>";
        html+="</div>";
        html+="</div>";
        $("#postImagesCollection").append(html);
    });
    $("#privacyscreen .privacy-list .list-item").on('click',function(){
        $("#privacyscreen .privacy-list .list-item").removeClass('active');
        $(this).addClass('active');
        $(this).find('input').prop('checked',true);
    });
    /**
     * Set Time Out Functions
     */
    var i=100;
    setInterval(function(){
        /**
         * Ajax
         */
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type:'GET',
            url:'/alert',
            success: function( response ) {
                if(response.messages>0){
                    $("#inbox-count").html(response.messages);
                    $("#inbox-count").show();
                }
                else{
                    $("#inbox-count").hide();
                }
            },
            error: function (request, status, error) {
            }
        });
    }, 1000);
    setInterval(function(){
        i++;
        $("#notifications-count").html(i);
    }, 1000);
});

$(document).on("click", function(event){
    $(".dropdown-list").hide();           
});