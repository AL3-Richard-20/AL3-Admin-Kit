        <button type="button" class="btn btn-success btn-lg d-block d-xl-none" data-toggle="modal" data-target="#gmail_menu" style=" z-index: 3; position: fixed;"><span class="ti-menu"></span></button>

        <div class="col-sm-3 d-none d-xl-block" id="gmail_sdbr">

    
            <table class="table table-white table-hover" style="cursor:pointer;">
                
                <tbody>

                    <tr onclick="location.href='email.php';" style="border-right: 5px solid green">
                        <td><span class="ti-email"></span></td>
                        <td>Inbox</td>
                        <td>4</td>
                    </tr>	

                    <tr>
                        <td><span class="ti-star"></span></td>
                        <td>Starred</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td><span class="ti-control-play"></span></td>
                        <td>Draft</td>
                        <td></td>
                    </tr>	

                    <tr>
                        <td><span class="ti-envelope"></span></td>
                        <td>Sent</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td><span class="ti-lock"></span></td>
                        <td>Spam</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td><span class="ti-trash"></span></td>
                        <td>Trash</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>	

                    <tr onclick="location.href='messenger.php';">
                        <td><span class="ti-thought"></span></td>
                        <td>Conversation</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td><span class="ti-calendar"></span></td>
                        <td>Calendar</td>
                        <td></td>
                    </tr>			

                </tbody>

            </table>

        </div>

        <div class="modal" id="gmail_menu">

            <div class="modal-dialog">

                <div class="modal-content bg-white text-dark">

                    <!-- Modal body -->
                    <div class="modal-body">

                        <button class="btn btn-success" style="width: 100%;" onclick="location.href='email-compose.php';">Compose</button>

                        <br><br>

                        <table class="table table-white table-hover" style="cursor:pointer;">
                
                            <tbody>

                                <tr onclick="location.href='email.php';" style="border-right: 5px solid green">
                                    <td><span class="ti-email"></span></td>
                                    <td>Inbox</td>
                                    <td>4</td>
                                </tr>	

                                <tr>
                                    <td><span class="ti-star"></span></td>
                                    <td>Starred</td>
                                    <td>3</td>
                                </tr>

                                <tr>
                                    <td><span class="ti-control-play"></span></td>
                                    <td>Draft</td>
                                    <td></td>
                                </tr>	

                                <tr>
                                    <td><span class="ti-envelope"></span></td>
                                    <td>Sent</td>
                                    <td>20</td>
                                </tr>

                                <tr>
                                    <td><span class="ti-lock"></span></td>
                                    <td>Spam</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td><span class="ti-trash"></span></td>
                                    <td>Trash</td>
                                    <td>20</td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>	

                                <tr onclick="location.href='messenger.php';">
                                    <td><span class="ti-thought"></span></td>
                                    <td>Conversation</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td><span class="ti-calendar"></span></td>
                                    <td>Calendar</td>
                                    <td></td>
                                </tr>			

                            </tbody>

                        </table>

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
                    </div>

                </div>

            </div>

        </div>