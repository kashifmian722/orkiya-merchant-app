import '/core/app_export.dart';
import 'package:merchant_app/presentation/select_country_screen/models/select_country_model.dart';

class SelectCountryController extends GetxController {
  Rx<SelectCountryModel> selectCountryModelObj = SelectCountryModel().obs;

  @override
  void onReady() {
    super.onReady();
    Future.delayed(const Duration(milliseconds: 10000), () {
      Get.toNamed(AppRoutes.dashboardScreen);
    });
  }

  @override
  void onClose() {
    super.onClose();
  }
}
