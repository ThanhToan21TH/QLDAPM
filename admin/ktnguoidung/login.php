<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	
	<title>Đăng nhập - Diamond Shop</title>

	<link href="../inc/css/app.css" rel="stylesheet">
	<script src="../inc/js/app.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Xin chào!</h1>
							<p class="lead">
								Vui lòng đăng nhập để tiếp tục
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									<form action="index.php" method="post">
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" type="email" name="txtemail" placeholder="Nhập email" />
										</div>
										<div class="mb-3">
											<label class="form-label">Mật khẩu</label>
											<input class="form-control form-control-lg" type="password" name="txtmatkhau" placeholder="Nhập mật khẩu" />
										</div>
								<!--		<div>
											<div class="form-check align-items-center">
												<input id="customControlInline" type="checkbox" class="form-check-input" value="remember-me" name="remember-me" checked>
												<label class="form-check-label text-small" for="customControlInline">Remember me</label>
											</div>
										</div>
								-->		<div class="d-grid gap-2 my-3">
											<input type="hidden" name="action" value="xldangnhap">
											<input type="submit" class="btn btn-lg btn-primary" value="Đăng nhập">
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="text-center mb-3">
							Chưa có tài khoản? <a href="#">Đăng ký</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

</body>

</html>