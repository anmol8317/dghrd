<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
        <div class="multinav">
            <div class="multinav-scroll" style="height: 97%;">
                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="treeview">
                        <a href="{{ url('dashboard') }}">
                            <i data-feather="home"></i>
                            <span>Dashboard</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>

                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="file-plus"></i>
                            <span>Home</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('slider') }}"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Slider</a>
                            </li>
                            <li><a href="{{ url('notification') }}"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Notification
                                </a></li>
                            <li><a href="{{ url('mini-slider') }}"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Mini Slider</a>
                            </li>
                            <li><a href="{{ url('gallery') }}"><i class="icon-Commit"><span
                                class="path1"></span><span class="path2"></span></i>
                            Gallery
                         </a></li>
                            {{-- <li><a href="mailbox.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Mailbox</a>
                            </li>
                            <li><a href="extra_profile.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Profile</a>
                            </li>
                            <li><a href="reports.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Reports</a>
                            </li>
                            <li><a href="projects.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Projects</a>
                            </li>
                            <li><a href="accounting.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Project
                                    Budget</a></li>
                            <li><a href="file_manager.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>File
                                    Manager</a></li> --}}
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="headphones"></i>
                            <span>Support</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="extra_app_ticket.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Support
                                    Ticket</a></li>
                            <li><a href="contact_app_chat.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Chat</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="database"></i>
                            <span>HRM 1</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="treeview">
                            <li><a href="{{ url('add-sparrow') }}"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Sparrow
                                </a></li>
                            <li><a href="{{ url('add-apar') }}"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Apar(Missing APARs)
                                </a></li>
                            <li><a href="{{ url('add-ipr') }}"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>IPR
                                </a></li>
                            <li class="treeview">
                                <a href="">
                                    <i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Recruitment Rules
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ url('add-group-a') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>Group A</a>
                                    </li>
                                    <li><a href="{{ url('add-group-b') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>Group B</a>
                                    </li>
                                    <li><a href="{{ url('add-group-c') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>Group C</a>
                                    </li>
                                    <li><a href="{{ url('add-canteen-staff') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>Canteen
                                            Staff</a></li>
                                    <li><a href="{{ url('add-cbn') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>Central Bureau
                                            Of Narcotics(CBN) </a></li>
                                    <li><a href="{{ url('add-crcl') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>CRCL </a></li>
                                    <li><a href="{{ url('add-dgpm') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>DGPM </a></li>
                                    <li><a href="{{ url('add-directorate-of-logistics') }}"><i
                                                class="icon-Commit"><span class="path1"></span><span
                                                    class="path2"></span></i>DIRECTORATE OF LOGISTICS </a></li>
                                    <li><a href="{{ url('add-dppr') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>DPPR </a>
                                    </li>
                                    <li><a href="{{ url('add-dri') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>DRI </a>
                                    </li>
                                    <li><a href="{{ url('add-rrs-of-directorates') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>RRs of
                                            DIRECTORATES </a>
                                    </li>
                                    <li><a href="{{ url('add-systum-data-management') }}"><i
                                                class="icon-Commit"><span class="path1"></span><span
                                                    class="path2"></span></i>SYSTEMS & DATA MANAGEMENT</a>
                                    </li>
                                    <li><a href="{{ url('add-telecommunication-wing') }}"><i
                                                class="icon-Commit"><span class="path1"></span><span
                                                    class="path2"></span></i>TELECOMMUNICATION WING, DIRECTORATE OF
                                            LOGISTICS</a>
                                    </li>
                                    {{-- <li><a href="map_vector.html"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>Vector
                                            Map</a></li> --}}
                                </ul>
                            </li>
                            <li><a href="{{ url('add-seniority-list') }}"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Seniority List
                                </a></li>
                            <li><a href="{{ url('add-dpc') }}"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>DPC
                                </a></li>
                            <li><a href="{{ url('add-empanelment-deputation') }}"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Empanelment &
                                    Deputation
                                </a></li>
                            <li><a href="{{ url('add-cadre-restructuring-2018') }}"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Cadre Restructuring
                                    2018
                                </a></li>
                            <li><a href="{{ url('add-sparrow-cbic') }}"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>SPARROW-CBIC
                                </a></li>
                            <li><a href="{{ url('add-officer-details') }}"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Officer Details
                                </a></li>
                            <li><a href="{{ url('add-various-communication') }}"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Various
                                    Communication with Field Formations
                         </a></li>
                    </li>
                </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i data-feather="database"></i>
                        <span>HRM 2</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('add-posting-transfer') }}"><i class="icon-Commit"><span
                            class="path1"></span><span class="path2"></span></i>
                            Postings & Transfers
                     </a></li>
                     <li><a href="{{ url('add-e-diposition-list') }}"><i class="icon-Commit"><span
                        class="path1"></span><span class="path2"></span></i>
                        e-Disposition List of Group A IRS (C&IT) Officers
                     </a></li>
                     <li><a href="{{ url('add-sanctioned-working') }}"><i class="icon-Commit"><span
                        class="path1"></span><span class="path2"></span></i>
                        Sanctioned and Working Strength of Group A IRS (C&IT) Officers
                     </a></li>
                     <li><a href="{{ url('add-hop') }}"><i class="icon-Commit"><span
                        class="path1"></span><span class="path2"></span></i>
                        Hop
                     </a></li>

                     <li><a href="{{ url('add-empolyee_code') }}"><i class="icon-Commit"><span
                        class="path1"></span><span class="path2"></span></i>
                        Employee Codes
                     </a></li>
                     <li><a href="{{ url('add-various_communication') }}"><i class="icon-Commit"><span
                        class="path1"></span><span class="path2"></span></i>
                        Various Communication With Field Formatations
                     </a></li>
                     <li><a href="{{ url('add-tender_notice') }}"><i class="icon-Commit"><span
                        class="path1"></span><span class="path2"></span></i>
                        Tender Notice
                     </a></li>
                     <li><a href="{{ url('add-module_update') }}"><i class="icon-Commit"><span
                        class="path1"></span><span class="path2"></span></i>
                        Module Updates
                     </a></li>
                     <li><a href="{{ url('add-irs') }}"><i class="icon-Commit"><span
                        class="path1"></span><span class="path2"></span></i>
                        Group A IRS (C&IT) Officers on Deputation
                     </a></li>
                     <li><a href="{{ url('add-e_vacency') }}"><i class="icon-Commit"><span
                        class="path1"></span><span class="path2"></span></i>
                        e-Vacancy Module Updates
                     </a></li>
                     <li><a href="{{ url('add-dpc') }}"><i class="icon-Commit"><span
                        class="path1"></span><span class="path2"></span></i>
                        DPC Module Updates
                     </a></li>

                        <li class="treeview">
                            <a href="#">
                                <i class="icon-Commit"><span class="path1"></span><span
                                        class="path2"></span></i>Ecommerce
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="ecommerce_products.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Products</a>
                                </li>
                                <li><a href="ecommerce_cart.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Products
                                        Cart</a></li>
                                <li><a href="ecommerce_products_edit.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Products
                                        Edit</a></li>
                                <li><a href="ecommerce_details.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Product
                                        Details</a></li>
                                <li><a href="ecommerce_orders.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Product
                                        Orders</a></li>
                                <li><a href="ecommerce_checkout.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Products
                                        Checkout</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="icon-Commit"><span class="path1"></span><span
                                        class="path2"></span></i>Sample Pages
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="invoice.html"><i class="icon-Commit"><span class="path1"></span><span
                                                class="path2"></span></i>Invoice</a>
                                </li>
                                <li><a href="invoice_2.html"><i class="icon-Commit"><span class="path1"></span><span
                                                class="path2"></span></i>Invoice
                                        2</a></li>
                                <li><a href="invoicelist.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Invoice
                                        List</a></li>
                                <li><a href="invoicelist_2.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Invoice List
                                        2</a></li>
                                <li><a href="contact_userlist.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Userlist</a>
                                </li>
                                <li><a href="sample_faq.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>FAQs</a>
                                </li>
                                <li><a href="sample_blank.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Blank</a>
                                </li>
                                <li><a href="sample_coming_soon.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Coming
                                        Soon</a></li>
                                <li><a href="sample_custom_scroll.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Custom
                                        Scrolls</a></li>
                                <li><a href="sample_gallery.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Gallery</a>
                                </li>
                                <li><a href="sample_lightbox.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Lightbox
                                        Popup</a></li>
                                <li><a href="sample_pricing.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Pricing</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i data-feather="database"></i>
                        <span>Infrastructure</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('add-infra_officer-details') }}"><i class="icon-Commit"><span
                            class="path1"></span><span class="path2"></span></i>
                            Officer Details
                     </a></li>
                     <li><a href="{{ url('add-instructions-details') }}"><i class="icon-Commit"><span
                        class="path1"></span><span class="path2"></span></i>
                        Instructions
                 </a></li>
                 <li><a href="{{ url('add-fast_track-details') }}"><i class="icon-Commit"><span
                    class="path1"></span><span class="path2"></span></i>
                    FastTracks
             </a></li>
             <li><a href="{{ url('add-ppt-details') }}"><i class="icon-Commit"><span
                class="path1"></span><span class="path2"></span></i>
                Infrastructure Ppt
         </a></li>
         <li><a href="{{ url('add-manual-details') }}"><i class="icon-Commit"><span
            class="path1"></span><span class="path2"></span></i>
            Infrastructure Manual
     </a></li>
     <li><a href="{{ url('add-asset_register-details') }}"><i class="icon-Commit"><span
        class="path1"></span><span class="path2"></span></i>
        Asset Registers
 </a></li>
 <li><a href="{{ url('add-land_assets-details') }}"><i class="icon-Commit"><span
    class="path1"></span><span class="path2"></span></i>
    Land Assets
