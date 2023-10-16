using BusinessLogicLayer;
using DataAccessLayer;
using DataModel;
using Microsoft.AspNetCore.Authentication.JwtBearer;
using Microsoft.IdentityModel.Tokens;
using System.Text;

var builder = WebApplication.CreateBuilder(args);
builder.Services.AddCors(options =>
{
    options.AddPolicy("AllowAll", builder => builder.AllowAnyOrigin().AllowAnyMethod().AllowAnyHeader());
});
// Add services to the container.
builder.Services.AddTransient<IDatabaseHelper, DatabaseHelper>();
builder.Services.AddTransient<IstoriesRepository, storiesRepository>();
builder.Services.AddTransient<IstoriesBusiness, storiesBusiness>();

builder.Services.AddTransient<IcategoriesRepository, categoriesRopository>();
builder.Services.AddTransient<IcategoriesBusiness, categoriesBusiness>();

builder.Services.AddTransient<Icategorie_storieRepository, categorie_storieRepository>();
builder.Services.AddTransient<Icategorie_storieBusiness, categorie_storieBusiness>();


builder.Services.AddTransient<IchapterRepository, chapterRepository>();
builder.Services.AddTransient<IchapterBusiness, chapterBusiness>();

builder.Services.AddTransient<IstarsRepository, starsRepository>();
builder.Services.AddTransient<IstarsBusiness, starsBusiness>();

builder.Services.AddTransient<Inew_storiesRepository, new_storiesRepository>();
builder.Services.AddTransient<Inew_storiesBusiness, new_storiesBusiness>();

// configure strongly typed settings objects
IConfiguration configuration = builder.Configuration;
var appSettingsSection = configuration.GetSection("AppSettings");

builder.Services.AddControllers();
// Learn more about configuring Swagger/OpenAPI at https://aka.ms/aspnetcore/swashbuckle
builder.Services.AddEndpointsApiExplorer();
builder.Services.AddSwaggerGen();

var app = builder.Build();

// Configure the HTTP request pipeline.
if (app.Environment.IsDevelopment())
{
    app.UseSwagger();
    app.UseSwaggerUI();
}
app.UseCors("AllowAll");

app.UseHttpsRedirection();

app.UseAuthorization();

app.MapControllers();

app.Run();


