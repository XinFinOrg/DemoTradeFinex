 <header>
    <!-- CSS STYLES -->
    <link rel="stylesheet" href="<?=base_url();?>assets/bond-assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?=base_url();?>assets/bond-assets/css/main.css" />
    <link rel="stylesheet" href="<?=base_url();?>assets/bond-assets/css/auto-hide.css" />
    <!-- <link rel="stylesheet" href="assets/bond-assets/css/main.bundle.css"> -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/bond-assets/css/datatables/dataTables.bootstrap.1.10.15.min.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/bond-assets/css/datatables/fixedHeader.bootstrap.3.1.2.min.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/bond-assets/css/datatables/responsive.bootstrap.2.1.1.min.css');?>" />
     
    
    <!-- ICONS STYLES -->
    <link rel="stylesheet" href="assets/bond-assets/css/icons/dripicons.min.css">

</header>   

<!-- START APP WRAPPER -->
    
        <!-- START TOP HEADER WRAPPER -->
        <div class="header-wrapper">
            
			<div class="header-top">
                <!-- START MOBILE MENU TRIGGER -->
                <ul class="mobile-only navbar-nav nav-left">
                    <li class="nav-item">
                        <a href="javascript:void(0)" data-toggle-state="aside-left-open">
                            <i class="icon dripicons-align-justify"></i>
                        </a>
                    </li>
                </ul>
                <!-- END MOBILE MENU TRIGGER -->
            </div>
            
            <!-- START HEADER BOTTOM -->
            <div class="header-bottom">
                <div class="container">
                    <!-- START MAIN MENU -->
                    <nav class="main-menu">
                        <ul class="nav metismenu">
                            <li class="sidebar-header mobile-only mobile-nav-heading"><span>&nbsp;</span></li>
                            <li><a class="active" id="uploadinvoiceHeader" ><i class="icon dripicons-document-edit"></i><span class="hide-menu">1. Upload Document</span></a></li>
                            <li><a id="invoicedeployHeader"><i class="icon dripicons-document-new"></i><span class="hide-menu">2. Review Contract</span></a></li>
                            <li><a id="invoiceCompleteHeader"><i class="icon  dripicons-document-new"></i><span class="hide-menu">3. Get Details</span></a></li>
                            <!-- <li><a href="issue-quote.html"><i class="icon dripicons-export"></i><span class="hide-menu">Issue Quote</span></a></li>
                            <li><a href="create-organization.html"><i class="icon dripicons-user-group"></i><span class="hide-menu">Create Organization</span></a></li>
                            <li><a href="portfolio.html"><i class="icon dripicons-folder-open"></i><span class="hide-menu">Portfolio</span></a></li>
                            <li><a href="syndicate.html"><i class="icon dripicons-meter"></i><span class="hide-menu">Syndicate</span></a></li> -->
                        </ul>
                    </nav>
                    <!-- END MAIN MENU -->
                </div>
            </div>
            <!-- END HEADER BOTTOM -->
        </div>
        <!-- END TOP HEADER WRAPPER -->
    
 
