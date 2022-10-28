import 'package:get/get.dart';
import 'products_item_model.dart';

class ProductsModel {
  RxList<ProductsItemModel> productsItemList =
      RxList.filled(6, ProductsItemModel());
}
