import '../controller/order_by_shipping_method_controller.dart';
import 'package:get/get.dart';

class OrderByShippingMethodBinding extends Bindings {
  @override
  void dependencies() {
    Get.lazyPut(() => OrderByShippingMethodController());
  }
}
