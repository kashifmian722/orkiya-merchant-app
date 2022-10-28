import '/core/app_export.dart';
import 'package:merchant_app/presentation/order_by_shipping_method_screen/models/order_by_shipping_method_model.dart';

class OrderByShippingMethodController extends GetxController {
  Rx<OrderByShippingMethodModel> orderByShippingMethodModelObj =
      OrderByShippingMethodModel().obs;

  @override
  void onReady() {
    super.onReady();
  }

  @override
  void onClose() {
    super.onClose();
  }
}
