<?php

use App\Models\Category;
use App\Models\Color;
use App\Models\Group;
use App\Models\Setting;
use App\Models\Size;
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
function categoryMegaMenu()
{
  return Category::getParentAndChildrenCategories();
}
function getThumb($originalPath)
{
  // Tách đường dẫn thành thư mục và tên file
  $pathInfo = pathinfo($originalPath);

  // Tạo đường dẫn mới với thư mục 'thumbs'
  $newPath = $pathInfo['dirname'] . '/thumbs/' . $pathInfo['basename'];

  return $newPath;
}

function getAllColors()
{
  return Color::orderBy('created_at', 'desc')->get();
}
function getAllSizes()
{
  return Size::orderBy('created_at', 'desc')->get();
}
function menuSelect($menu, $parent = 0, $level = 0)
{
  if ($menu->count() > 0) {
    $result = [];
    foreach ($menu as $key => $category) {
      if ($category['category_id'] == $parent) {
        $category['level'] = $level;
        $result[] = $category;
        $child = menuSelect($menu, $category['id'], $level + 1);
        $result = array_merge($result, $child);
      }
    }
    return $result;
  }
}
function information()
{
  return Setting::where('id', 1)->first();
}
