@include('admin.asset.header')

<div class="content-inner">
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Dashboard</h2>
                </div>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- Begin Row -->
        <div class="row flex-row">
            <div class="col-xl-12">
                <!-- Begin Widget 07 -->
                <div class="widget widget-07 has-shadow">
                    <!-- Begin Widget Header -->
                    <div class="widget-header bordered d-flex align-items-center">
                        <h2>Product Overview</h2>
                        <div class="widget-options">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-primary ripple">Week</button>
                                <button type="button" class="btn btn-primary ripple">Month</button>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget Header -->
                    <!-- Begin Widget Body -->
                    <div class="widget-body">
                        <div class="table-responsive table-scroll padding-right-10" style="max-height:520px;">
                            <table class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>
                                        <div class="styled-checkbox mt-2">
                                            <input type="checkbox" name="check-all" id="check-all">
                                            <label for="check-all"></label>
                                        </div>
                                    </th>
                                    <th>Order ID</th>
                                    <th>Customer Name</th>
                                    <th>Country</th>
                                    <th>Ship Date</th>
                                    <th><span style="width:100px;">Status</span></th>
                                    <th>Order Total</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="width:5%;">
                                        <div class="styled-checkbox mt-2">
                                            <input type="checkbox" name="cb1" id="cb1">
                                            <label for="cb1"></label>
                                        </div>
                                    </td>
                                    <td><span class="text-secondary">054-01-FR</span></td>
                                    <td>Lori Baker</td>
                                    <td>US</td>
                                    <td>10/21/2017</td>
                                    <td><span style="width:100px;"><span
                                                class="badge-text badge-text-small info">Paid</span></span></td>
                                    <td>$139.45</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:5%;">
                                        <div class="styled-checkbox mt-2">
                                            <input type="checkbox" name="cb2" id="cb2">
                                            <label for="cb2"></label>
                                        </div>
                                    </td>
                                    <td><span class="text-secondary">021-12-US</span></td>
                                    <td>Lawrence Crawford</td>
                                    <td>FR</td>
                                    <td>10/21/2017</td>
                                    <td><span style="width:100px;"><span
                                                class="badge-text badge-text-small info">Paid</span></span></td>
                                    <td>$189.00</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:5%;">
                                        <div class="styled-checkbox mt-2">
                                            <input type="checkbox" name="cb3" id="cb3">
                                            <label for="cb3"></label>
                                        </div>
                                    </td>
                                    <td><span class="text-secondary">189-01-RU</span></td>
                                    <td>Samuel Walker</td>
                                    <td>AU</td>
                                    <td>08/21/2017</td>
                                    <td><span style="width:100px;"><span class="badge-text badge-text-small danger">Failed</span></span>
                                    </td>
                                    <td>$107.55</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:5%;">
                                        <div class="styled-checkbox mt-2">
                                            <input type="checkbox" name="cb4" id="cb4">
                                            <label for="cb4"></label>
                                        </div>
                                    </td>
                                    <td><span class="text-secondary">092-06-FR</span></td>
                                    <td>Angela Walters</td>
                                    <td>US</td>
                                    <td>08/21/2017</td>
                                    <td><span style="width:100px;"><span class="badge-text badge-text-small success">Delivered</span></span>
                                    </td>
                                    <td>$129.85</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:5%;">
                                        <div class="styled-checkbox mt-2">
                                            <input type="checkbox" name="cb5" id="cb5">
                                            <label for="cb5"></label>
                                        </div>
                                    </td>
                                    <td><span class="text-secondary">021-09-US</span></td>
                                    <td>Ryan Hanson</td>
                                    <td>ES</td>
                                    <td>07/21/2017</td>
                                    <td><span style="width:100px;"><span
                                                class="badge-text badge-text-small info">Paid</span></span></td>
                                    <td>$199.95</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:5%;">
                                        <div class="styled-checkbox mt-2">
                                            <input type="checkbox" name="cb6" id="cb6">
                                            <label for="cb6"></label>
                                        </div>
                                    </td>
                                    <td><span class="text-secondary">054-01-FR</span></td>
                                    <td>Evelyn Black</td>
                                    <td>FR</td>
                                    <td>10/21/2017</td>
                                    <td><span style="width:100px;"><span
                                                class="badge-text badge-text-small info">Paid</span></span></td>
                                    <td>$139.45</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:5%;">
                                        <div class="styled-checkbox mt-2">
                                            <input type="checkbox" name="cb7" id="cb7">
                                            <label for="cb7"></label>
                                        </div>
                                    </td>
                                    <td><span class="text-secondary">021-12-US</span></td>
                                    <td>James Morris</td>
                                    <td>EN</td>
                                    <td>10/21/2017</td>
                                    <td><span style="width:100px;"><span
                                                class="badge-text badge-text-small info">Paid</span></span></td>
                                    <td>$189.00</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:5%;">
                                        <div class="styled-checkbox mt-2">
                                            <input type="checkbox" name="cb8" id="cb8">
                                            <label for="cb8"></label>
                                        </div>
                                    </td>
                                    <td><span class="text-secondary">189-01-RU</span></td>
                                    <td>Valentin H.</td>
                                    <td>AU</td>
                                    <td>08/21/2017</td>
                                    <td><span style="width:100px;"><span class="badge-text badge-text-small danger">Failed</span></span>
                                    </td>
                                    <td>$107.55</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:5%;">
                                        <div class="styled-checkbox mt-2">
                                            <input type="checkbox" name="cb9" id="cb9">
                                            <label for="cb9"></label>
                                        </div>
                                    </td>
                                    <td><span class="text-secondary">092-06-FR</span></td>
                                    <td>Beverly Matthews</td>
                                    <td>RU</td>
                                    <td>08/21/2017</td>
                                    <td><span style="width:100px;"><span
                                                class="badge-text badge-text-small info">Paid</span></span></td>
                                    <td>$129.85</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:5%;">
                                        <div class="styled-checkbox mt-2">
                                            <input type="checkbox" name="cb10" id="cb10">
                                            <label for="cb10"></label>
                                        </div>
                                    </td>
                                    <td><span class="text-secondary">021-09-US</span></td>
                                    <td>Jeffrey Arnold</td>
                                    <td>US</td>
                                    <td>07/21/2017</td>
                                    <td><span style="width:100px;"><span
                                                class="badge-text badge-text-small info">Paid</span></span></td>
                                    <td>$199.95</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End Widget Body -->
                    <!-- Begin Widget Footer -->
                    <div class="widget-footer d-flex align-items-center">
                        <div class="mr-auto p-2">
                            <span class="display-items">Showing 1-30 / 150 Results</span>
                        </div>
                        <div class="p-2">
                            <nav aria-label="...">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled">
                                        <span class="page-link"><i class="ion-chevron-left"></i></span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active">
                                        <span class="page-link">2<span class="sr-only">(current)</span></span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="ion-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- End Widget Footer -->
                </div>
                <!-- End Widget 07 -->
            </div>
        </div>
        <!-- End Row -->

        <!-- Begin Row -->
        <div class="row flex-row">
            <!-- Begin Widget 18 -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="widget widget-18 has-shadow">
                    <!-- Begin Widget Header -->
                    <div class="widget-header bordered d-flex align-items-center">
                        <h2>Messages Box</h2>
                        <div class="widget-options">
                            <div class="dropdown">
                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        class="dropdown-toggle">
                                    <i class="la la-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="app-chat.html" class="dropdown-item">
                                        <i class="la la-comments"></i>New Message
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="la la-bell-slash"></i>Disable Alerts
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="la la-edit"></i>Edit Widget
                                    </a>
                                    <a href="#" class="dropdown-item faq">
                                        <i class="la la-question-circle"></i>FAQ
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget Header -->
                    <div class="widget-body">
                        <div class="input-group">
                                            <span class="input-group-addon pr-0 pl-0">
                                                <a class="btn" href="#">
                                                    <i class="la la-search la-2x"></i>
                                                </a>
                                            </span>
                            <input type="text" class="form-control no-ppading-right no-padding-left"
                                   placeholder="Search">
                        </div>
                        <div class="new-message">
                            <div class="media">
                                <div class="media-left align-self-center mr-3">
                                    <img src="assets/img/avatar/avatar-04.jpg" alt="..."
                                         class="img-fluid rounded-circle" style="width: 50px;">
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="new-message-sender">Nathan Hunter</div>
                                    <div class="new-message-time">New message about 2 minutes ago</div>
                                </div>
                                <div class="media-right align-self-center">
                                    <div class="actions">
                                        <a href="app-chat.html"><i class="la la-reply reply"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-group w-100 mt-5">
                            <li class="list-group-item">
                                <div class="other-message">
                                    <div class="media">
                                        <div class="media-left align-self-center mr-3">
                                            <img src="assets/img/avatar/avatar-02.jpg" alt="..."
                                                 class="img-fluid rounded-circle" style="width: 50px;">
                                        </div>
                                        <div class="media-body align-self-center">
                                            <div class="other-message-sender">Brandon Smith</div>
                                            <div class="other-message-time">Are you serious? - 3 min ago</div>
                                        </div>
                                        <div class="media-right align-self-center">
                                            <div class="actions">
                                                <a href="app-chat.html"><i class="la la-reply reply"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="other-message">
                                    <div class="media">
                                        <div class="media-left align-self-center mr-3">
                                            <img src="assets/img/avatar/avatar-03.jpg" alt="..."
                                                 class="img-fluid rounded-circle" style="width: 50px;">
                                        </div>
                                        <div class="media-body align-self-center">
                                            <div class="other-message-sender">Louis Henry</div>
                                            <div class="other-message-time">Bonne idée, coucou à ... - 10 min ago</div>
                                        </div>
                                        <div class="media-right align-self-center">
                                            <div class="actions">
                                                <a href="app-chat.html"><i class="la la-reply reply"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="other-message">
                                    <div class="media">
                                        <div class="media-left align-self-center mr-3">
                                            <img src="assets/img/avatar/avatar-05.jpg" alt="..."
                                                 class="img-fluid rounded-circle" style="width: 50px;">
                                        </div>
                                        <div class="media-body align-self-center">
                                            <div class="other-message-sender">Megan Duncan</div>
                                            <div class="other-message-time">See you later! - 20 min ago</div>
                                        </div>
                                        <div class="media-right align-self-center">
                                            <div class="actions">
                                                <a href="app-chat.html"><i class="la la-reply reply"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Widget 18 -->
            <!-- Begin Widget 19 -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="widget widget-19 has-shadow">
                    <!-- Begin Widget Header -->
                    <div class="widget-header bordered d-flex align-items-center">
                        <h2>New Meeting</h2>
                        <div class="widget-options">
                            <div class="dropdown">
                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        class="dropdown-toggle">
                                    <i class="la la-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">
                                        <i class="la la-bell-slash"></i>Disable Alerts
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="la la-edit"></i>Edit Widget
                                    </a>
                                    <a href="#" class="dropdown-item faq">
                                        <i class="la la-question-circle"></i>FAQ
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget Header -->
                    <div class="widget-body p-0">
                        <div class="form-group row mt-3 mr-0 mb-3 ml-0">
                            <div class="col-xl-12">
                                <label class="form-control-label">Meeting Name</label>
                                <input type="text" value="My Meeting" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mr-0 mb-3 ml-0">
                            <div class="col-xl-8 mb-3">
                                <label class="form-control-label">Date</label>
                                <select name="meeting-date" class="custom-select form-control">
                                    <option value="">Select Date</option>
                                    <option value="01">Sun 1 April</option>
                                    <option value="02">Mon 2 April</option>
                                    <option value="03">Tue 3 April</option>
                                    <option value="04">Wed 4 April</option>
                                    <option value="05">Thu 5 April</option>
                                    <option value="07">Fri 6 April</option>
                                    <option value="08">Sat 7 April</option>
                                    <option value="09">Sun 8 April</option>
                                    <option value="10">Mon 9 April</option>
                                    <option value="11">Tue 10 April</option>
                                    <option value="12">Wed 11 April</option>
                                    <option value="05">Thu 12 April</option>
                                    <option value="07">Fri 13 April</option>
                                    <option value="08">Sat 14 April</option>
                                    <option value="09">Sun 15 April</option>
                                    <option value="10">Mon 16 April</option>
                                    <option value="11">Tue 17 April</option>
                                    <option value="12">Wed 18 April</option>
                                    <option value="05">Thu 19 April</option>
                                    <option value="07">Fri 20 April</option>
                                    <option value="08">Sat 21 April</option>
                                    <option value="09">Sun 22 April</option>
                                    <option value="10">Mon 23 April</option>
                                    <option value="11">Tue 24 April</option>
                                    <option value="04">Wed 25 April</option>
                                    <option value="05">Thu 26 April</option>
                                    <option value="07">Fri 27 April</option>
                                    <option value="08">Sat 28 April</option>
                                    <option value="09">Sun 29 April</option>
                                    <option value="10">Mon 30 April</option>
                                </select>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-control-label">Hour</label>
                                <select name="meeting-hour" class="custom-select form-control">
                                    <option value="">Select Hour</option>
                                    <option value="01">07:00 am</option>
                                    <option value="02">08:00 am</option>
                                    <option value="03">09:00 am</option>
                                    <option value="04">10:00 am</option>
                                    <option value="05">11:00 am</option>
                                    <option value="07">12:00 am</option>
                                    <option value="08">01:00 pm</option>
                                    <option value="09">02:00 pm</option>
                                    <option value="10">03:00 pm</option>
                                    <option value="08">04:00 pm</option>
                                    <option value="09">05:00 pm</option>
                                    <option value="10">06:00 pm</option>
                                    <option value="08">07:00 pm</option>
                                    <option value="09">08:00 pm</option>
                                    <option value="10">09:00 pm</option>
                                    <option value="08">10:00 pm</option>
                                    <option value="09">11:00 pm</option>
                                    <option value="10">12:00 pm</option>
                                </select>
                            </div>
                        </div>
                        <ul class="list-group w-100 widget-scroll" style="max-height:250px;">
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left align-self-center mr-3">
                                        <img src="assets/img/avatar/avatar-02.jpg" alt="..."
                                             class="img-fluid rounded-circle" style="width: 35px;">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="people-name">Brandon Smith</div>
                                    </div>
                                    <div class="media-right align-self-center">
                                        <div class="checkbox check"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left align-self-center mr-3">
                                        <img src="assets/img/avatar/avatar-03.jpg" alt="..."
                                             class="img-fluid rounded-circle" style="width: 35px;">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="people-name">Louis Henry</div>
                                    </div>
                                    <div class="media-right align-self-center">
                                        <div class="checkbox check"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left align-self-center mr-3">
                                        <img src="assets/img/avatar/avatar-04.jpg" alt="..."
                                             class="img-fluid rounded-circle" style="width: 35px;">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="people-name">Nathan Hunter</div>
                                    </div>
                                    <div class="media-right align-self-center">
                                        <div class="checkbox check"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left align-self-center mr-3">
                                        <img src="assets/img/avatar/avatar-05.jpg" alt="..."
                                             class="img-fluid rounded-circle" style="width: 35px;">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="people-name">Megan Duncan</div>
                                    </div>
                                    <div class="media-right align-self-center">
                                        <div class="checkbox check"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left align-self-center mr-3">
                                        <img src="assets/img/avatar/avatar-06.jpg" alt="..."
                                             class="img-fluid rounded-circle" style="width: 35px;">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="people-name">Beverly Oliver</div>
                                    </div>
                                    <div class="media-right align-self-center">
                                        <div class="checkbox check"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left align-self-center mr-3">
                                        <img src="assets/img/avatar/avatar-07.jpg" alt="..."
                                             class="img-fluid rounded-circle" style="width: 35px;">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="people-name">Lisa Garett</div>
                                    </div>
                                    <div class="media-right align-self-center">
                                        <div class="checkbox check"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left align-self-center mr-3">
                                        <img src="assets/img/avatar/avatar-08.jpg" alt="..."
                                             class="img-fluid rounded-circle" style="width: 35px;">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="people-name">Peter Collins</div>
                                    </div>
                                    <div class="media-right align-self-center">
                                        <div class="checkbox check"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left align-self-center mr-3">
                                        <img src="assets/img/avatar/avatar-09.jpg" alt="..."
                                             class="img-fluid rounded-circle" style="width: 35px;">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="people-name">Michael Bradley</div>
                                    </div>
                                    <div class="media-right align-self-center">
                                        <div class="checkbox check"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="text-center mt-4 mb-3">
                            <button type="button" class="btn btn-gradient-01" data-toggle="modal"
                                    data-target="#delay-modal">
                                Create Meeting
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Widget 19 -->
            <!-- Begin Widget 20 -->
            <div class="col-xl-4">
                <div class="widget widget-20 has-shadow">
                    <!-- Begin Widget Header -->
                    <div class="widget-header bordered d-flex align-items-center">
                        <h2>Files</h2>
                        <div class="widget-options">
                            <div class="dropdown">
                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        class="dropdown-toggle">
                                    <i class="la la-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">
                                        <i class="la la-edit"></i>Manage Files
                                    </a>
                                    <a href="#" class="dropdown-item faq">
                                        <i class="la la-question-circle"></i>FAQ
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget Header -->
                    <div class="widget-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="widget20 owl-carousel">
                                    <div class="item">
                                        <div class="card-image">
                                            <img src="assets/img/background/03.jpg" alt="...">
                                            <div class="card-overlay card-overlay-01">
                                                <div class="card-overlay-content">
                                                    <div class="category">
                                                        <a href="#">Category</a>
                                                    </div>
                                                    <a href="#0" class="card-title">Title Collection</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card-image">
                                            <img src="assets/img/background/04.jpg" alt="...">
                                            <div class="card-overlay card-overlay-02">
                                                <div class="card-overlay-content">
                                                    <div class="category">
                                                        <a href="#">Category</a>
                                                    </div>
                                                    <a href="#0" class="card-title">Title Collection</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card-image">
                                            <img src="assets/img/background/05.jpg" alt="...">
                                            <div class="card-overlay card-overlay-01">
                                                <div class="card-overlay-content">
                                                    <div class="category">
                                                        <a href="#">Category</a>
                                                    </div>
                                                    <a href="#0" class="card-title">Title Collection</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card-image">
                                            <img src="assets/img/background/02.jpg" alt="...">
                                            <div class="card-overlay card-overlay-02">
                                                <div class="card-overlay-content">
                                                    <div class="category">
                                                        <a href="#">Category</a>
                                                    </div>
                                                    <a href="#0" class="card-title">Title Collection</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5 mr-0 ml-0">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center mb-4">
                                <div class="media w-100">
                                    <div class="align-self-center mr-2">
                                        <i class="la la-file-video-o"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="files-title"><a href="#">My Video</a></div>
                                        <div class="files-number">84 Files</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center mb-4">
                                <div class="media w-100">
                                    <div class="align-self-center mr-2">
                                        <i class="la la-file-audio-o"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="files-title"><a href="#">My Songs</a></div>
                                        <div class="files-number">786 Files</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center mb-4">
                                <div class="media w-100">
                                    <div class="align-self-center mr-2">
                                        <i class="la la-file-picture-o"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="files-title"><a href="#">Photos</a></div>
                                        <div class="files-number">189 Files</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center mb-4">
                                <div class="media w-100">
                                    <div class="align-self-center mr-2">
                                        <i class="la la-file-zip-o"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="files-title"><a href="#">Template</a></div>
                                        <div class="files-number">36 Files</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center mb-4">
                                <div class="media w-100">
                                    <div class="align-self-center mr-2">
                                        <i class="la la-file-pdf-o"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="files-title"><a href="#">Pdf</a></div>
                                        <div class="files-number">19 Files</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center mb-4">
                                <div class="media w-100">
                                    <div class="align-self-center mr-2">
                                        <i class="la la-file-powerpoint-o"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="files-title"><a href="#">Presentation</a></div>
                                        <div class="files-number">263 Files</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Widget 20 -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Container -->

@include('admin.asset.footer')