<div class="content-wrapper">
            <div class="content container">
                <!--START PAGE HEADER -->
                <header class="page-header">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto">
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </header>
                <!--END PAGE HEADER -->

                <!--START PAGE CONTENT -->
                <section class="page-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                    <div class="card-body">
                                    	<div class="table-responsive" data-pattern="priority-columns">
                                        <table id="example-1" class="table dt-responsive display">
                                            <thead>
                                                <tr>
                                                    <th>REQUEST NO</th>
                                                    <th>BUYER NAME</th>
                                                    <th>PO TITLE</th>
                                                    <th class="text-right">AMOUNT</th>
                                                    <th class="text-center">DUE DATE</th>
                                                    <th class="text-center">BLOCKCHAIN UPLOAD</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>1001</td>
                                                    <td>
                                                        <div id="buyer-logo">
                                                            <i><img src="../assets/bond-assets/img/crossref.jpg" alt="" class="img-circle circle-border"></i>
                                                            <span>Amy's Bird Sanctuary</span>
                                                        </div>
                                                    </td>
                                                    <td>Weekly Gardening Service</td>
                                                    <td class="text-right"><i class="fa fa-dollar" aria-hidden="true"></i> 108</td>
                                                    <td class="text-center">2019-04-24</td>
                                                    <td class="text-center"><button id="quotes" class="btnn btnn-primary btnn-rounded">Upload</button></td>
                                                </tr>
                                                <tr>
                                                    <td>1002</td>
                                                    <td>
                                                        <div id="buyer-logo">
                                                            <i><img src="../assets/bond-assets/img/crossref-india-pvt-ltd.jpg" alt="" class="img-circle circle-border"></i>
                                                            <span>Bill's Windsurf Shop</span>
                                                        </div>
                                                    </td>
                                                    <td>Weekly Gardening Service</td>
                                                    <td class="text-right"><i class="fa fa-dollar" aria-hidden="true"></i> 107</td>
                                                    <td class="text-center">2019-04-18</td>
                                                    <td class="text-center"><button id="quotes" class="btnn btnn-primary btnn-rounded">Upload</button></td>
                                                </tr>
                                                <tr>
                                                    <td>1003</td>
                                                    <td>
                                                        <div id="buyer-logo">
                                                            <i><img src="../assets/bond-assets/img/crossref-india-pvt-ltd.jpg" alt="" class="img-circle circle-border"></i>
                                                            <span>Cool Cars</span>
                                                        </div>
                                                    </td>
                                                    <td>Sprinkler Heads</td>
                                                    <td class="text-right"><i class="fa fa-dollar" aria-hidden="true"></i> 2369.52</td>
                                                    <td class="text-center">2019-04-10</td>
                                                    <td class="text-center"><button id="quotes" class="btnn btnn-primary btnn-rounded">Upload</button></td>
                                                </tr>
                                                <tr>
                                                    <td>1004</td>
                                                    <td>
                                                        <div id="buyer-logo">
                                                            <i><img src="../assets/bond-assets/img/crossref.jpg" alt="" class="img-circle circle-border"></i>
                                                            <span>John Melton</span>
                                                        </div>
                                                    </td>
                                                    <td>Custom Design</td>
                                                    <td class="text-right"><i class="fa fa-dollar" aria-hidden="true"></i> 750</td>
                                                    <td class="text-center">2019-04-05</td>
                                                    <td class="text-center"><button id="quotes" class="btnn btnn-primary btnn-rounded">Upload</button></td>
                                                </tr>
                                                <tr>
                                                    <td>1005</td>
                                                    <td>
                                                        <div id="buyer-logo">
                                                            <i><img src="../assets/bond-assets/img/crossref-india-pvt-ltd.jpg" alt="" class="img-circle circle-border"></i>
                                                            <span>55 Twin Lane</span>
                                                        </div>
                                                    </td>
                                                    <td>Weekly Gardening Service</td>
                                                    <td class="text-right"><i class="fa fa-dollar" aria-hidden="true"></i> 86.4</td>
                                                    <td class="text-center">2019-03-25</td>
                                                    <td class="text-center"><button id="quotes" class="btnn btnn-primary btnn-rounded">Upload</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>                                        
                                    </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--END PAGE CONTENT -->
            </div>

        </div>

        <!--JS SCRIPTS-->
        <script src="../assets/bond-assets/js/modernizr.custom.js"></script>
        <script src="../assets/bond-assets/js/jquery.min.js"></script>
        <script src="../assets/bond-assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/bond-assets/js/storage.js"></script>
        <script src="../assets/bond-assets/js/menu.js"></script>
        <script src="../assets/bond-assets/js/jquery.mCustomScrollbar.js"></script>

        <!--MAIN JS-->
        <script src="../assets/bond-assets/js/main.js"></script>