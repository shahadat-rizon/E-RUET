function addstu(){
    var stuname= $("#stuname").val();
    var stumail= $("#stumail").val();
    var stupass= $("#stupass").val(); 
    
    $.ajax({
    url:'Student/addstudent.php',
    method: 'POST',
    data:{
        stusignup: "stusignup",
        stuname: stuname,
        stumail: stumail,
        stupass: stupass,
    },

    success: function(data){
        console.log(stuname);
        console.log(stupass);
        console.log(stumail);
    }

    })


}
