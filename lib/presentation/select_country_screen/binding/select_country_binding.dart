import '../controller/select_country_controller.dart';
import 'package:get/get.dart';

class SelectCountryBinding extends Bindings {
  @override
  void dependencies() {
    Get.lazyPut(() => SelectCountryController());
  }
}
