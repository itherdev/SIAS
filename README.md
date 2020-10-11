<h1 align="center">SIAS</h1>
<h3>A simple SIAS Application builth with Laravel Web Framework</h3>

[![Stisla Preview](https://github.com/itherdevs/SIAS/blob/master/public/assets/img/preview.png)](https://github.com/itherdevs/SIAS)

## Table of contents

- [Installation](#installation)
- [Users Account](#user-account)
- [List User Type](#list-user-type)
- [Provide access to users based on user type](#provide-access-to-users-based-on-user-type)
- [Progress Check List](#progress-checklist)

## Installation
- [Download the latest release](https://github.com/ahanafi/codepos-app/archive/master.zip).
or clone the repo :
```bash
git clone https://github.com/ahanafi/codepos-app.git
```

And don`t forget to install the package dependencies with command :
```bash
composer install
```

## User Account
<table>
    <tr>
        <td>No.</td>
        <td>E-mail</td>
        <td>Password</td>
        <td>Level</td>
    </tr>
    <tr>
        <td>1</td>
        <td>ahanafi@mail.com</td>
        <td>123456</td>
        <td>Super User</td>
    </tr>
    <tr>
        <td>2</td>
        <td>yahya@gmail.com</td>
        <td>123456</td>
        <td>Admin Supplier</td>
    </tr>
    <tr>
        <td>3</td>
        <td>gagan@gmail.com</td>
        <td>123456</td>
        <td>Admin Keuangan</td>
    </tr>
</table>

## List User Type
<table>
    <tr>
        <td>User Code</td>
        <td>User Key</td>
        <td>Name User Type</td>
        <td>Descriptions</td>
    </tr>
    <tr>
        <td>1</td>
        <td>SUPER_ADMIN</td>
        <td>Super Admin</td>
        <td>Has full access in the app</td>
    </tr>
    <tr>
        <td>2</td>
        <td>ADMIN_TOKO</td>
        <td>Admin Toko</td>
        <td>Limited Access</td>
    </tr>
    <tr>
        <td>3</td>
        <td>ADMIN_KEUANGAN</td>
        <td>Admin Keuangan</td>
        <td>Limited Access</td>
    </tr>
    <tr>
        <td>4</td>
        <td>ADMIN_SUPPLIER</td>
        <td>Admin Supplier</td>
        <td>Limited Access</td>
    </tr>
</table>

## Provide access to users based on user type

- Use the helper **`provideAccessTo($userCodeList)`** into the method.
- If the route can accessed by all of users, you can do by this `provideAccessTo('all')` or just remove `provideAccessTo()` in the method.
- Example : <br>
  Route **`nota-penjualan/status`** only can accessed by **SUPER_ADMIN, ADMIN_TOKO, ADMIN_KEUANGAN**, so call method **`provideAccessTo('1|2|3')`** in Controller **`NotaPenjualan`** method **`status`**, like this : <br>
```php
class NotaPenjualan extends CI_Controller {

	public function status()
	{
		// Give access to SUPER_ADMIN, ADMIN_TOKO, ADMIN_KEUANGAN
		provideAccessTo('1|2|3');

		// Give access only to SUPER_ADMIN
		provideAccessTo('1');

		// Give to all of Users or you can remove the helper from the method
		provideAccessTo('all');

		$nota_penjualan = $this->Notapenjualan->all();

		$data = [
			'title' => 'Data Nota Penjualan',
			'nota_penjualan' => $nota_penjualan,
			'no' => 1
		];
		$this->main_lib->getTemplate('nota-penjualan/form-status', $data);
	}
}
 ```  
- Method `provideAccessTo($userListCode)` has defined in [`application/helpers/my_helper.php`](https://github.com/ahanafi/codepos-app/blob/master/application/helpers/my_helper.php#L109)

## Progress Checklist
##### Please give the check, if there are updated progress.

- Dashboard :heavy_check_mark:
- Pelanggan :heavy_check_mark:
	- Daftar Pelanggan :heavy_check_mark:
	- Piutang Pelanggan :heavy_check_mark:

- Supplier :heavy_check_mark:
	- Daftar Supplier :heavy_check_mark:
	- Hutang ke Supplier :heavy_check_mark:

- Nota Penjualan :heavy_check_mark:
	- Tambah Nota Penjualan :heavy_check_mark:
	- Daftar Nota Penjualan :heavy_check_mark:
	- Status Nota Penjualan :heavy_check_mark:

- Nota Supplier :heavy_check_mark:
	- Tambah Nota Supplier :heavy_check_mark:
	- Daftar Nota Supplier :heavy_check_mark:
	- Status Nota Supplier :heavy_check_mark:

- Retur Penjualan :heavy_check_mark:
	- Tambah Retur Penjualan :heavy_check_mark:
	- Daftar Retur Penjualan :heavy_check_mark:
	- Status Retur Penjualan :heavy_check_mark:

- Retur Supplier :heavy_check_mark:
	- Tambah Retur Supplier :heavy_check_mark:
	- Daftar Retur Supplier :heavy_check_mark:
	- Status Retur Supplier :heavy_check_mark:

- Biaya :heavy_check_mark:
	- Tambah Biaya :heavy_check_mark:
	- Daftar Biaya :heavy_check_mark:
	- Status Biaya :heavy_check_mark:

- Pembayaran Penjualan :heavy_check_mark:
	- Daftar Bank :heavy_check_mark:
	- Daftar Keterangan :heavy_check_mark:
	- Daftar Jenis Bayar :heavy_check_mark:
	- Pembayaran Piutang :heavy_check_mark:
	- Daftar Pembayaran Piutang :heavy_check_mark:
	- Status Pembayaran Piutang :heavy_check_mark:

- Pembayaran ke Supplier :heavy_check_mark:
	- Pembayaran Hutang :heavy_check_mark:
	- Daftar Pembayaran Hutang :heavy_check_mark:
	- Status Pembayaran Hutang :heavy_check_mark:

- User :heavy_check_mark:
- Backup & Restore Data :heavy_check_mark:
- Pengaturan :heavy_check_mark:
	- Profil Perusahaan :heavy_check_mark:
	- Pengaturan Aplikasi :heavy_check_mark:
- Logout :heavy_check_mark:
