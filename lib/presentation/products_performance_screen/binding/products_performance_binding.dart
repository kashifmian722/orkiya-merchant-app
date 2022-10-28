import '../controller/products_performance_controller.dart';
import 'package:get/get.dart';

class ProductsPerformanceBinding extends Bindings {
  @override
  void dependencies() {
    Get.lazyPut(() => ProductsPerformanceController());
  }
}
