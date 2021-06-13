            <div class="bg-light text-dark sidebar-1" id="al3-sidebar">

                <i class="ti-close text-dark" id="cancel" onclick="sideBarClose()"></i>

                <header>
                    <img src="images/default/Logo_1_var_3.png" alt="">
                    <!-- <p>Richard del S. Altre</p><hr> -->
                </header>

                <!-- <br><hr> -->

                <ul>

                    <li>
                        <a href="index.php"><i class="ti-dashboard"></i> Dashboard</a>
                    </li>


                    <!-- ============================= Email Part =========================== -->
                        <li>
                            <a href="#" onclick="dd_items('#sub-items1')"><i class="ti-email"></i> Inbox</a>
                        </li>

                            <div id="sub-items1" class="sidebar-i-1">

                                <li>    
                                    <a href="email.php"><span style="margin-left: 20px; font-size: 25px;"></span>Email</a>
                                </li>

                                <li>
                                    <a href="email-detail.php"><span style="margin-left: 20px; font-size: 25px;"></span>Email Detail</a>
                                </li>

                                <li>
                                    <a href="email-compose.php"><span style="margin-left: 20px; font-size: 25px;"></span>Email Compose</a>
                                </li>

                            </div>
                    <!-- ============================= Email Part =========================== -->



                    <!-- ============================ Ticket Part =============================== -->
                        <li>
                            <a href="#" onclick="dd_items('#sub-items2')"><i class="ti-tag"></i> Ticket</a>
                        </li>

                            <div id="sub-items2" class="sidebar-i-1">

                                <li>    
                                    <a href="#"><span style="margin-left: 20px; font-size: 25px;"></span>Ticket List</a>
                                </li>

                                <li>
                                    <a href="#"><span style="margin-left: 20px; font-size: 25px;"></span>Ticket Details</a>
                                </li>

                            </div>
                    <!-- ============================ Ticket Part END =============================== -->



                    <!-- =========================== Extras =========================== -->
                        <li>
                            <a href="#" onclick="dd_items('#sub-items3')"><i class="ti-list"></i> Extras</a>
                        </li>

                            <div id="sub-items3" class="sidebar-i-1">

                                <li>    
                                    <a href="#"><span style="margin-left: 20px; font-size: 25px;"></span>Chat</a>
                                </li>

                                <li>
                                    <a href="#"><span style="margin-left: 20px; font-size: 25px;"></span>Calendar</a>
                                </li>

                                <li>
                                    <a href="#"><span style="margin-left: 20px; font-size: 25px;"></span>Taskboard</a>
                                </li>

                            </div>
                    <!-- =========================== Extras =========================== -->



                    <li>
                        <a href="cards.php"><i class="ti-file"></i> Cards</a>
                    </li>
                    <li>
                        <a href="settings.php"><i class="ti-settings"></i> System Settings</a>
                    </li>
                    <li class="d-none d-lg-block">
                        <a href="#" data-toggle="modal" data-target="#helpModal"><i class="ti-help"></i> Help</a>
                    </li>
                    
                </ul>

                <div class="sb-footer">
                    <div class="text-center">
                        <i>Developed by <b>AL3</b> &trade;</i>
                    </div>
                </div>

            </div>



            <!-- =================== Notification Modal ==================== -->
                <div class="modal fade" id="notifModal">

                    <div class="modal-dialog">

                        <div class="modal-content bg-white text-dark">

                            <div class="modal-header">
                                <h5 class="header-title">Notifications</h5>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <div class="modal-body">
                                
                                <div class="notif-box-light">

                                    <img src="images/default/User_vector.jfif" class="img-responsive" alt="img_photo" height="30">

                                </div>

                                <div class="notif-box-light">

                                    <img src="images/default/User_vector.jfif" class="img-responsive" alt="img_photo" height="30">

                                </div>

                            </div>

                            <div class="modal-footer">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <a href="#" class="text-dark">View All</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            <!-- =================== Notification Modal END ==================== -->



            <!-- =================== Help Modal ==================== -->
                <div class="modal fade" id="helpModal">

                <div class="modal-dialog bg-white text-dark">

                    <div class="modal-content bg-white text-dark">

                        <div class="modal-header">
                            <h5 class="header-title">Help</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div class="modal-body">

                            <!-- <h6><b>Shortcut Keys</b></h6><hr> -->

                                <table class="table table-bordered">

                                    <thead class="header-title" style="background: #3d3d3d; color: white;">
                                        <tr>
                                            <th>Command</th>
                                            <th>Key</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Add: New User</td>
                                            <td><kbd>A</kbd> + <kbd>1</kbd></td>
                                        </tr>
                                        <tr>
                                            <td>Add: Category</td>
                                            <td><kbd>C</kbd> + <kbd>1</kbd></td>
                                        </tr>
                                    </tbody>

                                </table>

                            </div>

                            <div class="modal-footer">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <a href="#" class="text-dark">See All</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            <!-- =================== Help Modal END ==================== -->