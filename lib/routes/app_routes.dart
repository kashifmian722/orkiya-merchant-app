import 'package:merchant_app/presentation/select_country_screen/select_country_screen.dart';
import 'package:merchant_app/presentation/select_country_screen/binding/select_country_binding.dart';
import 'package:merchant_app/presentation/login_page_screen/login_page_screen.dart';
import 'package:merchant_app/presentation/login_page_screen/binding/login_page_binding.dart';
import 'package:merchant_app/presentation/dashboard_screen/dashboard_screen.dart';
import 'package:merchant_app/presentation/dashboard_screen/binding/dashboard_binding.dart';
import 'package:merchant_app/presentation/products_screen/products_screen.dart';
import 'package:merchant_app/presentation/products_screen/binding/products_binding.dart';
import 'package:merchant_app/presentation/add_product_screen/add_product_screen.dart';
import 'package:merchant_app/presentation/add_product_screen/binding/add_product_binding.dart';
import 'package:merchant_app/presentation/orders_screen/orders_screen.dart';
import 'package:merchant_app/presentation/orders_screen/binding/orders_binding.dart';
import 'package:merchant_app/presentation/order_screen/order_screen.dart';
import 'package:merchant_app/presentation/order_screen/binding/order_binding.dart';
import 'package:merchant_app/presentation/order_by_shipping_method_screen/order_by_shipping_method_screen.dart';
import 'package:merchant_app/presentation/order_by_shipping_method_screen/binding/order_by_shipping_method_binding.dart';
import 'package:merchant_app/presentation/products_performance_screen/products_performance_screen.dart';
import 'package:merchant_app/presentation/products_performance_screen/binding/products_performance_binding.dart';
import 'package:merchant_app/presentation/sign_up_page_screen/sign_up_page_screen.dart';
import 'package:merchant_app/presentation/sign_up_page_screen/binding/sign_up_page_binding.dart';
import 'package:merchant_app/presentation/add_order_screen/add_order_screen.dart';
import 'package:merchant_app/presentation/add_order_screen/binding/add_order_binding.dart';
import 'package:merchant_app/presentation/app_navigation_screen/app_navigation_screen.dart';
import 'package:merchant_app/presentation/app_navigation_screen/binding/app_navigation_binding.dart';
import 'package:get/get.dart';

class AppRoutes {
  static String selectCountryScreen = '/select_country_screen';

  static String loginPageScreen = '/login_page_screen';

  static String dashboardScreen = '/dashboard_screen';

  static String productsScreen = '/products_screen';

  static String addProductScreen = '/add_product_screen';

  static String ordersScreen = '/orders_screen';

  static String orderScreen = '/order_screen';

  static String orderByShippingMethodScreen =
      '/order_by_shipping_method_screen';

  static String productsPerformanceScreen = '/products_performance_screen';

  static String signUpPageScreen = '/sign_up_page_screen';

  static String addOrderScreen = '/add_order_screen';

  static String appNavigationScreen = '/app_navigation_screen';

  static String initialRoute = '/initialRoute';

  static List<GetPage> pages = [
    GetPage(
      name: selectCountryScreen,
      page: () => SelectCountryScreen(),
      bindings: [
        SelectCountryBinding(),
      ],
    ),
    GetPage(
      name: loginPageScreen,
      page: () => LoginPageScreen(),
      bindings: [
        LoginPageBinding(),
      ],
    ),
    GetPage(
      name: dashboardScreen,
      page: () => DashboardScreen(),
      bindings: [
        DashboardBinding(),
      ],
    ),
    GetPage(
      name: productsScreen,
      page: () => ProductsScreen(),
      bindings: [
        ProductsBinding(),
      ],
    ),
    GetPage(
      name: addProductScreen,
      page: () => AddProductScreen(),
      bindings: [
        AddProductBinding(),
      ],
    ),
    GetPage(
      name: ordersScreen,
      page: () => OrdersScreen(),
      bindings: [
        OrdersBinding(),
      ],
    ),
    GetPage(
      name: orderScreen,
      page: () => OrderScreen(),
      bindings: [
        OrderBinding(),
      ],
    ),
    GetPage(
      name: orderByShippingMethodScreen,
      page: () => OrderByShippingMethodScreen(),
      bindings: [
        OrderByShippingMethodBinding(),
      ],
    ),
    GetPage(
      name: productsPerformanceScreen,
      page: () => ProductsPerformanceScreen(),
      bindings: [
        ProductsPerformanceBinding(),
      ],
    ),
    GetPage(
      name: signUpPageScreen,
      page: () => SignUpPageScreen(),
      bindings: [
        SignUpPageBinding(),
      ],
    ),
    GetPage(
      name: addOrderScreen,
      page: () => AddOrderScreen(),
      bindings: [
        AddOrderBinding(),
      ],
    ),
    GetPage(
      name: appNavigationScreen,
      page: () => AppNavigationScreen(),
      bindings: [
        AppNavigationBinding(),
      ],
    ),
    GetPage(
      name: initialRoute,
      page: () => SelectCountryScreen(),
      bindings: [
        SelectCountryBinding(),
      ],
    )
  ];
}
