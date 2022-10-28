import 'package:get/get.dart';
import 'add_order_item_model.dart';

class AddOrderModel {
  RxList<AddOrderItemModel> addOrderItemList =
      RxList.filled(3, AddOrderItemModel());
}
