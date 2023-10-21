using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using BusinessLogicLayer;
using DataModel;
using DataAccessLayer;

namespace web_truyen_tranh.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class categoriesController : ControllerBase
    {
        private IcategoriesBusiness _categoriesBusiness;
        public categoriesController(IcategoriesBusiness categoriesBusiness)
        {
            _categoriesBusiness = categoriesBusiness;
        }
        [Route("get_list_categories")]
        [HttpGet]
        public List<categoriesModel> GetData()
        {
            return _categoriesBusiness.GetData();
        }
        [Route("get_by-name/{name}")]
        [HttpGet]
        public categoriesModel GetDatabyName(string name)
        {
            return _categoriesBusiness.GetDatabyName(name);
        }
       
        [Route("create-categories")]
        [HttpPost]
        public categoriesModel CreateItem([FromBody] categoriesModel model)
        {
            _categoriesBusiness.Create(model);
            return model;
        }
        [Route("update-categories")]
        [HttpPost]
        public categoriesModel UpdateItem([FromBody] categoriesModel model)
        {
            _categoriesBusiness.Update(model);
            return model;
        }
        [Route("delete-categories")]
        [HttpPost]
        public IActionResult DeleteItem(string id)
        {
            _categoriesBusiness.Delete(id);
            return Ok(new { messange = "xóa thành công" });
        }
    }
}