</a></li>
<li><a href="{{ url('add-construction-details') }}"><i class="icon-Commit"><span
    class="path1"></span><span class="path2"></span></i>
    Construction Projects
</a></li>
<li><a href="{{ url('add-repair_maintenance-details') }}"><i class="icon-Commit"><span
    class="path1"></span><span class="path2"></span></i>
    Repair & Maintenance
</a></li>
<li><a href="{{ url('add-ready_built-details') }}"><i class="icon-Commit"><span
    class="path1"></span><span class="path2"></span></i>
    Ready Built Accomodation
</a></li>
<li><a href="{{ url('add-hired_office-details') }}"><i class="icon-Commit"><span
    class="path1"></span><span class="path2"></span></i>
    Hired Office Building
</a></li>
<li><a href="{{ url('add-various_coomunication-details') }}"><i class="icon-Commit"><span
    class="path1"></span><span class="path2"></span></i>
    Various Communication and Form Formations
</a></li>



                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i data-feather="database"></i>
                        <span>Welfare</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('add-welfare_officer-details') }}"><i class="icon-Commit"><span
                            class="path1"></span><span class="path2"></span></i>
                            Officer Details
                     </a></li>
                     <li><a href="{{ url('add-compendium-details') }}"><i class="icon-Commit"><span
                        class="path1"></span><span class="path2"></span></i>
                        Compendium
                 </a></li>
                 <li><a href="{{ url('add-welfare_sechemes-details') }}"><i class="icon-Commit"><span
                    class="path1"></span><span class="path2"></span></i>
                    Welfare Schemes
             </a></li>

             <li><a href="{{ url('add-action_plan-details') }}"><i class="icon-Commit"><span
                class="path1"></span><span class="path2"></span></i>
                Action Plans
         </a></li>
         <li><a href="{{ url('add-schemes-details') }}"><i class="icon-Commit"><span
            class="path1"></span><span class="path2"></span></i>
            Schemes
     </a></li>
     <li><a href="{{ url('add-welfare_ppt-details') }}"><i class="icon-Commit"><span
        class="path1"></span><span class="path2"></span></i>
        Welfare PPT
 </a></li>
</li>
<li><a href="{{ url('add-welfare_manual-details') }}"><i class="icon-Commit"><span
   class="path1"></span><span class="path2"></span></i>
   Welfare Manual
</a></li>
<li><a href="{{ url('add-comman_facilties-details') }}"><i class="icon-Commit"><span
    class="path1"></span><span class="path2"></span></i>
    Comman Facilities
 </a></li>
 <li><a href="{{ url('add-hotel_tieup-details') }}"><i class="icon-Commit"><span
    class="path1"></span><span class="path2"></span></i>
    List of Hotel Tie-ups
 </a></li>
 <li><a href="{{ url('add-hotel_draft-details') }}"><i class="icon-Commit"><span
    class="path1"></span><span class="path2"></span></i>
    Draft List of Hotels
 </a></li>
 <li><a href="{{ url('add-guest_house-details') }}"><i class="icon-Commit"><span
    class="path1"></span><span class="path2"></span></i>
    Departmental Guest Houses
 </a></li>
 <li><a href="{{ url('add-covid-details') }}"><i class="icon-Commit"><span
    class="path1"></span><span class="path2"></span></i>
    Covid-19
 </a></li>
 <li><a href="{{ url('add-praposels-details') }}"><i class="icon-Commit"><span
    class="path1"></span><span class="path2"></span></i>
    Welfare Praposals
 </a></li>
 <li><a href="{{ url('add-welfare_communication-details') }}"><i class="icon-Commit"><span
    class="path1"></span><span class="path2"></span></i>
    Various Communication and Form Formations
 </a></li>


                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i data-feather="database"></i>
                        <span>EMC</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('add-emc_officer-details') }}"><i class="icon-Commit"><span
                            class="path1"></span><span class="path2"></span></i>
                            Officer Details
                     </a></li>
                     <li><a href="{{ url('add-fund_allocation-details') }}"><i class="icon-Commit"><span
                            class="path1"></span><span class="path2"></span></i>
                            Fund allocation and utilisation
                     </a></li>
                      <li><a href="{{ url('add-emc_ppt-details') }}"><i class="icon-Commit"><span
                            class="path1"></span><span class="path2"></span></i>
                            EMC PPT
                     </a></li>
                     <li><a href="{{ url('add-emc_manual-details') }}"><i class="icon-Commit"><span
                            class="path1"></span><span class="path2"></span></i>
                            EMC Manual
                     </a></li>

                     <li><a href="{{ url('add-budgetary_authority-details') }}"><i class="icon-Commit"><span
                        class="path1"></span><span class="path2"></span></i>
                        Budgetary Authorities,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HODs, PAOs, DDOs
                 </a></li>
                 <li><a href="{{ url('add-gem_eprocurements-details') }}"><i class="icon-Commit"><span
                    class="path1"></span><span class="path2"></span></i>
                    GeM/E Procurement
             </a></li>
             <li><a href="{{ url('add-vehicle_policy-details') }}"><i class="icon-Commit"><span
                class="path1"></span><span class="path2"></span></i>
                Vehicle Policy
         </a></li>
         <li><a href="{{ url('add-crb-details') }}"><i class="icon-Commit"><span
            class="path1"></span><span class="path2"></span></i>
            CRB
     </a></li>
     <li><a href="{{ url('add-emc_communication-details') }}"><i class="icon-Commit"><span
        class="path1"></span><span class="path2"></span></i>
        Various Communication and Form Formations
     </a></li>


                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i data-feather="database"></i>
                        <span>CBIC COVID Response </span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('add-shrdhanjali-details') }}"><i class="icon-Commit"><span
                            class="path1"></span><span class="path2"></span></i>
                            Shraddhanjali
                     </a></li>
                    </ul>
                </li>

                <li class="header">Components</li>
                <li class="treeview">
                    <a href="#">
                        <i data-feather="edit"></i>
                        <span>Features</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="treeview">
                            <a href="#">
                                <i class="icon-Commit"><span class="path1"></span><span
                                        class="path2"></span></i>Card
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="box_cards.html"><i class="icon-Commit"><span class="path1"></span><span
                                                class="path2"></span></i>User
                                        Card</a></li>
                                <li><a href="box_advanced.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Advanced
                                        Card</a></li>
                                <li><a href="box_basic.html"><i class="icon-Commit"><span class="path1"></span><span
                                                class="path2"></span></i>Basic
                                        Card</a></li>
                                <li><a href="box_color.html"><i class="icon-Commit"><span class="path1"></span><span
                                                class="path2"></span></i>Card
                                        Color</a></li>
                                <li><a href="box_group.html"><i class="icon-Commit"><span class="path1"></span><span
                                                class="path2"></span></i>Card
                                        Group</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>BS
                                UI
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="ui_grid.html"><i class="icon-Commit"><span class="path1"></span><span
                                                class="path2"></span></i>Grid
                                        System</a></li>
                                <li><a href="ui_badges.html"><i class="icon-Commit"><span class="path1"></span><span
                                                class="path2"></span></i>Badges</a>
                                </li>
                                <li><a href="ui_border_utilities.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Border</a>
                                </li>
                                <li><a href="ui_buttons.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Buttons</a>
                                </li>
                                <li><a href="ui_color_utilities.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Color</a>
                                </li>
                                <li><a href="ui_dropdown.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Dropdown</a>
                                </li>
                                <li><a href="ui_dropdown_grid.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Dropdown
                                        Grid</a></li>
                                <li><a href="ui_progress_bars.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Progress
                                        Bars</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="icon-Commit"><span class="path1"></span><span
                                        class="path2"></span></i>Icons
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="icons_fontawesome.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Font
                                        Awesome</a></li>
                                <li><a href="icons_glyphicons.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Glyphicons</a>
                                </li>
                                <li><a href="icons_material.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Material
                                        Icons</a></li>
                                <li><a href="icons_themify.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Themify
                                        Icons</a></li>
                                <li><a href="icons_simpleline.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Simple Line
                                        Icons</a></li>
                                <li><a href="icons_cryptocoins.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Cryptocoins
                                        Icons</a></li>
                                <li><a href="icons_flag.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Flag
                                        Icons</a></li>
                                <li><a href="icons_weather.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Weather
                                        Icons</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="icon-Commit"><span class="path1"></span><span
                                        class="path2"></span></i>Custom UI
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="ui_ribbons.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Ribbons</a>
                                </li>
                                <li><a href="ui_sliders.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Sliders</a>
                                </li>
                                <li><a href="ui_typography.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Typography</a>
                                </li>
                                <li><a href="ui_tab.html"><i class="icon-Commit"><span class="path1"></span><span
                                                class="path2"></span></i>Tabs</a>
                                </li>
                                <li><a href="ui_timeline.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Timeline</a>
                                </li>
                                <li><a href="ui_timeline_horizontal.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Horizontal
                                        Timeline</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="icon-Commit"><span class="path1"></span><span
                                        class="path2"></span></i>Components
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="component_bootstrap_switch.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Bootstrap
                                        Switch</a></li>
                                <li><a href="component_date_paginator.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Date
                                        Paginator</a></li>
                                <li><a href="component_media_advanced.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Advanced
                                        Medias</a></li>
                                <li><a href="component_rangeslider.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Range
                                        Slider</a></li>
                                <li><a href="component_rating.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Ratings</a>
                                </li>
                                <li><a href="component_animations.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Animations</a>
                                </li>
                                <li><a href="extension_fullscreen.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Fullscreen</a>
                                </li>
                                <li><a href="extension_pace.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Pace</a>
                                </li>
                                <li><a href="component_nestable.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Nestable</a>
                                </li>
                                <li><a href="component_portlet_draggable.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Draggable
                                        Portlets</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i data-feather="pie-chart"></i>
                        <span>Forms & Charts</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="treeview">
                            <a href="#">
                                <i class="icon-Commit"><span class="path1"></span><span
                                        class="path2"></span></i>Forms
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="forms_advanced.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Form
                                        Elements</a></li>
                                <li><a href="forms_general.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Form
                                        Layout</a></li>
                                <li><a href="forms_wizard.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Form
                                        Wizard</a></li>
                                <li><a href="forms_validation.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Form
                                        Validation</a></li>
                                <li><a href="forms_mask.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Formatter</a>
                                </li>
                                <li><a href="forms_xeditable.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Xeditable
                                        Editor</a></li>
                                <li><a href="forms_dropzone.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Dropzone</a>
                                </li>
                                <li><a href="forms_code_editor.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Code
                                        Editor</a></li>
                                <li><a href="forms_editors.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Editor</a>
                                </li>
                                <li><a href="forms_editor_markdown.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Markdown</a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="icon-Commit"><span class="path1"></span><span
                                        class="path2"></span></i>Charts
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <a href="#">
                                        <i class="icon-Commit"><span class="path1"></span><span
                                                class="path2"></span></i>Basic Charts
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="charts_chartjs.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span
                                                        class="path2"></span></i>ChartJS</a></li>
                                        <li><a href="charts_flot.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>Flot</a>
                                        </li>
                                        <li><a href="charts_inline.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>Inline
                                                charts</a></li>
                                        <li><a href="charts_morris.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span
                                                        class="path2"></span></i>Morris</a></li>
                                        <li><a href="charts_peity.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span
                                                        class="path2"></span></i>Peity</a></li>
                                        <li><a href="charts_chartist.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span
                                                        class="path2"></span></i>Chartist</a></li>
                                    </ul>
                                </li>
                                <li><a href="charts_apex.html"><i class="icon-Commit"><span
                                                class="path1"></span><span class="path2"></span></i>Apex
                                        Chart</a></li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="icon-Commit"><span class="path1"></span><span
                                                class="path2"></span></i>C3 Charts
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="charts_c3_axis.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>Axis
                                                Chart</a></li>
                                        <li><a href="charts_c3_bar.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>Bar
                                                Chart</a></li>
                                        <li><a href="charts_c3_data.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>Data
                                                Chart</a></li>
                                        <li><a href="charts_c3_line.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>Line
                                                Chart</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="icon-Commit"><span class="path1"></span><span
                                                class="path2"></span></i>eCharts
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="charts_echarts_basic.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>Basic
                                                Charts</a></li>
                                        <li><a href="charts_echarts_bar.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>Bar
                                                Chart</a></li>
                                        <li><a href="charts_echarts_pie_doughnut.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>Pie
                                                Chart</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i data-feather="grid"></i>
                        <span>Tables</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="tables_simple.html"><i class="icon-Commit"><span class="path1"></span><span
                                        class="path2"></span></i>Simple
                                tables</a></li>
                        <li><a href="tables_data.html"><i class="icon-Commit"><span class="path1"></span><span
                                        class="path2"></span></i>Data
                                tables</a></li>
                        <li><a href="tables_editable.html"><i class="icon-Commit"><span class="path1"></span><span
                                        class="path2"></span></i>Editable
                                Tables</a></li>
                        <li><a href="tables_color.html"><i class="icon-Commit"><span class="path1"></span><span
                                        class="path2"></span></i>Table
                                Color</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i data-feather="lock"></i>
                        <span>Authentication</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="auth_login.html" target="_blank" class="d-light"><i class="icon-Commit"><span
                                        class="path1"></span><span class="path2"></span></i>Login</a>
                            <a href="auth_login_dark.html" target="_blank" class="d-dark"><i
                                    class="icon-Commit"><span class="path1"></span><span
                                        class="path2"></span></i>Login</a>
                        </li>
                        <li>
                            <a href="auth_register.html" target="_blank" class="d-light"><i
                                    class="icon-Commit"><span class="path1"></span><span
                                        class="path2"></span></i>Register</a>
                            <a href="auth_register_dark.html" target="_blank" class="d-dark"><i
                                    class="icon-Commit"><span class="path1"></span><span
                                        class="path2"></span></i>Register</a>
                        </li>
                        <li>
                            <a href="auth_lockscreen.html" target="_blank" class="d-light"><i
                                    class="icon-Commit"><span class="path1"></span><span
                                        class="path2"></span></i>Lockscreen</a>
                            <a href="auth_lockscreen_dark.html" target="_blank" class="d-dark"><i
                                    class="icon-Commit"><span class="path1"></span><span
                                        class="path2"></span></i>Lockscreen</a>
                        </li>
                        <li>
                            <a href="auth_user_pass.html" target="_blank" class="d-light"><i
                                    class="icon-Commit"><span class="path1"></span><span
                                        class="path2"></span></i>Recover password</a>
                            <a href="auth_user_pass_dark.html" target="_blank" class="d-dark"><i
                                    class="icon-Commit"><span class="path1"></span><span
                                        class="path2"></span></i>Recover password</a>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i data-feather="alert-triangle"></i>
                        <span>Miscellaneous</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="error_404.html" target="_blank" class="d-light"><i class="icon-Commit"><span
                                        class="path1"></span><span class="path2"></span></i>Error 404</a>
                            <a href="error_404_dark.html" target="_blank" class="d-dark"><i
                                    class="icon-Commit"><span class="path1"></span><span
                                        class="path2"></span></i>Error 404</a>
                        </li>
                        <li>
                            <a href="error_500.html" target="_blank" class="d-light"><i class="icon-Commit"><span
                                        class="path1"></span><span class="path2"></span></i>Error 500</a>
                            <a href="error_500_dark.html" target="_blank" class="d-dark"><i
                                    class="icon-Commit"><span class="path1"></span><span
                                        class="path2"></span></i>Error 500</a>
                        </li>
                        <li>
                            <a href="error_maintenance.html" target="_blank" class="d-light"><i
                                    class="icon-Commit"><span class="path1"></span><span
                                        class="path2"></span></i>Maintenance</a>
                            <a href="error_maintenance_dark.html" target="_blank" class="d-dark"><i
                                    class="icon-Commit"><span class="path1"></span><span
                                        class="path2"></span></i>Maintenance</a>
                        </li>
                    </ul>
                </li>
                </ul>
            </div>
        </div>
    </section>
</aside>
