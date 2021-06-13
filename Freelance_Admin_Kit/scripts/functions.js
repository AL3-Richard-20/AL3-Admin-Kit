// ===================== Executables ====================
    colorAccent()

    getdarkModeCookie()
// ===================== Executables END ====================



// ==================== Color Properties =======================
    function colorAccent(){

        var sdbrcolor = localStorage.getItem("sidebarcolor")

        var color_val = sdbrcolor.substring(8, 9)



        // =============== Sidebar Color ================
            $('#al3-sidebar').addClass('sidebar-'+ color_val)
            $('.sidebar-i-1').addClass('sidebar-i-'+ color_val)
        // =============== Sidebar Color END ================



        // ================= Navbar 1 ======================
        $('#al3-navbar').addClass('al3-navbar-'+ color_val)
        // ================= Navbar 1 END ======================



        // ================= Navbar 2 ======================
        // $('#al3-navbar').addClass('al3-navbar-alt-'+ color_val)
        // ================= Navbar 2 ======================

        
    }
// ==================== Color Properties END =======================



//  ========================== Sidebar Slide ===========================
    function dd_items(id){

        $(id).slideToggle();

    }

    function sideBarSlide(){

        $('#check').prop('checked', 'checked')
    }

    function sideBarClose(){

        $('#check').prop('checked', false)
    }
//  ========================== Sidebar Slide END ===========================



// ================ Log Out Pop Up =====================
    function logOut(){

        swal({
            title: "Do you want to Log Out",
            text: "",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {

            if (willDelete) {

            

            }

        })
    }
// ================ Log Out Pop Up END =====================



// ================= Dark Mode Toggle ================
    function toggleDarkMode(){

        createPageStateElement()

        toggleDisplayMode()

    }

    function getdarkModeCookie(){

        var dkmode = localStorage.getItem("darkmode")

        if(dkmode == 1){

            toggleDarkMode()
        }
        
    }

    function setdarkModeCookie(){

        var dkmode = localStorage.getItem("darkmode")

        if(dkmode == 1){

            localStorage.setItem("darkmode", 0)
        }

        else{

            localStorage.setItem("darkmode", 1)
        }

        toggleDarkMode()
        
    }
// ===================== Dark Mode Toggle END ================