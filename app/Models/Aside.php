<?php

namespace App\Models;

class Aside
{
  public static function setNavigationSidebar(): array
  {
    return [
      [
        'role' => [
          'name' => 'MAIN NAVIGATION'
        ],
        'data' => [
          // [
          //   'name' => 'ภาพรวม',
          //   'active_name' => "admin/dashboard*",
          //   'url' => route('admin.dashboard.index'),
          //   'webfont_icon' => '<i class="app-menu__icon fas fa-dashboard"></i>'
          // ],
          [
            'name' => 'สินค้า',
            'active_name' => "admin/products*",
            'url' => route('admin.products.index'),
            'webfont_icon' => '<i class="app-menu__icon fab fa-product-hunt"></i>'
          ],
        ]
      ],
    ];
  }

  /**
   * @param bool $expanded
   *
   * @return array
   */
  public static function getNavigationSidebar(bool $expanded = false): array
  {
    $response = [];
    foreach (self::setNavigationSidebar() as $role_index => $role) {
      if (!$expanded) {
        if (isset($role['data']) && !empty($role['data'])) {
          foreach ($role['data'] as $parent_index => $parent) {
            $role['data'][$parent_index] = $parent;
          }
        }
      }

      $response[$role_index] = $role;
    }

    return $response;
  }
}
