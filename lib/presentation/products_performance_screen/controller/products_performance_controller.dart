import '/core/app_export.dart';
import 'package:merchant_app/presentation/products_performance_screen/models/products_performance_model.dart';

class ProductsPerformanceController extends GetxController {
  Rx<ProductsPerformanceModel> productsPerformanceModelObj =
      ProductsPerformanceModel().obs;

  @override
  void onReady() {
    super.onReady();
  }

  @override
  void onClose() {
    super.onClose();
  }
}
