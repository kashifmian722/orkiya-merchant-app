import '/core/app_export.dart';
import 'package:merchant_app/presentation/orders_screen/models/orders_model.dart';

class OrdersController extends GetxController {
  Rx<OrdersModel> ordersModelObj = OrdersModel().obs;

  @override
  void onReady() {
    super.onReady();
  }

  @override
  void onClose() {
    super.onClose();
  }
}
