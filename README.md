# Laravel 與Jquery結合快速產生實用DataTable的筆記
筆記中的程式已經預先安裝好 Laravel DataTables的工具
table需要的資料表與資料分別都在migration 跟seed 裡面
run完會產生一百筆的假資料
### 優點
對於資料量大的資料表可以輕鬆完成分頁、查詢、全選及一頁顯示資料筆數設定等功能
對於需要負責全端的案子可以讓開發更迅速質量更好。

### Installation
https://yajrabox.com/docs/laravel-datatables/master
照著文檔將工具安裝完成之後在controller中引入DataTable就能使用將我們的資料轉為jquery DataTable能接收的格式
### Use
```
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTable; //引入dataTable
class DataTableController extends Controller
{
    public function dataTableView()
    {
    		return view('data');
    }
    public function dataTableData()
    {
    	$data=\App\DataTable::all();
    	 return datatables($data)->toJson();
    }
}
```
資料處理好之後就是讓前端的table使用我們資料的部分
```
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
```
引入dataTable需要的Script之後將JSON的欄位對應table的欄位即可
```
$(document).ready(function() {
   $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "dataTableData",//API Route
            "columns": [
            //行數對應JSON欄位個數與名稱
            { "data": "id" },
            { "data": "name" },
            { "data": "phone" },
            { "data": "address" },
            { "data": "birthday" },
            { "data": "created_at" },
            { "data": "updated_at" }
        ],
    } );

});
```
