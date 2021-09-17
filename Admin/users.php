<?php include "header.php"; ?>

<div class="container-fluid">
    <div class="row">
        <?php include "sidebar.php"; ?>

        <div class="col-md-9 ps-sm-4">
            <h2 class="admin_heading_m mt-4">All Users</h2>

            <div class="user_wrapper mt-4">
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>User Name</th>
                            <th>Mobile</th>
                            <th>City</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Asad Ullah</td>
                            <td>asadb4998@gmail.com</td>
                            <td>0989993933</td>
                            <td>Karachi</td>
                            <td class="btn_space"><button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button><button class="btn btn-primary btn-sm">block</button><button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button></td>
                        </tr>
                        <tr>
                            <td>Asad Ullah</td>
                            <td>asadb4998@gmail.com</td>
                            <td>0989993933</td>
                            <td>Karachi</td>
                            <td class="btn_space"><button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button><button class="btn btn-primary btn-sm">block</button><button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button></td>
                        </tr>
                        <tr>
                            <td>Asad Ullah</td>
                            <td>asadb4998@gmail.com</td>
                            <td>0989993933</td>
                            <td>Karachi</td>
                            <td class="btn_space"><button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button><button class="btn btn-primary btn-sm">block</button><button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button></td>
                        </tr>
                        <tr>
                            <td>Asad Ullah</td>
                            <td>asadb4998@gmail.com</td>
                            <td>0989993933</td>
                            <td>Karachi</td>
                            <td class="btn_space"><button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button><button class="btn btn-primary btn-sm">block</button><button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button></td>
                        </tr>
                        <tr>
                            <td>Asad Ullah</td>
                            <td>asadb4998@gmail.com</td>
                            <td>0989993933</td>
                            <td>Karachi</td>
                            <td class="btn_space"><button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button><button class="btn btn-primary btn-sm">block</button><button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button></td>
                        </tr>
                        <tr>
                            <td>Asad Ullah</td>
                            <td>asadb4998@gmail.com</td>
                            <td>0989993933</td>
                            <td>Karachi</td>
                            <td class="btn_space"><button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button><button class="btn btn-primary btn-sm">block</button><button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <div class="nav_wraper d-flex justify-content-center mt-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <div class="hover_bubble"></div>
                                <span aria-hidden="true">Pre</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1 <div class="hover_bubble"></div></a></li>
                        <li class="page-item"><a class="page-link" href="#">2 <div class="hover_bubble"></div></a></li>
                        <li class="page-item"><a class="page-link" href="#">3 <div class="hover_bubble"></div></a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <div class="hover_bubble"></div>
                                <span aria-hidden="true">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>