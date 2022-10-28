import '/core/app_export.dart';
import 'package:merchant_app/presentation/app_drawer_draweritem/models/app_drawer_model.dart';

class AppDrawerController extends GetxController {
  Rx<AppDrawerModel> appDrawerModelObj = AppDrawerModel().obs;

  @override
  void onReady() {
    super.onReady();
  }

  @override
  void onClose() {
    super.onClose();
  }
}
