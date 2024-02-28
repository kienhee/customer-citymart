<?php

use App\Models\Category;
use App\Models\Group;
use Illuminate\Support\Facades\Auth;

function groups()
{
  if (Auth::user()->group_id == 0) {
    return Group::orderBy('created_at', 'desc')->get();
  } else {
    return Group::orderBy('created_at', 'desc')->where('id', '<>', 0)->get();
  }
}
function isRole($dataArr, $module, $role = 'view')
{
  if (!empty($dataArr)) {
    $roleArr = $dataArr[$module] ?? [];
    if (!empty($roleArr) && in_array($role, $roleArr)) {
      return true;
    }
  }
  return false;
}
function categoriesParent()
{
  return Category::where('category_id', 0)->orderBy('created_at', 'desc')->get();
}
function menuTreeCategory($menu, $parentId = 0)
{
  if ($menu->count() > 0) {
    foreach ($menu as $key => $category) {
      if ($category['category_id'] == $parentId) {
        echo '<li><a class="d-flex justify-content-between" href ="' . route('dashboard.categories.edit', $category['id']) . '" title="Click xem thêm"> <span>' . $category['name'] . '</span> </a>';
        echo '<ul >';
        echo menuTreeCategory($menu, $category['id']);
        echo '</ul>';
        echo '</li>';
        echo '</li>';
      }
    }
  }
}
function getAllCategories()
{
  return Category::orderBy('created_at', 'desc')->get();
}
function getThumb($originalPath)
{
  // Tách đường dẫn thành thư mục và tên file
  $pathInfo = pathinfo($originalPath);

  // Tạo đường dẫn mới với thư mục 'thumbs'
  $newPath = $pathInfo['dirname'] . '/thumbs/' . $pathInfo['basename'];

  return $newPath;
}
