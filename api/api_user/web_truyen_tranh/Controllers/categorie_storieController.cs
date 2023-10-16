using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using BusinessLogicLayer;
using DataModel;
using DataAccessLayer;

namespace web_truyen_tranh.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class categorie_storieController : ControllerBase
    {
        private Icategorie_storieBusiness _categorieBusiness;
        public categorie_storieController(Icategorie_storieBusiness categorie_storieBusiness)
        {
            _categorieBusiness = categorie_storieBusiness;
        }
        [Route("get_by-id/{id}")]
        [HttpGet]
        public categorie_storieModel GetDatabyid(string id)
        {
            return _categorieBusiness.GetDatabyid(id);
        }
        [Route("create-categorie_storie")]
        [HttpPost]
        public categorie_storieModel CreateItem([FromBody] categorie_storieModel model)
        {
            _categorieBusiness.Create(model);
            return model;
        }
        [Route("update-categories_storie")]
        [HttpPost]
        public categorie_storieModel UpdateItem([FromBody] categorie_storieModel model)
        {
            _categorieBusiness.Update(model);
            return model;
        }
        [Route("delete-categories_storie")]
        [HttpPost]
        public IActionResult DeleteItem(string id)
        {
            _categorieBusiness.Delete(id);
            return Ok(new { messange = "xóa thành công" });
        }
    }
}
